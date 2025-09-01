<?php

namespace App\Controller;

use App\Entity\Lead;
use App\Form\LeadType;
use App\Form\LeadExcelType;
use App\Repository\LeadRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\File;
use App\Repository\UsersRepository;

#[Route('/lead')]
class LeadController extends AbstractController
{
    // #[Route('/', name: 'app_lead_index', methods: ['GET'])]
    // public function index(LeadRepository $leadRepository): Response
    // {
    //     return $this->render('lead/index.html.twig', [
    //         'leads' => $leadRepository->findAll(),
    //     ]);
    // }

    #[Route('/', name: 'app_lead_index', methods: ['GET'])]
public function index(LeadRepository $leadRepository, UsersRepository $userRepository): Response
{
    $users = $userRepository->findUsersWithRoleUserOnly();
    $leads = $leadRepository->findLeadsWithNullStatus();

    return $this->render('lead/index.html.twig', [
        'leads' => $leads,
        'users' => $users,
    ]);
}



    #[Route('/leads', name: 'app_lead_index_leads', methods: ['GET'])]
    public function leads(LeadRepository $leadRepository, UsersRepository $userRepository): Response
    {
        $users = $userRepository->findUsersWithRoleUserOnly();
        $leads = $leadRepository->findLeadsWithNullStatus();

        return $this->render('lead/leads.html.twig', [
            'leads' => $leads,
            'users' => $users,
            'technicien' => $userRepository->findByRole('ROLE_USER_TECHNICIEN'), // <- IMPORTANT
        ]);


    }




#[Route('/historique', name: 'app_lead_index_historique', methods: ['GET'])]
public function historique(LeadRepository $leadRepository, UsersRepository $userRepository): Response
{
    $users = $userRepository->findUsersWithRoleUserOnly();
    $leads = $leadRepository->findLeadsWithHistoricalStatus();

    return $this->render('lead/historique.html.twig', [
        'leads' => $leads,
        'users' => $users,
    ]);
}







    // #[Route('/user', name: 'app_lead_index_user', methods: ['GET'])]
    // #[IsGranted('ROLE_USER')]
    // public function user(LeadRepository $leadRepository, UsersRepository $userRepository): Response
    // {
    //     // Récupérer l'utilisateur connecté
    //     $users = $this->getUser();

    //     // Vérifier si l'utilisateur est authentifié
    //     if (!$users) {
    //         throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
    //     }

    //     // Filtrer les leads en fonction de l'utilisateur connecté
    //     $leads = $leadRepository->findBy(['users' => $users]);

    //     // Récupérer les utilisateurs avec le rôle 'ROLE_USER'
    //     $users = $userRepository->findUsersWithRoleUserOnly();

    //     return $this->render('lead/user.html.twig', [
    //         'leads' => $leads,
    //         'users' => $users,
    //     ]);
    // }

    #[Route('/user', name: 'app_lead_index_user', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function user(LeadRepository $leadRepository, UsersRepository $userRepository): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Vérifier si l'utilisateur est authentifié
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        // Filtrer les leads en fonction de l'utilisateur connecté et du statut null
        $leads = $leadRepository->findLeadsByUserAndNullStatus($user);

        // Récupérer les utilisateurs avec le rôle 'ROLE_USER'
        $users = $userRepository->findUsersWithRoleUserOnly();

