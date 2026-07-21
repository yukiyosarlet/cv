# CV Website - Yukiyo Sarlet (Symfony)

## Installatie

1. Unzip dit project.
2. Open een terminal in de projectmap.
3. Installeer de dependencies:
   ```
   composer install
   ```
4. Start de lokale server:
   ```
   symfony server:start
   ```
   Of zonder Symfony CLI:
   ```
   php -S localhost:8000 -t public
   ```
5. Open in je browser: http://localhost:8000

## Structuur

- `/` → Info-pagina (profiel, contact, opleiding, skills)
- `/ervaring` → Ervaring-pagina (werkervaring als tijdlijn)

## Bestanden aanpassen

- Gegevens Info-pagina: `src/Controller/HomeController.php`
- Gegevens Ervaring-pagina: `src/Controller/ExperienceController.php`
- Templates: `templates/home/index.html.twig` en `templates/experience/index.html.twig`
- Styling: `public/css/style.css`

## Deployen op Render

Dit project bevat een `Dockerfile` en `render.yaml`, dus Render kan alles automatisch herkennen.

**Stap 1 — Zet je project op GitHub**
```
git init
git add .
git commit -m "Eerste versie CV website"
```
Maak een nieuwe (private of public) repo op GitHub aan en push:
```
git remote add origin https://github.com/<jouw-gebruikersnaam>/<repo-naam>.git
git branch -M main
git push -u origin main
```

**Stap 2 — Nieuwe Web Service op Render**
1. Ga naar https://dashboard.render.com
2. Klik **New +** → **Web Service**
3. Koppel je GitHub-account en selecteer de repo
4. Render detecteert automatisch de `Dockerfile` (Environment: Docker)
5. Klik **Create Web Service**

Render bouwt de Docker-image en start de site. Dit duurt bij de eerste build een paar minuten.

**Belangrijk:**
- De gratis Render-plan "slaapt" na inactiviteit — de eerste request na een tijdje kan traag zijn.
- `APP_SECRET` wordt automatisch gegenereerd via `render.yaml`. Pas dit gerust aan in het Render dashboard onder **Environment**.
- Zorg dat je `.env` bestand niet je echte secrets bevat in de git-repo als deze public is — gebruik in dat geval Render's Environment Variables in plaats van `.env`.

## Profielfoto toevoegen

Zet je foto in `public/images/` en voeg in `templates/home/index.html.twig` toe:
```twig
<img src="{{ asset('images/profielfoto.jpg') }}" alt="Yukiyo Sarlet">
```
i.p.v. de `avatar-placeholder` div.
