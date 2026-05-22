# Mini Blog Laravel

## Question 1 — Layouts Blade

### Différence entre `@yield('title')` et `@yield('title', 'Valeur par défaut')`

- `@yield('title')` affiche uniquement le contenu fourni par la vue enfant.
- `@yield('title', 'Valeur par défaut')` affiche une valeur par défaut si aucune section `title` n’est définie.

### Pourquoi utiliser `@extends` ?

`@extends` permet d’éviter la duplication du code HTML (header, footer, navbar, etc.).  
Toutes les vues héritent d’un layout principal, ce qui facilite la maintenance.

### Comment éviter qu’une vue dashboard étende le layout public ?

Les vues dashboard utilisent :

```blade
@extends('dashboard')
```

Les vues publiques utilisent :

```blade
@extends('app')
```

L’organisation des dossiers permet aussi d’éviter les erreurs.

---

## Question 2 — Assets & composants

### Pourquoi utiliser `asset()` ?

La fonction `asset()` génère automatiquement l’URL correcte vers les fichiers CSS, JS ou images du dossier `public`.

Exemple :

```blade
<link rel="stylesheet" href="{{ asset('css/public.css') }}">
```

---

## Question 3 — Sidebar dynamique

### Classe active dynamique

Exemple :

```blade
class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}"
```

Cela ajoute automatiquement la classe `active` si la route actuelle correspond.

### Pourquoi utiliser `components/dashboard/` ?

Cela permet :

- une meilleure organisation
- d’éviter les conflits
- de séparer clairement les composants publics et administratifs

---

## Question 4 — Routes

### Différence entre GET et POST

- `GET` sert à afficher des données ou des pages.
- `POST` sert à envoyer des données vers le serveur.

### Paramètre dynamique

Exemple :

```php
/articles/{slug}
```

Dans le contrôleur :

```php
public function article($slug)
```

Laravel récupère automatiquement la valeur du paramètre.

---

## Question 5 — Groupes de routes

### Syntaxe complète

```php
Route::prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {

    });
```

### Différence entre `prefix()` et `middleware()`

- `prefix()` ajoute un préfixe d’URL.
- `middleware()` applique des filtres ou protections.

### Route::resource()

`Route::resource()` génère automatiquement les routes CRUD.

Exemple :

```php
Route::resource('articles', ArticleController::class);
```

Routes générées :

- index
- create
- store
- show
- edit
- update
- destroy

---

## Question 6 — Contrôleurs

### Générer un contrôleur

Commande :

```bash
php artisan make:controller MainController
```

Contrôleur de ressource :

```bash
php artisan make:controller ArticleController --resource
```

### Méthodes CRUD

| Méthode | Rôle |
|---|---|
| index | liste des données |
| create | formulaire de création |
| store | sauvegarde |
| show | affichage détaillé |
| edit | formulaire de modification |
| update | mise à jour |
| destroy | suppression |

### Passer des données à une vue

Les trois syntaxes suivantes sont équivalentes :

```php
return view('articles', ['posts' => $posts]);
```

```php
return view('articles', compact('posts'));
```

```php
return view('articles')->with('posts', $posts);
```