        return $this->render('lead/user.html.twig', [
            'leads' => $leads,
            'users' => $users,
        ]);
    }

    #[Route('/historique/user', name: 'app_lead_index_historique_user', methods: ['GET'])]
    public function historique_user(LeadRepository $leadRepository, UsersRepository $userRepository): Response
    {
         // Récupérer l'utilisateur connecté
         $user = $this->getUser();
         if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }
        $leads = $leadRepository->findLeadsByUserAndHistoriqueStatus($user);
             // Récupérer les utilisateurs avec le rôle 'ROLE_USER'
            $users = $userRepository->findUsersWithRoleUserOnly();
    
        return $this->render('lead/historique_user.html.twig', [
            'leads' => $leads,
            'users' => $users,
        ]);
    }








    #[Route('/lead/change-status-all', name: 'app_lead_change_status_all', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function changeStatusAll(Request $request, LeadRepository $leadRepository, EntityManagerInterface $entityManager): Response
    {
        $csrfToken = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('change_status_all', $csrfToken)) {
            return $this->redirectToRoute('app_lead_index');
        }

        $leads = $leadRepository->findAll();
        foreach ($leads as $lead) {
            $lead->setStatus('historique'); // Remplacez 'new status' par le statut souhaité
        }
        $entityManager->flush();

        return $this->redirectToRoute('app_lead_index');
    }


    #[Route('/upload', name: 'upload_excel', methods: ['GET', 'POST'])]
    public function upload(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(LeadExcelType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $excelFile */
            $excelFile = $form->get('excelFile')->getData();

            if ($excelFile) {
                $originalFilename = pathinfo($excelFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$excelFile->guessExtension();

                try {
                    // Move the file to the directory where excel files are stored
                    $excelFile->move(
                        $this->getParameter('excel_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // handle exception if something happens during file upload
                }

                // Load the Excel file
                $spreadsheet = IOFactory::load($this->getParameter('excel_directory').'/'.$newFilename);
                $sheetData = $spreadsheet->getActiveSheet()->toArray();

                // Iterate through rows starting from the 8th row (index 7)
                for ($i = 7; $i < count($sheetData); $i++) {
                    $row = $sheetData[$i];

                    // Extract columns A to F
                    $idEnregistrement = $row[0] ?? null;
                    $heureCreation = isset($row[1]) && !empty($row[1]) ? \DateTimeImmutable::createFromFormat('d/m/Y H:i', $row[1]) : null;
                    $nomComplet = $row[2] ?? null;
                    $telephone = isset($row[3]) && !empty($row[3]) ? (int) $row[3] : null;
                    $chauffage = $row[4] ?? null;
                    $departement = isset($row[5]) && !empty($row[5]) ? (int) $row[5] : null;

                    // Create a new Lead entity and set its properties
                    $lead = new Lead();
                    $lead->setIdEnregistrement($idEnregistrement);
                    $lead->setHeureCreation($heureCreation);
                    $lead->setNomComplet($nomComplet);
                    $lead->setTelephone($telephone);
                    $lead->setChauffage($chauffage);
                    $lead->setDepartement($departement);

                    // Persist the entity
                    $entityManager->persist($lead);
                }

                // Flush all persisted entities to database
                $entityManager->flush();

                return $this->redirectToRoute('app_lead_index');
            }
        }

        return $this->render('lead/upload.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}/edit-inline', name: 'app_lead_edit_inline', methods: ['POST'])]
    public function editInline(Request $request, Lead $lead, EntityManagerInterface $entityManager, UsersRepository $userRepository): Response
    {
    $data = json_decode($request->getContent(), true);
    $field = $data['field'] ?? null;
    $value = $data['value'] ?? null;

    if ($field && $value) {
        switch ($field) {
            case 'idEnregistrement':
                $lead->setIdEnregistrement($value);
                break;
            case 'heureCreation':
                $heureCreation = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $value);
                if ($heureCreation) {
                    $lead->setHeureCreation($heureCreation);
                }
                break;
            case 'nomComplet':
                $lead->setNomComplet($value);
                break;
            case 'telephone':
                $lead->setTelephone((int) $value);
                break;
            case 'chauffage':
                $lead->setChauffage($value);
                break;
            case 'departement':
                $lead->setDepartement((int) $value);
                break;
            case 'commentaire':
                $lead->setCommentaire($value);
                break;
                case 'telepro':
                    $user = $userRepository->find($value);
                    if ($user && in_array('ROLE_USER', $user->getRoles()) && !in_array('ROLE_ADMIN', $user->getRoles()) && count($user->getRoles()) === 1) {
                        $lead->setUsers($user);
                    } else {
                        return new Response('Invalid user', 400);
                    }
                    break;
            default:
                return new Response('Invalid field', 400);
        }
        $entityManager->flush();

        return new Response('Success', 200);
    }

    return new Response('Invalid data', 400);
}

#[Route('/{id}/edit-inline-user', name: 'app_lead_edit_inline_user', methods: ['POST'])]
public function editInlinUser(Request $request, Lead $lead, EntityManagerInterface $entityManager, UsersRepository $userRepository): Response
{
$data = json_decode($request->getContent(), true);
$field = $data['field'] ?? null;
$value = $data['value'] ?? null;

if ($field && $value) {
    switch ($field) {
        case 'idEnregistrement':
            $lead->setIdEnregistrement($value);
            break;
        case 'heureCreation':
            $heureCreation = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $value);
            if ($heureCreation) {
                $lead->setHeureCreation($heureCreation);
            }
            break;
        case 'nomComplet':
            $lead->setNomComplet($value);
            break;
        case 'telephone':
            $lead->setTelephone((int) $value);
            break;
        case 'chauffage':
            $lead->setChauffage($value);
            break;
        case 'departement':
            $lead->setDepartement((int) $value);
            break;
        case 'commentaire':
            $lead->setCommentaire($value);
            break;
        default:
            return new Response('Invalid field', 400);
    }
    $entityManager->flush();

    return new Response('Success', 200);
}

return new Response('Invalid data', 400);
}




    #[Route('/{id}/edit-inline-user-2', name: 'app_lead_edit_inline_user_2', methods: ['POST'])]
    public function editInlinUser2(Request $request, Lead $lead, EntityManagerInterface $entityManager, UsersRepository $userRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $field = $data['field'] ?? null;
        $value = $data['value'] ?? null;

        if ($field && $value) {
            switch ($field) {
                case 'idEnregistrement':
                    $lead->setIdEnregistrement($value);
                    break;
                case 'heureCreation':
                    $heureCreation = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $value);
                    if ($heureCreation) {
                        $lead->setHeureCreation($heureCreation);
                    }
                    break;
                case 'nomComplet':
                    $lead->setNomComplet($value);
                    break;
                case 'telephone':
                    $lead->setTelephone((int) $value);
                    break;
                case 'chauffage':
                    $lead->setChauffage($value);
                    break;
                case 'departement':
                    $lead->setDepartement((int) $value);
                    break;
                case 'commentaire':
                    $lead->setCommentaire($value);
                    break;
                case 'telepro':
                    $user = $userRepository->find($value);
                    if (
                        $user &&
                        in_array('ROLE_USER_TECHNICIEN', $user->getRoles()) && !in_array('ROLE_USER_COMMERCIAL', $user->getRoles()) &&
                        !in_array('ROLE_ADMIN', $user->getRoles()) && in_array('ROLE_USER', $user->getRoles())) {
                        $lead->setTechnicien($user);
                    } else {
                        return new Response('Invalid user', 400);
                    }
                    break;

//                    $lead->setTechnicien($value);
//                    break;
                default:
                    return new Response('Invalid field', 400);
            }
            $entityManager->flush();

            return new Response('Success', 200);
        }

        return new Response('Invalid data', 400);
    }







































