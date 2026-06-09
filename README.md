# Portfolio — Romain Dacet

Thème WordPress personnel de **Romain Dacet**, étudiant en 1ʳᵉ année de BTS SIO option SISR au lycée Guy Mollet (Arras).

Le site présente mon CV, ma lettre de motivation, mes projets et ma veille technologique dans le cadre de ma recherche de stage (25 mai → 4 juillet 2026).

## Pages

- **Accueil** — navigation éditoriale numérotée
- **CV** — parcours, formations, compétences + PDF téléchargeable
- **Lettre de motivation** — texte + PDF intégré
- **Projets** — liste des projets, dont *Brasserie Terroir & Savoirs*
- **Veille technologique** — à compléter
- **Contact** — téléphone, email, formulaire WPForms

## Structure du thème

```
portfolio-rd/
├── style.css            # Métadonnées du thème + styles (requis racine)
├── index.php            # Fallback liste d'articles (requis racine)
├── functions.php        # Charge les modules de /inc
├── header.php           # En-tête (logo R + menu + bouton Blog)
├── footer.php           # Pied de page
├── front-page.php       # Page d'accueil
├── page.php             # Modèle de page par défaut
├── inc/
│   ├── setup.php        # Supports du thème, menus, enqueue des assets
│   ├── helpers.php      # Utilitaires + compat des Page Templates déplacés
│   └── data.php         # Données (compétences, formation, projets…)
├── templates/           # Page Templates (Modèles de page WordPress)
│   ├── template-cv.php
│   ├── template-lettre.php
│   ├── template-projets.php
│   ├── template-projet-brasserie.php
│   ├── template-veille.php
│   └── template-contact.php
└── assets/
    ├── img/             # Images (dont brasserie/)
    ├── js/main.js       # Menu mobile
    └── pdf/             # CV et lettre de motivation
```

> Les fichiers `style.css`, `index.php`, `functions.php`, `header.php`, `footer.php`,
> `front-page.php` et `page.php` doivent rester à la racine (hiérarchie de templates WordPress).
> Les Page Templates vivent dans `/templates` (supporté depuis WordPress 4.7) ; un filtre dans
> `inc/helpers.php` assure la compatibilité des pages déjà assignées avant le déplacement.

## Stack

- WordPress (thème custom, from scratch)
- PHP 8 · HTML5 · CSS3 · JavaScript vanilla
- Polices : Fraunces, Inter, JetBrains Mono (Google Fonts)
- Hébergement : InfinityFree

## Installation

1. Générer l'archive avec `make-zip.ps1` (dossier parent).
2. WordPress → **Apparence → Thèmes → Ajouter → Téléverser** → `portfolio-rd.zip`.
3. Créer les pages listées dans le tableau ci-dessous et leur assigner le **Modèle** correspondant via *Attributs de la page*.

| Titre                 | Slug                 | Modèle                                  |
|-----------------------|----------------------|-----------------------------------------|
| CV                    | `cv`                 | CV                                      |
| Lettre de motivation  | `lettre-motivation`  | Lettre de motivation                    |
| Projets               | `projets`            | Projets                                 |
| Brasserie T&S         | `projet-brasserie`   | Projet — Brasserie Terroir & Savoirs    |
| Veille technologique  | `veille`             | Veille technologique                    |
| Contact               | `contact`            | Contact                                 |

## Auteur

**Romain Dacet** — BTS SIO 2025-2026
