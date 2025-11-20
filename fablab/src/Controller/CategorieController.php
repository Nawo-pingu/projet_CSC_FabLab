<?php

namespace App\Controller;
use App\Entity\Materiel;
use App\Entity\Member;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/categorie')]
final class CategorieController extends AbstractController
{
    #[Route(name: 'app_categorie_index', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $categorieRepository->findBy(['published' => true]),
        ]);
    }

    #[Route('/new/{id}', name: 'app_categorie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Member $member): Response
    {
        $categorie = new Categorie();
        $categorie->setMember($member);
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute(
                'app_member_show',
                ['id' => $member->getId()],
                Response::HTTP_SEE_OTHER
            );
        }

        return $this->render('categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_show', methods: ['GET'])]
    public function show(Categorie $categorie): Response
    {
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{categorie_id}/materiel/{materiel_id}',
        methods: ['GET'],
        name: 'app_categorie_materiel_show')]

    public function MaterielShow(
        #[MapEntity(id: 'categorie_id')]
        Categorie $categorie,
        #[MapEntity(id: 'materiel_id')]
        Materiel $materiel
    ): Response {
        if (!$categorie->getMateriels()->contains($materiel)) {
            throw $this->createNotFoundException("Couldn't find such a materiel in this categorie!");
        }

        if ($categorie->isPublished() == false) {
            throw $this->createAccessDeniedException("You cannot access the requested ressource!");
        }
        return $this->render('categorie/materiel_show.html.twig', [
            'materiel' => $materiel,
            'categorie' => $categorie,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_member_show', ['id' => $categorie->getMember()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_delete', methods: ['POST'])]
    public function delete(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $categorie->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_member_show', ['id' => $categorie->getMember()->getId()], Response::HTTP_SEE_OTHER);
    }
}
