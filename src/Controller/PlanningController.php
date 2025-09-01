<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Repository\LeadRepository;
use App\Repository\PlanningRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Lead;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Security;
use Doctrine\DBAL\Types\DateTimeImmutableType;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/planning')]
class PlanningController extends AbstractController
{
    private function extractDepartementFromAdresse(string $adresse): int|null
    {
        if (preg_match('/\\b(\d{5})\\b/', $adresse, $matches)) {
            return (int) substr($matches[1], 0, 2); // On prend les 2 premiers chiffres comme département
        }
        return null;
    }
    private function getDepartementsCompatibles(int $departement): array
    {
        $zones = [
            59 => [62, 80, 2, 8, 59],
            62 => [59, 80, 2, 62],
            80 => [62, 59, 2, 60, 76, 80],
             2 => [59, 62, 80, 60, 77, 51, 8, 2],
            76 => [80, 60, 27, 95, 78, 76],
            60 => [80, 76, 27, 95, 77, 2, 60],
             8 => [2, 51, 55, 8],
            27 => [76, 60, 95, 78, 28, 61, 14, 27],
            95 => [60, 2, 77, 93, 94, 92, 75, 78, 91, 27, 95],
            77 => [95, 60, 2, 51, 10, 89, 45, 91, 78, 94, 93, 92, 75, 77],
            51 => [2, 8, 55, 52, 10, 77, 51],
            55 => [8, 54, 88, 52, 51, 55],
            54 => [57, 67, 88, 55, 54],
            57 => [54, 88, 67, 57],
            67 => [57, 54, 88, 68, 67],
            14 => [50, 61, 27, 14],
            50 => [14, 61, 53, 35, 50],
            61 => [14, 50, 53, 72, 41, 28, 27, 61],
            28 => [27, 78, 91, 45, 41, 72, 61, 28],
            78 => [27, 95, 92, 91, 28, 78],
            75 => [93, 94, 92, 95, 77, 91, 78, 75],
            91 => [78, 92, 94, 77, 75, 45, 28, 91],
            92 => [95, 93, 94, 75, 78, 91, 77, 92],
            93 => [95, 77, 94, 75, 92, 60, 93],
            94 => [75, 92, 93, 77, 91, 94],
            10 => [77, 51, 52, 21, 89, 10],
            52 => [10, 51, 55, 88, 70, 21, 52],
            88 => [55, 54, 57, 67, 68, 90, 70, 52, 88],
            68 => [88, 67, 90, 70, 68],
            90 => [68, 88, 70, 25, 90],
            29 => [22, 56, 29],
            22 => [29, 56, 35, 22],
            56 => [29, 22, 35, 44, 56],
            35 => [22, 56, 44, 49, 53, 50, 35],
            53 => [50, 61, 72, 49, 44, 35, 53],
            72 => [53, 61, 28, 41, 37, 49, 72],
            41 => [72, 61, 28, 45, 18, 36, 37, 41],
            45 => [28, 91, 77, 89, 58, 18, 41, 45],
            89 => [77, 10, 21, 58, 45, 89],
            21 => [89, 10, 52, 70, 39, 71, 58, 21],
            70 => [52, 88, 68, 90, 25, 39, 21, 70],
            25 => [70, 90, 39, 25],
            44 => [56, 35, 53, 49, 85, 44],
            49 => [44, 35, 53, 72, 37, 86, 79, 85, 49],
            37 => [72, 41, 36, 86, 49, 37],
            36 => [37, 41, 18, 3, 23, 87, 86, 36],
            18 => [36, 41, 45, 58, 3, 23, 18],
            58 => [89, 21, 71, 3, 18, 45, 58],
            71 => [89, 21, 39, 1, 69, 42, 3, 58, 71],
            39 => [71, 21, 70, 25, 1, 39],
            85 => [44, 49, 79, 17, 85],
            79 => [85, 49, 86, 16, 17, 79],
            86 => [49, 37, 36, 87, 16, 79, 86],
            87 => [86, 36, 23, 19, 24, 16, 87],
            23 => [36, 18, 3, 63, 19, 87, 23],
             3 => [18, 58, 71, 42, 63, 23, 3],
            42 => [71, 69, 38, 26, 7, 43, 63, 3, 42],
            69 => [71, 1, 38, 26, 7, 42, 69],
             1 => [71, 39, 74, 73, 38, 69, 1],
            74 => [1, 73, 74],
            17 => [85, 79, 16, 24, 33, 17],
            16 => [17, 79, 86, 87, 24, 33, 16],
            24 => [16, 87, 19, 46, 47, 33, 17, 24],
            19 => [87, 23, 63, 15, 46, 24, 19],
            63 => [3, 42, 43, 15, 19, 23, 63],
            43 => [63, 42, 7, 48, 15, 43],
             7 => [42, 69, 38, 26, 84, 30, 48, 43, 7],
            26 => [7, 42, 69, 38, 5, 4, 84, 30, 26],
            38 => [69, 1, 73, 5, 26, 7, 42, 38],
            73 => [74, 5, 38, 1, 73],
            33 => [17, 16, 24, 47, 40, 33],
            47 => [24, 46, 82, 32, 40, 33, 47],
            46 => [24, 19, 15, 12, 81, 82, 47, 46],
            12 => [15, 48, 30, 34, 81, 82, 46, 12],
            48 => [15, 43, 7, 30, 12, 48],
            30 => [48, 7, 26, 84, 13, 34, 12, 30],
            84 => [26, 4, 83, 13, 30, 7, 84],
             5 => [73, 38, 26, 84, 4, 5],
            40 => [33, 47, 32, 64, 40],
            32 => [47, 82, 31, 65, 64, 40, 32],
            82 => [46, 12, 81, 31, 32, 47, 82],
            81 => [82, 12, 34, 11, 31, 81],
            34 => [12, 30, 81, 11, 34],
            13 => [84, 4, 83, 30, 13],
             4 => [5, 6, 83, 13, 84, 26, 4],
             6 => [4, 83, 6],
            83 => [13, 84, 4, 6, 83],
            64 => [40, 32, 65, 64],
            65 => [64, 40, 32, 31, 65],
            31 => [65, 32, 82, 81, 11, 9, 31],
             9 => [31, 81, 11, 66, 9],
            11 => [66, 9, 31, 81, 34, 11],
            66 => [9, 11, 66],
            15 => [19, 63, 43, 48, 12, 46, 15],

        ];
        return $zones[$departement] ?? [$departement];
    }