#[Route('/{id}/edit-inline-historique', name: 'app_lead_edit_inline_historique', methods: ['POST'])]
public function editInlinHistorique(Request $request, Lead $lead, EntityManagerInterface $entityManager, UsersRepository $userRepository): Response
{
$data = json_decode($request->getContent(), true);
$field = $data['field'] ?? null;
$value = $data['value'] ?? null;

if ($field && $value) {
    switch ($field) {
        case 'idEnregistrement':
            $lead->setIdEnregistrement($value);
            break;
        case 'heureCreation':
            $heureCreation = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $value);
            if ($heureCreation) {
                $lead->setHeureCreation($heureCreation);
            }
            break;
        case 'nomComplet':
            $lead->setNomComplet($value);
            break;
        case 'telephone':
            $lead->setTelephone((int) $value);
            break;
        case 'chauffage':
            $lead->setChauffage($value);
            break;
        case 'departement':
            $lead->setDepartement((int) $value);
            break;
        case 'commentaire':
            $lead->setCommentaire($value);
            break;
        case 'telepro':
            $user = $userRepository->find($value);
            if ($user && in_array('ROLE_USER', $user->getRoles()) && !in_array('ROLE_ADMIN', $user->getRoles()) && count($user->getRoles()) === 1) {
                $lead->setUsers($user);
            } else {
                return new Response('Invalid user', 400);
            }
            break;
        default:
            return new Response('Invalid field', 400);
    }
    $entityManager->flush();

    return new Response('Success', 200);
}

return new Response('Invalid data', 400);
}














    #[Route('/new', name: 'app_lead_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $lead = new Lead();
        $form = $this->createForm(LeadType::class, $lead);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($lead);
            $entityManager->flush();

            return $this->redirectToRoute('app_lead_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lead/new.html.twig', [
            'lead' => $lead,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lead_show', methods: ['GET'])]
    public function show(Lead $lead): Response
    {
        return $this->render('lead/show.html.twig', [
            'lead' => $lead,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_lead_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lead $lead, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LeadType::class, $lead);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_lead_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lead/edit.html.twig', [
            'lead' => $lead,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lead_delete', methods: ['POST'])]
    public function delete(Request $request, Lead $lead, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lead->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($lead);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_lead_index', [], Response::HTTP_SEE_OTHER);
    }

  
    #[Route('/bulk-delete', name: 'app_lead_bulk_delete', methods: ['POST'])]
    public function bulkDelete(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lead->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($lead);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_lead_index', [], Response::HTTP_SEE_OTHER);

    }

    #[Route('/delete_total', name: 'app_lead_delete_total', methods: ['POST'])]
    public function delete_total(Request $request, LeadRepository $leadRepository, EntityManagerInterface $entityManager): Response
    {
        $leadId = $request->request->get('lead_id');

        if ($leadId && $this->isCsrfTokenValid('delete_selected', $request->request->get('_token'))) {
            $lead = $leadRepository->find($leadId);

            if ($lead) {
                $entityManager->remove($lead);
                $entityManager->flush();
            }
        }

        return $this->redirectToRoute('app_lead_index');
    }

    // #[Route('/delete-all', name: 'app_lead_delete_all', methods: ['POST'])]
    // public function deleteAll(Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     if ($this->isCsrfTokenValid('delete_all', $request->request->get('_token'))) {
    //         $connection = $entityManager->getConnection();
    //         $platform = $connection->getDatabasePlatform();
    //         $connection->executeStatement($platform->getTruncateTableSQL('lead', true /* whether to cascade */));
    //     }

    //     return $this->redirectToRoute('app_lead_index');
    // }

    #[Route('/delete-all', name: 'app_lead_delete_all', methods: ['POST'])]
    public function deleteAll(Request $request, LeadRepository $leadRepository): Response
    {
        if ($this->isCsrfTokenValid('delete_all', $request->request->get('_token'))) {
            $leadRepository->truncateTable();
        }

        return $this->redirectToRoute('app_lead_index');
    }


   
}
