# ci3-ionauth
Ini adalah library yang digunakan untuk autentikasi proses login dengan fitur RBAC (Role-based access control), anda bisa mengatur level user sesuai dengan hak akses masing-masing, dan ada fitur verifikasi akun via email fitur reset password via email dengan menggunakan smtp. pada script ini saya mencoba menggunakan smtp gratis dari google

## Requirements

- CodeIgniter 3 (saya pakai version 3.1.13) 
- Git

## Installation

1. Siapkan Codeigniter 3 di root folder (htdocs xampp)
2. Install Git
3. Buka terminal di root folder project ketikan

   ```bash
   git clone https://github.com/rosdiyanto/ci3-ionauth.git tmp && rm tmp/LICENSE tmp/README.md && cp -r tmp/* . && rm -rf tmp
   ```
4. Import database `ionauth.sql`

## Configutration
- edit `config/autoload.php`

	```php
	$autoload['packages'] = array(APPPATH.'third_party/ion_auth');
	$autoload['libraries'] = array('database','ion_auth','form_validation');
	$autoload['helper'] = array('url', 'language');
	```

- edit `third_party/ion_auth/config/ion_auth.php` - silahkan sesuaikan dengan akun yang kalian punya, untuk session_hash wajib kalian ubah bebas random
	
	```php
	$config['use_ci_email'] = TRUE;
	$config['session_hash'] = '$2y$10$mjyUuCrKVlS.aCk/na2cNuYSap0CECAVQLfZV4ZU88kpMr1iMJafO';
	$config['email_config'] = [
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'rosdiyanto2012@gmail.com',
		'smtp_pass' => 'mwcackwracxthjuy',
		'mailtype'  => 'html', 
		'charset'   => 'iso-8859-1'
	];
	$config['admin_email'] = "rosdiyanto2022@gmail.com";
	$config['email_activation'] = TRUE;
	```

- edit `config/config.php`
	```php
	$config['language'] = 'indonesian';
	```

## Usage

- `http://hostname/dirapp/index.php/auth/` - Untuk login.
- `http://hostname/dirapp/index.php/auth/logout` - Untuk logout.

## Login
- Admin login

	```
	email 	: admin@admin.com
	pass	: password
	```
- Members login
	```
	email 	: member@gmail.com
	pass	: 12345678
	```
- Resellers login
	```
	email 	: reseller@gmail.com
	pass	: 12345678
	```

## Source

modify from [benedmunds](https://github.com/benedmunds/CodeIgniter-Ion-Auth).