    #[Route('/', name: 'app_planning_index', methods: ['GET'])]
    public function index(PlanningRepository $planningRepository): Response
    {
        return $this->render('planning/index.html.twig', [
            'plannings' => $planningRepository->findAll(),
        ]);
    }



    #[Route('/{id}/edit-inline-user', name: 'app_planning_edit_inline_user', methods: ['POST'])]
    public function editInlineUser(Request $request, Planning $planning, EntityManagerInterface $entityManager, LoggerInterface $logger): Response
    {
        $data = json_decode($request->getContent(), true);
        $field = $data['field'] ?? null;
        $value = $data['value'] ?? null;

        $logger->info('Received field: ' . $field . ', value: ' . $value);

        if ($field && $value) {
            try {
                switch ($field) {
                    case 'commentaire':
                        $planning->setCommentaire($value);
                        $logger->info('Setting commentaire to: ' . $value);
                        break;
                    case 'date':
                        // Handle date parsing from ISO 8601 format
                        $date = new \DateTime($value);
                        $planning->setDate($date);
                        $logger->info('Setting date to: ' . $value);
                        break;
                    default:
                        $logger->error('Invalid field: ' . $field);
                        return new Response('Invalid field', 400);
                }

                $entityManager->flush();
                $logger->info('Successfully updated and saved planning');

                return new Response('Success', 200);
            } catch (\Exception $e) {
                $logger->error('Exception: ' . $e->getMessage());
                return new Response('Error updating field', 500);
            }
        }

        $logger->error('Invalid data received');
        return new Response('Invalid data', 400);
    }



    #[Route('/planning', name: 'app_planning_index_planning', methods: ['GET'])]
    public function planning(PlanningRepository $planningRepository): Response
    {
        $user = $this->getUser();

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            $plannings = $planningRepository->findAll();
        } elseif (in_array('ROLE_USER', $user->getRoles()) ) {
            $plannings = $planningRepository->findByUserId($user->getId());
        } else {
            $plannings = [];
        }

