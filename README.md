# Portfolio — Romain Dacet

Site web personnel de **Romain Dacet**, étudiant en 1ʳᵉ année de BTS SIO option SISR au lycée Guy Mollet (Arras).

Site **statique** (HTML / CSS / JavaScript, sans CMS) destiné à être hébergé sur un VPS sous le nom de domaine **rdacet.fr**.


## Structure

```
.
├── index.html, cv.html, lettre-motivation.html …   # Les pages du site
├── assets/
│   ├── css/style.css   # Styles
│   ├── js/main.js      # Menu mobile + formulaire de contact
│   ├── img/            # Images (dont brasserie/) — ajouter photo.jpg pour l'accueil
│   └── pdf/            # CV et lettre de motivation
├── README.md
└── LICENSE
```

> La photo d'accueil attend le fichier `assets/img/photo.jpg`. S'il est absent, un encart de
> remplacement s'affiche automatiquement.

## Aperçu en local

Aucune dépendance : il suffit d'ouvrir `index.html` dans un navigateur.

Pour servir le site comme en production (liens propres) :

```bash
# Python
python -m http.server 8000
# puis ouvrir http://localhost:8000
```

## Formulaire de contact

Le formulaire de la page Contact est géré côté client : à l'envoi, il ouvre le logiciel de
messagerie pré-rempli (`mailto:`). Aucun serveur n'est requis. Pour un envoi automatique côté
serveur, brancher plus tard un petit script (PHP, ou service type Formspree).

## Déploiement sur VPS (Nginx)

1. Copier le contenu du dépôt dans le répertoire web, ex. `/var/www/rdacet.fr` :
   ```bash
   rsync -av --exclude '.git' ./ user@vps:/var/www/rdacet.fr/
   ```
2. Bloc serveur Nginx :
   ```nginx
   server {
       listen 80;
       server_name rdacet.fr www.rdacet.fr;
       root /var/www/rdacet.fr;
       index index.html;
       location / { try_files $uri $uri/ =404; }
   }
   ```
3. Activer HTTPS avec Certbot :
   ```bash
   sudo certbot --nginx -d rdacet.fr -d www.rdacet.fr
   ```

## Stack

- HTML5 · CSS3 · JavaScript vanilla (zéro dépendance, zéro build)
- Polices : Fraunces, Inter, JetBrains Mono (Google Fonts)

## Auteur

**Romain Dacet** — BTS SIO 2025-2026
