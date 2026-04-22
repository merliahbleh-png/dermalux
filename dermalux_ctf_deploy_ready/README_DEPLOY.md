# DermaLux deploy facile

## Cosa cambia in questa versione
- `config.php` legge le variabili d'ambiente:
  - `DB_HOST`
  - `DB_PORT`
  - `DB_USER`
  - `DB_PASS`
  - `DB_NAME`
- incluso `Dockerfile`
- incluso config Apache
- pronto per deploy da GitHub su Railway o Render

## GitHub Pages non va bene
GitHub Pages ospita solo siti statici, quindi non esegue PHP e non offre MySQL.

## Deploy più facile: GitHub + Railway

### 1. Crea il repository
- Vai su GitHub
- Crea un nuovo repository
- Carica tutti i file di questa cartella

### 2. Crea il progetto online
- Vai su Railway
- `New Project`
- `Deploy from GitHub repo`
- scegli il repository

### 3. Aggiungi MySQL
- nel progetto clicca `+ New`
- scegli `MySQL`

### 4. Imposta le variabili nel servizio web
Nel servizio della tua app aggiungi:
- `DB_HOST`
- `DB_PORT`
- `DB_USER`
- `DB_PASS`
- `DB_NAME`

Usa i valori del database MySQL creato su Railway.

### 5. Importa il database
Importa `db.sql` nel database remoto.

### 6. Apri il link pubblico
Railway ti darà un URL tipo:
`https://nome-progetto.up.railway.app`

## Alternativa
Puoi usare anche Render con Docker, ma per PHP + MySQL Railway è in genere più lineare se parti da zero.