        return $this->render('planning/planning.html.twig', [
            'plannings' => $plannings,
        ]);
    }





    #[Route('/newlead/{leadId}', name: 'app_planning_new_lead', methods: ['GET', 'POST'])]
    public function newlead(
        Request $request,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger,
        int $leadId
    ): Response {
        $planning = new Planning();

        // Récupération du lead
        $lead = $entityManager->getRepository(Lead::class)->find($leadId);

        if ($lead) {
            $planning->setIdLead($lead);

            $nomComplet = $lead->getNomComplet();
            $parts = explode(' ', trim($nomComplet), 2);
            $prenom = $parts[0] ?? '';
            $nom = $parts[1] ?? '';

            $planning->setNom($nom);
            $planning->setPrenom($prenom);
            $planning->setTelephone('0' . $lead->getTelephone());
            $planning->setTypeChauffage($lead->getChauffage());
        }

        // Création du formulaire
        $form = $this->createForm(PlanningType::class, $planning, [
            'lead' => $lead,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->checkDepartementCompatibilite3($planning, $entityManager, $form, $logger);

            if ($form->isValid()) {
                // Réaffecter le lead depuis le champ caché pour sécuriser la persistance
                $leadIdFromForm = $form->get('id_lead_hidden')->getData();
                $lead = $entityManager->getRepository(Lead::class)->find($leadIdFromForm);
                if ($lead) {
                    $planning->setIdLead($lead);
                    $planning->setNom($lead->getNomComplet());
                    $planning->setAgeMRMME($lead->getTelephone());
                }

                $entityManager->persist($planning);
                $entityManager->flush();

                return $this->redirectToRoute('app_planning_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('planning/new.html.twig', [
            'planning' => $planning,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/lead/{leadId}', name: 'app_planning_for_lead', methods: ['GET'])]
    public function showForLead(int $leadId, PlanningRepository $planningRepository, EntityManagerInterface $entityManager): Response
    {
        // Récupère les plannings pour un lead spécifique
        $plannings = $planningRepository->findBy(['id_lead' => $leadId]);

        // Récupère le lead pour afficher des informations supplémentaires si nécessaire
        $lead = $entityManager->getRepository(Lead::class)->find($leadId);

        if (!$lead) {
            throw $this->createNotFoundException('Lead non trouvé');
        }

        return $this->render('planning/lead_plannings.html.twig', [
            'plannings' => $plannings,
            'lead' => $lead,
        ]);
    }

    #[Route('/new', name: 'app_planning_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $planning = new Planning();
        $form = $this->createForm(PlanningType::class, $planning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($planning);
            $entityManager->flush();

            return $this->redirectToRoute('app_planning_index_planning', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('planning/new.html.twig', [
            'planning' => $planning,
            'form' => $form,
        ]);
    }








    #[Route('/planning_part', name: 'app_planning_part', methods: ['GET'])]
    public function planning_part(PlanningRepository $planningRepository, UsersRepository $userRepository): Response
    {
        return $this->render('planning/planning1.html.twig', [
            'plannings' => $planningRepository->findAll(),
            'technicien' => $userRepository->findByRole('ROLE_USER_TECHNICIEN'),
        ]);
    }





    #[Route('/{id}', name: 'app_planning_show', methods: ['GET'])]
    public function show(Planning $planning): Response
    {
        return $this->render('planning/show.html.twig', [
            'planning' => $planning,
        ]);
    }










//
//
//    #[Route('/{id}/edit-inline-planning', name: 'app_planning_edit_inline', methods: ['POST'])]
//    public function editInlinPlanning(Request $request, Planning $planning, Lead $lead, EntityManagerInterface $entityManager, UsersRepository $userRepository): Response
//    {
//
//        $data = json_decode($request->getContent(), true);
//        $field = $data['field'] ?? null;
//        $value = $data['value'] ?? null;
//
//        if ($field && $value) {
//            switch ($field) {
//                case 'heureCreation':
//                    $date = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $value);
//                    if ($date) {
//                        $planning->setDate($date);
//                    }
//                    break;
//                case 'nom':
//                    $planning->setNom($value);
//                    break;
//                case 'prenom':
//                    $planning->setPrenom($value);
//                    break;
//                case 'telephone':
//                    $planning->setTelephone((int) $value);
//                    break;
////                case 'email':
////                    $planning->setEmail($value);
////                    break;
////                case 'ageMaison':
////                    $planning->setAgeMaison((int)$value);
////                    break;
//                case 'TypeChauffage':
//                    $planning->setTypeChauffage($value);
//                    break;
//                case 'adresse':
//                    $planning->setAdresse($value);
//                    break;
//                case 'commentaire':
//                    $planning->setCommentaire($value);
//                    break;
//                case 'ageMRMME':
//                    $planning->setAgeMRMME((int)$value);
//                    break;
//                case 'consommationAnnuelOuMensuelle':
//                    $planning->setConsommationAnnuelOuMensuelle($value);
//                    break;
//                case 'superficieMaison':
//                    $planning->setSuperficieMaison((int)$value);
//                    break;
//                case 'situationFamiliale':
//                    $planning->setSituationFamiliale($value);
//                    break;
//                case 'creditEnCours':
//                    $planning->setCreditEnCours($value);
//                    break;
//                case 'RevenuFiscalReference':
//                    $planning->setRevenuFiscalReference((int)$value);
//                    break;
//                case 'salaireMensuel':
//                    $planning->setSalaireMensuel($value);
//                    break;
//                case 'ageChaudiere':
//                    $planning->setAgeChaudiere((int)$value);
//                    break;
//                case 'situationPro':
//                    $planning->setSituationPro($value);
//                    break;
//                case 'nbrePersonneCharge':
//                    $planning->setNbrePersonneCharge((float)$value);
//                    break;
//                case 'superficieMursExt':
//                    $planning->setSuperficieMursExt((float)$value);
//                    break;
////                case 'matiereMursExt':
////                    $planning->setMatiereMursExt($value);
////                    break;
//                case 'telepro':
//                    $user = $userRepository->find($value);
//                    if (
//                        $user &&
//                        in_array('ROLE_USER_TECHNICIEN', $user->getRoles()) && !in_array('ROLE_USER_COMMERCIAL', $user->getRoles()) &&
//                        !in_array('ROLE_ADMIN', $user->getRoles()) && in_array('ROLE_USER', $user->getRoles())) {
//                        $lead->setTechnicien($user);
//                    } else {
//                        return new Response('Invalid user', 400);
//                    }
//                    break;
//
//
//                default:
//                    return new Response('Invalid field', 400);
//            }
//            $entityManager->flush();
//
//            return new Response('Success', 200);
//        }
//
//        return new Response('Invalid data', 400);
//    }





    #[Route('/{id}/edit-inline-planning', name: 'app_planning_edit_inline', methods: ['POST'])]
    public function editInlinePlanning(
        int $id,
        Request $request,
        PlanningRepository $planningRepository,
        LeadRepository $leadRepository,
        UsersRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // On récupère le planning ciblé
        $planning = $planningRepository->find($id);
        if (!$planning) {
            return new Response('Planning not found', 404);
        }

        // On récupère et décode les données JSON envoyées par le client
        $data = json_decode($request->getContent(), true);

        if (!is_array($data)) {
            return new Response('Invalid JSON', 400);
        }

        $field = $data['field'] ?? null;
        $value = $data['value'] ?? null;

        if (!$field || $value === null) {
            return new Response('Invalid data', 400);
        }

        try {
            $lead = $planning->getIdLead();
            switch ($field) {
                case 'heureCreation':
                case 'date':
                    try {
                        if (!is_string($value)) {
                            return new Response('Invalid date format.', 400);
                        }

                        $date = new \DateTimeImmutable($value);
                        $planning->setDate($date);
                    } catch (\Exception $e) {
                        return new Response('Invalid date: ' . $e->getMessage(), 400);
                    }
                    break;
//                case 'date':
//                    try {
//                        $date = new \DateTimeImmutable($value);
//                        $planning->setDate($date);
//                    } catch (\Exception $e) {
//                        return new Response('Invalid date: ' . $e->getMessage(), 400);
//                    }
//                    break;

 //               case 'heureCreation':
//                case 'date':
//                    $date = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $value);
//                    if (!$date) {
//                        $errors = \DateTimeImmutable::getLastErrors();
//                        return new Response('Invalid date format: ' . json_encode($errors), 400);
//                    }
//                    $planning->setDate($date);
//                    break;


                case 'nomComplet':
                    if (!$lead) {
                        return new Response('Lead not found for this planning', 404);
                    }
                    $lead->setNomComplet($value);
                    break;

                case 'telephone':
                    $planning->setTelephone((int) $value);
                    break;

                case 'TypeChauffage':
                    $planning->setTypeChauffage($value);
                    break;

                case 'adresse':
                    $planning->setAdresse($value);
                    break;

                case 'commentaire':
                    $planning->setCommentaire($value);
                    break;

                case 'ageMRMME':
                    $planning->setAgeMRMME($value);
                    break;

                case 'consommationAnnuelOuMensuelle':
                    $planning->setConsommationAnnuelOuMensuelle($value);
                    break;

                case 'superficieMaison':
                    $planning->setSuperficieMaison((int) $value);
                    break;

                case 'situationFamiliale':
                    $planning->setSituationFamiliale($value);
                    break;

                case 'creditEnCours':
                    $planning->setCreditEnCours($value);
                    break;

                case 'RevenuFiscalReference':
                    $planning->setRevenuFiscalReference((int) $value);
                    break;

                case 'salaireMensuel':
                    $planning->setSalaireMensuel($value);
                    break;

                case 'ageChaudiere':
                    $planning->setAgeChaudiere((int) $value);
                    break;

                case 'situationPro':
                    $planning->setSituationPro($value);
                    break;

                case 'nbrePersonneCharge':
                    $planning->setNbrePersonneCharge((float) $value);
                    break;

                case 'superficieMursExt':
                    $planning->setSuperficieMursExt((float) $value);
                    break;

                case 'status':
                    $planning->setStatusRDV($value);
                    break;

                case 'telepro':
                    $lead = $planning->getIdLead();
                    if (!$lead) {
                        return new Response('Lead not found for this planning', 404);
                    }

                    $user = $userRepository->find($value);
                    if (
                        $user &&
                        in_array('ROLE_USER_TECHNICIEN', $user->getRoles()) &&
                        !in_array('ROLE_USER_COMMERCIAL', $user->getRoles()) &&
                        !in_array('ROLE_ADMIN', $user->getRoles()) &&
                        in_array('ROLE_USER', $user->getRoles())
                    ) {
                        $lead->setTechnicien($user);
                    } else {
                        return new Response('Invalid user role', 400);
                    }
                    break;

                default:
                    return new Response('Unsupported field: ' . $field, 400);
            }

            // Sauvegarde en base
            $entityManager->flush();

            return new Response('Success', 200);

        } catch (\Exception $e) {
            return new Response('Server error: ' . $e->getMessage(), 500);
        }
    }

























    #[Route('/{id}/editplanning', name: 'app_planning_editplanning', methods: ['POST'])]
    public function editplanning(Request $request, Planning $planning, EntityManagerInterface $entityManager): Response
    {
        if ($request->isXmlHttpRequest()) {
            $data = json_decode($request->getContent(), true);

            if (!isset($data['start']) || empty($data['start'])) {
                return new JsonResponse(['status' => 'error', 'message' => 'Start date is missing'], Response::HTTP_BAD_REQUEST);
            }

            try {
                // Convertir les dates en UTC
                $startDate = new \DateTime($data['start'], new \DateTimeZone('UTC'));
                $planning->setDate($startDate);

                // Calculer la date de fin en ajoutant 2 heures
                $endDate = clone $startDate;
                $endDate->modify('+2 hours');

                // Mettre à jour la base de données
                $entityManager->flush();

                return new JsonResponse(['status' => 'success'], Response::HTTP_OK);
            } catch (\Exception $e) {
                return new JsonResponse(['status' => 'error', 'message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['status' => 'error', 'message' => 'Invalid request'], Response::HTTP_BAD_REQUEST);
    }



    #[Route('/{id}/edit', name: 'app_planning_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Planning $planning, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlanningType::class, $planning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_planning_index_planning', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('planning/edit.html.twig', [
            'planning' => $planning,
            'form' => $form,
        ]);
    }

    private function checkDepartementCompatibilite3(
        Planning $planning,
        EntityManagerInterface $em,
        FormInterface $form,
        LoggerInterface $logger
    ): void
    {
        $adresseActuelle = $planning->getAdresse();
        $logger->info("Adresse saisie dans le formulaire : " . $adresseActuelle);

        $departementActuel = $this->extractDepartementFromAdresse($adresseActuelle);
        $logger->info("Département extrait : " . ($departementActuel ?? 'null'));

        if ($departementActuel === null) {
            $form->addError(new FormError("❌ Impossible de déterminer le département à partir de l'adresse fournie."));
            return;
        }

        $date = $planning->getDate();
        if (!$date) {
            $form->addError(new FormError("❌ La date du rendez-vous est obligatoire."));
            return;
        }

        $logger->info("Date du rendez-vous : " . $date->format('Y-m-d H:i'));

        // Récupère tous les rendez-vous du jour
        $dateDebut = (clone $date)->setTime(0, 0);
        $dateFin = (clone $date)->setTime(23, 59);
        $planningsJour = $em->getRepository(Planning::class)->createQueryBuilder('p')
            ->where('p.date BETWEEN :start AND :end')
            ->setParameter('start', $dateDebut)
            ->setParameter('end', $dateFin)
            ->getQuery()
            ->getResult();

        $logger->info("RDV existants ce jour : " . count($planningsJour));

        if (count($planningsJour) >= 10) {
            $form->addError(new FormError("❌ Limite de 10 rendez-vous atteinte pour ce jour."));
            return;
        }

        // Comptage global des RDV par département
        $globalDepartementCount = [];
        foreach ($planningsJour as $rdv) {
            $dep = $this->extractDepartementFromAdresse($rdv->getAdresse());
            if ($dep !== null) {
                $globalDepartementCount[$dep] = ($globalDepartementCount[$dep] ?? 0) + 1;
            }
        }

        $globalDepartementCount[$departementActuel] = ($globalDepartementCount[$departementActuel] ?? 0) + 1;

        $logger->info("📊 Répartition totale des RDV par département :");
        foreach ($globalDepartementCount as $dep => $count) {
            $logger->info("- Département $dep : $count RDV(s)");
        }

        // Regrouper les RDV par zone (technicien)
        $zones = [];        // technicien => [liste départements]
        $assignations = []; // technicien => [Planning[]]

        foreach ($planningsJour as $rdv) {
            $dep = $this->extractDepartementFromAdresse($rdv->getAdresse());
            if ($dep === null) continue;

            $ajoute = false;
            foreach ($zones as $tech => $deps) {
                if (in_array($dep, $this->getDepartementsCompatibles(reset($deps)))) {
                    $zones[$tech][] = $dep;
                    $assignations[$tech][] = $rdv;
                    $ajoute = true;
                    break;
                }
            }

            if (!$ajoute) {
                $techNum = count($zones) + 1;
                $zones["technicien$techNum"] = [$dep];
                $assignations["technicien$techNum"] = [$rdv];
            }
        }

        $logger->info("📌 Zones existantes (techniciens) :");
        foreach ($zones as $tech => $deps) {
            $logger->info("- $tech couvre : " . implode(', ', array_unique($deps)));
        }

        // Attribution virtuelle du RDV en cours
        $affecte = false;
        foreach ($zones as $tech => $deps) {
            $compatibleDeps = [];
            foreach ($deps as $d) {
                $compatibleDeps = array_merge($compatibleDeps, $this->getDepartementsCompatibles($d));
            }

            if (in_array($departementActuel, array_unique($compatibleDeps))) {
                // Nouvelle règle : technicien ne peut pas avoir plus de 4 RDV au total
                $nbTotalRdv = count($assignations[$tech] ?? []);
                if ($nbTotalRdv >= 4) {
                    $form->addError(new FormError("❌ Le technicien $tech a déjà 4 rendez-vous ce jour-là. Veuillez décaler le rendez-vous."));
                    $logger->warning("⛔ $tech a déjà 4 RDV. RDV refusé pour le département $departementActuel.");
                    return;
                }

                $assignations[$tech][] = $planning;
                $zones[$tech][] = $departementActuel;
                $logger->info("✅ Rendez-vous attribué virtuellement à : $tech");
                $affecte = true;
                break;
            }
        }

        if (!$affecte) {
            $form->addError(new FormError("❌ Le département $departementActuel n'est pas compatible avec les zones existantes pour les techniciens."));
            $logger->warning("🚫 Département $departementActuel non compatible avec aucune tournée.");
            return;
        }

        // Vérification finale : max 4 RDV par département pour chaque technicien
        foreach ($assignations as $tech => $rdvs) {
            $departementCounts = [];
            foreach ($rdvs as $rdv) {
                $dep = $this->extractDepartementFromAdresse($rdv->getAdresse());
                if ($dep !== null) {
                    $departementCounts[$dep] = ($departementCounts[$dep] ?? 0) + 1;
                }
            }

            $logger->info("🔍 $tech - répartition interne des RDV :");
            foreach ($departementCounts as $dep => $count) {
                $logger->info("   - Département $dep : $count RDV(s)");
                if ($count > 4) {
                    $form->addError(new FormError("❌ Trop de rendez-vous dans le département $dep pour $tech (max 4)."));
                    $logger->warning("⚠️ Surcharge détectée pour $tech dans le département $dep.");
                    return;
                }
            }
        }
    }




    private function checkDepartementCompatibilite2(Planning $planning, EntityManagerInterface $em, FormInterface $form): void
    {
        $adresseActuelle = $planning->getAdresse();
        $departementActuel = $this->extractDepartementFromAdresse($adresseActuelle);

        if ($departementActuel === null) {
            $form->addError(new FormError("❌ Impossible de déterminer le département à partir de l'adresse fournie."));
            return;
        }

        $date = $planning->getDate();
        if (!$date) {
            $form->addError(new FormError("❌ La date du rendez-vous est obligatoire."));
            return;
        }

        // Récupération de tous les rendez-vous du même jour
        $planningsJour = $em->getRepository(Planning::class)->findBy(['date' => $date]);

        // Limiter à 4 rendez-vous maximum
        if (count($planningsJour) >= 4) {
            $form->addError(new FormError("❌ Maximum de 4 rendez-vous autorisés pour ce jour."));
            return;
        }

        // Trouver le département principal de référence
        $departementPrincipal = null;
        foreach ($planningsJour as $p) {
            $dep = $this->extractDepartementFromAdresse($p->getAdresse());
            if ($dep !== null) {
                $departementPrincipal = $dep;
                break;
            }
        }

        // S'il n'y a pas encore de RDV, le premier crée la zone
        if (!$departementPrincipal) {
            $departementPrincipal = $departementActuel;
        }

        // Obtenir la liste des départements compatibles avec la zone principale
        $zoneCompatibles = $this->getDepartementsCompatibles($departementPrincipal);

        // Vérifie que ce nouveau RDV est dans la zone
        if (!in_array($departementActuel, $zoneCompatibles)) {
            $form->addError(new FormError("❌ Ce rendez-vous est dans le département $departementActuel, qui n'est pas compatible avec la zone de départ ($departementPrincipal)."));
            return;
        }

        // Vérifie que tous les autres RDV sont aussi dans la même zone
        foreach ($planningsJour as $p) {
            $dep = $this->extractDepartementFromAdresse($p->getAdresse());
            if ($dep !== null && !in_array($dep, $zoneCompatibles)) {
                $form->addError(new FormError("❌ Incompatibilité détectée avec un autre RDV du jour situé dans le département $dep."));
                return;
            }
        }
    }



    private function checkDepartementCompatibilite(Planning $planning, EntityManagerInterface $entityManager): void
    {
        $lead = $planning->getIdLead();
        $departement = $lead?->getDepartement();
        $date = $planning->getDate()?->format('Y-m-d');

        if (!$departement || !$date) {
            return;
        }

        $departementsCompatibles = $this->getDepartementsCompatibles($departement);

        $qb = $entityManager->getRepository(Planning::class)->createQueryBuilder('p')
            ->join('p.id_lead', 'l')
            ->where('DATE(p.date) = :date')
            ->setParameter('date', $date);

        // Exclure le rendez-vous en cours si en modification
        if ($planning->getId()) {
            $qb->andWhere('p.id != :currentId')
                ->setParameter('currentId', $planning->getId());
        }

        $existingPlannings = $qb->getQuery()->getResult();

        $nonCompatibles = [];
        foreach ($existingPlannings as $existing) {
            $existingDep = $existing->getIdLead()?->getDepartement();
            if ($existingDep && !in_array($existingDep, $departementsCompatibles)) {
                $nonCompatibles[] = $existingDep;
            }
        }

        if (count($nonCompatibles) > 0) {
            $this->addFlash('warning', "Attention : des rendez-vous ce jour-là sont dans d'autres départements non compatibles (" . implode(', ', $nonCompatibles) . ").");
        }
    }

    #[Route('/{id}', name: 'app_planning_delete', methods: ['POST'])]
    public function delete(Request $request, Planning $planning, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$planning->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($planning);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_planning_index', [], Response::HTTP_SEE_OTHER);
    }










//    #[Route('/', name: 'app_planning_index', methods: ['GET'])]
//    public function index(PlanningRepository $planningRepository): Response
//    {
//        return $this->render('planning/index.html.twig', [
//            'plannings' => $planningRepository->findAll(),
//        ]);
//    }




}
