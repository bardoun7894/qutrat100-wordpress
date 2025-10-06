# Deployment Guide for www.qutrat100.com

## Application Overview

This repository contains a **Quiz Application** with two components:
1. **Standalone Quiz App** - Works independently (quiz.php, admin.php, demo.php)
2. **WordPress Integration** - Custom theme with quiz functionality

## Quick Deployment to Hostinger

### Step 1: Prepare Production Environment

1. **SSH into your Hostinger server** (IP from your SSH config)
```bash
ssh your_username@your_server_ip
```

2. **Navigate to public_html directory**
```bash
cd public_html
```

3. **Clone the repository**
```bash
git clone https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git .
```

### Step 2: Configure Database

1. **Create database in Hostinger cPanel**
   - Go to cPanel → MySQL Databases
   - Create a new database
   - Create a database user with password
   - Grant all privileges to the user

2. **Import database**
```bash
mysql -u your_db_user -p your_db_name < quiz_backup.sql
```

3. **Update database URLs for production**
```sql
UPDATE wp_options SET option_value = 'https://www.qutrat100.com' WHERE option_name IN ('siteurl', 'home');
```

### Step 3: Configure WordPress

1. **Copy and configure wp-config.php**
```bash
cp wp-config-production.php wp-config.php
nano wp-config.php
```

Update these values:
- `DB_NAME` → Your Hostinger database name
- `DB_USER` → Your Hostinger database user
- `DB_PASSWORD` → Your Hostinger database password
- `DB_HOST` → Usually 'localhost'

2. **Generate WordPress security keys**
Visit: https://api.wordpress.org/secret-key/1.1/salt/
Copy the generated keys and replace them in wp-config.php

### Step 4: Configure Standalone Quiz App

1. **Copy and configure database connection**
```bash
cp includes/db-production.php includes/db.php
nano includes/db.php
```

Update with the same database credentials as WordPress.

### Step 5: Set Permissions

```bash
# Set correct ownership
chown -R your_username:your_username /home/your_username/public_html

# Set directory permissions
find . -type d -exec chmod 755 {} \;

# Set file permissions
find . -type f -exec chmod 644 {} \;

# Make uploads directory writable
chmod 755 uploads/
```

### Step 6: Configure .htaccess for URL Rewriting

The `.htaccess` file is already included. Make sure it's in the root directory:

```apache
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
```

### Step 7: Fix Common Live Site Issues

#### Issue 1: Assets (CSS/JS) not loading
If assets don't load, check:

1. **Clear WordPress cache** (if using cache plugin)
2. **Regenerate CSS/JS** in WordPress admin → Appearance → Customize → Save
3. **Verify .htaccess** is present and readable

#### Issue 2: Mixed Content (HTTP/HTTPS)
Force HTTPS in wp-config.php:
```php
define('FORCE_SSL_ADMIN', true);
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
   $_SERVER['HTTPS']='on';
```

#### Issue 3: Permalink Issues
1. Go to WordPress Admin → Settings → Permalinks
2. Click "Save Changes" (this regenerates .htaccess rules)

#### Issue 4: Database Connection Errors
- Verify database credentials in both:
  - `wp-config.php` (for WordPress)
  - `includes/db.php` (for standalone quiz)

## Testing After Deployment

1. **Test WordPress**
   - Visit: https://www.qutrat100.com
   - Login: https://www.qutrat100.com/wp-admin

2. **Test Standalone Quiz**
   - Landing page: https://www.qutrat100.com/demo.php
   - Quiz page: https://www.qutrat100.com/quiz.php
   - Admin panel: https://www.qutrat100.com/admin.php

3. **Test WordPress Quiz Integration**
   - Create a new page in WordPress
   - Select "Quiz Page" as template
   - Publish and visit the page

## Security Recommendations

1. **Change admin password** in admin.php (line 12)
2. **Update WordPress admin password**
3. **Keep WordPress and plugins updated**
4. **Enable HTTPS/SSL** (usually automatic with Hostinger)
5. **Regular database backups**

## Troubleshooting

### PHP Errors
Enable error logging in wp-config.php:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

Check logs in: `wp-content/debug.log`

### File Permission Issues
Reset permissions:
```bash
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;
```

### Database Connection Issues
Test connection:
```bash
php check_db.php
```

## Support

For issues specific to:
- **Hostinger**: Contact Hostinger support
- **WordPress**: Visit WordPress.org forums
- **Application bugs**: Open an issue on GitHub

## Version Information

- WordPress: 6.x
- PHP: 7.4+ (8.1 recommended)
- MySQL: 5.7+ or MariaDB 10.3+
