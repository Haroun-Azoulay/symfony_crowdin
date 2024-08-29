# <p align="center">Symfony_Crowdin - Translate website </p>

## Context
This is my POC for my informatics degree students at ETNA. I have 2 weeks to learn symfony 7. I use simple practices for show good methodoly. I don't have many time for realized this so I miss admin role and I don't have factory my code and so much logic on controller. If I have several days, I update UI UX pages and add more logic and smtp server to reset password and contact for exemple.

I made an introductory PPT on SYMFONY 7 on my github. After that, all bachelor students take an exam with me. They will have to complete the CROWDIN project.

## Subject
Crowdin is a community platform that connects translators (people who speak several languages) with people who need to have their project translated into a language they do not master.

The goal is for the person wishing to translate their project to post all the sentences or words on the platform, and for independent translators to come and translate the project independently.

The site is divided into 3 main sections:

- My account
- Projects
- Translator

You must use :
- Doctrine (ORM)
- Voters & acces controll 
- Form
- Not a lot business logic in the controller
## Screens

![Cover](https://github.com/Haroun-Azoulay/symfony_crowdin/blob/main/img/inscription.png)
![Cover](https://github.com/Haroun-Azoulay/symfony_crowdin/blob/main/img/home-page.png)
![Cover](https://github.com/Haroun-Azoulay/symfony_crowdin/blob/main/img/profil.png)
![Cover](https://github.com/Haroun-Azoulay/symfony_crowdin/blob/main/img/all-projects.png)
![Cover](https://github.com/Haroun-Azoulay/symfony_crowdin/blob/main/img/project.png)
![Cover](https://github.com/Haroun-Azoulay/symfony_crowdin/blob/main/img/translations.png)
        
## 🛠️ Tech Stack
- [Symfony](https://symfony.com/doc/7.0/index.html)

## 🧐 Features    
- PHP 8.3.10
- SYMFONY 7.1.3

## 🛠️ Install Dependencies    

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --no-cache` to build fresh images
3. Run `docker compose up --pull always -d --wait` to set up and start a fresh Symfony project
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.
  

  ## Database
      
| user| projects|sources|translations|profil
| -------|-----------|------------|-----------------|--------|
| id | id| id    |id|id|id
| email    | name    | content    |language|description|
| roles    | start_language| key    |source_id|user_id
|password|target_languages|projects_id|translated_content|languages
pseudo|user_id|create_date|create_date|skills
|create_date|update_date|update_date|update_date|
|update_date||


## ➤ Routes References

###  Main Homepage
```http
GET /
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None`

###  User

###  Inscription
```http
POST /inscription
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None`

###  Connection
```http
POST /connection
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None`

###  Disconnection
```http
POST /disconnection
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None`


###  Profil

### View profil
```http
GET /profile
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None` 

### Create Profile
```http
POST /profile/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None` 

### Show Profile by ID
```http
GET /profile/{id}

```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the profile. |

### Update Profile by ID
```http
POST /profile/update/{id}
```

###  Projects


### View Projects
```http
GET /projects
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None` 

### Create Project
```http
POST /projects/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None` 

### Update Project by ID
```http
POST /projects/update/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the project to update. |

### Show Project by ID
```http
GET /projects/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the project. |

### Delete Project by ID
```http
POST /projects/update/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the project to delete. |


###  Sources


### Show Sources
```http
GET /sources
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `None` 

### GET /sources
```http
POST /sources/create/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the project. |

### Update Sources by ID
```http
POST /sources/update/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the source. |

### Show Source by ID
```http
GET /sources/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the source. |

### Delete Source by ID
```http
POST /sources/delete/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the source. |


###  Translations


### Update Translation by ID
```http
POST /translations/update/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the translations. |


### Delete Translation by ID
```http
POST /translations/delete/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id` | `string` | **Required**. The ID of the translations. |


        
## 🙇 Acknowledgements      
- A [Docker](https://www.docker.com/) - based installer and runtime for the [Symfony](https://symfony.com) web framework,  Thanks a lot for your work !
- A [Etna](https://etna.io/) - thanks also for being a teacher on the php bachelor module.

        
        
## ❤️ Support  
A simple star to this project repo is enough to keep me motivated on this project for days. If you find your self very much excited with this project let me know with a tweet.

If you have any questions, feel free to reach out to me on.
        
## 🙇 Author
#### Haroun Azoulay

- Github: [@Haroun-Azoulay](https://github.com/Haroun-Azoulay)
