<?php

namespace App\Controller;

use App\Entity\Bath;
use App\Form\BathType;
use App\Repository\BathRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/bath')]
class BathController extends AbstractController
{
    #[Route('/', name: 'app_bath_index', methods: ['GET'])]
    public function index(BathRepository $bathRepository): Response
    {
        return $this->render('bath/index.html.twig', [
            'baths' => $bathRepository->findAll(),
        ]);
    }

//    #[Route('/new', name: 'app_bath_new', methods: ['GET', 'POST'])]
//    public function new(Request $request, EntityManagerInterface $entityManager): Response
//    {
//        $bath = new Bath();
//        $form = $this->createForm(BathType::class, $bath);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $imageFile = $form->get('image')->getData();
//
//            if ($imageFile) {
//                // Générer un nom de fichier unique
//                $fileName = md5(uniqid()).'.'.$imageFile->guessExtension();
//
//                // Copier le fichier dans le dossier d'images
//                $filesystem = new Filesystem();
//                $filesystem->copy($imageFile->getPathname(), $this->getParameter('images_directory').'/'.$fileName);
//
//
//                // Enregistrer le nom de fichier dans l'entité Article
//                $bath->setPieceIdentite($fileName);
//                $bath->setAvisImpots($fileName);
//                $bath->setTaxeFonciere($fileName);
//                $bath->setLivretFamille($fileName);
//                $bath->setPreconisationTravaux($fileName);
//            }
//            $entityManager->persist($bath);
//            $entityManager->flush();
//
//            return $this->redirectToRoute('app_bath_index', [], Response::HTTP_SEE_OTHER);
//        }
//
//        return $this->render('bath/new.html.twig', [
//            'bath' => $bath,
//            'form' => $form,
//        ]);
//    }


    #[Route('/new', name: 'app_bath_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bath = new Bath();
        $form = $this->createForm(BathType::class, $bath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des fichiers uploadés
            $fileFields = [
                'pieceIdentite',
                'livretFamille',
                'avisImpots',
                'taxeFonciere',
                'preconisationTravaux',
                'dpe'
            ];

            $filesystem = new Filesystem();
            $uploadedFiles = [];

            foreach ($fileFields as $field) {
                $file = $form->get($field)->getData();
                if ($file) {
                    // Générer un nom de fichier unique
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();

                    // Copier le fichier dans le dossier spécifié
                    try {
                        $file->move(
                            $this->getParameter('images_directory'),
                            $fileName
                        );
                    } catch (FileException $e) {
                        // Gérer l'exception si le fichier ne peut pas être déplacé
                        $this->addFlash('error', 'Le fichier n\'a pas pu être téléchargé.');
                        return $this->render('bath/new.html.twig', [
                            'bath' => $bath,
                            'form' => $form->createView(),
                        ]);
                    }

                    // Enregistrer le nom du fichier dans l'entité
                    $setter = 'set'.ucfirst($field);
                    $bath->$setter($fileName);
                }
            }

            // Persister et enregistrer l'entité
            $entityManager->persist($bath);
            $entityManager->flush();

            return $this->redirectToRoute('app_bath_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bath/new.html.twig', [
            'bath' => $bath,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_bath_show', methods: ['GET'])]
    public function show(Bath $bath): Response
    {
        return $this->render('bath/show.html.twig', [
            'bath' => $bath,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bath_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bath $bath, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BathType::class, $bath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bath_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bath/edit.html.twig', [
            'bath' => $bath,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bath_delete', methods: ['POST'])]
    public function delete(Request $request, Bath $bath, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bath->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($bath);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bath_index', [], Response::HTTP_SEE_OTHER);
    }
}
