# <p align="center">Symfony_crowdin - Translate website </p>
  
Your description here
    
## Screens
        
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

## 🧑🏻‍💻 Usage

```js
import { useMetamask } from '@saura3h/web3-connect'
const client = new useMetamask()
const connectWallet = async () => {
    const wallet = await client.__connectMM()
    console.log(wallet)
}
```
        
## ➤ API Reference

### Submit form
```http
POST /api/form
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name`   | `string` | **Required**. Your name    |
| `email`  | `string` | **Required**. Your email   |
| `message`| `string` | **Required**. Your message |



## ➤ API Reference 2

### Get all users
```http
GET /api/users
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `token` | `string` | **Required**. Your auth token |

### Get user by id
```http
GET /api/users/:userId
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `userId` | `string` | **Required**. Your user id |
        
## 🙇 Acknowledgements      
- [Awesome README]()
- [GitHub Emoji Cheat Sheet]()
- [GitHub Markdown Emoji]()
        
## 🍰 Contributing    
Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

Before contributing, please read the [code of conduct](CODE_OF_CONDUCT.md) & [contributing guidelines](CONTRIBUTING.md).
        
## ❤️ Support  
A simple star to this project repo is enough to keep me motivated on this project for days. If you find your self very much excited with this project let me know with a tweet.

If you have any questions, feel free to reach out to me on [Twitter](https://twitter.com/saurra3h).
        
## 🙇 Author
#### Haroun Azoulay

- Github: [@Haroun-Azoulay](https://github.com/Haroun-Azoulay)