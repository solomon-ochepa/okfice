# Wallet

### Account double-entry system
- https://slideplayer.com/slide/2288282/

Account Types: Each account falls into one of five categories, and the effects of debits and credits vary depending on the account type:

- Assets (e.g., cash, inventory): Debit increases, Credit decreases.
- Liabilities (e.g., loans, accounts payable): Debit decreases, Credit increases.
- Equity (e.g., owner’s capital, retained earnings): Debit decreases, Credit increases.
- Revenue (e.g., sales, service income): Debit decreases, Credit increases.
- Expenses (e.g., rent, utilities): Debit increases, Credit decreases.

```
wallet
├─ .editorconfig
├─ .htaccess
├─ Dockerfile
├─ Dockerfile.local
├─ Dockerfile.php-nodejs
├─ README.md
├─ app
│  ├─ Features
│  │  ├─ Feature.php
│  │  ├─ TenantCreate.php
│  │  ├─ TenantDelete.php
│  │  ├─ TenantIndexSearch.php
│  │  ├─ TenantLogin.php
│  │  ├─ TenantShow.php
│  │  └─ TenantUpdate.php
│  ├─ Http
│  │  └─ Controllers
│  │     ├─ AppController.php
│  │     ├─ Auth
│  │     │  └─ VerifyEmailController.php
│  │     └─ Controller.php
│  ├─ Livewire
│  │  ├─ Confirm.php
│  │  └─ Page
│  │     └─ Search.php
│  ├─ Models
│  ├─ Providers
│  │  └─ AppServiceProvider.php
│  └─ helpers.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ modules.php
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ livewire.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ mediable.php
│  ├─ modules-livewire.php
│  ├─ modules.php
│  ├─ nubapi.php
│  ├─ pennant.php
│  ├─ permission.php
│  ├─ queue.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ database.sqlite
│  ├─ factories
│  ├─ migrations
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2025_04_08_052923_create_features_table.php
│  │  └─ tenant
│  │     ├─ 0001_01_01_000001_create_cache_table.php
│  │     ├─ 0001_01_01_000002_create_jobs_table.php
│  │     └─ 2025_04_08_052923_create_features_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ docker-compose.yml
├─ modules
│  ├─ Account
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  └─ Requests
│  │  │  │     └─ AccountRequest.php
│  │  │  ├─ Livewire
│  │  │  │  ├─ Deposit.php
│  │  │  │  ├─ Forms
│  │  │  │  │  ├─ DepositForm.php
│  │  │  │  │  └─ WithdrawForm.php
│  │  │  │  ├─ Stats.php
│  │  │  │  ├─ Wallet.php
│  │  │  │  └─ Withdraw.php
│  │  │  ├─ Models
│  │  │  │  └─ Account.php
│  │  │  └─ Providers
│  │  │     ├─ AccountServiceProvider.php
│  │  │     ├─ EventServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  └─ AccountFactory.php
│  │  │  ├─ migrations
│  │  │  │  └─ tenant
│  │  │  │     └─ 2024_11_16_020121_create_accounts_table.php
│  │  │  └─ seeders
│  │  │     ├─ AccountDatabaseSeeder.php
│  │  │     ├─ AccountSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ layouts
│  │  │     │  └─ master.blade.php
│  │  │     └─ livewire
│  │  │        ├─ deposit.blade.php
│  │  │        ├─ stats.blade.php
│  │  │        ├─ wallet.blade.php
│  │  │        └─ withdraw.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Auth
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  └─ Requests
│  │  │  │     └─ CreateUserRequest.php
│  │  │  ├─ Livewire
│  │  │  │  ├─ Actions
│  │  │  │  │  └─ Logout.php
│  │  │  │  ├─ ConfirmPassword.php
│  │  │  │  ├─ ForgotPassword.php
│  │  │  │  ├─ Forms
│  │  │  │  │  └─ RegistrationForm.php
│  │  │  │  ├─ Login.php
│  │  │  │  ├─ Register.php
│  │  │  │  ├─ ResetPassword.php
│  │  │  │  └─ VerifyEmail.php
│  │  │  └─ Providers
│  │  │     ├─ AuthServiceProvider.php
│  │  │     ├─ EventServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  ├─ migrations
│  │  │  └─ seeders
│  │  │     └─ AuthDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ components
│  │  │     │  └─ page
│  │  │     │     └─ header.blade.php
│  │  │     ├─ layouts
│  │  │     │  └─ master.blade.php
│  │  │     └─ livewire
│  │  │        ├─ confirm-password.blade.php
│  │  │        ├─ forgot-password.blade.php
│  │  │        ├─ login.blade.php
│  │  │        ├─ register.blade.php
│  │  │        ├─ reset-password.blade.php
│  │  │        └─ verify-email.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  ├─ auth.php
│  │  │  ├─ tenant
│  │  │  │  └─ web.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  │  ├─ AuthenticationTest.php
│  │  │  │  ├─ EmailVerificationTest.php
│  │  │  │  ├─ PasswordConfirmationTest.php
│  │  │  │  ├─ PasswordResetTest.php
│  │  │  │  └─ RegistrationTest.php
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Domain
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  └─ DomainController.php
│  │  │  │  └─ Requests
│  │  │  │     └─ DomainRequest.php
│  │  │  ├─ Models
│  │  │  │  └─ Domain.php
│  │  │  └─ Providers
│  │  │     ├─ DomainServiceProvider.php
│  │  │     ├─ EventServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  └─ DomainFactory.php
│  │  │  ├─ migrations
│  │  │  │  └─ 2025_02_11_170451_create_domains_table.php
│  │  │  └─ seeders
│  │  │     ├─ DomainDatabaseSeeder.php
│  │  │     └─ DomainSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     └─ layouts
│  │  │        └─ master.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Group
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  └─ GroupController.php
│  │  │  │  └─ Requests
│  │  │  │     └─ GroupRequest.php
│  │  │  ├─ Models
│  │  │  │  └─ Group.php
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     ├─ GroupServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  └─ GroupFactory.php
│  │  │  ├─ migrations
│  │  │  │  └─ tenant
│  │  │  │     └─ 2024_11_28_064119_create_groups_table.php
│  │  │  └─ seeders
│  │  │     ├─ GroupDatabaseSeeder.php
│  │  │     ├─ GroupSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     └─ layouts
│  │  │        └─ master.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Loan
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  └─ Controllers
│  │  │  │     └─ LoanController.php
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     ├─ LoanServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  ├─ migrations
│  │  │  │  └─ tenant
│  │  │  └─ seeders
│  │  │     ├─ LoanDatabaseSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     └─ layouts
│  │  │        └─ master.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Media
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  └─ MediaController.php
│  │  │  │  ├─ Middleware
│  │  │  │  └─ Requests
│  │  │  ├─ Models
│  │  │  │  ├─ Media.php
│  │  │  │  └─ Mediable.php
│  │  │  └─ Providers
│  │  │     ├─ MediaServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  ├─ migrations
│  │  │  │  ├─ 0000_00_00_000000_create_mediable_tables.php
│  │  │  │  ├─ 0000_00_00_000001_add_variants_to_media.php
│  │  │  │  └─ 0000_00_00_000002_add_alt_to_media.php
│  │  │  └─ seeders
│  │  │     └─ MediaDatabaseSeeder.php
│  │  ├─ lang
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     └─ layouts
│  │  │        └─ master.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Member
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  └─ MemberController.php
│  │  │  │  └─ Requests
│  │  │  │     └─ MemberRequest.php
│  │  │  ├─ Models
│  │  │  │  └─ Member.php
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     ├─ MemberServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  └─ MemberFactory.php
│  │  │  ├─ migrations
│  │  │  │  └─ tenant
│  │  │  │     └─ 2024_11_28_061216_create_members_table.php
│  │  │  └─ seeders
│  │  │     ├─ MemberDatabaseSeeder.php
│  │  │     ├─ MemberSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     └─ layouts
│  │  │        └─ master.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Payment
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  ├─ PaymentController.php
│  │  │  │  │  └─ PaymentMethodController.php
│  │  │  │  └─ Requests
│  │  │  │     ├─ PaymentMethodRequest.php
│  │  │  │     └─ PaymentRequest.php
│  │  │  ├─ Livewire
│  │  │  │  ├─ Create.php
│  │  │  │  ├─ Forms
│  │  │  │  │  └─ CreateForm.php
│  │  │  │  └─ Index.php
│  │  │  ├─ Models
│  │  │  │  ├─ Payment.php
│  │  │  │  └─ PaymentMethod.php
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     ├─ PaymentServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  ├─ PaymentFactory.php
│  │  │  │  └─ PaymentMethodFactory.php
│  │  │  ├─ migrations
│  │  │  │  └─ tenant
│  │  │  │     ├─ 2025_01_03_062124_create_payment_methods_table.php
│  │  │  │     └─ 2025_01_03_062257_create_payments_table.php
│  │  │  └─ seeders
│  │  │     ├─ PaymentDatabaseSeeder.php
│  │  │     ├─ PaymentMethodSeeder.php
│  │  │     ├─ PaymentSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ layouts
│  │  │     │  └─ master.blade.php
│  │  │     └─ livewire
│  │  │        ├─ create.blade.php
│  │  │        └─ index.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Permission
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  └─ PermissionController.php
│  │  │  │  ├─ Middleware
│  │  │  │  └─ Requests
│  │  │  │     └─ CreatePermissionRequest.php
│  │  │  ├─ Livewire
│  │  │  │  ├─ Index.php
│  │  │  │  ├─ Modals
│  │  │  │  │  └─ Create.php
│  │  │  │  └─ Role
│  │  │  │     └─ Index.php
│  │  │  ├─ Models
│  │  │  │  └─ Permission.php
│  │  │  └─ Providers
│  │  │     ├─ PermissionServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  ├─ migrations
│  │  │  │  ├─ 2023_11_08_135532_create_permission_tables.php
│  │  │  │  ├─ 2024_04_23_121310_add_columns_to_permission_table.php
│  │  │  │  └─ tenant
│  │  │  │     ├─ 2023_11_08_135532_create_permission_tables.php
│  │  │  │     └─ 2024_04_23_121310_add_columns_to_permission_table.php
│  │  │  └─ seeders
│  │  │     ├─ PermissionDatabaseSeeder.php
│  │  │     ├─ PermissionSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ lang
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     ├─ layouts
│  │  │     │  └─ master.blade.php
│  │  │     ├─ livewire
│  │  │     │  ├─ index.blade.php
│  │  │     │  ├─ modals
│  │  │     │  │  └─ create.blade.php
│  │  │     │  └─ role
│  │  │     │     └─ index.blade.php
│  │  │     └─ show.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Role
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  └─ RoleController.php
│  │  │  │  └─ Requests
│  │  │  │     ├─ CreateRoleRequest.php
│  │  │  │     └─ UpdateRoleRequest.php
│  │  │  ├─ Livewire
│  │  │  │  ├─ Forms
│  │  │  │  │  └─ CreateForm.php
│  │  │  │  ├─ Index.php
│  │  │  │  └─ Modals
│  │  │  │     ├─ Create.php
│  │  │  │     └─ Edit.php
│  │  │  ├─ Models
│  │  │  │  └─ Role.php
│  │  │  └─ Providers
│  │  │     ├─ RoleServiceProvider.php
│  │  │     └─ RouteServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ migrations
│  │  │  │  ├─ 2024_04_05_142030_add_columns_to_roles_table.php
│  │  │  │  └─ tenant
│  │  │  │     └─ 2024_04_05_142030_add_columns_to_roles_table.php
│  │  │  └─ seeders
│  │  │     ├─ RoleDatabaseSeeder.php
│  │  │     ├─ RoleSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  └─ views
│  │  │     ├─ layouts
│  │  │     │  └─ master.blade.php
│  │  │     ├─ livewire
│  │  │     │  ├─ index.blade.php
│  │  │     │  └─ modals
│  │  │     │     ├─ create.blade.php
│  │  │     │     └─ edit.blade.php
│  │  │     └─ show.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  └─ vite.config.js
│  ├─ Status
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  └─ StatusController.php
│  │  │  │  └─ Requests
│  │  │  │     └─ StatusRequest.php
│  │  │  ├─ Models
│  │  │  │  └─ Status.php
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     ├─ RouteServiceProvider.php
│  │  │     └─ StatusServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  └─ StatusFactory.php
│  │  │  ├─ migrations
│  │  │  │  ├─ 2024_11_28_042254_create_statuses_table.php
│  │  │  │  └─ tenant
│  │  │  │     └─ 2024_11_28_042254_create_statuses_table.php
│  │  │  └─ seeders
│  │  │     ├─ StatusDatabaseSeeder.php
│  │  │     ├─ StatusSeeder.php
│  │  │     └─ TenantDatabaseSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     └─ layouts
│  │  │        └─ master.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Tenancy
│  │  ├─ README.md
│  │  ├─ app
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     └─ TenancyServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  ├─ config.php
│  │  │  └─ tenancy.php
│  │  ├─ database
│  │  │  └─ seeders
│  │  │     ├─ TenancyDatabaseSeeder.php
│  │  │     └─ TenantsDatabaseSeeders.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     └─ components
│  │  │        ├─ layouts
│  │  │        │  ├─ app.blade.php
│  │  │        │  └─ guest.blade.php
│  │  │        └─ themes
│  │  │           └─ guest
│  │  │              ├─ header.blade.php
│  │  │              └─ search.blade.php
│  │  ├─ routes
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Tenant
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  ├─ Admin
│  │  │  │  │  │  └─ TenantController.php
│  │  │  │  │  ├─ Api
│  │  │  │  │  │  └─ TenantController.php
│  │  │  │  │  ├─ Tenant
│  │  │  │  │  │  ├─ Api
│  │  │  │  │  │  │  └─ TenantController.php
│  │  │  │  │  │  └─ TenantController.php
│  │  │  │  │  └─ TenantController.php
│  │  │  │  └─ Requests
│  │  │  │     └─ TenantRequest.php
│  │  │  ├─ Livewire
│  │  │  │  ├─ Admin
│  │  │  │  │  ├─ Index.php
│  │  │  │  │  ├─ Modals
│  │  │  │  │  │  └─ Create.php
│  │  │  │  │  └─ Show.php
│  │  │  │  └─ Forms
│  │  │  │     └─ Admin
│  │  │  │        └─ CreateForm.php
│  │  │  ├─ Models
│  │  │  │  └─ Tenant.php
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     ├─ RouteServiceProvider.php
│  │  │     └─ TenantServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  └─ TenantFactory.php
│  │  │  ├─ migrations
│  │  │  │  ├─ 2025_02_11_170440_create_tenants_table.php
│  │  │  │  └─ 2025_03_01_150510_create_tenant_user_impersonation_tokens_table.php
│  │  │  └─ seeders
│  │  │     ├─ PermissionsSeeder.php
│  │  │     ├─ TenantDatabaseSeeder.php
│  │  │     └─ TenantSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ dashboard.blade.php
│  │  │     ├─ livewire
│  │  │     │  └─ admin
│  │  │     │     ├─ index.blade.php
│  │  │     │     ├─ modals
│  │  │     │     │  └─ create.blade.php
│  │  │     │     └─ show.blade.php
│  │  │     └─ welcome.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  ├─ tenant
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  ├─ Transaction
│  │  ├─ app
│  │  │  ├─ Http
│  │  │  │  ├─ Controllers
│  │  │  │  │  ├─ TransactionController.php
│  │  │  │  │  ├─ TransactionEntryController.php
│  │  │  │  │  └─ TransactionTypeController.php
│  │  │  │  └─ Requests
│  │  │  │     ├─ TransactionEntryRequest.php
│  │  │  │     ├─ TransactionRequest.php
│  │  │  │     └─ TransactionTypeRequest.php
│  │  │  ├─ Livewire
│  │  │  │  └─ Recent.php
│  │  │  ├─ Models
│  │  │  │  ├─ Transaction.php
│  │  │  │  ├─ TransactionEntry.php
│  │  │  │  └─ TransactionType.php
│  │  │  └─ Providers
│  │  │     ├─ EventServiceProvider.php
│  │  │     ├─ RouteServiceProvider.php
│  │  │     └─ TransactionServiceProvider.php
│  │  ├─ composer.json
│  │  ├─ config
│  │  │  └─ config.php
│  │  ├─ database
│  │  │  ├─ factories
│  │  │  │  ├─ TransactionEntryFactory.php
│  │  │  │  ├─ TransactionFactory.php
│  │  │  │  └─ TransactionTypeFactory.php
│  │  │  ├─ migrations
│  │  │  │  └─ tenant
│  │  │  │     └─ 2024_11_28_042325_create_transactions_table.php
│  │  │  └─ seeders
│  │  │     ├─ TenantDatabaseSeeder.php
│  │  │     ├─ TransactionDatabaseSeeder.php
│  │  │     ├─ TransactionEntrySeeder.php
│  │  │     ├─ TransactionSeeder.php
│  │  │     └─ TransactionTypeSeeder.php
│  │  ├─ module.json
│  │  ├─ package.json
│  │  ├─ resources
│  │  │  ├─ assets
│  │  │  │  ├─ js
│  │  │  │  │  └─ app.js
│  │  │  │  └─ sass
│  │  │  │     └─ app.scss
│  │  │  └─ views
│  │  │     ├─ index.blade.php
│  │  │     ├─ layouts
│  │  │     │  └─ master.blade.php
│  │  │     └─ livewire
│  │  │        └─ recent.blade.php
│  │  ├─ routes
│  │  │  ├─ api.php
│  │  │  └─ web.php
│  │  ├─ tests
│  │  │  ├─ Feature
│  │  │  └─ Unit
│  │  └─ vite.config.js
│  └─ User
│     ├─ app
│     │  ├─ Http
│     │  │  ├─ Controllers
│     │  │  │  └─ Admin
│     │  │  │     └─ UserController.php
│     │  │  ├─ Middleware
│     │  │  └─ Requests
│     │  │     ├─ CreateUserRequest.php
│     │  │     └─ UpdateUserRequest.php
│     │  ├─ Livewire
│     │  │  ├─ Admin
│     │  │  │  ├─ Index.php
│     │  │  │  └─ Modals
│     │  │  │     ├─ Create.php
│     │  │  │     └─ Import.php
│     │  │  ├─ Modals
│     │  │  │  └─ Create.php
│     │  │  └─ Settings
│     │  │     ├─ Appearance.php
│     │  │     ├─ DeleteUserForm.php
│     │  │     ├─ Password.php
│     │  │     └─ Profile.php
│     │  ├─ Models
│     │  │  ├─ Profile.php
│     │  │  └─ User.php
│     │  └─ Providers
│     │     ├─ AuthServiceProvider.php
│     │     ├─ EventServiceProvider.php
│     │     ├─ RouteServiceProvider.php
│     │     └─ UserServiceProvider.php
│     ├─ composer.json
│     ├─ config
│     │  └─ config.php
│     ├─ database
│     │  ├─ factories
│     │  │  └─ UserFactory.php
│     │  ├─ migrations
│     │  │  ├─ 0001_01_01_000000_create_users_table.php
│     │  │  ├─ 2023_10_31_120449_create_profiles_table.php
│     │  │  └─ tenant
│     │  │     ├─ 0001_01_01_000000_create_users_table.php
│     │  │     └─ 2023_10_31_120449_create_profiles_table.php
│     │  └─ seeders
│     │     ├─ TenantDatabaseSeeder.php
│     │     ├─ UserDatabaseSeeder.php
│     │     ├─ UserPermissionSeeder.php
│     │     └─ UserSeeder.php
│     ├─ lang
│     ├─ module.json
│     ├─ package.json
│     ├─ resources
│     │  ├─ assets
│     │  │  ├─ js
│     │  │  │  └─ app.js
│     │  │  └─ sass
│     │  │     └─ app.scss
│     │  └─ views
│     │     ├─ components
│     │     │  └─ settings
│     │     │     └─ layout.blade.php
│     │     ├─ layouts
│     │     │  └─ master.blade.php
│     │     ├─ livewire
│     │     │  ├─ admin
│     │     │  │  ├─ index.blade.php
│     │     │  │  └─ modals
│     │     │  │     ├─ create.blade.php
│     │     │  │     └─ import.blade.php
│     │     │  └─ settings
│     │     │     ├─ appearance.blade.php
│     │     │     ├─ delete-user-form.blade.php
│     │     │     ├─ password.blade.php
│     │     │     └─ profile.blade.php
│     │     ├─ partials
│     │     │  └─ settings-heading.blade.php
│     │     └─ profile
│     │        ├─ edit.blade.php
│     │        ├─ partials
│     │        │  ├─ delete-user-form.blade.php
│     │        │  ├─ update-password-form.blade.php
│     │        │  └─ update-profile-information-form.blade.php
│     │        └─ show.blade.php
│     ├─ routes
│     │  ├─ api.php
│     │  └─ web.php
│     ├─ tests
│     │  ├─ Feature
│     │  │  ├─ ProfileTest.php
│     │  │  └─ Settings
│     │  │     ├─ PasswordUpdateTest.php
│     │  │     └─ ProfileUpdateTest.php
│     │  └─ Unit
│     └─ vite.config.js
├─ modules.json
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ assets
│  │  ├─ app
│  │  │  ├─ css
│  │  │  │  ├─ ionicons.min.css
│  │  │  │  ├─ src
│  │  │  │  │  ├─ bootstrap
│  │  │  │  │  │  └─ bootstrap.min.css
│  │  │  │  │  └─ splide
│  │  │  │  │     └─ splide.min.css
│  │  │  │  └─ style.css
│  │  │  ├─ img
│  │  │  │  ├─ favicon.png
│  │  │  │  ├─ icon
│  │  │  │  │  └─ 192x192.png
│  │  │  │  ├─ loading-icon.png
│  │  │  │  ├─ logo.png
│  │  │  │  └─ sample
│  │  │  │     ├─ avatar
│  │  │  │     │  ├─ avatar1.jpg
│  │  │  │     │  ├─ avatar10.jpg
│  │  │  │     │  ├─ avatar2.jpg
│  │  │  │     │  ├─ avatar3.jpg
│  │  │  │     │  ├─ avatar4.jpg
│  │  │  │     │  ├─ avatar5.jpg
│  │  │  │     │  ├─ avatar6.jpg
│  │  │  │     │  ├─ avatar7.jpg
│  │  │  │     │  ├─ avatar8.jpg
│  │  │  │     │  └─ avatar9.jpg
│  │  │  │     ├─ brand
│  │  │  │     │  ├─ 1.jpg
│  │  │  │     │  ├─ 2.jpg
│  │  │  │     │  ├─ 3.jpg
│  │  │  │     │  ├─ 4.jpg
│  │  │  │     │  └─ 5.jpg
│  │  │  │     ├─ photo
│  │  │  │     │  ├─ 1.jpg
│  │  │  │     │  ├─ 2.jpg
│  │  │  │     │  ├─ 3.jpg
│  │  │  │     │  ├─ 4.jpg
│  │  │  │     │  ├─ 5.jpg
│  │  │  │     │  ├─ 6.jpg
│  │  │  │     │  ├─ vector1.png
│  │  │  │     │  ├─ vector2.png
│  │  │  │     │  ├─ vector3.png
│  │  │  │     │  ├─ wide1.jpg
│  │  │  │     │  ├─ wide2.jpg
│  │  │  │     │  ├─ wide3.jpg
│  │  │  │     │  └─ wide4.jpg
│  │  │  │     └─ qr.png
│  │  │  └─ js
│  │  │     ├─ base.js
│  │  │     ├─ ionicons.js
│  │  │     ├─ lib
│  │  │     │  └─ bootstrap.bundle.min.js
│  │  │     └─ plugins
│  │  │        ├─ apexcharts
│  │  │        │  └─ apexcharts.min.js
│  │  │        └─ splide
│  │  │           └─ splide.min.js
│  │  └─ guest
│  ├─ browserconfig.xml
│  ├─ build
│  │  ├─ assets
│  │  │  ├─ app-CjfE1Ck1.css
│  │  │  ├─ app-l0sNRNKZ.js
│  │  │  ├─ fa-brands-400-D1LuMI3I.ttf
│  │  │  ├─ fa-brands-400-D_cYUPeE.woff2
│  │  │  ├─ fa-regular-400-BjRzuEpd.woff2
│  │  │  ├─ fa-regular-400-DZaxPHgR.ttf
│  │  │  ├─ fa-solid-900-CTAAxXor.woff2
│  │  │  ├─ fa-solid-900-D0aA9rwL.ttf
│  │  │  ├─ fa-v4compatibility-C9RhG_FT.woff2
│  │  │  └─ fa-v4compatibility-CCth-dXg.ttf
│  │  └─ manifest.json
│  ├─ favicon.ico
│  ├─ icons
│  │  ├─ android-icon-144x144.png
│  │  ├─ android-icon-192x192.png
│  │  ├─ android-icon-36x36.png
│  │  ├─ android-icon-48x48.png
│  │  ├─ android-icon-72x72.png
│  │  ├─ android-icon-96x96.png
│  │  ├─ apple-icon-114x114.png
│  │  ├─ apple-icon-120x120.png
│  │  ├─ apple-icon-144x144.png
│  │  ├─ apple-icon-152x152.png
│  │  ├─ apple-icon-180x180.png
│  │  ├─ apple-icon-57x57.png
│  │  ├─ apple-icon-60x60.png
│  │  ├─ apple-icon-72x72.png
│  │  ├─ apple-icon-76x76.png
│  │  ├─ apple-icon-precomposed.png
│  │  ├─ apple-icon.png
│  │  ├─ favicon-16x16.png
│  │  ├─ favicon-32x32.png
│  │  ├─ favicon-96x96.png
│  │  ├─ favicon.ico
│  │  ├─ ms-icon-144x144.png
│  │  ├─ ms-icon-150x150.png
│  │  ├─ ms-icon-310x310.png
│  │  └─ ms-icon-70x70.png
│  ├─ index.php
│  ├─ logo.png
│  ├─ manifest.json
│  ├─ modules
│  ├─ robots.txt
│  ├─ unknown.webp
│  └─ vendor
│     └─ telescope
│        ├─ app-dark.css
│        ├─ app.css
│        ├─ app.js
│        ├─ favicon.ico
│        └─ mix-manifest.json
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  └─ app.js
│  └─ views
│     ├─ admin.blade.php
│     ├─ components
│     │  ├─ a.blade.php
│     │  ├─ action-message.blade.php
│     │  ├─ alert.blade.php
│     │  ├─ app-logo-icon.blade.php
│     │  ├─ app-logo.blade.php
│     │  ├─ input
│     │  │  ├─ clear.blade.php
│     │  │  ├─ error.blade.php
│     │  │  └─ required.blade.php
│     │  ├─ layouts
│     │  │  ├─ app
│     │  │  │  ├─ header.blade.php
│     │  │  │  ├─ partials
│     │  │  │  │  ├─ foot.blade.php
│     │  │  │  │  └─ head.blade.php
│     │  │  │  └─ sidebar.blade.php
│     │  │  ├─ app.blade.php
│     │  │  ├─ auth
│     │  │  │  ├─ card.blade.php
│     │  │  │  ├─ partials
│     │  │  │  │  ├─ foot.blade.php
│     │  │  │  │  └─ head.blade.php
│     │  │  │  ├─ simple.blade.php
│     │  │  │  └─ split.blade.php
│     │  │  ├─ auth.blade.php
│     │  │  ├─ guest
│     │  │  │  ├─ header.blade.php
│     │  │  │  └─ partials
│     │  │  │     ├─ foot.blade.php
│     │  │  │     └─ head.blade.php
│     │  │  ├─ guest.blade.php
│     │  │  ├─ partials
│     │  │  │  ├─ foot.blade.php
│     │  │  │  └─ head.blade.php
│     │  │  └─ src
│     │  │     └─ FinApp
│     │  │        ├─ __manifest.json
│     │  │        ├─ app-404.html
│     │  │        ├─ app-about.html
│     │  │        ├─ app-bills.html
│     │  │        ├─ app-blog-post.html
│     │  │        ├─ app-blog.html
│     │  │        ├─ app-cards.html
│     │  │        ├─ app-components.html
│     │  │        ├─ app-contact.html
│     │  │        ├─ app-faq.html
│     │  │        ├─ app-forgot-password.html
│     │  │        ├─ app-login.html
│     │  │        ├─ app-notification-detail.html
│     │  │        ├─ app-notifications.html
│     │  │        ├─ app-pages.html
│     │  │        ├─ app-qr-code.html
│     │  │        ├─ app-register.html
│     │  │        ├─ app-savings.html
│     │  │        ├─ app-settings.html
│     │  │        ├─ app-sms-verification.html
│     │  │        ├─ app-splash-image.html
│     │  │        ├─ app-splash.html
│     │  │        ├─ app-transaction-detail.html
│     │  │        ├─ app-transaction-verification.html
│     │  │        ├─ app-transactions.html
│     │  │        ├─ assets
│     │  │        │  ├─ css
│     │  │        │  │  ├─ ionicons.min.css
│     │  │        │  │  ├─ src
│     │  │        │  │  │  ├─ bootstrap
│     │  │        │  │  │  │  └─ bootstrap.min.css
│     │  │        │  │  │  └─ splide
│     │  │        │  │  │     └─ splide.min.css
│     │  │        │  │  └─ style.css
│     │  │        │  ├─ img
│     │  │        │  │  ├─ favicon.png
│     │  │        │  │  ├─ icon
│     │  │        │  │  │  └─ 192x192.png
│     │  │        │  │  ├─ loading-icon.png
│     │  │        │  │  ├─ logo.png
│     │  │        │  │  └─ sample
│     │  │        │  │     ├─ avatar
│     │  │        │  │     │  ├─ avatar1.jpg
│     │  │        │  │     │  ├─ avatar10.jpg
│     │  │        │  │     │  ├─ avatar2.jpg
│     │  │        │  │     │  ├─ avatar3.jpg
│     │  │        │  │     │  ├─ avatar4.jpg
│     │  │        │  │     │  ├─ avatar5.jpg
│     │  │        │  │     │  ├─ avatar6.jpg
│     │  │        │  │     │  ├─ avatar7.jpg
│     │  │        │  │     │  ├─ avatar8.jpg
│     │  │        │  │     │  └─ avatar9.jpg
│     │  │        │  │     ├─ brand
│     │  │        │  │     │  ├─ 1.jpg
│     │  │        │  │     │  ├─ 2.jpg
│     │  │        │  │     │  ├─ 3.jpg
│     │  │        │  │     │  ├─ 4.jpg
│     │  │        │  │     │  └─ 5.jpg
│     │  │        │  │     ├─ photo
│     │  │        │  │     │  ├─ 1.jpg
│     │  │        │  │     │  ├─ 2.jpg
│     │  │        │  │     │  ├─ 3.jpg
│     │  │        │  │     │  ├─ 4.jpg
│     │  │        │  │     │  ├─ 5.jpg
│     │  │        │  │     │  ├─ 6.jpg
│     │  │        │  │     │  ├─ vector1.png
│     │  │        │  │     │  ├─ vector2.png
│     │  │        │  │     │  ├─ vector3.png
│     │  │        │  │     │  ├─ wide1.jpg
│     │  │        │  │     │  ├─ wide2.jpg
│     │  │        │  │     │  ├─ wide3.jpg
│     │  │        │  │     │  └─ wide4.jpg
│     │  │        │  │     └─ qr.png
│     │  │        │  └─ js
│     │  │        │     ├─ base.js
│     │  │        │     ├─ ionicons.js
│     │  │        │     ├─ lib
│     │  │        │     │  └─ bootstrap.bundle.min.js
│     │  │        │     └─ plugins
│     │  │        │        ├─ apexcharts
│     │  │        │        │  └─ apexcharts.min.js
│     │  │        │        └─ splide
│     │  │        │           └─ splide.min.js
│     │  │        ├─ component-accordion.html
│     │  │        ├─ component-action-sheet.html
│     │  │        ├─ component-add-to-home.html
│     │  │        ├─ component-alert.html
│     │  │        ├─ component-appbottommenu.html
│     │  │        ├─ component-appheader.html
│     │  │        ├─ component-badge.html
│     │  │        ├─ component-button.html
│     │  │        ├─ component-card.html
│     │  │        ├─ component-carousel.html
│     │  │        ├─ component-charts.html
│     │  │        ├─ component-checkbox.html
│     │  │        ├─ component-chips.html
│     │  │        ├─ component-contentbox.html
│     │  │        ├─ component-cookies-box.html
│     │  │        ├─ component-dialog.html
│     │  │        ├─ component-dropdown.html
│     │  │        ├─ component-fullpage-slider.html
│     │  │        ├─ component-grid.html
│     │  │        ├─ component-icons.html
│     │  │        ├─ component-images.html
│     │  │        ├─ component-inputs.html
│     │  │        ├─ component-listview.html
│     │  │        ├─ component-messages.html
│     │  │        ├─ component-modal-and-panels.html
│     │  │        ├─ component-notification.html
│     │  │        ├─ component-preloader.html
│     │  │        ├─ component-progressbar.html
│     │  │        ├─ component-radio.html
│     │  │        ├─ component-search.html
│     │  │        ├─ component-table.html
│     │  │        ├─ component-tabs.html
│     │  │        ├─ component-timeline.html
│     │  │        ├─ component-toast.html
│     │  │        ├─ component-toggle.html
│     │  │        ├─ component-tooltips.html
│     │  │        ├─ component-typography.html
│     │  │        ├─ crypto-coin-detail.html
│     │  │        ├─ crypto-exchange.html
│     │  │        ├─ crypto-index.html
│     │  │        ├─ crypto-portfolio.html
│     │  │        ├─ crypto-transactions.html
│     │  │        └─ index.html
│     │  ├─ link-icon.blade.php
│     │  ├─ placeholder-pattern.blade.php
│     │  └─ themes
│     │     ├─ app
│     │     │  ├─ add-to-home-screen.blade.php
│     │     │  ├─ bottom-menu.blade.php
│     │     │  ├─ cookies.blade.php
│     │     │  ├─ header.blade.php
│     │     │  ├─ loader.blade.php
│     │     │  └─ sidebar.blade.php
│     │     └─ guest
│     ├─ dashboard.blade.php
│     ├─ livewire
│     │  ├─ admin
│     │  │  └─ dashboard.blade.php
│     │  ├─ confirm.blade.php
│     │  └─ page
│     │     └─ search.blade.php
│     ├─ partials
│     └─ welcome.blade.php
├─ routes
│  ├─ cli.php
│  ├─ console.php
│  ├─ tenant
│  │  └─ web.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  ├─ debugbar
│  │  ├─ 01JSGRFGXM7CY4TW8GSAX7HK0R.json
│  │  ├─ 01JSGRFHP6Y7J66CQF2ZMCSNCK.json
│  │  ├─ 01JSGRFPV81R4MK487311XQTBK.json
│  │  ├─ 01JSGRFTK5DQHZ2HCDY23ZFFDN.json
│  │  ├─ 01JSGRFVG0JM1WZR6XHTGPXFGJ.json
│  │  ├─ 01JSGRFYS7PN38PJ6ZZPV4R921.json
│  │  ├─ 01JSGRHN7WH1M6CGPXF7A0KMFY.json
│  │  ├─ 01JSGRHRJ46G0JF6JCHPA8PZ92.json
│  │  ├─ 01JSGRHVYFNN6E1RNSC5FV5ZR5.json
│  │  ├─ 01JSGRHWHKSJG6ZB9S6H6T2R9M.json
│  │  ├─ 01JSGRK93HKYXMNAJHXNREP8GP.json
│  │  ├─ 01JSGRK9NCK30339VAZTCA6QAB.json
│  │  ├─ 01JSGRKBYYTZPZQF527C86X010.json
│  │  ├─ 01JSGRKCSGV09KW4QT81HRWS9V.json
│  │  ├─ 01JSGRKET6WZHG0CXPNXPX0QN9.json
│  │  ├─ 01JSGRN7V7MHH4KXREXWDX2XJC.json
│  │  ├─ 01JSGRN8BMNJW2JGCMJB91TNW1.json
│  │  ├─ 01JSGRPNSQCD8KRFA92V2HX2RX.json
│  │  ├─ 01JSGRQJ7DYBB6E02HC0WAB0Y5.json
│  │  ├─ 01JSGRZ7WCAXK40ZT27VGW1EQB.json
│  │  ├─ 01JSGRZTF4GDDX43G81TP49YZJ.json
│  │  ├─ 01JSGRZV0V74NN7RPSVCTWFQRZ.json
│  │  ├─ 01JSGS0WDYKS64AKNGHDQ8Q7VE.json
│  │  ├─ 01JSGS0WZX0VYQQECWVKBV1NRE.json
│  │  ├─ 01JSGS13Q5H6JXK59FAE52VB0R.json
│  │  ├─ 01JSGS164H18Z31R0WNN1536DN.json
│  │  ├─ 01JSGS17NJM642NHEJE8BV83AG.json
│  │  ├─ 01JSGS187PVS9CB9HHT4D51M3Z.json
│  │  ├─ 01JSGS1A50RDGCNMFG51XH3YN6.json
│  │  ├─ 01JSGS1AKHJJ87FZA1QCD6PTZ3.json
│  │  ├─ 01JSGS1FT6P0QHPJBKBPZXAN0G.json
│  │  ├─ 01JSGS1G99BRRJSMWCSJ1S9CDY.json
│  │  ├─ 01JSGS1M252M6TY8WBE9ZHW56E.json
│  │  ├─ 01JSGS1MEABJBP2AD7JCRRRWPB.json
│  │  ├─ 01JSGS1NVEH5N5PRZD17BS59W2.json
│  │  ├─ 01JSGS1V5AQKYXPR7BJ1C7SRF0.json
│  │  ├─ 01JSGS1ZJRHBEHY1PMEG4N6SGQ.json
│  │  ├─ 01JSGS202CASZGXDAEMGZMZRM8.json
│  │  ├─ 01JSGS21VRJ9FFGWJ09WMK7WN8.json
│  │  ├─ 01JSGS22F2Z3W30871H8N8BDS4.json
│  │  ├─ 01JSGSCJM8AB1RN2T31SCJC591.json
│  │  ├─ 01JSGSCNSBBQCZT9A6Z9XHE3KR.json
│  │  ├─ 01JSGSCPD3Y3JE7AD0P680ESJH.json
│  │  ├─ 01JSGSCRFSZK6YZTZ53GP64V5E.json
│  │  ├─ 01JSGSCS050X8ZRXG4XWTGFGK1.json
│  │  ├─ 01JSJ3FNQFMCG0D5VEYFWQ8EF3.json
│  │  ├─ 01JSJ3FYDHG3TDN20JC7CKJSKT.json
│  │  ├─ 01JSJ3FZ5VXKSY5FH410HW6EV4.json
│  │  ├─ 01JSJ3G3SC928ZSTM820WJPJ7B.json
│  │  ├─ 01JSJ3G4GWMSRSJMNGA8VPRHMM.json
│  │  ├─ 01JSJKX50Q6HZGJEN62GHK79X6.json
│  │  ├─ 01JSJKX5PJNG1J36DJDTCVF7JS.json
│  │  ├─ 01JSJKXAKH9F94QZWZ6B7NNGPZ.json
│  │  ├─ 01JSJKXBE3NFHQ4WAJQYRPKV3F.json
│  │  ├─ 01JSJKXF9A1Z46PV5WXKG67C8E.json
│  │  ├─ 01JSJMMCW6YMH61FZ3ZQTTJBY6.json
│  │  ├─ 01JSJMMD91W7Q1GTTBNE8SHXQW.json
│  │  ├─ 01JSJMMDWFW73QQAJDZT3H4YF2.json
│  │  ├─ 01JSJMPEQMWHYCXSH19GFVKPP2.json
│  │  ├─ 01JSJMPF9N0YG7Q1Q0N6AYF91F.json
│  │  ├─ 01JSJMPJP413PCF4R4M1WTT3Z9.json
│  │  ├─ 01JSJMPMP670GVVPETY44FZNM6.json
│  │  ├─ 01JSJMSEAJX3SCAA7GVN50W3YZ.json
│  │  ├─ 01JSJMSSHK399PV3NMFBR8TTX2.json
│  │  ├─ 01JSJMSSKXHVACSGV9ERE9CEQ2.json
│  │  ├─ 01JSJMT83119AJMT5860NJ4E8B.json
│  │  ├─ 01JSJMTGHGYEF119GTXQ57T763.json
│  │  ├─ 01JSJMVP248GJ76NDYTD888BKV.json
│  │  ├─ 01JSJMXRVWZX5PM685CJDVJVFN.json
│  │  ├─ 01JSJMZF0KNN3A7F730WBDSNV5.json
│  │  ├─ 01JSJMZJKH459MGXTZVJXHBD06.json
│  │  ├─ 01JSJMZJSJXPK91A861PKW828P.json
│  │  ├─ 01JSJN8G1K1CPSBKGBT3579P2N.json
│  │  ├─ 01JSJN9PJ5SB24TJEBA7XXZ9NG.json
│  │  ├─ 01JSJP1KHNJY8PEFM5S23BXN1P.json
│  │  ├─ 01JSJP38A5G25PC135SK1WN52P.json
│  │  ├─ 01JSJPVKEN8GHT9Q4DKJHAKDF1.json
│  │  ├─ 01JSJPX55ZD7XEQWDFF1M8XETF.json
│  │  ├─ 01JSJQ054A98EGA71E89QV7QPN.json
│  │  ├─ 01JSJQ26RJB8TQKFE4DEZKKRS3.json
│  │  ├─ 01JSJQ6AZ9MS0KC8MNWGM5KPN2.json
│  │  ├─ 01JSJQ7F420EHKGHZJ93GHDH7D.json
│  │  ├─ 01JSJQ7WFAY70GVPHWTKSPGXAF.json
│  │  ├─ 01JSJQ9AVSTDZJKNVXXF18FXZ1.json
│  │  ├─ 01JSJQ9BG82MYF0H2X094BNCVQ.json
│  │  ├─ 01JSJQ9CCPKHBNV1G9D72J0R39.json
│  │  ├─ 01JSJQ9KBHB3PDNNPNFCAY389Q.json
│  │  ├─ 01JSJQ9M25YWBQ9Z67VZRJV36G.json
│  │  ├─ 01JSJQ9P6B29J152HNM4QQ6DHP.json
│  │  ├─ 01JSJQ9QMA1HKX8A0CERGATNX4.json
│  │  ├─ 01JSJQ9VYFGC3JKY5HQDENHKTA.json
│  │  ├─ 01JSJQ9WJTXBRRA79KFXSJEABX.json
│  │  ├─ 01JSJQ9X9Q5ZMKJB3YG9R1JRGS.json
│  │  ├─ 01JSJQEBT7RSTBM3YT50CNZKNW.json
│  │  ├─ 01JSJQEZ3ZY5HD35EV36PEB878.json
│  │  ├─ 01JSJQEZT6HPR20PR6KDCA4WS4.json
│  │  ├─ 01JSJQFATM55Z8938D8XDMADHH.json
│  │  ├─ 01JSJQFSZ4M7VNGVJ9AQB0RT5Y.json
│  │  ├─ 01JSJQFZQPS1SHVJPZ5BR9YPQR.json
│  │  ├─ 01JSJQG0MWS7Y4MQ98N6598B7R.json
│  │  ├─ 01JSJQG7TJ4AB8RJ1PHTZKQA45.json
│  │  ├─ 01JSJQG8J1717F0TS8KP1D5W90.json
│  │  ├─ 01JSJQGNYCVERG3PXP85JQAQY6.json
│  │  ├─ 01JSJQGPBG1J4ZKY309X7CN6G9.json
│  │  ├─ 01JSJQGPXWJ5F2QX9ENT49SG1T.json
│  │  ├─ 01JSJQP889211C7A0B2M2GJ1YM.json
│  │  ├─ 01JSJQP8S9N852K2C7KJFEPZYY.json
│  │  ├─ 01JSJQPDV75EYJ2J9H2JKJ01T8.json
│  │  ├─ 01JSJQPEERWRPY9BJM93X8Q7N0.json
│  │  ├─ 01JSJQQ0MXH4R84VTB1W9GVKQ2.json
│  │  ├─ 01JSJQQ16ZHXMRZMV11DD0TZWZ.json
│  │  ├─ 01JSJQQ39YZXYC7CNNPC753K6Z.json
│  │  ├─ 01JSJQQ3S9CPWXZ4ZGJBRBSGM1.json
│  │  ├─ 01JSJRRD6F0Z0650E0KEXD8F9W.json
│  │  ├─ 01JSJRRDYJJYQH6J5HQXPGXNSA.json
│  │  ├─ 01JSJRRHS4C0FK0RVC4GWF7MKY.json
│  │  ├─ 01JSJRRJ5THMJTHCGG4ECD325V.json
│  │  ├─ 01JSJRRJX71E8RRHJSZZGBC89P.json
│  │  ├─ 01JSJS1QSQCPWVQCABHK0SC16J.json
│  │  ├─ 01JSJS1RE4HZ3671SKC05KT9XF.json
│  │  ├─ 01JSJS1VA63EE3SH07XW7W4E23.json
│  │  ├─ 01JSJS1VW01H5EA5CP9MS33J7Y.json
│  │  ├─ 01JSJSCNGZS8FR8GZQ21HSSYR4.json
│  │  ├─ 01JSJSD2QXQJNPCVGKQG2HZH0T.json
│  │  ├─ 01JSJSFP0HRMZNC99D3C6ATAQZ.json
│  │  ├─ 01JSJSGE017K3KS7QBE9GW5ZAY.json
│  │  ├─ 01JSJSGESQFAJB43X8WDASAD1Q.json
│  │  ├─ 01JSJSHZTT3Z9R3ZMYQAZ18B1Q.json
│  │  ├─ 01JSJSJ0AV16TSAQ97QKPDZ5B1.json
│  │  ├─ 01JSJSJ5M1RVQXNE13KYBKJ7KZ.json
│  │  ├─ 01JSJSJ6FM7S2PAKEADWX2J3KX.json
│  │  ├─ 01JSJSJJ3X7WYWNG01Q67Y5MTK.json
│  │  ├─ 01JSJSJSJ1ARTAMGA9T65GG5D9.json
│  │  ├─ 01JSJSJT2KE8DQ2PYJGSH18PND.json
│  │  ├─ 01JSJSK1H0DJB5YAH617PEM1XJ.json
│  │  ├─ 01JSJSK1W8S6QN8NP1SPK02JF1.json
│  │  ├─ 01JSJSK2CMFCTTJ64SH1604QX8.json
│  │  ├─ 01JSJSMS5PPXG5HWFMZA5D3H4X.json
│  │  ├─ 01JSJSMSJG80ZAVPHGB50G76W9.json
│  │  ├─ 01JSJSMT34AMY83QNW62S022PE.json
│  │  ├─ 01JSK46GK7358F5Z2RAJ3WZNCQ.json
│  │  ├─ 01JSK46H7ZB4G827084ZVTTMDW.json
│  │  ├─ 01JSK46MZ3WQ93NCQP4BQV2WSS.json
│  │  ├─ 01JSK46NNEAFX3EEQ9B0KJP4RR.json
│  │  ├─ 01JSK46TQX2YM953903XARZ15S.json
│  │  ├─ 01JSK46VFCETMNM29DH0V6QPQE.json
│  │  ├─ 01JSK46WZXVF8VRAHEE9RMK1BM.json
│  │  ├─ 01JSK46XK0ED2BHKCP8KKFFKD9.json
│  │  ├─ 01JSK471G7G12YR20D0TB95H7H.json
│  │  ├─ 01JSK47225VRSMSGJCVMXYEDNM.json
│  │  ├─ 01JSK477ZEH3MGQ0FNQKVRS898.json
│  │  ├─ 01JSK478AG4TAEJ9WBBD6Q0XF9.json
│  │  ├─ 01JSK47G3CYR7MRTKZ62P6W061.json
│  │  ├─ 01JSK47HCYNBZ1N636DEG6HEHH.json
│  │  ├─ 01JSK47T6RWZTJXPNJXVDMJ71Y.json
│  │  ├─ 01JSK47TWJX2699J62T97WXR1C.json
│  │  ├─ 01JSK480EQEKNS0500BKRH47RK.json
│  │  ├─ 01JSK480Z3XWH3E5QBCQVMC4F0.json
│  │  ├─ 01JSK48476Q91RVVY0NB47KWZG.json
│  │  ├─ 01JSK484R5JSPR2RG188321SYS.json
│  │  ├─ 01JSK48A742HB1W0C4PDZCDHG3.json
│  │  ├─ 01JSK48W0RYBZ34MV70FYPV38N.json
│  │  ├─ 01JSK48WK09NE3GHCH96TJSVQ7.json
│  │  ├─ 01JSK4BF05ETVJXNRSN8KKP53D.json
│  │  ├─ 01JSK4BFY4K8PBT6B69E1K2EJA.json
│  │  ├─ 01JSK4BYNYCDMB9E4D10J740RK.json
│  │  ├─ 01JSK4BZCVZZH13387FTTTJ6X5.json
│  │  ├─ 01JSK4C2H7WQMZH5R900XANPQQ.json
│  │  ├─ 01JSK4C30BDXXWK5FRD7RZ9JWG.json
│  │  ├─ 01JSK4C5NH5KW3FAXVX3DE5TKS.json
│  │  ├─ 01JSK4C7243PWBDQ25AFW1282J.json
│  │  ├─ 01JSK4CB4FG86Z6B9YKYPGX9T5.json
│  │  ├─ 01JSK4CBG8DPHCXR2P36AJKX5Z.json
│  │  ├─ 01JSK4CC2VXMVKCFY96G8K4F4G.json
│  │  ├─ 01JSK4CWVZ0RF2C2WGXEEW672F.json
│  │  ├─ 01JSK4CXDDQ7KG1YMJD07QSXXG.json
│  │  ├─ 01JSK4D0ZNTD9T4JPAV7YH3JPG.json
│  │  ├─ 01JSK4D1CSHEN0AEMCMMWTP5FS.json
│  │  ├─ 01JSK4D226PM03BT299T931X7E.json
│  │  ├─ 01JSK4D7H29JCH45B6QTFFY9Z9.json
│  │  ├─ 01JSK4D7VNK7J24TP9G05GRGVV.json
│  │  ├─ 01JSK4DK2JEN52S89JWAQWHBHF.json
│  │  ├─ 01JSK4DQXA2XX3ETTGQ0H81K8Q.json
│  │  ├─ 01JSK4DREWN3P29KPK64Z2YHAE.json
│  │  ├─ 01JSK4DXZ1TR8AMHB0HEA8NRGZ.json
│  │  ├─ 01JSK4DZ06VYR0SRHEPF5FWRVJ.json
│  │  ├─ 01JSK4E67K30X0KXEVSC1K9TF5.json
│  │  ├─ 01JSK4E6WZ7HBKQGHEXM5CXMEZ.json
│  │  ├─ 01JSK4E991MW59FF0DKJ5JANQW.json
│  │  ├─ 01JSK4E9SPE1Y9NAZTNR85VZ1T.json
│  │  ├─ 01JSK4EPT57J66CC5A8GEP7ZGQ.json
│  │  ├─ 01JSK4EQCCJKGPVYCE3VAFB1RY.json
│  │  ├─ 01JSK4EVG72FD51XEP5PAH64Z6.json
│  │  ├─ 01JSK4EVV165NH09G7310GQ2AK.json
│  │  ├─ 01JSK4EZFAHFV1MB70YT8P8VW9.json
│  │  ├─ 01JSK4F13MM02XYAR6QWWD06D5.json
│  │  ├─ 01JSK4FGA53Y0Z0QQ9BRKNKXH4.json
│  │  ├─ 01JSK4FGWKCJMSMBN71Q36D4E9.json
│  │  ├─ 01JSK4FM23TVPWENRWMP83ZPA2.json
│  │  ├─ 01JSK4FMJVXQ981RB43GDE7ERG.json
│  │  ├─ 01JSK4FTRGRWXHT1BAXGYY15CN.json
│  │  ├─ 01JSK4FVEKZ4RB83SKFC2C5C4C.json
│  │  ├─ 01JSK4FZPKHAV4JSNB4RAQ66WB.json
│  │  ├─ 01JSK4G06DZTEDZ360XQ404924.json
│  │  ├─ 01JSK54W8WHJVNXVKC7TFQPR38.json
│  │  ├─ 01JSK54X08GP4HZQQDZT9ESYN0.json
│  │  ├─ 01JSK551JSKEV6V5M75RVFEA88.json
│  │  ├─ 01JSK5526AF7A6ZM0KWYT7CDNA.json
│  │  ├─ 01JSK59RMAKA1RXN9WEXV4Z46T.json
│  │  ├─ 01JSK59S6F5VWZ9YB7W4GHTJTA.json
│  │  ├─ 01JSK59VG9AW86GD6F0Y13T12B.json
│  │  ├─ 01JSK59W1YZHRA9R49H30WYTP8.json
│  │  ├─ 01JSK5A45PANBWYYRRASRPN0J4.json
│  │  ├─ 01JSK5ACHZ4305SSJH1NAK8PHD.json
│  │  ├─ 01JSK5AD3B3PB9X3MB4SVGJ5ME.json
│  │  ├─ 01JSK6H3EZVVBZNXZZK0C9NKBZ.json
│  │  ├─ 01JSK6H43QRBZNPM0EPYS3WNQR.json
│  │  ├─ 01JSK6H7J6K1XC9MWH1GBVX1DY.json
│  │  ├─ 01JSK6H80V1Z378WD52GR361YC.json
│  │  ├─ 01JSK6H8R8FC6THT3GDPAWG59Q.json
│  │  ├─ 01JSK6HBYYTWZFEQ3XGHCWXNR0.json
│  │  ├─ 01JSK6HCJRMQR33E9JWAFESR6D.json
│  │  ├─ 01JSK6HMZ7XSF8VAK3T5WV1DJA.json
│  │  ├─ 01JSK73XYYJEA0Q5EBH89P46D2.json
│  │  ├─ 01JSK73YP7S66F046NE3J1QHMR.json
│  │  ├─ 01JSK7488350A485R02V2T098V.json
│  │  ├─ 01JSK74NGPJ4FK86C3HV1HK6S0.json
│  │  ├─ 01JSK74PAE7AKE65TBY3M8M8KS.json
│  │  ├─ 01JSK74W6Y0KTMKST62X97XG75.json
│  │  ├─ 01JSK74WS7A3HP7VW59ED6PFAX.json
│  │  ├─ 01JSK7C761ADDEZWD8KFYJBJYB.json
│  │  ├─ 01JSK7C7V9QWF3FTGHMZW4NMEJ.json
│  │  ├─ 01JSK7CK0KBKDAP39JCVBJJ745.json
│  │  ├─ 01JSK7CKS92YD15V2J41Q5A66D.json
│  │  ├─ 01JSK7CQMP0GPW6CKSNGQD18Q7.json
│  │  ├─ 01JSK7CRCZBG9K1Z0ZQSMRSVFZ.json
│  │  ├─ 01JSK7DP1ZX4BKYHA1951ZHKQK.json
│  │  ├─ 01JSK7DPPT9X3KY45C3BARJR0B.json
│  │  ├─ 01JSK7FWTWYPCVE3F06YZPMFYA.json
│  │  ├─ 01JSK7FXJZNMH6J1QZCNEKWWGK.json
│  │  ├─ 01JSK7G5AFQ6M8D2YH57T5YAFY.json
│  │  ├─ 01JSK7G5WWYKKB56A2766RKDE4.json
│  │  ├─ 01JSK8T0VJEEPVEAYV947QY75Y.json
│  │  └─ 01JSK8T1HN80535ZGKJAEPWQTP.json
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  │  └─ 5JfOWmhbJRcjrbKG8QsWNx3JVW7Rjzg8Qw6VzZ07
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 01a376d2f6f92ee2446b290d0e578d19.php
│  │     ├─ 03be1b055811d9bd8877538a4f3c470e.php
│  │     ├─ 0a6d5a5dc6f2f1f3d3b3c547ead6c7bd.php
│  │     ├─ 0e9b0645eae530ee90a021bac43ec5e2.php
│  │     ├─ 17c94d3bae56a6624f1423c95442d923.php
│  │     ├─ 1e7b32a2bf87a1ce05be22f47aa14e91.php
│  │     ├─ 20c641e5a38c613442c77e5b1d5891e0.php
│  │     ├─ 275c7c02e2528e6029079c885e2d2418.php
│  │     ├─ 3aceb06c4fbadc6c23b72a20d9221f73.php
│  │     ├─ 41fca7617fc17b04e02c055f21ad8559.php
│  │     ├─ 44d033f4eb4c489a3c8009abefd411f8.php
│  │     ├─ 4943bc92ebba41e8b0e508149542e0ad.blade.php
│  │     ├─ 5c2001e939204ec0b7ec56c9a9f31d3d.php
│  │     ├─ 5c3b6c54668675ae37f163b591598f8d.php
│  │     ├─ 645406853180be134a55d058b627fcad.php
│  │     ├─ 67f91fc13015ca57369abaaf302d69b0.php
│  │     ├─ 68cdd1623f3d70e81b4a4e6feeb7c0ae.php
│  │     ├─ 68e076ee1211736d13078302136bf1d3.php
│  │     ├─ 68e1cbe7cb02a05af7b5f0a462942f4b.php
│  │     ├─ 77e107cc5a6e78dac2af68864add9342.php
│  │     ├─ 781b4a01d7710b3559fdad59676a589d.php
│  │     ├─ 790be20c1b6f6ba46ddb616b934ef1fa.php
│  │     ├─ 7c5eff99c244dc1d8e9fd33acdddcaf3.php
│  │     ├─ 8ce05c42cb8eddbac36d6f43433eaa95.php
│  │     ├─ a0f0b2035270a063cf16f7e6ddebcc9c.php
│  │     ├─ a47627c5db3a7a71ca504d1edf19ec6e.php
│  │     ├─ a5df2228e20bf5a2b2562c9e129f46c0.php
│  │     ├─ a7b5a1b160963a50a394e713cad67388.php
│  │     ├─ a9a4c7181280e8f3684665056afaf80e.php
│  │     ├─ aea0dcc98845946c8ae1d479d42f6b31.php
│  │     ├─ bb4613d1ead18762a5eca8621f39c09c.php
│  │     ├─ c151b9b5a118e39aab1d87c5ceeb322a.php
│  │     ├─ d44bf78e79f9298dcb45f26d889f4276.php
│  │     ├─ daffc66db2727eaf60ca2803ca2cbe73.php
│  │     ├─ dd310000961f2d208873a737c27d849a.php
│  │     ├─ e2ef719f9a11fb6c6fd509770bbef2f4.php
│  │     ├─ e8ce3d8ff7d732a3d663f43daf821bf3.php
│  │     └─ f8c584c8e765f9ccd0a494a4a0651a2b.php
│  └─ logs
│     ├─ laravel-2025-04-21.log
│     ├─ laravel-2025-04-22.log
│     ├─ laravel-2025-04-23.log
│     └─ laravel-2025-04-24.log
├─ stubs
│  ├─ modules
│  │  ├─ action-invoke.stub
│  │  ├─ action.stub
│  │  ├─ assets
│  │  │  ├─ js
│  │  │  │  └─ app.stub
│  │  │  └─ sass
│  │  │     └─ app.stub
│  │  ├─ cast.stub
│  │  ├─ channel.stub
│  │  ├─ class-invoke.stub
│  │  ├─ class.stub
│  │  ├─ command.stub
│  │  ├─ component-class.stub
│  │  ├─ component-view.stub
│  │  ├─ composer.stub
│  │  ├─ controller-api.stub
│  │  ├─ controller-plain.stub
│  │  ├─ controller.invokable.stub
│  │  ├─ controller.stub
│  │  ├─ enum.stub
│  │  ├─ event-provider.stub
│  │  ├─ event.stub
│  │  ├─ exception-render-report.stub
│  │  ├─ exception-render.stub
│  │  ├─ exception-report.stub
│  │  ├─ exception.stub
│  │  ├─ factory.stub
│  │  ├─ helper-invoke.stub
│  │  ├─ helper.stub
│  │  ├─ interface.stub
│  │  ├─ job-queued.stub
│  │  ├─ job.stub
│  │  ├─ json.stub
│  │  ├─ listener-duck.stub
│  │  ├─ listener-queued-duck.stub
│  │  ├─ listener-queued.stub
│  │  ├─ listener.stub
│  │  ├─ mail.stub
│  │  ├─ middleware.stub
│  │  ├─ migration
│  │  │  ├─ add.stub
│  │  │  ├─ create.stub
│  │  │  ├─ delete.stub
│  │  │  ├─ drop.stub
│  │  │  └─ plain.stub
│  │  ├─ model.stub
│  │  ├─ notification.stub
│  │  ├─ observer.stub
│  │  ├─ package.stub
│  │  ├─ policy.plain.stub
│  │  ├─ provider.stub
│  │  ├─ repository-invoke.stub
│  │  ├─ repository.stub
│  │  ├─ request.stub
│  │  ├─ resource-collection.stub
│  │  ├─ resource.stub
│  │  ├─ route-provider.stub
│  │  ├─ routes
│  │  │  ├─ api.stub
│  │  │  └─ web.stub
│  │  ├─ rule.implicit.stub
│  │  ├─ rule.stub
│  │  ├─ scaffold
│  │  │  ├─ config.stub
│  │  │  └─ provider.stub
│  │  ├─ scope.stub
│  │  ├─ seeder.stub
│  │  ├─ service-invoke.stub
│  │  ├─ service.stub
│  │  ├─ tests
│  │  │  ├─ feature.stub
│  │  │  └─ unit.stub
│  │  ├─ trait.stub
│  │  ├─ view.stub
│  │  ├─ views
│  │  │  ├─ index.stub
│  │  │  └─ master.stub
│  │  └─ vite.stub
│  ├─ modules-livewire
│  │  ├─ livewire.inline.stub
│  │  ├─ livewire.stub
│  │  └─ livewire.view.stub
│  └─ pennant-feature.stub
├─ tests
│  ├─ Feature
│  │  └─ DashboardTest.php
│  ├─ Pest.php
│  ├─ TestCase.php
│  └─ Unit
├─ vendor
│  ├─ _laravel_ide
│  │  ├─ _auth.php
│  │  ├─ _facade.php
│  │  ├─ _model_helpers.php
│  │  ├─ _request.php
│  │  ├─ discover-1180853afdec2df68b8101f27487d6f9.php
│  │  ├─ discover-1e7ea3cf42a2f9b84f3de09530e2c135.php
│  │  ├─ discover-31b934f114eabc246b541addb8b458e3.php
│  │  ├─ discover-320fe5c5b7f0175eae37c44f264ceb08.php
│  │  ├─ discover-476fe65492650d7ce55de1f8f96024c5.php
│  │  ├─ discover-5802e590a92e23606bb54d2909564178.php
│  │  ├─ discover-67043687ec5f16a5c4357b3dc049d2d5.php
│  │  ├─ discover-6f0f1acd77de9f7869cf9462ed4d802b.php
│  │  ├─ discover-7563160ca998bde672640aa1e68dfd08.php
│  │  ├─ discover-77e9e6a2445455b87d4f4cd834e4e23d.php
│  │  ├─ discover-9abd86d674d0ba851f4ac7b31349196a.php
│  │  ├─ discover-d234df6a22ae2b9b097ac6e3772bd950.php
│  │  └─ discover-ea280fb1636eb761c4fd23f76666e397.php
│  ├─ autoload.php
│  ├─ barryvdh
│  │  └─ laravel-debugbar
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ debugbar.php
│  │     ├─ database
│  │     │  └─ migrations
│  │     │     └─ 2014_12_01_120000_create_phpdebugbar_storage_table.php
│  │     ├─ phpcs.xml
│  │     ├─ readme.md
│  │     └─ src
│  │        ├─ Console
│  │        │  └─ ClearCommand.php
│  │        ├─ Controllers
│  │        │  ├─ AssetController.php
│  │        │  ├─ BaseController.php
│  │        │  ├─ CacheController.php
│  │        │  ├─ OpenHandlerController.php
│  │        │  ├─ QueriesController.php
│  │        │  └─ TelescopeController.php
│  │        ├─ DataCollector
│  │        │  ├─ CacheCollector.php
│  │        │  ├─ EventCollector.php
│  │        │  ├─ FilesCollector.php
│  │        │  ├─ GateCollector.php
│  │        │  ├─ JobsCollector.php
│  │        │  ├─ LaravelCollector.php
│  │        │  ├─ LivewireCollector.php
│  │        │  ├─ LogsCollector.php
│  │        │  ├─ ModelsCollector.php
│  │        │  ├─ MultiAuthCollector.php
│  │        │  ├─ PennantCollector.php
│  │        │  ├─ QueryCollector.php
│  │        │  ├─ RequestCollector.php
│  │        │  ├─ RouteCollector.php
│  │        │  ├─ SessionCollector.php
│  │        │  └─ ViewCollector.php
│  │        ├─ DataFormatter
│  │        │  ├─ QueryFormatter.php
│  │        │  └─ SimpleFormatter.php
│  │        ├─ DebugbarViewEngine.php
│  │        ├─ Facade.php
│  │        ├─ Facades
│  │        │  └─ Debugbar.php
│  │        ├─ JavascriptRenderer.php
│  │        ├─ LaravelDebugbar.php
│  │        ├─ LumenServiceProvider.php
│  │        ├─ Middleware
│  │        │  ├─ DebugbarEnabled.php
│  │        │  └─ InjectDebugbar.php
│  │        ├─ Resources
│  │        │  ├─ cache
│  │        │  │  └─ widget.js
│  │        │  ├─ laravel-debugbar.css
│  │        │  └─ queries
│  │        │     └─ widget.js
│  │        ├─ ServiceProvider.php
│  │        ├─ Storage
│  │        │  ├─ FilesystemStorage.php
│  │        │  └─ SocketStorage.php
│  │        ├─ Support
│  │        │  ├─ Clockwork
│  │        │  │  ├─ ClockworkCollector.php
│  │        │  │  └─ Converter.php
│  │        │  ├─ Explain.php
│  │        │  └─ RequestIdGenerator.php
│  │        ├─ SymfonyHttpDriver.php
│  │        ├─ Twig
│  │        │  └─ Extension
│  │        │     ├─ Debug.php
│  │        │     ├─ Dump.php
│  │        │     └─ Stopwatch.php
│  │        ├─ debugbar-routes.php
│  │        └─ helpers.php
│  ├─ bin
│  │  ├─ carbon
│  │  ├─ paratest
│  │  ├─ paratest_for_phpstorm
│  │  ├─ patch-type-declarations
│  │  ├─ pest
│  │  ├─ php-parse
│  │  ├─ phpunit
│  │  ├─ pint
│  │  ├─ psysh
│  │  ├─ sail
│  │  ├─ var-dump-server
│  │  └─ yaml-lint
│  ├─ brianium
│  │  └─ paratest
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ bin
│  │     │  ├─ paratest
│  │     │  ├─ paratest_for_phpstorm
│  │     │  └─ phpunit-wrapper.php
│  │     ├─ composer.json
│  │     ├─ renovate.json
│  │     └─ src
│  │        ├─ Coverage
│  │        │  └─ CoverageMerger.php
│  │        ├─ JUnit
│  │        │  ├─ LogMerger.php
│  │        │  ├─ MessageType.php
│  │        │  ├─ TestCase.php
│  │        │  ├─ TestCaseWithMessage.php
│  │        │  ├─ TestSuite.php
│  │        │  └─ Writer.php
│  │        ├─ Options.php
│  │        ├─ ParaTestCommand.php
│  │        ├─ RunnerInterface.php
│  │        ├─ Util
│  │        │  └─ PhpstormHelper.php
│  │        └─ WrapperRunner
│  │           ├─ ApplicationForWrapperWorker.php
│  │           ├─ ProgressPrinterOutput.php
│  │           ├─ ResultPrinter.php
│  │           ├─ SuiteLoader.php
│  │           ├─ WorkerCrashedException.php
│  │           ├─ WrapperRunner.php
│  │           └─ WrapperWorker.php
│  ├─ brick
│  │  └─ math
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     ├─ psalm-baseline.xml
│  │     └─ src
│  │        ├─ BigDecimal.php
│  │        ├─ BigInteger.php
│  │        ├─ BigNumber.php
│  │        ├─ BigRational.php
│  │        ├─ Exception
│  │        │  ├─ DivisionByZeroException.php
│  │        │  ├─ IntegerOverflowException.php
│  │        │  ├─ MathException.php
│  │        │  ├─ NegativeNumberException.php
│  │        │  ├─ NumberFormatException.php
│  │        │  └─ RoundingNecessaryException.php
│  │        ├─ Internal
│  │        │  ├─ Calculator
│  │        │  │  ├─ BcMathCalculator.php
│  │        │  │  ├─ GmpCalculator.php
│  │        │  │  └─ NativeCalculator.php
│  │        │  └─ Calculator.php
│  │        └─ RoundingMode.php
│  ├─ carbonphp
│  │  └─ carbon-doctrine-types
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Carbon
│  │           └─ Doctrine
│  │              ├─ CarbonDoctrineType.php
│  │              ├─ CarbonImmutableType.php
│  │              ├─ CarbonType.php
│  │              ├─ CarbonTypeConverter.php
│  │              ├─ DateTimeDefaultPrecision.php
│  │              ├─ DateTimeImmutableType.php
│  │              └─ DateTimeType.php
│  ├─ cocur
│  │  └─ slugify
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Bridge
│  │        │  ├─ Laravel
│  │        │  │  ├─ SlugifyFacade.php
│  │        │  │  └─ SlugifyServiceProvider.php
│  │        │  ├─ Latte
│  │        │  │  └─ SlugifyHelper.php
│  │        │  ├─ League
│  │        │  │  └─ SlugifyServiceProvider.php
│  │        │  ├─ Nette
│  │        │  │  └─ SlugifyExtension.php
│  │        │  ├─ Plum
│  │        │  │  └─ SlugifyConverter.php
│  │        │  ├─ Symfony
│  │        │  │  ├─ CocurSlugifyBundle.php
│  │        │  │  ├─ CocurSlugifyExtension.php
│  │        │  │  └─ Configuration.php
│  │        │  ├─ Twig
│  │        │  │  └─ SlugifyExtension.php
│  │        │  └─ ZF2
│  │        │     ├─ Module.php
│  │        │     ├─ SlugifyService.php
│  │        │     ├─ SlugifyViewHelper.php
│  │        │     └─ SlugifyViewHelperFactory.php
│  │        ├─ RuleProvider
│  │        │  ├─ DefaultRuleProvider.php
│  │        │  ├─ FileRuleProvider.php
│  │        │  └─ RuleProviderInterface.php
│  │        ├─ Slugify.php
│  │        └─ SlugifyInterface.php
│  ├─ composer
│  │  ├─ ClassLoader.php
│  │  ├─ InstalledVersions.php
│  │  ├─ LICENSE
│  │  ├─ autoload_classmap.php
│  │  ├─ autoload_files.php
│  │  ├─ autoload_namespaces.php
│  │  ├─ autoload_psr4.php
│  │  ├─ autoload_real.php
│  │  ├─ autoload_static.php
│  │  ├─ installed.json
│  │  ├─ installed.php
│  │  ├─ pcre
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ extension.neon
│  │  │  └─ src
│  │  │     ├─ MatchAllResult.php
│  │  │     ├─ MatchAllStrictGroupsResult.php
│  │  │     ├─ MatchAllWithOffsetsResult.php
│  │  │     ├─ MatchResult.php
│  │  │     ├─ MatchStrictGroupsResult.php
│  │  │     ├─ MatchWithOffsetsResult.php
│  │  │     ├─ PHPStan
│  │  │     │  ├─ InvalidRegexPatternRule.php
│  │  │     │  ├─ PregMatchFlags.php
│  │  │     │  ├─ PregMatchParameterOutTypeExtension.php
│  │  │     │  ├─ PregMatchTypeSpecifyingExtension.php
│  │  │     │  ├─ PregReplaceCallbackClosureTypeExtension.php
│  │  │     │  └─ UnsafeStrictGroupsCallRule.php
│  │  │     ├─ PcreException.php
│  │  │     ├─ Preg.php
│  │  │     ├─ Regex.php
│  │  │     ├─ ReplaceResult.php
│  │  │     └─ UnexpectedNullMatchException.php
│  │  ├─ platform_check.php
│  │  └─ semver
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Comparator.php
│  │        ├─ CompilingMatcher.php
│  │        ├─ Constraint
│  │        │  ├─ Bound.php
│  │        │  ├─ Constraint.php
│  │        │  ├─ ConstraintInterface.php
│  │        │  ├─ MatchAllConstraint.php
│  │        │  ├─ MatchNoneConstraint.php
│  │        │  └─ MultiConstraint.php
│  │        ├─ Interval.php
│  │        ├─ Intervals.php
│  │        ├─ Semver.php
│  │        └─ VersionParser.php
│  ├─ cviebrock
│  │  └─ eloquent-sluggable
│  │     ├─ .php-cs-fixer.php
│  │     ├─ .semver
│  │     ├─ CHANGELOG.md
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ ROUTE-MODEL-BINDING.md
│  │     ├─ SCOPE-HELPERS.md
│  │     ├─ TODO.md
│  │     ├─ UPGRADING.md
│  │     ├─ composer.json
│  │     ├─ phpstan.dist.neon
│  │     ├─ phpunit.xml
│  │     ├─ resources
│  │     │  └─ config
│  │     │     └─ sluggable.php
│  │     ├─ src
│  │     │  ├─ ServiceProvider.php
│  │     │  ├─ Services
│  │     │  │  └─ SlugService.php
│  │     │  ├─ Sluggable.php
│  │     │  ├─ SluggableObserver.php
│  │     │  └─ SluggableScopeHelpers.php
│  │     └─ tests
│  │        ├─ BaseTests.php
│  │        ├─ Classes
│  │        │  └─ SluggableCustomMethod.php
│  │        ├─ EventTests.php
│  │        ├─ Listeners
│  │        │  ├─ AbortSlugging.php
│  │        │  └─ DoNotAbortSlugging.php
│  │        ├─ Models
│  │        │  ├─ Author.php
│  │        │  ├─ Post.php
│  │        │  ├─ PostNotSluggable.php
│  │        │  ├─ PostShortConfig.php
│  │        │  ├─ PostShortConfigWithScopeHelpers.php
│  │        │  ├─ PostWithCustomCallableMethod.php
│  │        │  ├─ PostWithCustomEngine.php
│  │        │  ├─ PostWithCustomEngine2.php
│  │        │  ├─ PostWithCustomEngineOptions.php
│  │        │  ├─ PostWithCustomMethod.php
│  │        │  ├─ PostWithCustomMethodArrayCall.php
│  │        │  ├─ PostWithCustomSeparator.php
│  │        │  ├─ PostWithCustomSource.php
│  │        │  ├─ PostWithCustomSuffix.php
│  │        │  ├─ PostWithEagerRelation.php
│  │        │  ├─ PostWithEmptySeparator.php
│  │        │  ├─ PostWithFirstUniqueSuffix.php
│  │        │  ├─ PostWithForeignRuleset.php
│  │        │  ├─ PostWithForeignRuleset2.php
│  │        │  ├─ PostWithIdSource.php
│  │        │  ├─ PostWithIdSourceOnSaved.php
│  │        │  ├─ PostWithIncludeTrashed.php
│  │        │  ├─ PostWithMaxLength.php
│  │        │  ├─ PostWithMaxLengthSplitWords.php
│  │        │  ├─ PostWithMultipleSlugs.php
│  │        │  ├─ PostWithMultipleSlugsAndCustomSlugKey.php
│  │        │  ├─ PostWithMultipleSlugsAndHelperTrait.php
│  │        │  ├─ PostWithMultipleSources.php
│  │        │  ├─ PostWithNoSource.php
│  │        │  ├─ PostWithOnUpdate.php
│  │        │  ├─ PostWithRelation.php
│  │        │  ├─ PostWithReservedSlug.php
│  │        │  ├─ PostWithSoftDeleting.php
│  │        │  ├─ PostWithSoftDeletingIncludeTrashed.php
│  │        │  └─ PostWithUniqueSlugConstraints.php
│  │        ├─ OnUpdateTests.php
│  │        ├─ RelationTests.php
│  │        ├─ ScopeHelperTests.php
│  │        ├─ SoftDeleteTests.php
│  │        ├─ StaticTests.php
│  │        ├─ TestCase.php
│  │        ├─ TestServiceProvider.php
│  │        ├─ UniqueTests.php
│  │        └─ database
│  │           └─ migrations
│  │              ├─ 2013_11_04_163552_posts.php
│  │              └─ 2015_08_17_185144_authors.php
│  ├─ dflydev
│  │  └─ dot-access-data
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Data.php
│  │        ├─ DataInterface.php
│  │        ├─ Exception
│  │        │  ├─ DataException.php
│  │        │  ├─ InvalidPathException.php
│  │        │  └─ MissingPathException.php
│  │        └─ Util.php
│  ├─ doctrine
│  │  ├─ deprecations
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Deprecation.php
│  │  │     └─ PHPUnit
│  │  │        └─ VerifyDeprecations.php
│  │  ├─ inflector
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  └─ en
│  │  │  │     └─ index.rst
│  │  │  └─ lib
│  │  │     └─ Doctrine
│  │  │        └─ Inflector
│  │  │           ├─ CachedWordInflector.php
│  │  │           ├─ GenericLanguageInflectorFactory.php
│  │  │           ├─ Inflector.php
│  │  │           ├─ InflectorFactory.php
│  │  │           ├─ Language.php
│  │  │           ├─ LanguageInflectorFactory.php
│  │  │           ├─ NoopWordInflector.php
│  │  │           ├─ Rules
│  │  │           │  ├─ English
│  │  │           │  │  ├─ Inflectible.php
│  │  │           │  │  ├─ InflectorFactory.php
│  │  │           │  │  ├─ Rules.php
│  │  │           │  │  └─ Uninflected.php
│  │  │           │  ├─ French
│  │  │           │  │  ├─ Inflectible.php
│  │  │           │  │  ├─ InflectorFactory.php
│  │  │           │  │  ├─ Rules.php
│  │  │           │  │  └─ Uninflected.php
│  │  │           │  ├─ NorwegianBokmal
│  │  │           │  │  ├─ Inflectible.php
│  │  │           │  │  ├─ InflectorFactory.php
│  │  │           │  │  ├─ Rules.php
│  │  │           │  │  └─ Uninflected.php
│  │  │           │  ├─ Pattern.php
│  │  │           │  ├─ Patterns.php
│  │  │           │  ├─ Portuguese
│  │  │           │  │  ├─ Inflectible.php
│  │  │           │  │  ├─ InflectorFactory.php
│  │  │           │  │  ├─ Rules.php
│  │  │           │  │  └─ Uninflected.php
│  │  │           │  ├─ Ruleset.php
│  │  │           │  ├─ Spanish
│  │  │           │  │  ├─ Inflectible.php
│  │  │           │  │  ├─ InflectorFactory.php
│  │  │           │  │  ├─ Rules.php
│  │  │           │  │  └─ Uninflected.php
│  │  │           │  ├─ Substitution.php
│  │  │           │  ├─ Substitutions.php
│  │  │           │  ├─ Transformation.php
│  │  │           │  ├─ Transformations.php
│  │  │           │  ├─ Turkish
│  │  │           │  │  ├─ Inflectible.php
│  │  │           │  │  ├─ InflectorFactory.php
│  │  │           │  │  ├─ Rules.php
│  │  │           │  │  └─ Uninflected.php
│  │  │           │  └─ Word.php
│  │  │           ├─ RulesetInflector.php
│  │  │           └─ WordInflector.php
│  │  └─ lexer
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ UPGRADE.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ AbstractLexer.php
│  │        └─ Token.php
│  ├─ dragonmantank
│  │  └─ cron-expression
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Cron
│  │           ├─ AbstractField.php
│  │           ├─ CronExpression.php
│  │           ├─ DayOfMonthField.php
│  │           ├─ DayOfWeekField.php
│  │           ├─ FieldFactory.php
│  │           ├─ FieldFactoryInterface.php
│  │           ├─ FieldInterface.php
│  │           ├─ HoursField.php
│  │           ├─ MinutesField.php
│  │           └─ MonthField.php
│  ├─ egulias
│  │  └─ email-validator
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ EmailLexer.php
│  │        ├─ EmailParser.php
│  │        ├─ EmailValidator.php
│  │        ├─ MessageIDParser.php
│  │        ├─ Parser
│  │        │  ├─ Comment.php
│  │        │  ├─ CommentStrategy
│  │        │  │  ├─ CommentStrategy.php
│  │        │  │  ├─ DomainComment.php
│  │        │  │  └─ LocalComment.php
│  │        │  ├─ DomainLiteral.php
│  │        │  ├─ DomainPart.php
│  │        │  ├─ DoubleQuote.php
│  │        │  ├─ FoldingWhiteSpace.php
│  │        │  ├─ IDLeftPart.php
│  │        │  ├─ IDRightPart.php
│  │        │  ├─ LocalPart.php
│  │        │  └─ PartParser.php
│  │        ├─ Parser.php
│  │        ├─ Result
│  │        │  ├─ InvalidEmail.php
│  │        │  ├─ MultipleErrors.php
│  │        │  ├─ Reason
│  │        │  │  ├─ AtextAfterCFWS.php
│  │        │  │  ├─ CRLFAtTheEnd.php
│  │        │  │  ├─ CRLFX2.php
│  │        │  │  ├─ CRNoLF.php
│  │        │  │  ├─ CharNotAllowed.php
│  │        │  │  ├─ CommaInDomain.php
│  │        │  │  ├─ CommentsInIDRight.php
│  │        │  │  ├─ ConsecutiveAt.php
│  │        │  │  ├─ ConsecutiveDot.php
│  │        │  │  ├─ DetailedReason.php
│  │        │  │  ├─ DomainAcceptsNoMail.php
│  │        │  │  ├─ DomainHyphened.php
│  │        │  │  ├─ DomainTooLong.php
│  │        │  │  ├─ DotAtEnd.php
│  │        │  │  ├─ DotAtStart.php
│  │        │  │  ├─ EmptyReason.php
│  │        │  │  ├─ ExceptionFound.php
│  │        │  │  ├─ ExpectingATEXT.php
│  │        │  │  ├─ ExpectingCTEXT.php
│  │        │  │  ├─ ExpectingDTEXT.php
│  │        │  │  ├─ ExpectingDomainLiteralClose.php
│  │        │  │  ├─ LabelTooLong.php
│  │        │  │  ├─ LocalOrReservedDomain.php
│  │        │  │  ├─ NoDNSRecord.php
│  │        │  │  ├─ NoDomainPart.php
│  │        │  │  ├─ NoLocalPart.php
│  │        │  │  ├─ RFCWarnings.php
│  │        │  │  ├─ Reason.php
│  │        │  │  ├─ SpoofEmail.php
│  │        │  │  ├─ UnOpenedComment.php
│  │        │  │  ├─ UnableToGetDNSRecord.php
│  │        │  │  ├─ UnclosedComment.php
│  │        │  │  ├─ UnclosedQuotedString.php
│  │        │  │  └─ UnusualElements.php
│  │        │  ├─ Result.php
│  │        │  ├─ SpoofEmail.php
│  │        │  └─ ValidEmail.php
│  │        ├─ Validation
│  │        │  ├─ DNSCheckValidation.php
│  │        │  ├─ DNSGetRecordWrapper.php
│  │        │  ├─ DNSRecords.php
│  │        │  ├─ EmailValidation.php
│  │        │  ├─ Exception
│  │        │  │  └─ EmptyValidationList.php
│  │        │  ├─ Extra
│  │        │  │  └─ SpoofCheckValidation.php
│  │        │  ├─ MessageIDValidation.php
│  │        │  ├─ MultipleValidationWithAnd.php
│  │        │  ├─ NoRFCWarningsValidation.php
│  │        │  └─ RFCValidation.php
│  │        └─ Warning
│  │           ├─ AddressLiteral.php
│  │           ├─ CFWSNearAt.php
│  │           ├─ CFWSWithFWS.php
│  │           ├─ Comment.php
│  │           ├─ DeprecatedComment.php
│  │           ├─ DomainLiteral.php
│  │           ├─ EmailTooLong.php
│  │           ├─ IPV6BadChar.php
│  │           ├─ IPV6ColonEnd.php
│  │           ├─ IPV6ColonStart.php
│  │           ├─ IPV6Deprecated.php
│  │           ├─ IPV6DoubleColon.php
│  │           ├─ IPV6GroupCount.php
│  │           ├─ IPV6MaxGroups.php
│  │           ├─ LocalTooLong.php
│  │           ├─ NoDNSMXRecord.php
│  │           ├─ ObsoleteDTEXT.php
│  │           ├─ QuotedPart.php
│  │           ├─ QuotedString.php
│  │           ├─ TLD.php
│  │           └─ Warning.php
│  ├─ ezyang
│  │  └─ htmlpurifier
│  │     ├─ CREDITS
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ VERSION
│  │     ├─ composer.json
│  │     └─ library
│  │        ├─ HTMLPurifier
│  │        │  ├─ Arborize.php
│  │        │  ├─ AttrCollections.php
│  │        │  ├─ AttrDef
│  │        │  │  ├─ CSS
│  │        │  │  │  ├─ AlphaValue.php
│  │        │  │  │  ├─ Background.php
│  │        │  │  │  ├─ BackgroundPosition.php
│  │        │  │  │  ├─ Border.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Composite.php
│  │        │  │  │  ├─ DenyElementDecorator.php
│  │        │  │  │  ├─ Filter.php
│  │        │  │  │  ├─ Font.php
│  │        │  │  │  ├─ FontFamily.php
│  │        │  │  │  ├─ Ident.php
│  │        │  │  │  ├─ ImportantDecorator.php
│  │        │  │  │  ├─ Length.php
│  │        │  │  │  ├─ ListStyle.php
│  │        │  │  │  ├─ Multiple.php
│  │        │  │  │  ├─ Number.php
│  │        │  │  │  ├─ Percentage.php
│  │        │  │  │  ├─ Ratio.php
│  │        │  │  │  ├─ TextDecoration.php
│  │        │  │  │  └─ URI.php
│  │        │  │  ├─ CSS.php
│  │        │  │  ├─ Clone.php
│  │        │  │  ├─ Enum.php
│  │        │  │  ├─ HTML
│  │        │  │  │  ├─ Bool.php
│  │        │  │  │  ├─ Class.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ ContentEditable.php
│  │        │  │  │  ├─ FrameTarget.php
│  │        │  │  │  ├─ ID.php
│  │        │  │  │  ├─ Length.php
│  │        │  │  │  ├─ LinkTypes.php
│  │        │  │  │  ├─ MultiLength.php
│  │        │  │  │  ├─ Nmtokens.php
│  │        │  │  │  └─ Pixels.php
│  │        │  │  ├─ Integer.php
│  │        │  │  ├─ Lang.php
│  │        │  │  ├─ Switch.php
│  │        │  │  ├─ Text.php
│  │        │  │  ├─ URI
│  │        │  │  │  ├─ Email
│  │        │  │  │  │  └─ SimpleCheck.php
│  │        │  │  │  ├─ Email.php
│  │        │  │  │  ├─ Host.php
│  │        │  │  │  ├─ IPv4.php
│  │        │  │  │  └─ IPv6.php
│  │        │  │  └─ URI.php
│  │        │  ├─ AttrDef.php
│  │        │  ├─ AttrTransform
│  │        │  │  ├─ Background.php
│  │        │  │  ├─ BdoDir.php
│  │        │  │  ├─ BgColor.php
│  │        │  │  ├─ BoolToCSS.php
│  │        │  │  ├─ Border.php
│  │        │  │  ├─ EnumToCSS.php
│  │        │  │  ├─ ImgRequired.php
│  │        │  │  ├─ ImgSpace.php
│  │        │  │  ├─ Input.php
│  │        │  │  ├─ Lang.php
│  │        │  │  ├─ Length.php
│  │        │  │  ├─ Name.php
│  │        │  │  ├─ NameSync.php
│  │        │  │  ├─ Nofollow.php
│  │        │  │  ├─ SafeEmbed.php
│  │        │  │  ├─ SafeObject.php
│  │        │  │  ├─ SafeParam.php
│  │        │  │  ├─ ScriptRequired.php
│  │        │  │  ├─ TargetBlank.php
│  │        │  │  ├─ TargetNoopener.php
│  │        │  │  ├─ TargetNoreferrer.php
│  │        │  │  └─ Textarea.php
│  │        │  ├─ AttrTransform.php
│  │        │  ├─ AttrTypes.php
│  │        │  ├─ AttrValidator.php
│  │        │  ├─ Bootstrap.php
│  │        │  ├─ CSSDefinition.php
│  │        │  ├─ ChildDef
│  │        │  │  ├─ Chameleon.php
│  │        │  │  ├─ Custom.php
│  │        │  │  ├─ Empty.php
│  │        │  │  ├─ List.php
│  │        │  │  ├─ Optional.php
│  │        │  │  ├─ Required.php
│  │        │  │  ├─ StrictBlockquote.php
│  │        │  │  └─ Table.php
│  │        │  ├─ ChildDef.php
│  │        │  ├─ Config.php
│  │        │  ├─ ConfigSchema
│  │        │  │  ├─ Builder
│  │        │  │  │  ├─ ConfigSchema.php
│  │        │  │  │  └─ Xml.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ Interchange
│  │        │  │  │  ├─ Directive.php
│  │        │  │  │  └─ Id.php
│  │        │  │  ├─ Interchange.php
│  │        │  │  ├─ InterchangeBuilder.php
│  │        │  │  ├─ Validator.php
│  │        │  │  ├─ ValidatorAtom.php
│  │        │  │  ├─ schema
│  │        │  │  │  ├─ Attr.AllowedClasses.txt
│  │        │  │  │  ├─ Attr.AllowedFrameTargets.txt
│  │        │  │  │  ├─ Attr.AllowedRel.txt
│  │        │  │  │  ├─ Attr.AllowedRev.txt
│  │        │  │  │  ├─ Attr.ClassUseCDATA.txt
│  │        │  │  │  ├─ Attr.DefaultImageAlt.txt
│  │        │  │  │  ├─ Attr.DefaultInvalidImage.txt
│  │        │  │  │  ├─ Attr.DefaultInvalidImageAlt.txt
│  │        │  │  │  ├─ Attr.DefaultTextDir.txt
│  │        │  │  │  ├─ Attr.EnableID.txt
│  │        │  │  │  ├─ Attr.ForbiddenClasses.txt
│  │        │  │  │  ├─ Attr.ID.HTML5.txt
│  │        │  │  │  ├─ Attr.IDBlacklist.txt
│  │        │  │  │  ├─ Attr.IDBlacklistRegexp.txt
│  │        │  │  │  ├─ Attr.IDPrefix.txt
│  │        │  │  │  ├─ Attr.IDPrefixLocal.txt
│  │        │  │  │  ├─ AutoFormat.AutoParagraph.txt
│  │        │  │  │  ├─ AutoFormat.Custom.txt
│  │        │  │  │  ├─ AutoFormat.DisplayLinkURI.txt
│  │        │  │  │  ├─ AutoFormat.Linkify.txt
│  │        │  │  │  ├─ AutoFormat.PurifierLinkify.DocURL.txt
│  │        │  │  │  ├─ AutoFormat.PurifierLinkify.txt
│  │        │  │  │  ├─ AutoFormat.RemoveEmpty.Predicate.txt
│  │        │  │  │  ├─ AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions.txt
│  │        │  │  │  ├─ AutoFormat.RemoveEmpty.RemoveNbsp.txt
│  │        │  │  │  ├─ AutoFormat.RemoveEmpty.txt
│  │        │  │  │  ├─ AutoFormat.RemoveSpansWithoutAttributes.txt
│  │        │  │  │  ├─ CSS.AllowDuplicates.txt
│  │        │  │  │  ├─ CSS.AllowImportant.txt
│  │        │  │  │  ├─ CSS.AllowTricky.txt
│  │        │  │  │  ├─ CSS.AllowedFonts.txt
│  │        │  │  │  ├─ CSS.AllowedProperties.txt
│  │        │  │  │  ├─ CSS.DefinitionRev.txt
│  │        │  │  │  ├─ CSS.ForbiddenProperties.txt
│  │        │  │  │  ├─ CSS.MaxImgLength.txt
│  │        │  │  │  ├─ CSS.Proprietary.txt
│  │        │  │  │  ├─ CSS.Trusted.txt
│  │        │  │  │  ├─ Cache.DefinitionImpl.txt
│  │        │  │  │  ├─ Cache.SerializerPath.txt
│  │        │  │  │  ├─ Cache.SerializerPermissions.txt
│  │        │  │  │  ├─ Core.AggressivelyFixLt.txt
│  │        │  │  │  ├─ Core.AggressivelyRemoveScript.txt
│  │        │  │  │  ├─ Core.AllowHostnameUnderscore.txt
│  │        │  │  │  ├─ Core.AllowParseManyTags.txt
│  │        │  │  │  ├─ Core.CollectErrors.txt
│  │        │  │  │  ├─ Core.ColorKeywords.txt
│  │        │  │  │  ├─ Core.ConvertDocumentToFragment.txt
│  │        │  │  │  ├─ Core.DirectLexLineNumberSyncInterval.txt
│  │        │  │  │  ├─ Core.DisableExcludes.txt
│  │        │  │  │  ├─ Core.EnableIDNA.txt
│  │        │  │  │  ├─ Core.Encoding.txt
│  │        │  │  │  ├─ Core.EscapeInvalidChildren.txt
│  │        │  │  │  ├─ Core.EscapeInvalidTags.txt
│  │        │  │  │  ├─ Core.EscapeNonASCIICharacters.txt
│  │        │  │  │  ├─ Core.HiddenElements.txt
│  │        │  │  │  ├─ Core.Language.txt
│  │        │  │  │  ├─ Core.LegacyEntityDecoder.txt
│  │        │  │  │  ├─ Core.LexerImpl.txt
│  │        │  │  │  ├─ Core.MaintainLineNumbers.txt
│  │        │  │  │  ├─ Core.NormalizeNewlines.txt
│  │        │  │  │  ├─ Core.RemoveBlanks.txt
│  │        │  │  │  ├─ Core.RemoveInvalidImg.txt
│  │        │  │  │  ├─ Core.RemoveProcessingInstructions.txt
│  │        │  │  │  ├─ Core.RemoveScriptContents.txt
│  │        │  │  │  ├─ Filter.Custom.txt
│  │        │  │  │  ├─ Filter.ExtractStyleBlocks.Escaping.txt
│  │        │  │  │  ├─ Filter.ExtractStyleBlocks.Scope.txt
│  │        │  │  │  ├─ Filter.ExtractStyleBlocks.TidyImpl.txt
│  │        │  │  │  ├─ Filter.ExtractStyleBlocks.txt
│  │        │  │  │  ├─ Filter.YouTube.txt
│  │        │  │  │  ├─ HTML.Allowed.txt
│  │        │  │  │  ├─ HTML.AllowedAttributes.txt
│  │        │  │  │  ├─ HTML.AllowedComments.txt
│  │        │  │  │  ├─ HTML.AllowedCommentsRegexp.txt
│  │        │  │  │  ├─ HTML.AllowedElements.txt
│  │        │  │  │  ├─ HTML.AllowedModules.txt
│  │        │  │  │  ├─ HTML.Attr.Name.UseCDATA.txt
│  │        │  │  │  ├─ HTML.BlockWrapper.txt
│  │        │  │  │  ├─ HTML.CoreModules.txt
│  │        │  │  │  ├─ HTML.CustomDoctype.txt
│  │        │  │  │  ├─ HTML.DefinitionID.txt
│  │        │  │  │  ├─ HTML.DefinitionRev.txt
│  │        │  │  │  ├─ HTML.Doctype.txt
│  │        │  │  │  ├─ HTML.FlashAllowFullScreen.txt
│  │        │  │  │  ├─ HTML.ForbiddenAttributes.txt
│  │        │  │  │  ├─ HTML.ForbiddenElements.txt
│  │        │  │  │  ├─ HTML.Forms.txt
│  │        │  │  │  ├─ HTML.MaxImgLength.txt
│  │        │  │  │  ├─ HTML.Nofollow.txt
│  │        │  │  │  ├─ HTML.Parent.txt
│  │        │  │  │  ├─ HTML.Proprietary.txt
│  │        │  │  │  ├─ HTML.SafeEmbed.txt
│  │        │  │  │  ├─ HTML.SafeIframe.txt
│  │        │  │  │  ├─ HTML.SafeObject.txt
│  │        │  │  │  ├─ HTML.SafeScripting.txt
│  │        │  │  │  ├─ HTML.Strict.txt
│  │        │  │  │  ├─ HTML.TargetBlank.txt
│  │        │  │  │  ├─ HTML.TargetNoopener.txt
│  │        │  │  │  ├─ HTML.TargetNoreferrer.txt
│  │        │  │  │  ├─ HTML.TidyAdd.txt
│  │        │  │  │  ├─ HTML.TidyLevel.txt
│  │        │  │  │  ├─ HTML.TidyRemove.txt
│  │        │  │  │  ├─ HTML.Trusted.txt
│  │        │  │  │  ├─ HTML.XHTML.txt
│  │        │  │  │  ├─ Output.CommentScriptContents.txt
│  │        │  │  │  ├─ Output.FixInnerHTML.txt
│  │        │  │  │  ├─ Output.FlashCompat.txt
│  │        │  │  │  ├─ Output.Newline.txt
│  │        │  │  │  ├─ Output.SortAttr.txt
│  │        │  │  │  ├─ Output.TidyFormat.txt
│  │        │  │  │  ├─ Test.ForceNoIconv.txt
│  │        │  │  │  ├─ URI.AllowedSchemes.txt
│  │        │  │  │  ├─ URI.Base.txt
│  │        │  │  │  ├─ URI.DefaultScheme.txt
│  │        │  │  │  ├─ URI.DefinitionID.txt
│  │        │  │  │  ├─ URI.DefinitionRev.txt
│  │        │  │  │  ├─ URI.Disable.txt
│  │        │  │  │  ├─ URI.DisableExternal.txt
│  │        │  │  │  ├─ URI.DisableExternalResources.txt
│  │        │  │  │  ├─ URI.DisableResources.txt
│  │        │  │  │  ├─ URI.Host.txt
│  │        │  │  │  ├─ URI.HostBlacklist.txt
│  │        │  │  │  ├─ URI.MakeAbsolute.txt
│  │        │  │  │  ├─ URI.Munge.txt
│  │        │  │  │  ├─ URI.MungeResources.txt
│  │        │  │  │  ├─ URI.MungeSecretKey.txt
│  │        │  │  │  ├─ URI.OverrideAllowedSchemes.txt
│  │        │  │  │  ├─ URI.SafeIframeRegexp.txt
│  │        │  │  │  └─ info.ini
│  │        │  │  └─ schema.ser
│  │        │  ├─ ConfigSchema.php
│  │        │  ├─ ContentSets.php
│  │        │  ├─ Context.php
│  │        │  ├─ Definition.php
│  │        │  ├─ DefinitionCache
│  │        │  │  ├─ Decorator
│  │        │  │  │  ├─ Cleanup.php
│  │        │  │  │  ├─ Memory.php
│  │        │  │  │  └─ Template.php.in
│  │        │  │  ├─ Decorator.php
│  │        │  │  ├─ Null.php
│  │        │  │  ├─ Serializer
│  │        │  │  │  └─ README
│  │        │  │  └─ Serializer.php
│  │        │  ├─ DefinitionCache.php
│  │        │  ├─ DefinitionCacheFactory.php
│  │        │  ├─ Doctype.php
│  │        │  ├─ DoctypeRegistry.php
│  │        │  ├─ ElementDef.php
│  │        │  ├─ Encoder.php
│  │        │  ├─ EntityLookup
│  │        │  │  └─ entities.ser
│  │        │  ├─ EntityLookup.php
│  │        │  ├─ EntityParser.php
│  │        │  ├─ ErrorCollector.php
│  │        │  ├─ ErrorStruct.php
│  │        │  ├─ Exception.php
│  │        │  ├─ Filter
│  │        │  │  ├─ ExtractStyleBlocks.php
│  │        │  │  └─ YouTube.php
│  │        │  ├─ Filter.php
│  │        │  ├─ Generator.php
│  │        │  ├─ HTMLDefinition.php
│  │        │  ├─ HTMLModule
│  │        │  │  ├─ Bdo.php
│  │        │  │  ├─ CommonAttributes.php
│  │        │  │  ├─ Edit.php
│  │        │  │  ├─ Forms.php
│  │        │  │  ├─ Hypertext.php
│  │        │  │  ├─ Iframe.php
│  │        │  │  ├─ Image.php
│  │        │  │  ├─ Legacy.php
│  │        │  │  ├─ List.php
│  │        │  │  ├─ Name.php
│  │        │  │  ├─ Nofollow.php
│  │        │  │  ├─ NonXMLCommonAttributes.php
│  │        │  │  ├─ Object.php
│  │        │  │  ├─ Presentation.php
│  │        │  │  ├─ Proprietary.php
│  │        │  │  ├─ Ruby.php
│  │        │  │  ├─ SafeEmbed.php
│  │        │  │  ├─ SafeObject.php
│  │        │  │  ├─ SafeScripting.php
│  │        │  │  ├─ Scripting.php
│  │        │  │  ├─ StyleAttribute.php
│  │        │  │  ├─ Tables.php
│  │        │  │  ├─ Target.php
│  │        │  │  ├─ TargetBlank.php
│  │        │  │  ├─ TargetNoopener.php
│  │        │  │  ├─ TargetNoreferrer.php
│  │        │  │  ├─ Text.php
│  │        │  │  ├─ Tidy
│  │        │  │  │  ├─ Name.php
│  │        │  │  │  ├─ Proprietary.php
│  │        │  │  │  ├─ Strict.php
│  │        │  │  │  ├─ Transitional.php
│  │        │  │  │  ├─ XHTML.php
│  │        │  │  │  └─ XHTMLAndHTML4.php
│  │        │  │  ├─ Tidy.php
│  │        │  │  └─ XMLCommonAttributes.php
│  │        │  ├─ HTMLModule.php
│  │        │  ├─ HTMLModuleManager.php
│  │        │  ├─ IDAccumulator.php
│  │        │  ├─ Injector
│  │        │  │  ├─ AutoParagraph.php
│  │        │  │  ├─ DisplayLinkURI.php
│  │        │  │  ├─ Linkify.php
│  │        │  │  ├─ PurifierLinkify.php
│  │        │  │  ├─ RemoveEmpty.php
│  │        │  │  ├─ RemoveSpansWithoutAttributes.php
│  │        │  │  └─ SafeObject.php
│  │        │  ├─ Injector.php
│  │        │  ├─ Language
│  │        │  │  └─ messages
│  │        │  │     └─ en.php
│  │        │  ├─ Language.php
│  │        │  ├─ LanguageFactory.php
│  │        │  ├─ Length.php
│  │        │  ├─ Lexer
│  │        │  │  ├─ DOMLex.php
│  │        │  │  ├─ DirectLex.php
│  │        │  │  └─ PH5P.php
│  │        │  ├─ Lexer.php
│  │        │  ├─ Node
│  │        │  │  ├─ Comment.php
│  │        │  │  ├─ Element.php
│  │        │  │  └─ Text.php
│  │        │  ├─ Node.php
│  │        │  ├─ PercentEncoder.php
│  │        │  ├─ Printer
│  │        │  │  ├─ CSSDefinition.php
│  │        │  │  ├─ ConfigForm.css
│  │        │  │  ├─ ConfigForm.js
│  │        │  │  ├─ ConfigForm.php
│  │        │  │  └─ HTMLDefinition.php
│  │        │  ├─ Printer.php
│  │        │  ├─ PropertyList.php
│  │        │  ├─ PropertyListIterator.php
│  │        │  ├─ Queue.php
│  │        │  ├─ Strategy
│  │        │  │  ├─ Composite.php
│  │        │  │  ├─ Core.php
│  │        │  │  ├─ FixNesting.php
│  │        │  │  ├─ MakeWellFormed.php
│  │        │  │  ├─ RemoveForeignElements.php
│  │        │  │  └─ ValidateAttributes.php
│  │        │  ├─ Strategy.php
│  │        │  ├─ StringHash.php
│  │        │  ├─ StringHashParser.php
│  │        │  ├─ TagTransform
│  │        │  │  ├─ Font.php
│  │        │  │  └─ Simple.php
│  │        │  ├─ TagTransform.php
│  │        │  ├─ Token
│  │        │  │  ├─ Comment.php
│  │        │  │  ├─ Empty.php
│  │        │  │  ├─ End.php
│  │        │  │  ├─ Start.php
│  │        │  │  ├─ Tag.php
│  │        │  │  └─ Text.php
│  │        │  ├─ Token.php
│  │        │  ├─ TokenFactory.php
│  │        │  ├─ URI.php
│  │        │  ├─ URIDefinition.php
│  │        │  ├─ URIFilter
│  │        │  │  ├─ DisableExternal.php
│  │        │  │  ├─ DisableExternalResources.php
│  │        │  │  ├─ DisableResources.php
│  │        │  │  ├─ HostBlacklist.php
│  │        │  │  ├─ MakeAbsolute.php
│  │        │  │  ├─ Munge.php
│  │        │  │  └─ SafeIframe.php
│  │        │  ├─ URIFilter.php
│  │        │  ├─ URIParser.php
│  │        │  ├─ URIScheme
│  │        │  │  ├─ data.php
│  │        │  │  ├─ file.php
│  │        │  │  ├─ ftp.php
│  │        │  │  ├─ http.php
│  │        │  │  ├─ https.php
│  │        │  │  ├─ mailto.php
│  │        │  │  ├─ news.php
│  │        │  │  ├─ nntp.php
│  │        │  │  └─ tel.php
│  │        │  ├─ URIScheme.php
│  │        │  ├─ URISchemeRegistry.php
│  │        │  ├─ UnitConverter.php
│  │        │  ├─ VarParser
│  │        │  │  ├─ Flexible.php
│  │        │  │  └─ Native.php
│  │        │  ├─ VarParser.php
│  │        │  ├─ VarParserException.php
│  │        │  └─ Zipper.php
│  │        ├─ HTMLPurifier.auto.php
│  │        ├─ HTMLPurifier.autoload-legacy.php
│  │        ├─ HTMLPurifier.autoload.php
│  │        ├─ HTMLPurifier.composer.php
│  │        ├─ HTMLPurifier.func.php
│  │        ├─ HTMLPurifier.includes.php
│  │        ├─ HTMLPurifier.kses.php
│  │        ├─ HTMLPurifier.path.php
│  │        ├─ HTMLPurifier.php
│  │        └─ HTMLPurifier.safe-includes.php
│  ├─ facade
│  │  └─ ignition-contracts
│  │     ├─ .php_cs
│  │     ├─ LICENSE.md
│  │     ├─ composer.json
│  │     ├─ psalm.xml
│  │     └─ src
│  │        ├─ BaseSolution.php
│  │        ├─ HasSolutionsForThrowable.php
│  │        ├─ ProvidesSolution.php
│  │        ├─ RunnableSolution.php
│  │        ├─ Solution.php
│  │        └─ SolutionProviderRepository.php
│  ├─ fakerphp
│  │  └─ faker
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ rector-migrate.php
│  │     └─ src
│  │        ├─ Faker
│  │        │  ├─ Calculator
│  │        │  │  ├─ Ean.php
│  │        │  │  ├─ Iban.php
│  │        │  │  ├─ Inn.php
│  │        │  │  ├─ Isbn.php
│  │        │  │  ├─ Luhn.php
│  │        │  │  └─ TCNo.php
│  │        │  ├─ ChanceGenerator.php
│  │        │  ├─ Container
│  │        │  │  ├─ Container.php
│  │        │  │  ├─ ContainerBuilder.php
│  │        │  │  ├─ ContainerException.php
│  │        │  │  ├─ ContainerInterface.php
│  │        │  │  └─ NotInContainerException.php
│  │        │  ├─ Core
│  │        │  │  ├─ Barcode.php
│  │        │  │  ├─ Blood.php
│  │        │  │  ├─ Color.php
│  │        │  │  ├─ Coordinates.php
│  │        │  │  ├─ DateTime.php
│  │        │  │  ├─ File.php
│  │        │  │  ├─ Number.php
│  │        │  │  ├─ Uuid.php
│  │        │  │  └─ Version.php
│  │        │  ├─ DefaultGenerator.php
│  │        │  ├─ Documentor.php
│  │        │  ├─ Extension
│  │        │  │  ├─ AddressExtension.php
│  │        │  │  ├─ BarcodeExtension.php
│  │        │  │  ├─ BloodExtension.php
│  │        │  │  ├─ ColorExtension.php
│  │        │  │  ├─ CompanyExtension.php
│  │        │  │  ├─ CountryExtension.php
│  │        │  │  ├─ DateTimeExtension.php
│  │        │  │  ├─ Extension.php
│  │        │  │  ├─ ExtensionNotFound.php
│  │        │  │  ├─ FileExtension.php
│  │        │  │  ├─ GeneratorAwareExtension.php
│  │        │  │  ├─ GeneratorAwareExtensionTrait.php
│  │        │  │  ├─ Helper.php
│  │        │  │  ├─ NumberExtension.php
│  │        │  │  ├─ PersonExtension.php
│  │        │  │  ├─ PhoneNumberExtension.php
│  │        │  │  ├─ UuidExtension.php
│  │        │  │  └─ VersionExtension.php
│  │        │  ├─ Factory.php
│  │        │  ├─ Generator.php
│  │        │  ├─ Guesser
│  │        │  │  └─ Name.php
│  │        │  ├─ ORM
│  │        │  │  ├─ CakePHP
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  ├─ Doctrine
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  ├─ Populator.php
│  │        │  │  │  └─ backward-compatibility.php
│  │        │  │  ├─ Mandango
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  ├─ Propel
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  ├─ Propel2
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  └─ Spot
│  │        │  │     ├─ ColumnTypeGuesser.php
│  │        │  │     ├─ EntityPopulator.php
│  │        │  │     └─ Populator.php
│  │        │  ├─ Provider
│  │        │  │  ├─ Address.php
│  │        │  │  ├─ Barcode.php
│  │        │  │  ├─ Base.php
│  │        │  │  ├─ Biased.php
│  │        │  │  ├─ Color.php
│  │        │  │  ├─ Company.php
│  │        │  │  ├─ DateTime.php
│  │        │  │  ├─ File.php
│  │        │  │  ├─ HtmlLorem.php
│  │        │  │  ├─ Image.php
│  │        │  │  ├─ Internet.php
│  │        │  │  ├─ Lorem.php
│  │        │  │  ├─ Medical.php
│  │        │  │  ├─ Miscellaneous.php
│  │        │  │  ├─ Payment.php
│  │        │  │  ├─ Person.php
│  │        │  │  ├─ PhoneNumber.php
│  │        │  │  ├─ Text.php
│  │        │  │  ├─ UserAgent.php
│  │        │  │  ├─ Uuid.php
│  │        │  │  ├─ ar_EG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ar_JO
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ar_SA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ at_AT
│  │        │  │  │  └─ Payment.php
│  │        │  │  ├─ bg_BG
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ bn_BD
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Utils.php
│  │        │  │  ├─ cs_CZ
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ da_DK
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ de_AT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ de_CH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ de_DE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ el_CY
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ el_GR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ en_AU
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_CA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_GB
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_HK
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_IN
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_NG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_NZ
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_PH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_SG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_UG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_US
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ en_ZA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ es_AR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ es_ES
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ es_PE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ es_VE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ et_EE
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ fa_IR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ fi_FI
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ fr_BE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ fr_CA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ fr_CH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ fr_FR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ he_IL
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ hr_HR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ hu_HU
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ hy_AM
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ id_ID
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ is_IS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ it_CH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ it_IT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ja_JP
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ka_GE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ kk_KZ
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ko_KR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ lt_LT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ lv_LV
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ me_ME
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ mn_MN
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ ms_MY
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Miscellaneous.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ nb_NO
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ ne_NP
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ nl_BE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ nl_NL
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ pl_PL
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ LicensePlate.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ pt_BR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  ├─ Text.php
│  │        │  │  │  └─ check_digit.php
│  │        │  │  ├─ pt_PT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ ro_MD
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ro_RO
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ru_RU
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ sk_SK
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ sl_SI
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ sr_Cyrl_RS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ sr_Latn_RS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ sr_RS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ sv_SE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Municipality.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ th_TH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ tr_TR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ uk_UA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ vi_VN
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ zh_CN
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  └─ zh_TW
│  │        │  │     ├─ Address.php
│  │        │  │     ├─ Color.php
│  │        │  │     ├─ Company.php
│  │        │  │     ├─ DateTime.php
│  │        │  │     ├─ Internet.php
│  │        │  │     ├─ Payment.php
│  │        │  │     ├─ Person.php
│  │        │  │     ├─ PhoneNumber.php
│  │        │  │     └─ Text.php
│  │        │  ├─ UniqueGenerator.php
│  │        │  └─ ValidGenerator.php
│  │        └─ autoload.php
│  ├─ fidry
│  │  └─ cpu-core-counter
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ bin
│  │     │  ├─ diagnose.php
│  │     │  ├─ execute.php
│  │     │  └─ trace.php
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ CpuCoreCounter.php
│  │        ├─ Diagnoser.php
│  │        ├─ Executor
│  │        │  ├─ ProcOpenExecutor.php
│  │        │  └─ ProcessExecutor.php
│  │        ├─ Finder
│  │        │  ├─ CmiCmdletLogicalFinder.php
│  │        │  ├─ CmiCmdletPhysicalFinder.php
│  │        │  ├─ CpuCoreFinder.php
│  │        │  ├─ CpuInfoFinder.php
│  │        │  ├─ DummyCpuCoreFinder.php
│  │        │  ├─ EnvVariableFinder.php
│  │        │  ├─ FinderRegistry.php
│  │        │  ├─ HwLogicalFinder.php
│  │        │  ├─ HwPhysicalFinder.php
│  │        │  ├─ LscpuLogicalFinder.php
│  │        │  ├─ LscpuPhysicalFinder.php
│  │        │  ├─ NProcFinder.php
│  │        │  ├─ NProcessorFinder.php
│  │        │  ├─ NullCpuCoreFinder.php
│  │        │  ├─ OnlyInPowerShellFinder.php
│  │        │  ├─ OnlyOnOSFamilyFinder.php
│  │        │  ├─ ProcOpenBasedFinder.php
│  │        │  ├─ SkipOnOSFamilyFinder.php
│  │        │  ├─ WindowsRegistryLogicalFinder.php
│  │        │  ├─ WmicLogicalFinder.php
│  │        │  ├─ WmicPhysicalFinder.php
│  │        │  └─ _NProcessorFinder.php
│  │        ├─ NumberOfCpuCoreNotFound.php
│  │        └─ ParallelisationResult.php
│  ├─ filp
│  │  └─ whoops
│  │     ├─ .mailmap
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Whoops
│  │           ├─ Exception
│  │           │  ├─ ErrorException.php
│  │           │  ├─ Formatter.php
│  │           │  ├─ Frame.php
│  │           │  ├─ FrameCollection.php
│  │           │  └─ Inspector.php
│  │           ├─ Handler
│  │           │  ├─ CallbackHandler.php
│  │           │  ├─ Handler.php
│  │           │  ├─ HandlerInterface.php
│  │           │  ├─ JsonResponseHandler.php
│  │           │  ├─ PlainTextHandler.php
│  │           │  ├─ PrettyPageHandler.php
│  │           │  └─ XmlResponseHandler.php
│  │           ├─ Inspector
│  │           │  ├─ InspectorFactory.php
│  │           │  ├─ InspectorFactoryInterface.php
│  │           │  └─ InspectorInterface.php
│  │           ├─ Resources
│  │           │  ├─ css
│  │           │  │  ├─ prism.css
│  │           │  │  └─ whoops.base.css
│  │           │  ├─ js
│  │           │  │  ├─ clipboard.min.js
│  │           │  │  ├─ prism.js
│  │           │  │  ├─ whoops.base.js
│  │           │  │  └─ zepto.min.js
│  │           │  └─ views
│  │           │     ├─ env_details.html.php
│  │           │     ├─ frame_code.html.php
│  │           │     ├─ frame_list.html.php
│  │           │     ├─ frames_container.html.php
│  │           │     ├─ frames_description.html.php
│  │           │     ├─ header.html.php
│  │           │     ├─ header_outer.html.php
│  │           │     ├─ layout.html.php
│  │           │     ├─ panel_details.html.php
│  │           │     ├─ panel_details_outer.html.php
│  │           │     ├─ panel_left.html.php
│  │           │     └─ panel_left_outer.html.php
│  │           ├─ Run.php
│  │           ├─ RunInterface.php
│  │           └─ Util
│  │              ├─ HtmlDumperOutput.php
│  │              ├─ Misc.php
│  │              ├─ SystemFacade.php
│  │              └─ TemplateHelper.php
│  ├─ fruitcake
│  │  └─ php-cors
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ CorsService.php
│  │        └─ Exceptions
│  │           └─ InvalidOptionException.php
│  ├─ graham-campbell
│  │  └─ result-type
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Error.php
│  │        ├─ Result.php
│  │        └─ Success.php
│  ├─ guzzlehttp
│  │  ├─ guzzle
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ UPGRADING.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ BodySummarizer.php
│  │  │     ├─ BodySummarizerInterface.php
│  │  │     ├─ Client.php
│  │  │     ├─ ClientInterface.php
│  │  │     ├─ ClientTrait.php
│  │  │     ├─ Cookie
│  │  │     │  ├─ CookieJar.php
│  │  │     │  ├─ CookieJarInterface.php
│  │  │     │  ├─ FileCookieJar.php
│  │  │     │  ├─ SessionCookieJar.php
│  │  │     │  └─ SetCookie.php
│  │  │     ├─ Exception
│  │  │     │  ├─ BadResponseException.php
│  │  │     │  ├─ ClientException.php
│  │  │     │  ├─ ConnectException.php
│  │  │     │  ├─ GuzzleException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ RequestException.php
│  │  │     │  ├─ ServerException.php
│  │  │     │  ├─ TooManyRedirectsException.php
│  │  │     │  └─ TransferException.php
│  │  │     ├─ Handler
│  │  │     │  ├─ CurlFactory.php
│  │  │     │  ├─ CurlFactoryInterface.php
│  │  │     │  ├─ CurlHandler.php
│  │  │     │  ├─ CurlMultiHandler.php
│  │  │     │  ├─ EasyHandle.php
│  │  │     │  ├─ HeaderProcessor.php
│  │  │     │  ├─ MockHandler.php
│  │  │     │  ├─ Proxy.php
│  │  │     │  └─ StreamHandler.php
│  │  │     ├─ HandlerStack.php
│  │  │     ├─ MessageFormatter.php
│  │  │     ├─ MessageFormatterInterface.php
│  │  │     ├─ Middleware.php
│  │  │     ├─ Pool.php
│  │  │     ├─ PrepareBodyMiddleware.php
│  │  │     ├─ RedirectMiddleware.php
│  │  │     ├─ RequestOptions.php
│  │  │     ├─ RetryMiddleware.php
│  │  │     ├─ TransferStats.php
│  │  │     ├─ Utils.php
│  │  │     ├─ functions.php
│  │  │     └─ functions_include.php
│  │  ├─ promises
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AggregateException.php
│  │  │     ├─ CancellationException.php
│  │  │     ├─ Coroutine.php
│  │  │     ├─ Create.php
│  │  │     ├─ Each.php
│  │  │     ├─ EachPromise.php
│  │  │     ├─ FulfilledPromise.php
│  │  │     ├─ Is.php
│  │  │     ├─ Promise.php
│  │  │     ├─ PromiseInterface.php
│  │  │     ├─ PromisorInterface.php
│  │  │     ├─ RejectedPromise.php
│  │  │     ├─ RejectionException.php
│  │  │     ├─ TaskQueue.php
│  │  │     ├─ TaskQueueInterface.php
│  │  │     └─ Utils.php
│  │  ├─ psr7
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AppendStream.php
│  │  │     ├─ BufferStream.php
│  │  │     ├─ CachingStream.php
│  │  │     ├─ DroppingStream.php
│  │  │     ├─ Exception
│  │  │     │  └─ MalformedUriException.php
│  │  │     ├─ FnStream.php
│  │  │     ├─ Header.php
│  │  │     ├─ HttpFactory.php
│  │  │     ├─ InflateStream.php
│  │  │     ├─ LazyOpenStream.php
│  │  │     ├─ LimitStream.php
│  │  │     ├─ Message.php
│  │  │     ├─ MessageTrait.php
│  │  │     ├─ MimeType.php
│  │  │     ├─ MultipartStream.php
│  │  │     ├─ NoSeekStream.php
│  │  │     ├─ PumpStream.php
│  │  │     ├─ Query.php
│  │  │     ├─ Request.php
│  │  │     ├─ Response.php
│  │  │     ├─ Rfc7230.php
│  │  │     ├─ ServerRequest.php
│  │  │     ├─ Stream.php
│  │  │     ├─ StreamDecoratorTrait.php
│  │  │     ├─ StreamWrapper.php
│  │  │     ├─ UploadedFile.php
│  │  │     ├─ Uri.php
│  │  │     ├─ UriComparator.php
│  │  │     ├─ UriNormalizer.php
│  │  │     ├─ UriResolver.php
│  │  │     └─ Utils.php
│  │  └─ uri-template
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ UriTemplate.php
│  ├─ hamcrest
│  │  └─ hamcrest-php
│  │     ├─ .coveralls.yml
│  │     ├─ .gush.yml
│  │     ├─ .travis.yml
│  │     ├─ CHANGES.txt
│  │     ├─ LICENSE.txt
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ generator
│  │     │  ├─ FactoryCall.php
│  │     │  ├─ FactoryClass.php
│  │     │  ├─ FactoryFile.php
│  │     │  ├─ FactoryGenerator.php
│  │     │  ├─ FactoryMethod.php
│  │     │  ├─ FactoryParameter.php
│  │     │  ├─ GlobalFunctionFile.php
│  │     │  ├─ StaticMethodFile.php
│  │     │  ├─ parts
│  │     │  │  ├─ file_header.txt
│  │     │  │  ├─ functions_footer.txt
│  │     │  │  ├─ functions_header.txt
│  │     │  │  ├─ functions_imports.txt
│  │     │  │  ├─ matchers_footer.txt
│  │     │  │  ├─ matchers_header.txt
│  │     │  │  └─ matchers_imports.txt
│  │     │  └─ run.php
│  │     ├─ hamcrest
│  │     │  ├─ Hamcrest
│  │     │  │  ├─ Arrays
│  │     │  │  │  ├─ IsArray.php
│  │     │  │  │  ├─ IsArrayContaining.php
│  │     │  │  │  ├─ IsArrayContainingInAnyOrder.php
│  │     │  │  │  ├─ IsArrayContainingInOrder.php
│  │     │  │  │  ├─ IsArrayContainingKey.php
│  │     │  │  │  ├─ IsArrayContainingKeyValuePair.php
│  │     │  │  │  ├─ IsArrayWithSize.php
│  │     │  │  │  ├─ MatchingOnce.php
│  │     │  │  │  └─ SeriesMatchingOnce.php
│  │     │  │  ├─ AssertionError.php
│  │     │  │  ├─ BaseDescription.php
│  │     │  │  ├─ BaseMatcher.php
│  │     │  │  ├─ Collection
│  │     │  │  │  ├─ IsEmptyTraversable.php
│  │     │  │  │  └─ IsTraversableWithSize.php
│  │     │  │  ├─ Core
│  │     │  │  │  ├─ AllOf.php
│  │     │  │  │  ├─ AnyOf.php
│  │     │  │  │  ├─ CombinableMatcher.php
│  │     │  │  │  ├─ DescribedAs.php
│  │     │  │  │  ├─ Every.php
│  │     │  │  │  ├─ HasToString.php
│  │     │  │  │  ├─ Is.php
│  │     │  │  │  ├─ IsAnything.php
│  │     │  │  │  ├─ IsCollectionContaining.php
│  │     │  │  │  ├─ IsEqual.php
│  │     │  │  │  ├─ IsIdentical.php
│  │     │  │  │  ├─ IsInstanceOf.php
│  │     │  │  │  ├─ IsNot.php
│  │     │  │  │  ├─ IsNull.php
│  │     │  │  │  ├─ IsSame.php
│  │     │  │  │  ├─ IsTypeOf.php
│  │     │  │  │  ├─ Set.php
│  │     │  │  │  └─ ShortcutCombination.php
│  │     │  │  ├─ Description.php
│  │     │  │  ├─ DiagnosingMatcher.php
│  │     │  │  ├─ FeatureMatcher.php
│  │     │  │  ├─ Internal
│  │     │  │  │  └─ SelfDescribingValue.php
│  │     │  │  ├─ Matcher.php
│  │     │  │  ├─ MatcherAssert.php
│  │     │  │  ├─ Matchers.php
│  │     │  │  ├─ NullDescription.php
│  │     │  │  ├─ Number
│  │     │  │  │  ├─ IsCloseTo.php
│  │     │  │  │  └─ OrderingComparison.php
│  │     │  │  ├─ SelfDescribing.php
│  │     │  │  ├─ StringDescription.php
│  │     │  │  ├─ Text
│  │     │  │  │  ├─ IsEmptyString.php
│  │     │  │  │  ├─ IsEqualIgnoringCase.php
│  │     │  │  │  ├─ IsEqualIgnoringWhiteSpace.php
│  │     │  │  │  ├─ MatchesPattern.php
│  │     │  │  │  ├─ StringContains.php
│  │     │  │  │  ├─ StringContainsIgnoringCase.php
│  │     │  │  │  ├─ StringContainsInOrder.php
│  │     │  │  │  ├─ StringEndsWith.php
│  │     │  │  │  ├─ StringStartsWith.php
│  │     │  │  │  └─ SubstringMatcher.php
│  │     │  │  ├─ Type
│  │     │  │  │  ├─ IsArray.php
│  │     │  │  │  ├─ IsBoolean.php
│  │     │  │  │  ├─ IsCallable.php
│  │     │  │  │  ├─ IsDouble.php
│  │     │  │  │  ├─ IsInteger.php
│  │     │  │  │  ├─ IsNumeric.php
│  │     │  │  │  ├─ IsObject.php
│  │     │  │  │  ├─ IsResource.php
│  │     │  │  │  ├─ IsScalar.php
│  │     │  │  │  └─ IsString.php
│  │     │  │  ├─ TypeSafeDiagnosingMatcher.php
│  │     │  │  ├─ TypeSafeMatcher.php
│  │     │  │  ├─ Util.php
│  │     │  │  └─ Xml
│  │     │  │     └─ HasXPath.php
│  │     │  └─ Hamcrest.php
│  │     └─ tests
│  │        ├─ Hamcrest
│  │        │  ├─ AbstractMatcherTest.php
│  │        │  ├─ Array
│  │        │  │  ├─ IsArrayContainingInAnyOrderTest.php
│  │        │  │  ├─ IsArrayContainingInOrderTest.php
│  │        │  │  ├─ IsArrayContainingKeyTest.php
│  │        │  │  ├─ IsArrayContainingKeyValuePairTest.php
│  │        │  │  ├─ IsArrayContainingTest.php
│  │        │  │  ├─ IsArrayTest.php
│  │        │  │  └─ IsArrayWithSizeTest.php
│  │        │  ├─ BaseMatcherTest.php
│  │        │  ├─ Collection
│  │        │  │  ├─ IsEmptyTraversableTest.php
│  │        │  │  └─ IsTraversableWithSizeTest.php
│  │        │  ├─ Core
│  │        │  │  ├─ AllOfTest.php
│  │        │  │  ├─ AnyOfTest.php
│  │        │  │  ├─ CombinableMatcherTest.php
│  │        │  │  ├─ DescribedAsTest.php
│  │        │  │  ├─ EveryTest.php
│  │        │  │  ├─ HasToStringTest.php
│  │        │  │  ├─ IsAnythingTest.php
│  │        │  │  ├─ IsCollectionContainingTest.php
│  │        │  │  ├─ IsEqualTest.php
│  │        │  │  ├─ IsIdenticalTest.php
│  │        │  │  ├─ IsInstanceOfTest.php
│  │        │  │  ├─ IsNotTest.php
│  │        │  │  ├─ IsNullTest.php
│  │        │  │  ├─ IsSameTest.php
│  │        │  │  ├─ IsTest.php
│  │        │  │  ├─ IsTypeOfTest.php
│  │        │  │  ├─ SampleBaseClass.php
│  │        │  │  ├─ SampleSubClass.php
│  │        │  │  └─ SetTest.php
│  │        │  ├─ FeatureMatcherTest.php
│  │        │  ├─ InvokedMatcherTest.php
│  │        │  ├─ MatcherAssertTest.php
│  │        │  ├─ Number
│  │        │  │  ├─ IsCloseToTest.php
│  │        │  │  └─ OrderingComparisonTest.php
│  │        │  ├─ StringDescriptionTest.php
│  │        │  ├─ Text
│  │        │  │  ├─ IsEmptyStringTest.php
│  │        │  │  ├─ IsEqualIgnoringCaseTest.php
│  │        │  │  ├─ IsEqualIgnoringWhiteSpaceTest.php
│  │        │  │  ├─ MatchesPatternTest.php
│  │        │  │  ├─ StringContainsIgnoringCaseTest.php
│  │        │  │  ├─ StringContainsInOrderTest.php
│  │        │  │  ├─ StringContainsTest.php
│  │        │  │  ├─ StringEndsWithTest.php
│  │        │  │  └─ StringStartsWithTest.php
│  │        │  ├─ Type
│  │        │  │  ├─ IsArrayTest.php
│  │        │  │  ├─ IsBooleanTest.php
│  │        │  │  ├─ IsCallableTest.php
│  │        │  │  ├─ IsDoubleTest.php
│  │        │  │  ├─ IsIntegerTest.php
│  │        │  │  ├─ IsNumericTest.php
│  │        │  │  ├─ IsObjectTest.php
│  │        │  │  ├─ IsResourceTest.php
│  │        │  │  ├─ IsScalarTest.php
│  │        │  │  └─ IsStringTest.php
│  │        │  ├─ UtilTest.php
│  │        │  └─ Xml
│  │        │     └─ HasXPathTest.php
│  │        ├─ bootstrap.php
│  │        └─ phpunit.xml.dist
│  ├─ intervention
│  │  ├─ gif
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ phpunit.xml.dist
│  │  │  └─ src
│  │  │     ├─ AbstractEntity.php
│  │  │     ├─ AbstractExtension.php
│  │  │     ├─ Blocks
│  │  │     │  ├─ ApplicationExtension.php
│  │  │     │  ├─ Color.php
│  │  │     │  ├─ ColorTable.php
│  │  │     │  ├─ CommentExtension.php
│  │  │     │  ├─ DataSubBlock.php
│  │  │     │  ├─ FrameBlock.php
│  │  │     │  ├─ GraphicControlExtension.php
│  │  │     │  ├─ Header.php
│  │  │     │  ├─ ImageData.php
│  │  │     │  ├─ ImageDescriptor.php
│  │  │     │  ├─ LogicalScreenDescriptor.php
│  │  │     │  ├─ NetscapeApplicationExtension.php
│  │  │     │  ├─ PlainTextExtension.php
│  │  │     │  ├─ TableBasedImage.php
│  │  │     │  └─ Trailer.php
│  │  │     ├─ Builder.php
│  │  │     ├─ Decoder.php
│  │  │     ├─ Decoders
│  │  │     │  ├─ AbstractDecoder.php
│  │  │     │  ├─ AbstractPackedBitDecoder.php
│  │  │     │  ├─ ApplicationExtensionDecoder.php
│  │  │     │  ├─ ColorDecoder.php
│  │  │     │  ├─ ColorTableDecoder.php
│  │  │     │  ├─ CommentExtensionDecoder.php
│  │  │     │  ├─ DataSubBlockDecoder.php
│  │  │     │  ├─ FrameBlockDecoder.php
│  │  │     │  ├─ GifDataStreamDecoder.php
│  │  │     │  ├─ GraphicControlExtensionDecoder.php
│  │  │     │  ├─ HeaderDecoder.php
│  │  │     │  ├─ ImageDataDecoder.php
│  │  │     │  ├─ ImageDescriptorDecoder.php
│  │  │     │  ├─ LogicalScreenDescriptorDecoder.php
│  │  │     │  ├─ NetscapeApplicationExtensionDecoder.php
│  │  │     │  ├─ PlainTextExtensionDecoder.php
│  │  │     │  └─ TableBasedImageDecoder.php
│  │  │     ├─ DisposalMethod.php
│  │  │     ├─ Encoders
│  │  │     │  ├─ AbstractEncoder.php
│  │  │     │  ├─ ApplicationExtensionEncoder.php
│  │  │     │  ├─ ColorEncoder.php
│  │  │     │  ├─ ColorTableEncoder.php
│  │  │     │  ├─ CommentExtensionEncoder.php
│  │  │     │  ├─ DataSubBlockEncoder.php
│  │  │     │  ├─ FrameBlockEncoder.php
│  │  │     │  ├─ GifDataStreamEncoder.php
│  │  │     │  ├─ GraphicControlExtensionEncoder.php
│  │  │     │  ├─ HeaderEncoder.php
│  │  │     │  ├─ ImageDataEncoder.php
│  │  │     │  ├─ ImageDescriptorEncoder.php
│  │  │     │  ├─ LogicalScreenDescriptorEncoder.php
│  │  │     │  ├─ NetscapeApplicationExtensionEncoder.php
│  │  │     │  ├─ PlainTextExtensionEncoder.php
│  │  │     │  ├─ TableBasedImageEncoder.php
│  │  │     │  └─ TrailerEncoder.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ DecoderException.php
│  │  │     │  ├─ EncoderException.php
│  │  │     │  ├─ FormatException.php
│  │  │     │  └─ NotReadableException.php
│  │  │     ├─ GifDataStream.php
│  │  │     ├─ Splitter.php
│  │  │     └─ Traits
│  │  │        ├─ CanDecode.php
│  │  │        ├─ CanEncode.php
│  │  │        └─ CanHandleFiles.php
│  │  └─ image
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     ├─ readme.md
│  │     └─ src
│  │        ├─ Analyzers
│  │        │  ├─ ColorspaceAnalyzer.php
│  │        │  ├─ HeightAnalyzer.php
│  │        │  ├─ PixelColorAnalyzer.php
│  │        │  ├─ PixelColorsAnalyzer.php
│  │        │  ├─ ProfileAnalyzer.php
│  │        │  ├─ ResolutionAnalyzer.php
│  │        │  └─ WidthAnalyzer.php
│  │        ├─ Collection.php
│  │        ├─ Colors
│  │        │  ├─ AbstractColor.php
│  │        │  ├─ AbstractColorChannel.php
│  │        │  ├─ Cmyk
│  │        │  │  ├─ Channels
│  │        │  │  │  ├─ Cyan.php
│  │        │  │  │  ├─ Key.php
│  │        │  │  │  ├─ Magenta.php
│  │        │  │  │  └─ Yellow.php
│  │        │  │  ├─ Color.php
│  │        │  │  ├─ Colorspace.php
│  │        │  │  └─ Decoders
│  │        │  │     └─ StringColorDecoder.php
│  │        │  ├─ Hsl
│  │        │  │  ├─ Channels
│  │        │  │  │  ├─ Hue.php
│  │        │  │  │  ├─ Luminance.php
│  │        │  │  │  └─ Saturation.php
│  │        │  │  ├─ Color.php
│  │        │  │  ├─ Colorspace.php
│  │        │  │  └─ Decoders
│  │        │  │     └─ StringColorDecoder.php
│  │        │  ├─ Hsv
│  │        │  │  ├─ Channels
│  │        │  │  │  ├─ Hue.php
│  │        │  │  │  ├─ Saturation.php
│  │        │  │  │  └─ Value.php
│  │        │  │  ├─ Color.php
│  │        │  │  ├─ Colorspace.php
│  │        │  │  └─ Decoders
│  │        │  │     └─ StringColorDecoder.php
│  │        │  ├─ Profile.php
│  │        │  └─ Rgb
│  │        │     ├─ Channels
│  │        │     │  ├─ Alpha.php
│  │        │     │  ├─ Blue.php
│  │        │     │  ├─ Green.php
│  │        │     │  └─ Red.php
│  │        │     ├─ Color.php
│  │        │     ├─ Colorspace.php
│  │        │     └─ Decoders
│  │        │        ├─ HexColorDecoder.php
│  │        │        ├─ HtmlColornameDecoder.php
│  │        │        ├─ StringColorDecoder.php
│  │        │        └─ TransparentColorDecoder.php
│  │        ├─ Config.php
│  │        ├─ Decoders
│  │        │  ├─ Base64ImageDecoder.php
│  │        │  ├─ BinaryImageDecoder.php
│  │        │  ├─ ColorObjectDecoder.php
│  │        │  ├─ DataUriImageDecoder.php
│  │        │  ├─ EncodedImageObjectDecoder.php
│  │        │  ├─ FilePathImageDecoder.php
│  │        │  ├─ FilePointerImageDecoder.php
│  │        │  ├─ ImageObjectDecoder.php
│  │        │  ├─ NativeObjectDecoder.php
│  │        │  └─ SplFileInfoImageDecoder.php
│  │        ├─ Drivers
│  │        │  ├─ AbstractDecoder.php
│  │        │  ├─ AbstractDriver.php
│  │        │  ├─ AbstractEncoder.php
│  │        │  ├─ AbstractFontProcessor.php
│  │        │  ├─ AbstractFrame.php
│  │        │  ├─ Gd
│  │        │  │  ├─ Analyzers
│  │        │  │  │  ├─ ColorspaceAnalyzer.php
│  │        │  │  │  ├─ HeightAnalyzer.php
│  │        │  │  │  ├─ PixelColorAnalyzer.php
│  │        │  │  │  ├─ PixelColorsAnalyzer.php
│  │        │  │  │  ├─ ResolutionAnalyzer.php
│  │        │  │  │  └─ WidthAnalyzer.php
│  │        │  │  ├─ Cloner.php
│  │        │  │  ├─ ColorProcessor.php
│  │        │  │  ├─ Core.php
│  │        │  │  ├─ Decoders
│  │        │  │  │  ├─ AbstractDecoder.php
│  │        │  │  │  ├─ Base64ImageDecoder.php
│  │        │  │  │  ├─ BinaryImageDecoder.php
│  │        │  │  │  ├─ DataUriImageDecoder.php
│  │        │  │  │  ├─ EncodedImageObjectDecoder.php
│  │        │  │  │  ├─ FilePathImageDecoder.php
│  │        │  │  │  ├─ FilePointerImageDecoder.php
│  │        │  │  │  ├─ NativeObjectDecoder.php
│  │        │  │  │  └─ SplFileInfoImageDecoder.php
│  │        │  │  ├─ Driver.php
│  │        │  │  ├─ Encoders
│  │        │  │  │  ├─ AvifEncoder.php
│  │        │  │  │  ├─ BmpEncoder.php
│  │        │  │  │  ├─ GifEncoder.php
│  │        │  │  │  ├─ JpegEncoder.php
│  │        │  │  │  ├─ PngEncoder.php
│  │        │  │  │  └─ WebpEncoder.php
│  │        │  │  ├─ FontProcessor.php
│  │        │  │  ├─ Frame.php
│  │        │  │  └─ Modifiers
│  │        │  │     ├─ AlignRotationModifier.php
│  │        │  │     ├─ BlendTransparencyModifier.php
│  │        │  │     ├─ BlurModifier.php
│  │        │  │     ├─ BrightnessModifier.php
│  │        │  │     ├─ ColorizeModifier.php
│  │        │  │     ├─ ColorspaceModifier.php
│  │        │  │     ├─ ContainModifier.php
│  │        │  │     ├─ ContrastModifier.php
│  │        │  │     ├─ CoverDownModifier.php
│  │        │  │     ├─ CoverModifier.php
│  │        │  │     ├─ CropModifier.php
│  │        │  │     ├─ DrawBezierModifier.php
│  │        │  │     ├─ DrawEllipseModifier.php
│  │        │  │     ├─ DrawLineModifier.php
│  │        │  │     ├─ DrawPixelModifier.php
│  │        │  │     ├─ DrawPolygonModifier.php
│  │        │  │     ├─ DrawRectangleModifier.php
│  │        │  │     ├─ FillModifier.php
│  │        │  │     ├─ FlipModifier.php
│  │        │  │     ├─ FlopModifier.php
│  │        │  │     ├─ GammaModifier.php
│  │        │  │     ├─ GreyscaleModifier.php
│  │        │  │     ├─ InvertModifier.php
│  │        │  │     ├─ PadModifier.php
│  │        │  │     ├─ PixelateModifier.php
│  │        │  │     ├─ PlaceModifier.php
│  │        │  │     ├─ ProfileModifier.php
│  │        │  │     ├─ ProfileRemovalModifier.php
│  │        │  │     ├─ QuantizeColorsModifier.php
│  │        │  │     ├─ RemoveAnimationModifier.php
│  │        │  │     ├─ ResizeCanvasModifier.php
│  │        │  │     ├─ ResizeCanvasRelativeModifier.php
│  │        │  │     ├─ ResizeDownModifier.php
│  │        │  │     ├─ ResizeModifier.php
│  │        │  │     ├─ ResolutionModifier.php
│  │        │  │     ├─ RotateModifier.php
│  │        │  │     ├─ ScaleDownModifier.php
│  │        │  │     ├─ ScaleModifier.php
│  │        │  │     ├─ SharpenModifier.php
│  │        │  │     ├─ SliceAnimationModifier.php
│  │        │  │     ├─ TextModifier.php
│  │        │  │     └─ TrimModifier.php
│  │        │  ├─ Imagick
│  │        │  │  ├─ Analyzers
│  │        │  │  │  ├─ ColorspaceAnalyzer.php
│  │        │  │  │  ├─ HeightAnalyzer.php
│  │        │  │  │  ├─ PixelColorAnalyzer.php
│  │        │  │  │  ├─ PixelColorsAnalyzer.php
│  │        │  │  │  ├─ ProfileAnalyzer.php
│  │        │  │  │  ├─ ResolutionAnalyzer.php
│  │        │  │  │  └─ WidthAnalyzer.php
│  │        │  │  ├─ ColorProcessor.php
│  │        │  │  ├─ Core.php
│  │        │  │  ├─ Decoders
│  │        │  │  │  ├─ Base64ImageDecoder.php
│  │        │  │  │  ├─ BinaryImageDecoder.php
│  │        │  │  │  ├─ DataUriImageDecoder.php
│  │        │  │  │  ├─ EncodedImageObjectDecoder.php
│  │        │  │  │  ├─ FilePathImageDecoder.php
│  │        │  │  │  ├─ FilePointerImageDecoder.php
│  │        │  │  │  ├─ NativeObjectDecoder.php
│  │        │  │  │  └─ SplFileInfoImageDecoder.php
│  │        │  │  ├─ Driver.php
│  │        │  │  ├─ Encoders
│  │        │  │  │  ├─ AvifEncoder.php
│  │        │  │  │  ├─ BmpEncoder.php
│  │        │  │  │  ├─ GifEncoder.php
│  │        │  │  │  ├─ HeicEncoder.php
│  │        │  │  │  ├─ Jpeg2000Encoder.php
│  │        │  │  │  ├─ JpegEncoder.php
│  │        │  │  │  ├─ PngEncoder.php
│  │        │  │  │  ├─ TiffEncoder.php
│  │        │  │  │  └─ WebpEncoder.php
│  │        │  │  ├─ FontProcessor.php
│  │        │  │  ├─ Frame.php
│  │        │  │  └─ Modifiers
│  │        │  │     ├─ AlignRotationModifier.php
│  │        │  │     ├─ BlendTransparencyModifier.php
│  │        │  │     ├─ BlurModifier.php
│  │        │  │     ├─ BrightnessModifier.php
│  │        │  │     ├─ ColorizeModifier.php
│  │        │  │     ├─ ColorspaceModifier.php
│  │        │  │     ├─ ContainModifier.php
│  │        │  │     ├─ ContrastModifier.php
│  │        │  │     ├─ CoverDownModifier.php
│  │        │  │     ├─ CoverModifier.php
│  │        │  │     ├─ CropModifier.php
│  │        │  │     ├─ DrawBezierModifier.php
│  │        │  │     ├─ DrawEllipseModifier.php
│  │        │  │     ├─ DrawLineModifier.php
│  │        │  │     ├─ DrawPixelModifier.php
│  │        │  │     ├─ DrawPolygonModifier.php
│  │        │  │     ├─ DrawRectangleModifier.php
│  │        │  │     ├─ FillModifier.php
│  │        │  │     ├─ FlipModifier.php
│  │        │  │     ├─ FlopModifier.php
│  │        │  │     ├─ GammaModifier.php
│  │        │  │     ├─ GreyscaleModifier.php
│  │        │  │     ├─ InvertModifier.php
│  │        │  │     ├─ PadModifier.php
│  │        │  │     ├─ PixelateModifier.php
│  │        │  │     ├─ PlaceModifier.php
│  │        │  │     ├─ ProfileModifier.php
│  │        │  │     ├─ ProfileRemovalModifier.php
│  │        │  │     ├─ QuantizeColorsModifier.php
│  │        │  │     ├─ RemoveAnimationModifier.php
│  │        │  │     ├─ ResizeCanvasModifier.php
│  │        │  │     ├─ ResizeCanvasRelativeModifier.php
│  │        │  │     ├─ ResizeDownModifier.php
│  │        │  │     ├─ ResizeModifier.php
│  │        │  │     ├─ ResolutionModifier.php
│  │        │  │     ├─ RotateModifier.php
│  │        │  │     ├─ ScaleDownModifier.php
│  │        │  │     ├─ ScaleModifier.php
│  │        │  │     ├─ SharpenModifier.php
│  │        │  │     ├─ SliceAnimationModifier.php
│  │        │  │     ├─ StripMetaModifier.php
│  │        │  │     ├─ TextModifier.php
│  │        │  │     └─ TrimModifier.php
│  │        │  ├─ Specializable.php
│  │        │  ├─ SpecializableAnalyzer.php
│  │        │  ├─ SpecializableDecoder.php
│  │        │  ├─ SpecializableEncoder.php
│  │        │  └─ SpecializableModifier.php
│  │        ├─ EncodedImage.php
│  │        ├─ Encoders
│  │        │  ├─ AutoEncoder.php
│  │        │  ├─ AvifEncoder.php
│  │        │  ├─ BmpEncoder.php
│  │        │  ├─ FileExtensionEncoder.php
│  │        │  ├─ FilePathEncoder.php
│  │        │  ├─ GifEncoder.php
│  │        │  ├─ HeicEncoder.php
│  │        │  ├─ Jpeg2000Encoder.php
│  │        │  ├─ JpegEncoder.php
│  │        │  ├─ MediaTypeEncoder.php
│  │        │  ├─ PngEncoder.php
│  │        │  ├─ TiffEncoder.php
│  │        │  └─ WebpEncoder.php
│  │        ├─ Exceptions
│  │        │  ├─ AnimationException.php
│  │        │  ├─ ColorException.php
│  │        │  ├─ DecoderException.php
│  │        │  ├─ DriverException.php
│  │        │  ├─ EncoderException.php
│  │        │  ├─ FontException.php
│  │        │  ├─ GeometryException.php
│  │        │  ├─ InputException.php
│  │        │  ├─ NotSupportedException.php
│  │        │  ├─ NotWritableException.php
│  │        │  └─ RuntimeException.php
│  │        ├─ File.php
│  │        ├─ FileExtension.php
│  │        ├─ Format.php
│  │        ├─ Geometry
│  │        │  ├─ Bezier.php
│  │        │  ├─ Circle.php
│  │        │  ├─ Ellipse.php
│  │        │  ├─ Factories
│  │        │  │  ├─ BezierFactory.php
│  │        │  │  ├─ CircleFactory.php
│  │        │  │  ├─ Drawable.php
│  │        │  │  ├─ EllipseFactory.php
│  │        │  │  ├─ LineFactory.php
│  │        │  │  ├─ PolygonFactory.php
│  │        │  │  └─ RectangleFactory.php
│  │        │  ├─ Line.php
│  │        │  ├─ Pixel.php
│  │        │  ├─ Point.php
│  │        │  ├─ Polygon.php
│  │        │  ├─ Rectangle.php
│  │        │  ├─ Tools
│  │        │  │  └─ RectangleResizer.php
│  │        │  └─ Traits
│  │        │     ├─ HasBackgroundColor.php
│  │        │     └─ HasBorder.php
│  │        ├─ Image.php
│  │        ├─ ImageManager.php
│  │        ├─ InputHandler.php
│  │        ├─ Interfaces
│  │        │  ├─ AnalyzerInterface.php
│  │        │  ├─ CollectionInterface.php
│  │        │  ├─ ColorChannelInterface.php
│  │        │  ├─ ColorInterface.php
│  │        │  ├─ ColorProcessorInterface.php
│  │        │  ├─ ColorspaceInterface.php
│  │        │  ├─ CoreInterface.php
│  │        │  ├─ DecoderInterface.php
│  │        │  ├─ DrawableFactoryInterface.php
│  │        │  ├─ DrawableInterface.php
│  │        │  ├─ DriverInterface.php
│  │        │  ├─ EncodedImageInterface.php
│  │        │  ├─ EncoderInterface.php
│  │        │  ├─ FileInterface.php
│  │        │  ├─ FontInterface.php
│  │        │  ├─ FontProcessorInterface.php
│  │        │  ├─ FrameInterface.php
│  │        │  ├─ ImageInterface.php
│  │        │  ├─ ImageManagerInterface.php
│  │        │  ├─ InputHandlerInterface.php
│  │        │  ├─ ModifierInterface.php
│  │        │  ├─ PointInterface.php
│  │        │  ├─ ProfileInterface.php
│  │        │  ├─ ResolutionInterface.php
│  │        │  ├─ SizeInterface.php
│  │        │  ├─ SpecializableInterface.php
│  │        │  └─ SpecializedInterface.php
│  │        ├─ MediaType.php
│  │        ├─ ModifierStack.php
│  │        ├─ Modifiers
│  │        │  ├─ AbstractDrawModifier.php
│  │        │  ├─ AlignRotationModifier.php
│  │        │  ├─ BlendTransparencyModifier.php
│  │        │  ├─ BlurModifier.php
│  │        │  ├─ BrightnessModifier.php
│  │        │  ├─ ColorizeModifier.php
│  │        │  ├─ ColorspaceModifier.php
│  │        │  ├─ ContainModifier.php
│  │        │  ├─ ContrastModifier.php
│  │        │  ├─ CoverDownModifier.php
│  │        │  ├─ CoverModifier.php
│  │        │  ├─ CropModifier.php
│  │        │  ├─ DrawBezierModifier.php
│  │        │  ├─ DrawEllipseModifier.php
│  │        │  ├─ DrawLineModifier.php
│  │        │  ├─ DrawPixelModifier.php
│  │        │  ├─ DrawPolygonModifier.php
│  │        │  ├─ DrawRectangleModifier.php
│  │        │  ├─ FillModifier.php
│  │        │  ├─ FlipModifier.php
│  │        │  ├─ FlopModifier.php
│  │        │  ├─ GammaModifier.php
│  │        │  ├─ GreyscaleModifier.php
│  │        │  ├─ InvertModifier.php
│  │        │  ├─ PadModifier.php
│  │        │  ├─ PixelateModifier.php
│  │        │  ├─ PlaceModifier.php
│  │        │  ├─ ProfileModifier.php
│  │        │  ├─ ProfileRemovalModifier.php
│  │        │  ├─ QuantizeColorsModifier.php
│  │        │  ├─ RemoveAnimationModifier.php
│  │        │  ├─ ResizeCanvasModifier.php
│  │        │  ├─ ResizeCanvasRelativeModifier.php
│  │        │  ├─ ResizeDownModifier.php
│  │        │  ├─ ResizeModifier.php
│  │        │  ├─ ResolutionModifier.php
│  │        │  ├─ RotateModifier.php
│  │        │  ├─ ScaleDownModifier.php
│  │        │  ├─ ScaleModifier.php
│  │        │  ├─ SharpenModifier.php
│  │        │  ├─ SliceAnimationModifier.php
│  │        │  ├─ TextModifier.php
│  │        │  └─ TrimModifier.php
│  │        ├─ Origin.php
│  │        ├─ Resolution.php
│  │        ├─ Traits
│  │        │  ├─ CanBeDriverSpecialized.php
│  │        │  └─ CanBuildFilePointer.php
│  │        └─ Typography
│  │           ├─ Font.php
│  │           ├─ FontFactory.php
│  │           ├─ Line.php
│  │           └─ TextBlock.php
│  ├─ jean85
│  │  └─ pretty-package-versions
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     ├─ rector.php
│  │     └─ src
│  │        ├─ Exception
│  │        │  ├─ ProvidedPackageException.php
│  │        │  ├─ ReplacedPackageException.php
│  │        │  └─ VersionMissingExceptionInterface.php
│  │        ├─ PrettyVersions.php
│  │        └─ Version.php
│  ├─ joshbrw
│  │  └─ laravel-module-installer
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ composer.lock
│  │     ├─ phpunit.xml
│  │     ├─ src
│  │     │  ├─ Exceptions
│  │     │  │  └─ LaravelModuleInstallerException.php
│  │     │  ├─ LaravelModuleInstaller.php
│  │     │  └─ LaravelModuleInstallerPlugin.php
│  │     └─ tests
│  │        └─ LaravelModuleInstallerTest.php
│  ├─ laravel
│  │  ├─ breeze
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ src
│  │  │  │  ├─ BreezeServiceProvider.php
│  │  │  │  └─ Console
│  │  │  │     ├─ InstallCommand.php
│  │  │  │     ├─ InstallsApiStack.php
│  │  │  │     ├─ InstallsBladeStack.php
│  │  │  │     ├─ InstallsInertiaStacks.php
│  │  │  │     └─ InstallsLivewireStack.php
│  │  │  └─ stubs
│  │  │     ├─ api
│  │  │     │  ├─ app
│  │  │     │  │  ├─ Http
│  │  │     │  │  │  ├─ Controllers
│  │  │     │  │  │  │  └─ Auth
│  │  │     │  │  │  │     ├─ AuthenticatedSessionController.php
│  │  │     │  │  │  │     ├─ EmailVerificationNotificationController.php
│  │  │     │  │  │  │     ├─ NewPasswordController.php
│  │  │     │  │  │  │     ├─ PasswordResetLinkController.php
│  │  │     │  │  │  │     ├─ RegisteredUserController.php
│  │  │     │  │  │  │     └─ VerifyEmailController.php
│  │  │     │  │  │  ├─ Middleware
│  │  │     │  │  │  │  └─ EnsureEmailIsVerified.php
│  │  │     │  │  │  └─ Requests
│  │  │     │  │  │     └─ Auth
│  │  │     │  │  │        └─ LoginRequest.php
│  │  │     │  │  └─ Providers
│  │  │     │  │     └─ AppServiceProvider.php
│  │  │     │  ├─ config
│  │  │     │  │  ├─ cors.php
│  │  │     │  │  └─ sanctum.php
│  │  │     │  ├─ pest-tests
│  │  │     │  │  ├─ Feature
│  │  │     │  │  │  ├─ Auth
│  │  │     │  │  │  │  ├─ AuthenticationTest.php
│  │  │     │  │  │  │  ├─ EmailVerificationTest.php
│  │  │     │  │  │  │  ├─ PasswordResetTest.php
│  │  │     │  │  │  │  └─ RegistrationTest.php
│  │  │     │  │  │  └─ ExampleTest.php
│  │  │     │  │  ├─ Pest.php
│  │  │     │  │  └─ Unit
│  │  │     │  │     └─ ExampleTest.php
│  │  │     │  ├─ routes
│  │  │     │  │  ├─ api.php
│  │  │     │  │  ├─ auth.php
│  │  │     │  │  └─ web.php
│  │  │     │  └─ tests
│  │  │     │     └─ Feature
│  │  │     │        └─ Auth
│  │  │     │           ├─ AuthenticationTest.php
│  │  │     │           ├─ EmailVerificationTest.php
│  │  │     │           ├─ PasswordResetTest.php
│  │  │     │           └─ RegistrationTest.php
│  │  │     ├─ default
│  │  │     │  ├─ app
│  │  │     │  │  ├─ Http
│  │  │     │  │  │  ├─ Controllers
│  │  │     │  │  │  │  ├─ Auth
│  │  │     │  │  │  │  │  ├─ AuthenticatedSessionController.php
│  │  │     │  │  │  │  │  ├─ ConfirmablePasswordController.php
│  │  │     │  │  │  │  │  ├─ EmailVerificationNotificationController.php
│  │  │     │  │  │  │  │  ├─ EmailVerificationPromptController.php
│  │  │     │  │  │  │  │  ├─ NewPasswordController.php
│  │  │     │  │  │  │  │  ├─ PasswordController.php
│  │  │     │  │  │  │  │  ├─ PasswordResetLinkController.php
│  │  │     │  │  │  │  │  ├─ RegisteredUserController.php
│  │  │     │  │  │  │  │  └─ VerifyEmailController.php
│  │  │     │  │  │  │  └─ ProfileController.php
│  │  │     │  │  │  └─ Requests
│  │  │     │  │  │     ├─ Auth
│  │  │     │  │  │     │  └─ LoginRequest.php
│  │  │     │  │  │     └─ ProfileUpdateRequest.php
│  │  │     │  │  └─ View
│  │  │     │  │     └─ Components
│  │  │     │  │        ├─ AppLayout.php
│  │  │     │  │        └─ GuestLayout.php
│  │  │     │  ├─ pest-tests
│  │  │     │  │  ├─ Feature
│  │  │     │  │  │  ├─ Auth
│  │  │     │  │  │  │  ├─ AuthenticationTest.php
│  │  │     │  │  │  │  ├─ EmailVerificationTest.php
│  │  │     │  │  │  │  ├─ PasswordConfirmationTest.php
│  │  │     │  │  │  │  ├─ PasswordResetTest.php
│  │  │     │  │  │  │  ├─ PasswordUpdateTest.php
│  │  │     │  │  │  │  └─ RegistrationTest.php
│  │  │     │  │  │  ├─ ExampleTest.php
│  │  │     │  │  │  └─ ProfileTest.php
│  │  │     │  │  ├─ Pest.php
│  │  │     │  │  └─ Unit
│  │  │     │  │     └─ ExampleTest.php
│  │  │     │  ├─ postcss.config.js
│  │  │     │  ├─ resources
│  │  │     │  │  ├─ css
│  │  │     │  │  │  └─ app.css
│  │  │     │  │  ├─ js
│  │  │     │  │  │  └─ app.js
│  │  │     │  │  └─ views
│  │  │     │  │     ├─ auth
│  │  │     │  │     │  ├─ confirm-password.blade.php
│  │  │     │  │     │  ├─ forgot-password.blade.php
│  │  │     │  │     │  ├─ login.blade.php
│  │  │     │  │     │  ├─ register.blade.php
│  │  │     │  │     │  ├─ reset-password.blade.php
│  │  │     │  │     │  └─ verify-email.blade.php
│  │  │     │  │     ├─ components
│  │  │     │  │     │  ├─ application-logo.blade.php
│  │  │     │  │     │  ├─ auth-session-status.blade.php
│  │  │     │  │     │  ├─ danger-button.blade.php
│  │  │     │  │     │  ├─ dropdown-link.blade.php
│  │  │     │  │     │  ├─ dropdown.blade.php
│  │  │     │  │     │  ├─ input-error.blade.php
│  │  │     │  │     │  ├─ input-label.blade.php
│  │  │     │  │     │  ├─ modal.blade.php
│  │  │     │  │     │  ├─ nav-link.blade.php
│  │  │     │  │     │  ├─ primary-button.blade.php
│  │  │     │  │     │  ├─ responsive-nav-link.blade.php
│  │  │     │  │     │  ├─ secondary-button.blade.php
│  │  │     │  │     │  └─ text-input.blade.php
│  │  │     │  │     ├─ dashboard.blade.php
│  │  │     │  │     ├─ layouts
│  │  │     │  │     │  ├─ app.blade.php
│  │  │     │  │     │  ├─ guest.blade.php
│  │  │     │  │     │  └─ navigation.blade.php
│  │  │     │  │     └─ profile
│  │  │     │  │        ├─ edit.blade.php
│  │  │     │  │        └─ partials
│  │  │     │  │           ├─ delete-user-form.blade.php
│  │  │     │  │           ├─ update-password-form.blade.php
│  │  │     │  │           └─ update-profile-information-form.blade.php
│  │  │     │  ├─ routes
│  │  │     │  │  ├─ auth.php
│  │  │     │  │  └─ web.php
│  │  │     │  ├─ tailwind.config.js
│  │  │     │  ├─ tests
│  │  │     │  │  └─ Feature
│  │  │     │  │     ├─ Auth
│  │  │     │  │     │  ├─ AuthenticationTest.php
│  │  │     │  │     │  ├─ EmailVerificationTest.php
│  │  │     │  │     │  ├─ PasswordConfirmationTest.php
│  │  │     │  │     │  ├─ PasswordResetTest.php
│  │  │     │  │     │  ├─ PasswordUpdateTest.php
│  │  │     │  │     │  └─ RegistrationTest.php
│  │  │     │  │     └─ ProfileTest.php
│  │  │     │  └─ vite.config.js
│  │  │     ├─ inertia-common
│  │  │     │  ├─ .prettierrc
│  │  │     │  ├─ app
│  │  │     │  │  ├─ Http
│  │  │     │  │  │  ├─ Controllers
│  │  │     │  │  │  │  ├─ Auth
│  │  │     │  │  │  │  │  ├─ AuthenticatedSessionController.php
│  │  │     │  │  │  │  │  ├─ ConfirmablePasswordController.php
│  │  │     │  │  │  │  │  ├─ EmailVerificationNotificationController.php
│  │  │     │  │  │  │  │  ├─ EmailVerificationPromptController.php
│  │  │     │  │  │  │  │  ├─ NewPasswordController.php
│  │  │     │  │  │  │  │  ├─ PasswordController.php
│  │  │     │  │  │  │  │  ├─ PasswordResetLinkController.php
│  │  │     │  │  │  │  │  ├─ RegisteredUserController.php
│  │  │     │  │  │  │  │  └─ VerifyEmailController.php
│  │  │     │  │  │  │  └─ ProfileController.php
│  │  │     │  │  │  └─ Middleware
│  │  │     │  │  │     └─ HandleInertiaRequests.php
│  │  │     │  │  └─ Providers
│  │  │     │  │     └─ AppServiceProvider.php
│  │  │     │  ├─ jsconfig.json
│  │  │     │  ├─ pest-tests
│  │  │     │  │  └─ Feature
│  │  │     │  │     ├─ Auth
│  │  │     │  │     │  └─ PasswordUpdateTest.php
│  │  │     │  │     └─ ProfileTest.php
│  │  │     │  ├─ routes
│  │  │     │  │  ├─ auth.php
│  │  │     │  │  └─ web.php
│  │  │     │  ├─ tailwind.config.js
│  │  │     │  └─ tests
│  │  │     │     └─ Feature
│  │  │     │        ├─ Auth
│  │  │     │        │  └─ PasswordUpdateTest.php
│  │  │     │        └─ ProfileTest.php
│  │  │     ├─ inertia-react
│  │  │     │  ├─ .eslintrc.json
│  │  │     │  ├─ resources
│  │  │     │  │  ├─ js
│  │  │     │  │  │  ├─ Components
│  │  │     │  │  │  │  ├─ ApplicationLogo.jsx
│  │  │     │  │  │  │  ├─ Checkbox.jsx
│  │  │     │  │  │  │  ├─ DangerButton.jsx
│  │  │     │  │  │  │  ├─ Dropdown.jsx
│  │  │     │  │  │  │  ├─ InputError.jsx
│  │  │     │  │  │  │  ├─ InputLabel.jsx
│  │  │     │  │  │  │  ├─ Modal.jsx
│  │  │     │  │  │  │  ├─ NavLink.jsx
│  │  │     │  │  │  │  ├─ PrimaryButton.jsx
│  │  │     │  │  │  │  ├─ ResponsiveNavLink.jsx
│  │  │     │  │  │  │  ├─ SecondaryButton.jsx
│  │  │     │  │  │  │  └─ TextInput.jsx
│  │  │     │  │  │  ├─ Layouts
│  │  │     │  │  │  │  ├─ AuthenticatedLayout.jsx
│  │  │     │  │  │  │  └─ GuestLayout.jsx
│  │  │     │  │  │  ├─ Pages
│  │  │     │  │  │  │  ├─ Auth
│  │  │     │  │  │  │  │  ├─ ConfirmPassword.jsx
│  │  │     │  │  │  │  │  ├─ ForgotPassword.jsx
│  │  │     │  │  │  │  │  ├─ Login.jsx
│  │  │     │  │  │  │  │  ├─ Register.jsx
│  │  │     │  │  │  │  │  ├─ ResetPassword.jsx
│  │  │     │  │  │  │  │  └─ VerifyEmail.jsx
│  │  │     │  │  │  │  ├─ Dashboard.jsx
│  │  │     │  │  │  │  ├─ Profile
│  │  │     │  │  │  │  │  ├─ Edit.jsx
│  │  │     │  │  │  │  │  └─ Partials
│  │  │     │  │  │  │  │     ├─ DeleteUserForm.jsx
│  │  │     │  │  │  │  │     ├─ UpdatePasswordForm.jsx
│  │  │     │  │  │  │  │     └─ UpdateProfileInformationForm.jsx
│  │  │     │  │  │  │  └─ Welcome.jsx
│  │  │     │  │  │  ├─ app.jsx
│  │  │     │  │  │  └─ ssr.jsx
│  │  │     │  │  └─ views
│  │  │     │  │     └─ app.blade.php
│  │  │     │  └─ vite.config.js
│  │  │     ├─ inertia-react-ts
│  │  │     │  ├─ .eslintrc.json
│  │  │     │  ├─ resources
│  │  │     │  │  └─ js
│  │  │     │  │     ├─ Components
│  │  │     │  │     │  ├─ ApplicationLogo.tsx
│  │  │     │  │     │  ├─ Checkbox.tsx
│  │  │     │  │     │  ├─ DangerButton.tsx
│  │  │     │  │     │  ├─ Dropdown.tsx
│  │  │     │  │     │  ├─ InputError.tsx
│  │  │     │  │     │  ├─ InputLabel.tsx
│  │  │     │  │     │  ├─ Modal.tsx
│  │  │     │  │     │  ├─ NavLink.tsx
│  │  │     │  │     │  ├─ PrimaryButton.tsx
│  │  │     │  │     │  ├─ ResponsiveNavLink.tsx
│  │  │     │  │     │  ├─ SecondaryButton.tsx
│  │  │     │  │     │  └─ TextInput.tsx
│  │  │     │  │     ├─ Layouts
│  │  │     │  │     │  ├─ AuthenticatedLayout.tsx
│  │  │     │  │     │  └─ GuestLayout.tsx
│  │  │     │  │     ├─ Pages
│  │  │     │  │     │  ├─ Auth
│  │  │     │  │     │  │  ├─ ConfirmPassword.tsx
│  │  │     │  │     │  │  ├─ ForgotPassword.tsx
│  │  │     │  │     │  │  ├─ Login.tsx
│  │  │     │  │     │  │  ├─ Register.tsx
│  │  │     │  │     │  │  ├─ ResetPassword.tsx
│  │  │     │  │     │  │  └─ VerifyEmail.tsx
│  │  │     │  │     │  ├─ Dashboard.tsx
│  │  │     │  │     │  ├─ Profile
│  │  │     │  │     │  │  ├─ Edit.tsx
│  │  │     │  │     │  │  └─ Partials
│  │  │     │  │     │  │     ├─ DeleteUserForm.tsx
│  │  │     │  │     │  │     ├─ UpdatePasswordForm.tsx
│  │  │     │  │     │  │     └─ UpdateProfileInformationForm.tsx
│  │  │     │  │     │  └─ Welcome.tsx
│  │  │     │  │     ├─ app.tsx
│  │  │     │  │     ├─ ssr.tsx
│  │  │     │  │     └─ types
│  │  │     │  │        ├─ global.d.ts
│  │  │     │  │        ├─ index.d.ts
│  │  │     │  │        └─ vite-env.d.ts
│  │  │     │  └─ tsconfig.json
│  │  │     ├─ inertia-vue
│  │  │     │  ├─ .eslintrc.cjs
│  │  │     │  ├─ resources
│  │  │     │  │  ├─ js
│  │  │     │  │  │  ├─ Components
│  │  │     │  │  │  │  ├─ ApplicationLogo.vue
│  │  │     │  │  │  │  ├─ Checkbox.vue
│  │  │     │  │  │  │  ├─ DangerButton.vue
│  │  │     │  │  │  │  ├─ Dropdown.vue
│  │  │     │  │  │  │  ├─ DropdownLink.vue
│  │  │     │  │  │  │  ├─ InputError.vue
│  │  │     │  │  │  │  ├─ InputLabel.vue
│  │  │     │  │  │  │  ├─ Modal.vue
│  │  │     │  │  │  │  ├─ NavLink.vue
│  │  │     │  │  │  │  ├─ PrimaryButton.vue
│  │  │     │  │  │  │  ├─ ResponsiveNavLink.vue
│  │  │     │  │  │  │  ├─ SecondaryButton.vue
│  │  │     │  │  │  │  └─ TextInput.vue
│  │  │     │  │  │  ├─ Layouts
│  │  │     │  │  │  │  ├─ AuthenticatedLayout.vue
│  │  │     │  │  │  │  └─ GuestLayout.vue
│  │  │     │  │  │  ├─ Pages
│  │  │     │  │  │  │  ├─ Auth
│  │  │     │  │  │  │  │  ├─ ConfirmPassword.vue
│  │  │     │  │  │  │  │  ├─ ForgotPassword.vue
│  │  │     │  │  │  │  │  ├─ Login.vue
│  │  │     │  │  │  │  │  ├─ Register.vue
│  │  │     │  │  │  │  │  ├─ ResetPassword.vue
│  │  │     │  │  │  │  │  └─ VerifyEmail.vue
│  │  │     │  │  │  │  ├─ Dashboard.vue
│  │  │     │  │  │  │  ├─ Profile
│  │  │     │  │  │  │  │  ├─ Edit.vue
│  │  │     │  │  │  │  │  └─ Partials
│  │  │     │  │  │  │  │     ├─ DeleteUserForm.vue
│  │  │     │  │  │  │  │     ├─ UpdatePasswordForm.vue
│  │  │     │  │  │  │  │     └─ UpdateProfileInformationForm.vue
│  │  │     │  │  │  │  └─ Welcome.vue
│  │  │     │  │  │  ├─ app.js
│  │  │     │  │  │  └─ ssr.js
│  │  │     │  │  └─ views
│  │  │     │  │     └─ app.blade.php
│  │  │     │  └─ vite.config.js
│  │  │     ├─ inertia-vue-ts
│  │  │     │  ├─ .eslintrc.cjs
│  │  │     │  ├─ resources
│  │  │     │  │  └─ js
│  │  │     │  │     ├─ Components
│  │  │     │  │     │  ├─ ApplicationLogo.vue
│  │  │     │  │     │  ├─ Checkbox.vue
│  │  │     │  │     │  ├─ DangerButton.vue
│  │  │     │  │     │  ├─ Dropdown.vue
│  │  │     │  │     │  ├─ DropdownLink.vue
│  │  │     │  │     │  ├─ InputError.vue
│  │  │     │  │     │  ├─ InputLabel.vue
│  │  │     │  │     │  ├─ Modal.vue
│  │  │     │  │     │  ├─ NavLink.vue
│  │  │     │  │     │  ├─ PrimaryButton.vue
│  │  │     │  │     │  ├─ ResponsiveNavLink.vue
│  │  │     │  │     │  ├─ SecondaryButton.vue
│  │  │     │  │     │  └─ TextInput.vue
│  │  │     │  │     ├─ Layouts
│  │  │     │  │     │  ├─ AuthenticatedLayout.vue
│  │  │     │  │     │  └─ GuestLayout.vue
│  │  │     │  │     ├─ Pages
│  │  │     │  │     │  ├─ Auth
│  │  │     │  │     │  │  ├─ ConfirmPassword.vue
│  │  │     │  │     │  │  ├─ ForgotPassword.vue
│  │  │     │  │     │  │  ├─ Login.vue
│  │  │     │  │     │  │  ├─ Register.vue
│  │  │     │  │     │  │  ├─ ResetPassword.vue
│  │  │     │  │     │  │  └─ VerifyEmail.vue
│  │  │     │  │     │  ├─ Dashboard.vue
│  │  │     │  │     │  ├─ Profile
│  │  │     │  │     │  │  ├─ Edit.vue
│  │  │     │  │     │  │  └─ Partials
│  │  │     │  │     │  │     ├─ DeleteUserForm.vue
│  │  │     │  │     │  │     ├─ UpdatePasswordForm.vue
│  │  │     │  │     │  │     └─ UpdateProfileInformationForm.vue
│  │  │     │  │     │  └─ Welcome.vue
│  │  │     │  │     ├─ app.ts
│  │  │     │  │     ├─ ssr.ts
│  │  │     │  │     └─ types
│  │  │     │  │        ├─ global.d.ts
│  │  │     │  │        ├─ index.d.ts
│  │  │     │  │        └─ vite-env.d.ts
│  │  │     │  └─ tsconfig.json
│  │  │     ├─ livewire
│  │  │     │  └─ resources
│  │  │     │     └─ views
│  │  │     │        └─ livewire
│  │  │     │           ├─ layout
│  │  │     │           │  └─ navigation.blade.php
│  │  │     │           ├─ pages
│  │  │     │           │  └─ auth
│  │  │     │           │     ├─ confirm-password.blade.php
│  │  │     │           │     ├─ forgot-password.blade.php
│  │  │     │           │     ├─ login.blade.php
│  │  │     │           │     ├─ register.blade.php
│  │  │     │           │     ├─ reset-password.blade.php
│  │  │     │           │     └─ verify-email.blade.php
│  │  │     │           ├─ profile
│  │  │     │           │  ├─ delete-user-form.blade.php
│  │  │     │           │  ├─ update-password-form.blade.php
│  │  │     │           │  └─ update-profile-information-form.blade.php
│  │  │     │           └─ welcome
│  │  │     │              └─ navigation.blade.php
│  │  │     ├─ livewire-common
│  │  │     │  ├─ app
│  │  │     │  │  └─ Livewire
│  │  │     │  │     ├─ Actions
│  │  │     │  │     │  └─ Logout.php
│  │  │     │  │     └─ Forms
│  │  │     │  │        └─ LoginForm.php
│  │  │     │  ├─ pest-tests
│  │  │     │  │  ├─ Feature
│  │  │     │  │  │  ├─ Auth
│  │  │     │  │  │  │  ├─ AuthenticationTest.php
│  │  │     │  │  │  │  ├─ EmailVerificationTest.php
│  │  │     │  │  │  │  ├─ PasswordConfirmationTest.php
│  │  │     │  │  │  │  ├─ PasswordResetTest.php
│  │  │     │  │  │  │  ├─ PasswordUpdateTest.php
│  │  │     │  │  │  │  └─ RegistrationTest.php
│  │  │     │  │  │  ├─ ExampleTest.php
│  │  │     │  │  │  └─ ProfileTest.php
│  │  │     │  │  ├─ Pest.php
│  │  │     │  │  └─ Unit
│  │  │     │  │     └─ ExampleTest.php
│  │  │     │  ├─ resources
│  │  │     │  │  └─ views
│  │  │     │  │     ├─ components
│  │  │     │  │     │  └─ action-message.blade.php
│  │  │     │  │     ├─ dashboard.blade.php
│  │  │     │  │     ├─ layouts
│  │  │     │  │     │  ├─ app.blade.php
│  │  │     │  │     │  └─ guest.blade.php
│  │  │     │  │     ├─ profile.blade.php
│  │  │     │  │     └─ welcome.blade.php
│  │  │     │  ├─ routes
│  │  │     │  │  ├─ auth.php
│  │  │     │  │  └─ web.php
│  │  │     │  └─ tests
│  │  │     │     └─ Feature
│  │  │     │        ├─ Auth
│  │  │     │        │  ├─ AuthenticationTest.php
│  │  │     │        │  ├─ EmailVerificationTest.php
│  │  │     │        │  ├─ PasswordConfirmationTest.php
│  │  │     │        │  ├─ PasswordResetTest.php
│  │  │     │        │  ├─ PasswordUpdateTest.php
│  │  │     │        │  └─ RegistrationTest.php
│  │  │     │        └─ ProfileTest.php
│  │  │     └─ livewire-functional
│  │  │        └─ resources
│  │  │           └─ views
│  │  │              └─ livewire
│  │  │                 ├─ layout
│  │  │                 │  └─ navigation.blade.php
│  │  │                 ├─ pages
│  │  │                 │  └─ auth
│  │  │                 │     ├─ confirm-password.blade.php
│  │  │                 │     ├─ forgot-password.blade.php
│  │  │                 │     ├─ login.blade.php
│  │  │                 │     ├─ register.blade.php
│  │  │                 │     ├─ reset-password.blade.php
│  │  │                 │     └─ verify-email.blade.php
│  │  │                 ├─ profile
│  │  │                 │  ├─ delete-user-form.blade.php
│  │  │                 │  ├─ update-password-form.blade.php
│  │  │                 │  └─ update-profile-information-form.blade.php
│  │  │                 └─ welcome
│  │  │                    └─ navigation.blade.php
│  │  ├─ framework
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  ├─ app.php
│  │  │  │  ├─ auth.php
│  │  │  │  ├─ broadcasting.php
│  │  │  │  ├─ cache.php
│  │  │  │  ├─ concurrency.php
│  │  │  │  ├─ cors.php
│  │  │  │  ├─ database.php
│  │  │  │  ├─ filesystems.php
│  │  │  │  ├─ hashing.php
│  │  │  │  ├─ logging.php
│  │  │  │  ├─ mail.php
│  │  │  │  ├─ queue.php
│  │  │  │  ├─ services.php
│  │  │  │  ├─ session.php
│  │  │  │  └─ view.php
│  │  │  ├─ config-stubs
│  │  │  │  └─ app.php
│  │  │  ├─ pint.json
│  │  │  └─ src
│  │  │     └─ Illuminate
│  │  │        ├─ Auth
│  │  │        │  ├─ Access
│  │  │        │  │  ├─ AuthorizationException.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ GateEvaluated.php
│  │  │        │  │  ├─ Gate.php
│  │  │        │  │  ├─ HandlesAuthorization.php
│  │  │        │  │  └─ Response.php
│  │  │        │  ├─ AuthManager.php
│  │  │        │  ├─ AuthServiceProvider.php
│  │  │        │  ├─ Authenticatable.php
│  │  │        │  ├─ AuthenticationException.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ ClearResetsCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ make
│  │  │        │  │        └─ views
│  │  │        │  │           └─ layouts
│  │  │        │  │              └─ app.stub
│  │  │        │  ├─ CreatesUserProviders.php
│  │  │        │  ├─ DatabaseUserProvider.php
│  │  │        │  ├─ EloquentUserProvider.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ Attempting.php
│  │  │        │  │  ├─ Authenticated.php
│  │  │        │  │  ├─ CurrentDeviceLogout.php
│  │  │        │  │  ├─ Failed.php
│  │  │        │  │  ├─ Lockout.php
│  │  │        │  │  ├─ Login.php
│  │  │        │  │  ├─ Logout.php
│  │  │        │  │  ├─ OtherDeviceLogout.php
│  │  │        │  │  ├─ PasswordReset.php
│  │  │        │  │  ├─ PasswordResetLinkSent.php
│  │  │        │  │  ├─ Registered.php
│  │  │        │  │  ├─ Validated.php
│  │  │        │  │  └─ Verified.php
│  │  │        │  ├─ GenericUser.php
│  │  │        │  ├─ GuardHelpers.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Listeners
│  │  │        │  │  └─ SendEmailVerificationNotification.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ Authenticate.php
│  │  │        │  │  ├─ AuthenticateWithBasicAuth.php
│  │  │        │  │  ├─ Authorize.php
│  │  │        │  │  ├─ EnsureEmailIsVerified.php
│  │  │        │  │  ├─ RedirectIfAuthenticated.php
│  │  │        │  │  └─ RequirePassword.php
│  │  │        │  ├─ MustVerifyEmail.php
│  │  │        │  ├─ Notifications
│  │  │        │  │  ├─ ResetPassword.php
│  │  │        │  │  └─ VerifyEmail.php
│  │  │        │  ├─ Passwords
│  │  │        │  │  ├─ CacheTokenRepository.php
│  │  │        │  │  ├─ CanResetPassword.php
│  │  │        │  │  ├─ DatabaseTokenRepository.php
│  │  │        │  │  ├─ PasswordBroker.php
│  │  │        │  │  ├─ PasswordBrokerManager.php
│  │  │        │  │  ├─ PasswordResetServiceProvider.php
│  │  │        │  │  └─ TokenRepositoryInterface.php
│  │  │        │  ├─ Recaller.php
│  │  │        │  ├─ RequestGuard.php
│  │  │        │  ├─ SessionGuard.php
│  │  │        │  ├─ TokenGuard.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Broadcasting
│  │  │        │  ├─ AnonymousEvent.php
│  │  │        │  ├─ BroadcastController.php
│  │  │        │  ├─ BroadcastEvent.php
│  │  │        │  ├─ BroadcastException.php
│  │  │        │  ├─ BroadcastManager.php
│  │  │        │  ├─ BroadcastServiceProvider.php
│  │  │        │  ├─ Broadcasters
│  │  │        │  │  ├─ AblyBroadcaster.php
│  │  │        │  │  ├─ Broadcaster.php
│  │  │        │  │  ├─ LogBroadcaster.php
│  │  │        │  │  ├─ NullBroadcaster.php
│  │  │        │  │  ├─ PusherBroadcaster.php
│  │  │        │  │  ├─ RedisBroadcaster.php
│  │  │        │  │  └─ UsePusherChannelConventions.php
│  │  │        │  ├─ Channel.php
│  │  │        │  ├─ EncryptedPrivateChannel.php
│  │  │        │  ├─ InteractsWithBroadcasting.php
│  │  │        │  ├─ InteractsWithSockets.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingBroadcast.php
│  │  │        │  ├─ PresenceChannel.php
│  │  │        │  ├─ PrivateChannel.php
│  │  │        │  ├─ UniqueBroadcastEvent.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Bus
│  │  │        │  ├─ Batch.php
│  │  │        │  ├─ BatchFactory.php
│  │  │        │  ├─ BatchRepository.php
│  │  │        │  ├─ Batchable.php
│  │  │        │  ├─ BusServiceProvider.php
│  │  │        │  ├─ ChainedBatch.php
│  │  │        │  ├─ DatabaseBatchRepository.php
│  │  │        │  ├─ Dispatcher.php
│  │  │        │  ├─ DynamoBatchRepository.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ BatchDispatched.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingBatch.php
│  │  │        │  ├─ PrunableBatchRepository.php
│  │  │        │  ├─ Queueable.php
│  │  │        │  ├─ UniqueLock.php
│  │  │        │  ├─ UpdatedBatchJobCounts.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Cache
│  │  │        │  ├─ ApcStore.php
│  │  │        │  ├─ ApcWrapper.php
│  │  │        │  ├─ ArrayLock.php
│  │  │        │  ├─ ArrayStore.php
│  │  │        │  ├─ CacheLock.php
│  │  │        │  ├─ CacheManager.php
│  │  │        │  ├─ CacheServiceProvider.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ CacheTableCommand.php
│  │  │        │  │  ├─ ClearCommand.php
│  │  │        │  │  ├─ ForgetCommand.php
│  │  │        │  │  ├─ PruneStaleTagsCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ cache.stub
│  │  │        │  ├─ DatabaseLock.php
│  │  │        │  ├─ DatabaseStore.php
│  │  │        │  ├─ DynamoDbLock.php
│  │  │        │  ├─ DynamoDbStore.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ CacheEvent.php
│  │  │        │  │  ├─ CacheFlushFailed.php
│  │  │        │  │  ├─ CacheFlushed.php
│  │  │        │  │  ├─ CacheFlushing.php
│  │  │        │  │  ├─ CacheHit.php
│  │  │        │  │  ├─ CacheMissed.php
│  │  │        │  │  ├─ ForgettingKey.php
│  │  │        │  │  ├─ KeyForgetFailed.php
│  │  │        │  │  ├─ KeyForgotten.php
│  │  │        │  │  ├─ KeyWriteFailed.php
│  │  │        │  │  ├─ KeyWritten.php
│  │  │        │  │  ├─ RetrievingKey.php
│  │  │        │  │  ├─ RetrievingManyKeys.php
│  │  │        │  │  ├─ WritingKey.php
│  │  │        │  │  └─ WritingManyKeys.php
│  │  │        │  ├─ FileLock.php
│  │  │        │  ├─ FileStore.php
│  │  │        │  ├─ HasCacheLock.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Lock.php
│  │  │        │  ├─ LuaScripts.php
│  │  │        │  ├─ MemcachedConnector.php
│  │  │        │  ├─ MemcachedLock.php
│  │  │        │  ├─ MemcachedStore.php
│  │  │        │  ├─ MemoizedStore.php
│  │  │        │  ├─ NoLock.php
│  │  │        │  ├─ NullStore.php
│  │  │        │  ├─ PhpRedisLock.php
│  │  │        │  ├─ RateLimiter.php
│  │  │        │  ├─ RateLimiting
│  │  │        │  │  ├─ GlobalLimit.php
│  │  │        │  │  ├─ Limit.php
│  │  │        │  │  └─ Unlimited.php
│  │  │        │  ├─ RedisLock.php
│  │  │        │  ├─ RedisStore.php
│  │  │        │  ├─ RedisTagSet.php
│  │  │        │  ├─ RedisTaggedCache.php
│  │  │        │  ├─ Repository.php
│  │  │        │  ├─ RetrievesMultipleKeys.php
│  │  │        │  ├─ TagSet.php
│  │  │        │  ├─ TaggableStore.php
│  │  │        │  ├─ TaggedCache.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Collections
│  │  │        │  ├─ Arr.php
│  │  │        │  ├─ Collection.php
│  │  │        │  ├─ Enumerable.php
│  │  │        │  ├─ HigherOrderCollectionProxy.php
│  │  │        │  ├─ ItemNotFoundException.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LazyCollection.php
│  │  │        │  ├─ MultipleItemsFoundException.php
│  │  │        │  ├─ Traits
│  │  │        │  │  ├─ EnumeratesValues.php
│  │  │        │  │  └─ TransformsToResourceCollection.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ functions.php
│  │  │        │  └─ helpers.php
│  │  │        ├─ Concurrency
│  │  │        │  ├─ ConcurrencyManager.php
│  │  │        │  ├─ ConcurrencyServiceProvider.php
│  │  │        │  ├─ Console
│  │  │        │  │  └─ InvokeSerializedClosureCommand.php
│  │  │        │  ├─ ForkDriver.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ ProcessDriver.php
│  │  │        │  ├─ SyncDriver.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Conditionable
│  │  │        │  ├─ HigherOrderWhenProxy.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Traits
│  │  │        │  │  └─ Conditionable.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Config
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Repository.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Console
│  │  │        │  ├─ Application.php
│  │  │        │  ├─ BufferedConsoleOutput.php
│  │  │        │  ├─ CacheCommandMutex.php
│  │  │        │  ├─ Command.php
│  │  │        │  ├─ CommandMutex.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ CallsCommands.php
│  │  │        │  │  ├─ ConfiguresPrompts.php
│  │  │        │  │  ├─ CreatesMatchingTest.php
│  │  │        │  │  ├─ HasParameters.php
│  │  │        │  │  ├─ InteractsWithIO.php
│  │  │        │  │  ├─ InteractsWithSignals.php
│  │  │        │  │  └─ PromptsForMissingInput.php
│  │  │        │  ├─ ConfirmableTrait.php
│  │  │        │  ├─ ContainerCommandLoader.php
│  │  │        │  ├─ Contracts
│  │  │        │  │  └─ NewLineAware.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ ArtisanStarting.php
│  │  │        │  │  ├─ CommandFinished.php
│  │  │        │  │  ├─ CommandStarting.php
│  │  │        │  │  ├─ ScheduledBackgroundTaskFinished.php
│  │  │        │  │  ├─ ScheduledTaskFailed.php
│  │  │        │  │  ├─ ScheduledTaskFinished.php
│  │  │        │  │  ├─ ScheduledTaskSkipped.php
│  │  │        │  │  └─ ScheduledTaskStarting.php
│  │  │        │  ├─ GeneratorCommand.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ ManuallyFailedException.php
│  │  │        │  ├─ MigrationGeneratorCommand.php
│  │  │        │  ├─ OutputStyle.php
│  │  │        │  ├─ Parser.php
│  │  │        │  ├─ Prohibitable.php
│  │  │        │  ├─ PromptValidationException.php
│  │  │        │  ├─ QuestionHelper.php
│  │  │        │  ├─ Scheduling
│  │  │        │  │  ├─ CacheAware.php
│  │  │        │  │  ├─ CacheEventMutex.php
│  │  │        │  │  ├─ CacheSchedulingMutex.php
│  │  │        │  │  ├─ CallbackEvent.php
│  │  │        │  │  ├─ CommandBuilder.php
│  │  │        │  │  ├─ Event.php
│  │  │        │  │  ├─ EventMutex.php
│  │  │        │  │  ├─ ManagesAttributes.php
│  │  │        │  │  ├─ ManagesFrequencies.php
│  │  │        │  │  ├─ PendingEventAttributes.php
│  │  │        │  │  ├─ Schedule.php
│  │  │        │  │  ├─ ScheduleClearCacheCommand.php
│  │  │        │  │  ├─ ScheduleFinishCommand.php
│  │  │        │  │  ├─ ScheduleInterruptCommand.php
│  │  │        │  │  ├─ ScheduleListCommand.php
│  │  │        │  │  ├─ ScheduleRunCommand.php
│  │  │        │  │  ├─ ScheduleTestCommand.php
│  │  │        │  │  ├─ ScheduleWorkCommand.php
│  │  │        │  │  └─ SchedulingMutex.php
│  │  │        │  ├─ Signals.php
│  │  │        │  ├─ View
│  │  │        │  │  ├─ Components
│  │  │        │  │  │  ├─ Alert.php
│  │  │        │  │  │  ├─ Ask.php
│  │  │        │  │  │  ├─ AskWithCompletion.php
│  │  │        │  │  │  ├─ BulletList.php
│  │  │        │  │  │  ├─ Choice.php
│  │  │        │  │  │  ├─ Component.php
│  │  │        │  │  │  ├─ Confirm.php
│  │  │        │  │  │  ├─ Error.php
│  │  │        │  │  │  ├─ Factory.php
│  │  │        │  │  │  ├─ Info.php
│  │  │        │  │  │  ├─ Line.php
│  │  │        │  │  │  ├─ Mutators
│  │  │        │  │  │  │  ├─ EnsureDynamicContentIsHighlighted.php
│  │  │        │  │  │  │  ├─ EnsureNoPunctuation.php
│  │  │        │  │  │  │  ├─ EnsurePunctuation.php
│  │  │        │  │  │  │  └─ EnsureRelativePaths.php
│  │  │        │  │  │  ├─ Secret.php
│  │  │        │  │  │  ├─ Success.php
│  │  │        │  │  │  ├─ Task.php
│  │  │        │  │  │  ├─ TwoColumnDetail.php
│  │  │        │  │  │  └─ Warn.php
│  │  │        │  │  └─ TaskResult.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        └─ components
│  │  │        │           ├─ alert.php
│  │  │        │           ├─ bullet-list.php
│  │  │        │           ├─ line.php
│  │  │        │           └─ two-column-detail.php
│  │  │        ├─ Container
│  │  │        │  ├─ Attributes
│  │  │        │  │  ├─ Auth.php
│  │  │        │  │  ├─ Authenticated.php
│  │  │        │  │  ├─ Cache.php
│  │  │        │  │  ├─ Config.php
│  │  │        │  │  ├─ CurrentUser.php
│  │  │        │  │  ├─ DB.php
│  │  │        │  │  ├─ Database.php
│  │  │        │  │  ├─ Log.php
│  │  │        │  │  ├─ RouteParameter.php
│  │  │        │  │  ├─ Storage.php
│  │  │        │  │  └─ Tag.php
│  │  │        │  ├─ BoundMethod.php
│  │  │        │  ├─ Container.php
│  │  │        │  ├─ ContextualBindingBuilder.php
│  │  │        │  ├─ EntryNotFoundException.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ RewindableGenerator.php
│  │  │        │  ├─ Util.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Contracts
│  │  │        │  ├─ Auth
│  │  │        │  │  ├─ Access
│  │  │        │  │  │  ├─ Authorizable.php
│  │  │        │  │  │  └─ Gate.php
│  │  │        │  │  ├─ Authenticatable.php
│  │  │        │  │  ├─ CanResetPassword.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Guard.php
│  │  │        │  │  ├─ Middleware
│  │  │        │  │  │  └─ AuthenticatesRequests.php
│  │  │        │  │  ├─ MustVerifyEmail.php
│  │  │        │  │  ├─ PasswordBroker.php
│  │  │        │  │  ├─ PasswordBrokerFactory.php
│  │  │        │  │  ├─ StatefulGuard.php
│  │  │        │  │  ├─ SupportsBasicAuth.php
│  │  │        │  │  └─ UserProvider.php
│  │  │        │  ├─ Broadcasting
│  │  │        │  │  ├─ Broadcaster.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ HasBroadcastChannel.php
│  │  │        │  │  ├─ ShouldBeUnique.php
│  │  │        │  │  ├─ ShouldBroadcast.php
│  │  │        │  │  └─ ShouldBroadcastNow.php
│  │  │        │  ├─ Bus
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  └─ QueueingDispatcher.php
│  │  │        │  ├─ Cache
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Lock.php
│  │  │        │  │  ├─ LockProvider.php
│  │  │        │  │  ├─ LockTimeoutException.php
│  │  │        │  │  ├─ Repository.php
│  │  │        │  │  └─ Store.php
│  │  │        │  ├─ Concurrency
│  │  │        │  │  └─ Driver.php
│  │  │        │  ├─ Config
│  │  │        │  │  └─ Repository.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ Application.php
│  │  │        │  │  ├─ Isolatable.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  └─ PromptsForMissingInput.php
│  │  │        │  ├─ Container
│  │  │        │  │  ├─ BindingResolutionException.php
│  │  │        │  │  ├─ CircularDependencyException.php
│  │  │        │  │  ├─ Container.php
│  │  │        │  │  ├─ ContextualAttribute.php
│  │  │        │  │  └─ ContextualBindingBuilder.php
│  │  │        │  ├─ Cookie
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  └─ QueueingFactory.php
│  │  │        │  ├─ Database
│  │  │        │  │  ├─ Eloquent
│  │  │        │  │  │  ├─ Builder.php
│  │  │        │  │  │  ├─ Castable.php
│  │  │        │  │  │  ├─ CastsAttributes.php
│  │  │        │  │  │  ├─ CastsInboundAttributes.php
│  │  │        │  │  │  ├─ DeviatesCastableAttributes.php
│  │  │        │  │  │  ├─ SerializesCastableAttributes.php
│  │  │        │  │  │  └─ SupportsPartialRelations.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ MigrationEvent.php
│  │  │        │  │  ├─ ModelIdentifier.php
│  │  │        │  │  └─ Query
│  │  │        │  │     ├─ Builder.php
│  │  │        │  │     ├─ ConditionExpression.php
│  │  │        │  │     └─ Expression.php
│  │  │        │  ├─ Debug
│  │  │        │  │  ├─ ExceptionHandler.php
│  │  │        │  │  └─ ShouldntReport.php
│  │  │        │  ├─ Encryption
│  │  │        │  │  ├─ DecryptException.php
│  │  │        │  │  ├─ EncryptException.php
│  │  │        │  │  ├─ Encrypter.php
│  │  │        │  │  └─ StringEncrypter.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  ├─ ShouldDispatchAfterCommit.php
│  │  │        │  │  └─ ShouldHandleEventsAfterCommit.php
│  │  │        │  ├─ Filesystem
│  │  │        │  │  ├─ Cloud.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ FileNotFoundException.php
│  │  │        │  │  ├─ Filesystem.php
│  │  │        │  │  └─ LockTimeoutException.php
│  │  │        │  ├─ Foundation
│  │  │        │  │  ├─ Application.php
│  │  │        │  │  ├─ CachesConfiguration.php
│  │  │        │  │  ├─ CachesRoutes.php
│  │  │        │  │  ├─ ExceptionRenderer.php
│  │  │        │  │  └─ MaintenanceMode.php
│  │  │        │  ├─ Hashing
│  │  │        │  │  └─ Hasher.php
│  │  │        │  ├─ Http
│  │  │        │  │  └─ Kernel.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Log
│  │  │        │  │  └─ ContextLogProcessor.php
│  │  │        │  ├─ Mail
│  │  │        │  │  ├─ Attachable.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ MailQueue.php
│  │  │        │  │  ├─ Mailable.php
│  │  │        │  │  └─ Mailer.php
│  │  │        │  ├─ Notifications
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  └─ Factory.php
│  │  │        │  ├─ Pagination
│  │  │        │  │  ├─ CursorPaginator.php
│  │  │        │  │  ├─ LengthAwarePaginator.php
│  │  │        │  │  └─ Paginator.php
│  │  │        │  ├─ Pipeline
│  │  │        │  │  ├─ Hub.php
│  │  │        │  │  └─ Pipeline.php
│  │  │        │  ├─ Process
│  │  │        │  │  ├─ InvokedProcess.php
│  │  │        │  │  └─ ProcessResult.php
│  │  │        │  ├─ Queue
│  │  │        │  │  ├─ ClearableQueue.php
│  │  │        │  │  ├─ EntityNotFoundException.php
│  │  │        │  │  ├─ EntityResolver.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Job.php
│  │  │        │  │  ├─ Monitor.php
│  │  │        │  │  ├─ Queue.php
│  │  │        │  │  ├─ QueueableCollection.php
│  │  │        │  │  ├─ QueueableEntity.php
│  │  │        │  │  ├─ ShouldBeEncrypted.php
│  │  │        │  │  ├─ ShouldBeUnique.php
│  │  │        │  │  ├─ ShouldBeUniqueUntilProcessing.php
│  │  │        │  │  ├─ ShouldQueue.php
│  │  │        │  │  └─ ShouldQueueAfterCommit.php
│  │  │        │  ├─ Redis
│  │  │        │  │  ├─ Connection.php
│  │  │        │  │  ├─ Connector.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  └─ LimiterTimeoutException.php
│  │  │        │  ├─ Routing
│  │  │        │  │  ├─ BindingRegistrar.php
│  │  │        │  │  ├─ Registrar.php
│  │  │        │  │  ├─ ResponseFactory.php
│  │  │        │  │  ├─ UrlGenerator.php
│  │  │        │  │  └─ UrlRoutable.php
│  │  │        │  ├─ Session
│  │  │        │  │  ├─ Middleware
│  │  │        │  │  │  └─ AuthenticatesSessions.php
│  │  │        │  │  └─ Session.php
│  │  │        │  ├─ Support
│  │  │        │  │  ├─ Arrayable.php
│  │  │        │  │  ├─ CanBeEscapedWhenCastToString.php
│  │  │        │  │  ├─ DeferrableProvider.php
│  │  │        │  │  ├─ DeferringDisplayableValue.php
│  │  │        │  │  ├─ Htmlable.php
│  │  │        │  │  ├─ Jsonable.php
│  │  │        │  │  ├─ MessageBag.php
│  │  │        │  │  ├─ MessageProvider.php
│  │  │        │  │  ├─ Renderable.php
│  │  │        │  │  ├─ Responsable.php
│  │  │        │  │  └─ ValidatedData.php
│  │  │        │  ├─ Translation
│  │  │        │  │  ├─ HasLocalePreference.php
│  │  │        │  │  ├─ Loader.php
│  │  │        │  │  └─ Translator.php
│  │  │        │  ├─ Validation
│  │  │        │  │  ├─ CompilableRules.php
│  │  │        │  │  ├─ DataAwareRule.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ ImplicitRule.php
│  │  │        │  │  ├─ InvokableRule.php
│  │  │        │  │  ├─ Rule.php
│  │  │        │  │  ├─ UncompromisedVerifier.php
│  │  │        │  │  ├─ ValidatesWhenResolved.php
│  │  │        │  │  ├─ ValidationRule.php
│  │  │        │  │  ├─ Validator.php
│  │  │        │  │  └─ ValidatorAwareRule.php
│  │  │        │  ├─ View
│  │  │        │  │  ├─ Engine.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ View.php
│  │  │        │  │  └─ ViewCompilationException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Cookie
│  │  │        │  ├─ CookieJar.php
│  │  │        │  ├─ CookieServiceProvider.php
│  │  │        │  ├─ CookieValuePrefix.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AddQueuedCookiesToResponse.php
│  │  │        │  │  └─ EncryptCookies.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Database
│  │  │        │  ├─ Capsule
│  │  │        │  │  └─ Manager.php
│  │  │        │  ├─ ClassMorphViolationException.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ BuildsQueries.php
│  │  │        │  │  ├─ BuildsWhereDateClauses.php
│  │  │        │  │  ├─ CompilesJsonPaths.php
│  │  │        │  │  ├─ ExplainsQueries.php
│  │  │        │  │  ├─ ManagesTransactions.php
│  │  │        │  │  └─ ParsesSearchPath.php
│  │  │        │  ├─ ConfigurationUrlParser.php
│  │  │        │  ├─ Connection.php
│  │  │        │  ├─ ConnectionInterface.php
│  │  │        │  ├─ ConnectionResolver.php
│  │  │        │  ├─ ConnectionResolverInterface.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ ConnectionFactory.php
│  │  │        │  │  ├─ Connector.php
│  │  │        │  │  ├─ ConnectorInterface.php
│  │  │        │  │  ├─ MariaDbConnector.php
│  │  │        │  │  ├─ MySqlConnector.php
│  │  │        │  │  ├─ PostgresConnector.php
│  │  │        │  │  ├─ SQLiteConnector.php
│  │  │        │  │  └─ SqlServerConnector.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ DatabaseInspectionCommand.php
│  │  │        │  │  ├─ DbCommand.php
│  │  │        │  │  ├─ DumpCommand.php
│  │  │        │  │  ├─ Factories
│  │  │        │  │  │  ├─ FactoryMakeCommand.php
│  │  │        │  │  │  └─ stubs
│  │  │        │  │  │     └─ factory.stub
│  │  │        │  │  ├─ Migrations
│  │  │        │  │  │  ├─ BaseCommand.php
│  │  │        │  │  │  ├─ FreshCommand.php
│  │  │        │  │  │  ├─ InstallCommand.php
│  │  │        │  │  │  ├─ MigrateCommand.php
│  │  │        │  │  │  ├─ MigrateMakeCommand.php
│  │  │        │  │  │  ├─ RefreshCommand.php
│  │  │        │  │  │  ├─ ResetCommand.php
│  │  │        │  │  │  ├─ RollbackCommand.php
│  │  │        │  │  │  ├─ StatusCommand.php
│  │  │        │  │  │  └─ TableGuesser.php
│  │  │        │  │  ├─ MonitorCommand.php
│  │  │        │  │  ├─ PruneCommand.php
│  │  │        │  │  ├─ Seeds
│  │  │        │  │  │  ├─ SeedCommand.php
│  │  │        │  │  │  ├─ SeederMakeCommand.php
│  │  │        │  │  │  ├─ WithoutModelEvents.php
│  │  │        │  │  │  └─ stubs
│  │  │        │  │  │     └─ seeder.stub
│  │  │        │  │  ├─ ShowCommand.php
│  │  │        │  │  ├─ ShowModelCommand.php
│  │  │        │  │  ├─ TableCommand.php
│  │  │        │  │  └─ WipeCommand.php
│  │  │        │  ├─ DatabaseManager.php
│  │  │        │  ├─ DatabaseServiceProvider.php
│  │  │        │  ├─ DatabaseTransactionRecord.php
│  │  │        │  ├─ DatabaseTransactionsManager.php
│  │  │        │  ├─ DeadlockException.php
│  │  │        │  ├─ DetectsConcurrencyErrors.php
│  │  │        │  ├─ DetectsLostConnections.php
│  │  │        │  ├─ Eloquent
│  │  │        │  │  ├─ Attributes
│  │  │        │  │  │  ├─ CollectedBy.php
│  │  │        │  │  │  ├─ ObservedBy.php
│  │  │        │  │  │  ├─ Scope.php
│  │  │        │  │  │  ├─ ScopedBy.php
│  │  │        │  │  │  └─ UseFactory.php
│  │  │        │  │  ├─ BroadcastableModelEventOccurred.php
│  │  │        │  │  ├─ BroadcastsEvents.php
│  │  │        │  │  ├─ BroadcastsEventsAfterCommit.php
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ Casts
│  │  │        │  │  │  ├─ ArrayObject.php
│  │  │        │  │  │  ├─ AsArrayObject.php
│  │  │        │  │  │  ├─ AsCollection.php
│  │  │        │  │  │  ├─ AsEncryptedArrayObject.php
│  │  │        │  │  │  ├─ AsEncryptedCollection.php
│  │  │        │  │  │  ├─ AsEnumArrayObject.php
│  │  │        │  │  │  ├─ AsEnumCollection.php
│  │  │        │  │  │  ├─ AsHtmlString.php
│  │  │        │  │  │  ├─ AsStringable.php
│  │  │        │  │  │  ├─ Attribute.php
│  │  │        │  │  │  └─ Json.php
│  │  │        │  │  ├─ Collection.php
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  ├─ GuardsAttributes.php
│  │  │        │  │  │  ├─ HasAttributes.php
│  │  │        │  │  │  ├─ HasEvents.php
│  │  │        │  │  │  ├─ HasGlobalScopes.php
│  │  │        │  │  │  ├─ HasRelationships.php
│  │  │        │  │  │  ├─ HasTimestamps.php
│  │  │        │  │  │  ├─ HasUlids.php
│  │  │        │  │  │  ├─ HasUniqueIds.php
│  │  │        │  │  │  ├─ HasUniqueStringIds.php
│  │  │        │  │  │  ├─ HasUuids.php
│  │  │        │  │  │  ├─ HasVersion4Uuids.php
│  │  │        │  │  │  ├─ HidesAttributes.php
│  │  │        │  │  │  ├─ PreventsCircularRecursion.php
│  │  │        │  │  │  ├─ QueriesRelationships.php
│  │  │        │  │  │  └─ TransformsToResource.php
│  │  │        │  │  ├─ Factories
│  │  │        │  │  │  ├─ BelongsToManyRelationship.php
│  │  │        │  │  │  ├─ BelongsToRelationship.php
│  │  │        │  │  │  ├─ CrossJoinSequence.php
│  │  │        │  │  │  ├─ Factory.php
│  │  │        │  │  │  ├─ HasFactory.php
│  │  │        │  │  │  ├─ Relationship.php
│  │  │        │  │  │  └─ Sequence.php
│  │  │        │  │  ├─ HasBuilder.php
│  │  │        │  │  ├─ HasCollection.php
│  │  │        │  │  ├─ HigherOrderBuilderProxy.php
│  │  │        │  │  ├─ InvalidCastException.php
│  │  │        │  │  ├─ JsonEncodingException.php
│  │  │        │  │  ├─ MassAssignmentException.php
│  │  │        │  │  ├─ MassPrunable.php
│  │  │        │  │  ├─ MissingAttributeException.php
│  │  │        │  │  ├─ Model.php
│  │  │        │  │  ├─ ModelInspector.php
│  │  │        │  │  ├─ ModelNotFoundException.php
│  │  │        │  │  ├─ PendingHasThroughRelationship.php
│  │  │        │  │  ├─ Prunable.php
│  │  │        │  │  ├─ QueueEntityResolver.php
│  │  │        │  │  ├─ RelationNotFoundException.php
│  │  │        │  │  ├─ Relations
│  │  │        │  │  │  ├─ BelongsTo.php
│  │  │        │  │  │  ├─ BelongsToMany.php
│  │  │        │  │  │  ├─ Concerns
│  │  │        │  │  │  │  ├─ AsPivot.php
│  │  │        │  │  │  │  ├─ CanBeOneOfMany.php
│  │  │        │  │  │  │  ├─ ComparesRelatedModels.php
│  │  │        │  │  │  │  ├─ InteractsWithDictionary.php
│  │  │        │  │  │  │  ├─ InteractsWithPivotTable.php
│  │  │        │  │  │  │  ├─ SupportsDefaultModels.php
│  │  │        │  │  │  │  └─ SupportsInverseRelations.php
│  │  │        │  │  │  ├─ HasMany.php
│  │  │        │  │  │  ├─ HasManyThrough.php
│  │  │        │  │  │  ├─ HasOne.php
│  │  │        │  │  │  ├─ HasOneOrMany.php
│  │  │        │  │  │  ├─ HasOneOrManyThrough.php
│  │  │        │  │  │  ├─ HasOneThrough.php
│  │  │        │  │  │  ├─ MorphMany.php
│  │  │        │  │  │  ├─ MorphOne.php
│  │  │        │  │  │  ├─ MorphOneOrMany.php
│  │  │        │  │  │  ├─ MorphPivot.php
│  │  │        │  │  │  ├─ MorphTo.php
│  │  │        │  │  │  ├─ MorphToMany.php
│  │  │        │  │  │  ├─ Pivot.php
│  │  │        │  │  │  └─ Relation.php
│  │  │        │  │  ├─ Scope.php
│  │  │        │  │  ├─ SoftDeletes.php
│  │  │        │  │  └─ SoftDeletingScope.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ ConnectionEstablished.php
│  │  │        │  │  ├─ ConnectionEvent.php
│  │  │        │  │  ├─ DatabaseBusy.php
│  │  │        │  │  ├─ DatabaseRefreshed.php
│  │  │        │  │  ├─ MigrationEnded.php
│  │  │        │  │  ├─ MigrationEvent.php
│  │  │        │  │  ├─ MigrationStarted.php
│  │  │        │  │  ├─ MigrationsEnded.php
│  │  │        │  │  ├─ MigrationsEvent.php
│  │  │        │  │  ├─ MigrationsPruned.php
│  │  │        │  │  ├─ MigrationsStarted.php
│  │  │        │  │  ├─ ModelPruningFinished.php
│  │  │        │  │  ├─ ModelPruningStarting.php
│  │  │        │  │  ├─ ModelsPruned.php
│  │  │        │  │  ├─ NoPendingMigrations.php
│  │  │        │  │  ├─ QueryExecuted.php
│  │  │        │  │  ├─ SchemaDumped.php
│  │  │        │  │  ├─ SchemaLoaded.php
│  │  │        │  │  ├─ StatementPrepared.php
│  │  │        │  │  ├─ TransactionBeginning.php
│  │  │        │  │  ├─ TransactionCommitted.php
│  │  │        │  │  ├─ TransactionCommitting.php
│  │  │        │  │  └─ TransactionRolledBack.php
│  │  │        │  ├─ Grammar.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LazyLoadingViolationException.php
│  │  │        │  ├─ LostConnectionException.php
│  │  │        │  ├─ MariaDbConnection.php
│  │  │        │  ├─ MigrationServiceProvider.php
│  │  │        │  ├─ Migrations
│  │  │        │  │  ├─ DatabaseMigrationRepository.php
│  │  │        │  │  ├─ Migration.php
│  │  │        │  │  ├─ MigrationCreator.php
│  │  │        │  │  ├─ MigrationRepositoryInterface.php
│  │  │        │  │  ├─ MigrationResult.php
│  │  │        │  │  ├─ Migrator.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ migration.create.stub
│  │  │        │  │     ├─ migration.stub
│  │  │        │  │     └─ migration.update.stub
│  │  │        │  ├─ MultipleColumnsSelectedException.php
│  │  │        │  ├─ MultipleRecordsFoundException.php
│  │  │        │  ├─ MySqlConnection.php
│  │  │        │  ├─ PostgresConnection.php
│  │  │        │  ├─ Query
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ Expression.php
│  │  │        │  │  ├─ Grammars
│  │  │        │  │  │  ├─ Grammar.php
│  │  │        │  │  │  ├─ MariaDbGrammar.php
│  │  │        │  │  │  ├─ MySqlGrammar.php
│  │  │        │  │  │  ├─ PostgresGrammar.php
│  │  │        │  │  │  ├─ SQLiteGrammar.php
│  │  │        │  │  │  └─ SqlServerGrammar.php
│  │  │        │  │  ├─ IndexHint.php
│  │  │        │  │  ├─ JoinClause.php
│  │  │        │  │  ├─ JoinLateralClause.php
│  │  │        │  │  └─ Processors
│  │  │        │  │     ├─ MariaDbProcessor.php
│  │  │        │  │     ├─ MySqlProcessor.php
│  │  │        │  │     ├─ PostgresProcessor.php
│  │  │        │  │     ├─ Processor.php
│  │  │        │  │     ├─ SQLiteProcessor.php
│  │  │        │  │     └─ SqlServerProcessor.php
│  │  │        │  ├─ QueryException.php
│  │  │        │  ├─ README.md
│  │  │        │  ├─ RecordNotFoundException.php
│  │  │        │  ├─ RecordsNotFoundException.php
│  │  │        │  ├─ SQLiteConnection.php
│  │  │        │  ├─ SQLiteDatabaseDoesNotExistException.php
│  │  │        │  ├─ Schema
│  │  │        │  │  ├─ Blueprint.php
│  │  │        │  │  ├─ BlueprintState.php
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ ColumnDefinition.php
│  │  │        │  │  ├─ ForeignIdColumnDefinition.php
│  │  │        │  │  ├─ ForeignKeyDefinition.php
│  │  │        │  │  ├─ Grammars
│  │  │        │  │  │  ├─ Grammar.php
│  │  │        │  │  │  ├─ MariaDbGrammar.php
│  │  │        │  │  │  ├─ MySqlGrammar.php
│  │  │        │  │  │  ├─ PostgresGrammar.php
│  │  │        │  │  │  ├─ SQLiteGrammar.php
│  │  │        │  │  │  └─ SqlServerGrammar.php
│  │  │        │  │  ├─ IndexDefinition.php
│  │  │        │  │  ├─ MariaDbBuilder.php
│  │  │        │  │  ├─ MariaDbSchemaState.php
│  │  │        │  │  ├─ MySqlBuilder.php
│  │  │        │  │  ├─ MySqlSchemaState.php
│  │  │        │  │  ├─ PostgresBuilder.php
│  │  │        │  │  ├─ PostgresSchemaState.php
│  │  │        │  │  ├─ SQLiteBuilder.php
│  │  │        │  │  ├─ SchemaState.php
│  │  │        │  │  ├─ SqlServerBuilder.php
│  │  │        │  │  └─ SqliteSchemaState.php
│  │  │        │  ├─ Seeder.php
│  │  │        │  ├─ SqlServerConnection.php
│  │  │        │  ├─ UniqueConstraintViolationException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Encryption
│  │  │        │  ├─ Encrypter.php
│  │  │        │  ├─ EncryptionServiceProvider.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MissingAppKeyException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Events
│  │  │        │  ├─ CallQueuedListener.php
│  │  │        │  ├─ Dispatcher.php
│  │  │        │  ├─ EventServiceProvider.php
│  │  │        │  ├─ InvokeQueuedClosure.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ NullDispatcher.php
│  │  │        │  ├─ QueuedClosure.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ functions.php
│  │  │        ├─ Filesystem
│  │  │        │  ├─ AwsS3V3Adapter.php
│  │  │        │  ├─ Filesystem.php
│  │  │        │  ├─ FilesystemAdapter.php
│  │  │        │  ├─ FilesystemManager.php
│  │  │        │  ├─ FilesystemServiceProvider.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LocalFilesystemAdapter.php
│  │  │        │  ├─ LockableFile.php
│  │  │        │  ├─ ServeFile.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ functions.php
│  │  │        ├─ Foundation
│  │  │        │  ├─ AliasLoader.php
│  │  │        │  ├─ Application.php
│  │  │        │  ├─ Auth
│  │  │        │  │  ├─ Access
│  │  │        │  │  │  ├─ Authorizable.php
│  │  │        │  │  │  └─ AuthorizesRequests.php
│  │  │        │  │  ├─ EmailVerificationRequest.php
│  │  │        │  │  └─ User.php
│  │  │        │  ├─ Bootstrap
│  │  │        │  │  ├─ BootProviders.php
│  │  │        │  │  ├─ HandleExceptions.php
│  │  │        │  │  ├─ LoadConfiguration.php
│  │  │        │  │  ├─ LoadEnvironmentVariables.php
│  │  │        │  │  ├─ RegisterFacades.php
│  │  │        │  │  ├─ RegisterProviders.php
│  │  │        │  │  └─ SetRequestForConsole.php
│  │  │        │  ├─ Bus
│  │  │        │  │  ├─ Dispatchable.php
│  │  │        │  │  ├─ DispatchesJobs.php
│  │  │        │  │  ├─ PendingChain.php
│  │  │        │  │  ├─ PendingClosureDispatch.php
│  │  │        │  │  └─ PendingDispatch.php
│  │  │        │  ├─ CacheBasedMaintenanceMode.php
│  │  │        │  ├─ Cloud.php
│  │  │        │  ├─ ComposerScripts.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  └─ ResolvesDumpSource.php
│  │  │        │  ├─ Configuration
│  │  │        │  │  ├─ ApplicationBuilder.php
│  │  │        │  │  ├─ Exceptions.php
│  │  │        │  │  └─ Middleware.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ AboutCommand.php
│  │  │        │  │  ├─ ApiInstallCommand.php
│  │  │        │  │  ├─ BroadcastingInstallCommand.php
│  │  │        │  │  ├─ CastMakeCommand.php
│  │  │        │  │  ├─ ChannelListCommand.php
│  │  │        │  │  ├─ ChannelMakeCommand.php
│  │  │        │  │  ├─ ClassMakeCommand.php
│  │  │        │  │  ├─ ClearCompiledCommand.php
│  │  │        │  │  ├─ CliDumper.php
│  │  │        │  │  ├─ ClosureCommand.php
│  │  │        │  │  ├─ ComponentMakeCommand.php
│  │  │        │  │  ├─ ConfigCacheCommand.php
│  │  │        │  │  ├─ ConfigClearCommand.php
│  │  │        │  │  ├─ ConfigPublishCommand.php
│  │  │        │  │  ├─ ConfigShowCommand.php
│  │  │        │  │  ├─ ConsoleMakeCommand.php
│  │  │        │  │  ├─ DocsCommand.php
│  │  │        │  │  ├─ DownCommand.php
│  │  │        │  │  ├─ EnumMakeCommand.php
│  │  │        │  │  ├─ EnvironmentCommand.php
│  │  │        │  │  ├─ EnvironmentDecryptCommand.php
│  │  │        │  │  ├─ EnvironmentEncryptCommand.php
│  │  │        │  │  ├─ EventCacheCommand.php
│  │  │        │  │  ├─ EventClearCommand.php
│  │  │        │  │  ├─ EventGenerateCommand.php
│  │  │        │  │  ├─ EventListCommand.php
│  │  │        │  │  ├─ EventMakeCommand.php
│  │  │        │  │  ├─ ExceptionMakeCommand.php
│  │  │        │  │  ├─ InteractsWithComposerPackages.php
│  │  │        │  │  ├─ InterfaceMakeCommand.php
│  │  │        │  │  ├─ JobMakeCommand.php
│  │  │        │  │  ├─ JobMiddlewareMakeCommand.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  ├─ KeyGenerateCommand.php
│  │  │        │  │  ├─ LangPublishCommand.php
│  │  │        │  │  ├─ ListenerMakeCommand.php
│  │  │        │  │  ├─ MailMakeCommand.php
│  │  │        │  │  ├─ ModelMakeCommand.php
│  │  │        │  │  ├─ NotificationMakeCommand.php
│  │  │        │  │  ├─ ObserverMakeCommand.php
│  │  │        │  │  ├─ OptimizeClearCommand.php
│  │  │        │  │  ├─ OptimizeCommand.php
│  │  │        │  │  ├─ PackageDiscoverCommand.php
│  │  │        │  │  ├─ PolicyMakeCommand.php
│  │  │        │  │  ├─ ProviderMakeCommand.php
│  │  │        │  │  ├─ QueuedCommand.php
│  │  │        │  │  ├─ RequestMakeCommand.php
│  │  │        │  │  ├─ ResourceMakeCommand.php
│  │  │        │  │  ├─ RouteCacheCommand.php
│  │  │        │  │  ├─ RouteClearCommand.php
│  │  │        │  │  ├─ RouteListCommand.php
│  │  │        │  │  ├─ RuleMakeCommand.php
│  │  │        │  │  ├─ ScopeMakeCommand.php
│  │  │        │  │  ├─ ServeCommand.php
│  │  │        │  │  ├─ StorageLinkCommand.php
│  │  │        │  │  ├─ StorageUnlinkCommand.php
│  │  │        │  │  ├─ StubPublishCommand.php
│  │  │        │  │  ├─ TestMakeCommand.php
│  │  │        │  │  ├─ TraitMakeCommand.php
│  │  │        │  │  ├─ UpCommand.php
│  │  │        │  │  ├─ VendorPublishCommand.php
│  │  │        │  │  ├─ ViewCacheCommand.php
│  │  │        │  │  ├─ ViewClearCommand.php
│  │  │        │  │  ├─ ViewMakeCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ api-routes.stub
│  │  │        │  │     ├─ broadcasting-routes.stub
│  │  │        │  │     ├─ cast.inbound.stub
│  │  │        │  │     ├─ cast.stub
│  │  │        │  │     ├─ channel.stub
│  │  │        │  │     ├─ class.invokable.stub
│  │  │        │  │     ├─ class.stub
│  │  │        │  │     ├─ console.stub
│  │  │        │  │     ├─ echo-bootstrap-js.stub
│  │  │        │  │     ├─ echo-js.stub
│  │  │        │  │     ├─ enum.backed.stub
│  │  │        │  │     ├─ enum.stub
│  │  │        │  │     ├─ event.stub
│  │  │        │  │     ├─ exception-render-report.stub
│  │  │        │  │     ├─ exception-render.stub
│  │  │        │  │     ├─ exception-report.stub
│  │  │        │  │     ├─ exception.stub
│  │  │        │  │     ├─ interface.stub
│  │  │        │  │     ├─ job.middleware.stub
│  │  │        │  │     ├─ job.queued.stub
│  │  │        │  │     ├─ job.stub
│  │  │        │  │     ├─ listener.queued.stub
│  │  │        │  │     ├─ listener.stub
│  │  │        │  │     ├─ listener.typed.queued.stub
│  │  │        │  │     ├─ listener.typed.stub
│  │  │        │  │     ├─ mail.stub
│  │  │        │  │     ├─ maintenance-mode.stub
│  │  │        │  │     ├─ markdown-mail.stub
│  │  │        │  │     ├─ markdown-notification.stub
│  │  │        │  │     ├─ markdown.stub
│  │  │        │  │     ├─ model.morph-pivot.stub
│  │  │        │  │     ├─ model.pivot.stub
│  │  │        │  │     ├─ model.stub
│  │  │        │  │     ├─ notification.stub
│  │  │        │  │     ├─ observer.plain.stub
│  │  │        │  │     ├─ observer.stub
│  │  │        │  │     ├─ pest.stub
│  │  │        │  │     ├─ pest.unit.stub
│  │  │        │  │     ├─ policy.plain.stub
│  │  │        │  │     ├─ policy.stub
│  │  │        │  │     ├─ provider.stub
│  │  │        │  │     ├─ request.stub
│  │  │        │  │     ├─ resource-collection.stub
│  │  │        │  │     ├─ resource.stub
│  │  │        │  │     ├─ routes.stub
│  │  │        │  │     ├─ rule.implicit.stub
│  │  │        │  │     ├─ rule.stub
│  │  │        │  │     ├─ scope.stub
│  │  │        │  │     ├─ test.stub
│  │  │        │  │     ├─ test.unit.stub
│  │  │        │  │     ├─ trait.stub
│  │  │        │  │     ├─ view-component.stub
│  │  │        │  │     ├─ view-mail.stub
│  │  │        │  │     ├─ view.pest.stub
│  │  │        │  │     ├─ view.stub
│  │  │        │  │     └─ view.test.stub
│  │  │        │  ├─ EnvironmentDetector.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ DiagnosingHealth.php
│  │  │        │  │  ├─ DiscoverEvents.php
│  │  │        │  │  ├─ Dispatchable.php
│  │  │        │  │  ├─ LocaleUpdated.php
│  │  │        │  │  ├─ MaintenanceModeDisabled.php
│  │  │        │  │  ├─ MaintenanceModeEnabled.php
│  │  │        │  │  ├─ PublishingStubs.php
│  │  │        │  │  ├─ Terminating.php
│  │  │        │  │  └─ VendorTagPublished.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ Handler.php
│  │  │        │  │  ├─ RegisterErrorViewPaths.php
│  │  │        │  │  ├─ Renderer
│  │  │        │  │  │  ├─ Exception.php
│  │  │        │  │  │  ├─ Frame.php
│  │  │        │  │  │  ├─ Listener.php
│  │  │        │  │  │  ├─ Mappers
│  │  │        │  │  │  │  └─ BladeMapper.php
│  │  │        │  │  │  └─ Renderer.php
│  │  │        │  │  ├─ ReportableHandler.php
│  │  │        │  │  ├─ Whoops
│  │  │        │  │  │  ├─ WhoopsExceptionRenderer.php
│  │  │        │  │  │  └─ WhoopsHandler.php
│  │  │        │  │  └─ views
│  │  │        │  │     ├─ 401.blade.php
│  │  │        │  │     ├─ 402.blade.php
│  │  │        │  │     ├─ 403.blade.php
│  │  │        │  │     ├─ 404.blade.php
│  │  │        │  │     ├─ 419.blade.php
│  │  │        │  │     ├─ 429.blade.php
│  │  │        │  │     ├─ 500.blade.php
│  │  │        │  │     ├─ 503.blade.php
│  │  │        │  │     ├─ layout.blade.php
│  │  │        │  │     └─ minimal.blade.php
│  │  │        │  ├─ FileBasedMaintenanceMode.php
│  │  │        │  ├─ Http
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ RequestHandled.php
│  │  │        │  │  ├─ FormRequest.php
│  │  │        │  │  ├─ HtmlDumper.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  ├─ MaintenanceModeBypassCookie.php
│  │  │        │  │  └─ Middleware
│  │  │        │  │     ├─ CheckForMaintenanceMode.php
│  │  │        │  │     ├─ Concerns
│  │  │        │  │     │  └─ ExcludesPaths.php
│  │  │        │  │     ├─ ConvertEmptyStringsToNull.php
│  │  │        │  │     ├─ HandlePrecognitiveRequests.php
│  │  │        │  │     ├─ InvokeDeferredCallbacks.php
│  │  │        │  │     ├─ PreventRequestsDuringMaintenance.php
│  │  │        │  │     ├─ TransformsRequest.php
│  │  │        │  │     ├─ TrimStrings.php
│  │  │        │  │     ├─ ValidateCsrfToken.php
│  │  │        │  │     ├─ ValidatePostSize.php
│  │  │        │  │     └─ VerifyCsrfToken.php
│  │  │        │  ├─ Inspiring.php
│  │  │        │  ├─ MaintenanceModeManager.php
│  │  │        │  ├─ Mix.php
│  │  │        │  ├─ MixFileNotFoundException.php
│  │  │        │  ├─ MixManifestNotFoundException.php
│  │  │        │  ├─ PackageManifest.php
│  │  │        │  ├─ Precognition.php
│  │  │        │  ├─ ProviderRepository.php
│  │  │        │  ├─ Providers
│  │  │        │  │  ├─ ArtisanServiceProvider.php
│  │  │        │  │  ├─ ComposerServiceProvider.php
│  │  │        │  │  ├─ ConsoleSupportServiceProvider.php
│  │  │        │  │  ├─ FormRequestServiceProvider.php
│  │  │        │  │  └─ FoundationServiceProvider.php
│  │  │        │  ├─ Queue
│  │  │        │  │  ├─ InteractsWithUniqueJobs.php
│  │  │        │  │  └─ Queueable.php
│  │  │        │  ├─ Routing
│  │  │        │  │  ├─ PrecognitionCallableDispatcher.php
│  │  │        │  │  └─ PrecognitionControllerDispatcher.php
│  │  │        │  ├─ Support
│  │  │        │  │  └─ Providers
│  │  │        │  │     ├─ AuthServiceProvider.php
│  │  │        │  │     ├─ EventServiceProvider.php
│  │  │        │  │     └─ RouteServiceProvider.php
│  │  │        │  ├─ Testing
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  ├─ InteractsWithAuthentication.php
│  │  │        │  │  │  ├─ InteractsWithConsole.php
│  │  │        │  │  │  ├─ InteractsWithContainer.php
│  │  │        │  │  │  ├─ InteractsWithDatabase.php
│  │  │        │  │  │  ├─ InteractsWithDeprecationHandling.php
│  │  │        │  │  │  ├─ InteractsWithExceptionHandling.php
│  │  │        │  │  │  ├─ InteractsWithRedis.php
│  │  │        │  │  │  ├─ InteractsWithSession.php
│  │  │        │  │  │  ├─ InteractsWithTestCaseLifecycle.php
│  │  │        │  │  │  ├─ InteractsWithTime.php
│  │  │        │  │  │  ├─ InteractsWithViews.php
│  │  │        │  │  │  ├─ MakesHttpRequests.php
│  │  │        │  │  │  └─ WithoutExceptionHandlingHandler.php
│  │  │        │  │  ├─ DatabaseMigrations.php
│  │  │        │  │  ├─ DatabaseTransactions.php
│  │  │        │  │  ├─ DatabaseTransactionsManager.php
│  │  │        │  │  ├─ DatabaseTruncation.php
│  │  │        │  │  ├─ LazilyRefreshDatabase.php
│  │  │        │  │  ├─ RefreshDatabase.php
│  │  │        │  │  ├─ RefreshDatabaseState.php
│  │  │        │  │  ├─ TestCase.php
│  │  │        │  │  ├─ Traits
│  │  │        │  │  │  └─ CanConfigureMigrationCommands.php
│  │  │        │  │  ├─ WithConsoleEvents.php
│  │  │        │  │  ├─ WithFaker.php
│  │  │        │  │  ├─ WithoutMiddleware.php
│  │  │        │  │  └─ Wormhole.php
│  │  │        │  ├─ Validation
│  │  │        │  │  └─ ValidatesRequests.php
│  │  │        │  ├─ Vite.php
│  │  │        │  ├─ ViteException.php
│  │  │        │  ├─ ViteManifestNotFoundException.php
│  │  │        │  ├─ helpers.php
│  │  │        │  ├─ resources
│  │  │        │  │  ├─ exceptions
│  │  │        │  │  │  └─ renderer
│  │  │        │  │  │     ├─ components
│  │  │        │  │  │     │  ├─ card.blade.php
│  │  │        │  │  │     │  ├─ context.blade.php
│  │  │        │  │  │     │  ├─ editor.blade.php
│  │  │        │  │  │     │  ├─ header.blade.php
│  │  │        │  │  │     │  ├─ icons
│  │  │        │  │  │     │  │  ├─ chevron-down.blade.php
│  │  │        │  │  │     │  │  ├─ chevron-up.blade.php
│  │  │        │  │  │     │  │  ├─ computer-desktop.blade.php
│  │  │        │  │  │     │  │  ├─ moon.blade.php
│  │  │        │  │  │     │  │  └─ sun.blade.php
│  │  │        │  │  │     │  ├─ layout.blade.php
│  │  │        │  │  │     │  ├─ navigation.blade.php
│  │  │        │  │  │     │  ├─ theme-switcher.blade.php
│  │  │        │  │  │     │  ├─ trace-and-editor.blade.php
│  │  │        │  │  │     │  └─ trace.blade.php
│  │  │        │  │  │     ├─ dark-mode.css
│  │  │        │  │  │     ├─ dist
│  │  │        │  │  │     │  ├─ dark-mode.css
│  │  │        │  │  │     │  ├─ light-mode.css
│  │  │        │  │  │     │  ├─ scripts.js
│  │  │        │  │  │     │  └─ styles.css
│  │  │        │  │  │     ├─ light-mode.css
│  │  │        │  │  │     ├─ package-lock.json
│  │  │        │  │  │     ├─ package.json
│  │  │        │  │  │     ├─ postcss.config.js
│  │  │        │  │  │     ├─ scripts.js
│  │  │        │  │  │     ├─ show.blade.php
│  │  │        │  │  │     ├─ styles.css
│  │  │        │  │  │     ├─ tailwind.config.js
│  │  │        │  │  │     └─ vite.config.js
│  │  │        │  │  ├─ health-up.blade.php
│  │  │        │  │  └─ server.php
│  │  │        │  └─ stubs
│  │  │        │     └─ facade.stub
│  │  │        ├─ Hashing
│  │  │        │  ├─ AbstractHasher.php
│  │  │        │  ├─ Argon2IdHasher.php
│  │  │        │  ├─ ArgonHasher.php
│  │  │        │  ├─ BcryptHasher.php
│  │  │        │  ├─ HashManager.php
│  │  │        │  ├─ HashServiceProvider.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  └─ composer.json
│  │  │        ├─ Http
│  │  │        │  ├─ Client
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  └─ DeterminesStatusCode.php
│  │  │        │  │  ├─ ConnectionException.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  ├─ ConnectionFailed.php
│  │  │        │  │  │  ├─ RequestSending.php
│  │  │        │  │  │  └─ ResponseReceived.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ HttpClientException.php
│  │  │        │  │  ├─ PendingRequest.php
│  │  │        │  │  ├─ Pool.php
│  │  │        │  │  ├─ Request.php
│  │  │        │  │  ├─ RequestException.php
│  │  │        │  │  ├─ Response.php
│  │  │        │  │  └─ ResponseSequence.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ CanBePrecognitive.php
│  │  │        │  │  ├─ InteractsWithContentTypes.php
│  │  │        │  │  ├─ InteractsWithFlashData.php
│  │  │        │  │  └─ InteractsWithInput.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ HttpResponseException.php
│  │  │        │  │  ├─ MalformedUrlException.php
│  │  │        │  │  ├─ PostTooLargeException.php
│  │  │        │  │  └─ ThrottleRequestsException.php
│  │  │        │  ├─ File.php
│  │  │        │  ├─ FileHelpers.php
│  │  │        │  ├─ JsonResponse.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AddLinkHeadersForPreloadedAssets.php
│  │  │        │  │  ├─ CheckResponseForModifications.php
│  │  │        │  │  ├─ FrameGuard.php
│  │  │        │  │  ├─ HandleCors.php
│  │  │        │  │  ├─ SetCacheHeaders.php
│  │  │        │  │  ├─ TrustHosts.php
│  │  │        │  │  ├─ TrustProxies.php
│  │  │        │  │  ├─ ValidatePathEncoding.php
│  │  │        │  │  └─ ValidatePostSize.php
│  │  │        │  ├─ RedirectResponse.php
│  │  │        │  ├─ Request.php
│  │  │        │  ├─ Resources
│  │  │        │  │  ├─ CollectsResources.php
│  │  │        │  │  ├─ ConditionallyLoadsAttributes.php
│  │  │        │  │  ├─ DelegatesToResource.php
│  │  │        │  │  ├─ Json
│  │  │        │  │  │  ├─ AnonymousResourceCollection.php
│  │  │        │  │  │  ├─ JsonResource.php
│  │  │        │  │  │  ├─ PaginatedResourceResponse.php
│  │  │        │  │  │  ├─ ResourceCollection.php
│  │  │        │  │  │  └─ ResourceResponse.php
│  │  │        │  │  ├─ MergeValue.php
│  │  │        │  │  ├─ MissingValue.php
│  │  │        │  │  └─ PotentiallyMissing.php
│  │  │        │  ├─ Response.php
│  │  │        │  ├─ ResponseTrait.php
│  │  │        │  ├─ StreamedEvent.php
│  │  │        │  ├─ Testing
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ FileFactory.php
│  │  │        │  │  └─ MimeType.php
│  │  │        │  ├─ UploadedFile.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Log
│  │  │        │  ├─ Context
│  │  │        │  │  ├─ ContextLogProcessor.php
│  │  │        │  │  ├─ ContextServiceProvider.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  ├─ ContextDehydrating.php
│  │  │        │  │  │  └─ ContextHydrated.php
│  │  │        │  │  └─ Repository.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ MessageLogged.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LogManager.php
│  │  │        │  ├─ LogServiceProvider.php
│  │  │        │  ├─ Logger.php
│  │  │        │  ├─ ParsesLogConfiguration.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ functions.php
│  │  │        ├─ Macroable
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Traits
│  │  │        │  │  └─ Macroable.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Mail
│  │  │        │  ├─ Attachment.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ MessageSending.php
│  │  │        │  │  └─ MessageSent.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MailManager.php
│  │  │        │  ├─ MailServiceProvider.php
│  │  │        │  ├─ Mailable.php
│  │  │        │  ├─ Mailables
│  │  │        │  │  ├─ Address.php
│  │  │        │  │  ├─ Attachment.php
│  │  │        │  │  ├─ Content.php
│  │  │        │  │  ├─ Envelope.php
│  │  │        │  │  └─ Headers.php
│  │  │        │  ├─ Mailer.php
│  │  │        │  ├─ Markdown.php
│  │  │        │  ├─ Message.php
│  │  │        │  ├─ PendingMail.php
│  │  │        │  ├─ SendQueuedMailable.php
│  │  │        │  ├─ SentMessage.php
│  │  │        │  ├─ TextMessage.php
│  │  │        │  ├─ Transport
│  │  │        │  │  ├─ ArrayTransport.php
│  │  │        │  │  ├─ LogTransport.php
│  │  │        │  │  ├─ ResendTransport.php
│  │  │        │  │  ├─ SesTransport.php
│  │  │        │  │  └─ SesV2Transport.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        ├─ html
│  │  │        │        │  ├─ button.blade.php
│  │  │        │        │  ├─ footer.blade.php
│  │  │        │        │  ├─ header.blade.php
│  │  │        │        │  ├─ layout.blade.php
│  │  │        │        │  ├─ message.blade.php
│  │  │        │        │  ├─ panel.blade.php
│  │  │        │        │  ├─ table.blade.php
│  │  │        │        │  └─ themes
│  │  │        │        │     └─ default.css
│  │  │        │        └─ text
│  │  │        │           ├─ button.blade.php
│  │  │        │           ├─ footer.blade.php
│  │  │        │           ├─ header.blade.php
│  │  │        │           ├─ layout.blade.php
│  │  │        │           ├─ message.blade.php
│  │  │        │           ├─ panel.blade.php
│  │  │        │           └─ table.blade.php
│  │  │        ├─ Notifications
│  │  │        │  ├─ Action.php
│  │  │        │  ├─ AnonymousNotifiable.php
│  │  │        │  ├─ ChannelManager.php
│  │  │        │  ├─ Channels
│  │  │        │  │  ├─ BroadcastChannel.php
│  │  │        │  │  ├─ DatabaseChannel.php
│  │  │        │  │  └─ MailChannel.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ NotificationTableCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ notifications.stub
│  │  │        │  ├─ DatabaseNotification.php
│  │  │        │  ├─ DatabaseNotificationCollection.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ BroadcastNotificationCreated.php
│  │  │        │  │  ├─ NotificationFailed.php
│  │  │        │  │  ├─ NotificationSending.php
│  │  │        │  │  └─ NotificationSent.php
│  │  │        │  ├─ HasDatabaseNotifications.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Messages
│  │  │        │  │  ├─ BroadcastMessage.php
│  │  │        │  │  ├─ DatabaseMessage.php
│  │  │        │  │  ├─ MailMessage.php
│  │  │        │  │  └─ SimpleMessage.php
│  │  │        │  ├─ Notifiable.php
│  │  │        │  ├─ Notification.php
│  │  │        │  ├─ NotificationSender.php
│  │  │        │  ├─ NotificationServiceProvider.php
│  │  │        │  ├─ RoutesNotifications.php
│  │  │        │  ├─ SendQueuedNotifications.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        └─ email.blade.php
│  │  │        ├─ Pagination
│  │  │        │  ├─ AbstractCursorPaginator.php
│  │  │        │  ├─ AbstractPaginator.php
│  │  │        │  ├─ Cursor.php
│  │  │        │  ├─ CursorPaginator.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LengthAwarePaginator.php
│  │  │        │  ├─ PaginationServiceProvider.php
│  │  │        │  ├─ PaginationState.php
│  │  │        │  ├─ Paginator.php
│  │  │        │  ├─ UrlWindow.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        ├─ bootstrap-4.blade.php
│  │  │        │        ├─ bootstrap-5.blade.php
│  │  │        │        ├─ default.blade.php
│  │  │        │        ├─ semantic-ui.blade.php
│  │  │        │        ├─ simple-bootstrap-4.blade.php
│  │  │        │        ├─ simple-bootstrap-5.blade.php
│  │  │        │        ├─ simple-default.blade.php
│  │  │        │        ├─ simple-tailwind.blade.php
│  │  │        │        └─ tailwind.blade.php
│  │  │        ├─ Pipeline
│  │  │        │  ├─ Hub.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Pipeline.php
│  │  │        │  ├─ PipelineServiceProvider.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Process
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ ProcessFailedException.php
│  │  │        │  │  └─ ProcessTimedOutException.php
│  │  │        │  ├─ Factory.php
│  │  │        │  ├─ FakeInvokedProcess.php
│  │  │        │  ├─ FakeProcessDescription.php
│  │  │        │  ├─ FakeProcessResult.php
│  │  │        │  ├─ FakeProcessSequence.php
│  │  │        │  ├─ InvokedProcess.php
│  │  │        │  ├─ InvokedProcessPool.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingProcess.php
│  │  │        │  ├─ Pipe.php
│  │  │        │  ├─ Pool.php
│  │  │        │  ├─ ProcessPoolResults.php
│  │  │        │  ├─ ProcessResult.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Queue
│  │  │        │  ├─ Attributes
│  │  │        │  │  ├─ DeleteWhenMissingModels.php
│  │  │        │  │  └─ WithoutRelations.php
│  │  │        │  ├─ BeanstalkdQueue.php
│  │  │        │  ├─ CallQueuedClosure.php
│  │  │        │  ├─ CallQueuedHandler.php
│  │  │        │  ├─ Capsule
│  │  │        │  │  └─ Manager.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ BeanstalkdConnector.php
│  │  │        │  │  ├─ ConnectorInterface.php
│  │  │        │  │  ├─ DatabaseConnector.php
│  │  │        │  │  ├─ NullConnector.php
│  │  │        │  │  ├─ RedisConnector.php
│  │  │        │  │  ├─ SqsConnector.php
│  │  │        │  │  └─ SyncConnector.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ BatchesTableCommand.php
│  │  │        │  │  ├─ ClearCommand.php
│  │  │        │  │  ├─ FailedTableCommand.php
│  │  │        │  │  ├─ FlushFailedCommand.php
│  │  │        │  │  ├─ ForgetFailedCommand.php
│  │  │        │  │  ├─ ListFailedCommand.php
│  │  │        │  │  ├─ ListenCommand.php
│  │  │        │  │  ├─ MonitorCommand.php
│  │  │        │  │  ├─ PruneBatchesCommand.php
│  │  │        │  │  ├─ PruneFailedJobsCommand.php
│  │  │        │  │  ├─ RestartCommand.php
│  │  │        │  │  ├─ RetryBatchCommand.php
│  │  │        │  │  ├─ RetryCommand.php
│  │  │        │  │  ├─ TableCommand.php
│  │  │        │  │  ├─ WorkCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ batches.stub
│  │  │        │  │     ├─ failed_jobs.stub
│  │  │        │  │     └─ jobs.stub
│  │  │        │  ├─ DatabaseQueue.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ JobAttempted.php
│  │  │        │  │  ├─ JobExceptionOccurred.php
│  │  │        │  │  ├─ JobFailed.php
│  │  │        │  │  ├─ JobPopped.php
│  │  │        │  │  ├─ JobPopping.php
│  │  │        │  │  ├─ JobProcessed.php
│  │  │        │  │  ├─ JobProcessing.php
│  │  │        │  │  ├─ JobQueued.php
│  │  │        │  │  ├─ JobQueueing.php
│  │  │        │  │  ├─ JobReleasedAfterException.php
│  │  │        │  │  ├─ JobRetryRequested.php
│  │  │        │  │  ├─ JobTimedOut.php
│  │  │        │  │  ├─ Looping.php
│  │  │        │  │  ├─ QueueBusy.php
│  │  │        │  │  └─ WorkerStopping.php
│  │  │        │  ├─ Failed
│  │  │        │  │  ├─ CountableFailedJobProvider.php
│  │  │        │  │  ├─ DatabaseFailedJobProvider.php
│  │  │        │  │  ├─ DatabaseUuidFailedJobProvider.php
│  │  │        │  │  ├─ DynamoDbFailedJobProvider.php
│  │  │        │  │  ├─ FailedJobProviderInterface.php
│  │  │        │  │  ├─ FileFailedJobProvider.php
│  │  │        │  │  ├─ NullFailedJobProvider.php
│  │  │        │  │  └─ PrunableFailedJobProvider.php
│  │  │        │  ├─ InteractsWithQueue.php
│  │  │        │  ├─ InvalidPayloadException.php
│  │  │        │  ├─ Jobs
│  │  │        │  │  ├─ BeanstalkdJob.php
│  │  │        │  │  ├─ DatabaseJob.php
│  │  │        │  │  ├─ DatabaseJobRecord.php
│  │  │        │  │  ├─ FakeJob.php
│  │  │        │  │  ├─ Job.php
│  │  │        │  │  ├─ JobName.php
│  │  │        │  │  ├─ RedisJob.php
│  │  │        │  │  ├─ SqsJob.php
│  │  │        │  │  └─ SyncJob.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Listener.php
│  │  │        │  ├─ ListenerOptions.php
│  │  │        │  ├─ LuaScripts.php
│  │  │        │  ├─ ManuallyFailedException.php
│  │  │        │  ├─ MaxAttemptsExceededException.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ RateLimited.php
│  │  │        │  │  ├─ RateLimitedWithRedis.php
│  │  │        │  │  ├─ Skip.php
│  │  │        │  │  ├─ SkipIfBatchCancelled.php
│  │  │        │  │  ├─ ThrottlesExceptions.php
│  │  │        │  │  ├─ ThrottlesExceptionsWithRedis.php
│  │  │        │  │  └─ WithoutOverlapping.php
│  │  │        │  ├─ NullQueue.php
│  │  │        │  ├─ Queue.php
│  │  │        │  ├─ QueueManager.php
│  │  │        │  ├─ QueueServiceProvider.php
│  │  │        │  ├─ README.md
│  │  │        │  ├─ RedisQueue.php
│  │  │        │  ├─ SerializesAndRestoresModelIdentifiers.php
│  │  │        │  ├─ SerializesModels.php
│  │  │        │  ├─ SqsQueue.php
│  │  │        │  ├─ SyncQueue.php
│  │  │        │  ├─ TimeoutExceededException.php
│  │  │        │  ├─ Worker.php
│  │  │        │  ├─ WorkerOptions.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Redis
│  │  │        │  ├─ Connections
│  │  │        │  │  ├─ Connection.php
│  │  │        │  │  ├─ PacksPhpRedisValues.php
│  │  │        │  │  ├─ PhpRedisClusterConnection.php
│  │  │        │  │  ├─ PhpRedisConnection.php
│  │  │        │  │  ├─ PredisClusterConnection.php
│  │  │        │  │  └─ PredisConnection.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ PhpRedisConnector.php
│  │  │        │  │  └─ PredisConnector.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ CommandExecuted.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Limiters
│  │  │        │  │  ├─ ConcurrencyLimiter.php
│  │  │        │  │  ├─ ConcurrencyLimiterBuilder.php
│  │  │        │  │  ├─ DurationLimiter.php
│  │  │        │  │  └─ DurationLimiterBuilder.php
│  │  │        │  ├─ RedisManager.php
│  │  │        │  ├─ RedisServiceProvider.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Routing
│  │  │        │  ├─ AbstractRouteCollection.php
│  │  │        │  ├─ CallableDispatcher.php
│  │  │        │  ├─ CompiledRouteCollection.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ ControllerMakeCommand.php
│  │  │        │  │  ├─ MiddlewareMakeCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ controller.api.stub
│  │  │        │  │     ├─ controller.invokable.stub
│  │  │        │  │     ├─ controller.model.api.stub
│  │  │        │  │     ├─ controller.model.stub
│  │  │        │  │     ├─ controller.nested.api.stub
│  │  │        │  │     ├─ controller.nested.singleton.api.stub
│  │  │        │  │     ├─ controller.nested.singleton.stub
│  │  │        │  │     ├─ controller.nested.stub
│  │  │        │  │     ├─ controller.plain.stub
│  │  │        │  │     ├─ controller.singleton.api.stub
│  │  │        │  │     ├─ controller.singleton.stub
│  │  │        │  │     ├─ controller.stub
│  │  │        │  │     └─ middleware.stub
│  │  │        │  ├─ Contracts
│  │  │        │  │  ├─ CallableDispatcher.php
│  │  │        │  │  └─ ControllerDispatcher.php
│  │  │        │  ├─ Controller.php
│  │  │        │  ├─ ControllerDispatcher.php
│  │  │        │  ├─ ControllerMiddlewareOptions.php
│  │  │        │  ├─ Controllers
│  │  │        │  │  ├─ HasMiddleware.php
│  │  │        │  │  └─ Middleware.php
│  │  │        │  ├─ CreatesRegularExpressionRouteConstraints.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ PreparingResponse.php
│  │  │        │  │  ├─ ResponsePrepared.php
│  │  │        │  │  ├─ RouteMatched.php
│  │  │        │  │  └─ Routing.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ BackedEnumCaseNotFoundException.php
│  │  │        │  │  ├─ InvalidSignatureException.php
│  │  │        │  │  ├─ MissingRateLimiterException.php
│  │  │        │  │  ├─ StreamedResponseException.php
│  │  │        │  │  └─ UrlGenerationException.php
│  │  │        │  ├─ FiltersControllerMiddleware.php
│  │  │        │  ├─ ImplicitRouteBinding.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Matching
│  │  │        │  │  ├─ HostValidator.php
│  │  │        │  │  ├─ MethodValidator.php
│  │  │        │  │  ├─ SchemeValidator.php
│  │  │        │  │  ├─ UriValidator.php
│  │  │        │  │  └─ ValidatorInterface.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ SubstituteBindings.php
│  │  │        │  │  ├─ ThrottleRequests.php
│  │  │        │  │  ├─ ThrottleRequestsWithRedis.php
│  │  │        │  │  └─ ValidateSignature.php
│  │  │        │  ├─ MiddlewareNameResolver.php
│  │  │        │  ├─ PendingResourceRegistration.php
│  │  │        │  ├─ PendingSingletonResourceRegistration.php
│  │  │        │  ├─ Pipeline.php
│  │  │        │  ├─ RedirectController.php
│  │  │        │  ├─ Redirector.php
│  │  │        │  ├─ ResolvesRouteDependencies.php
│  │  │        │  ├─ ResourceRegistrar.php
│  │  │        │  ├─ ResponseFactory.php
│  │  │        │  ├─ Route.php
│  │  │        │  ├─ RouteAction.php
│  │  │        │  ├─ RouteBinding.php
│  │  │        │  ├─ RouteCollection.php
│  │  │        │  ├─ RouteCollectionInterface.php
│  │  │        │  ├─ RouteDependencyResolverTrait.php
│  │  │        │  ├─ RouteFileRegistrar.php
│  │  │        │  ├─ RouteGroup.php
│  │  │        │  ├─ RouteParameterBinder.php
│  │  │        │  ├─ RouteRegistrar.php
│  │  │        │  ├─ RouteSignatureParameters.php
│  │  │        │  ├─ RouteUri.php
│  │  │        │  ├─ RouteUrlGenerator.php
│  │  │        │  ├─ Router.php
│  │  │        │  ├─ RoutingServiceProvider.php
│  │  │        │  ├─ SortedMiddleware.php
│  │  │        │  ├─ UrlGenerator.php
│  │  │        │  ├─ ViewController.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Session
│  │  │        │  ├─ ArraySessionHandler.php
│  │  │        │  ├─ CacheBasedSessionHandler.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ SessionTableCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ database.stub
│  │  │        │  ├─ CookieSessionHandler.php
│  │  │        │  ├─ DatabaseSessionHandler.php
│  │  │        │  ├─ EncryptedStore.php
│  │  │        │  ├─ ExistenceAwareInterface.php
│  │  │        │  ├─ FileSessionHandler.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AuthenticateSession.php
│  │  │        │  │  └─ StartSession.php
│  │  │        │  ├─ NullSessionHandler.php
│  │  │        │  ├─ SessionManager.php
│  │  │        │  ├─ SessionServiceProvider.php
│  │  │        │  ├─ Store.php
│  │  │        │  ├─ SymfonySessionDecorator.php
│  │  │        │  ├─ TokenMismatchException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Support
│  │  │        │  ├─ AggregateServiceProvider.php
│  │  │        │  ├─ Benchmark.php
│  │  │        │  ├─ Carbon.php
│  │  │        │  ├─ Composer.php
│  │  │        │  ├─ ConfigurationUrlParser.php
│  │  │        │  ├─ DateFactory.php
│  │  │        │  ├─ DefaultProviders.php
│  │  │        │  ├─ Defer
│  │  │        │  │  ├─ DeferredCallback.php
│  │  │        │  │  └─ DeferredCallbackCollection.php
│  │  │        │  ├─ Env.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  └─ MathException.php
│  │  │        │  ├─ Facades
│  │  │        │  │  ├─ App.php
│  │  │        │  │  ├─ Artisan.php
│  │  │        │  │  ├─ Auth.php
│  │  │        │  │  ├─ Blade.php
│  │  │        │  │  ├─ Broadcast.php
│  │  │        │  │  ├─ Bus.php
│  │  │        │  │  ├─ Cache.php
│  │  │        │  │  ├─ Concurrency.php
│  │  │        │  │  ├─ Config.php
│  │  │        │  │  ├─ Context.php
│  │  │        │  │  ├─ Cookie.php
│  │  │        │  │  ├─ Crypt.php
│  │  │        │  │  ├─ DB.php
│  │  │        │  │  ├─ Date.php
│  │  │        │  │  ├─ Event.php
│  │  │        │  │  ├─ Exceptions.php
│  │  │        │  │  ├─ Facade.php
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ Gate.php
│  │  │        │  │  ├─ Hash.php
│  │  │        │  │  ├─ Http.php
│  │  │        │  │  ├─ Lang.php
│  │  │        │  │  ├─ Log.php
│  │  │        │  │  ├─ Mail.php
│  │  │        │  │  ├─ Notification.php
│  │  │        │  │  ├─ ParallelTesting.php
│  │  │        │  │  ├─ Password.php
│  │  │        │  │  ├─ Pipeline.php
│  │  │        │  │  ├─ Process.php
│  │  │        │  │  ├─ Queue.php
│  │  │        │  │  ├─ RateLimiter.php
│  │  │        │  │  ├─ Redirect.php
│  │  │        │  │  ├─ Redis.php
│  │  │        │  │  ├─ Request.php
│  │  │        │  │  ├─ Response.php
│  │  │        │  │  ├─ Route.php
│  │  │        │  │  ├─ Schedule.php
│  │  │        │  │  ├─ Schema.php
│  │  │        │  │  ├─ Session.php
│  │  │        │  │  ├─ Storage.php
│  │  │        │  │  ├─ URL.php
│  │  │        │  │  ├─ Validator.php
│  │  │        │  │  ├─ View.php
│  │  │        │  │  └─ Vite.php
│  │  │        │  ├─ Fluent.php
│  │  │        │  ├─ HigherOrderTapProxy.php
│  │  │        │  ├─ HtmlString.php
│  │  │        │  ├─ InteractsWithTime.php
│  │  │        │  ├─ Js.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Lottery.php
│  │  │        │  ├─ Manager.php
│  │  │        │  ├─ MessageBag.php
│  │  │        │  ├─ MultipleInstanceManager.php
│  │  │        │  ├─ NamespacedItemResolver.php
│  │  │        │  ├─ Number.php
│  │  │        │  ├─ Once.php
│  │  │        │  ├─ Onceable.php
│  │  │        │  ├─ Optional.php
│  │  │        │  ├─ Pluralizer.php
│  │  │        │  ├─ ProcessUtils.php
│  │  │        │  ├─ Reflector.php
│  │  │        │  ├─ ServiceProvider.php
│  │  │        │  ├─ Sleep.php
│  │  │        │  ├─ Str.php
│  │  │        │  ├─ Stringable.php
│  │  │        │  ├─ Testing
│  │  │        │  │  └─ Fakes
│  │  │        │  │     ├─ BatchFake.php
│  │  │        │  │     ├─ BatchRepositoryFake.php
│  │  │        │  │     ├─ BusFake.php
│  │  │        │  │     ├─ ChainedBatchTruthTest.php
│  │  │        │  │     ├─ EventFake.php
│  │  │        │  │     ├─ ExceptionHandlerFake.php
│  │  │        │  │     ├─ Fake.php
│  │  │        │  │     ├─ MailFake.php
│  │  │        │  │     ├─ NotificationFake.php
│  │  │        │  │     ├─ PendingBatchFake.php
│  │  │        │  │     ├─ PendingChainFake.php
│  │  │        │  │     ├─ PendingMailFake.php
│  │  │        │  │     └─ QueueFake.php
│  │  │        │  ├─ Timebox.php
│  │  │        │  ├─ Traits
│  │  │        │  │  ├─ CapsuleManagerTrait.php
│  │  │        │  │  ├─ Dumpable.php
│  │  │        │  │  ├─ ForwardsCalls.php
│  │  │        │  │  ├─ InteractsWithData.php
│  │  │        │  │  ├─ Localizable.php
│  │  │        │  │  ├─ ReflectsClosures.php
│  │  │        │  │  └─ Tappable.php
│  │  │        │  ├─ Uri.php
│  │  │        │  ├─ UriQueryString.php
│  │  │        │  ├─ ValidatedInput.php
│  │  │        │  ├─ ViewErrorBag.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ functions.php
│  │  │        │  └─ helpers.php
│  │  │        ├─ Testing
│  │  │        │  ├─ Assert.php
│  │  │        │  ├─ AssertableJsonString.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ AssertsStatusCodes.php
│  │  │        │  │  ├─ RunsInParallel.php
│  │  │        │  │  └─ TestDatabases.php
│  │  │        │  ├─ Constraints
│  │  │        │  │  ├─ ArraySubset.php
│  │  │        │  │  ├─ CountInDatabase.php
│  │  │        │  │  ├─ HasInDatabase.php
│  │  │        │  │  ├─ NotSoftDeletedInDatabase.php
│  │  │        │  │  ├─ SeeInOrder.php
│  │  │        │  │  └─ SoftDeletedInDatabase.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  └─ InvalidArgumentException.php
│  │  │        │  ├─ Fluent
│  │  │        │  │  ├─ AssertableJson.php
│  │  │        │  │  └─ Concerns
│  │  │        │  │     ├─ Debugging.php
│  │  │        │  │     ├─ Has.php
│  │  │        │  │     ├─ Interaction.php
│  │  │        │  │     └─ Matching.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LoggedExceptionCollection.php
│  │  │        │  ├─ ParallelConsoleOutput.php
│  │  │        │  ├─ ParallelRunner.php
│  │  │        │  ├─ ParallelTesting.php
│  │  │        │  ├─ ParallelTestingServiceProvider.php
│  │  │        │  ├─ PendingCommand.php
│  │  │        │  ├─ TestComponent.php
│  │  │        │  ├─ TestResponse.php
│  │  │        │  ├─ TestResponseAssert.php
│  │  │        │  ├─ TestView.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Translation
│  │  │        │  ├─ ArrayLoader.php
│  │  │        │  ├─ CreatesPotentiallyTranslatedStrings.php
│  │  │        │  ├─ FileLoader.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MessageSelector.php
│  │  │        │  ├─ PotentiallyTranslatedString.php
│  │  │        │  ├─ TranslationServiceProvider.php
│  │  │        │  ├─ Translator.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ lang
│  │  │        │     └─ en
│  │  │        │        ├─ auth.php
│  │  │        │        ├─ pagination.php
│  │  │        │        ├─ passwords.php
│  │  │        │        └─ validation.php
│  │  │        ├─ Validation
│  │  │        │  ├─ ClosureValidationRule.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ FilterEmailValidation.php
│  │  │        │  │  ├─ FormatsMessages.php
│  │  │        │  │  ├─ ReplacesAttributes.php
│  │  │        │  │  └─ ValidatesAttributes.php
│  │  │        │  ├─ ConditionalRules.php
│  │  │        │  ├─ DatabasePresenceVerifier.php
│  │  │        │  ├─ DatabasePresenceVerifierInterface.php
│  │  │        │  ├─ Factory.php
│  │  │        │  ├─ InvokableValidationRule.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ NestedRules.php
│  │  │        │  ├─ NotPwnedVerifier.php
│  │  │        │  ├─ PresenceVerifierInterface.php
│  │  │        │  ├─ Rule.php
│  │  │        │  ├─ Rules
│  │  │        │  │  ├─ AnyOf.php
│  │  │        │  │  ├─ ArrayRule.php
│  │  │        │  │  ├─ Can.php
│  │  │        │  │  ├─ DatabaseRule.php
│  │  │        │  │  ├─ Date.php
│  │  │        │  │  ├─ Dimensions.php
│  │  │        │  │  ├─ Email.php
│  │  │        │  │  ├─ Enum.php
│  │  │        │  │  ├─ ExcludeIf.php
│  │  │        │  │  ├─ Exists.php
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ ImageFile.php
│  │  │        │  │  ├─ In.php
│  │  │        │  │  ├─ NotIn.php
│  │  │        │  │  ├─ Numeric.php
│  │  │        │  │  ├─ Password.php
│  │  │        │  │  ├─ ProhibitedIf.php
│  │  │        │  │  ├─ RequiredIf.php
│  │  │        │  │  └─ Unique.php
│  │  │        │  ├─ UnauthorizedException.php
│  │  │        │  ├─ ValidatesWhenResolvedTrait.php
│  │  │        │  ├─ ValidationData.php
│  │  │        │  ├─ ValidationException.php
│  │  │        │  ├─ ValidationRuleParser.php
│  │  │        │  ├─ ValidationServiceProvider.php
│  │  │        │  ├─ Validator.php
│  │  │        │  └─ composer.json
│  │  │        └─ View
│  │  │           ├─ AnonymousComponent.php
│  │  │           ├─ AppendableAttributeValue.php
│  │  │           ├─ Compilers
│  │  │           │  ├─ BladeCompiler.php
│  │  │           │  ├─ Compiler.php
│  │  │           │  ├─ CompilerInterface.php
│  │  │           │  ├─ ComponentTagCompiler.php
│  │  │           │  └─ Concerns
│  │  │           │     ├─ CompilesAuthorizations.php
│  │  │           │     ├─ CompilesClasses.php
│  │  │           │     ├─ CompilesComments.php
│  │  │           │     ├─ CompilesComponents.php
│  │  │           │     ├─ CompilesConditionals.php
│  │  │           │     ├─ CompilesEchos.php
│  │  │           │     ├─ CompilesErrors.php
│  │  │           │     ├─ CompilesFragments.php
│  │  │           │     ├─ CompilesHelpers.php
│  │  │           │     ├─ CompilesIncludes.php
│  │  │           │     ├─ CompilesInjections.php
│  │  │           │     ├─ CompilesJs.php
│  │  │           │     ├─ CompilesJson.php
│  │  │           │     ├─ CompilesLayouts.php
│  │  │           │     ├─ CompilesLoops.php
│  │  │           │     ├─ CompilesRawPhp.php
│  │  │           │     ├─ CompilesSessions.php
│  │  │           │     ├─ CompilesStacks.php
│  │  │           │     ├─ CompilesStyles.php
│  │  │           │     ├─ CompilesTranslations.php
│  │  │           │     └─ CompilesUseStatements.php
│  │  │           ├─ Component.php
│  │  │           ├─ ComponentAttributeBag.php
│  │  │           ├─ ComponentSlot.php
│  │  │           ├─ Concerns
│  │  │           │  ├─ ManagesComponents.php
│  │  │           │  ├─ ManagesEvents.php
│  │  │           │  ├─ ManagesFragments.php
│  │  │           │  ├─ ManagesLayouts.php
│  │  │           │  ├─ ManagesLoops.php
│  │  │           │  ├─ ManagesStacks.php
│  │  │           │  └─ ManagesTranslations.php
│  │  │           ├─ DynamicComponent.php
│  │  │           ├─ Engines
│  │  │           │  ├─ CompilerEngine.php
│  │  │           │  ├─ Engine.php
│  │  │           │  ├─ EngineResolver.php
│  │  │           │  ├─ FileEngine.php
│  │  │           │  └─ PhpEngine.php
│  │  │           ├─ Factory.php
│  │  │           ├─ FileViewFinder.php
│  │  │           ├─ InvokableComponentVariable.php
│  │  │           ├─ LICENSE.md
│  │  │           ├─ Middleware
│  │  │           │  └─ ShareErrorsFromSession.php
│  │  │           ├─ View.php
│  │  │           ├─ ViewException.php
│  │  │           ├─ ViewFinderInterface.php
│  │  │           ├─ ViewName.php
│  │  │           ├─ ViewServiceProvider.php
│  │  │           └─ composer.json
│  │  ├─ pail
│  │  │  ├─ LICENSE.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Console
│  │  │     │  └─ Commands
│  │  │     │     └─ PailCommand.php
│  │  │     ├─ Contracts
│  │  │     │  └─ Printer.php
│  │  │     ├─ File.php
│  │  │     ├─ Files.php
│  │  │     ├─ Guards
│  │  │     │  └─ EnsurePcntlIsAvailable.php
│  │  │     ├─ Handler.php
│  │  │     ├─ LoggerFactory.php
│  │  │     ├─ Options.php
│  │  │     ├─ PailServiceProvider.php
│  │  │     ├─ Printers
│  │  │     │  └─ CliPrinter.php
│  │  │     ├─ ProcessFactory.php
│  │  │     └─ ValueObjects
│  │  │        ├─ MessageLogged.php
│  │  │        └─ Origin
│  │  │           ├─ Console.php
│  │  │           ├─ Http.php
│  │  │           └─ Queue.php
│  │  ├─ pennant
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ pennant.php
│  │  │  ├─ database
│  │  │  │  └─ migrations
│  │  │  │     └─ 2022_11_01_000001_create_features_table.php
│  │  │  ├─ ide.json
│  │  │  ├─ src
│  │  │  │  ├─ Commands
│  │  │  │  │  ├─ FeatureMakeCommand.php
│  │  │  │  │  └─ PurgeCommand.php
│  │  │  │  ├─ Concerns
│  │  │  │  │  └─ HasFeatures.php
│  │  │  │  ├─ Contracts
│  │  │  │  │  ├─ CanListStoredFeatures.php
│  │  │  │  │  ├─ DefinesFeaturesExternally.php
│  │  │  │  │  ├─ Driver.php
│  │  │  │  │  ├─ FeatureScopeSerializeable.php
│  │  │  │  │  ├─ FeatureScopeable.php
│  │  │  │  │  └─ HasFlushableCache.php
│  │  │  │  ├─ Drivers
│  │  │  │  │  ├─ ArrayDriver.php
│  │  │  │  │  ├─ DatabaseDriver.php
│  │  │  │  │  └─ Decorator.php
│  │  │  │  ├─ Events
│  │  │  │  │  ├─ AllFeaturesPurged.php
│  │  │  │  │  ├─ DynamicallyRegisteringFeatureClass.php
│  │  │  │  │  ├─ FeatureDeleted.php
│  │  │  │  │  ├─ FeatureResolved.php
│  │  │  │  │  ├─ FeatureRetrieved.php
│  │  │  │  │  ├─ FeatureUpdated.php
│  │  │  │  │  ├─ FeatureUpdatedForAllScopes.php
│  │  │  │  │  ├─ FeaturesPurged.php
│  │  │  │  │  ├─ UnexpectedNullScopeEncountered.php
│  │  │  │  │  └─ UnknownFeatureResolved.php
│  │  │  │  ├─ Feature.php
│  │  │  │  ├─ FeatureManager.php
│  │  │  │  ├─ LazilyResolvedFeature.php
│  │  │  │  ├─ Middleware
│  │  │  │  │  └─ EnsureFeaturesAreActive.php
│  │  │  │  ├─ Migrations
│  │  │  │  │  └─ PennantMigration.php
│  │  │  │  ├─ PendingScopedFeatureInteraction.php
│  │  │  │  ├─ PennantServiceProvider.php
│  │  │  │  └─ helpers.php
│  │  │  ├─ stubs
│  │  │  │  └─ feature.stub
│  │  │  ├─ testbench.yaml
│  │  │  └─ workbench
│  │  │     ├─ app
│  │  │     │  ├─ Features
│  │  │     │  │  └─ NewApi.php
│  │  │     │  └─ Models
│  │  │     │     ├─ Team.php
│  │  │     │     └─ User.php
│  │  │     └─ database
│  │  │        └─ factories
│  │  │           └─ UserFactory.php
│  │  ├─ pint
│  │  │  ├─ LICENSE.md
│  │  │  ├─ builds
│  │  │  │  └─ pint
│  │  │  └─ composer.json
│  │  ├─ prompts
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ phpunit.xml
│  │  │  └─ src
│  │  │     ├─ Clear.php
│  │  │     ├─ Concerns
│  │  │     │  ├─ Colors.php
│  │  │     │  ├─ Cursor.php
│  │  │     │  ├─ Erase.php
│  │  │     │  ├─ Events.php
│  │  │     │  ├─ FakesInputOutput.php
│  │  │     │  ├─ Fallback.php
│  │  │     │  ├─ Interactivity.php
│  │  │     │  ├─ Scrolling.php
│  │  │     │  ├─ Termwind.php
│  │  │     │  ├─ Themes.php
│  │  │     │  ├─ Truncation.php
│  │  │     │  └─ TypedValue.php
│  │  │     ├─ ConfirmPrompt.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ FormRevertedException.php
│  │  │     │  └─ NonInteractiveValidationException.php
│  │  │     ├─ FormBuilder.php
│  │  │     ├─ FormStep.php
│  │  │     ├─ Key.php
│  │  │     ├─ MultiSearchPrompt.php
│  │  │     ├─ MultiSelectPrompt.php
│  │  │     ├─ Note.php
│  │  │     ├─ Output
│  │  │     │  ├─ BufferedConsoleOutput.php
│  │  │     │  └─ ConsoleOutput.php
│  │  │     ├─ PasswordPrompt.php
│  │  │     ├─ PausePrompt.php
│  │  │     ├─ Progress.php
│  │  │     ├─ Prompt.php
│  │  │     ├─ SearchPrompt.php
│  │  │     ├─ SelectPrompt.php
│  │  │     ├─ Spinner.php
│  │  │     ├─ SuggestPrompt.php
│  │  │     ├─ Support
│  │  │     │  ├─ Result.php
│  │  │     │  └─ Utils.php
│  │  │     ├─ Table.php
│  │  │     ├─ Terminal.php
│  │  │     ├─ TextPrompt.php
│  │  │     ├─ TextareaPrompt.php
│  │  │     ├─ Themes
│  │  │     │  ├─ Contracts
│  │  │     │  │  └─ Scrolling.php
│  │  │     │  └─ Default
│  │  │     │     ├─ ClearRenderer.php
│  │  │     │     ├─ Concerns
│  │  │     │     │  ├─ DrawsBoxes.php
│  │  │     │     │  ├─ DrawsScrollbars.php
│  │  │     │     │  └─ InteractsWithStrings.php
│  │  │     │     ├─ ConfirmPromptRenderer.php
│  │  │     │     ├─ MultiSearchPromptRenderer.php
│  │  │     │     ├─ MultiSelectPromptRenderer.php
│  │  │     │     ├─ NoteRenderer.php
│  │  │     │     ├─ PasswordPromptRenderer.php
│  │  │     │     ├─ PausePromptRenderer.php
│  │  │     │     ├─ ProgressRenderer.php
│  │  │     │     ├─ Renderer.php
│  │  │     │     ├─ SearchPromptRenderer.php
│  │  │     │     ├─ SelectPromptRenderer.php
│  │  │     │     ├─ SpinnerRenderer.php
│  │  │     │     ├─ SuggestPromptRenderer.php
│  │  │     │     ├─ TableRenderer.php
│  │  │     │     ├─ TextPromptRenderer.php
│  │  │     │     └─ TextareaPromptRenderer.php
│  │  │     └─ helpers.php
│  │  ├─ sail
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ bin
│  │  │  │  └─ sail
│  │  │  ├─ composer.json
│  │  │  ├─ database
│  │  │  │  ├─ mariadb
│  │  │  │  │  └─ create-testing-database.sh
│  │  │  │  ├─ mysql
│  │  │  │  │  └─ create-testing-database.sh
│  │  │  │  └─ pgsql
│  │  │  │     └─ create-testing-database.sql
│  │  │  ├─ runtimes
│  │  │  │  ├─ 8.0
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  ├─ 8.1
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  ├─ 8.2
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  ├─ 8.3
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  └─ 8.4
│  │  │  │     ├─ Dockerfile
│  │  │  │     ├─ php.ini
│  │  │  │     ├─ start-container
│  │  │  │     └─ supervisord.conf
│  │  │  ├─ src
│  │  │  │  ├─ Console
│  │  │  │  │  ├─ AddCommand.php
│  │  │  │  │  ├─ Concerns
│  │  │  │  │  │  └─ InteractsWithDockerComposeServices.php
│  │  │  │  │  ├─ InstallCommand.php
│  │  │  │  │  └─ PublishCommand.php
│  │  │  │  └─ SailServiceProvider.php
│  │  │  └─ stubs
│  │  │     ├─ devcontainer.stub
│  │  │     ├─ docker-compose.stub
│  │  │     ├─ mailpit.stub
│  │  │     ├─ mariadb.stub
│  │  │     ├─ meilisearch.stub
│  │  │     ├─ memcached.stub
│  │  │     ├─ minio.stub
│  │  │     ├─ mongodb.stub
│  │  │     ├─ mysql.stub
│  │  │     ├─ pgsql.stub
│  │  │     ├─ redis.stub
│  │  │     ├─ selenium.stub
│  │  │     ├─ soketi.stub
│  │  │     ├─ typesense.stub
│  │  │     └─ valkey.stub
│  │  ├─ scout
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ scout.php
│  │  │  ├─ phpstan.src.neon.dist
│  │  │  ├─ phpstan.types.neon.dist
│  │  │  ├─ src
│  │  │  │  ├─ Attributes
│  │  │  │  │  ├─ SearchUsingFullText.php
│  │  │  │  │  └─ SearchUsingPrefix.php
│  │  │  │  ├─ Builder.php
│  │  │  │  ├─ Console
│  │  │  │  │  ├─ DeleteAllIndexesCommand.php
│  │  │  │  │  ├─ DeleteIndexCommand.php
│  │  │  │  │  ├─ FlushCommand.php
│  │  │  │  │  ├─ ImportCommand.php
│  │  │  │  │  ├─ IndexCommand.php
│  │  │  │  │  └─ SyncIndexSettingsCommand.php
│  │  │  │  ├─ Contracts
│  │  │  │  │  ├─ PaginatesEloquentModels.php
│  │  │  │  │  ├─ PaginatesEloquentModelsUsingDatabase.php
│  │  │  │  │  └─ UpdatesIndexSettings.php
│  │  │  │  ├─ EngineManager.php
│  │  │  │  ├─ Engines
│  │  │  │  │  ├─ Algolia3Engine.php
│  │  │  │  │  ├─ Algolia4Engine.php
│  │  │  │  │  ├─ AlgoliaEngine.php
│  │  │  │  │  ├─ CollectionEngine.php
│  │  │  │  │  ├─ DatabaseEngine.php
│  │  │  │  │  ├─ Engine.php
│  │  │  │  │  ├─ MeilisearchEngine.php
│  │  │  │  │  ├─ NullEngine.php
│  │  │  │  │  └─ TypesenseEngine.php
│  │  │  │  ├─ Events
│  │  │  │  │  ├─ ModelsFlushed.php
│  │  │  │  │  └─ ModelsImported.php
│  │  │  │  ├─ Exceptions
│  │  │  │  │  ├─ NotSupportedException.php
│  │  │  │  │  └─ ScoutException.php
│  │  │  │  ├─ Jobs
│  │  │  │  │  ├─ MakeSearchable.php
│  │  │  │  │  ├─ RemoveFromSearch.php
│  │  │  │  │  └─ RemoveableScoutCollection.php
│  │  │  │  ├─ ModelObserver.php
│  │  │  │  ├─ Scout.php
│  │  │  │  ├─ ScoutServiceProvider.php
│  │  │  │  ├─ Searchable.php
│  │  │  │  └─ SearchableScope.php
│  │  │  ├─ testbench.yaml
│  │  │  ├─ types
│  │  │  │  ├─ Builder.php
│  │  │  │  └─ Searchable.php
│  │  │  └─ workbench
│  │  │     ├─ app
│  │  │     │  ├─ Models
│  │  │     │  │  ├─ Chirp.php
│  │  │     │  │  ├─ SearchableUser.php
│  │  │     │  │  └─ User.php
│  │  │     │  └─ Providers
│  │  │     │     └─ WorkbenchServiceProvider.php
│  │  │     └─ database
│  │  │        ├─ factories
│  │  │        │  ├─ ChirpFactory.php
│  │  │        │  ├─ SearchableUserFactory.php
│  │  │        │  └─ UserFactory.php
│  │  │        └─ migrations
│  │  │           └─ 2024_11_12_030345_create_chirps_table.php
│  │  ├─ serializable-closure
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Contracts
│  │  │     │  ├─ Serializable.php
│  │  │     │  └─ Signer.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ InvalidSignatureException.php
│  │  │     │  ├─ MissingSecretKeyException.php
│  │  │     │  └─ PhpVersionNotSupportedException.php
│  │  │     ├─ SerializableClosure.php
│  │  │     ├─ Serializers
│  │  │     │  ├─ Native.php
│  │  │     │  └─ Signed.php
│  │  │     ├─ Signers
│  │  │     │  └─ Hmac.php
│  │  │     ├─ Support
│  │  │     │  ├─ ClosureScope.php
│  │  │     │  ├─ ClosureStream.php
│  │  │     │  ├─ ReflectionClosure.php
│  │  │     │  └─ SelfReference.php
│  │  │     └─ UnsignedSerializableClosure.php
│  │  ├─ telescope
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ telescope.php
│  │  │  ├─ database
│  │  │  │  ├─ factories
│  │  │  │  │  └─ EntryModelFactory.php
│  │  │  │  └─ migrations
│  │  │  │     └─ 2018_08_08_100000_create_telescope_entries_table.php
│  │  │  ├─ package.json
│  │  │  ├─ public
│  │  │  │  ├─ app-dark.css
│  │  │  │  ├─ app.css
│  │  │  │  ├─ app.js
│  │  │  │  ├─ favicon.ico
│  │  │  │  └─ mix-manifest.json
│  │  │  ├─ resources
│  │  │  │  ├─ js
│  │  │  │  │  ├─ app.js
│  │  │  │  │  ├─ base.js
│  │  │  │  │  ├─ components
│  │  │  │  │  │  ├─ Alert.vue
│  │  │  │  │  │  ├─ CopyClipboard.vue
│  │  │  │  │  │  ├─ ExceptionCodePreview.vue
│  │  │  │  │  │  ├─ IndexScreen.vue
│  │  │  │  │  │  ├─ PreviewScreen.vue
│  │  │  │  │  │  ├─ RelatedEntries.vue
│  │  │  │  │  │  └─ Stacktrace.vue
│  │  │  │  │  ├─ mixins
│  │  │  │  │  │  └─ entriesStyles.js
│  │  │  │  │  ├─ routes.js
│  │  │  │  │  └─ screens
│  │  │  │  │     ├─ batches
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ cache
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ client-requests
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ commands
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ dumps
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ sfdump.js
│  │  │  │  │     ├─ events
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ exceptions
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ gates
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ jobs
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ logs
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ mail
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ models
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ monitoring
│  │  │  │  │     │  └─ index.vue
│  │  │  │  │     ├─ notifications
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ queries
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ redis
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ requests
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     ├─ schedule
│  │  │  │  │     │  ├─ index.vue
│  │  │  │  │     │  └─ preview.vue
│  │  │  │  │     └─ views
│  │  │  │  │        ├─ index.vue
│  │  │  │  │        └─ preview.vue
│  │  │  │  ├─ sass
│  │  │  │  │  ├─ _colors.scss
│  │  │  │  │  ├─ app-dark.scss
│  │  │  │  │  ├─ app.scss
│  │  │  │  │  ├─ base.scss
│  │  │  │  │  └─ syntaxhighlight.scss
│  │  │  │  └─ views
│  │  │  │     └─ layout.blade.php
│  │  │  ├─ routes
│  │  │  │  └─ web.php
│  │  │  ├─ src
│  │  │  │  ├─ AuthorizesRequests.php
│  │  │  │  ├─ Avatar.php
│  │  │  │  ├─ Console
│  │  │  │  │  ├─ ClearCommand.php
│  │  │  │  │  ├─ InstallCommand.php
│  │  │  │  │  ├─ PauseCommand.php
│  │  │  │  │  ├─ PruneCommand.php
│  │  │  │  │  ├─ PublishCommand.php
│  │  │  │  │  └─ ResumeCommand.php
│  │  │  │  ├─ Contracts
│  │  │  │  │  ├─ ClearableRepository.php
│  │  │  │  │  ├─ EntriesRepository.php
│  │  │  │  │  ├─ PrunableRepository.php
│  │  │  │  │  └─ TerminableRepository.php
│  │  │  │  ├─ EntryResult.php
│  │  │  │  ├─ EntryType.php
│  │  │  │  ├─ EntryUpdate.php
│  │  │  │  ├─ ExceptionContext.php
│  │  │  │  ├─ ExtractProperties.php
│  │  │  │  ├─ ExtractTags.php
│  │  │  │  ├─ ExtractsMailableTags.php
│  │  │  │  ├─ FormatModel.php
│  │  │  │  ├─ Http
│  │  │  │  │  ├─ Controllers
│  │  │  │  │  │  ├─ CacheController.php
│  │  │  │  │  │  ├─ ClientRequestController.php
│  │  │  │  │  │  ├─ CommandsController.php
│  │  │  │  │  │  ├─ DumpController.php
│  │  │  │  │  │  ├─ EntriesController.php
│  │  │  │  │  │  ├─ EntryController.php
│  │  │  │  │  │  ├─ EventsController.php
│  │  │  │  │  │  ├─ ExceptionController.php
│  │  │  │  │  │  ├─ GatesController.php
│  │  │  │  │  │  ├─ HomeController.php
│  │  │  │  │  │  ├─ LogController.php
│  │  │  │  │  │  ├─ MailController.php
│  │  │  │  │  │  ├─ MailEmlController.php
│  │  │  │  │  │  ├─ MailHtmlController.php
│  │  │  │  │  │  ├─ ModelsController.php
│  │  │  │  │  │  ├─ MonitoredTagController.php
│  │  │  │  │  │  ├─ NotificationsController.php
│  │  │  │  │  │  ├─ QueriesController.php
│  │  │  │  │  │  ├─ QueueBatchesController.php
│  │  │  │  │  │  ├─ QueueController.php
│  │  │  │  │  │  ├─ RecordingController.php
│  │  │  │  │  │  ├─ RedisController.php
│  │  │  │  │  │  ├─ RequestsController.php
│  │  │  │  │  │  ├─ ScheduleController.php
│  │  │  │  │  │  └─ ViewsController.php
│  │  │  │  │  └─ Middleware
│  │  │  │  │     └─ Authorize.php
│  │  │  │  ├─ IncomingDumpEntry.php
│  │  │  │  ├─ IncomingEntry.php
│  │  │  │  ├─ IncomingExceptionEntry.php
│  │  │  │  ├─ Jobs
│  │  │  │  │  └─ ProcessPendingUpdates.php
│  │  │  │  ├─ ListensForStorageOpportunities.php
│  │  │  │  ├─ RegistersWatchers.php
│  │  │  │  ├─ Storage
│  │  │  │  │  ├─ DatabaseEntriesRepository.php
│  │  │  │  │  ├─ EntryModel.php
│  │  │  │  │  └─ EntryQueryOptions.php
│  │  │  │  ├─ Telescope.php
│  │  │  │  ├─ TelescopeApplicationServiceProvider.php
│  │  │  │  ├─ TelescopeServiceProvider.php
│  │  │  │  └─ Watchers
│  │  │  │     ├─ BatchWatcher.php
│  │  │  │     ├─ CacheWatcher.php
│  │  │  │     ├─ ClientRequestWatcher.php
│  │  │  │     ├─ CommandWatcher.php
│  │  │  │     ├─ DumpWatcher.php
│  │  │  │     ├─ EventWatcher.php
│  │  │  │     ├─ ExceptionWatcher.php
│  │  │  │     ├─ FetchesStackTrace.php
│  │  │  │     ├─ FormatsClosure.php
│  │  │  │     ├─ GateWatcher.php
│  │  │  │     ├─ JobWatcher.php
│  │  │  │     ├─ LogWatcher.php
│  │  │  │     ├─ MailWatcher.php
│  │  │  │     ├─ ModelWatcher.php
│  │  │  │     ├─ NotificationWatcher.php
│  │  │  │     ├─ QueryWatcher.php
│  │  │  │     ├─ RedisWatcher.php
│  │  │  │     ├─ RequestWatcher.php
│  │  │  │     ├─ ScheduleWatcher.php
│  │  │  │     ├─ ViewWatcher.php
│  │  │  │     └─ Watcher.php
│  │  │  ├─ stubs
│  │  │  │  └─ TelescopeServiceProvider.stub
│  │  │  ├─ testbench.yaml
│  │  │  ├─ webpack.mix.js
│  │  │  └─ workbench
│  │  │     ├─ app
│  │  │     │  └─ Providers
│  │  │     │     └─ TelescopeServiceProvider.php
│  │  │     └─ database
│  │  │        └─ seeders
│  │  │           └─ DatabaseSeeder.php
│  │  └─ tinker
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ tinker.php
│  │     └─ src
│  │        ├─ ClassAliasAutoloader.php
│  │        ├─ Console
│  │        │  └─ TinkerCommand.php
│  │        ├─ TinkerCaster.php
│  │        └─ TinkerServiceProvider.php
│  ├─ league
│  │  ├─ commonmark
│  │  │  ├─ .phpstorm.meta.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ CommonMarkConverter.php
│  │  │     ├─ ConverterInterface.php
│  │  │     ├─ Delimiter
│  │  │     │  ├─ Bracket.php
│  │  │     │  ├─ Delimiter.php
│  │  │     │  ├─ DelimiterInterface.php
│  │  │     │  ├─ DelimiterParser.php
│  │  │     │  ├─ DelimiterStack.php
│  │  │     │  └─ Processor
│  │  │     │     ├─ CacheableDelimiterProcessorInterface.php
│  │  │     │     ├─ DelimiterProcessorCollection.php
│  │  │     │     ├─ DelimiterProcessorCollectionInterface.php
│  │  │     │     ├─ DelimiterProcessorInterface.php
│  │  │     │     └─ StaggeredDelimiterProcessor.php
│  │  │     ├─ Environment
│  │  │     │  ├─ Environment.php
│  │  │     │  ├─ EnvironmentAwareInterface.php
│  │  │     │  ├─ EnvironmentBuilderInterface.php
│  │  │     │  └─ EnvironmentInterface.php
│  │  │     ├─ Event
│  │  │     │  ├─ AbstractEvent.php
│  │  │     │  ├─ DocumentParsedEvent.php
│  │  │     │  ├─ DocumentPreParsedEvent.php
│  │  │     │  ├─ DocumentPreRenderEvent.php
│  │  │     │  ├─ DocumentRenderedEvent.php
│  │  │     │  └─ ListenerData.php
│  │  │     ├─ Exception
│  │  │     │  ├─ AlreadyInitializedException.php
│  │  │     │  ├─ CommonMarkException.php
│  │  │     │  ├─ IOException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ LogicException.php
│  │  │     │  ├─ MissingDependencyException.php
│  │  │     │  └─ UnexpectedEncodingException.php
│  │  │     ├─ Extension
│  │  │     │  ├─ Attributes
│  │  │     │  │  ├─ AttributesExtension.php
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  └─ AttributesListener.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Attributes.php
│  │  │     │  │  │  └─ AttributesInline.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ AttributesBlockContinueParser.php
│  │  │     │  │  │  ├─ AttributesBlockStartParser.php
│  │  │     │  │  │  └─ AttributesInlineParser.php
│  │  │     │  │  └─ Util
│  │  │     │  │     └─ AttributesHelper.php
│  │  │     │  ├─ Autolink
│  │  │     │  │  ├─ AutolinkExtension.php
│  │  │     │  │  ├─ EmailAutolinkParser.php
│  │  │     │  │  └─ UrlAutolinkParser.php
│  │  │     │  ├─ CommonMark
│  │  │     │  │  ├─ CommonMarkCoreExtension.php
│  │  │     │  │  ├─ Delimiter
│  │  │     │  │  │  └─ Processor
│  │  │     │  │  │     └─ EmphasisDelimiterProcessor.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Block
│  │  │     │  │  │  │  ├─ BlockQuote.php
│  │  │     │  │  │  │  ├─ FencedCode.php
│  │  │     │  │  │  │  ├─ Heading.php
│  │  │     │  │  │  │  ├─ HtmlBlock.php
│  │  │     │  │  │  │  ├─ IndentedCode.php
│  │  │     │  │  │  │  ├─ ListBlock.php
│  │  │     │  │  │  │  ├─ ListData.php
│  │  │     │  │  │  │  ├─ ListItem.php
│  │  │     │  │  │  │  └─ ThematicBreak.php
│  │  │     │  │  │  └─ Inline
│  │  │     │  │  │     ├─ AbstractWebResource.php
│  │  │     │  │  │     ├─ Code.php
│  │  │     │  │  │     ├─ Emphasis.php
│  │  │     │  │  │     ├─ HtmlInline.php
│  │  │     │  │  │     ├─ Image.php
│  │  │     │  │  │     ├─ Link.php
│  │  │     │  │  │     └─ Strong.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ Block
│  │  │     │  │  │  │  ├─ BlockQuoteParser.php
│  │  │     │  │  │  │  ├─ BlockQuoteStartParser.php
│  │  │     │  │  │  │  ├─ FencedCodeParser.php
│  │  │     │  │  │  │  ├─ FencedCodeStartParser.php
│  │  │     │  │  │  │  ├─ HeadingParser.php
│  │  │     │  │  │  │  ├─ HeadingStartParser.php
│  │  │     │  │  │  │  ├─ HtmlBlockParser.php
│  │  │     │  │  │  │  ├─ HtmlBlockStartParser.php
│  │  │     │  │  │  │  ├─ IndentedCodeParser.php
│  │  │     │  │  │  │  ├─ IndentedCodeStartParser.php
│  │  │     │  │  │  │  ├─ ListBlockParser.php
│  │  │     │  │  │  │  ├─ ListBlockStartParser.php
│  │  │     │  │  │  │  ├─ ListItemParser.php
│  │  │     │  │  │  │  ├─ ThematicBreakParser.php
│  │  │     │  │  │  │  └─ ThematicBreakStartParser.php
│  │  │     │  │  │  └─ Inline
│  │  │     │  │  │     ├─ AutolinkParser.php
│  │  │     │  │  │     ├─ BacktickParser.php
│  │  │     │  │  │     ├─ BangParser.php
│  │  │     │  │  │     ├─ CloseBracketParser.php
│  │  │     │  │  │     ├─ EntityParser.php
│  │  │     │  │  │     ├─ EscapableParser.php
│  │  │     │  │  │     ├─ HtmlInlineParser.php
│  │  │     │  │  │     └─ OpenBracketParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ Block
│  │  │     │  │     │  ├─ BlockQuoteRenderer.php
│  │  │     │  │     │  ├─ FencedCodeRenderer.php
│  │  │     │  │     │  ├─ HeadingRenderer.php
│  │  │     │  │     │  ├─ HtmlBlockRenderer.php
│  │  │     │  │     │  ├─ IndentedCodeRenderer.php
│  │  │     │  │     │  ├─ ListBlockRenderer.php
│  │  │     │  │     │  ├─ ListItemRenderer.php
│  │  │     │  │     │  └─ ThematicBreakRenderer.php
│  │  │     │  │     └─ Inline
│  │  │     │  │        ├─ CodeRenderer.php
│  │  │     │  │        ├─ EmphasisRenderer.php
│  │  │     │  │        ├─ HtmlInlineRenderer.php
│  │  │     │  │        ├─ ImageRenderer.php
│  │  │     │  │        ├─ LinkRenderer.php
│  │  │     │  │        └─ StrongRenderer.php
│  │  │     │  ├─ ConfigurableExtensionInterface.php
│  │  │     │  ├─ DefaultAttributes
│  │  │     │  │  ├─ ApplyDefaultAttributesProcessor.php
│  │  │     │  │  └─ DefaultAttributesExtension.php
│  │  │     │  ├─ DescriptionList
│  │  │     │  │  ├─ DescriptionListExtension.php
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  ├─ ConsecutiveDescriptionListMerger.php
│  │  │     │  │  │  └─ LooseDescriptionHandler.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Description.php
│  │  │     │  │  │  ├─ DescriptionList.php
│  │  │     │  │  │  └─ DescriptionTerm.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ DescriptionContinueParser.php
│  │  │     │  │  │  ├─ DescriptionListContinueParser.php
│  │  │     │  │  │  ├─ DescriptionStartParser.php
│  │  │     │  │  │  └─ DescriptionTermContinueParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ DescriptionListRenderer.php
│  │  │     │  │     ├─ DescriptionRenderer.php
│  │  │     │  │     └─ DescriptionTermRenderer.php
│  │  │     │  ├─ DisallowedRawHtml
│  │  │     │  │  ├─ DisallowedRawHtmlExtension.php
│  │  │     │  │  └─ DisallowedRawHtmlRenderer.php
│  │  │     │  ├─ Embed
│  │  │     │  │  ├─ Bridge
│  │  │     │  │  │  └─ OscaroteroEmbedAdapter.php
│  │  │     │  │  ├─ DomainFilteringAdapter.php
│  │  │     │  │  ├─ Embed.php
│  │  │     │  │  ├─ EmbedAdapterInterface.php
│  │  │     │  │  ├─ EmbedExtension.php
│  │  │     │  │  ├─ EmbedParser.php
│  │  │     │  │  ├─ EmbedProcessor.php
│  │  │     │  │  ├─ EmbedRenderer.php
│  │  │     │  │  └─ EmbedStartParser.php
│  │  │     │  ├─ ExtensionInterface.php
│  │  │     │  ├─ ExternalLink
│  │  │     │  │  ├─ ExternalLinkExtension.php
│  │  │     │  │  └─ ExternalLinkProcessor.php
│  │  │     │  ├─ Footnote
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  ├─ AnonymousFootnotesListener.php
│  │  │     │  │  │  ├─ FixOrphanedFootnotesAndRefsListener.php
│  │  │     │  │  │  ├─ GatherFootnotesListener.php
│  │  │     │  │  │  └─ NumberFootnotesListener.php
│  │  │     │  │  ├─ FootnoteExtension.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Footnote.php
│  │  │     │  │  │  ├─ FootnoteBackref.php
│  │  │     │  │  │  ├─ FootnoteContainer.php
│  │  │     │  │  │  └─ FootnoteRef.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ AnonymousFootnoteRefParser.php
│  │  │     │  │  │  ├─ FootnoteParser.php
│  │  │     │  │  │  ├─ FootnoteRefParser.php
│  │  │     │  │  │  └─ FootnoteStartParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ FootnoteBackrefRenderer.php
│  │  │     │  │     ├─ FootnoteContainerRenderer.php
│  │  │     │  │     ├─ FootnoteRefRenderer.php
│  │  │     │  │     └─ FootnoteRenderer.php
│  │  │     │  ├─ FrontMatter
│  │  │     │  │  ├─ Data
│  │  │     │  │  │  ├─ FrontMatterDataParserInterface.php
│  │  │     │  │  │  ├─ LibYamlFrontMatterParser.php
│  │  │     │  │  │  └─ SymfonyYamlFrontMatterParser.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  └─ InvalidFrontMatterException.php
│  │  │     │  │  ├─ FrontMatterExtension.php
│  │  │     │  │  ├─ FrontMatterParser.php
│  │  │     │  │  ├─ FrontMatterParserInterface.php
│  │  │     │  │  ├─ FrontMatterProviderInterface.php
│  │  │     │  │  ├─ Input
│  │  │     │  │  │  └─ MarkdownInputWithFrontMatter.php
│  │  │     │  │  ├─ Listener
│  │  │     │  │  │  ├─ FrontMatterPostRenderListener.php
│  │  │     │  │  │  └─ FrontMatterPreParser.php
│  │  │     │  │  └─ Output
│  │  │     │  │     └─ RenderedContentWithFrontMatter.php
│  │  │     │  ├─ GithubFlavoredMarkdownExtension.php
│  │  │     │  ├─ HeadingPermalink
│  │  │     │  │  ├─ HeadingPermalink.php
│  │  │     │  │  ├─ HeadingPermalinkExtension.php
│  │  │     │  │  ├─ HeadingPermalinkProcessor.php
│  │  │     │  │  └─ HeadingPermalinkRenderer.php
│  │  │     │  ├─ InlinesOnly
│  │  │     │  │  ├─ ChildRenderer.php
│  │  │     │  │  └─ InlinesOnlyExtension.php
│  │  │     │  ├─ Mention
│  │  │     │  │  ├─ Generator
│  │  │     │  │  │  ├─ CallbackGenerator.php
│  │  │     │  │  │  ├─ MentionGeneratorInterface.php
│  │  │     │  │  │  └─ StringTemplateLinkGenerator.php
│  │  │     │  │  ├─ Mention.php
│  │  │     │  │  ├─ MentionExtension.php
│  │  │     │  │  └─ MentionParser.php
│  │  │     │  ├─ SmartPunct
│  │  │     │  │  ├─ DashParser.php
│  │  │     │  │  ├─ EllipsesParser.php
│  │  │     │  │  ├─ Quote.php
│  │  │     │  │  ├─ QuoteParser.php
│  │  │     │  │  ├─ QuoteProcessor.php
│  │  │     │  │  ├─ ReplaceUnpairedQuotesListener.php
│  │  │     │  │  └─ SmartPunctExtension.php
│  │  │     │  ├─ Strikethrough
│  │  │     │  │  ├─ Strikethrough.php
│  │  │     │  │  ├─ StrikethroughDelimiterProcessor.php
│  │  │     │  │  ├─ StrikethroughExtension.php
│  │  │     │  │  └─ StrikethroughRenderer.php
│  │  │     │  ├─ Table
│  │  │     │  │  ├─ Table.php
│  │  │     │  │  ├─ TableCell.php
│  │  │     │  │  ├─ TableCellRenderer.php
│  │  │     │  │  ├─ TableExtension.php
│  │  │     │  │  ├─ TableParser.php
│  │  │     │  │  ├─ TableRenderer.php
│  │  │     │  │  ├─ TableRow.php
│  │  │     │  │  ├─ TableRowRenderer.php
│  │  │     │  │  ├─ TableSection.php
│  │  │     │  │  ├─ TableSectionRenderer.php
│  │  │     │  │  └─ TableStartParser.php
│  │  │     │  ├─ TableOfContents
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ TableOfContents.php
│  │  │     │  │  │  └─ TableOfContentsPlaceholder.php
│  │  │     │  │  ├─ Normalizer
│  │  │     │  │  │  ├─ AsIsNormalizerStrategy.php
│  │  │     │  │  │  ├─ FlatNormalizerStrategy.php
│  │  │     │  │  │  ├─ NormalizerStrategyInterface.php
│  │  │     │  │  │  └─ RelativeNormalizerStrategy.php
│  │  │     │  │  ├─ TableOfContentsBuilder.php
│  │  │     │  │  ├─ TableOfContentsExtension.php
│  │  │     │  │  ├─ TableOfContentsGenerator.php
│  │  │     │  │  ├─ TableOfContentsGeneratorInterface.php
│  │  │     │  │  ├─ TableOfContentsPlaceholderParser.php
│  │  │     │  │  ├─ TableOfContentsPlaceholderRenderer.php
│  │  │     │  │  └─ TableOfContentsRenderer.php
│  │  │     │  └─ TaskList
│  │  │     │     ├─ TaskListExtension.php
│  │  │     │     ├─ TaskListItemMarker.php
│  │  │     │     ├─ TaskListItemMarkerParser.php
│  │  │     │     └─ TaskListItemMarkerRenderer.php
│  │  │     ├─ GithubFlavoredMarkdownConverter.php
│  │  │     ├─ Input
│  │  │     │  ├─ MarkdownInput.php
│  │  │     │  └─ MarkdownInputInterface.php
│  │  │     ├─ MarkdownConverter.php
│  │  │     ├─ MarkdownConverterInterface.php
│  │  │     ├─ Node
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ AbstractBlock.php
│  │  │     │  │  ├─ Document.php
│  │  │     │  │  ├─ Paragraph.php
│  │  │     │  │  └─ TightBlockInterface.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ AbstractInline.php
│  │  │     │  │  ├─ AbstractStringContainer.php
│  │  │     │  │  ├─ AdjacentTextMerger.php
│  │  │     │  │  ├─ DelimitedInterface.php
│  │  │     │  │  ├─ Newline.php
│  │  │     │  │  └─ Text.php
│  │  │     │  ├─ Node.php
│  │  │     │  ├─ NodeIterator.php
│  │  │     │  ├─ NodeWalker.php
│  │  │     │  ├─ NodeWalkerEvent.php
│  │  │     │  ├─ Query
│  │  │     │  │  ├─ AndExpr.php
│  │  │     │  │  ├─ ExpressionInterface.php
│  │  │     │  │  └─ OrExpr.php
│  │  │     │  ├─ Query.php
│  │  │     │  ├─ RawMarkupContainerInterface.php
│  │  │     │  ├─ StringContainerHelper.php
│  │  │     │  └─ StringContainerInterface.php
│  │  │     ├─ Normalizer
│  │  │     │  ├─ SlugNormalizer.php
│  │  │     │  ├─ TextNormalizer.php
│  │  │     │  ├─ TextNormalizerInterface.php
│  │  │     │  ├─ UniqueSlugNormalizer.php
│  │  │     │  └─ UniqueSlugNormalizerInterface.php
│  │  │     ├─ Output
│  │  │     │  ├─ RenderedContent.php
│  │  │     │  └─ RenderedContentInterface.php
│  │  │     ├─ Parser
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ AbstractBlockContinueParser.php
│  │  │     │  │  ├─ BlockContinue.php
│  │  │     │  │  ├─ BlockContinueParserInterface.php
│  │  │     │  │  ├─ BlockContinueParserWithInlinesInterface.php
│  │  │     │  │  ├─ BlockStart.php
│  │  │     │  │  ├─ BlockStartParserInterface.php
│  │  │     │  │  ├─ DocumentBlockParser.php
│  │  │     │  │  ├─ ParagraphParser.php
│  │  │     │  │  └─ SkipLinesStartingWithLettersParser.php
│  │  │     │  ├─ Cursor.php
│  │  │     │  ├─ CursorState.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ InlineParserInterface.php
│  │  │     │  │  ├─ InlineParserMatch.php
│  │  │     │  │  └─ NewlineParser.php
│  │  │     │  ├─ InlineParserContext.php
│  │  │     │  ├─ InlineParserEngine.php
│  │  │     │  ├─ InlineParserEngineInterface.php
│  │  │     │  ├─ MarkdownParser.php
│  │  │     │  ├─ MarkdownParserInterface.php
│  │  │     │  ├─ MarkdownParserState.php
│  │  │     │  ├─ MarkdownParserStateInterface.php
│  │  │     │  └─ ParserLogicException.php
│  │  │     ├─ Reference
│  │  │     │  ├─ MemoryLimitedReferenceMap.php
│  │  │     │  ├─ Reference.php
│  │  │     │  ├─ ReferenceInterface.php
│  │  │     │  ├─ ReferenceMap.php
│  │  │     │  ├─ ReferenceMapInterface.php
│  │  │     │  ├─ ReferenceParser.php
│  │  │     │  └─ ReferenceableInterface.php
│  │  │     ├─ Renderer
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ DocumentRenderer.php
│  │  │     │  │  └─ ParagraphRenderer.php
│  │  │     │  ├─ ChildNodeRendererInterface.php
│  │  │     │  ├─ DocumentRendererInterface.php
│  │  │     │  ├─ HtmlDecorator.php
│  │  │     │  ├─ HtmlRenderer.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ NewlineRenderer.php
│  │  │     │  │  └─ TextRenderer.php
│  │  │     │  ├─ MarkdownRendererInterface.php
│  │  │     │  ├─ NoMatchingRendererException.php
│  │  │     │  └─ NodeRendererInterface.php
│  │  │     ├─ Util
│  │  │     │  ├─ ArrayCollection.php
│  │  │     │  ├─ Html5EntityDecoder.php
│  │  │     │  ├─ HtmlElement.php
│  │  │     │  ├─ HtmlFilter.php
│  │  │     │  ├─ LinkParserHelper.php
│  │  │     │  ├─ PrioritizedList.php
│  │  │     │  ├─ RegexHelper.php
│  │  │     │  ├─ SpecReader.php
│  │  │     │  ├─ UrlEncoder.php
│  │  │     │  └─ Xml.php
│  │  │     └─ Xml
│  │  │        ├─ FallbackNodeXmlRenderer.php
│  │  │        ├─ MarkdownToXmlConverter.php
│  │  │        ├─ XmlNodeRendererInterface.php
│  │  │        └─ XmlRenderer.php
│  │  ├─ config
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Configuration.php
│  │  │     ├─ ConfigurationAwareInterface.php
│  │  │     ├─ ConfigurationBuilderInterface.php
│  │  │     ├─ ConfigurationInterface.php
│  │  │     ├─ ConfigurationProviderInterface.php
│  │  │     ├─ Exception
│  │  │     │  ├─ ConfigurationExceptionInterface.php
│  │  │     │  ├─ InvalidConfigurationException.php
│  │  │     │  ├─ UnknownOptionException.php
│  │  │     │  └─ ValidationException.php
│  │  │     ├─ MutableConfigurationInterface.php
│  │  │     ├─ ReadOnlyConfiguration.php
│  │  │     └─ SchemaBuilderInterface.php
│  │  ├─ flysystem
│  │  │  ├─ INFO.md
│  │  │  ├─ LICENSE
│  │  │  ├─ composer.json
│  │  │  ├─ readme.md
│  │  │  └─ src
│  │  │     ├─ CalculateChecksumFromStream.php
│  │  │     ├─ ChecksumAlgoIsNotSupported.php
│  │  │     ├─ ChecksumProvider.php
│  │  │     ├─ Config.php
│  │  │     ├─ CorruptedPathDetected.php
│  │  │     ├─ DecoratedAdapter.php
│  │  │     ├─ DirectoryAttributes.php
│  │  │     ├─ DirectoryListing.php
│  │  │     ├─ FileAttributes.php
│  │  │     ├─ Filesystem.php
│  │  │     ├─ FilesystemAdapter.php
│  │  │     ├─ FilesystemException.php
│  │  │     ├─ FilesystemOperationFailed.php
│  │  │     ├─ FilesystemOperator.php
│  │  │     ├─ FilesystemReader.php
│  │  │     ├─ FilesystemWriter.php
│  │  │     ├─ InvalidStreamProvided.php
│  │  │     ├─ InvalidVisibilityProvided.php
│  │  │     ├─ MountManager.php
│  │  │     ├─ PathNormalizer.php
│  │  │     ├─ PathPrefixer.php
│  │  │     ├─ PathTraversalDetected.php
│  │  │     ├─ PortableVisibilityGuard.php
│  │  │     ├─ ProxyArrayAccessToProperties.php
│  │  │     ├─ ResolveIdenticalPathConflict.php
│  │  │     ├─ StorageAttributes.php
│  │  │     ├─ SymbolicLinkEncountered.php
│  │  │     ├─ UnableToCheckDirectoryExistence.php
│  │  │     ├─ UnableToCheckExistence.php
│  │  │     ├─ UnableToCheckFileExistence.php
│  │  │     ├─ UnableToCopyFile.php
│  │  │     ├─ UnableToCreateDirectory.php
│  │  │     ├─ UnableToDeleteDirectory.php
│  │  │     ├─ UnableToDeleteFile.php
│  │  │     ├─ UnableToGeneratePublicUrl.php
│  │  │     ├─ UnableToGenerateTemporaryUrl.php
│  │  │     ├─ UnableToListContents.php
│  │  │     ├─ UnableToMountFilesystem.php
│  │  │     ├─ UnableToMoveFile.php
│  │  │     ├─ UnableToProvideChecksum.php
│  │  │     ├─ UnableToReadFile.php
│  │  │     ├─ UnableToResolveFilesystemMount.php
│  │  │     ├─ UnableToRetrieveMetadata.php
│  │  │     ├─ UnableToSetVisibility.php
│  │  │     ├─ UnableToWriteFile.php
│  │  │     ├─ UnixVisibility
│  │  │     │  ├─ PortableVisibilityConverter.php
│  │  │     │  └─ VisibilityConverter.php
│  │  │     ├─ UnreadableFileEncountered.php
│  │  │     ├─ UrlGeneration
│  │  │     │  ├─ ChainedPublicUrlGenerator.php
│  │  │     │  ├─ PrefixPublicUrlGenerator.php
│  │  │     │  ├─ PublicUrlGenerator.php
│  │  │     │  ├─ ShardedPrefixPublicUrlGenerator.php
│  │  │     │  └─ TemporaryUrlGenerator.php
│  │  │     ├─ Visibility.php
│  │  │     └─ WhitespacePathNormalizer.php
│  │  ├─ flysystem-local
│  │  │  ├─ FallbackMimeTypeDetector.php
│  │  │  ├─ LICENSE
│  │  │  ├─ LocalFilesystemAdapter.php
│  │  │  └─ composer.json
│  │  ├─ mime-type-detection
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ EmptyExtensionToMimeTypeMap.php
│  │  │     ├─ ExtensionLookup.php
│  │  │     ├─ ExtensionMimeTypeDetector.php
│  │  │     ├─ ExtensionToMimeTypeMap.php
│  │  │     ├─ FinfoMimeTypeDetector.php
│  │  │     ├─ GeneratedExtensionToMimeTypeMap.php
│  │  │     ├─ MimeTypeDetector.php
│  │  │     └─ OverridingExtensionToMimeTypeMap.php
│  │  ├─ uri
│  │  │  ├─ BaseUri.php
│  │  │  ├─ Http.php
│  │  │  ├─ HttpFactory.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Uri.php
│  │  │  ├─ UriInfo.php
│  │  │  ├─ UriResolver.php
│  │  │  ├─ UriTemplate
│  │  │  │  ├─ Expression.php
│  │  │  │  ├─ Operator.php
│  │  │  │  ├─ Template.php
│  │  │  │  ├─ TemplateCanNotBeExpanded.php
│  │  │  │  ├─ VarSpecifier.php
│  │  │  │  └─ VariableBag.php
│  │  │  ├─ UriTemplate.php
│  │  │  └─ composer.json
│  │  └─ uri-interfaces
│  │     ├─ Contracts
│  │     │  ├─ AuthorityInterface.php
│  │     │  ├─ DataPathInterface.php
│  │     │  ├─ DomainHostInterface.php
│  │     │  ├─ FragmentInterface.php
│  │     │  ├─ HostInterface.php
│  │     │  ├─ IpHostInterface.php
│  │     │  ├─ PathInterface.php
│  │     │  ├─ PortInterface.php
│  │     │  ├─ QueryInterface.php
│  │     │  ├─ SegmentedPathInterface.php
│  │     │  ├─ UriAccess.php
│  │     │  ├─ UriComponentInterface.php
│  │     │  ├─ UriException.php
│  │     │  ├─ UriInterface.php
│  │     │  └─ UserInfoInterface.php
│  │     ├─ Encoder.php
│  │     ├─ Exceptions
│  │     │  ├─ ConversionFailed.php
│  │     │  ├─ MissingFeature.php
│  │     │  ├─ OffsetOutOfBounds.php
│  │     │  └─ SyntaxError.php
│  │     ├─ FeatureDetection.php
│  │     ├─ IPv4
│  │     │  ├─ BCMathCalculator.php
│  │     │  ├─ Calculator.php
│  │     │  ├─ Converter.php
│  │     │  ├─ GMPCalculator.php
│  │     │  └─ NativeCalculator.php
│  │     ├─ IPv6
│  │     │  └─ Converter.php
│  │     ├─ Idna
│  │     │  ├─ Converter.php
│  │     │  ├─ Error.php
│  │     │  ├─ Option.php
│  │     │  └─ Result.php
│  │     ├─ KeyValuePair
│  │     │  └─ Converter.php
│  │     ├─ LICENSE
│  │     ├─ QueryString.php
│  │     ├─ UriString.php
│  │     └─ composer.json
│  ├─ livewire
│  │  └─ livewire
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ livewire.php
│  │     ├─ dist
│  │     │  ├─ livewire.esm.js
│  │     │  ├─ livewire.esm.js.map
│  │     │  ├─ livewire.js
│  │     │  ├─ livewire.min.js
│  │     │  ├─ livewire.min.js.map
│  │     │  └─ manifest.json
│  │     └─ src
│  │        ├─ Attribute.php
│  │        ├─ Attributes
│  │        │  ├─ Computed.php
│  │        │  ├─ Isolate.php
│  │        │  ├─ Js.php
│  │        │  ├─ Layout.php
│  │        │  ├─ Lazy.php
│  │        │  ├─ Locked.php
│  │        │  ├─ Modelable.php
│  │        │  ├─ On.php
│  │        │  ├─ Reactive.php
│  │        │  ├─ Renderless.php
│  │        │  ├─ Rule.php
│  │        │  ├─ Session.php
│  │        │  ├─ Title.php
│  │        │  ├─ Url.php
│  │        │  └─ Validate.php
│  │        ├─ Component.php
│  │        ├─ ComponentHook.php
│  │        ├─ ComponentHookRegistry.php
│  │        ├─ Concerns
│  │        │  └─ InteractsWithProperties.php
│  │        ├─ Drawer
│  │        │  ├─ BaseUtils.php
│  │        │  ├─ ImplicitRouteBinding.php
│  │        │  ├─ Regexes.php
│  │        │  └─ Utils.php
│  │        ├─ EventBus.php
│  │        ├─ Exceptions
│  │        │  ├─ BypassViewHandler.php
│  │        │  ├─ ComponentAttributeMissingOnDynamicComponentException.php
│  │        │  ├─ ComponentNotFoundException.php
│  │        │  ├─ EventHandlerDoesNotExist.php
│  │        │  ├─ LivewirePageExpiredBecauseNewDeploymentHasSignificantEnoughChanges.php
│  │        │  ├─ MethodNotFoundException.php
│  │        │  ├─ MissingRulesException.php
│  │        │  ├─ NonPublicComponentMethodCall.php
│  │        │  ├─ PropertyNotFoundException.php
│  │        │  ├─ PublicPropertyNotFoundException.php
│  │        │  └─ RootTagMissingFromViewException.php
│  │        ├─ Features
│  │        │  ├─ SupportAccessingParent
│  │        │  ├─ SupportAttributes
│  │        │  │  ├─ Attribute.php
│  │        │  │  ├─ AttributeCollection.php
│  │        │  │  ├─ AttributeLevel.php
│  │        │  │  ├─ HandlesAttributes.php
│  │        │  │  └─ SupportAttributes.php
│  │        │  ├─ SupportAutoInjectedAssets
│  │        │  │  └─ SupportAutoInjectedAssets.php
│  │        │  ├─ SupportBladeAttributes
│  │        │  │  └─ SupportBladeAttributes.php
│  │        │  ├─ SupportChecksumErrorDebugging
│  │        │  │  └─ SupportChecksumErrorDebugging.php
│  │        │  ├─ SupportComputed
│  │        │  │  ├─ BaseComputed.php
│  │        │  │  ├─ CannotCallComputedDirectlyException.php
│  │        │  │  └─ SupportLegacyComputedPropertySyntax.php
│  │        │  ├─ SupportConsoleCommands
│  │        │  │  ├─ Commands
│  │        │  │  │  ├─ AttributeCommand.php
│  │        │  │  │  ├─ ComponentParser.php
│  │        │  │  │  ├─ ComponentParserFromExistingComponent.php
│  │        │  │  │  ├─ CopyCommand.php
│  │        │  │  │  ├─ CpCommand.php
│  │        │  │  │  ├─ DeleteCommand.php
│  │        │  │  │  ├─ FileManipulationCommand.php
│  │        │  │  │  ├─ FormCommand.php
│  │        │  │  │  ├─ LayoutCommand.php
│  │        │  │  │  ├─ MakeCommand.php
│  │        │  │  │  ├─ MakeLivewireCommand.php
│  │        │  │  │  ├─ MoveCommand.php
│  │        │  │  │  ├─ MvCommand.php
│  │        │  │  │  ├─ PublishCommand.php
│  │        │  │  │  ├─ RmCommand.php
│  │        │  │  │  ├─ S3CleanupCommand.php
│  │        │  │  │  ├─ StubsCommand.php
│  │        │  │  │  ├─ TouchCommand.php
│  │        │  │  │  ├─ Upgrade
│  │        │  │  │  │  ├─ AddLiveModifierToEntangleDirectives.php
│  │        │  │  │  │  ├─ AddLiveModifierToWireModelDirectives.php
│  │        │  │  │  │  ├─ ChangeDefaultLayoutView.php
│  │        │  │  │  │  ├─ ChangeDefaultNamespace.php
│  │        │  │  │  │  ├─ ChangeForgetComputedToUnset.php
│  │        │  │  │  │  ├─ ChangeLazyToBlurModifierOnWireModelDirectives.php
│  │        │  │  │  │  ├─ ChangeTestAssertionMethods.php
│  │        │  │  │  │  ├─ ChangeWireLoadDirectiveToWireInit.php
│  │        │  │  │  │  ├─ ClearViewCache.php
│  │        │  │  │  │  ├─ RemoveDeferModifierFromEntangleDirectives.php
│  │        │  │  │  │  ├─ RemoveDeferModifierFromWireModelDirectives.php
│  │        │  │  │  │  ├─ RemovePrefetchModifierFromWireClickDirective.php
│  │        │  │  │  │  ├─ RemovePreventModifierFromWireSubmitDirective.php
│  │        │  │  │  │  ├─ ReplaceEmitWithDispatch.php
│  │        │  │  │  │  ├─ ReplaceTemporaryUploadedFileNamespace.php
│  │        │  │  │  │  ├─ RepublishNavigation.php
│  │        │  │  │  │  ├─ ThirdPartyUpgradeNotice.php
│  │        │  │  │  │  ├─ UpgradeAlpineInstructions.php
│  │        │  │  │  │  ├─ UpgradeConfigInstructions.php
│  │        │  │  │  │  ├─ UpgradeIntroduction.php
│  │        │  │  │  │  └─ UpgradeStep.php
│  │        │  │  │  ├─ UpgradeCommand.php
│  │        │  │  │  ├─ livewire.attribute.stub
│  │        │  │  │  ├─ livewire.form.stub
│  │        │  │  │  ├─ livewire.inline.stub
│  │        │  │  │  ├─ livewire.layout.stub
│  │        │  │  │  ├─ livewire.pest.stub
│  │        │  │  │  ├─ livewire.stub
│  │        │  │  │  ├─ livewire.test.stub
│  │        │  │  │  ├─ livewire.view.stub
│  │        │  │  │  └─ the-tao.php
│  │        │  │  └─ SupportConsoleCommands.php
│  │        │  ├─ SupportDataBinding
│  │        │  ├─ SupportDisablingBackButtonCache
│  │        │  │  ├─ DisableBackButtonCacheMiddleware.php
│  │        │  │  ├─ HandlesDisablingBackButtonCache.php
│  │        │  │  └─ SupportDisablingBackButtonCache.php
│  │        │  ├─ SupportEntangle
│  │        │  │  └─ SupportEntangle.php
│  │        │  ├─ SupportErrorResponses
│  │        │  ├─ SupportEvents
│  │        │  │  ├─ BaseOn.php
│  │        │  │  ├─ Event.php
│  │        │  │  ├─ HandlesEvents.php
│  │        │  │  ├─ SupportEvents.php
│  │        │  │  ├─ TestsEvents.php
│  │        │  │  └─ fake-echo.js
│  │        │  ├─ SupportFileDownloads
│  │        │  │  ├─ SupportFileDownloads.php
│  │        │  │  └─ TestsFileDownloads.php
│  │        │  ├─ SupportFileUploads
│  │        │  │  ├─ FileNotPreviewableException.php
│  │        │  │  ├─ FilePreviewController.php
│  │        │  │  ├─ FileUploadConfiguration.php
│  │        │  │  ├─ FileUploadController.php
│  │        │  │  ├─ FileUploadSynth.php
│  │        │  │  ├─ GenerateSignedUploadUrl.php
│  │        │  │  ├─ MissingFileUploadsTraitException.php
│  │        │  │  ├─ S3DoesntSupportMultipleFileUploads.php
│  │        │  │  ├─ SupportFileUploads.php
│  │        │  │  ├─ TemporaryUploadedFile.php
│  │        │  │  ├─ WithFileUploads.php
│  │        │  │  ├─ browser_test_image.png
│  │        │  │  ├─ browser_test_image2.png
│  │        │  │  └─ browser_test_image_big.jpg
│  │        │  ├─ SupportFormObjects
│  │        │  │  ├─ Form.php
│  │        │  │  ├─ FormObjectSynth.php
│  │        │  │  ├─ HandlesFormObjects.php
│  │        │  │  └─ SupportFormObjects.php
│  │        │  ├─ SupportIsolating
│  │        │  │  ├─ BaseIsolate.php
│  │        │  │  └─ SupportIsolating.php
│  │        │  ├─ SupportJsEvaluation
│  │        │  │  ├─ BaseJs.php
│  │        │  │  ├─ HandlesJsEvaluation.php
│  │        │  │  └─ SupportJsEvaluation.php
│  │        │  ├─ SupportLazyLoading
│  │        │  │  ├─ BaseLazy.php
│  │        │  │  └─ SupportLazyLoading.php
│  │        │  ├─ SupportLegacyModels
│  │        │  │  ├─ CannotBindToModelDataWithoutValidationRuleException.php
│  │        │  │  ├─ EloquentCollectionSynth.php
│  │        │  │  ├─ EloquentModelSynth.php
│  │        │  │  └─ SupportLegacyModels.php
│  │        │  ├─ SupportLifecycleHooks
│  │        │  │  ├─ DirectlyCallingLifecycleHooksNotAllowedException.php
│  │        │  │  └─ SupportLifecycleHooks.php
│  │        │  ├─ SupportLocales
│  │        │  │  └─ SupportLocales.php
│  │        │  ├─ SupportLockedProperties
│  │        │  │  ├─ BaseLocked.php
│  │        │  │  └─ CannotUpdateLockedPropertyException.php
│  │        │  ├─ SupportModels
│  │        │  │  ├─ EloquentCollectionSynth.php
│  │        │  │  ├─ ModelSynth.php
│  │        │  │  └─ SupportModels.php
│  │        │  ├─ SupportMorphAwareIfStatement
│  │        │  │  └─ SupportMorphAwareIfStatement.php
│  │        │  ├─ SupportMultipleRootElementDetection
│  │        │  │  ├─ MultipleRootElementsDetectedException.php
│  │        │  │  └─ SupportMultipleRootElementDetection.php
│  │        │  ├─ SupportNavigate
│  │        │  │  ├─ SupportNavigate.php
│  │        │  │  └─ test-views
│  │        │  │     ├─ changed-layout.blade.php
│  │        │  │     ├─ changed-tracked-layout.blade.php
│  │        │  │     ├─ html-attributes1.blade.php
│  │        │  │     ├─ html-attributes2.blade.php
│  │        │  │     ├─ layout-with-navigate-outside.blade.php
│  │        │  │     ├─ layout-with-noscript.blade.php
│  │        │  │     ├─ layout.blade.php
│  │        │  │     ├─ navbar-sidebar.blade.php
│  │        │  │     ├─ test-navigate-asset.js
│  │        │  │     └─ tracked-layout.blade.php
│  │        │  ├─ SupportNestedComponentListeners
│  │        │  │  └─ SupportNestedComponentListeners.php
│  │        │  ├─ SupportNestingComponents
│  │        │  │  └─ SupportNestingComponents.php
│  │        │  ├─ SupportPageComponents
│  │        │  │  ├─ BaseLayout.php
│  │        │  │  ├─ BaseTitle.php
│  │        │  │  ├─ HandlesPageComponents.php
│  │        │  │  ├─ MissingLayoutException.php
│  │        │  │  ├─ PageComponentConfig.php
│  │        │  │  └─ SupportPageComponents.php
│  │        │  ├─ SupportPagination
│  │        │  │  ├─ HandlesPagination.php
│  │        │  │  ├─ PaginationUrl.php
│  │        │  │  ├─ SupportPagination.php
│  │        │  │  ├─ WithoutUrlPagination.php
│  │        │  │  └─ views
│  │        │  │     ├─ bootstrap.blade.php
│  │        │  │     ├─ simple-bootstrap.blade.php
│  │        │  │     ├─ simple-tailwind.blade.php
│  │        │  │     └─ tailwind.blade.php
│  │        │  ├─ SupportPolling
│  │        │  ├─ SupportQueryString
│  │        │  │  ├─ BaseUrl.php
│  │        │  │  └─ SupportQueryString.php
│  │        │  ├─ SupportReactiveProps
│  │        │  │  ├─ BaseReactive.php
│  │        │  │  ├─ CannotMutateReactivePropException.php
│  │        │  │  └─ SupportReactiveProps.php
│  │        │  ├─ SupportRedirects
│  │        │  │  ├─ HandlesRedirects.php
│  │        │  │  ├─ Redirector.php
│  │        │  │  ├─ SupportRedirects.php
│  │        │  │  └─ TestsRedirects.php
│  │        │  ├─ SupportScriptsAndAssets
│  │        │  │  ├─ SupportScriptsAndAssets.php
│  │        │  │  ├─ non-livewire-asset.js
│  │        │  │  └─ test.js
│  │        │  ├─ SupportSession
│  │        │  │  └─ BaseSession.php
│  │        │  ├─ SupportStdClasses
│  │        │  ├─ SupportStreaming
│  │        │  │  ├─ HandlesStreaming.php
│  │        │  │  └─ SupportStreaming.php
│  │        │  ├─ SupportTeleporting
│  │        │  │  └─ SupportTeleporting.php
│  │        │  ├─ SupportTesting
│  │        │  │  ├─ ComponentState.php
│  │        │  │  ├─ DuskBrowserMacros.php
│  │        │  │  ├─ DuskTestable.php
│  │        │  │  ├─ InitialRender.php
│  │        │  │  ├─ MakesAssertions.php
│  │        │  │  ├─ Render.php
│  │        │  │  ├─ RequestBroker.php
│  │        │  │  ├─ ShowDuskComponent.php
│  │        │  │  ├─ SubsequentRender.php
│  │        │  │  ├─ SupportTesting.php
│  │        │  │  └─ Testable.php
│  │        │  ├─ SupportTransitions
│  │        │  ├─ SupportValidation
│  │        │  │  ├─ BaseRule.php
│  │        │  │  ├─ BaseValidate.php
│  │        │  │  ├─ HandlesValidation.php
│  │        │  │  ├─ SupportValidation.php
│  │        │  │  └─ TestsValidation.php
│  │        │  ├─ SupportWireConfirm
│  │        │  ├─ SupportWireCurrent
│  │        │  │  └─ test-views
│  │        │  │     └─ navbar-sidebar.blade.php
│  │        │  ├─ SupportWireIgnore
│  │        │  ├─ SupportWireLoading
│  │        │  │  └─ browser_test_image.png
│  │        │  ├─ SupportWireModelingNestedComponents
│  │        │  │  ├─ BaseModelable.php
│  │        │  │  └─ SupportWireModelingNestedComponents.php
│  │        │  ├─ SupportWireShow
│  │        │  ├─ SupportWireText
│  │        │  └─ SupportWireables
│  │        │     ├─ SupportWireables.php
│  │        │     └─ WireableSynth.php
│  │        ├─ Form.php
│  │        ├─ ImplicitlyBoundMethod.php
│  │        ├─ Livewire.php
│  │        ├─ LivewireManager.php
│  │        ├─ LivewireServiceProvider.php
│  │        ├─ Mechanisms
│  │        │  ├─ CompileLivewireTags
│  │        │  │  ├─ CompileLivewireTags.php
│  │        │  │  └─ LivewireTagPrecompiler.php
│  │        │  ├─ ComponentRegistry.php
│  │        │  ├─ DataStore.php
│  │        │  ├─ ExtendBlade
│  │        │  │  ├─ DeterministicBladeKeys.php
│  │        │  │  ├─ ExtendBlade.php
│  │        │  │  └─ ExtendedCompilerEngine.php
│  │        │  ├─ FrontendAssets
│  │        │  │  └─ FrontendAssets.php
│  │        │  ├─ HandleComponents
│  │        │  │  ├─ BaseRenderless.php
│  │        │  │  ├─ Checksum.php
│  │        │  │  ├─ ComponentContext.php
│  │        │  │  ├─ CorruptComponentPayloadException.php
│  │        │  │  ├─ HandleComponents.php
│  │        │  │  ├─ Synthesizers
│  │        │  │  │  ├─ ArraySynth.php
│  │        │  │  │  ├─ CarbonSynth.php
│  │        │  │  │  ├─ CollectionSynth.php
│  │        │  │  │  ├─ EnumSynth.php
│  │        │  │  │  ├─ FloatSynth.php
│  │        │  │  │  ├─ IntSynth.php
│  │        │  │  │  ├─ StdClassSynth.php
│  │        │  │  │  ├─ StringableSynth.php
│  │        │  │  │  └─ Synth.php
│  │        │  │  └─ ViewContext.php
│  │        │  ├─ HandleRequests
│  │        │  │  └─ HandleRequests.php
│  │        │  ├─ Mechanism.php
│  │        │  ├─ PersistentMiddleware
│  │        │  │  └─ PersistentMiddleware.php
│  │        │  └─ RenderComponent.php
│  │        ├─ Pipe.php
│  │        ├─ Transparency.php
│  │        ├─ WireDirective.php
│  │        ├─ Wireable.php
│  │        ├─ WithFileUploads.php
│  │        ├─ WithPagination.php
│  │        ├─ WithoutUrlPagination.php
│  │        ├─ Wrapped.php
│  │        └─ helpers.php
│  ├─ maatwebsite
│  │  └─ excel
│  │     ├─ .phpunit.cache
│  │     │  └─ test-results
│  │     ├─ .styleci.yml
│  │     ├─ CHANGELOG.md
│  │     ├─ CODE_OF_CONDUCT.md
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ excel.php
│  │     └─ src
│  │        ├─ Cache
│  │        │  ├─ BatchCache.php
│  │        │  ├─ BatchCacheDeprecated.php
│  │        │  ├─ CacheManager.php
│  │        │  ├─ MemoryCache.php
│  │        │  └─ MemoryCacheDeprecated.php
│  │        ├─ Cell.php
│  │        ├─ ChunkReader.php
│  │        ├─ Concerns
│  │        │  ├─ Exportable.php
│  │        │  ├─ FromArray.php
│  │        │  ├─ FromCollection.php
│  │        │  ├─ FromGenerator.php
│  │        │  ├─ FromIterator.php
│  │        │  ├─ FromQuery.php
│  │        │  ├─ FromView.php
│  │        │  ├─ HasReferencesToOtherSheets.php
│  │        │  ├─ Importable.php
│  │        │  ├─ MapsCsvSettings.php
│  │        │  ├─ OnEachRow.php
│  │        │  ├─ PersistRelations.php
│  │        │  ├─ RegistersEventListeners.php
│  │        │  ├─ RemembersChunkOffset.php
│  │        │  ├─ RemembersRowNumber.php
│  │        │  ├─ ShouldAutoSize.php
│  │        │  ├─ ShouldQueueWithoutChain.php
│  │        │  ├─ SkipsEmptyRows.php
│  │        │  ├─ SkipsErrors.php
│  │        │  ├─ SkipsFailures.php
│  │        │  ├─ SkipsOnError.php
│  │        │  ├─ SkipsOnFailure.php
│  │        │  ├─ SkipsUnknownSheets.php
│  │        │  ├─ ToArray.php
│  │        │  ├─ ToCollection.php
│  │        │  ├─ ToModel.php
│  │        │  ├─ WithBackgroundColor.php
│  │        │  ├─ WithBatchInserts.php
│  │        │  ├─ WithCalculatedFormulas.php
│  │        │  ├─ WithCharts.php
│  │        │  ├─ WithChunkReading.php
│  │        │  ├─ WithColumnFormatting.php
│  │        │  ├─ WithColumnLimit.php
│  │        │  ├─ WithColumnWidths.php
│  │        │  ├─ WithConditionalSheets.php
│  │        │  ├─ WithCustomChunkSize.php
│  │        │  ├─ WithCustomCsvSettings.php
│  │        │  ├─ WithCustomQuerySize.php
│  │        │  ├─ WithCustomStartCell.php
│  │        │  ├─ WithCustomValueBinder.php
│  │        │  ├─ WithDefaultStyles.php
│  │        │  ├─ WithDrawings.php
│  │        │  ├─ WithEvents.php
│  │        │  ├─ WithFormatData.php
│  │        │  ├─ WithGroupedHeadingRow.php
│  │        │  ├─ WithHeadingRow.php
│  │        │  ├─ WithHeadings.php
│  │        │  ├─ WithLimit.php
│  │        │  ├─ WithMappedCells.php
│  │        │  ├─ WithMapping.php
│  │        │  ├─ WithMultipleSheets.php
│  │        │  ├─ WithPreCalculateFormulas.php
│  │        │  ├─ WithProgressBar.php
│  │        │  ├─ WithProperties.php
│  │        │  ├─ WithReadFilter.php
│  │        │  ├─ WithSkipDuplicates.php
│  │        │  ├─ WithStartRow.php
│  │        │  ├─ WithStrictNullComparison.php
│  │        │  ├─ WithStyles.php
│  │        │  ├─ WithTitle.php
│  │        │  ├─ WithUpsertColumns.php
│  │        │  ├─ WithUpserts.php
│  │        │  └─ WithValidation.php
│  │        ├─ Console
│  │        │  ├─ ExportMakeCommand.php
│  │        │  ├─ ImportMakeCommand.php
│  │        │  ├─ WithModelStub.php
│  │        │  └─ stubs
│  │        │     ├─ export.model.stub
│  │        │     ├─ export.plain.stub
│  │        │     ├─ export.query-model.stub
│  │        │     ├─ export.query.stub
│  │        │     ├─ import.collection.stub
│  │        │     └─ import.model.stub
│  │        ├─ DefaultValueBinder.php
│  │        ├─ DelegatedMacroable.php
│  │        ├─ Events
│  │        │  ├─ AfterBatch.php
│  │        │  ├─ AfterChunk.php
│  │        │  ├─ AfterImport.php
│  │        │  ├─ AfterSheet.php
│  │        │  ├─ BeforeExport.php
│  │        │  ├─ BeforeImport.php
│  │        │  ├─ BeforeSheet.php
│  │        │  ├─ BeforeWriting.php
│  │        │  ├─ Event.php
│  │        │  └─ ImportFailed.php
│  │        ├─ Excel.php
│  │        ├─ ExcelServiceProvider.php
│  │        ├─ Exceptions
│  │        │  ├─ ConcernConflictException.php
│  │        │  ├─ LaravelExcelException.php
│  │        │  ├─ NoFilePathGivenException.php
│  │        │  ├─ NoFilenameGivenException.php
│  │        │  ├─ NoSheetsFoundException.php
│  │        │  ├─ NoTypeDetectedException.php
│  │        │  ├─ RowSkippedException.php
│  │        │  ├─ SheetNotFoundException.php
│  │        │  └─ UnreadableFileException.php
│  │        ├─ Exporter.php
│  │        ├─ Facades
│  │        │  └─ Excel.php
│  │        ├─ Factories
│  │        │  ├─ ReaderFactory.php
│  │        │  └─ WriterFactory.php
│  │        ├─ Fakes
│  │        │  ├─ ExcelFake.php
│  │        │  └─ fake_file
│  │        ├─ Files
│  │        │  ├─ Disk.php
│  │        │  ├─ Filesystem.php
│  │        │  ├─ LocalTemporaryFile.php
│  │        │  ├─ RemoteTemporaryFile.php
│  │        │  ├─ TemporaryFile.php
│  │        │  └─ TemporaryFileFactory.php
│  │        ├─ Filters
│  │        │  ├─ ChunkReadFilter.php
│  │        │  └─ LimitFilter.php
│  │        ├─ HasEventBus.php
│  │        ├─ HeadingRowImport.php
│  │        ├─ Helpers
│  │        │  ├─ ArrayHelper.php
│  │        │  ├─ CellHelper.php
│  │        │  └─ FileTypeDetector.php
│  │        ├─ Importer.php
│  │        ├─ Imports
│  │        │  ├─ EndRowFinder.php
│  │        │  ├─ HeadingRowExtractor.php
│  │        │  ├─ HeadingRowFormatter.php
│  │        │  ├─ ModelImporter.php
│  │        │  ├─ ModelManager.php
│  │        │  └─ Persistence
│  │        │     └─ CascadePersistManager.php
│  │        ├─ Jobs
│  │        │  ├─ AfterImportJob.php
│  │        │  ├─ AppendDataToSheet.php
│  │        │  ├─ AppendPaginatedToSheet.php
│  │        │  ├─ AppendQueryToSheet.php
│  │        │  ├─ AppendViewToSheet.php
│  │        │  ├─ CloseSheet.php
│  │        │  ├─ ExtendedQueueable.php
│  │        │  ├─ Middleware
│  │        │  │  └─ LocalizeJob.php
│  │        │  ├─ ProxyFailures.php
│  │        │  ├─ QueueExport.php
│  │        │  ├─ QueueImport.php
│  │        │  ├─ ReadChunk.php
│  │        │  └─ StoreQueuedExport.php
│  │        ├─ MappedReader.php
│  │        ├─ Middleware
│  │        │  ├─ CellMiddleware.php
│  │        │  ├─ ConvertEmptyCellValuesToNull.php
│  │        │  └─ TrimCellValue.php
│  │        ├─ Mixins
│  │        │  ├─ DownloadCollectionMixin.php
│  │        │  ├─ DownloadQueryMacro.php
│  │        │  ├─ ImportAsMacro.php
│  │        │  ├─ ImportMacro.php
│  │        │  ├─ StoreCollectionMixin.php
│  │        │  └─ StoreQueryMacro.php
│  │        ├─ QueuedWriter.php
│  │        ├─ Reader.php
│  │        ├─ RegistersCustomConcerns.php
│  │        ├─ Row.php
│  │        ├─ SettingsProvider.php
│  │        ├─ Sheet.php
│  │        ├─ Transactions
│  │        │  ├─ DbTransactionHandler.php
│  │        │  ├─ NullTransactionHandler.php
│  │        │  ├─ TransactionHandler.php
│  │        │  └─ TransactionManager.php
│  │        ├─ Validators
│  │        │  ├─ Failure.php
│  │        │  ├─ RowValidator.php
│  │        │  └─ ValidationException.php
│  │        └─ Writer.php
│  ├─ maennchen
│  │  └─ zipstream-php
│  │     ├─ .editorconfig
│  │     ├─ .phive
│  │     │  └─ phars.xml
│  │     ├─ .php-cs-fixer.dist.php
│  │     ├─ .phpdoc
│  │     │  └─ template
│  │     │     └─ base.html.twig
│  │     ├─ .tool-versions
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ guides
│  │     │  ├─ ContentLength.rst
│  │     │  ├─ FlySystem.rst
│  │     │  ├─ Nginx.rst
│  │     │  ├─ Options.rst
│  │     │  ├─ PSR7Streams.rst
│  │     │  ├─ StreamOutput.rst
│  │     │  ├─ Symfony.rst
│  │     │  ├─ Varnish.rst
│  │     │  └─ index.rst
│  │     ├─ phpdoc.dist.xml
│  │     ├─ phpunit.xml.dist
│  │     ├─ psalm.xml
│  │     ├─ src
│  │     │  ├─ CentralDirectoryFileHeader.php
│  │     │  ├─ CompressionMethod.php
│  │     │  ├─ DataDescriptor.php
│  │     │  ├─ EndOfCentralDirectory.php
│  │     │  ├─ Exception
│  │     │  │  ├─ DosTimeOverflowException.php
│  │     │  │  ├─ FileNotFoundException.php
│  │     │  │  ├─ FileNotReadableException.php
│  │     │  │  ├─ FileSizeIncorrectException.php
│  │     │  │  ├─ OverflowException.php
│  │     │  │  ├─ ResourceActionException.php
│  │     │  │  ├─ SimulationFileUnknownException.php
│  │     │  │  ├─ StreamNotReadableException.php
│  │     │  │  └─ StreamNotSeekableException.php
│  │     │  ├─ Exception.php
│  │     │  ├─ File.php
│  │     │  ├─ GeneralPurposeBitFlag.php
│  │     │  ├─ LocalFileHeader.php
│  │     │  ├─ OperationMode.php
│  │     │  ├─ PackField.php
│  │     │  ├─ Time.php
│  │     │  ├─ Version.php
│  │     │  ├─ Zip64
│  │     │  │  ├─ DataDescriptor.php
│  │     │  │  ├─ EndOfCentralDirectory.php
│  │     │  │  ├─ EndOfCentralDirectoryLocator.php
│  │     │  │  └─ ExtendedInformationExtraField.php
│  │     │  ├─ ZipStream.php
│  │     │  └─ Zs
│  │     │     └─ ExtendedInformationExtraField.php
│  │     └─ test
│  │        ├─ Assertions.php
│  │        ├─ CentralDirectoryFileHeaderTest.php
│  │        ├─ DataDescriptorTest.php
│  │        ├─ EndOfCentralDirectoryTest.php
│  │        ├─ EndlessCycleStream.php
│  │        ├─ FaultInjectionResource.php
│  │        ├─ LocalFileHeaderTest.php
│  │        ├─ PackFieldTest.php
│  │        ├─ ResourceStream.php
│  │        ├─ Tempfile.php
│  │        ├─ TimeTest.php
│  │        ├─ Util.php
│  │        ├─ Zip64
│  │        │  ├─ DataDescriptorTest.php
│  │        │  ├─ EndOfCentralDirectoryLocatorTest.php
│  │        │  ├─ EndOfCentralDirectoryTest.php
│  │        │  └─ ExtendedInformationExtraFieldTest.php
│  │        ├─ ZipStreamTest.php
│  │        ├─ Zs
│  │        │  └─ ExtendedInformationExtraFieldTest.php
│  │        └─ bootstrap.php
│  ├─ markbaker
│  │  ├─ complex
│  │  │  ├─ README.md
│  │  │  ├─ classes
│  │  │  │  └─ src
│  │  │  │     ├─ Complex.php
│  │  │  │     ├─ Exception.php
│  │  │  │     ├─ Functions.php
│  │  │  │     └─ Operations.php
│  │  │  ├─ composer.json
│  │  │  ├─ examples
│  │  │  │  ├─ complexTest.php
│  │  │  │  ├─ testFunctions.php
│  │  │  │  └─ testOperations.php
│  │  │  └─ license.md
│  │  └─ matrix
│  │     ├─ README.md
│  │     ├─ buildPhar.php
│  │     ├─ classes
│  │     │  └─ src
│  │     │     ├─ Builder.php
│  │     │     ├─ Decomposition
│  │     │     │  ├─ Decomposition.php
│  │     │     │  ├─ LU.php
│  │     │     │  └─ QR.php
│  │     │     ├─ Div0Exception.php
│  │     │     ├─ Exception.php
│  │     │     ├─ Functions.php
│  │     │     ├─ Matrix.php
│  │     │     ├─ Operations.php
│  │     │     └─ Operators
│  │     │        ├─ Addition.php
│  │     │        ├─ DirectSum.php
│  │     │        ├─ Division.php
│  │     │        ├─ Multiplication.php
│  │     │        ├─ Operator.php
│  │     │        └─ Subtraction.php
│  │     ├─ composer.json
│  │     ├─ examples
│  │     │  └─ test.php
│  │     ├─ infection.json.dist
│  │     ├─ license.md
│  │     └─ phpstan.neon
│  ├─ mhmiton
│  │  └─ laravel-modules-livewire
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ modules-livewire.php
│  │     └─ src
│  │        ├─ Commands
│  │        │  ├─ LivewireMakeCommand.php
│  │        │  ├─ VoltMakeCommand.php
│  │        │  └─ stubs
│  │        │     ├─ livewire.inline.stub
│  │        │     ├─ livewire.stub
│  │        │     ├─ livewire.view.stub
│  │        │     ├─ volt-component-class.stub
│  │        │     └─ volt-component.stub
│  │        ├─ LaravelModulesLivewireServiceProvider.php
│  │        ├─ Providers
│  │        │  └─ LivewireComponentServiceProvider.php
│  │        ├─ Support
│  │        │  ├─ Decomposer.php
│  │        │  └─ ModuleVoltComponentRegistry.php
│  │        ├─ Traits
│  │        │  ├─ CommandHelper.php
│  │        │  ├─ LivewireComponentParser.php
│  │        │  └─ VoltComponentParser.php
│  │        └─ View
│  │           └─ ModuleVoltViewFactory.php
│  ├─ mockery
│  │  └─ mockery
│  │     ├─ .phpstorm.meta.php
│  │     ├─ .readthedocs.yml
│  │     ├─ CHANGELOG.md
│  │     ├─ CONTRIBUTING.md
│  │     ├─ COPYRIGHT.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     ├─ composer.lock
│  │     ├─ docs
│  │     │  ├─ Makefile
│  │     │  ├─ README.md
│  │     │  ├─ _static
│  │     │  ├─ conf.py
│  │     │  ├─ cookbook
│  │     │  │  ├─ big_parent_class.rst
│  │     │  │  ├─ class_constants.rst
│  │     │  │  ├─ default_expectations.rst
│  │     │  │  ├─ detecting_mock_objects.rst
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  ├─ mockery_on.rst
│  │     │  │  ├─ mocking_class_within_class.rst
│  │     │  │  ├─ mocking_hard_dependencies.rst
│  │     │  │  └─ not_calling_the_constructor.rst
│  │     │  ├─ getting_started
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ installation.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  ├─ quick_reference.rst
│  │     │  │  ├─ simple_example.rst
│  │     │  │  └─ upgrading.rst
│  │     │  ├─ index.rst
│  │     │  ├─ mockery
│  │     │  │  ├─ configuration.rst
│  │     │  │  ├─ exceptions.rst
│  │     │  │  ├─ gotchas.rst
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  └─ reserved_method_names.rst
│  │     │  ├─ reference
│  │     │  │  ├─ alternative_should_receive_syntax.rst
│  │     │  │  ├─ argument_validation.rst
│  │     │  │  ├─ creating_test_doubles.rst
│  │     │  │  ├─ demeter_chains.rst
│  │     │  │  ├─ expectations.rst
│  │     │  │  ├─ final_methods_classes.rst
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ instance_mocking.rst
│  │     │  │  ├─ magic_methods.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  ├─ partial_mocks.rst
│  │     │  │  ├─ pass_by_reference_behaviours.rst
│  │     │  │  ├─ phpunit_integration.rst
│  │     │  │  ├─ protected_methods.rst
│  │     │  │  ├─ public_properties.rst
│  │     │  │  ├─ public_static_properties.rst
│  │     │  │  └─ spies.rst
│  │     │  └─ requirements.txt
│  │     └─ library
│  │        ├─ Mockery
│  │        │  ├─ Adapter
│  │        │  │  └─ Phpunit
│  │        │  │     ├─ MockeryPHPUnitIntegration.php
│  │        │  │     ├─ MockeryPHPUnitIntegrationAssertPostConditions.php
│  │        │  │     ├─ MockeryTestCase.php
│  │        │  │     ├─ MockeryTestCaseSetUp.php
│  │        │  │     ├─ TestListener.php
│  │        │  │     └─ TestListenerTrait.php
│  │        │  ├─ ClosureWrapper.php
│  │        │  ├─ CompositeExpectation.php
│  │        │  ├─ Configuration.php
│  │        │  ├─ Container.php
│  │        │  ├─ CountValidator
│  │        │  │  ├─ AtLeast.php
│  │        │  │  ├─ AtMost.php
│  │        │  │  ├─ CountValidatorAbstract.php
│  │        │  │  ├─ CountValidatorInterface.php
│  │        │  │  ├─ Exact.php
│  │        │  │  └─ Exception.php
│  │        │  ├─ Exception
│  │        │  │  ├─ BadMethodCallException.php
│  │        │  │  ├─ InvalidArgumentException.php
│  │        │  │  ├─ InvalidCountException.php
│  │        │  │  ├─ InvalidOrderException.php
│  │        │  │  ├─ MockeryExceptionInterface.php
│  │        │  │  ├─ NoMatchingExpectationException.php
│  │        │  │  └─ RuntimeException.php
│  │        │  ├─ Exception.php
│  │        │  ├─ Expectation.php
│  │        │  ├─ ExpectationDirector.php
│  │        │  ├─ ExpectationInterface.php
│  │        │  ├─ ExpectsHigherOrderMessage.php
│  │        │  ├─ Generator
│  │        │  │  ├─ CachingGenerator.php
│  │        │  │  ├─ DefinedTargetClass.php
│  │        │  │  ├─ Generator.php
│  │        │  │  ├─ Method.php
│  │        │  │  ├─ MockConfiguration.php
│  │        │  │  ├─ MockConfigurationBuilder.php
│  │        │  │  ├─ MockDefinition.php
│  │        │  │  ├─ MockNameBuilder.php
│  │        │  │  ├─ Parameter.php
│  │        │  │  ├─ StringManipulation
│  │        │  │  │  └─ Pass
│  │        │  │  │     ├─ AvoidMethodClashPass.php
│  │        │  │  │     ├─ CallTypeHintPass.php
│  │        │  │  │     ├─ ClassAttributesPass.php
│  │        │  │  │     ├─ ClassNamePass.php
│  │        │  │  │     ├─ ClassPass.php
│  │        │  │  │     ├─ ConstantsPass.php
│  │        │  │  │     ├─ InstanceMockPass.php
│  │        │  │  │     ├─ InterfacePass.php
│  │        │  │  │     ├─ MagicMethodTypeHintsPass.php
│  │        │  │  │     ├─ MethodDefinitionPass.php
│  │        │  │  │     ├─ Pass.php
│  │        │  │  │     ├─ RemoveBuiltinMethodsThatAreFinalPass.php
│  │        │  │  │     ├─ RemoveDestructorPass.php
│  │        │  │  │     ├─ RemoveUnserializeForInternalSerializableClassesPass.php
│  │        │  │  │     └─ TraitPass.php
│  │        │  │  ├─ StringManipulationGenerator.php
│  │        │  │  ├─ TargetClassInterface.php
│  │        │  │  └─ UndefinedTargetClass.php
│  │        │  ├─ HigherOrderMessage.php
│  │        │  ├─ Instantiator.php
│  │        │  ├─ LegacyMockInterface.php
│  │        │  ├─ Loader
│  │        │  │  ├─ EvalLoader.php
│  │        │  │  ├─ Loader.php
│  │        │  │  └─ RequireLoader.php
│  │        │  ├─ Matcher
│  │        │  │  ├─ AndAnyOtherArgs.php
│  │        │  │  ├─ Any.php
│  │        │  │  ├─ AnyArgs.php
│  │        │  │  ├─ AnyOf.php
│  │        │  │  ├─ ArgumentListMatcher.php
│  │        │  │  ├─ Closure.php
│  │        │  │  ├─ Contains.php
│  │        │  │  ├─ Ducktype.php
│  │        │  │  ├─ HasKey.php
│  │        │  │  ├─ HasValue.php
│  │        │  │  ├─ IsEqual.php
│  │        │  │  ├─ IsSame.php
│  │        │  │  ├─ MatcherAbstract.php
│  │        │  │  ├─ MatcherInterface.php
│  │        │  │  ├─ MultiArgumentClosure.php
│  │        │  │  ├─ MustBe.php
│  │        │  │  ├─ NoArgs.php
│  │        │  │  ├─ Not.php
│  │        │  │  ├─ NotAnyOf.php
│  │        │  │  ├─ Pattern.php
│  │        │  │  ├─ Subset.php
│  │        │  │  └─ Type.php
│  │        │  ├─ MethodCall.php
│  │        │  ├─ Mock.php
│  │        │  ├─ MockInterface.php
│  │        │  ├─ QuickDefinitionsConfiguration.php
│  │        │  ├─ ReceivedMethodCalls.php
│  │        │  ├─ Reflector.php
│  │        │  ├─ Undefined.php
│  │        │  ├─ VerificationDirector.php
│  │        │  └─ VerificationExpectation.php
│  │        ├─ Mockery.php
│  │        └─ helpers.php
│  ├─ monolog
│  │  └─ monolog
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Monolog
│  │           ├─ Attribute
│  │           │  ├─ AsMonologProcessor.php
│  │           │  └─ WithMonologChannel.php
│  │           ├─ DateTimeImmutable.php
│  │           ├─ ErrorHandler.php
│  │           ├─ Formatter
│  │           │  ├─ ChromePHPFormatter.php
│  │           │  ├─ ElasticaFormatter.php
│  │           │  ├─ ElasticsearchFormatter.php
│  │           │  ├─ FlowdockFormatter.php
│  │           │  ├─ FluentdFormatter.php
│  │           │  ├─ FormatterInterface.php
│  │           │  ├─ GelfMessageFormatter.php
│  │           │  ├─ GoogleCloudLoggingFormatter.php
│  │           │  ├─ HtmlFormatter.php
│  │           │  ├─ JsonFormatter.php
│  │           │  ├─ LineFormatter.php
│  │           │  ├─ LogglyFormatter.php
│  │           │  ├─ LogmaticFormatter.php
│  │           │  ├─ LogstashFormatter.php
│  │           │  ├─ MongoDBFormatter.php
│  │           │  ├─ NormalizerFormatter.php
│  │           │  ├─ ScalarFormatter.php
│  │           │  ├─ SyslogFormatter.php
│  │           │  └─ WildfireFormatter.php
│  │           ├─ Handler
│  │           │  ├─ AbstractHandler.php
│  │           │  ├─ AbstractProcessingHandler.php
│  │           │  ├─ AbstractSyslogHandler.php
│  │           │  ├─ AmqpHandler.php
│  │           │  ├─ BrowserConsoleHandler.php
│  │           │  ├─ BufferHandler.php
│  │           │  ├─ ChromePHPHandler.php
│  │           │  ├─ CouchDBHandler.php
│  │           │  ├─ CubeHandler.php
│  │           │  ├─ Curl
│  │           │  │  └─ Util.php
│  │           │  ├─ DeduplicationHandler.php
│  │           │  ├─ DoctrineCouchDBHandler.php
│  │           │  ├─ DynamoDbHandler.php
│  │           │  ├─ ElasticaHandler.php
│  │           │  ├─ ElasticsearchHandler.php
│  │           │  ├─ ErrorLogHandler.php
│  │           │  ├─ FallbackGroupHandler.php
│  │           │  ├─ FilterHandler.php
│  │           │  ├─ FingersCrossed
│  │           │  │  ├─ ActivationStrategyInterface.php
│  │           │  │  ├─ ChannelLevelActivationStrategy.php
│  │           │  │  └─ ErrorLevelActivationStrategy.php
│  │           │  ├─ FingersCrossedHandler.php
│  │           │  ├─ FirePHPHandler.php
│  │           │  ├─ FleepHookHandler.php
│  │           │  ├─ FlowdockHandler.php
│  │           │  ├─ FormattableHandlerInterface.php
│  │           │  ├─ FormattableHandlerTrait.php
│  │           │  ├─ GelfHandler.php
│  │           │  ├─ GroupHandler.php
│  │           │  ├─ Handler.php
│  │           │  ├─ HandlerInterface.php
│  │           │  ├─ HandlerWrapper.php
│  │           │  ├─ IFTTTHandler.php
│  │           │  ├─ InsightOpsHandler.php
│  │           │  ├─ LogEntriesHandler.php
│  │           │  ├─ LogglyHandler.php
│  │           │  ├─ LogmaticHandler.php
│  │           │  ├─ MailHandler.php
│  │           │  ├─ MandrillHandler.php
│  │           │  ├─ MissingExtensionException.php
│  │           │  ├─ MongoDBHandler.php
│  │           │  ├─ NativeMailerHandler.php
│  │           │  ├─ NewRelicHandler.php
│  │           │  ├─ NoopHandler.php
│  │           │  ├─ NullHandler.php
│  │           │  ├─ OverflowHandler.php
│  │           │  ├─ PHPConsoleHandler.php
│  │           │  ├─ ProcessHandler.php
│  │           │  ├─ ProcessableHandlerInterface.php
│  │           │  ├─ ProcessableHandlerTrait.php
│  │           │  ├─ PsrHandler.php
│  │           │  ├─ PushoverHandler.php
│  │           │  ├─ RedisHandler.php
│  │           │  ├─ RedisPubSubHandler.php
│  │           │  ├─ RollbarHandler.php
│  │           │  ├─ RotatingFileHandler.php
│  │           │  ├─ SamplingHandler.php
│  │           │  ├─ SendGridHandler.php
│  │           │  ├─ Slack
│  │           │  │  └─ SlackRecord.php
│  │           │  ├─ SlackHandler.php
│  │           │  ├─ SlackWebhookHandler.php
│  │           │  ├─ SocketHandler.php
│  │           │  ├─ SqsHandler.php
│  │           │  ├─ StreamHandler.php
│  │           │  ├─ SymfonyMailerHandler.php
│  │           │  ├─ SyslogHandler.php
│  │           │  ├─ SyslogUdp
│  │           │  │  └─ UdpSocket.php
│  │           │  ├─ SyslogUdpHandler.php
│  │           │  ├─ TelegramBotHandler.php
│  │           │  ├─ TestHandler.php
│  │           │  ├─ WebRequestRecognizerTrait.php
│  │           │  ├─ WhatFailureGroupHandler.php
│  │           │  └─ ZendMonitorHandler.php
│  │           ├─ JsonSerializableDateTimeImmutable.php
│  │           ├─ Level.php
│  │           ├─ LogRecord.php
│  │           ├─ Logger.php
│  │           ├─ Processor
│  │           │  ├─ ClosureContextProcessor.php
│  │           │  ├─ GitProcessor.php
│  │           │  ├─ HostnameProcessor.php
│  │           │  ├─ IntrospectionProcessor.php
│  │           │  ├─ LoadAverageProcessor.php
│  │           │  ├─ MemoryPeakUsageProcessor.php
│  │           │  ├─ MemoryProcessor.php
│  │           │  ├─ MemoryUsageProcessor.php
│  │           │  ├─ MercurialProcessor.php
│  │           │  ├─ ProcessIdProcessor.php
│  │           │  ├─ ProcessorInterface.php
│  │           │  ├─ PsrLogMessageProcessor.php
│  │           │  ├─ TagProcessor.php
│  │           │  ├─ UidProcessor.php
│  │           │  └─ WebProcessor.php
│  │           ├─ Registry.php
│  │           ├─ ResettableInterface.php
│  │           ├─ SignalHandler.php
│  │           ├─ Test
│  │           │  ├─ MonologTestCase.php
│  │           │  └─ TestCase.php
│  │           └─ Utils.php
│  ├─ myclabs
│  ├─ nesbot
│  │  └─ carbon
│  │     ├─ .phpstorm.meta.php
│  │     ├─ LICENSE
│  │     ├─ bin
│  │     │  ├─ carbon
│  │     │  └─ carbon.bat
│  │     ├─ composer.json
│  │     ├─ extension.neon
│  │     ├─ lazy
│  │     │  └─ Carbon
│  │     │     ├─ MessageFormatter
│  │     │     │  ├─ MessageFormatterMapperStrongType.php
│  │     │     │  └─ MessageFormatterMapperWeakType.php
│  │     │     ├─ ProtectedDatePeriod.php
│  │     │     ├─ TranslatorStrongType.php
│  │     │     ├─ TranslatorWeakType.php
│  │     │     └─ UnprotectedDatePeriod.php
│  │     ├─ readme.md
│  │     ├─ sponsors.php
│  │     └─ src
│  │        └─ Carbon
│  │           ├─ AbstractTranslator.php
│  │           ├─ Callback.php
│  │           ├─ Carbon.php
│  │           ├─ CarbonConverterInterface.php
│  │           ├─ CarbonImmutable.php
│  │           ├─ CarbonInterface.php
│  │           ├─ CarbonInterval.php
│  │           ├─ CarbonPeriod.php
│  │           ├─ CarbonPeriodImmutable.php
│  │           ├─ CarbonTimeZone.php
│  │           ├─ Cli
│  │           │  └─ Invoker.php
│  │           ├─ Exceptions
│  │           │  ├─ BadComparisonUnitException.php
│  │           │  ├─ BadFluentConstructorException.php
│  │           │  ├─ BadFluentSetterException.php
│  │           │  ├─ BadMethodCallException.php
│  │           │  ├─ EndLessPeriodException.php
│  │           │  ├─ Exception.php
│  │           │  ├─ ImmutableException.php
│  │           │  ├─ InvalidArgumentException.php
│  │           │  ├─ InvalidCastException.php
│  │           │  ├─ InvalidDateException.php
│  │           │  ├─ InvalidFormatException.php
│  │           │  ├─ InvalidIntervalException.php
│  │           │  ├─ InvalidPeriodDateException.php
│  │           │  ├─ InvalidPeriodParameterException.php
│  │           │  ├─ InvalidTimeZoneException.php
│  │           │  ├─ InvalidTypeException.php
│  │           │  ├─ NotACarbonClassException.php
│  │           │  ├─ NotAPeriodException.php
│  │           │  ├─ NotLocaleAwareException.php
│  │           │  ├─ OutOfRangeException.php
│  │           │  ├─ ParseErrorException.php
│  │           │  ├─ RuntimeException.php
│  │           │  ├─ UnitException.php
│  │           │  ├─ UnitNotConfiguredException.php
│  │           │  ├─ UnknownGetterException.php
│  │           │  ├─ UnknownMethodException.php
│  │           │  ├─ UnknownSetterException.php
│  │           │  ├─ UnknownUnitException.php
│  │           │  ├─ UnreachableException.php
│  │           │  └─ UnsupportedUnitException.php
│  │           ├─ Factory.php
│  │           ├─ FactoryImmutable.php
│  │           ├─ Lang
│  │           │  ├─ aa.php
│  │           │  ├─ aa_DJ.php
│  │           │  ├─ aa_ER.php
│  │           │  ├─ aa_ER@saaho.php
│  │           │  ├─ aa_ET.php
│  │           │  ├─ af.php
│  │           │  ├─ af_NA.php
│  │           │  ├─ af_ZA.php
│  │           │  ├─ agq.php
│  │           │  ├─ agr.php
│  │           │  ├─ agr_PE.php
│  │           │  ├─ ak.php
│  │           │  ├─ ak_GH.php
│  │           │  ├─ am.php
│  │           │  ├─ am_ET.php
│  │           │  ├─ an.php
│  │           │  ├─ an_ES.php
│  │           │  ├─ anp.php
│  │           │  ├─ anp_IN.php
│  │           │  ├─ ar.php
│  │           │  ├─ ar_AE.php
│  │           │  ├─ ar_BH.php
│  │           │  ├─ ar_DJ.php
│  │           │  ├─ ar_DZ.php
│  │           │  ├─ ar_EG.php
│  │           │  ├─ ar_EH.php
│  │           │  ├─ ar_ER.php
│  │           │  ├─ ar_IL.php
│  │           │  ├─ ar_IN.php
│  │           │  ├─ ar_IQ.php
│  │           │  ├─ ar_JO.php
│  │           │  ├─ ar_KM.php
│  │           │  ├─ ar_KW.php
│  │           │  ├─ ar_LB.php
│  │           │  ├─ ar_LY.php
│  │           │  ├─ ar_MA.php
│  │           │  ├─ ar_MR.php
│  │           │  ├─ ar_OM.php
│  │           │  ├─ ar_PS.php
│  │           │  ├─ ar_QA.php
│  │           │  ├─ ar_SA.php
│  │           │  ├─ ar_SD.php
│  │           │  ├─ ar_SO.php
│  │           │  ├─ ar_SS.php
│  │           │  ├─ ar_SY.php
│  │           │  ├─ ar_Shakl.php
│  │           │  ├─ ar_TD.php
│  │           │  ├─ ar_TN.php
│  │           │  ├─ ar_YE.php
│  │           │  ├─ as.php
│  │           │  ├─ as_IN.php
│  │           │  ├─ asa.php
│  │           │  ├─ ast.php
│  │           │  ├─ ast_ES.php
│  │           │  ├─ ayc.php
│  │           │  ├─ ayc_PE.php
│  │           │  ├─ az.php
│  │           │  ├─ az_AZ.php
│  │           │  ├─ az_Cyrl.php
│  │           │  ├─ az_IR.php
│  │           │  ├─ az_Latn.php
│  │           │  ├─ bas.php
│  │           │  ├─ be.php
│  │           │  ├─ be_BY.php
│  │           │  ├─ be_BY@latin.php
│  │           │  ├─ bem.php
│  │           │  ├─ bem_ZM.php
│  │           │  ├─ ber.php
│  │           │  ├─ ber_DZ.php
│  │           │  ├─ ber_MA.php
│  │           │  ├─ bez.php
│  │           │  ├─ bg.php
│  │           │  ├─ bg_BG.php
│  │           │  ├─ bhb.php
│  │           │  ├─ bhb_IN.php
│  │           │  ├─ bho.php
│  │           │  ├─ bho_IN.php
│  │           │  ├─ bi.php
│  │           │  ├─ bi_VU.php
│  │           │  ├─ bm.php
│  │           │  ├─ bn.php
│  │           │  ├─ bn_BD.php
│  │           │  ├─ bn_IN.php
│  │           │  ├─ bo.php
│  │           │  ├─ bo_CN.php
│  │           │  ├─ bo_IN.php
│  │           │  ├─ br.php
│  │           │  ├─ br_FR.php
│  │           │  ├─ brx.php
│  │           │  ├─ brx_IN.php
│  │           │  ├─ bs.php
│  │           │  ├─ bs_BA.php
│  │           │  ├─ bs_Cyrl.php
│  │           │  ├─ bs_Latn.php
│  │           │  ├─ byn.php
│  │           │  ├─ byn_ER.php
│  │           │  ├─ ca.php
│  │           │  ├─ ca_AD.php
│  │           │  ├─ ca_ES.php
│  │           │  ├─ ca_ES_Valencia.php
│  │           │  ├─ ca_FR.php
│  │           │  ├─ ca_IT.php
│  │           │  ├─ ccp.php
│  │           │  ├─ ccp_IN.php
│  │           │  ├─ ce.php
│  │           │  ├─ ce_RU.php
│  │           │  ├─ cgg.php
│  │           │  ├─ chr.php
│  │           │  ├─ chr_US.php
│  │           │  ├─ ckb.php
│  │           │  ├─ cmn.php
│  │           │  ├─ cmn_TW.php
│  │           │  ├─ crh.php
│  │           │  ├─ crh_UA.php
│  │           │  ├─ cs.php
│  │           │  ├─ cs_CZ.php
│  │           │  ├─ csb.php
│  │           │  ├─ csb_PL.php
│  │           │  ├─ cu.php
│  │           │  ├─ cv.php
│  │           │  ├─ cv_RU.php
│  │           │  ├─ cy.php
│  │           │  ├─ cy_GB.php
│  │           │  ├─ da.php
│  │           │  ├─ da_DK.php
│  │           │  ├─ da_GL.php
│  │           │  ├─ dav.php
│  │           │  ├─ de.php
│  │           │  ├─ de_AT.php
│  │           │  ├─ de_BE.php
│  │           │  ├─ de_CH.php
│  │           │  ├─ de_DE.php
│  │           │  ├─ de_IT.php
│  │           │  ├─ de_LI.php
│  │           │  ├─ de_LU.php
│  │           │  ├─ dje.php
│  │           │  ├─ doi.php
│  │           │  ├─ doi_IN.php
│  │           │  ├─ dsb.php
│  │           │  ├─ dsb_DE.php
│  │           │  ├─ dua.php
│  │           │  ├─ dv.php
│  │           │  ├─ dv_MV.php
│  │           │  ├─ dyo.php
│  │           │  ├─ dz.php
│  │           │  ├─ dz_BT.php
│  │           │  ├─ ebu.php
│  │           │  ├─ ee.php
│  │           │  ├─ ee_TG.php
│  │           │  ├─ el.php
│  │           │  ├─ el_CY.php
│  │           │  ├─ el_GR.php
│  │           │  ├─ en.php
│  │           │  ├─ en_001.php
│  │           │  ├─ en_150.php
│  │           │  ├─ en_AG.php
│  │           │  ├─ en_AI.php
│  │           │  ├─ en_AS.php
│  │           │  ├─ en_AT.php
│  │           │  ├─ en_AU.php
│  │           │  ├─ en_BB.php
│  │           │  ├─ en_BE.php
│  │           │  ├─ en_BI.php
│  │           │  ├─ en_BM.php
│  │           │  ├─ en_BS.php
│  │           │  ├─ en_BW.php
│  │           │  ├─ en_BZ.php
│  │           │  ├─ en_CA.php
│  │           │  ├─ en_CC.php
│  │           │  ├─ en_CH.php
│  │           │  ├─ en_CK.php
│  │           │  ├─ en_CM.php
│  │           │  ├─ en_CX.php
│  │           │  ├─ en_CY.php
│  │           │  ├─ en_DE.php
│  │           │  ├─ en_DG.php
│  │           │  ├─ en_DK.php
│  │           │  ├─ en_DM.php
│  │           │  ├─ en_ER.php
│  │           │  ├─ en_FI.php
│  │           │  ├─ en_FJ.php
│  │           │  ├─ en_FK.php
│  │           │  ├─ en_FM.php
│  │           │  ├─ en_GB.php
│  │           │  ├─ en_GD.php
│  │           │  ├─ en_GG.php
│  │           │  ├─ en_GH.php
│  │           │  ├─ en_GI.php
│  │           │  ├─ en_GM.php
│  │           │  ├─ en_GU.php
│  │           │  ├─ en_GY.php
│  │           │  ├─ en_HK.php
│  │           │  ├─ en_IE.php
│  │           │  ├─ en_IL.php
│  │           │  ├─ en_IM.php
│  │           │  ├─ en_IN.php
│  │           │  ├─ en_IO.php
│  │           │  ├─ en_ISO.php
│  │           │  ├─ en_JE.php
│  │           │  ├─ en_JM.php
│  │           │  ├─ en_KE.php
│  │           │  ├─ en_KI.php
│  │           │  ├─ en_KN.php
│  │           │  ├─ en_KY.php
│  │           │  ├─ en_LC.php
│  │           │  ├─ en_LR.php
│  │           │  ├─ en_LS.php
│  │           │  ├─ en_MG.php
│  │           │  ├─ en_MH.php
│  │           │  ├─ en_MO.php
│  │           │  ├─ en_MP.php
│  │           │  ├─ en_MS.php
│  │           │  ├─ en_MT.php
│  │           │  ├─ en_MU.php
│  │           │  ├─ en_MW.php
│  │           │  ├─ en_MY.php
│  │           │  ├─ en_NA.php
│  │           │  ├─ en_NF.php
│  │           │  ├─ en_NG.php
│  │           │  ├─ en_NL.php
│  │           │  ├─ en_NR.php
│  │           │  ├─ en_NU.php
│  │           │  ├─ en_NZ.php
│  │           │  ├─ en_PG.php
│  │           │  ├─ en_PH.php
│  │           │  ├─ en_PK.php
│  │           │  ├─ en_PN.php
│  │           │  ├─ en_PR.php
│  │           │  ├─ en_PW.php
│  │           │  ├─ en_RW.php
│  │           │  ├─ en_SB.php
│  │           │  ├─ en_SC.php
│  │           │  ├─ en_SD.php
│  │           │  ├─ en_SE.php
│  │           │  ├─ en_SG.php
│  │           │  ├─ en_SH.php
│  │           │  ├─ en_SI.php
│  │           │  ├─ en_SL.php
│  │           │  ├─ en_SS.php
│  │           │  ├─ en_SX.php
│  │           │  ├─ en_SZ.php
│  │           │  ├─ en_TC.php
│  │           │  ├─ en_TK.php
│  │           │  ├─ en_TO.php
│  │           │  ├─ en_TT.php
│  │           │  ├─ en_TV.php
│  │           │  ├─ en_TZ.php
│  │           │  ├─ en_UG.php
│  │           │  ├─ en_UM.php
│  │           │  ├─ en_US.php
│  │           │  ├─ en_US_Posix.php
│  │           │  ├─ en_VC.php
│  │           │  ├─ en_VG.php
│  │           │  ├─ en_VI.php
│  │           │  ├─ en_VU.php
│  │           │  ├─ en_WS.php
│  │           │  ├─ en_ZA.php
│  │           │  ├─ en_ZM.php
│  │           │  ├─ en_ZW.php
│  │           │  ├─ eo.php
│  │           │  ├─ es.php
│  │           │  ├─ es_419.php
│  │           │  ├─ es_AR.php
│  │           │  ├─ es_BO.php
│  │           │  ├─ es_BR.php
│  │           │  ├─ es_BZ.php
│  │           │  ├─ es_CL.php
│  │           │  ├─ es_CO.php
│  │           │  ├─ es_CR.php
│  │           │  ├─ es_CU.php
│  │           │  ├─ es_DO.php
│  │           │  ├─ es_EA.php
│  │           │  ├─ es_EC.php
│  │           │  ├─ es_ES.php
│  │           │  ├─ es_GQ.php
│  │           │  ├─ es_GT.php
│  │           │  ├─ es_HN.php
│  │           │  ├─ es_IC.php
│  │           │  ├─ es_MX.php
│  │           │  ├─ es_NI.php
│  │           │  ├─ es_PA.php
│  │           │  ├─ es_PE.php
│  │           │  ├─ es_PH.php
│  │           │  ├─ es_PR.php
│  │           │  ├─ es_PY.php
│  │           │  ├─ es_SV.php
│  │           │  ├─ es_US.php
│  │           │  ├─ es_UY.php
│  │           │  ├─ es_VE.php
│  │           │  ├─ et.php
│  │           │  ├─ et_EE.php
│  │           │  ├─ eu.php
│  │           │  ├─ eu_ES.php
│  │           │  ├─ ewo.php
│  │           │  ├─ fa.php
│  │           │  ├─ fa_AF.php
│  │           │  ├─ fa_IR.php
│  │           │  ├─ ff.php
│  │           │  ├─ ff_CM.php
│  │           │  ├─ ff_GN.php
│  │           │  ├─ ff_MR.php
│  │           │  ├─ ff_SN.php
│  │           │  ├─ fi.php
│  │           │  ├─ fi_FI.php
│  │           │  ├─ fil.php
│  │           │  ├─ fil_PH.php
│  │           │  ├─ fo.php
│  │           │  ├─ fo_DK.php
│  │           │  ├─ fo_FO.php
│  │           │  ├─ fr.php
│  │           │  ├─ fr_BE.php
│  │           │  ├─ fr_BF.php
│  │           │  ├─ fr_BI.php
│  │           │  ├─ fr_BJ.php
│  │           │  ├─ fr_BL.php
│  │           │  ├─ fr_CA.php
│  │           │  ├─ fr_CD.php
│  │           │  ├─ fr_CF.php
│  │           │  ├─ fr_CG.php
│  │           │  ├─ fr_CH.php
│  │           │  ├─ fr_CI.php
│  │           │  ├─ fr_CM.php
│  │           │  ├─ fr_DJ.php
│  │           │  ├─ fr_DZ.php
│  │           │  ├─ fr_FR.php
│  │           │  ├─ fr_GA.php
│  │           │  ├─ fr_GF.php
│  │           │  ├─ fr_GN.php
│  │           │  ├─ fr_GP.php
│  │           │  ├─ fr_GQ.php
│  │           │  ├─ fr_HT.php
│  │           │  ├─ fr_KM.php
│  │           │  ├─ fr_LU.php
│  │           │  ├─ fr_MA.php
│  │           │  ├─ fr_MC.php
│  │           │  ├─ fr_MF.php
│  │           │  ├─ fr_MG.php
│  │           │  ├─ fr_ML.php
│  │           │  ├─ fr_MQ.php
│  │           │  ├─ fr_MR.php
│  │           │  ├─ fr_MU.php
│  │           │  ├─ fr_NC.php
│  │           │  ├─ fr_NE.php
│  │           │  ├─ fr_PF.php
│  │           │  ├─ fr_PM.php
│  │           │  ├─ fr_RE.php
│  │           │  ├─ fr_RW.php
│  │           │  ├─ fr_SC.php
│  │           │  ├─ fr_SN.php
│  │           │  ├─ fr_SY.php
│  │           │  ├─ fr_TD.php
│  │           │  ├─ fr_TG.php
│  │           │  ├─ fr_TN.php
│  │           │  ├─ fr_VU.php
│  │           │  ├─ fr_WF.php
│  │           │  ├─ fr_YT.php
│  │           │  ├─ fur.php
│  │           │  ├─ fur_IT.php
│  │           │  ├─ fy.php
│  │           │  ├─ fy_DE.php
│  │           │  ├─ fy_NL.php
│  │           │  ├─ ga.php
│  │           │  ├─ ga_IE.php
│  │           │  ├─ gd.php
│  │           │  ├─ gd_GB.php
│  │           │  ├─ gez.php
│  │           │  ├─ gez_ER.php
│  │           │  ├─ gez_ET.php
│  │           │  ├─ gl.php
│  │           │  ├─ gl_ES.php
│  │           │  ├─ gom.php
│  │           │  ├─ gom_Latn.php
│  │           │  ├─ gsw.php
│  │           │  ├─ gsw_CH.php
│  │           │  ├─ gsw_FR.php
│  │           │  ├─ gsw_LI.php
│  │           │  ├─ gu.php
│  │           │  ├─ gu_IN.php
│  │           │  ├─ guz.php
│  │           │  ├─ gv.php
│  │           │  ├─ gv_GB.php
│  │           │  ├─ ha.php
│  │           │  ├─ ha_GH.php
│  │           │  ├─ ha_NE.php
│  │           │  ├─ ha_NG.php
│  │           │  ├─ hak.php
│  │           │  ├─ hak_TW.php
│  │           │  ├─ haw.php
│  │           │  ├─ he.php
│  │           │  ├─ he_IL.php
│  │           │  ├─ hi.php
│  │           │  ├─ hi_IN.php
│  │           │  ├─ hif.php
│  │           │  ├─ hif_FJ.php
│  │           │  ├─ hne.php
│  │           │  ├─ hne_IN.php
│  │           │  ├─ hr.php
│  │           │  ├─ hr_BA.php
│  │           │  ├─ hr_HR.php
│  │           │  ├─ hsb.php
│  │           │  ├─ hsb_DE.php
│  │           │  ├─ ht.php
│  │           │  ├─ ht_HT.php
│  │           │  ├─ hu.php
│  │           │  ├─ hu_HU.php
│  │           │  ├─ hy.php
│  │           │  ├─ hy_AM.php
│  │           │  ├─ i18n.php
│  │           │  ├─ ia.php
│  │           │  ├─ ia_FR.php
│  │           │  ├─ id.php
│  │           │  ├─ id_ID.php
│  │           │  ├─ ig.php
│  │           │  ├─ ig_NG.php
│  │           │  ├─ ii.php
│  │           │  ├─ ik.php
│  │           │  ├─ ik_CA.php
│  │           │  ├─ in.php
│  │           │  ├─ is.php
│  │           │  ├─ is_IS.php
│  │           │  ├─ it.php
│  │           │  ├─ it_CH.php
│  │           │  ├─ it_IT.php
│  │           │  ├─ it_SM.php
│  │           │  ├─ it_VA.php
│  │           │  ├─ iu.php
│  │           │  ├─ iu_CA.php
│  │           │  ├─ iw.php
│  │           │  ├─ ja.php
│  │           │  ├─ ja_JP.php
│  │           │  ├─ jgo.php
│  │           │  ├─ jmc.php
│  │           │  ├─ jv.php
│  │           │  ├─ ka.php
│  │           │  ├─ ka_GE.php
│  │           │  ├─ kab.php
│  │           │  ├─ kab_DZ.php
│  │           │  ├─ kam.php
│  │           │  ├─ kde.php
│  │           │  ├─ kea.php
│  │           │  ├─ khq.php
│  │           │  ├─ ki.php
│  │           │  ├─ kk.php
│  │           │  ├─ kk_KZ.php
│  │           │  ├─ kkj.php
│  │           │  ├─ kl.php
│  │           │  ├─ kl_GL.php
│  │           │  ├─ kln.php
│  │           │  ├─ km.php
│  │           │  ├─ km_KH.php
│  │           │  ├─ kn.php
│  │           │  ├─ kn_IN.php
│  │           │  ├─ ko.php
│  │           │  ├─ ko_KP.php
│  │           │  ├─ ko_KR.php
│  │           │  ├─ kok.php
│  │           │  ├─ kok_IN.php
│  │           │  ├─ ks.php
│  │           │  ├─ ks_IN.php
│  │           │  ├─ ks_IN@devanagari.php
│  │           │  ├─ ksb.php
│  │           │  ├─ ksf.php
│  │           │  ├─ ksh.php
│  │           │  ├─ ku.php
│  │           │  ├─ ku_TR.php
│  │           │  ├─ kw.php
│  │           │  ├─ kw_GB.php
│  │           │  ├─ ky.php
│  │           │  ├─ ky_KG.php
│  │           │  ├─ lag.php
│  │           │  ├─ lb.php
│  │           │  ├─ lb_LU.php
│  │           │  ├─ lg.php
│  │           │  ├─ lg_UG.php
│  │           │  ├─ li.php
│  │           │  ├─ li_NL.php
│  │           │  ├─ lij.php
│  │           │  ├─ lij_IT.php
│  │           │  ├─ lkt.php
│  │           │  ├─ ln.php
│  │           │  ├─ ln_AO.php
│  │           │  ├─ ln_CD.php
│  │           │  ├─ ln_CF.php
│  │           │  ├─ ln_CG.php
│  │           │  ├─ lo.php
│  │           │  ├─ lo_LA.php
│  │           │  ├─ lrc.php
│  │           │  ├─ lrc_IQ.php
│  │           │  ├─ lt.php
│  │           │  ├─ lt_LT.php
│  │           │  ├─ lu.php
│  │           │  ├─ luo.php
│  │           │  ├─ luy.php
│  │           │  ├─ lv.php
│  │           │  ├─ lv_LV.php
│  │           │  ├─ lzh.php
│  │           │  ├─ lzh_TW.php
│  │           │  ├─ mag.php
│  │           │  ├─ mag_IN.php
│  │           │  ├─ mai.php
│  │           │  ├─ mai_IN.php
│  │           │  ├─ mas.php
│  │           │  ├─ mas_TZ.php
│  │           │  ├─ mer.php
│  │           │  ├─ mfe.php
│  │           │  ├─ mfe_MU.php
│  │           │  ├─ mg.php
│  │           │  ├─ mg_MG.php
│  │           │  ├─ mgh.php
│  │           │  ├─ mgo.php
│  │           │  ├─ mhr.php
│  │           │  ├─ mhr_RU.php
│  │           │  ├─ mi.php
│  │           │  ├─ mi_NZ.php
│  │           │  ├─ miq.php
│  │           │  ├─ miq_NI.php
│  │           │  ├─ mjw.php
│  │           │  ├─ mjw_IN.php
│  │           │  ├─ mk.php
│  │           │  ├─ mk_MK.php
│  │           │  ├─ ml.php
│  │           │  ├─ ml_IN.php
│  │           │  ├─ mn.php
│  │           │  ├─ mn_MN.php
│  │           │  ├─ mni.php
│  │           │  ├─ mni_IN.php
│  │           │  ├─ mo.php
│  │           │  ├─ mr.php
│  │           │  ├─ mr_IN.php
│  │           │  ├─ ms.php
│  │           │  ├─ ms_BN.php
│  │           │  ├─ ms_MY.php
│  │           │  ├─ ms_SG.php
│  │           │  ├─ mt.php
│  │           │  ├─ mt_MT.php
│  │           │  ├─ mua.php
│  │           │  ├─ my.php
│  │           │  ├─ my_MM.php
│  │           │  ├─ mzn.php
│  │           │  ├─ nan.php
│  │           │  ├─ nan_TW.php
│  │           │  ├─ nan_TW@latin.php
│  │           │  ├─ naq.php
│  │           │  ├─ nb.php
│  │           │  ├─ nb_NO.php
│  │           │  ├─ nb_SJ.php
│  │           │  ├─ nd.php
│  │           │  ├─ nds.php
│  │           │  ├─ nds_DE.php
│  │           │  ├─ nds_NL.php
│  │           │  ├─ ne.php
│  │           │  ├─ ne_IN.php
│  │           │  ├─ ne_NP.php
│  │           │  ├─ nhn.php
│  │           │  ├─ nhn_MX.php
│  │           │  ├─ niu.php
│  │           │  ├─ niu_NU.php
│  │           │  ├─ nl.php
│  │           │  ├─ nl_AW.php
│  │           │  ├─ nl_BE.php
│  │           │  ├─ nl_BQ.php
│  │           │  ├─ nl_CW.php
│  │           │  ├─ nl_NL.php
│  │           │  ├─ nl_SR.php
│  │           │  ├─ nl_SX.php
│  │           │  ├─ nmg.php
│  │           │  ├─ nn.php
│  │           │  ├─ nn_NO.php
│  │           │  ├─ nnh.php
│  │           │  ├─ no.php
│  │           │  ├─ nr.php
│  │           │  ├─ nr_ZA.php
│  │           │  ├─ nso.php
│  │           │  ├─ nso_ZA.php
│  │           │  ├─ nus.php
│  │           │  ├─ nyn.php
│  │           │  ├─ oc.php
│  │           │  ├─ oc_FR.php
│  │           │  ├─ om.php
│  │           │  ├─ om_ET.php
│  │           │  ├─ om_KE.php
│  │           │  ├─ or.php
│  │           │  ├─ or_IN.php
│  │           │  ├─ os.php
│  │           │  ├─ os_RU.php
│  │           │  ├─ pa.php
│  │           │  ├─ pa_Arab.php
│  │           │  ├─ pa_Guru.php
│  │           │  ├─ pa_IN.php
│  │           │  ├─ pa_PK.php
│  │           │  ├─ pap.php
│  │           │  ├─ pap_AW.php
│  │           │  ├─ pap_CW.php
│  │           │  ├─ pl.php
│  │           │  ├─ pl_PL.php
│  │           │  ├─ prg.php
│  │           │  ├─ ps.php
│  │           │  ├─ ps_AF.php
│  │           │  ├─ pt.php
│  │           │  ├─ pt_AO.php
│  │           │  ├─ pt_BR.php
│  │           │  ├─ pt_CH.php
│  │           │  ├─ pt_CV.php
│  │           │  ├─ pt_GQ.php
│  │           │  ├─ pt_GW.php
│  │           │  ├─ pt_LU.php
│  │           │  ├─ pt_MO.php
│  │           │  ├─ pt_MZ.php
│  │           │  ├─ pt_PT.php
│  │           │  ├─ pt_ST.php
│  │           │  ├─ pt_TL.php
│  │           │  ├─ qu.php
│  │           │  ├─ qu_BO.php
│  │           │  ├─ qu_EC.php
│  │           │  ├─ quz.php
│  │           │  ├─ quz_PE.php
│  │           │  ├─ raj.php
│  │           │  ├─ raj_IN.php
│  │           │  ├─ rm.php
│  │           │  ├─ rn.php
│  │           │  ├─ ro.php
│  │           │  ├─ ro_MD.php
│  │           │  ├─ ro_RO.php
│  │           │  ├─ rof.php
│  │           │  ├─ ru.php
│  │           │  ├─ ru_BY.php
│  │           │  ├─ ru_KG.php
│  │           │  ├─ ru_KZ.php
│  │           │  ├─ ru_MD.php
│  │           │  ├─ ru_RU.php
│  │           │  ├─ ru_UA.php
│  │           │  ├─ rw.php
│  │           │  ├─ rw_RW.php
│  │           │  ├─ rwk.php
│  │           │  ├─ sa.php
│  │           │  ├─ sa_IN.php
│  │           │  ├─ sah.php
│  │           │  ├─ sah_RU.php
│  │           │  ├─ saq.php
│  │           │  ├─ sat.php
│  │           │  ├─ sat_IN.php
│  │           │  ├─ sbp.php
│  │           │  ├─ sc.php
│  │           │  ├─ sc_IT.php
│  │           │  ├─ sd.php
│  │           │  ├─ sd_IN.php
│  │           │  ├─ sd_IN@devanagari.php
│  │           │  ├─ se.php
│  │           │  ├─ se_FI.php
│  │           │  ├─ se_NO.php
│  │           │  ├─ se_SE.php
│  │           │  ├─ seh.php
│  │           │  ├─ ses.php
│  │           │  ├─ sg.php
│  │           │  ├─ sgs.php
│  │           │  ├─ sgs_LT.php
│  │           │  ├─ sh.php
│  │           │  ├─ shi.php
│  │           │  ├─ shi_Latn.php
│  │           │  ├─ shi_Tfng.php
│  │           │  ├─ shn.php
│  │           │  ├─ shn_MM.php
│  │           │  ├─ shs.php
│  │           │  ├─ shs_CA.php
│  │           │  ├─ si.php
│  │           │  ├─ si_LK.php
│  │           │  ├─ sid.php
│  │           │  ├─ sid_ET.php
│  │           │  ├─ sk.php
│  │           │  ├─ sk_SK.php
│  │           │  ├─ sl.php
│  │           │  ├─ sl_SI.php
│  │           │  ├─ sm.php
│  │           │  ├─ sm_WS.php
│  │           │  ├─ smn.php
│  │           │  ├─ sn.php
│  │           │  ├─ so.php
│  │           │  ├─ so_DJ.php
│  │           │  ├─ so_ET.php
│  │           │  ├─ so_KE.php
│  │           │  ├─ so_SO.php
│  │           │  ├─ sq.php
│  │           │  ├─ sq_AL.php
│  │           │  ├─ sq_MK.php
│  │           │  ├─ sq_XK.php
│  │           │  ├─ sr.php
│  │           │  ├─ sr_Cyrl.php
│  │           │  ├─ sr_Cyrl_BA.php
│  │           │  ├─ sr_Cyrl_ME.php
│  │           │  ├─ sr_Cyrl_XK.php
│  │           │  ├─ sr_Latn.php
│  │           │  ├─ sr_Latn_BA.php
│  │           │  ├─ sr_Latn_ME.php
│  │           │  ├─ sr_Latn_XK.php
│  │           │  ├─ sr_ME.php
│  │           │  ├─ sr_RS.php
│  │           │  ├─ sr_RS@latin.php
│  │           │  ├─ ss.php
│  │           │  ├─ ss_ZA.php
│  │           │  ├─ st.php
│  │           │  ├─ st_ZA.php
│  │           │  ├─ sv.php
│  │           │  ├─ sv_AX.php
│  │           │  ├─ sv_FI.php
│  │           │  ├─ sv_SE.php
│  │           │  ├─ sw.php
│  │           │  ├─ sw_CD.php
│  │           │  ├─ sw_KE.php
│  │           │  ├─ sw_TZ.php
│  │           │  ├─ sw_UG.php
│  │           │  ├─ szl.php
│  │           │  ├─ szl_PL.php
│  │           │  ├─ ta.php
│  │           │  ├─ ta_IN.php
│  │           │  ├─ ta_LK.php
│  │           │  ├─ ta_MY.php
│  │           │  ├─ ta_SG.php
│  │           │  ├─ tcy.php
│  │           │  ├─ tcy_IN.php
│  │           │  ├─ te.php
│  │           │  ├─ te_IN.php
│  │           │  ├─ teo.php
│  │           │  ├─ teo_KE.php
│  │           │  ├─ tet.php
│  │           │  ├─ tg.php
│  │           │  ├─ tg_TJ.php
│  │           │  ├─ th.php
│  │           │  ├─ th_TH.php
│  │           │  ├─ the.php
│  │           │  ├─ the_NP.php
│  │           │  ├─ ti.php
│  │           │  ├─ ti_ER.php
│  │           │  ├─ ti_ET.php
│  │           │  ├─ tig.php
│  │           │  ├─ tig_ER.php
│  │           │  ├─ tk.php
│  │           │  ├─ tk_TM.php
│  │           │  ├─ tl.php
│  │           │  ├─ tl_PH.php
│  │           │  ├─ tlh.php
│  │           │  ├─ tn.php
│  │           │  ├─ tn_ZA.php
│  │           │  ├─ to.php
│  │           │  ├─ to_TO.php
│  │           │  ├─ tpi.php
│  │           │  ├─ tpi_PG.php
│  │           │  ├─ tr.php
│  │           │  ├─ tr_CY.php
│  │           │  ├─ tr_TR.php
│  │           │  ├─ ts.php
│  │           │  ├─ ts_ZA.php
│  │           │  ├─ tt.php
│  │           │  ├─ tt_RU.php
│  │           │  ├─ tt_RU@iqtelif.php
│  │           │  ├─ twq.php
│  │           │  ├─ tzl.php
│  │           │  ├─ tzm.php
│  │           │  ├─ tzm_Latn.php
│  │           │  ├─ ug.php
│  │           │  ├─ ug_CN.php
│  │           │  ├─ uk.php
│  │           │  ├─ uk_UA.php
│  │           │  ├─ unm.php
│  │           │  ├─ unm_US.php
│  │           │  ├─ ur.php
│  │           │  ├─ ur_IN.php
│  │           │  ├─ ur_PK.php
│  │           │  ├─ uz.php
│  │           │  ├─ uz_Arab.php
│  │           │  ├─ uz_Cyrl.php
│  │           │  ├─ uz_Latn.php
│  │           │  ├─ uz_UZ.php
│  │           │  ├─ uz_UZ@cyrillic.php
│  │           │  ├─ vai.php
│  │           │  ├─ vai_Latn.php
│  │           │  ├─ vai_Vaii.php
│  │           │  ├─ ve.php
│  │           │  ├─ ve_ZA.php
│  │           │  ├─ vi.php
│  │           │  ├─ vi_VN.php
│  │           │  ├─ vo.php
│  │           │  ├─ vun.php
│  │           │  ├─ wa.php
│  │           │  ├─ wa_BE.php
│  │           │  ├─ wae.php
│  │           │  ├─ wae_CH.php
│  │           │  ├─ wal.php
│  │           │  ├─ wal_ET.php
│  │           │  ├─ wo.php
│  │           │  ├─ wo_SN.php
│  │           │  ├─ xh.php
│  │           │  ├─ xh_ZA.php
│  │           │  ├─ xog.php
│  │           │  ├─ yav.php
│  │           │  ├─ yi.php
│  │           │  ├─ yi_US.php
│  │           │  ├─ yo.php
│  │           │  ├─ yo_BJ.php
│  │           │  ├─ yo_NG.php
│  │           │  ├─ yue.php
│  │           │  ├─ yue_HK.php
│  │           │  ├─ yue_Hans.php
│  │           │  ├─ yue_Hant.php
│  │           │  ├─ yuw.php
│  │           │  ├─ yuw_PG.php
│  │           │  ├─ zgh.php
│  │           │  ├─ zh.php
│  │           │  ├─ zh_CN.php
│  │           │  ├─ zh_HK.php
│  │           │  ├─ zh_Hans.php
│  │           │  ├─ zh_Hans_HK.php
│  │           │  ├─ zh_Hans_MO.php
│  │           │  ├─ zh_Hans_SG.php
│  │           │  ├─ zh_Hant.php
│  │           │  ├─ zh_Hant_HK.php
│  │           │  ├─ zh_Hant_MO.php
│  │           │  ├─ zh_Hant_TW.php
│  │           │  ├─ zh_MO.php
│  │           │  ├─ zh_SG.php
│  │           │  ├─ zh_TW.php
│  │           │  ├─ zh_YUE.php
│  │           │  ├─ zu.php
│  │           │  └─ zu_ZA.php
│  │           ├─ Language.php
│  │           ├─ Laravel
│  │           │  └─ ServiceProvider.php
│  │           ├─ List
│  │           │  ├─ languages.php
│  │           │  └─ regions.php
│  │           ├─ MessageFormatter
│  │           │  └─ MessageFormatterMapper.php
│  │           ├─ Month.php
│  │           ├─ PHPStan
│  │           │  ├─ MacroExtension.php
│  │           │  └─ MacroMethodReflection.php
│  │           ├─ Traits
│  │           │  ├─ Boundaries.php
│  │           │  ├─ Cast.php
│  │           │  ├─ Comparison.php
│  │           │  ├─ Converter.php
│  │           │  ├─ Creator.php
│  │           │  ├─ Date.php
│  │           │  ├─ DeprecatedPeriodProperties.php
│  │           │  ├─ Difference.php
│  │           │  ├─ IntervalRounding.php
│  │           │  ├─ IntervalStep.php
│  │           │  ├─ LocalFactory.php
│  │           │  ├─ Localization.php
│  │           │  ├─ Macro.php
│  │           │  ├─ MagicParameter.php
│  │           │  ├─ Mixin.php
│  │           │  ├─ Modifiers.php
│  │           │  ├─ Mutability.php
│  │           │  ├─ ObjectInitialisation.php
│  │           │  ├─ Options.php
│  │           │  ├─ Rounding.php
│  │           │  ├─ Serialization.php
│  │           │  ├─ StaticLocalization.php
│  │           │  ├─ StaticOptions.php
│  │           │  ├─ Test.php
│  │           │  ├─ Timestamp.php
│  │           │  ├─ ToStringFormat.php
│  │           │  ├─ Units.php
│  │           │  └─ Week.php
│  │           ├─ Translator.php
│  │           ├─ TranslatorImmutable.php
│  │           ├─ TranslatorStrongTypeInterface.php
│  │           ├─ Unit.php
│  │           ├─ WeekDay.php
│  │           └─ WrapperClock.php
│  ├─ nette
│  │  ├─ schema
│  │  │  ├─ composer.json
│  │  │  ├─ license.md
│  │  │  ├─ readme.md
│  │  │  └─ src
│  │  │     └─ Schema
│  │  │        ├─ Context.php
│  │  │        ├─ DynamicParameter.php
│  │  │        ├─ Elements
│  │  │        │  ├─ AnyOf.php
│  │  │        │  ├─ Base.php
│  │  │        │  ├─ Structure.php
│  │  │        │  └─ Type.php
│  │  │        ├─ Expect.php
│  │  │        ├─ Helpers.php
│  │  │        ├─ Message.php
│  │  │        ├─ Processor.php
│  │  │        ├─ Schema.php
│  │  │        └─ ValidationException.php
│  │  └─ utils
│  │     ├─ .phpstorm.meta.php
│  │     ├─ composer.json
│  │     ├─ license.md
│  │     ├─ readme.md
│  │     └─ src
│  │        ├─ HtmlStringable.php
│  │        ├─ Iterators
│  │        │  ├─ CachingIterator.php
│  │        │  └─ Mapper.php
│  │        ├─ SmartObject.php
│  │        ├─ StaticClass.php
│  │        ├─ Translator.php
│  │        ├─ Utils
│  │        │  ├─ ArrayHash.php
│  │        │  ├─ ArrayList.php
│  │        │  ├─ Arrays.php
│  │        │  ├─ Callback.php
│  │        │  ├─ DateTime.php
│  │        │  ├─ FileInfo.php
│  │        │  ├─ FileSystem.php
│  │        │  ├─ Finder.php
│  │        │  ├─ Floats.php
│  │        │  ├─ Helpers.php
│  │        │  ├─ Html.php
│  │        │  ├─ Image.php
│  │        │  ├─ ImageColor.php
│  │        │  ├─ ImageType.php
│  │        │  ├─ Iterables.php
│  │        │  ├─ Json.php
│  │        │  ├─ ObjectHelpers.php
│  │        │  ├─ Paginator.php
│  │        │  ├─ Random.php
│  │        │  ├─ Reflection.php
│  │        │  ├─ ReflectionMethod.php
│  │        │  ├─ Strings.php
│  │        │  ├─ Type.php
│  │        │  ├─ Validators.php
│  │        │  └─ exceptions.php
│  │        ├─ compatibility.php
│  │        └─ exceptions.php
│  ├─ nikic
│  │  └─ php-parser
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ bin
│  │     │  └─ php-parse
│  │     ├─ composer.json
│  │     └─ lib
│  │        └─ PhpParser
│  │           ├─ Builder
│  │           │  ├─ ClassConst.php
│  │           │  ├─ Class_.php
│  │           │  ├─ Declaration.php
│  │           │  ├─ EnumCase.php
│  │           │  ├─ Enum_.php
│  │           │  ├─ FunctionLike.php
│  │           │  ├─ Function_.php
│  │           │  ├─ Interface_.php
│  │           │  ├─ Method.php
│  │           │  ├─ Namespace_.php
│  │           │  ├─ Param.php
│  │           │  ├─ Property.php
│  │           │  ├─ TraitUse.php
│  │           │  ├─ TraitUseAdaptation.php
│  │           │  ├─ Trait_.php
│  │           │  └─ Use_.php
│  │           ├─ Builder.php
│  │           ├─ BuilderFactory.php
│  │           ├─ BuilderHelpers.php
│  │           ├─ Comment
│  │           │  └─ Doc.php
│  │           ├─ Comment.php
│  │           ├─ ConstExprEvaluationException.php
│  │           ├─ ConstExprEvaluator.php
│  │           ├─ Error.php
│  │           ├─ ErrorHandler
│  │           │  ├─ Collecting.php
│  │           │  └─ Throwing.php
│  │           ├─ ErrorHandler.php
│  │           ├─ Internal
│  │           │  ├─ DiffElem.php
│  │           │  ├─ Differ.php
│  │           │  ├─ PrintableNewAnonClassNode.php
│  │           │  ├─ TokenPolyfill.php
│  │           │  └─ TokenStream.php
│  │           ├─ JsonDecoder.php
│  │           ├─ Lexer
│  │           │  ├─ Emulative.php
│  │           │  └─ TokenEmulator
│  │           │     ├─ AsymmetricVisibilityTokenEmulator.php
│  │           │     ├─ AttributeEmulator.php
│  │           │     ├─ EnumTokenEmulator.php
│  │           │     ├─ ExplicitOctalEmulator.php
│  │           │     ├─ KeywordEmulator.php
│  │           │     ├─ MatchTokenEmulator.php
│  │           │     ├─ NullsafeTokenEmulator.php
│  │           │     ├─ PropertyTokenEmulator.php
│  │           │     ├─ ReadonlyFunctionTokenEmulator.php
│  │           │     ├─ ReadonlyTokenEmulator.php
│  │           │     ├─ ReverseEmulator.php
│  │           │     └─ TokenEmulator.php
│  │           ├─ Lexer.php
│  │           ├─ Modifiers.php
│  │           ├─ NameContext.php
│  │           ├─ Node
│  │           │  ├─ Arg.php
│  │           │  ├─ ArrayItem.php
│  │           │  ├─ Attribute.php
│  │           │  ├─ AttributeGroup.php
│  │           │  ├─ ClosureUse.php
│  │           │  ├─ ComplexType.php
│  │           │  ├─ Const_.php
│  │           │  ├─ DeclareItem.php
│  │           │  ├─ Expr
│  │           │  │  ├─ ArrayDimFetch.php
│  │           │  │  ├─ ArrayItem.php
│  │           │  │  ├─ Array_.php
│  │           │  │  ├─ ArrowFunction.php
│  │           │  │  ├─ Assign.php
│  │           │  │  ├─ AssignOp
│  │           │  │  │  ├─ BitwiseAnd.php
│  │           │  │  │  ├─ BitwiseOr.php
│  │           │  │  │  ├─ BitwiseXor.php
│  │           │  │  │  ├─ Coalesce.php
│  │           │  │  │  ├─ Concat.php
│  │           │  │  │  ├─ Div.php
│  │           │  │  │  ├─ Minus.php
│  │           │  │  │  ├─ Mod.php
│  │           │  │  │  ├─ Mul.php
│  │           │  │  │  ├─ Plus.php
│  │           │  │  │  ├─ Pow.php
│  │           │  │  │  ├─ ShiftLeft.php
│  │           │  │  │  └─ ShiftRight.php
│  │           │  │  ├─ AssignOp.php
│  │           │  │  ├─ AssignRef.php
│  │           │  │  ├─ BinaryOp
│  │           │  │  │  ├─ BitwiseAnd.php
│  │           │  │  │  ├─ BitwiseOr.php
│  │           │  │  │  ├─ BitwiseXor.php
│  │           │  │  │  ├─ BooleanAnd.php
│  │           │  │  │  ├─ BooleanOr.php
│  │           │  │  │  ├─ Coalesce.php
│  │           │  │  │  ├─ Concat.php
│  │           │  │  │  ├─ Div.php
│  │           │  │  │  ├─ Equal.php
│  │           │  │  │  ├─ Greater.php
│  │           │  │  │  ├─ GreaterOrEqual.php
│  │           │  │  │  ├─ Identical.php
│  │           │  │  │  ├─ LogicalAnd.php
│  │           │  │  │  ├─ LogicalOr.php
│  │           │  │  │  ├─ LogicalXor.php
│  │           │  │  │  ├─ Minus.php
│  │           │  │  │  ├─ Mod.php
│  │           │  │  │  ├─ Mul.php
│  │           │  │  │  ├─ NotEqual.php
│  │           │  │  │  ├─ NotIdentical.php
│  │           │  │  │  ├─ Plus.php
│  │           │  │  │  ├─ Pow.php
│  │           │  │  │  ├─ ShiftLeft.php
│  │           │  │  │  ├─ ShiftRight.php
│  │           │  │  │  ├─ Smaller.php
│  │           │  │  │  ├─ SmallerOrEqual.php
│  │           │  │  │  └─ Spaceship.php
│  │           │  │  ├─ BinaryOp.php
│  │           │  │  ├─ BitwiseNot.php
│  │           │  │  ├─ BooleanNot.php
│  │           │  │  ├─ CallLike.php
│  │           │  │  ├─ Cast
│  │           │  │  │  ├─ Array_.php
│  │           │  │  │  ├─ Bool_.php
│  │           │  │  │  ├─ Double.php
│  │           │  │  │  ├─ Int_.php
│  │           │  │  │  ├─ Object_.php
│  │           │  │  │  ├─ String_.php
│  │           │  │  │  └─ Unset_.php
│  │           │  │  ├─ Cast.php
│  │           │  │  ├─ ClassConstFetch.php
│  │           │  │  ├─ Clone_.php
│  │           │  │  ├─ Closure.php
│  │           │  │  ├─ ClosureUse.php
│  │           │  │  ├─ ConstFetch.php
│  │           │  │  ├─ Empty_.php
│  │           │  │  ├─ Error.php
│  │           │  │  ├─ ErrorSuppress.php
│  │           │  │  ├─ Eval_.php
│  │           │  │  ├─ Exit_.php
│  │           │  │  ├─ FuncCall.php
│  │           │  │  ├─ Include_.php
│  │           │  │  ├─ Instanceof_.php
│  │           │  │  ├─ Isset_.php
│  │           │  │  ├─ List_.php
│  │           │  │  ├─ Match_.php
│  │           │  │  ├─ MethodCall.php
│  │           │  │  ├─ New_.php
│  │           │  │  ├─ NullsafeMethodCall.php
│  │           │  │  ├─ NullsafePropertyFetch.php
│  │           │  │  ├─ PostDec.php
│  │           │  │  ├─ PostInc.php
│  │           │  │  ├─ PreDec.php
│  │           │  │  ├─ PreInc.php
│  │           │  │  ├─ Print_.php
│  │           │  │  ├─ PropertyFetch.php
│  │           │  │  ├─ ShellExec.php
│  │           │  │  ├─ StaticCall.php
│  │           │  │  ├─ StaticPropertyFetch.php
│  │           │  │  ├─ Ternary.php
│  │           │  │  ├─ Throw_.php
│  │           │  │  ├─ UnaryMinus.php
│  │           │  │  ├─ UnaryPlus.php
│  │           │  │  ├─ Variable.php
│  │           │  │  ├─ YieldFrom.php
│  │           │  │  └─ Yield_.php
│  │           │  ├─ Expr.php
│  │           │  ├─ FunctionLike.php
│  │           │  ├─ Identifier.php
│  │           │  ├─ InterpolatedStringPart.php
│  │           │  ├─ IntersectionType.php
│  │           │  ├─ MatchArm.php
│  │           │  ├─ Name
│  │           │  │  ├─ FullyQualified.php
│  │           │  │  └─ Relative.php
│  │           │  ├─ Name.php
│  │           │  ├─ NullableType.php
│  │           │  ├─ Param.php
│  │           │  ├─ PropertyHook.php
│  │           │  ├─ PropertyItem.php
│  │           │  ├─ Scalar
│  │           │  │  ├─ DNumber.php
│  │           │  │  ├─ Encapsed.php
│  │           │  │  ├─ EncapsedStringPart.php
│  │           │  │  ├─ Float_.php
│  │           │  │  ├─ Int_.php
│  │           │  │  ├─ InterpolatedString.php
│  │           │  │  ├─ LNumber.php
│  │           │  │  ├─ MagicConst
│  │           │  │  │  ├─ Class_.php
│  │           │  │  │  ├─ Dir.php
│  │           │  │  │  ├─ File.php
│  │           │  │  │  ├─ Function_.php
│  │           │  │  │  ├─ Line.php
│  │           │  │  │  ├─ Method.php
│  │           │  │  │  ├─ Namespace_.php
│  │           │  │  │  ├─ Property.php
│  │           │  │  │  └─ Trait_.php
│  │           │  │  ├─ MagicConst.php
│  │           │  │  └─ String_.php
│  │           │  ├─ Scalar.php
│  │           │  ├─ StaticVar.php
│  │           │  ├─ Stmt
│  │           │  │  ├─ Block.php
│  │           │  │  ├─ Break_.php
│  │           │  │  ├─ Case_.php
│  │           │  │  ├─ Catch_.php
│  │           │  │  ├─ ClassConst.php
│  │           │  │  ├─ ClassLike.php
│  │           │  │  ├─ ClassMethod.php
│  │           │  │  ├─ Class_.php
│  │           │  │  ├─ Const_.php
│  │           │  │  ├─ Continue_.php
│  │           │  │  ├─ DeclareDeclare.php
│  │           │  │  ├─ Declare_.php
│  │           │  │  ├─ Do_.php
│  │           │  │  ├─ Echo_.php
│  │           │  │  ├─ ElseIf_.php
│  │           │  │  ├─ Else_.php
│  │           │  │  ├─ EnumCase.php
│  │           │  │  ├─ Enum_.php
│  │           │  │  ├─ Expression.php
│  │           │  │  ├─ Finally_.php
│  │           │  │  ├─ For_.php
│  │           │  │  ├─ Foreach_.php
│  │           │  │  ├─ Function_.php
│  │           │  │  ├─ Global_.php
│  │           │  │  ├─ Goto_.php
│  │           │  │  ├─ GroupUse.php
│  │           │  │  ├─ HaltCompiler.php
│  │           │  │  ├─ If_.php
│  │           │  │  ├─ InlineHTML.php
│  │           │  │  ├─ Interface_.php
│  │           │  │  ├─ Label.php
│  │           │  │  ├─ Namespace_.php
│  │           │  │  ├─ Nop.php
│  │           │  │  ├─ Property.php
│  │           │  │  ├─ PropertyProperty.php
│  │           │  │  ├─ Return_.php
│  │           │  │  ├─ StaticVar.php
│  │           │  │  ├─ Static_.php
│  │           │  │  ├─ Switch_.php
│  │           │  │  ├─ TraitUse.php
│  │           │  │  ├─ TraitUseAdaptation
│  │           │  │  │  ├─ Alias.php
│  │           │  │  │  └─ Precedence.php
│  │           │  │  ├─ TraitUseAdaptation.php
│  │           │  │  ├─ Trait_.php
│  │           │  │  ├─ TryCatch.php
│  │           │  │  ├─ Unset_.php
│  │           │  │  ├─ UseUse.php
│  │           │  │  ├─ Use_.php
│  │           │  │  └─ While_.php
│  │           │  ├─ Stmt.php
│  │           │  ├─ UnionType.php
│  │           │  ├─ UseItem.php
│  │           │  ├─ VarLikeIdentifier.php
│  │           │  └─ VariadicPlaceholder.php
│  │           ├─ Node.php
│  │           ├─ NodeAbstract.php
│  │           ├─ NodeDumper.php
│  │           ├─ NodeFinder.php
│  │           ├─ NodeTraverser.php
│  │           ├─ NodeTraverserInterface.php
│  │           ├─ NodeVisitor
│  │           │  ├─ CloningVisitor.php
│  │           │  ├─ CommentAnnotatingVisitor.php
│  │           │  ├─ FindingVisitor.php
│  │           │  ├─ FirstFindingVisitor.php
│  │           │  ├─ NameResolver.php
│  │           │  ├─ NodeConnectingVisitor.php
│  │           │  └─ ParentConnectingVisitor.php
│  │           ├─ NodeVisitor.php
│  │           ├─ NodeVisitorAbstract.php
│  │           ├─ Parser
│  │           │  ├─ Php7.php
│  │           │  └─ Php8.php
│  │           ├─ Parser.php
│  │           ├─ ParserAbstract.php
│  │           ├─ ParserFactory.php
│  │           ├─ PhpVersion.php
│  │           ├─ PrettyPrinter
│  │           │  └─ Standard.php
│  │           ├─ PrettyPrinter.php
│  │           ├─ PrettyPrinterAbstract.php
│  │           ├─ Token.php
│  │           └─ compatibility_tokens.php
│  ├─ nunomaduro
│  │  ├─ collision
│  │  │  ├─ .temp
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ phpstan-baseline.neon
│  │  │  └─ src
│  │  │     ├─ Adapters
│  │  │     │  ├─ Laravel
│  │  │     │  │  ├─ CollisionServiceProvider.php
│  │  │     │  │  ├─ Commands
│  │  │     │  │  │  └─ TestCommand.php
│  │  │     │  │  ├─ ExceptionHandler.php
│  │  │     │  │  ├─ Exceptions
│  │  │     │  │  │  ├─ NotSupportedYetException.php
│  │  │     │  │  │  └─ RequirementsException.php
│  │  │     │  │  ├─ IgnitionSolutionsRepository.php
│  │  │     │  │  └─ Inspector.php
│  │  │     │  └─ Phpunit
│  │  │     │     ├─ Autoload.php
│  │  │     │     ├─ ConfigureIO.php
│  │  │     │     ├─ Printers
│  │  │     │     │  ├─ DefaultPrinter.php
│  │  │     │     │  └─ ReportablePrinter.php
│  │  │     │     ├─ State.php
│  │  │     │     ├─ Style.php
│  │  │     │     ├─ Subscribers
│  │  │     │     │  ├─ EnsurePrinterIsRegisteredSubscriber.php
│  │  │     │     │  └─ Subscriber.php
│  │  │     │     ├─ Support
│  │  │     │     │  └─ ResultReflection.php
│  │  │     │     └─ TestResult.php
│  │  │     ├─ ArgumentFormatter.php
│  │  │     ├─ ConsoleColor.php
│  │  │     ├─ Contracts
│  │  │     │  ├─ Adapters
│  │  │     │  │  └─ Phpunit
│  │  │     │  │     └─ HasPrintableTestCaseName.php
│  │  │     │  ├─ RenderableOnCollisionEditor.php
│  │  │     │  ├─ RenderlessEditor.php
│  │  │     │  ├─ RenderlessTrace.php
│  │  │     │  └─ SolutionsRepository.php
│  │  │     ├─ Coverage.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ InvalidStyleException.php
│  │  │     │  ├─ ShouldNotHappen.php
│  │  │     │  ├─ TestException.php
│  │  │     │  └─ TestOutcome.php
│  │  │     ├─ Handler.php
│  │  │     ├─ Highlighter.php
│  │  │     ├─ Provider.php
│  │  │     ├─ SolutionsRepositories
│  │  │     │  └─ NullSolutionsRepository.php
│  │  │     └─ Writer.php
│  │  └─ termwind
│  │     ├─ LICENSE.md
│  │     ├─ composer.json
│  │     ├─ playground.php
│  │     └─ src
│  │        ├─ Actions
│  │        │  └─ StyleToMethod.php
│  │        ├─ Components
│  │        │  ├─ Anchor.php
│  │        │  ├─ BreakLine.php
│  │        │  ├─ Dd.php
│  │        │  ├─ Div.php
│  │        │  ├─ Dl.php
│  │        │  ├─ Dt.php
│  │        │  ├─ Element.php
│  │        │  ├─ Hr.php
│  │        │  ├─ Li.php
│  │        │  ├─ Ol.php
│  │        │  ├─ Paragraph.php
│  │        │  ├─ Raw.php
│  │        │  ├─ Span.php
│  │        │  └─ Ul.php
│  │        ├─ Enums
│  │        │  └─ Color.php
│  │        ├─ Exceptions
│  │        │  ├─ ColorNotFound.php
│  │        │  ├─ InvalidChild.php
│  │        │  ├─ InvalidColor.php
│  │        │  ├─ InvalidStyle.php
│  │        │  └─ StyleNotFound.php
│  │        ├─ Functions.php
│  │        ├─ Helpers
│  │        │  └─ QuestionHelper.php
│  │        ├─ Html
│  │        │  ├─ CodeRenderer.php
│  │        │  ├─ InheritStyles.php
│  │        │  ├─ PreRenderer.php
│  │        │  └─ TableRenderer.php
│  │        ├─ HtmlRenderer.php
│  │        ├─ Laravel
│  │        │  └─ TermwindServiceProvider.php
│  │        ├─ Question.php
│  │        ├─ Repositories
│  │        │  └─ Styles.php
│  │        ├─ Terminal.php
│  │        ├─ Termwind.php
│  │        └─ ValueObjects
│  │           ├─ Node.php
│  │           ├─ Style.php
│  │           └─ Styles.php
│  ├─ nwidart
│  │  └─ laravel-modules
│  │     ├─ .editorconfig
│  │     ├─ .php-cs-fixer.dist.php
│  │     ├─ CHANGELOG.md
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ config.php
│  │     ├─ pint.json
│  │     ├─ scripts
│  │     │  └─ vite-module-loader.js
│  │     └─ src
│  │        ├─ Activators
│  │        │  └─ FileActivator.php
│  │        ├─ Collection.php
│  │        ├─ Commands
│  │        │  ├─ Actions
│  │        │  │  ├─ CheckLangCommand.php
│  │        │  │  ├─ DisableCommand.php
│  │        │  │  ├─ DumpCommand.php
│  │        │  │  ├─ EnableCommand.php
│  │        │  │  ├─ InstallCommand.php
│  │        │  │  ├─ ListCommand.php
│  │        │  │  ├─ ModelPruneCommand.php
│  │        │  │  ├─ ModelShowCommand.php
│  │        │  │  ├─ ModuleDeleteCommand.php
│  │        │  │  ├─ UnUseCommand.php
│  │        │  │  ├─ UpdateCommand.php
│  │        │  │  └─ UseCommand.php
│  │        │  ├─ BaseCommand.php
│  │        │  ├─ ComposerUpdateCommand.php
│  │        │  ├─ Database
│  │        │  │  ├─ MigrateCommand.php
│  │        │  │  ├─ MigrateFreshCommand.php
│  │        │  │  ├─ MigrateRefreshCommand.php
│  │        │  │  ├─ MigrateResetCommand.php
│  │        │  │  ├─ MigrateRollbackCommand.php
│  │        │  │  ├─ MigrateStatusCommand.php
│  │        │  │  └─ SeedCommand.php
│  │        │  ├─ LaravelModulesV6Migrator.php
│  │        │  ├─ Make
│  │        │  │  ├─ ActionMakeCommand.php
│  │        │  │  ├─ CastMakeCommand.php
│  │        │  │  ├─ ChannelMakeCommand.php
│  │        │  │  ├─ ClassMakeCommand.php
│  │        │  │  ├─ CommandMakeCommand.php
│  │        │  │  ├─ ComponentClassMakeCommand.php
│  │        │  │  ├─ ComponentViewMakeCommand.php
│  │        │  │  ├─ ControllerMakeCommand.php
│  │        │  │  ├─ EnumMakeCommand.php
│  │        │  │  ├─ EventMakeCommand.php
│  │        │  │  ├─ EventProviderMakeCommand.php
│  │        │  │  ├─ ExceptionMakeCommand.php
│  │        │  │  ├─ FactoryMakeCommand.php
│  │        │  │  ├─ GeneratorCommand.php
│  │        │  │  ├─ HelperMakeCommand.php
│  │        │  │  ├─ InterfaceMakeCommand.php
│  │        │  │  ├─ JobMakeCommand.php
│  │        │  │  ├─ ListenerMakeCommand.php
│  │        │  │  ├─ MailMakeCommand.php
│  │        │  │  ├─ MiddlewareMakeCommand.php
│  │        │  │  ├─ MigrationMakeCommand.php
│  │        │  │  ├─ ModelMakeCommand.php
│  │        │  │  ├─ ModuleMakeCommand.php
│  │        │  │  ├─ NotificationMakeCommand.php
│  │        │  │  ├─ ObserverMakeCommand.php
│  │        │  │  ├─ PolicyMakeCommand.php
│  │        │  │  ├─ ProviderMakeCommand.php
│  │        │  │  ├─ RepositoryMakeCommand.php
│  │        │  │  ├─ RequestMakeCommand.php
│  │        │  │  ├─ ResourceMakeCommand.php
│  │        │  │  ├─ RouteProviderMakeCommand.php
│  │        │  │  ├─ RuleMakeCommand.php
│  │        │  │  ├─ ScopeMakeCommand.php
│  │        │  │  ├─ SeedMakeCommand.php
│  │        │  │  ├─ ServiceMakeCommand.php
│  │        │  │  ├─ TestMakeCommand.php
│  │        │  │  ├─ TraitMakeCommand.php
│  │        │  │  └─ ViewMakeCommand.php
│  │        │  ├─ Publish
│  │        │  │  ├─ PublishCommand.php
│  │        │  │  ├─ PublishConfigurationCommand.php
│  │        │  │  ├─ PublishMigrationCommand.php
│  │        │  │  └─ PublishTranslationCommand.php
│  │        │  ├─ SetupCommand.php
│  │        │  ├─ UpdatePhpunitCoverage.php
│  │        │  └─ stubs
│  │        │     ├─ action-invoke.stub
│  │        │     ├─ action.stub
│  │        │     ├─ assets
│  │        │     │  ├─ js
│  │        │     │  │  └─ app.stub
│  │        │     │  └─ sass
│  │        │     │     └─ app.stub
│  │        │     ├─ cast.stub
│  │        │     ├─ channel.stub
│  │        │     ├─ class-invoke.stub
│  │        │     ├─ class.stub
│  │        │     ├─ command.stub
│  │        │     ├─ component-class.stub
│  │        │     ├─ component-view.stub
│  │        │     ├─ composer.stub
│  │        │     ├─ controller-api.stub
│  │        │     ├─ controller-plain.stub
│  │        │     ├─ controller.invokable.stub
│  │        │     ├─ controller.stub
│  │        │     ├─ enum.stub
│  │        │     ├─ event-provider.stub
│  │        │     ├─ event.stub
│  │        │     ├─ exception-render-report.stub
│  │        │     ├─ exception-render.stub
│  │        │     ├─ exception-report.stub
│  │        │     ├─ exception.stub
│  │        │     ├─ factory.stub
│  │        │     ├─ helper-invoke.stub
│  │        │     ├─ helper.stub
│  │        │     ├─ interface.stub
│  │        │     ├─ job-queued.stub
│  │        │     ├─ job.stub
│  │        │     ├─ json.stub
│  │        │     ├─ listener-duck.stub
│  │        │     ├─ listener-queued-duck.stub
│  │        │     ├─ listener-queued.stub
│  │        │     ├─ listener.stub
│  │        │     ├─ mail.stub
│  │        │     ├─ middleware.stub
│  │        │     ├─ migration
│  │        │     │  ├─ add.stub
│  │        │     │  ├─ create.stub
│  │        │     │  ├─ delete.stub
│  │        │     │  ├─ drop.stub
│  │        │     │  └─ plain.stub
│  │        │     ├─ model.stub
│  │        │     ├─ notification.stub
│  │        │     ├─ observer.stub
│  │        │     ├─ package.stub
│  │        │     ├─ policy.plain.stub
│  │        │     ├─ provider.stub
│  │        │     ├─ repository-invoke.stub
│  │        │     ├─ repository.stub
│  │        │     ├─ request.stub
│  │        │     ├─ resource-collection.stub
│  │        │     ├─ resource.stub
│  │        │     ├─ route-provider.stub
│  │        │     ├─ routes
│  │        │     │  ├─ api.stub
│  │        │     │  └─ web.stub
│  │        │     ├─ rule.implicit.stub
│  │        │     ├─ rule.stub
│  │        │     ├─ scaffold
│  │        │     │  ├─ config.stub
│  │        │     │  └─ provider.stub
│  │        │     ├─ scope.stub
│  │        │     ├─ seeder.stub
│  │        │     ├─ service-invoke.stub
│  │        │     ├─ service.stub
│  │        │     ├─ tests
│  │        │     │  ├─ feature.stub
│  │        │     │  └─ unit.stub
│  │        │     ├─ trait.stub
│  │        │     ├─ view.stub
│  │        │     ├─ views
│  │        │     │  ├─ index.stub
│  │        │     │  └─ master.stub
│  │        │     └─ vite.stub
│  │        ├─ Constants
│  │        │  └─ ModuleEvent.php
│  │        ├─ Contracts
│  │        │  ├─ ActivatorInterface.php
│  │        │  ├─ ConfirmableCommand.php
│  │        │  ├─ PublisherInterface.php
│  │        │  ├─ RepositoryInterface.php
│  │        │  └─ RunableInterface.php
│  │        ├─ Exceptions
│  │        │  ├─ FileAlreadyExistException.php
│  │        │  ├─ InvalidActivatorClass.php
│  │        │  ├─ InvalidAssetPath.php
│  │        │  ├─ InvalidJsonException.php
│  │        │  └─ ModuleNotFoundException.php
│  │        ├─ Facades
│  │        │  └─ Module.php
│  │        ├─ FileRepository.php
│  │        ├─ Generators
│  │        │  ├─ FileGenerator.php
│  │        │  ├─ Generator.php
│  │        │  └─ ModuleGenerator.php
│  │        ├─ Json.php
│  │        ├─ Laravel
│  │        │  ├─ LaravelFileRepository.php
│  │        │  └─ Module.php
│  │        ├─ LaravelModulesServiceProvider.php
│  │        ├─ Lumen
│  │        │  ├─ LumenFileRepository.php
│  │        │  └─ Module.php
│  │        ├─ LumenModulesServiceProvider.php
│  │        ├─ Migrations
│  │        │  └─ Migrator.php
│  │        ├─ Module.php
│  │        ├─ ModuleManifest.php
│  │        ├─ ModulesServiceProvider.php
│  │        ├─ Process
│  │        │  ├─ Installer.php
│  │        │  ├─ Runner.php
│  │        │  └─ Updater.php
│  │        ├─ Providers
│  │        │  ├─ ConsoleServiceProvider.php
│  │        │  └─ ContractsServiceProvider.php
│  │        ├─ Publishing
│  │        │  ├─ AssetPublisher.php
│  │        │  ├─ LangPublisher.php
│  │        │  ├─ MigrationPublisher.php
│  │        │  └─ Publisher.php
│  │        ├─ Routing
│  │        │  └─ Controller.php
│  │        ├─ Support
│  │        │  ├─ Config
│  │        │  │  ├─ GenerateConfigReader.php
│  │        │  │  └─ GeneratorPath.php
│  │        │  ├─ Migrations
│  │        │  │  ├─ NameParser.php
│  │        │  │  └─ SchemaParser.php
│  │        │  └─ Stub.php
│  │        ├─ Traits
│  │        │  ├─ CanClearModulesCache.php
│  │        │  ├─ MigrationLoaderTrait.php
│  │        │  ├─ ModuleCommandTrait.php
│  │        │  └─ PathNamespace.php
│  │        └─ helpers.php
│  ├─ pest-plugins.json
│  ├─ pestphp
│  │  ├─ pest
│  │  │  ├─ .temp
│  │  │  ├─ LICENSE.md
│  │  │  ├─ bin
│  │  │  │  ├─ pest
│  │  │  │  └─ worker.php
│  │  │  ├─ composer.json
│  │  │  ├─ extension.neon
│  │  │  ├─ overrides
│  │  │  │  ├─ Event
│  │  │  │  │  └─ Value
│  │  │  │  │     └─ ThrowableBuilder.php
│  │  │  │  ├─ Logging
│  │  │  │  │  └─ JUnit
│  │  │  │  │     └─ JunitXmlLogger.php
│  │  │  │  ├─ Runner
│  │  │  │  │  ├─ Filter
│  │  │  │  │  │  └─ NameFilterIterator.php
│  │  │  │  │  ├─ ResultCache
│  │  │  │  │  │  └─ DefaultResultCache.php
│  │  │  │  │  └─ TestSuiteLoader.php
│  │  │  │  └─ TextUI
│  │  │  │     ├─ Command
│  │  │  │     │  └─ Commands
│  │  │  │     │     └─ WarmCodeCoverageCacheCommand.php
│  │  │  │     ├─ Output
│  │  │  │     │  └─ Default
│  │  │  │     │     └─ ProgressPrinter
│  │  │  │     │        └─ Subscriber
│  │  │  │     │           └─ TestSkippedSubscriber.php
│  │  │  │     └─ TestSuiteFilterProcessor.php
│  │  │  ├─ phpstan-baseline.neon
│  │  │  ├─ resources
│  │  │  │  ├─ base-phpunit.xml
│  │  │  │  └─ views
│  │  │  │     ├─ components
│  │  │  │     │  ├─ badge.php
│  │  │  │     │  ├─ new-line.php
│  │  │  │     │  └─ two-column-detail.php
│  │  │  │     ├─ usage.php
│  │  │  │     └─ version.php
│  │  │  ├─ src
│  │  │  │  ├─ ArchPresets
│  │  │  │  │  ├─ AbstractPreset.php
│  │  │  │  │  ├─ Custom.php
│  │  │  │  │  ├─ Laravel.php
│  │  │  │  │  ├─ Php.php
│  │  │  │  │  ├─ Relaxed.php
│  │  │  │  │  ├─ Security.php
│  │  │  │  │  └─ Strict.php
│  │  │  │  ├─ Bootstrappers
│  │  │  │  │  ├─ BootExcludeList.php
│  │  │  │  │  ├─ BootFiles.php
│  │  │  │  │  ├─ BootKernelDump.php
│  │  │  │  │  ├─ BootOverrides.php
│  │  │  │  │  ├─ BootSubscribers.php
│  │  │  │  │  └─ BootView.php
│  │  │  │  ├─ Collision
│  │  │  │  │  └─ Events.php
│  │  │  │  ├─ Concerns
│  │  │  │  │  ├─ Expectable.php
│  │  │  │  │  ├─ Extendable.php
│  │  │  │  │  ├─ Logging
│  │  │  │  │  │  └─ WritesToConsole.php
│  │  │  │  │  ├─ Pipeable.php
│  │  │  │  │  ├─ Retrievable.php
│  │  │  │  │  └─ Testable.php
│  │  │  │  ├─ Configuration
│  │  │  │  │  ├─ Presets.php
│  │  │  │  │  ├─ Printer.php
│  │  │  │  │  └─ Project.php
│  │  │  │  ├─ Configuration.php
│  │  │  │  ├─ Console
│  │  │  │  │  ├─ Help.php
│  │  │  │  │  └─ Thanks.php
│  │  │  │  ├─ Contracts
│  │  │  │  │  ├─ ArchPreset.php
│  │  │  │  │  ├─ Bootstrapper.php
│  │  │  │  │  ├─ HasPrintableTestCaseName.php
│  │  │  │  │  ├─ Panicable.php
│  │  │  │  │  ├─ Plugins
│  │  │  │  │  │  ├─ AddsOutput.php
│  │  │  │  │  │  ├─ Bootable.php
│  │  │  │  │  │  ├─ HandlesArguments.php
│  │  │  │  │  │  ├─ HandlesOriginalArguments.php
│  │  │  │  │  │  └─ Terminable.php
│  │  │  │  │  ├─ TestCaseFilter.php
│  │  │  │  │  └─ TestCaseMethodFilter.php
│  │  │  │  ├─ Evaluators
│  │  │  │  │  └─ Attributes.php
│  │  │  │  ├─ Exceptions
│  │  │  │  │  ├─ AfterAllAlreadyExist.php
│  │  │  │  │  ├─ AfterAllWithinDescribe.php
│  │  │  │  │  ├─ AfterBeforeTestFunction.php
│  │  │  │  │  ├─ BeforeAllAlreadyExist.php
│  │  │  │  │  ├─ BeforeAllWithinDescribe.php
│  │  │  │  │  ├─ DatasetAlreadyExists.php
│  │  │  │  │  ├─ DatasetArgumentsMismatch.php
│  │  │  │  │  ├─ DatasetDoesNotExist.php
│  │  │  │  │  ├─ DatasetMissing.php
│  │  │  │  │  ├─ ExpectationNotFound.php
│  │  │  │  │  ├─ FatalException.php
│  │  │  │  │  ├─ FileOrFolderNotFound.php
│  │  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  │  ├─ InvalidExpectation.php
│  │  │  │  │  ├─ InvalidExpectationValue.php
│  │  │  │  │  ├─ InvalidOption.php
│  │  │  │  │  ├─ InvalidPestCommand.php
│  │  │  │  │  ├─ MissingDependency.php
│  │  │  │  │  ├─ NoDirtyTestsFound.php
│  │  │  │  │  ├─ ShouldNotHappen.php
│  │  │  │  │  ├─ TestAlreadyExist.php
│  │  │  │  │  ├─ TestCaseAlreadyInUse.php
│  │  │  │  │  ├─ TestCaseClassOrTraitNotFound.php
│  │  │  │  │  ├─ TestClosureMustNotBeStatic.php
│  │  │  │  │  └─ TestDescriptionMissing.php
│  │  │  │  ├─ Expectation.php
│  │  │  │  ├─ Expectations
│  │  │  │  │  ├─ EachExpectation.php
│  │  │  │  │  ├─ HigherOrderExpectation.php
│  │  │  │  │  └─ OppositeExpectation.php
│  │  │  │  ├─ Factories
│  │  │  │  │  ├─ Attribute.php
│  │  │  │  │  ├─ Concerns
│  │  │  │  │  │  └─ HigherOrderable.php
│  │  │  │  │  ├─ Covers
│  │  │  │  │  │  ├─ CoversClass.php
│  │  │  │  │  │  ├─ CoversFunction.php
│  │  │  │  │  │  └─ CoversNothing.php
│  │  │  │  │  ├─ TestCaseFactory.php
│  │  │  │  │  └─ TestCaseMethodFactory.php
│  │  │  │  ├─ Functions.php
│  │  │  │  ├─ Kernel.php
│  │  │  │  ├─ KernelDump.php
│  │  │  │  ├─ Logging
│  │  │  │  │  ├─ Converter.php
│  │  │  │  │  └─ TeamCity
│  │  │  │  │     ├─ ServiceMessage.php
│  │  │  │  │     ├─ Subscriber
│  │  │  │  │     │  ├─ Subscriber.php
│  │  │  │  │     │  ├─ TestConsideredRiskySubscriber.php
│  │  │  │  │     │  ├─ TestErroredSubscriber.php
│  │  │  │  │     │  ├─ TestExecutionFinishedSubscriber.php
│  │  │  │  │     │  ├─ TestFailedSubscriber.php
│  │  │  │  │     │  ├─ TestFinishedSubscriber.php
│  │  │  │  │     │  ├─ TestPreparedSubscriber.php
│  │  │  │  │     │  ├─ TestSkippedSubscriber.php
│  │  │  │  │     │  ├─ TestSuiteFinishedSubscriber.php
│  │  │  │  │     │  └─ TestSuiteStartedSubscriber.php
│  │  │  │  │     └─ TeamCityLogger.php
│  │  │  │  ├─ Matchers
│  │  │  │  │  └─ Any.php
│  │  │  │  ├─ Mixins
│  │  │  │  │  └─ Expectation.php
│  │  │  │  ├─ Panic.php
│  │  │  │  ├─ PendingCalls
│  │  │  │  │  ├─ AfterEachCall.php
│  │  │  │  │  ├─ BeforeEachCall.php
│  │  │  │  │  ├─ Concerns
│  │  │  │  │  │  └─ Describable.php
│  │  │  │  │  ├─ DescribeCall.php
│  │  │  │  │  ├─ TestCall.php
│  │  │  │  │  └─ UsesCall.php
│  │  │  │  ├─ Pest.php
│  │  │  │  ├─ Plugin.php
│  │  │  │  ├─ Plugins
│  │  │  │  │  ├─ Actions
│  │  │  │  │  │  ├─ CallsAddsOutput.php
│  │  │  │  │  │  ├─ CallsBoot.php
│  │  │  │  │  │  ├─ CallsHandleArguments.php
│  │  │  │  │  │  ├─ CallsHandleOriginalArguments.php
│  │  │  │  │  │  └─ CallsTerminable.php
│  │  │  │  │  ├─ Bail.php
│  │  │  │  │  ├─ Cache.php
│  │  │  │  │  ├─ Concerns
│  │  │  │  │  │  └─ HandleArguments.php
│  │  │  │  │  ├─ Configuration.php
│  │  │  │  │  ├─ Coverage.php
│  │  │  │  │  ├─ Environment.php
│  │  │  │  │  ├─ Help.php
│  │  │  │  │  ├─ Init.php
│  │  │  │  │  ├─ Memory.php
│  │  │  │  │  ├─ Only.php
│  │  │  │  │  ├─ Parallel
│  │  │  │  │  │  ├─ Contracts
│  │  │  │  │  │  │  └─ HandlersWorkerArguments.php
│  │  │  │  │  │  ├─ Handlers
│  │  │  │  │  │  │  ├─ Laravel.php
│  │  │  │  │  │  │  ├─ Parallel.php
│  │  │  │  │  │  │  └─ Pest.php
│  │  │  │  │  │  ├─ Paratest
│  │  │  │  │  │  │  ├─ CleanConsoleOutput.php
│  │  │  │  │  │  │  ├─ ResultPrinter.php
│  │  │  │  │  │  │  └─ WrapperRunner.php
│  │  │  │  │  │  └─ Support
│  │  │  │  │  │     └─ CompactPrinter.php
│  │  │  │  │  ├─ Parallel.php
│  │  │  │  │  ├─ Printer.php
│  │  │  │  │  ├─ ProcessIsolation.php
│  │  │  │  │  ├─ Profile.php
│  │  │  │  │  ├─ Retry.php
│  │  │  │  │  ├─ Snapshot.php
│  │  │  │  │  ├─ Verbose.php
│  │  │  │  │  └─ Version.php
│  │  │  │  ├─ Preset.php
│  │  │  │  ├─ Repositories
│  │  │  │  │  ├─ AfterAllRepository.php
│  │  │  │  │  ├─ AfterEachRepository.php
│  │  │  │  │  ├─ BeforeAllRepository.php
│  │  │  │  │  ├─ BeforeEachRepository.php
│  │  │  │  │  ├─ DatasetsRepository.php
│  │  │  │  │  ├─ SnapshotRepository.php
│  │  │  │  │  └─ TestRepository.php
│  │  │  │  ├─ Result.php
│  │  │  │  ├─ Subscribers
│  │  │  │  │  ├─ EnsureConfigurationIsAvailable.php
│  │  │  │  │  ├─ EnsureIgnorableTestCasesAreIgnored.php
│  │  │  │  │  ├─ EnsureKernelDumpIsFlushed.php
│  │  │  │  │  └─ EnsureTeamCityEnabled.php
│  │  │  │  ├─ Support
│  │  │  │  │  ├─ Arr.php
│  │  │  │  │  ├─ Backtrace.php
│  │  │  │  │  ├─ ChainableClosure.php
│  │  │  │  │  ├─ Closure.php
│  │  │  │  │  ├─ Container.php
│  │  │  │  │  ├─ Coverage.php
│  │  │  │  │  ├─ DatasetInfo.php
│  │  │  │  │  ├─ ExceptionTrace.php
│  │  │  │  │  ├─ ExpectationPipeline.php
│  │  │  │  │  ├─ Exporter.php
│  │  │  │  │  ├─ HigherOrderCallables.php
│  │  │  │  │  ├─ HigherOrderMessage.php
│  │  │  │  │  ├─ HigherOrderMessageCollection.php
│  │  │  │  │  ├─ HigherOrderTapProxy.php
│  │  │  │  │  ├─ NullClosure.php
│  │  │  │  │  ├─ Reflection.php
│  │  │  │  │  ├─ StateGenerator.php
│  │  │  │  │  ├─ Str.php
│  │  │  │  │  └─ View.php
│  │  │  │  ├─ TestCaseFilters
│  │  │  │  │  └─ GitDirtyTestCaseFilter.php
│  │  │  │  ├─ TestCaseMethodFilters
│  │  │  │  │  ├─ AssigneeTestCaseFilter.php
│  │  │  │  │  ├─ IssueTestCaseFilter.php
│  │  │  │  │  ├─ NotesTestCaseFilter.php
│  │  │  │  │  ├─ PrTestCaseFilter.php
│  │  │  │  │  └─ TodoTestCaseFilter.php
│  │  │  │  ├─ TestCases
│  │  │  │  │  └─ IgnorableTestCase.php
│  │  │  │  └─ TestSuite.php
│  │  │  └─ stubs
│  │  │     ├─ Browser.php
│  │  │     ├─ Dataset.php
│  │  │     ├─ Feature.php
│  │  │     ├─ Unit.php
│  │  │     ├─ init
│  │  │     │  ├─ Feature
│  │  │     │  │  └─ ExampleTest.php.stub
│  │  │     │  ├─ Pest.php.stub
│  │  │     │  ├─ TestCase.php.stub
│  │  │     │  ├─ Unit
│  │  │     │  │  └─ ExampleTest.php.stub
│  │  │     │  └─ phpunit.xml.stub
│  │  │     └─ init-laravel
│  │  │        ├─ Feature
│  │  │        │  └─ ExampleTest.php.stub
│  │  │        ├─ Pest.php.stub
│  │  │        ├─ TestCase.php.stub
│  │  │        ├─ Unit
│  │  │        │  └─ ExampleTest.php.stub
│  │  │        └─ phpunit.xml.stub
│  │  ├─ pest-plugin
│  │  │  ├─ .temp
│  │  │  ├─ LICENSE.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Commands
│  │  │     │  └─ DumpCommand.php
│  │  │     ├─ Loader.php
│  │  │     ├─ Manager.php
│  │  │     └─ PestCommandProvider.php
│  │  ├─ pest-plugin-arch
│  │  │  ├─ LICENSE.md
│  │  │  ├─ composer.json
│  │  │  ├─ pint.json
│  │  │  └─ src
│  │  │     ├─ Autoload.php
│  │  │     ├─ Blueprint.php
│  │  │     ├─ Collections
│  │  │     │  └─ Dependencies.php
│  │  │     ├─ Concerns
│  │  │     │  └─ Architectable.php
│  │  │     ├─ Contracts
│  │  │     │  └─ ArchExpectation.php
│  │  │     ├─ Exceptions
│  │  │     │  └─ ArchExpectationFailedException.php
│  │  │     ├─ Expectations
│  │  │     │  ├─ Targeted.php
│  │  │     │  ├─ ToBeUsedIn.php
│  │  │     │  ├─ ToBeUsedInNothing.php
│  │  │     │  ├─ ToOnlyBeUsedIn.php
│  │  │     │  ├─ ToOnlyUse.php
│  │  │     │  ├─ ToUse.php
│  │  │     │  └─ ToUseNothing.php
│  │  │     ├─ Factories
│  │  │     │  ├─ LayerFactory.php
│  │  │     │  └─ ObjectDescriptionFactory.php
│  │  │     ├─ GroupArchExpectation.php
│  │  │     ├─ Layer.php
│  │  │     ├─ Objects
│  │  │     │  ├─ FunctionDescription.php
│  │  │     │  ├─ ObjectDescription.php
│  │  │     │  ├─ ObjectDescriptionBase.php
│  │  │     │  └─ VendorObjectDescription.php
│  │  │     ├─ Options
│  │  │     │  ├─ LayerOptions.php
│  │  │     │  └─ TestCaseOptions.php
│  │  │     ├─ PendingArchExpectation.php
│  │  │     ├─ Plugin.php
│  │  │     ├─ Repositories
│  │  │     │  └─ ObjectsRepository.php
│  │  │     ├─ SingleArchExpectation.php
│  │  │     ├─ Support
│  │  │     │  ├─ AssertLocker.php
│  │  │     │  ├─ Composer.php
│  │  │     │  ├─ FileLineFinder.php
│  │  │     │  ├─ PhpCoreExpressions.php
│  │  │     │  ├─ ReflectionClassForFunction.php
│  │  │     │  └─ UserDefinedFunctions.php
│  │  │     └─ ValueObjects
│  │  │        ├─ Dependency.php
│  │  │        ├─ Targets.php
│  │  │        └─ Violation.php
│  │  ├─ pest-plugin-drift
│  │  │  ├─ LICENSE.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ rules.php
│  │  │  ├─ rector.php
│  │  │  ├─ resources
│  │  │  │  └─ views
│  │  │  │     └─ components
│  │  │  │        └─ badge.php
│  │  │  └─ src
│  │  │     ├─ Analyzer
│  │  │     │  ├─ ClassMethodAnalyzer.php
│  │  │     │  └─ ClassMethodAnalyzerInterface.php
│  │  │     ├─ Converters
│  │  │     │  ├─ CodeConverter.php
│  │  │     │  ├─ CodeConverterFactory.php
│  │  │     │  ├─ DirectoryConverter.php
│  │  │     │  └─ FileConverter.php
│  │  │     ├─ Exceptions
│  │  │     │  └─ UnrecoverableException.php
│  │  │     ├─ Extractor
│  │  │     │  └─ PhpDocTagExtractor.php
│  │  │     ├─ Finder
│  │  │     │  ├─ File.php
│  │  │     │  ├─ FileInterface.php
│  │  │     │  ├─ Finder.php
│  │  │     │  └─ FinderInterface.php
│  │  │     ├─ NodeDecorator
│  │  │     │  ├─ DataProviderDecorator.php
│  │  │     │  └─ PhpDocTagDecorator.php
│  │  │     ├─ Parser
│  │  │     │  ├─ NodeFinder
│  │  │     │  │  ├─ AbstractNodeFinder.php
│  │  │     │  │  ├─ ClassMethodFinder.php
│  │  │     │  │  ├─ ClassMethodFinderInterface.php
│  │  │     │  │  ├─ MissingUseFinder.php
│  │  │     │  │  ├─ MissingUseFinderInterface.php
│  │  │     │  │  ├─ NameFinder.php
│  │  │     │  │  ├─ NameFinderInterface.php
│  │  │     │  │  ├─ NonTestMethodFinder.php
│  │  │     │  │  ├─ NonTestMethodFinderInterface.php
│  │  │     │  │  ├─ UseFinder.php
│  │  │     │  │  └─ UseFinderInterface.php
│  │  │     │  └─ PrettyPrinter
│  │  │     │     ├─ LineBreaker.php
│  │  │     │     └─ Standard.php
│  │  │     ├─ Plugin.php
│  │  │     ├─ Rules
│  │  │     │  ├─ AbstractConvertClassMethod.php
│  │  │     │  ├─ AbstractConvertLifecycleMethod.php
│  │  │     │  ├─ AbstractConvertMethodCall.php
│  │  │     │  ├─ AbstractConvertStaticCall.php
│  │  │     │  ├─ AbstractRemoveUse.php
│  │  │     │  ├─ AddMissingUse.php
│  │  │     │  ├─ Assertions
│  │  │     │  │  ├─ AbstractAssertionToExpectation.php
│  │  │     │  │  ├─ AssertionToExpectation.php
│  │  │     │  │  └─ AssertionToNegativeExpectation.php
│  │  │     │  ├─ AttributeAnnotations
│  │  │     │  │  ├─ AbstractConvertAttributeAnnotation.php
│  │  │     │  │  ├─ ConvertDataProvider.php
│  │  │     │  │  ├─ ConvertDepends.php
│  │  │     │  │  └─ ConvertGroup.php
│  │  │     │  ├─ ConvertMethodCall.php
│  │  │     │  ├─ ConvertNonTestMethod.php
│  │  │     │  ├─ ConvertStaticCall.php
│  │  │     │  ├─ ConvertTestMethod.php
│  │  │     │  ├─ ExtendsToUses.php
│  │  │     │  ├─ RemoveClass.php
│  │  │     │  ├─ RemoveExtendsUse.php
│  │  │     │  ├─ RemoveNamespace.php
│  │  │     │  ├─ RemoveProperties.php
│  │  │     │  ├─ RemoveTraitsUse.php
│  │  │     │  ├─ SetUpBeforeClassToBeforeAll.php
│  │  │     │  ├─ SetUpToBeforeEach.php
│  │  │     │  ├─ TearDownAfterClassToAfterAll.php
│  │  │     │  ├─ TearDownToAfterEach.php
│  │  │     │  └─ TraitToUses.php
│  │  │     ├─ Support
│  │  │     │  └─ View.php
│  │  │     └─ ValueObject
│  │  │        ├─ Node
│  │  │        │  └─ AttributeKey.php
│  │  │        └─ PhpUnit
│  │  │           ├─ AttributeKey.php
│  │  │           └─ TagKey.php
│  │  ├─ pest-plugin-laravel
│  │  │  ├─ LICENSE.md
│  │  │  ├─ composer.json
│  │  │  ├─ resources
│  │  │  │  ├─ database
│  │  │  │  │  └─ migrations
│  │  │  │  │     └─ 2014_10_12_000000_create_users_table.php
│  │  │  │  ├─ routes.php
│  │  │  │  └─ views
│  │  │  │     └─ welcome.blade.php
│  │  │  ├─ src
│  │  │  │  ├─ Authentication.php
│  │  │  │  ├─ Autoload.php
│  │  │  │  ├─ Commands
│  │  │  │  │  ├─ PestDatasetCommand.php
│  │  │  │  │  ├─ PestDuskCommand.php
│  │  │  │  │  └─ PestTestCommand.php
│  │  │  │  ├─ Console.php
│  │  │  │  ├─ Container.php
│  │  │  │  ├─ Database.php
│  │  │  │  ├─ ExceptionHandling.php
│  │  │  │  ├─ Expectations.php
│  │  │  │  ├─ Http.php
│  │  │  │  ├─ PestServiceProvider.php
│  │  │  │  ├─ Plugin.php
│  │  │  │  ├─ Session.php
│  │  │  │  └─ Time.php
│  │  │  └─ stubs
│  │  │     └─ Laravel
│  │  │        └─ Pest.php
│  │  └─ pest-plugin-mutate
│  │     ├─ .temp
│  │     │  ├─ cache
│  │     │  └─ mutations
│  │     ├─ LICENSE.md
│  │     ├─ composer.json
│  │     ├─ pint.json
│  │     ├─ rector.php
│  │     └─ src
│  │        ├─ Boostrappers
│  │        │  ├─ BootPhpUnitSubscribers.php
│  │        │  └─ BootSubscribers.php
│  │        ├─ Cache
│  │        │  ├─ FileStore.php
│  │        │  └─ NullStore.php
│  │        ├─ Contracts
│  │        │  ├─ Configuration.php
│  │        │  ├─ Event.php
│  │        │  ├─ MutationTestRunner.php
│  │        │  ├─ Mutator.php
│  │        │  ├─ MutatorSet.php
│  │        │  ├─ Printer.php
│  │        │  └─ Subscriber.php
│  │        ├─ Event
│  │        │  ├─ Emitter.php
│  │        │  ├─ Events
│  │        │  │  ├─ Test
│  │        │  │  │  ├─ HookMethod
│  │        │  │  │  │  ├─ BeforeFirstTestExecuted.php
│  │        │  │  │  │  └─ BeforeFirstTestExecutedSubscriber.php
│  │        │  │  │  └─ Outcome
│  │        │  │  │     ├─ Tested.php
│  │        │  │  │     ├─ TestedSubscriber.php
│  │        │  │  │     ├─ Timeout.php
│  │        │  │  │     ├─ TimeoutSubscriber.php
│  │        │  │  │     ├─ Uncovered.php
│  │        │  │  │     ├─ UncoveredSubscriber.php
│  │        │  │  │     ├─ Untested.php
│  │        │  │  │     └─ UntestedSubscriber.php
│  │        │  │  └─ TestSuite
│  │        │  │     ├─ FinishMutationGeneration.php
│  │        │  │     ├─ FinishMutationGenerationSubscriber.php
│  │        │  │     ├─ FinishMutationSuite.php
│  │        │  │     ├─ FinishMutationSuiteSubscriber.php
│  │        │  │     ├─ StartMutationGeneration.php
│  │        │  │     ├─ StartMutationGenerationSubscriber.php
│  │        │  │     ├─ StartMutationSuite.php
│  │        │  │     └─ StartMutationSuiteSubscriber.php
│  │        │  └─ Facade.php
│  │        ├─ Exceptions
│  │        │  ├─ InvalidMutatorException.php
│  │        │  └─ StreamWrapperException.php
│  │        ├─ Factories
│  │        │  └─ NodeTraverserFactory.php
│  │        ├─ Mutation.php
│  │        ├─ MutationSuite.php
│  │        ├─ MutationTest.php
│  │        ├─ MutationTestCollection.php
│  │        ├─ Mutators
│  │        │  ├─ Abstract
│  │        │  │  ├─ AbstractFunctionCallUnwrapMutator.php
│  │        │  │  ├─ AbstractFunctionReplaceMutator.php
│  │        │  │  └─ AbstractMutator.php
│  │        │  ├─ Arithmetic
│  │        │  │  ├─ BitwiseAndToBitwiseOr.php
│  │        │  │  ├─ BitwiseOrToBitwiseAnd.php
│  │        │  │  ├─ BitwiseXorToBitwiseAnd.php
│  │        │  │  ├─ DivisionToMultiplication.php
│  │        │  │  ├─ MinusToPlus.php
│  │        │  │  ├─ ModulusToMultiplication.php
│  │        │  │  ├─ MultiplicationToDivision.php
│  │        │  │  ├─ PlusToMinus.php
│  │        │  │  ├─ PostDecrementToPostIncrement.php
│  │        │  │  ├─ PostIncrementToPostDecrement.php
│  │        │  │  ├─ PowerToMultiplication.php
│  │        │  │  ├─ PreDecrementToPreIncrement.php
│  │        │  │  ├─ PreIncrementToPreDecrement.php
│  │        │  │  ├─ ShiftLeftToShiftRight.php
│  │        │  │  └─ ShiftRightToShiftLeft.php
│  │        │  ├─ Array
│  │        │  │  ├─ ArrayKeyFirstToArrayKeyLast.php
│  │        │  │  ├─ ArrayKeyLastToArrayKeyFirst.php
│  │        │  │  ├─ ArrayPopToArrayShift.php
│  │        │  │  ├─ ArrayShiftToArrayPop.php
│  │        │  │  ├─ UnwrapArrayChangeKeyCase.php
│  │        │  │  ├─ UnwrapArrayChunk.php
│  │        │  │  ├─ UnwrapArrayColumn.php
│  │        │  │  ├─ UnwrapArrayCombine.php
│  │        │  │  ├─ UnwrapArrayCountValues.php
│  │        │  │  ├─ UnwrapArrayDiff.php
│  │        │  │  ├─ UnwrapArrayDiffAssoc.php
│  │        │  │  ├─ UnwrapArrayDiffKey.php
│  │        │  │  ├─ UnwrapArrayDiffUassoc.php
│  │        │  │  ├─ UnwrapArrayDiffUkey.php
│  │        │  │  ├─ UnwrapArrayFilter.php
│  │        │  │  ├─ UnwrapArrayFlip.php
│  │        │  │  ├─ UnwrapArrayIntersect.php
│  │        │  │  ├─ UnwrapArrayIntersectAssoc.php
│  │        │  │  ├─ UnwrapArrayIntersectKey.php
│  │        │  │  ├─ UnwrapArrayIntersectUassoc.php
│  │        │  │  ├─ UnwrapArrayIntersectUkey.php
│  │        │  │  ├─ UnwrapArrayKeys.php
│  │        │  │  ├─ UnwrapArrayMap.php
│  │        │  │  ├─ UnwrapArrayMerge.php
│  │        │  │  ├─ UnwrapArrayMergeRecursive.php
│  │        │  │  ├─ UnwrapArrayPad.php
│  │        │  │  ├─ UnwrapArrayReduce.php
│  │        │  │  ├─ UnwrapArrayReplace.php
│  │        │  │  ├─ UnwrapArrayReplaceRecursive.php
│  │        │  │  ├─ UnwrapArrayReverse.php
│  │        │  │  ├─ UnwrapArraySlice.php
│  │        │  │  ├─ UnwrapArraySplice.php
│  │        │  │  ├─ UnwrapArrayUdiff.php
│  │        │  │  ├─ UnwrapArrayUdiffAssoc.php
│  │        │  │  ├─ UnwrapArrayUdiffUassoc.php
│  │        │  │  ├─ UnwrapArrayUintersect.php
│  │        │  │  ├─ UnwrapArrayUintersectAssoc.php
│  │        │  │  ├─ UnwrapArrayUintersectUassoc.php
│  │        │  │  ├─ UnwrapArrayUnique.php
│  │        │  │  └─ UnwrapArrayValues.php
│  │        │  ├─ Assignment
│  │        │  │  ├─ BitwiseAndToBitwiseOr.php
│  │        │  │  ├─ BitwiseOrToBitwiseAnd.php
│  │        │  │  ├─ BitwiseXorToBitwiseAnd.php
│  │        │  │  ├─ CoalesceEqualToEqual.php
│  │        │  │  ├─ ConcatEqualToEqual.php
│  │        │  │  ├─ DivideEqualToMultiplyEqual.php
│  │        │  │  ├─ MinusEqualToPlusEqual.php
│  │        │  │  ├─ ModulusEqualToMultiplyEqual.php
│  │        │  │  ├─ MultiplyEqualToDivideEqual.php
│  │        │  │  ├─ PlusEqualToMinusEqual.php
│  │        │  │  ├─ PowerEqualToMultiplyEqual.php
│  │        │  │  ├─ ShiftLeftToShiftRight.php
│  │        │  │  └─ ShiftRightToShiftLeft.php
│  │        │  ├─ Casting
│  │        │  │  ├─ RemoveArrayCast.php
│  │        │  │  ├─ RemoveBooleanCast.php
│  │        │  │  ├─ RemoveDoubleCast.php
│  │        │  │  ├─ RemoveIntegerCast.php
│  │        │  │  ├─ RemoveObjectCast.php
│  │        │  │  └─ RemoveStringCast.php
│  │        │  ├─ Concerns
│  │        │  │  └─ HasName.php
│  │        │  ├─ ControlStructures
│  │        │  │  ├─ BreakToContinue.php
│  │        │  │  ├─ ContinueToBreak.php
│  │        │  │  ├─ DoWhileAlwaysFalse.php
│  │        │  │  ├─ ElseIfNegated.php
│  │        │  │  ├─ ForAlwaysFalse.php
│  │        │  │  ├─ ForeachEmptyIterable.php
│  │        │  │  ├─ IfNegated.php
│  │        │  │  ├─ TernaryNegated.php
│  │        │  │  └─ WhileAlwaysFalse.php
│  │        │  ├─ Equality
│  │        │  │  ├─ EqualToIdentical.php
│  │        │  │  ├─ EqualToNotEqual.php
│  │        │  │  ├─ GreaterOrEqualToGreater.php
│  │        │  │  ├─ GreaterOrEqualToSmaller.php
│  │        │  │  ├─ GreaterToGreaterOrEqual.php
│  │        │  │  ├─ GreaterToSmallerOrEqual.php
│  │        │  │  ├─ IdenticalToEqual.php
│  │        │  │  ├─ IdenticalToNotIdentical.php
│  │        │  │  ├─ NotEqualToEqual.php
│  │        │  │  ├─ NotEqualToNotIdentical.php
│  │        │  │  ├─ NotIdenticalToIdentical.php
│  │        │  │  ├─ NotIdenticalToNotEqual.php
│  │        │  │  ├─ SmallerOrEqualToGreater.php
│  │        │  │  ├─ SmallerOrEqualToSmaller.php
│  │        │  │  ├─ SmallerToGreaterOrEqual.php
│  │        │  │  ├─ SmallerToSmallerOrEqual.php
│  │        │  │  └─ SpaceshipSwitchSides.php
│  │        │  ├─ Laravel
│  │        │  │  ├─ Remove
│  │        │  │  │  └─ LaravelRemoveStringableUpper.php
│  │        │  │  └─ Unwrap
│  │        │  │     └─ LaravelUnwrapStrUpper.php
│  │        │  ├─ Logical
│  │        │  │  ├─ BooleanAndToBooleanOr.php
│  │        │  │  ├─ BooleanOrToBooleanAnd.php
│  │        │  │  ├─ CoalesceRemoveLeft.php
│  │        │  │  ├─ FalseToTrue.php
│  │        │  │  ├─ InstanceOfToFalse.php
│  │        │  │  ├─ InstanceOfToTrue.php
│  │        │  │  ├─ LogicalAndToLogicalOr.php
│  │        │  │  ├─ LogicalOrToLogicalAnd.php
│  │        │  │  ├─ LogicalXorToLogicalAnd.php
│  │        │  │  ├─ RemoveNot.php
│  │        │  │  └─ TrueToFalse.php
│  │        │  ├─ Math
│  │        │  │  ├─ CeilToFloor.php
│  │        │  │  ├─ CeilToRound.php
│  │        │  │  ├─ FloorToCiel.php
│  │        │  │  ├─ FloorToRound.php
│  │        │  │  ├─ MaxToMin.php
│  │        │  │  ├─ MinToMax.php
│  │        │  │  ├─ RoundToCeil.php
│  │        │  │  └─ RoundToFloor.php
│  │        │  ├─ Number
│  │        │  │  ├─ DecrementFloat.php
│  │        │  │  ├─ DecrementInteger.php
│  │        │  │  ├─ IncrementFloat.php
│  │        │  │  └─ IncrementInteger.php
│  │        │  ├─ Removal
│  │        │  │  ├─ RemoveArrayItem.php
│  │        │  │  ├─ RemoveEarlyReturn.php
│  │        │  │  ├─ RemoveFunctionCall.php
│  │        │  │  ├─ RemoveMethodCall.php
│  │        │  │  └─ RemoveNullSafeOperator.php
│  │        │  ├─ Return
│  │        │  │  ├─ AlwaysReturnEmptyArray.php
│  │        │  │  └─ AlwaysReturnNull.php
│  │        │  ├─ Sets
│  │        │  │  ├─ ArithmeticSet.php
│  │        │  │  ├─ ArraySet.php
│  │        │  │  ├─ AssignmentSet.php
│  │        │  │  ├─ CastingSet.php
│  │        │  │  ├─ ControlStructuresSet.php
│  │        │  │  ├─ DefaultSet.php
│  │        │  │  ├─ EqualitySet.php
│  │        │  │  ├─ LaravelSet.php
│  │        │  │  ├─ LogicalSet.php
│  │        │  │  ├─ MathSet.php
│  │        │  │  ├─ NumberSet.php
│  │        │  │  ├─ RemovalSet.php
│  │        │  │  ├─ ReturnSet.php
│  │        │  │  ├─ StringSet.php
│  │        │  │  └─ VisibilitySet.php
│  │        │  ├─ String
│  │        │  │  ├─ ConcatRemoveLeft.php
│  │        │  │  ├─ ConcatRemoveRight.php
│  │        │  │  ├─ ConcatSwitchSides.php
│  │        │  │  ├─ EmptyStringToNotEmpty.php
│  │        │  │  ├─ NotEmptyStringToEmpty.php
│  │        │  │  ├─ StrEndsWithToStrStartsWith.php
│  │        │  │  ├─ StrStartsWithToStrEndsWith.php
│  │        │  │  ├─ UnwrapChop.php
│  │        │  │  ├─ UnwrapChunkSplit.php
│  │        │  │  ├─ UnwrapHtmlEntityDecode.php
│  │        │  │  ├─ UnwrapHtmlentities.php
│  │        │  │  ├─ UnwrapHtmlspecialchars.php
│  │        │  │  ├─ UnwrapHtmlspecialcharsDecode.php
│  │        │  │  ├─ UnwrapLcfirst.php
│  │        │  │  ├─ UnwrapLtrim.php
│  │        │  │  ├─ UnwrapMd5.php
│  │        │  │  ├─ UnwrapNl2br.php
│  │        │  │  ├─ UnwrapRtrim.php
│  │        │  │  ├─ UnwrapStrIreplace.php
│  │        │  │  ├─ UnwrapStrPad.php
│  │        │  │  ├─ UnwrapStrRepeat.php
│  │        │  │  ├─ UnwrapStrReplace.php
│  │        │  │  ├─ UnwrapStrShuffle.php
│  │        │  │  ├─ UnwrapStripTags.php
│  │        │  │  ├─ UnwrapStrrev.php
│  │        │  │  ├─ UnwrapStrtolower.php
│  │        │  │  ├─ UnwrapStrtoupper.php
│  │        │  │  ├─ UnwrapSubstr.php
│  │        │  │  ├─ UnwrapTrim.php
│  │        │  │  ├─ UnwrapUcfirst.php
│  │        │  │  ├─ UnwrapUcwords.php
│  │        │  │  └─ UnwrapWordwrap.php
│  │        │  └─ Visibility
│  │        │     ├─ ConstantProtectedToPrivate.php
│  │        │     ├─ ConstantPublicToProtected.php
│  │        │     ├─ FunctionProtectedToPrivate.php
│  │        │     ├─ FunctionPublicToProtected.php
│  │        │     ├─ PropertyProtectedToPrivate.php
│  │        │     └─ PropertyPublicToProtected.php
│  │        ├─ Mutators.php
│  │        ├─ Options
│  │        │  ├─ BailOption.php
│  │        │  ├─ ClassOption.php
│  │        │  ├─ ClearCacheOption.php
│  │        │  ├─ CoveredOnlyOption.php
│  │        │  ├─ EverythingOption.php
│  │        │  ├─ ExceptOption.php
│  │        │  ├─ IgnoreMinScoreOnZeroMutationsOption.php
│  │        │  ├─ IgnoreOption.php
│  │        │  ├─ MinScoreOption.php
│  │        │  ├─ MutateOption.php
│  │        │  ├─ MutationIdOption.php
│  │        │  ├─ MutatorsOption.php
│  │        │  ├─ NoCacheOption.php
│  │        │  ├─ ParallelOption.php
│  │        │  ├─ PathOption.php
│  │        │  ├─ ProcessesOption.php
│  │        │  ├─ ProfileOption.php
│  │        │  ├─ RetryOption.php
│  │        │  ├─ StopOnUncoveredOption.php
│  │        │  └─ StopOnUntestedOption.php
│  │        ├─ Plugins
│  │        │  └─ Mutate.php
│  │        ├─ Repositories
│  │        │  ├─ ConfigurationRepository.php
│  │        │  ├─ MutationRepository.php
│  │        │  └─ TelemetryRepository.php
│  │        ├─ Subscribers
│  │        │  ├─ DisplayInitialTestRunMessage.php
│  │        │  ├─ EnsureInitialTestRunWasSuccessful.php
│  │        │  ├─ PrepareForInitialTestRun.php
│  │        │  ├─ PrinterSubscriber.php
│  │        │  ├─ StopOnUncoveredMutation.php
│  │        │  ├─ StopOnUntestedMutation.php
│  │        │  ├─ TrackMutationSuiteFinish.php
│  │        │  └─ TrackMutationSuiteStart.php
│  │        ├─ Support
│  │        │  ├─ Configuration
│  │        │  │  ├─ AbstractConfiguration.php
│  │        │  │  ├─ CliConfiguration.php
│  │        │  │  ├─ Configuration.php
│  │        │  │  ├─ GlobalConfiguration.php
│  │        │  │  └─ TestConfiguration.php
│  │        │  ├─ DocGenerator.php
│  │        │  ├─ FileFinder.php
│  │        │  ├─ MutationCache.php
│  │        │  ├─ MutationGenerator.php
│  │        │  ├─ MutationTestResult.php
│  │        │  ├─ MutatorMap.php
│  │        │  ├─ NodeVisitor.php
│  │        │  ├─ PhpParserFactory.php
│  │        │  ├─ Printers
│  │        │  │  └─ DefaultPrinter.php
│  │        │  ├─ ResultCache.php
│  │        │  └─ StreamWrapper.php
│  │        └─ Tester
│  │           ├─ MutationTestRunner.php
│  │           └─ MutationTestRunnerFake.php
│  ├─ phar-io
│  │  ├─ manifest
│  │  │  ├─ .php-cs-fixer.dist.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ composer.lock
│  │  │  ├─ manifest.xsd
│  │  │  ├─ src
│  │  │  │  ├─ ManifestDocumentMapper.php
│  │  │  │  ├─ ManifestLoader.php
│  │  │  │  ├─ ManifestSerializer.php
│  │  │  │  ├─ exceptions
│  │  │  │  │  ├─ ElementCollectionException.php
│  │  │  │  │  ├─ Exception.php
│  │  │  │  │  ├─ InvalidApplicationNameException.php
│  │  │  │  │  ├─ InvalidEmailException.php
│  │  │  │  │  ├─ InvalidUrlException.php
│  │  │  │  │  ├─ ManifestDocumentException.php
│  │  │  │  │  ├─ ManifestDocumentLoadingException.php
│  │  │  │  │  ├─ ManifestDocumentMapperException.php
│  │  │  │  │  ├─ ManifestElementException.php
│  │  │  │  │  ├─ ManifestLoaderException.php
│  │  │  │  │  └─ NoEmailAddressException.php
│  │  │  │  ├─ values
│  │  │  │  │  ├─ Application.php
│  │  │  │  │  ├─ ApplicationName.php
│  │  │  │  │  ├─ Author.php
│  │  │  │  │  ├─ AuthorCollection.php
│  │  │  │  │  ├─ AuthorCollectionIterator.php
│  │  │  │  │  ├─ BundledComponent.php
│  │  │  │  │  ├─ BundledComponentCollection.php
│  │  │  │  │  ├─ BundledComponentCollectionIterator.php
│  │  │  │  │  ├─ CopyrightInformation.php
│  │  │  │  │  ├─ Email.php
│  │  │  │  │  ├─ Extension.php
│  │  │  │  │  ├─ Library.php
│  │  │  │  │  ├─ License.php
│  │  │  │  │  ├─ Manifest.php
│  │  │  │  │  ├─ PhpExtensionRequirement.php
│  │  │  │  │  ├─ PhpVersionRequirement.php
│  │  │  │  │  ├─ Requirement.php
│  │  │  │  │  ├─ RequirementCollection.php
│  │  │  │  │  ├─ RequirementCollectionIterator.php
│  │  │  │  │  ├─ Type.php
│  │  │  │  │  └─ Url.php
│  │  │  │  └─ xml
│  │  │  │     ├─ AuthorElement.php
│  │  │  │     ├─ AuthorElementCollection.php
│  │  │  │     ├─ BundlesElement.php
│  │  │  │     ├─ ComponentElement.php
│  │  │  │     ├─ ComponentElementCollection.php
│  │  │  │     ├─ ContainsElement.php
│  │  │  │     ├─ CopyrightElement.php
│  │  │  │     ├─ ElementCollection.php
│  │  │  │     ├─ ExtElement.php
│  │  │  │     ├─ ExtElementCollection.php
│  │  │  │     ├─ ExtensionElement.php
│  │  │  │     ├─ LicenseElement.php
│  │  │  │     ├─ ManifestDocument.php
│  │  │  │     ├─ ManifestElement.php
│  │  │  │     ├─ PhpElement.php
│  │  │  │     └─ RequiresElement.php
│  │  │  └─ tools
│  │  │     └─ php-cs-fixer.d
│  │  │        ├─ PhpdocSingleLineVarFixer.php
│  │  │        └─ header.txt
│  │  └─ version
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ BuildMetaData.php
│  │        ├─ PreReleaseSuffix.php
│  │        ├─ Version.php
│  │        ├─ VersionConstraintParser.php
│  │        ├─ VersionConstraintValue.php
│  │        ├─ VersionNumber.php
│  │        ├─ constraints
│  │        │  ├─ AbstractVersionConstraint.php
│  │        │  ├─ AndVersionConstraintGroup.php
│  │        │  ├─ AnyVersionConstraint.php
│  │        │  ├─ ExactVersionConstraint.php
│  │        │  ├─ GreaterThanOrEqualToVersionConstraint.php
│  │        │  ├─ OrVersionConstraintGroup.php
│  │        │  ├─ SpecificMajorAndMinorVersionConstraint.php
│  │        │  ├─ SpecificMajorVersionConstraint.php
│  │        │  └─ VersionConstraint.php
│  │        └─ exceptions
│  │           ├─ Exception.php
│  │           ├─ InvalidPreReleaseSuffixException.php
│  │           ├─ InvalidVersionException.php
│  │           ├─ NoBuildMetaDataException.php
│  │           ├─ NoPreReleaseSuffixException.php
│  │           └─ UnsupportedVersionConstraintException.php
│  ├─ php-debugbar
│  │  └─ php-debugbar
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ DebugBar
│  │           ├─ Bridge
│  │           │  ├─ CacheCacheCollector.php
│  │           │  ├─ DoctrineCollector.php
│  │           │  ├─ MonologCollector.php
│  │           │  ├─ NamespacedTwigProfileCollector.php
│  │           │  ├─ Propel2Collector.php
│  │           │  ├─ PropelCollector.php
│  │           │  ├─ SlimCollector.php
│  │           │  ├─ SwiftMailer
│  │           │  │  ├─ SwiftLogCollector.php
│  │           │  │  └─ SwiftMailCollector.php
│  │           │  ├─ Symfony
│  │           │  │  └─ SymfonyMailCollector.php
│  │           │  ├─ Twig
│  │           │  │  ├─ DebugTwigExtension.php
│  │           │  │  ├─ DumpTwigExtension.php
│  │           │  │  ├─ MeasureTwigExtension.php
│  │           │  │  ├─ MeasureTwigNode.php
│  │           │  │  ├─ MeasureTwigTokenParser.php
│  │           │  │  ├─ TimeableTwigExtensionProfiler.php
│  │           │  │  ├─ TraceableTwigEnvironment.php
│  │           │  │  ├─ TraceableTwigTemplate.php
│  │           │  │  └─ TwigCollector.php
│  │           │  └─ TwigProfileCollector.php
│  │           ├─ DataCollector
│  │           │  ├─ AggregatedCollector.php
│  │           │  ├─ AssetProvider.php
│  │           │  ├─ ConfigCollector.php
│  │           │  ├─ DataCollector.php
│  │           │  ├─ DataCollectorInterface.php
│  │           │  ├─ ExceptionsCollector.php
│  │           │  ├─ LocalizationCollector.php
│  │           │  ├─ MemoryCollector.php
│  │           │  ├─ MessagesAggregateInterface.php
│  │           │  ├─ MessagesCollector.php
│  │           │  ├─ ObjectCountCollector.php
│  │           │  ├─ PDO
│  │           │  │  ├─ PDOCollector.php
│  │           │  │  ├─ TraceablePDO.php
│  │           │  │  ├─ TraceablePDOStatement.php
│  │           │  │  └─ TracedStatement.php
│  │           │  ├─ PhpInfoCollector.php
│  │           │  ├─ Renderable.php
│  │           │  ├─ RequestDataCollector.php
│  │           │  └─ TimeDataCollector.php
│  │           ├─ DataFormatter
│  │           │  ├─ DataFormatter.php
│  │           │  ├─ DataFormatterInterface.php
│  │           │  ├─ DebugBarVarDumper.php
│  │           │  ├─ HasDataFormatter.php
│  │           │  ├─ HasXdebugLinks.php
│  │           │  └─ VarDumper
│  │           │     └─ DebugBarHtmlDumper.php
│  │           ├─ DebugBar.php
│  │           ├─ DebugBarException.php
│  │           ├─ HttpDriverInterface.php
│  │           ├─ JavascriptRenderer.php
│  │           ├─ OpenHandler.php
│  │           ├─ PhpHttpDriver.php
│  │           ├─ RequestIdGenerator.php
│  │           ├─ RequestIdGeneratorInterface.php
│  │           ├─ Resources
│  │           │  ├─ debugbar.css
│  │           │  ├─ debugbar.js
│  │           │  ├─ openhandler.css
│  │           │  ├─ openhandler.js
│  │           │  ├─ vendor
│  │           │  │  ├─ font-awesome
│  │           │  │  │  └─ css
│  │           │  │  │     └─ font-awesome.min.css
│  │           │  │  ├─ highlightjs
│  │           │  │  │  ├─ highlight.pack.js
│  │           │  │  │  └─ styles
│  │           │  │  │     └─ github.css
│  │           │  │  └─ jquery
│  │           │  │     └─ dist
│  │           │  │        └─ jquery.min.js
│  │           │  ├─ widgets
│  │           │  │  ├─ mails
│  │           │  │  │  ├─ widget.css
│  │           │  │  │  └─ widget.js
│  │           │  │  ├─ sqlqueries
│  │           │  │  │  ├─ widget.css
│  │           │  │  │  └─ widget.js
│  │           │  │  └─ templates
│  │           │  │     ├─ widget.css
│  │           │  │     └─ widget.js
│  │           │  ├─ widgets.css
│  │           │  └─ widgets.js
│  │           ├─ StandardDebugBar.php
│  │           └─ Storage
│  │              ├─ FileStorage.php
│  │              ├─ MemcachedStorage.php
│  │              ├─ PdoStorage.php
│  │              ├─ RedisStorage.php
│  │              ├─ StorageInterface.php
│  │              └─ pdo_storage_schema.sql
│  ├─ phpdocumentor
│  │  ├─ reflection-common
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Element.php
│  │  │     ├─ File.php
│  │  │     ├─ Fqsen.php
│  │  │     ├─ Location.php
│  │  │     ├─ Project.php
│  │  │     └─ ProjectFactory.php
│  │  ├─ reflection-docblock
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ DocBlock
│  │  │     │  ├─ Description.php
│  │  │     │  ├─ DescriptionFactory.php
│  │  │     │  ├─ ExampleFinder.php
│  │  │     │  ├─ Serializer.php
│  │  │     │  ├─ StandardTagFactory.php
│  │  │     │  ├─ Tag.php
│  │  │     │  ├─ TagFactory.php
│  │  │     │  └─ Tags
│  │  │     │     ├─ Author.php
│  │  │     │     ├─ BaseTag.php
│  │  │     │     ├─ Covers.php
│  │  │     │     ├─ Deprecated.php
│  │  │     │     ├─ Example.php
│  │  │     │     ├─ Extends_.php
│  │  │     │     ├─ Factory
│  │  │     │     │  ├─ AbstractPHPStanFactory.php
│  │  │     │     │  ├─ ExtendsFactory.php
│  │  │     │     │  ├─ Factory.php
│  │  │     │     │  ├─ ImplementsFactory.php
│  │  │     │     │  ├─ MethodFactory.php
│  │  │     │     │  ├─ MethodParameterFactory.php
│  │  │     │     │  ├─ PHPStanFactory.php
│  │  │     │     │  ├─ ParamFactory.php
│  │  │     │     │  ├─ PropertyFactory.php
│  │  │     │     │  ├─ PropertyReadFactory.php
│  │  │     │     │  ├─ PropertyWriteFactory.php
│  │  │     │     │  ├─ ReturnFactory.php
│  │  │     │     │  ├─ StaticMethod.php
│  │  │     │     │  ├─ TemplateExtendsFactory.php
│  │  │     │     │  ├─ TemplateFactory.php
│  │  │     │     │  ├─ TemplateImplementsFactory.php
│  │  │     │     │  └─ VarFactory.php
│  │  │     │     ├─ Formatter
│  │  │     │     │  ├─ AlignFormatter.php
│  │  │     │     │  └─ PassthroughFormatter.php
│  │  │     │     ├─ Formatter.php
│  │  │     │     ├─ Generic.php
│  │  │     │     ├─ Implements_.php
│  │  │     │     ├─ InvalidTag.php
│  │  │     │     ├─ Link.php
│  │  │     │     ├─ Method.php
│  │  │     │     ├─ MethodParameter.php
│  │  │     │     ├─ Mixin.php
│  │  │     │     ├─ Param.php
│  │  │     │     ├─ Property.php
│  │  │     │     ├─ PropertyRead.php
│  │  │     │     ├─ PropertyWrite.php
│  │  │     │     ├─ Reference
│  │  │     │     │  ├─ Fqsen.php
│  │  │     │     │  ├─ Reference.php
│  │  │     │     │  └─ Url.php
│  │  │     │     ├─ Return_.php
│  │  │     │     ├─ See.php
│  │  │     │     ├─ Since.php
│  │  │     │     ├─ Source.php
│  │  │     │     ├─ TagWithType.php
│  │  │     │     ├─ Template.php
│  │  │     │     ├─ TemplateCovariant.php
│  │  │     │     ├─ TemplateExtends.php
│  │  │     │     ├─ TemplateImplements.php
│  │  │     │     ├─ Throws.php
│  │  │     │     ├─ Uses.php
│  │  │     │     ├─ Var_.php
│  │  │     │     └─ Version.php
│  │  │     ├─ DocBlock.php
│  │  │     ├─ DocBlockFactory.php
│  │  │     ├─ DocBlockFactoryInterface.php
│  │  │     ├─ Exception
│  │  │     │  └─ PcreException.php
│  │  │     └─ Utils.php
│  │  └─ type-resolver
│  │     ├─ .phpdoc
│  │     │  └─ template
│  │     │     └─ base.html.twig
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ docs
│  │     │  ├─ getting-started.rst
│  │     │  └─ index.rst
│  │     ├─ phpdoc.dist.xml
│  │     └─ src
│  │        ├─ FqsenResolver.php
│  │        ├─ PseudoType.php
│  │        ├─ PseudoTypes
│  │        │  ├─ ArrayShape.php
│  │        │  ├─ ArrayShapeItem.php
│  │        │  ├─ CallableString.php
│  │        │  ├─ ConstExpression.php
│  │        │  ├─ False_.php
│  │        │  ├─ FloatValue.php
│  │        │  ├─ HtmlEscapedString.php
│  │        │  ├─ IntegerRange.php
│  │        │  ├─ IntegerValue.php
│  │        │  ├─ ListShape.php
│  │        │  ├─ ListShapeItem.php
│  │        │  ├─ List_.php
│  │        │  ├─ LiteralString.php
│  │        │  ├─ LowercaseString.php
│  │        │  ├─ NegativeInteger.php
│  │        │  ├─ NonEmptyArray.php
│  │        │  ├─ NonEmptyList.php
│  │        │  ├─ NonEmptyLowercaseString.php
│  │        │  ├─ NonEmptyString.php
│  │        │  ├─ NumericString.php
│  │        │  ├─ Numeric_.php
│  │        │  ├─ ObjectShape.php
│  │        │  ├─ ObjectShapeItem.php
│  │        │  ├─ PositiveInteger.php
│  │        │  ├─ ShapeItem.php
│  │        │  ├─ StringValue.php
│  │        │  ├─ TraitString.php
│  │        │  └─ True_.php
│  │        ├─ Type.php
│  │        ├─ TypeResolver.php
│  │        └─ Types
│  │           ├─ AbstractList.php
│  │           ├─ AggregatedType.php
│  │           ├─ ArrayKey.php
│  │           ├─ Array_.php
│  │           ├─ Boolean.php
│  │           ├─ CallableParameter.php
│  │           ├─ Callable_.php
│  │           ├─ ClassString.php
│  │           ├─ Collection.php
│  │           ├─ Compound.php
│  │           ├─ Context.php
│  │           ├─ ContextFactory.php
│  │           ├─ Expression.php
│  │           ├─ Float_.php
│  │           ├─ Integer.php
│  │           ├─ InterfaceString.php
│  │           ├─ Intersection.php
│  │           ├─ Iterable_.php
│  │           ├─ Mixed_.php
│  │           ├─ Never_.php
│  │           ├─ Null_.php
│  │           ├─ Nullable.php
│  │           ├─ Object_.php
│  │           ├─ Parent_.php
│  │           ├─ Resource_.php
│  │           ├─ Scalar.php
│  │           ├─ Self_.php
│  │           ├─ Static_.php
│  │           ├─ String_.php
│  │           ├─ This.php
│  │           └─ Void_.php
│  ├─ phpoffice
│  │  └─ phpspreadsheet
│  │     ├─ .readthedocs.yaml
│  │     ├─ CHANGELOG.md
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ PhpSpreadsheet
│  │           ├─ Calculation
│  │           │  ├─ ArrayEnabled.php
│  │           │  ├─ BinaryComparison.php
│  │           │  ├─ Calculation.php
│  │           │  ├─ Category.php
│  │           │  ├─ Database
│  │           │  │  ├─ DAverage.php
│  │           │  │  ├─ DCount.php
│  │           │  │  ├─ DCountA.php
│  │           │  │  ├─ DGet.php
│  │           │  │  ├─ DMax.php
│  │           │  │  ├─ DMin.php
│  │           │  │  ├─ DProduct.php
│  │           │  │  ├─ DStDev.php
│  │           │  │  ├─ DStDevP.php
│  │           │  │  ├─ DSum.php
│  │           │  │  ├─ DVar.php
│  │           │  │  ├─ DVarP.php
│  │           │  │  └─ DatabaseAbstract.php
│  │           │  ├─ Database.php
│  │           │  ├─ DateTime.php
│  │           │  ├─ DateTimeExcel
│  │           │  │  ├─ Constants.php
│  │           │  │  ├─ Current.php
│  │           │  │  ├─ Date.php
│  │           │  │  ├─ DateParts.php
│  │           │  │  ├─ DateValue.php
│  │           │  │  ├─ Days.php
│  │           │  │  ├─ Days360.php
│  │           │  │  ├─ Difference.php
│  │           │  │  ├─ Helpers.php
│  │           │  │  ├─ Month.php
│  │           │  │  ├─ NetworkDays.php
│  │           │  │  ├─ Time.php
│  │           │  │  ├─ TimeParts.php
│  │           │  │  ├─ TimeValue.php
│  │           │  │  ├─ Week.php
│  │           │  │  ├─ WorkDay.php
│  │           │  │  └─ YearFrac.php
│  │           │  ├─ Engine
│  │           │  │  ├─ ArrayArgumentHelper.php
│  │           │  │  ├─ ArrayArgumentProcessor.php
│  │           │  │  ├─ BranchPruner.php
│  │           │  │  ├─ CyclicReferenceStack.php
│  │           │  │  ├─ FormattedNumber.php
│  │           │  │  ├─ Logger.php
│  │           │  │  └─ Operands
│  │           │  │     ├─ Operand.php
│  │           │  │     └─ StructuredReference.php
│  │           │  ├─ Engineering
│  │           │  │  ├─ BesselI.php
│  │           │  │  ├─ BesselJ.php
│  │           │  │  ├─ BesselK.php
│  │           │  │  ├─ BesselY.php
│  │           │  │  ├─ BitWise.php
│  │           │  │  ├─ Compare.php
│  │           │  │  ├─ Complex.php
│  │           │  │  ├─ ComplexFunctions.php
│  │           │  │  ├─ ComplexOperations.php
│  │           │  │  ├─ Constants.php
│  │           │  │  ├─ ConvertBase.php
│  │           │  │  ├─ ConvertBinary.php
│  │           │  │  ├─ ConvertDecimal.php
│  │           │  │  ├─ ConvertHex.php
│  │           │  │  ├─ ConvertOctal.php
│  │           │  │  ├─ ConvertUOM.php
│  │           │  │  ├─ EngineeringValidations.php
│  │           │  │  ├─ Erf.php
│  │           │  │  └─ ErfC.php
│  │           │  ├─ Engineering.php
│  │           │  ├─ Exception.php
│  │           │  ├─ ExceptionHandler.php
│  │           │  ├─ Financial
│  │           │  │  ├─ Amortization.php
│  │           │  │  ├─ CashFlow
│  │           │  │  │  ├─ CashFlowValidations.php
│  │           │  │  │  ├─ Constant
│  │           │  │  │  │  ├─ Periodic
│  │           │  │  │  │  │  ├─ Cumulative.php
│  │           │  │  │  │  │  ├─ Interest.php
│  │           │  │  │  │  │  ├─ InterestAndPrincipal.php
│  │           │  │  │  │  │  └─ Payments.php
│  │           │  │  │  │  └─ Periodic.php
│  │           │  │  │  ├─ Single.php
│  │           │  │  │  └─ Variable
│  │           │  │  │     ├─ NonPeriodic.php
│  │           │  │  │     └─ Periodic.php
│  │           │  │  ├─ Constants.php
│  │           │  │  ├─ Coupons.php
│  │           │  │  ├─ Depreciation.php
│  │           │  │  ├─ Dollar.php
│  │           │  │  ├─ FinancialValidations.php
│  │           │  │  ├─ Helpers.php
│  │           │  │  ├─ InterestRate.php
│  │           │  │  ├─ Securities
│  │           │  │  │  ├─ AccruedInterest.php
│  │           │  │  │  ├─ Price.php
│  │           │  │  │  ├─ Rates.php
│  │           │  │  │  ├─ SecurityValidations.php
│  │           │  │  │  └─ Yields.php
│  │           │  │  └─ TreasuryBill.php
│  │           │  ├─ Financial.php
│  │           │  ├─ FormulaParser.php
│  │           │  ├─ FormulaToken.php
│  │           │  ├─ Functions.php
│  │           │  ├─ Information
│  │           │  │  ├─ ErrorValue.php
│  │           │  │  ├─ ExcelError.php
│  │           │  │  └─ Value.php
│  │           │  ├─ Internal
│  │           │  │  ├─ MakeMatrix.php
│  │           │  │  └─ WildcardMatch.php
│  │           │  ├─ Logical
│  │           │  │  ├─ Boolean.php
│  │           │  │  ├─ Conditional.php
│  │           │  │  └─ Operations.php
│  │           │  ├─ Logical.php
│  │           │  ├─ LookupRef
│  │           │  │  ├─ Address.php
│  │           │  │  ├─ ExcelMatch.php
│  │           │  │  ├─ Filter.php
│  │           │  │  ├─ Formula.php
│  │           │  │  ├─ HLookup.php
│  │           │  │  ├─ Helpers.php
│  │           │  │  ├─ Hyperlink.php
│  │           │  │  ├─ Indirect.php
│  │           │  │  ├─ Lookup.php
│  │           │  │  ├─ LookupBase.php
│  │           │  │  ├─ LookupRefValidations.php
│  │           │  │  ├─ Matrix.php
│  │           │  │  ├─ Offset.php
│  │           │  │  ├─ RowColumnInformation.php
│  │           │  │  ├─ Selection.php
│  │           │  │  ├─ Sort.php
│  │           │  │  ├─ Unique.php
│  │           │  │  └─ VLookup.php
│  │           │  ├─ LookupRef.php
│  │           │  ├─ MathTrig
│  │           │  │  ├─ Absolute.php
│  │           │  │  ├─ Angle.php
│  │           │  │  ├─ Arabic.php
│  │           │  │  ├─ Base.php
│  │           │  │  ├─ Ceiling.php
│  │           │  │  ├─ Combinations.php
│  │           │  │  ├─ Exp.php
│  │           │  │  ├─ Factorial.php
│  │           │  │  ├─ Floor.php
│  │           │  │  ├─ Gcd.php
│  │           │  │  ├─ Helpers.php
│  │           │  │  ├─ IntClass.php
│  │           │  │  ├─ Lcm.php
│  │           │  │  ├─ Logarithms.php
│  │           │  │  ├─ MatrixFunctions.php
│  │           │  │  ├─ Operations.php
│  │           │  │  ├─ Random.php
│  │           │  │  ├─ Roman.php
│  │           │  │  ├─ Round.php
│  │           │  │  ├─ SeriesSum.php
│  │           │  │  ├─ Sign.php
│  │           │  │  ├─ Sqrt.php
│  │           │  │  ├─ Subtotal.php
│  │           │  │  ├─ Sum.php
│  │           │  │  ├─ SumSquares.php
│  │           │  │  ├─ Trig
│  │           │  │  │  ├─ Cosecant.php
│  │           │  │  │  ├─ Cosine.php
│  │           │  │  │  ├─ Cotangent.php
│  │           │  │  │  ├─ Secant.php
│  │           │  │  │  ├─ Sine.php
│  │           │  │  │  └─ Tangent.php
│  │           │  │  └─ Trunc.php
│  │           │  ├─ MathTrig.php
│  │           │  ├─ Statistical
│  │           │  │  ├─ AggregateBase.php
│  │           │  │  ├─ Averages
│  │           │  │  │  └─ Mean.php
│  │           │  │  ├─ Averages.php
│  │           │  │  ├─ Conditional.php
│  │           │  │  ├─ Confidence.php
│  │           │  │  ├─ Counts.php
│  │           │  │  ├─ Deviations.php
│  │           │  │  ├─ Distributions
│  │           │  │  │  ├─ Beta.php
│  │           │  │  │  ├─ Binomial.php
│  │           │  │  │  ├─ ChiSquared.php
│  │           │  │  │  ├─ DistributionValidations.php
│  │           │  │  │  ├─ Exponential.php
│  │           │  │  │  ├─ F.php
│  │           │  │  │  ├─ Fisher.php
│  │           │  │  │  ├─ Gamma.php
│  │           │  │  │  ├─ GammaBase.php
│  │           │  │  │  ├─ HyperGeometric.php
│  │           │  │  │  ├─ LogNormal.php
│  │           │  │  │  ├─ NewtonRaphson.php
│  │           │  │  │  ├─ Normal.php
│  │           │  │  │  ├─ Poisson.php
│  │           │  │  │  ├─ StandardNormal.php
│  │           │  │  │  ├─ StudentT.php
│  │           │  │  │  └─ Weibull.php
│  │           │  │  ├─ MaxMinBase.php
│  │           │  │  ├─ Maximum.php
│  │           │  │  ├─ Minimum.php
│  │           │  │  ├─ Percentiles.php
│  │           │  │  ├─ Permutations.php
│  │           │  │  ├─ Size.php
│  │           │  │  ├─ StandardDeviations.php
│  │           │  │  ├─ Standardize.php
│  │           │  │  ├─ StatisticalValidations.php
│  │           │  │  ├─ Trends.php
│  │           │  │  ├─ VarianceBase.php
│  │           │  │  └─ Variances.php
│  │           │  ├─ Statistical.php
│  │           │  ├─ TextData
│  │           │  │  ├─ CaseConvert.php
│  │           │  │  ├─ CharacterConvert.php
│  │           │  │  ├─ Concatenate.php
│  │           │  │  ├─ Extract.php
│  │           │  │  ├─ Format.php
│  │           │  │  ├─ Helpers.php
│  │           │  │  ├─ Replace.php
│  │           │  │  ├─ Search.php
│  │           │  │  ├─ Text.php
│  │           │  │  └─ Trim.php
│  │           │  ├─ TextData.php
│  │           │  ├─ Token
│  │           │  │  └─ Stack.php
│  │           │  ├─ Web
│  │           │  │  └─ Service.php
│  │           │  ├─ Web.php
│  │           │  └─ locale
│  │           │     ├─ Translations.xlsx
│  │           │     ├─ bg
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ cs
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ da
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ de
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ en
│  │           │     │  └─ uk
│  │           │     │     └─ config
│  │           │     ├─ es
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ fi
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ fr
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ hu
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ it
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ nb
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ nl
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ pl
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ pt
│  │           │     │  ├─ br
│  │           │     │  │  ├─ config
│  │           │     │  │  └─ functions
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ ru
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     ├─ sv
│  │           │     │  ├─ config
│  │           │     │  └─ functions
│  │           │     └─ tr
│  │           │        ├─ config
│  │           │        └─ functions
│  │           ├─ Cell
│  │           │  ├─ AddressHelper.php
│  │           │  ├─ AddressRange.php
│  │           │  ├─ AdvancedValueBinder.php
│  │           │  ├─ Cell.php
│  │           │  ├─ CellAddress.php
│  │           │  ├─ CellRange.php
│  │           │  ├─ ColumnRange.php
│  │           │  ├─ Coordinate.php
│  │           │  ├─ DataType.php
│  │           │  ├─ DataValidation.php
│  │           │  ├─ DataValidator.php
│  │           │  ├─ DefaultValueBinder.php
│  │           │  ├─ Hyperlink.php
│  │           │  ├─ IValueBinder.php
│  │           │  ├─ IgnoredErrors.php
│  │           │  ├─ RowRange.php
│  │           │  └─ StringValueBinder.php
│  │           ├─ CellReferenceHelper.php
│  │           ├─ Chart
│  │           │  ├─ Axis.php
│  │           │  ├─ AxisText.php
│  │           │  ├─ Chart.php
│  │           │  ├─ ChartColor.php
│  │           │  ├─ DataSeries.php
│  │           │  ├─ DataSeriesValues.php
│  │           │  ├─ Exception.php
│  │           │  ├─ GridLines.php
│  │           │  ├─ Layout.php
│  │           │  ├─ Legend.php
│  │           │  ├─ PlotArea.php
│  │           │  ├─ Properties.php
│  │           │  ├─ Renderer
│  │           │  │  ├─ IRenderer.php
│  │           │  │  ├─ JpGraph.php
│  │           │  │  ├─ JpGraphRendererBase.php
│  │           │  │  ├─ MtJpGraphRenderer.php
│  │           │  │  └─ PHP Charting Libraries.txt
│  │           │  ├─ Title.php
│  │           │  └─ TrendLine.php
│  │           ├─ Collection
│  │           │  ├─ Cells.php
│  │           │  ├─ CellsFactory.php
│  │           │  └─ Memory
│  │           │     ├─ SimpleCache1.php
│  │           │     └─ SimpleCache3.php
│  │           ├─ Comment.php
│  │           ├─ DefinedName.php
│  │           ├─ Document
│  │           │  ├─ Properties.php
│  │           │  └─ Security.php
│  │           ├─ Exception.php
│  │           ├─ HashTable.php
│  │           ├─ Helper
│  │           │  ├─ Dimension.php
│  │           │  ├─ Downloader.php
│  │           │  ├─ Handler.php
│  │           │  ├─ Html.php
│  │           │  ├─ Sample.php
│  │           │  ├─ Size.php
│  │           │  └─ TextGrid.php
│  │           ├─ IComparable.php
│  │           ├─ IOFactory.php
│  │           ├─ NamedFormula.php
│  │           ├─ NamedRange.php
│  │           ├─ Reader
│  │           │  ├─ BaseReader.php
│  │           │  ├─ Csv
│  │           │  │  └─ Delimiter.php
│  │           │  ├─ Csv.php
│  │           │  ├─ DefaultReadFilter.php
│  │           │  ├─ Exception.php
│  │           │  ├─ Gnumeric
│  │           │  │  ├─ PageSetup.php
│  │           │  │  ├─ Properties.php
│  │           │  │  └─ Styles.php
│  │           │  ├─ Gnumeric.php
│  │           │  ├─ Html.php
│  │           │  ├─ IReadFilter.php
│  │           │  ├─ IReader.php
│  │           │  ├─ Ods
│  │           │  │  ├─ AutoFilter.php
│  │           │  │  ├─ BaseLoader.php
│  │           │  │  ├─ DefinedNames.php
│  │           │  │  ├─ FormulaTranslator.php
│  │           │  │  ├─ PageSettings.php
│  │           │  │  └─ Properties.php
│  │           │  ├─ Ods.php
│  │           │  ├─ Security
│  │           │  │  └─ XmlScanner.php
│  │           │  ├─ Slk.php
│  │           │  ├─ Xls
│  │           │  │  ├─ Color
│  │           │  │  │  ├─ BIFF5.php
│  │           │  │  │  ├─ BIFF8.php
│  │           │  │  │  └─ BuiltIn.php
│  │           │  │  ├─ Color.php
│  │           │  │  ├─ ConditionalFormatting.php
│  │           │  │  ├─ DataValidationHelper.php
│  │           │  │  ├─ ErrorCode.php
│  │           │  │  ├─ Escher.php
│  │           │  │  ├─ MD5.php
│  │           │  │  ├─ RC4.php
│  │           │  │  └─ Style
│  │           │  │     ├─ Border.php
│  │           │  │     ├─ CellAlignment.php
│  │           │  │     ├─ CellFont.php
│  │           │  │     └─ FillPattern.php
│  │           │  ├─ Xls.php
│  │           │  ├─ Xlsx
│  │           │  │  ├─ AutoFilter.php
│  │           │  │  ├─ BaseParserClass.php
│  │           │  │  ├─ Chart.php
│  │           │  │  ├─ ColumnAndRowAttributes.php
│  │           │  │  ├─ ConditionalStyles.php
│  │           │  │  ├─ DataValidations.php
│  │           │  │  ├─ Hyperlinks.php
│  │           │  │  ├─ Namespaces.php
│  │           │  │  ├─ PageSetup.php
│  │           │  │  ├─ Properties.php
│  │           │  │  ├─ SharedFormula.php
│  │           │  │  ├─ SheetViewOptions.php
│  │           │  │  ├─ SheetViews.php
│  │           │  │  ├─ Styles.php
│  │           │  │  ├─ TableReader.php
│  │           │  │  ├─ Theme.php
│  │           │  │  └─ WorkbookView.php
│  │           │  ├─ Xlsx.php
│  │           │  ├─ Xml
│  │           │  │  ├─ DataValidations.php
│  │           │  │  ├─ PageSettings.php
│  │           │  │  ├─ Properties.php
│  │           │  │  ├─ Style
│  │           │  │  │  ├─ Alignment.php
│  │           │  │  │  ├─ Border.php
│  │           │  │  │  ├─ Fill.php
│  │           │  │  │  ├─ Font.php
│  │           │  │  │  ├─ NumberFormat.php
│  │           │  │  │  └─ StyleBase.php
│  │           │  │  └─ Style.php
│  │           │  └─ Xml.php
│  │           ├─ ReferenceHelper.php
│  │           ├─ RichText
│  │           │  ├─ ITextElement.php
│  │           │  ├─ RichText.php
│  │           │  ├─ Run.php
│  │           │  └─ TextElement.php
│  │           ├─ Settings.php
│  │           ├─ Shared
│  │           │  ├─ CodePage.php
│  │           │  ├─ Date.php
│  │           │  ├─ Drawing.php
│  │           │  ├─ Escher
│  │           │  │  ├─ DgContainer
│  │           │  │  │  ├─ SpgrContainer
│  │           │  │  │  │  └─ SpContainer.php
│  │           │  │  │  └─ SpgrContainer.php
│  │           │  │  ├─ DgContainer.php
│  │           │  │  ├─ DggContainer
│  │           │  │  │  ├─ BstoreContainer
│  │           │  │  │  │  ├─ BSE
│  │           │  │  │  │  │  └─ Blip.php
│  │           │  │  │  │  └─ BSE.php
│  │           │  │  │  └─ BstoreContainer.php
│  │           │  │  └─ DggContainer.php
│  │           │  ├─ Escher.php
│  │           │  ├─ File.php
│  │           │  ├─ Font.php
│  │           │  ├─ IntOrFloat.php
│  │           │  ├─ OLE
│  │           │  │  ├─ ChainedBlockStream.php
│  │           │  │  ├─ PPS
│  │           │  │  │  ├─ File.php
│  │           │  │  │  └─ Root.php
│  │           │  │  └─ PPS.php
│  │           │  ├─ OLE.php
│  │           │  ├─ OLERead.php
│  │           │  ├─ PasswordHasher.php
│  │           │  ├─ StringHelper.php
│  │           │  ├─ TimeZone.php
│  │           │  ├─ Trend
│  │           │  │  ├─ BestFit.php
│  │           │  │  ├─ ExponentialBestFit.php
│  │           │  │  ├─ LinearBestFit.php
│  │           │  │  ├─ LogarithmicBestFit.php
│  │           │  │  ├─ PolynomialBestFit.php
│  │           │  │  ├─ PowerBestFit.php
│  │           │  │  └─ Trend.php
│  │           │  ├─ XMLWriter.php
│  │           │  └─ Xls.php
│  │           ├─ Spreadsheet.php
│  │           ├─ Style
│  │           │  ├─ Alignment.php
│  │           │  ├─ Border.php
│  │           │  ├─ Borders.php
│  │           │  ├─ Color.php
│  │           │  ├─ Conditional.php
│  │           │  ├─ ConditionalFormatting
│  │           │  │  ├─ CellMatcher.php
│  │           │  │  ├─ CellStyleAssessor.php
│  │           │  │  ├─ ConditionalDataBar.php
│  │           │  │  ├─ ConditionalDataBarExtension.php
│  │           │  │  ├─ ConditionalFormatValueObject.php
│  │           │  │  ├─ ConditionalFormattingRuleExtension.php
│  │           │  │  ├─ StyleMerger.php
│  │           │  │  ├─ Wizard
│  │           │  │  │  ├─ Blanks.php
│  │           │  │  │  ├─ CellValue.php
│  │           │  │  │  ├─ DateValue.php
│  │           │  │  │  ├─ Duplicates.php
│  │           │  │  │  ├─ Errors.php
│  │           │  │  │  ├─ Expression.php
│  │           │  │  │  ├─ TextValue.php
│  │           │  │  │  ├─ WizardAbstract.php
│  │           │  │  │  └─ WizardInterface.php
│  │           │  │  └─ Wizard.php
│  │           │  ├─ Fill.php
│  │           │  ├─ Font.php
│  │           │  ├─ NumberFormat
│  │           │  │  ├─ BaseFormatter.php
│  │           │  │  ├─ DateFormatter.php
│  │           │  │  ├─ Formatter.php
│  │           │  │  ├─ FractionFormatter.php
│  │           │  │  ├─ NumberFormatter.php
│  │           │  │  ├─ PercentageFormatter.php
│  │           │  │  └─ Wizard
│  │           │  │     ├─ Accounting.php
│  │           │  │     ├─ Currency.php
│  │           │  │     ├─ Date.php
│  │           │  │     ├─ DateTime.php
│  │           │  │     ├─ DateTimeWizard.php
│  │           │  │     ├─ Duration.php
│  │           │  │     ├─ Locale.php
│  │           │  │     ├─ Number.php
│  │           │  │     ├─ NumberBase.php
│  │           │  │     ├─ Percentage.php
│  │           │  │     ├─ Scientific.php
│  │           │  │     ├─ Time.php
│  │           │  │     └─ Wizard.php
│  │           │  ├─ NumberFormat.php
│  │           │  ├─ Protection.php
│  │           │  ├─ RgbTint.php
│  │           │  ├─ Style.php
│  │           │  └─ Supervisor.php
│  │           ├─ Theme.php
│  │           ├─ Worksheet
│  │           │  ├─ AutoFilter
│  │           │  │  ├─ Column
│  │           │  │  │  └─ Rule.php
│  │           │  │  └─ Column.php
│  │           │  ├─ AutoFilter.php
│  │           │  ├─ AutoFit.php
│  │           │  ├─ BaseDrawing.php
│  │           │  ├─ CellIterator.php
│  │           │  ├─ Column.php
│  │           │  ├─ ColumnCellIterator.php
│  │           │  ├─ ColumnDimension.php
│  │           │  ├─ ColumnIterator.php
│  │           │  ├─ Dimension.php
│  │           │  ├─ Drawing
│  │           │  │  └─ Shadow.php
│  │           │  ├─ Drawing.php
│  │           │  ├─ HeaderFooter.php
│  │           │  ├─ HeaderFooterDrawing.php
│  │           │  ├─ Iterator.php
│  │           │  ├─ MemoryDrawing.php
│  │           │  ├─ PageBreak.php
│  │           │  ├─ PageMargins.php
│  │           │  ├─ PageSetup.php
│  │           │  ├─ Protection.php
│  │           │  ├─ Row.php
│  │           │  ├─ RowCellIterator.php
│  │           │  ├─ RowDimension.php
│  │           │  ├─ RowIterator.php
│  │           │  ├─ SheetView.php
│  │           │  ├─ Table
│  │           │  │  ├─ Column.php
│  │           │  │  └─ TableStyle.php
│  │           │  ├─ Table.php
│  │           │  ├─ Validations.php
│  │           │  └─ Worksheet.php
│  │           └─ Writer
│  │              ├─ BaseWriter.php
│  │              ├─ Csv.php
│  │              ├─ Exception.php
│  │              ├─ Html.php
│  │              ├─ IWriter.php
│  │              ├─ Ods
│  │              │  ├─ AutoFilters.php
│  │              │  ├─ Cell
│  │              │  │  ├─ Comment.php
│  │              │  │  └─ Style.php
│  │              │  ├─ Content.php
│  │              │  ├─ Formula.php
│  │              │  ├─ Meta.php
│  │              │  ├─ MetaInf.php
│  │              │  ├─ Mimetype.php
│  │              │  ├─ NamedExpressions.php
│  │              │  ├─ Settings.php
│  │              │  ├─ Styles.php
│  │              │  ├─ Thumbnails.php
│  │              │  └─ WriterPart.php
│  │              ├─ Ods.php
│  │              ├─ Pdf
│  │              │  ├─ Dompdf.php
│  │              │  ├─ Mpdf.php
│  │              │  └─ Tcpdf.php
│  │              ├─ Pdf.php
│  │              ├─ Xls
│  │              │  ├─ BIFFwriter.php
│  │              │  ├─ CellDataValidation.php
│  │              │  ├─ ConditionalHelper.php
│  │              │  ├─ ErrorCode.php
│  │              │  ├─ Escher.php
│  │              │  ├─ Font.php
│  │              │  ├─ Parser.php
│  │              │  ├─ Style
│  │              │  │  ├─ CellAlignment.php
│  │              │  │  ├─ CellBorder.php
│  │              │  │  ├─ CellFill.php
│  │              │  │  └─ ColorMap.php
│  │              │  ├─ Workbook.php
│  │              │  ├─ Worksheet.php
│  │              │  └─ Xf.php
│  │              ├─ Xls.php
│  │              ├─ Xlsx
│  │              │  ├─ AutoFilter.php
│  │              │  ├─ Chart.php
│  │              │  ├─ Comments.php
│  │              │  ├─ ContentTypes.php
│  │              │  ├─ DefinedNames.php
│  │              │  ├─ DocProps.php
│  │              │  ├─ Drawing.php
│  │              │  ├─ FunctionPrefix.php
│  │              │  ├─ Rels.php
│  │              │  ├─ RelsRibbon.php
│  │              │  ├─ RelsVBA.php
│  │              │  ├─ StringTable.php
│  │              │  ├─ Style.php
│  │              │  ├─ Table.php
│  │              │  ├─ Theme.php
│  │              │  ├─ Workbook.php
│  │              │  ├─ Worksheet.php
│  │              │  └─ WriterPart.php
│  │              ├─ Xlsx.php
│  │              ├─ ZipStream0.php
│  │              ├─ ZipStream2.php
│  │              └─ ZipStream3.php
│  ├─ phpoption
│  │  └─ phpoption
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ PhpOption
│  │           ├─ LazyOption.php
│  │           ├─ None.php
│  │           ├─ Option.php
│  │           └─ Some.php
│  ├─ phpstan
│  │  └─ phpdoc-parser
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ UPGRADING.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Ast
│  │        │  ├─ AbstractNodeVisitor.php
│  │        │  ├─ Attribute.php
│  │        │  ├─ Comment.php
│  │        │  ├─ ConstExpr
│  │        │  │  ├─ ConstExprArrayItemNode.php
│  │        │  │  ├─ ConstExprArrayNode.php
│  │        │  │  ├─ ConstExprFalseNode.php
│  │        │  │  ├─ ConstExprFloatNode.php
│  │        │  │  ├─ ConstExprIntegerNode.php
│  │        │  │  ├─ ConstExprNode.php
│  │        │  │  ├─ ConstExprNullNode.php
│  │        │  │  ├─ ConstExprStringNode.php
│  │        │  │  ├─ ConstExprTrueNode.php
│  │        │  │  ├─ ConstFetchNode.php
│  │        │  │  └─ DoctrineConstExprStringNode.php
│  │        │  ├─ Node.php
│  │        │  ├─ NodeAttributes.php
│  │        │  ├─ NodeTraverser.php
│  │        │  ├─ NodeVisitor
│  │        │  │  └─ CloningVisitor.php
│  │        │  ├─ NodeVisitor.php
│  │        │  ├─ PhpDoc
│  │        │  │  ├─ AssertTagMethodValueNode.php
│  │        │  │  ├─ AssertTagPropertyValueNode.php
│  │        │  │  ├─ AssertTagValueNode.php
│  │        │  │  ├─ DeprecatedTagValueNode.php
│  │        │  │  ├─ Doctrine
│  │        │  │  │  ├─ DoctrineAnnotation.php
│  │        │  │  │  ├─ DoctrineArgument.php
│  │        │  │  │  ├─ DoctrineArray.php
│  │        │  │  │  ├─ DoctrineArrayItem.php
│  │        │  │  │  └─ DoctrineTagValueNode.php
│  │        │  │  ├─ ExtendsTagValueNode.php
│  │        │  │  ├─ GenericTagValueNode.php
│  │        │  │  ├─ ImplementsTagValueNode.php
│  │        │  │  ├─ InvalidTagValueNode.php
│  │        │  │  ├─ MethodTagValueNode.php
│  │        │  │  ├─ MethodTagValueParameterNode.php
│  │        │  │  ├─ MixinTagValueNode.php
│  │        │  │  ├─ ParamClosureThisTagValueNode.php
│  │        │  │  ├─ ParamImmediatelyInvokedCallableTagValueNode.php
│  │        │  │  ├─ ParamLaterInvokedCallableTagValueNode.php
│  │        │  │  ├─ ParamOutTagValueNode.php
│  │        │  │  ├─ ParamTagValueNode.php
│  │        │  │  ├─ PhpDocChildNode.php
│  │        │  │  ├─ PhpDocNode.php
│  │        │  │  ├─ PhpDocTagNode.php
│  │        │  │  ├─ PhpDocTagValueNode.php
│  │        │  │  ├─ PhpDocTextNode.php
│  │        │  │  ├─ PropertyTagValueNode.php
│  │        │  │  ├─ PureUnlessCallableIsImpureTagValueNode.php
│  │        │  │  ├─ RequireExtendsTagValueNode.php
│  │        │  │  ├─ RequireImplementsTagValueNode.php
│  │        │  │  ├─ ReturnTagValueNode.php
│  │        │  │  ├─ SelfOutTagValueNode.php
│  │        │  │  ├─ TemplateTagValueNode.php
│  │        │  │  ├─ ThrowsTagValueNode.php
│  │        │  │  ├─ TypeAliasImportTagValueNode.php
│  │        │  │  ├─ TypeAliasTagValueNode.php
│  │        │  │  ├─ TypelessParamTagValueNode.php
│  │        │  │  ├─ UsesTagValueNode.php
│  │        │  │  └─ VarTagValueNode.php
│  │        │  └─ Type
│  │        │     ├─ ArrayShapeItemNode.php
│  │        │     ├─ ArrayShapeNode.php
│  │        │     ├─ ArrayShapeUnsealedTypeNode.php
│  │        │     ├─ ArrayTypeNode.php
│  │        │     ├─ CallableTypeNode.php
│  │        │     ├─ CallableTypeParameterNode.php
│  │        │     ├─ ConditionalTypeForParameterNode.php
│  │        │     ├─ ConditionalTypeNode.php
│  │        │     ├─ ConstTypeNode.php
│  │        │     ├─ GenericTypeNode.php
│  │        │     ├─ IdentifierTypeNode.php
│  │        │     ├─ IntersectionTypeNode.php
│  │        │     ├─ InvalidTypeNode.php
│  │        │     ├─ NullableTypeNode.php
│  │        │     ├─ ObjectShapeItemNode.php
│  │        │     ├─ ObjectShapeNode.php
│  │        │     ├─ OffsetAccessTypeNode.php
│  │        │     ├─ ThisTypeNode.php
│  │        │     ├─ TypeNode.php
│  │        │     └─ UnionTypeNode.php
│  │        ├─ Lexer
│  │        │  └─ Lexer.php
│  │        ├─ Parser
│  │        │  ├─ ConstExprParser.php
│  │        │  ├─ ParserException.php
│  │        │  ├─ PhpDocParser.php
│  │        │  ├─ StringUnescaper.php
│  │        │  ├─ TokenIterator.php
│  │        │  └─ TypeParser.php
│  │        ├─ ParserConfig.php
│  │        └─ Printer
│  │           ├─ DiffElem.php
│  │           ├─ Differ.php
│  │           └─ Printer.php
│  ├─ phpunit
│  │  ├─ php-code-coverage
│  │  │  ├─ ChangeLog-11.0.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ CodeCoverage.php
│  │  │     ├─ Data
│  │  │     │  ├─ ProcessedCodeCoverageData.php
│  │  │     │  └─ RawCodeCoverageData.php
│  │  │     ├─ Driver
│  │  │     │  ├─ Driver.php
│  │  │     │  ├─ PcovDriver.php
│  │  │     │  ├─ Selector.php
│  │  │     │  └─ XdebugDriver.php
│  │  │     ├─ Exception
│  │  │     │  ├─ BranchAndPathCoverageNotSupportedException.php
│  │  │     │  ├─ DeadCodeDetectionNotSupportedException.php
│  │  │     │  ├─ DirectoryCouldNotBeCreatedException.php
│  │  │     │  ├─ Exception.php
│  │  │     │  ├─ FileCouldNotBeWrittenException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ NoCodeCoverageDriverAvailableException.php
│  │  │     │  ├─ NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php
│  │  │     │  ├─ ParserException.php
│  │  │     │  ├─ PathExistsButIsNotDirectoryException.php
│  │  │     │  ├─ PcovNotAvailableException.php
│  │  │     │  ├─ ReflectionException.php
│  │  │     │  ├─ ReportAlreadyFinalizedException.php
│  │  │     │  ├─ StaticAnalysisCacheNotConfiguredException.php
│  │  │     │  ├─ TestIdMissingException.php
│  │  │     │  ├─ UnintentionallyCoveredCodeException.php
│  │  │     │  ├─ WriteOperationFailedException.php
│  │  │     │  ├─ XdebugNotAvailableException.php
│  │  │     │  ├─ XdebugNotEnabledException.php
│  │  │     │  └─ XmlException.php
│  │  │     ├─ Filter.php
│  │  │     ├─ Node
│  │  │     │  ├─ AbstractNode.php
│  │  │     │  ├─ Builder.php
│  │  │     │  ├─ CrapIndex.php
│  │  │     │  ├─ Directory.php
│  │  │     │  ├─ File.php
│  │  │     │  └─ Iterator.php
│  │  │     ├─ Report
│  │  │     │  ├─ Clover.php
│  │  │     │  ├─ Cobertura.php
│  │  │     │  ├─ Crap4j.php
│  │  │     │  ├─ Html
│  │  │     │  │  ├─ Colors.php
│  │  │     │  │  ├─ CustomCssFile.php
│  │  │     │  │  ├─ Facade.php
│  │  │     │  │  ├─ Renderer
│  │  │     │  │  │  ├─ Dashboard.php
│  │  │     │  │  │  ├─ Directory.php
│  │  │     │  │  │  ├─ File.php
│  │  │     │  │  │  └─ Template
│  │  │     │  │  │     ├─ branches.html.dist
│  │  │     │  │  │     ├─ coverage_bar.html.dist
│  │  │     │  │  │     ├─ coverage_bar_branch.html.dist
│  │  │     │  │  │     ├─ css
│  │  │     │  │  │     │  ├─ bootstrap.min.css
│  │  │     │  │  │     │  ├─ custom.css
│  │  │     │  │  │     │  ├─ nv.d3.min.css
│  │  │     │  │  │     │  ├─ octicons.css
│  │  │     │  │  │     │  └─ style.css
│  │  │     │  │  │     ├─ dashboard.html.dist
│  │  │     │  │  │     ├─ dashboard_branch.html.dist
│  │  │     │  │  │     ├─ directory.html.dist
│  │  │     │  │  │     ├─ directory_branch.html.dist
│  │  │     │  │  │     ├─ directory_item.html.dist
│  │  │     │  │  │     ├─ directory_item_branch.html.dist
│  │  │     │  │  │     ├─ file.html.dist
│  │  │     │  │  │     ├─ file_branch.html.dist
│  │  │     │  │  │     ├─ file_item.html.dist
│  │  │     │  │  │     ├─ file_item_branch.html.dist
│  │  │     │  │  │     ├─ icons
│  │  │     │  │  │     │  ├─ file-code.svg
│  │  │     │  │  │     │  └─ file-directory.svg
│  │  │     │  │  │     ├─ js
│  │  │     │  │  │     │  ├─ bootstrap.bundle.min.js
│  │  │     │  │  │     │  ├─ d3.min.js
│  │  │     │  │  │     │  ├─ file.js
│  │  │     │  │  │     │  ├─ jquery.min.js
│  │  │     │  │  │     │  └─ nv.d3.min.js
│  │  │     │  │  │     ├─ line.html.dist
│  │  │     │  │  │     ├─ lines.html.dist
│  │  │     │  │  │     ├─ method_item.html.dist
│  │  │     │  │  │     ├─ method_item_branch.html.dist
│  │  │     │  │  │     └─ paths.html.dist
│  │  │     │  │  └─ Renderer.php
│  │  │     │  ├─ PHP.php
│  │  │     │  ├─ Text.php
│  │  │     │  ├─ Thresholds.php
│  │  │     │  └─ Xml
│  │  │     │     ├─ BuildInformation.php
│  │  │     │     ├─ Coverage.php
│  │  │     │     ├─ Directory.php
│  │  │     │     ├─ Facade.php
│  │  │     │     ├─ File.php
│  │  │     │     ├─ Method.php
│  │  │     │     ├─ Node.php
│  │  │     │     ├─ Project.php
│  │  │     │     ├─ Report.php
│  │  │     │     ├─ Source.php
│  │  │     │     ├─ Tests.php
│  │  │     │     ├─ Totals.php
│  │  │     │     └─ Unit.php
│  │  │     ├─ StaticAnalysis
│  │  │     │  ├─ CacheWarmer.php
│  │  │     │  ├─ CachingFileAnalyser.php
│  │  │     │  ├─ CodeUnitFindingVisitor.php
│  │  │     │  ├─ ExecutableLinesFindingVisitor.php
│  │  │     │  ├─ FileAnalyser.php
│  │  │     │  ├─ IgnoredLinesFindingVisitor.php
│  │  │     │  └─ ParsingFileAnalyser.php
│  │  │     ├─ TestSize
│  │  │     │  ├─ Known.php
│  │  │     │  ├─ Large.php
│  │  │     │  ├─ Medium.php
│  │  │     │  ├─ Small.php
│  │  │     │  ├─ TestSize.php
│  │  │     │  └─ Unknown.php
│  │  │     ├─ TestStatus
│  │  │     │  ├─ Failure.php
│  │  │     │  ├─ Known.php
│  │  │     │  ├─ Success.php
│  │  │     │  ├─ TestStatus.php
│  │  │     │  └─ Unknown.php
│  │  │     ├─ Util
│  │  │     │  ├─ Filesystem.php
│  │  │     │  └─ Percentage.php
│  │  │     └─ Version.php
│  │  ├─ php-file-iterator
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ExcludeIterator.php
│  │  │     ├─ Facade.php
│  │  │     ├─ Factory.php
│  │  │     └─ Iterator.php
│  │  ├─ php-invoker
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Invoker.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ ProcessControlExtensionNotLoadedException.php
│  │  │        └─ TimeoutException.php
│  │  ├─ php-text-template
│  │  │  ├─ .psalm
│  │  │  │  ├─ baseline.xml
│  │  │  │  └─ config.xml
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Template.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ InvalidArgumentException.php
│  │  │        └─ RuntimeException.php
│  │  ├─ php-timer
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Duration.php
│  │  │     ├─ ResourceUsageFormatter.php
│  │  │     ├─ Timer.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ NoActiveTimerException.php
│  │  │        └─ TimeSinceStartOfRequestNotAvailableException.php
│  │  └─ phpunit
│  │     ├─ ChangeLog-11.5.md
│  │     ├─ DEPRECATIONS.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     ├─ composer.lock
│  │     ├─ phpunit
│  │     ├─ phpunit.xsd
│  │     ├─ schema
│  │     │  ├─ 10.0.xsd
│  │     │  ├─ 10.1.xsd
│  │     │  ├─ 10.2.xsd
│  │     │  ├─ 10.3.xsd
│  │     │  ├─ 10.4.xsd
│  │     │  ├─ 10.5.xsd
│  │     │  ├─ 11.0.xsd
│  │     │  ├─ 11.1.xsd
│  │     │  ├─ 11.2.xsd
│  │     │  ├─ 11.3.xsd
│  │     │  ├─ 11.4.xsd
│  │     │  ├─ 8.5.xsd
│  │     │  ├─ 9.0.xsd
│  │     │  ├─ 9.1.xsd
│  │     │  ├─ 9.2.xsd
│  │     │  ├─ 9.3.xsd
│  │     │  ├─ 9.4.xsd
│  │     │  └─ 9.5.xsd
│  │     └─ src
│  │        ├─ Event
│  │        │  ├─ Dispatcher
│  │        │  │  ├─ CollectingDispatcher.php
│  │        │  │  ├─ DeferringDispatcher.php
│  │        │  │  ├─ DirectDispatcher.php
│  │        │  │  ├─ Dispatcher.php
│  │        │  │  └─ SubscribableDispatcher.php
│  │        │  ├─ Emitter
│  │        │  │  ├─ DispatchingEmitter.php
│  │        │  │  └─ Emitter.php
│  │        │  ├─ Events
│  │        │  │  ├─ Application
│  │        │  │  │  ├─ Finished.php
│  │        │  │  │  ├─ FinishedSubscriber.php
│  │        │  │  │  ├─ Started.php
│  │        │  │  │  └─ StartedSubscriber.php
│  │        │  │  ├─ Event.php
│  │        │  │  ├─ EventCollection.php
│  │        │  │  ├─ EventCollectionIterator.php
│  │        │  │  ├─ Test
│  │        │  │  │  ├─ ComparatorRegistered.php
│  │        │  │  │  ├─ ComparatorRegisteredSubscriber.php
│  │        │  │  │  ├─ HookMethod
│  │        │  │  │  │  ├─ AfterLastTestMethodCalled.php
│  │        │  │  │  │  ├─ AfterLastTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ AfterLastTestMethodErrored.php
│  │        │  │  │  │  ├─ AfterLastTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ AfterLastTestMethodFinished.php
│  │        │  │  │  │  ├─ AfterLastTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ AfterTestMethodCalled.php
│  │        │  │  │  │  ├─ AfterTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ AfterTestMethodErrored.php
│  │        │  │  │  │  ├─ AfterTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ AfterTestMethodFinished.php
│  │        │  │  │  │  ├─ AfterTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodCalled.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodErrored.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodFinished.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ BeforeTestMethodCalled.php
│  │        │  │  │  │  ├─ BeforeTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ BeforeTestMethodErrored.php
│  │        │  │  │  │  ├─ BeforeTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ BeforeTestMethodFinished.php
│  │        │  │  │  │  ├─ BeforeTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ PostConditionCalled.php
│  │        │  │  │  │  ├─ PostConditionCalledSubscriber.php
│  │        │  │  │  │  ├─ PostConditionErrored.php
│  │        │  │  │  │  ├─ PostConditionErroredSubscriber.php
│  │        │  │  │  │  ├─ PostConditionFinished.php
│  │        │  │  │  │  ├─ PostConditionFinishedSubscriber.php
│  │        │  │  │  │  ├─ PreConditionCalled.php
│  │        │  │  │  │  ├─ PreConditionCalledSubscriber.php
│  │        │  │  │  │  ├─ PreConditionErrored.php
│  │        │  │  │  │  ├─ PreConditionErroredSubscriber.php
│  │        │  │  │  │  ├─ PreConditionFinished.php
│  │        │  │  │  │  └─ PreConditionFinishedSubscriber.php
│  │        │  │  │  ├─ Issue
│  │        │  │  │  │  ├─ ConsideredRisky.php
│  │        │  │  │  │  ├─ ConsideredRiskySubscriber.php
│  │        │  │  │  │  ├─ DeprecationTriggered.php
│  │        │  │  │  │  ├─ DeprecationTriggeredSubscriber.php
│  │        │  │  │  │  ├─ ErrorTriggered.php
│  │        │  │  │  │  ├─ ErrorTriggeredSubscriber.php
│  │        │  │  │  │  ├─ NoticeTriggered.php
│  │        │  │  │  │  ├─ NoticeTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpDeprecationTriggered.php
│  │        │  │  │  │  ├─ PhpDeprecationTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpNoticeTriggered.php
│  │        │  │  │  │  ├─ PhpNoticeTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpWarningTriggered.php
│  │        │  │  │  │  ├─ PhpWarningTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpunitDeprecationTriggered.php
│  │        │  │  │  │  ├─ PhpunitDeprecationTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpunitErrorTriggered.php
│  │        │  │  │  │  ├─ PhpunitErrorTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpunitWarningTriggered.php
│  │        │  │  │  │  ├─ PhpunitWarningTriggeredSubscriber.php
│  │        │  │  │  │  ├─ WarningTriggered.php
│  │        │  │  │  │  └─ WarningTriggeredSubscriber.php
│  │        │  │  │  ├─ Lifecycle
│  │        │  │  │  │  ├─ DataProviderMethodCalled.php
│  │        │  │  │  │  ├─ DataProviderMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ DataProviderMethodFinished.php
│  │        │  │  │  │  ├─ DataProviderMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ Finished.php
│  │        │  │  │  │  ├─ FinishedSubscriber.php
│  │        │  │  │  │  ├─ PreparationFailed.php
│  │        │  │  │  │  ├─ PreparationFailedSubscriber.php
│  │        │  │  │  │  ├─ PreparationStarted.php
│  │        │  │  │  │  ├─ PreparationStartedSubscriber.php
│  │        │  │  │  │  ├─ Prepared.php
│  │        │  │  │  │  └─ PreparedSubscriber.php
│  │        │  │  │  ├─ Outcome
│  │        │  │  │  │  ├─ Errored.php
│  │        │  │  │  │  ├─ ErroredSubscriber.php
│  │        │  │  │  │  ├─ Failed.php
│  │        │  │  │  │  ├─ FailedSubscriber.php
│  │        │  │  │  │  ├─ MarkedIncomplete.php
│  │        │  │  │  │  ├─ MarkedIncompleteSubscriber.php
│  │        │  │  │  │  ├─ Passed.php
│  │        │  │  │  │  ├─ PassedSubscriber.php
│  │        │  │  │  │  ├─ Skipped.php
│  │        │  │  │  │  └─ SkippedSubscriber.php
│  │        │  │  │  ├─ PrintedUnexpectedOutput.php
│  │        │  │  │  ├─ PrintedUnexpectedOutputSubscriber.php
│  │        │  │  │  └─ TestDouble
│  │        │  │  │     ├─ MockObjectCreated.php
│  │        │  │  │     ├─ MockObjectCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectForAbstractClassCreated.php
│  │        │  │  │     ├─ MockObjectForAbstractClassCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectForIntersectionOfInterfacesCreated.php
│  │        │  │  │     ├─ MockObjectForIntersectionOfInterfacesCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectForTraitCreated.php
│  │        │  │  │     ├─ MockObjectForTraitCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectFromWsdlCreated.php
│  │        │  │  │     ├─ MockObjectFromWsdlCreatedSubscriber.php
│  │        │  │  │     ├─ PartialMockObjectCreated.php
│  │        │  │  │     ├─ PartialMockObjectCreatedSubscriber.php
│  │        │  │  │     ├─ TestProxyCreated.php
│  │        │  │  │     ├─ TestProxyCreatedSubscriber.php
│  │        │  │  │     ├─ TestStubCreated.php
│  │        │  │  │     ├─ TestStubCreatedSubscriber.php
│  │        │  │  │     ├─ TestStubForIntersectionOfInterfacesCreated.php
│  │        │  │  │     └─ TestStubForIntersectionOfInterfacesCreatedSubscriber.php
│  │        │  │  ├─ TestRunner
│  │        │  │  │  ├─ BootstrapFinished.php
│  │        │  │  │  ├─ BootstrapFinishedSubscriber.php
│  │        │  │  │  ├─ ChildProcessFinished.php
│  │        │  │  │  ├─ ChildProcessFinishedSubscriber.php
│  │        │  │  │  ├─ ChildProcessStarted.php
│  │        │  │  │  ├─ ChildProcessStartedSubscriber.php
│  │        │  │  │  ├─ Configured.php
│  │        │  │  │  ├─ ConfiguredSubscriber.php
│  │        │  │  │  ├─ DeprecationTriggered.php
│  │        │  │  │  ├─ DeprecationTriggeredSubscriber.php
│  │        │  │  │  ├─ EventFacadeSealed.php
│  │        │  │  │  ├─ EventFacadeSealedSubscriber.php
│  │        │  │  │  ├─ ExecutionAborted.php
│  │        │  │  │  ├─ ExecutionAbortedSubscriber.php
│  │        │  │  │  ├─ ExecutionFinished.php
│  │        │  │  │  ├─ ExecutionFinishedSubscriber.php
│  │        │  │  │  ├─ ExecutionStarted.php
│  │        │  │  │  ├─ ExecutionStartedSubscriber.php
│  │        │  │  │  ├─ ExtensionBootstrapped.php
│  │        │  │  │  ├─ ExtensionBootstrappedSubscriber.php
│  │        │  │  │  ├─ ExtensionLoadedFromPhar.php
│  │        │  │  │  ├─ ExtensionLoadedFromPharSubscriber.php
│  │        │  │  │  ├─ Finished.php
│  │        │  │  │  ├─ FinishedSubscriber.php
│  │        │  │  │  ├─ GarbageCollectionDisabled.php
│  │        │  │  │  ├─ GarbageCollectionDisabledSubscriber.php
│  │        │  │  │  ├─ GarbageCollectionEnabled.php
│  │        │  │  │  ├─ GarbageCollectionEnabledSubscriber.php
│  │        │  │  │  ├─ GarbageCollectionTriggered.php
│  │        │  │  │  ├─ GarbageCollectionTriggeredSubscriber.php
│  │        │  │  │  ├─ Started.php
│  │        │  │  │  ├─ StartedSubscriber.php
│  │        │  │  │  ├─ WarningTriggered.php
│  │        │  │  │  └─ WarningTriggeredSubscriber.php
│  │        │  │  └─ TestSuite
│  │        │  │     ├─ Filtered.php
│  │        │  │     ├─ FilteredSubscriber.php
│  │        │  │     ├─ Finished.php
│  │        │  │     ├─ FinishedSubscriber.php
│  │        │  │     ├─ Loaded.php
│  │        │  │     ├─ LoadedSubscriber.php
│  │        │  │     ├─ Skipped.php
│  │        │  │     ├─ SkippedSubscriber.php
│  │        │  │     ├─ Sorted.php
│  │        │  │     ├─ SortedSubscriber.php
│  │        │  │     ├─ Started.php
│  │        │  │     └─ StartedSubscriber.php
│  │        │  ├─ Exception
│  │        │  │  ├─ EventAlreadyAssignedException.php
│  │        │  │  ├─ EventFacadeIsSealedException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ InvalidArgumentException.php
│  │        │  │  ├─ InvalidEventException.php
│  │        │  │  ├─ InvalidSubscriberException.php
│  │        │  │  ├─ MapError.php
│  │        │  │  ├─ NoComparisonFailureException.php
│  │        │  │  ├─ NoDataSetFromDataProviderException.php
│  │        │  │  ├─ NoPreviousThrowableException.php
│  │        │  │  ├─ NoTestCaseObjectOnCallStackException.php
│  │        │  │  ├─ RuntimeException.php
│  │        │  │  ├─ SubscriberTypeAlreadyRegisteredException.php
│  │        │  │  ├─ UnknownEventException.php
│  │        │  │  ├─ UnknownEventTypeException.php
│  │        │  │  ├─ UnknownSubscriberException.php
│  │        │  │  └─ UnknownSubscriberTypeException.php
│  │        │  ├─ Facade.php
│  │        │  ├─ Subscriber.php
│  │        │  ├─ Tracer.php
│  │        │  ├─ TypeMap.php
│  │        │  └─ Value
│  │        │     ├─ ClassMethod.php
│  │        │     ├─ ComparisonFailure.php
│  │        │     ├─ ComparisonFailureBuilder.php
│  │        │     ├─ Runtime
│  │        │     │  ├─ OperatingSystem.php
│  │        │     │  ├─ PHP.php
│  │        │     │  ├─ PHPUnit.php
│  │        │     │  └─ Runtime.php
│  │        │     ├─ Telemetry
│  │        │     │  ├─ Duration.php
│  │        │     │  ├─ GarbageCollectorStatus.php
│  │        │     │  ├─ GarbageCollectorStatusProvider.php
│  │        │     │  ├─ HRTime.php
│  │        │     │  ├─ Info.php
│  │        │     │  ├─ MemoryMeter.php
│  │        │     │  ├─ MemoryUsage.php
│  │        │     │  ├─ Php81GarbageCollectorStatusProvider.php
│  │        │     │  ├─ Php83GarbageCollectorStatusProvider.php
│  │        │     │  ├─ Snapshot.php
│  │        │     │  ├─ StopWatch.php
│  │        │     │  ├─ System.php
│  │        │     │  ├─ SystemMemoryMeter.php
│  │        │     │  ├─ SystemStopWatch.php
│  │        │     │  └─ SystemStopWatchWithOffset.php
│  │        │     ├─ Test
│  │        │     │  ├─ Issue
│  │        │     │  │  ├─ DirectTrigger.php
│  │        │     │  │  ├─ IndirectTrigger.php
│  │        │     │  │  ├─ IssueTrigger.php
│  │        │     │  │  ├─ SelfTrigger.php
│  │        │     │  │  ├─ TestTrigger.php
│  │        │     │  │  └─ UnknownTrigger.php
│  │        │     │  ├─ Phpt.php
│  │        │     │  ├─ Test.php
│  │        │     │  ├─ TestCollection.php
│  │        │     │  ├─ TestCollectionIterator.php
│  │        │     │  ├─ TestData
│  │        │     │  │  ├─ DataFromDataProvider.php
│  │        │     │  │  ├─ DataFromTestDependency.php
│  │        │     │  │  ├─ TestData.php
│  │        │     │  │  ├─ TestDataCollection.php
│  │        │     │  │  └─ TestDataCollectionIterator.php
│  │        │     │  ├─ TestDox.php
│  │        │     │  ├─ TestDoxBuilder.php
│  │        │     │  ├─ TestMethod.php
│  │        │     │  └─ TestMethodBuilder.php
│  │        │     ├─ TestSuite
│  │        │     │  ├─ TestSuite.php
│  │        │     │  ├─ TestSuiteBuilder.php
│  │        │     │  ├─ TestSuiteForTestClass.php
│  │        │     │  ├─ TestSuiteForTestMethodWithDataProvider.php
│  │        │     │  └─ TestSuiteWithName.php
│  │        │     ├─ Throwable.php
│  │        │     └─ ThrowableBuilder.php
│  │        ├─ Exception.php
│  │        ├─ Framework
│  │        │  ├─ Assert
│  │        │  │  └─ Functions.php
│  │        │  ├─ Assert.php
│  │        │  ├─ Attributes
│  │        │  │  ├─ After.php
│  │        │  │  ├─ AfterClass.php
│  │        │  │  ├─ BackupGlobals.php
│  │        │  │  ├─ BackupStaticProperties.php
│  │        │  │  ├─ Before.php
│  │        │  │  ├─ BeforeClass.php
│  │        │  │  ├─ CoversClass.php
│  │        │  │  ├─ CoversFunction.php
│  │        │  │  ├─ CoversMethod.php
│  │        │  │  ├─ CoversNothing.php
│  │        │  │  ├─ CoversTrait.php
│  │        │  │  ├─ DataProvider.php
│  │        │  │  ├─ DataProviderExternal.php
│  │        │  │  ├─ Depends.php
│  │        │  │  ├─ DependsExternal.php
│  │        │  │  ├─ DependsExternalUsingDeepClone.php
│  │        │  │  ├─ DependsExternalUsingShallowClone.php
│  │        │  │  ├─ DependsOnClass.php
│  │        │  │  ├─ DependsOnClassUsingDeepClone.php
│  │        │  │  ├─ DependsOnClassUsingShallowClone.php
│  │        │  │  ├─ DependsUsingDeepClone.php
│  │        │  │  ├─ DependsUsingShallowClone.php
│  │        │  │  ├─ DisableReturnValueGenerationForTestDoubles.php
│  │        │  │  ├─ DoesNotPerformAssertions.php
│  │        │  │  ├─ ExcludeGlobalVariableFromBackup.php
│  │        │  │  ├─ ExcludeStaticPropertyFromBackup.php
│  │        │  │  ├─ Group.php
│  │        │  │  ├─ IgnoreDeprecations.php
│  │        │  │  ├─ IgnorePhpunitDeprecations.php
│  │        │  │  ├─ Large.php
│  │        │  │  ├─ Medium.php
│  │        │  │  ├─ PostCondition.php
│  │        │  │  ├─ PreCondition.php
│  │        │  │  ├─ PreserveGlobalState.php
│  │        │  │  ├─ RequiresFunction.php
│  │        │  │  ├─ RequiresMethod.php
│  │        │  │  ├─ RequiresOperatingSystem.php
│  │        │  │  ├─ RequiresOperatingSystemFamily.php
│  │        │  │  ├─ RequiresPhp.php
│  │        │  │  ├─ RequiresPhpExtension.php
│  │        │  │  ├─ RequiresPhpunit.php
│  │        │  │  ├─ RequiresPhpunitExtension.php
│  │        │  │  ├─ RequiresSetting.php
│  │        │  │  ├─ RunClassInSeparateProcess.php
│  │        │  │  ├─ RunInSeparateProcess.php
│  │        │  │  ├─ RunTestsInSeparateProcesses.php
│  │        │  │  ├─ Small.php
│  │        │  │  ├─ Test.php
│  │        │  │  ├─ TestDox.php
│  │        │  │  ├─ TestWith.php
│  │        │  │  ├─ TestWithJson.php
│  │        │  │  ├─ Ticket.php
│  │        │  │  ├─ UsesClass.php
│  │        │  │  ├─ UsesFunction.php
│  │        │  │  ├─ UsesMethod.php
│  │        │  │  ├─ UsesTrait.php
│  │        │  │  └─ WithoutErrorHandler.php
│  │        │  ├─ Constraint
│  │        │  │  ├─ Boolean
│  │        │  │  │  ├─ IsFalse.php
│  │        │  │  │  └─ IsTrue.php
│  │        │  │  ├─ Callback.php
│  │        │  │  ├─ Cardinality
│  │        │  │  │  ├─ Count.php
│  │        │  │  │  ├─ GreaterThan.php
│  │        │  │  │  ├─ IsEmpty.php
│  │        │  │  │  ├─ LessThan.php
│  │        │  │  │  └─ SameSize.php
│  │        │  │  ├─ Constraint.php
│  │        │  │  ├─ Equality
│  │        │  │  │  ├─ IsEqual.php
│  │        │  │  │  ├─ IsEqualCanonicalizing.php
│  │        │  │  │  ├─ IsEqualIgnoringCase.php
│  │        │  │  │  └─ IsEqualWithDelta.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  ├─ ExceptionCode.php
│  │        │  │  │  ├─ ExceptionMessageIsOrContains.php
│  │        │  │  │  └─ ExceptionMessageMatchesRegularExpression.php
│  │        │  │  ├─ Filesystem
│  │        │  │  │  ├─ DirectoryExists.php
│  │        │  │  │  ├─ FileExists.php
│  │        │  │  │  ├─ IsReadable.php
│  │        │  │  │  └─ IsWritable.php
│  │        │  │  ├─ IsAnything.php
│  │        │  │  ├─ IsIdentical.php
│  │        │  │  ├─ JsonMatches.php
│  │        │  │  ├─ Math
│  │        │  │  │  ├─ IsFinite.php
│  │        │  │  │  ├─ IsInfinite.php
│  │        │  │  │  └─ IsNan.php
│  │        │  │  ├─ Object
│  │        │  │  │  ├─ ObjectEquals.php
│  │        │  │  │  └─ ObjectHasProperty.php
│  │        │  │  ├─ Operator
│  │        │  │  │  ├─ BinaryOperator.php
│  │        │  │  │  ├─ LogicalAnd.php
│  │        │  │  │  ├─ LogicalNot.php
│  │        │  │  │  ├─ LogicalOr.php
│  │        │  │  │  ├─ LogicalXor.php
│  │        │  │  │  ├─ Operator.php
│  │        │  │  │  └─ UnaryOperator.php
│  │        │  │  ├─ String
│  │        │  │  │  ├─ IsJson.php
│  │        │  │  │  ├─ RegularExpression.php
│  │        │  │  │  ├─ StringContains.php
│  │        │  │  │  ├─ StringEndsWith.php
│  │        │  │  │  ├─ StringEqualsStringIgnoringLineEndings.php
│  │        │  │  │  ├─ StringMatchesFormatDescription.php
│  │        │  │  │  └─ StringStartsWith.php
│  │        │  │  ├─ Traversable
│  │        │  │  │  ├─ ArrayHasKey.php
│  │        │  │  │  ├─ IsList.php
│  │        │  │  │  ├─ TraversableContains.php
│  │        │  │  │  ├─ TraversableContainsEqual.php
│  │        │  │  │  ├─ TraversableContainsIdentical.php
│  │        │  │  │  └─ TraversableContainsOnly.php
│  │        │  │  └─ Type
│  │        │  │     ├─ IsInstanceOf.php
│  │        │  │     ├─ IsNull.php
│  │        │  │     └─ IsType.php
│  │        │  ├─ DataProviderTestSuite.php
│  │        │  ├─ Exception
│  │        │  │  ├─ AssertionFailedError.php
│  │        │  │  ├─ CodeCoverageException.php
│  │        │  │  ├─ EmptyStringException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ ExpectationFailedException.php
│  │        │  │  ├─ GeneratorNotSupportedException.php
│  │        │  │  ├─ Incomplete
│  │        │  │  │  ├─ IncompleteTest.php
│  │        │  │  │  └─ IncompleteTestError.php
│  │        │  │  ├─ InvalidArgumentException.php
│  │        │  │  ├─ InvalidCoversTargetException.php
│  │        │  │  ├─ InvalidDataProviderException.php
│  │        │  │  ├─ InvalidDependencyException.php
│  │        │  │  ├─ NoChildTestSuiteException.php
│  │        │  │  ├─ ObjectEquals
│  │        │  │  │  ├─ ActualValueIsNotAnObjectException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotAcceptParameterTypeException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotDeclareBoolReturnTypeException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotDeclareExactlyOneParameterException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotDeclareParameterTypeException.php
│  │        │  │  │  └─ ComparisonMethodDoesNotExistException.php
│  │        │  │  ├─ PhptAssertionFailedError.php
│  │        │  │  ├─ ProcessIsolationException.php
│  │        │  │  ├─ Skipped
│  │        │  │  │  ├─ SkippedTest.php
│  │        │  │  │  ├─ SkippedTestSuiteError.php
│  │        │  │  │  └─ SkippedWithMessageException.php
│  │        │  │  ├─ UnknownClassOrInterfaceException.php
│  │        │  │  └─ UnknownTypeException.php
│  │        │  ├─ ExecutionOrderDependency.php
│  │        │  ├─ MockObject
│  │        │  │  ├─ ConfigurableMethod.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ BadMethodCallException.php
│  │        │  │  │  ├─ CannotCloneTestDoubleForReadonlyClassException.php
│  │        │  │  │  ├─ CannotUseOnlyMethodsException.php
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  ├─ IncompatibleReturnValueException.php
│  │        │  │  │  ├─ MatchBuilderNotFoundException.php
│  │        │  │  │  ├─ MatcherAlreadyRegisteredException.php
│  │        │  │  │  ├─ MethodCannotBeConfiguredException.php
│  │        │  │  │  ├─ MethodNameAlreadyConfiguredException.php
│  │        │  │  │  ├─ MethodNameNotConfiguredException.php
│  │        │  │  │  ├─ MethodParametersAlreadyConfiguredException.php
│  │        │  │  │  ├─ NeverReturningMethodException.php
│  │        │  │  │  ├─ NoMoreReturnValuesConfiguredException.php
│  │        │  │  │  ├─ ReturnValueNotConfiguredException.php
│  │        │  │  │  └─ RuntimeException.php
│  │        │  │  ├─ Generator
│  │        │  │  │  ├─ Exception
│  │        │  │  │  │  ├─ CannotUseAddMethodsException.php
│  │        │  │  │  │  ├─ ClassIsEnumerationException.php
│  │        │  │  │  │  ├─ ClassIsFinalException.php
│  │        │  │  │  │  ├─ DuplicateMethodException.php
│  │        │  │  │  │  ├─ Exception.php
│  │        │  │  │  │  ├─ InvalidMethodNameException.php
│  │        │  │  │  │  ├─ NameAlreadyInUseException.php
│  │        │  │  │  │  ├─ OriginalConstructorInvocationRequiredException.php
│  │        │  │  │  │  ├─ ReflectionException.php
│  │        │  │  │  │  ├─ RuntimeException.php
│  │        │  │  │  │  ├─ SoapExtensionNotAvailableException.php
│  │        │  │  │  │  ├─ UnknownClassException.php
│  │        │  │  │  │  ├─ UnknownTraitException.php
│  │        │  │  │  │  └─ UnknownTypeException.php
│  │        │  │  │  ├─ Generator.php
│  │        │  │  │  ├─ HookedProperty.php
│  │        │  │  │  ├─ HookedPropertyGenerator.php
│  │        │  │  │  ├─ MockClass.php
│  │        │  │  │  ├─ MockMethod.php
│  │        │  │  │  ├─ MockMethodSet.php
│  │        │  │  │  ├─ MockTrait.php
│  │        │  │  │  ├─ MockType.php
│  │        │  │  │  ├─ TemplateLoader.php
│  │        │  │  │  └─ templates
│  │        │  │  │     ├─ deprecation.tpl
│  │        │  │  │     ├─ doubled_method.tpl
│  │        │  │  │     ├─ doubled_static_method.tpl
│  │        │  │  │     ├─ intersection.tpl
│  │        │  │  │     ├─ proxied_method.tpl
│  │        │  │  │     ├─ test_double_class.tpl
│  │        │  │  │     ├─ trait_class.tpl
│  │        │  │  │     ├─ wsdl_class.tpl
│  │        │  │  │     └─ wsdl_method.tpl
│  │        │  │  ├─ MockBuilder.php
│  │        │  │  └─ Runtime
│  │        │  │     ├─ Api
│  │        │  │     │  ├─ DoubledCloneMethod.php
│  │        │  │     │  ├─ ErrorCloneMethod.php
│  │        │  │     │  ├─ GeneratedAsMockObject.php
│  │        │  │     │  ├─ GeneratedAsTestStub.php
│  │        │  │     │  ├─ Method.php
│  │        │  │     │  ├─ MockObjectApi.php
│  │        │  │     │  ├─ MutableStubApi.php
│  │        │  │     │  ├─ ProxiedCloneMethod.php
│  │        │  │     │  ├─ StubApi.php
│  │        │  │     │  └─ TestDoubleState.php
│  │        │  │     ├─ Builder
│  │        │  │     │  ├─ Identity.php
│  │        │  │     │  ├─ InvocationMocker.php
│  │        │  │     │  ├─ InvocationStubber.php
│  │        │  │     │  ├─ MethodNameMatch.php
│  │        │  │     │  ├─ ParametersMatch.php
│  │        │  │     │  └─ Stub.php
│  │        │  │     ├─ Interface
│  │        │  │     │  ├─ MockObject.php
│  │        │  │     │  ├─ MockObjectInternal.php
│  │        │  │     │  ├─ Stub.php
│  │        │  │     │  └─ StubInternal.php
│  │        │  │     ├─ Invocation.php
│  │        │  │     ├─ InvocationHandler.php
│  │        │  │     ├─ Matcher.php
│  │        │  │     ├─ MethodNameConstraint.php
│  │        │  │     ├─ PropertyHook
│  │        │  │     │  ├─ PropertyGetHook.php
│  │        │  │     │  ├─ PropertyHook.php
│  │        │  │     │  └─ PropertySetHook.php
│  │        │  │     ├─ ReturnValueGenerator.php
│  │        │  │     ├─ Rule
│  │        │  │     │  ├─ AnyInvokedCount.php
│  │        │  │     │  ├─ AnyParameters.php
│  │        │  │     │  ├─ InvocationOrder.php
│  │        │  │     │  ├─ InvokedAtLeastCount.php
│  │        │  │     │  ├─ InvokedAtLeastOnce.php
│  │        │  │     │  ├─ InvokedAtMostCount.php
│  │        │  │     │  ├─ InvokedCount.php
│  │        │  │     │  ├─ MethodName.php
│  │        │  │     │  ├─ Parameters.php
│  │        │  │     │  └─ ParametersRule.php
│  │        │  │     └─ Stub
│  │        │  │        ├─ ConsecutiveCalls.php
│  │        │  │        ├─ Exception.php
│  │        │  │        ├─ ReturnArgument.php
│  │        │  │        ├─ ReturnCallback.php
│  │        │  │        ├─ ReturnReference.php
│  │        │  │        ├─ ReturnSelf.php
│  │        │  │        ├─ ReturnStub.php
│  │        │  │        ├─ ReturnValueMap.php
│  │        │  │        └─ Stub.php
│  │        │  ├─ NativeType.php
│  │        │  ├─ Reorderable.php
│  │        │  ├─ SelfDescribing.php
│  │        │  ├─ Test.php
│  │        │  ├─ TestBuilder.php
│  │        │  ├─ TestCase.php
│  │        │  ├─ TestRunner
│  │        │  │  ├─ ChildProcessResultProcessor.php
│  │        │  │  ├─ IsolatedTestRunner.php
│  │        │  │  ├─ IsolatedTestRunnerRegistry.php
│  │        │  │  ├─ SeparateProcessTestRunner.php
│  │        │  │  ├─ TestRunner.php
│  │        │  │  └─ templates
│  │        │  │     ├─ class.tpl
│  │        │  │     └─ method.tpl
│  │        │  ├─ TestSize
│  │        │  │  ├─ Known.php
│  │        │  │  ├─ Large.php
│  │        │  │  ├─ Medium.php
│  │        │  │  ├─ Small.php
│  │        │  │  ├─ TestSize.php
│  │        │  │  └─ Unknown.php
│  │        │  ├─ TestStatus
│  │        │  │  ├─ Deprecation.php
│  │        │  │  ├─ Error.php
│  │        │  │  ├─ Failure.php
│  │        │  │  ├─ Incomplete.php
│  │        │  │  ├─ Known.php
│  │        │  │  ├─ Notice.php
│  │        │  │  ├─ Risky.php
│  │        │  │  ├─ Skipped.php
│  │        │  │  ├─ Success.php
│  │        │  │  ├─ TestStatus.php
│  │        │  │  ├─ Unknown.php
│  │        │  │  └─ Warning.php
│  │        │  ├─ TestSuite.php
│  │        │  └─ TestSuiteIterator.php
│  │        ├─ Logging
│  │        │  ├─ EventLogger.php
│  │        │  ├─ JUnit
│  │        │  │  ├─ JunitXmlLogger.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ Subscriber.php
│  │        │  │     ├─ TestErroredSubscriber.php
│  │        │  │     ├─ TestFailedSubscriber.php
│  │        │  │     ├─ TestFinishedSubscriber.php
│  │        │  │     ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │     ├─ TestPreparationFailedSubscriber.php
│  │        │  │     ├─ TestPreparationStartedSubscriber.php
│  │        │  │     ├─ TestPreparedSubscriber.php
│  │        │  │     ├─ TestPrintedUnexpectedOutputSubscriber.php
│  │        │  │     ├─ TestRunnerExecutionFinishedSubscriber.php
│  │        │  │     ├─ TestSkippedSubscriber.php
│  │        │  │     ├─ TestSuiteFinishedSubscriber.php
│  │        │  │     └─ TestSuiteStartedSubscriber.php
│  │        │  ├─ TeamCity
│  │        │  │  ├─ Subscriber
│  │        │  │  │  ├─ Subscriber.php
│  │        │  │  │  ├─ TestConsideredRiskySubscriber.php
│  │        │  │  │  ├─ TestErroredSubscriber.php
│  │        │  │  │  ├─ TestFailedSubscriber.php
│  │        │  │  │  ├─ TestFinishedSubscriber.php
│  │        │  │  │  ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │  │  ├─ TestPreparedSubscriber.php
│  │        │  │  │  ├─ TestRunnerExecutionFinishedSubscriber.php
│  │        │  │  │  ├─ TestSkippedSubscriber.php
│  │        │  │  │  ├─ TestSuiteBeforeFirstTestMethodErroredSubscriber.php
│  │        │  │  │  ├─ TestSuiteFinishedSubscriber.php
│  │        │  │  │  ├─ TestSuiteSkippedSubscriber.php
│  │        │  │  │  └─ TestSuiteStartedSubscriber.php
│  │        │  │  └─ TeamCityLogger.php
│  │        │  └─ TestDox
│  │        │     ├─ HtmlRenderer.php
│  │        │     ├─ NamePrettifier.php
│  │        │     ├─ PlainTextRenderer.php
│  │        │     └─ TestResult
│  │        │        ├─ Subscriber
│  │        │        │  ├─ Subscriber.php
│  │        │        │  ├─ TestConsideredRiskySubscriber.php
│  │        │        │  ├─ TestErroredSubscriber.php
│  │        │        │  ├─ TestFailedSubscriber.php
│  │        │        │  ├─ TestFinishedSubscriber.php
│  │        │        │  ├─ TestMarkedIncompleteSubscriber.php
│  │        │        │  ├─ TestPassedSubscriber.php
│  │        │        │  ├─ TestPreparedSubscriber.php
│  │        │        │  ├─ TestSkippedSubscriber.php
│  │        │        │  ├─ TestTriggeredDeprecationSubscriber.php
│  │        │        │  ├─ TestTriggeredNoticeSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpunitDeprecationSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpunitErrorSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpunitWarningSubscriber.php
│  │        │        │  └─ TestTriggeredWarningSubscriber.php
│  │        │        ├─ TestResult.php
│  │        │        ├─ TestResultCollection.php
│  │        │        ├─ TestResultCollectionIterator.php
│  │        │        └─ TestResultCollector.php
│  │        ├─ Metadata
│  │        │  ├─ After.php
│  │        │  ├─ AfterClass.php
│  │        │  ├─ Api
│  │        │  │  ├─ CodeCoverage.php
│  │        │  │  ├─ DataProvider.php
│  │        │  │  ├─ Dependencies.php
│  │        │  │  ├─ Groups.php
│  │        │  │  ├─ HookMethods.php
│  │        │  │  └─ Requirements.php
│  │        │  ├─ BackupGlobals.php
│  │        │  ├─ BackupStaticProperties.php
│  │        │  ├─ Before.php
│  │        │  ├─ BeforeClass.php
│  │        │  ├─ Covers.php
│  │        │  ├─ CoversClass.php
│  │        │  ├─ CoversDefaultClass.php
│  │        │  ├─ CoversFunction.php
│  │        │  ├─ CoversMethod.php
│  │        │  ├─ CoversNothing.php
│  │        │  ├─ CoversTrait.php
│  │        │  ├─ DataProvider.php
│  │        │  ├─ DependsOnClass.php
│  │        │  ├─ DependsOnMethod.php
│  │        │  ├─ DisableReturnValueGenerationForTestDoubles.php
│  │        │  ├─ DoesNotPerformAssertions.php
│  │        │  ├─ Exception
│  │        │  │  ├─ AnnotationsAreNotSupportedForInternalClassesException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ InvalidAttributeException.php
│  │        │  │  ├─ InvalidVersionRequirementException.php
│  │        │  │  ├─ NoVersionRequirementException.php
│  │        │  │  └─ ReflectionException.php
│  │        │  ├─ ExcludeGlobalVariableFromBackup.php
│  │        │  ├─ ExcludeStaticPropertyFromBackup.php
│  │        │  ├─ Group.php
│  │        │  ├─ IgnoreDeprecations.php
│  │        │  ├─ IgnorePhpunitDeprecations.php
│  │        │  ├─ Metadata.php
│  │        │  ├─ MetadataCollection.php
│  │        │  ├─ MetadataCollectionIterator.php
│  │        │  ├─ Parser
│  │        │  │  ├─ Annotation
│  │        │  │  │  ├─ DocBlock.php
│  │        │  │  │  └─ Registry.php
│  │        │  │  ├─ AnnotationParser.php
│  │        │  │  ├─ AttributeParser.php
│  │        │  │  ├─ CachingParser.php
│  │        │  │  ├─ Parser.php
│  │        │  │  ├─ ParserChain.php
│  │        │  │  └─ Registry.php
│  │        │  ├─ PostCondition.php
│  │        │  ├─ PreCondition.php
│  │        │  ├─ PreserveGlobalState.php
│  │        │  ├─ RequiresFunction.php
│  │        │  ├─ RequiresMethod.php
│  │        │  ├─ RequiresOperatingSystem.php
│  │        │  ├─ RequiresOperatingSystemFamily.php
│  │        │  ├─ RequiresPhp.php
│  │        │  ├─ RequiresPhpExtension.php
│  │        │  ├─ RequiresPhpunit.php
│  │        │  ├─ RequiresPhpunitExtension.php
│  │        │  ├─ RequiresSetting.php
│  │        │  ├─ RunClassInSeparateProcess.php
│  │        │  ├─ RunInSeparateProcess.php
│  │        │  ├─ RunTestsInSeparateProcesses.php
│  │        │  ├─ Test.php
│  │        │  ├─ TestDox.php
│  │        │  ├─ TestWith.php
│  │        │  ├─ Uses.php
│  │        │  ├─ UsesClass.php
│  │        │  ├─ UsesDefaultClass.php
│  │        │  ├─ UsesFunction.php
│  │        │  ├─ UsesMethod.php
│  │        │  ├─ UsesTrait.php
│  │        │  ├─ Version
│  │        │  │  ├─ ComparisonRequirement.php
│  │        │  │  ├─ ConstraintRequirement.php
│  │        │  │  └─ Requirement.php
│  │        │  └─ WithoutErrorHandler.php
│  │        ├─ Runner
│  │        │  ├─ Baseline
│  │        │  │  ├─ Baseline.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ CannotLoadBaselineException.php
│  │        │  │  │  └─ FileDoesNotHaveLineException.php
│  │        │  │  ├─ Generator.php
│  │        │  │  ├─ Issue.php
│  │        │  │  ├─ Reader.php
│  │        │  │  ├─ RelativePathCalculator.php
│  │        │  │  ├─ Subscriber
│  │        │  │  │  ├─ Subscriber.php
│  │        │  │  │  ├─ TestTriggeredDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │  │  │  └─ TestTriggeredWarningSubscriber.php
│  │        │  │  └─ Writer.php
│  │        │  ├─ CodeCoverage.php
│  │        │  ├─ DeprecationCollector
│  │        │  │  ├─ Collector.php
│  │        │  │  ├─ Facade.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ Subscriber.php
│  │        │  │     ├─ TestPreparedSubscriber.php
│  │        │  │     └─ TestTriggeredDeprecationSubscriber.php
│  │        │  ├─ ErrorHandler.php
│  │        │  ├─ Exception
│  │        │  │  ├─ ClassCannotBeFoundException.php
│  │        │  │  ├─ ClassDoesNotExtendTestCaseException.php
│  │        │  │  ├─ ClassIsAbstractException.php
│  │        │  │  ├─ DirectoryDoesNotExistException.php
│  │        │  │  ├─ ErrorException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ FileDoesNotExistException.php
│  │        │  │  ├─ InvalidOrderException.php
│  │        │  │  ├─ InvalidPhptFileException.php
│  │        │  │  ├─ ParameterDoesNotExistException.php
│  │        │  │  ├─ PhptExternalFileCannotBeLoadedException.php
│  │        │  │  └─ UnsupportedPhptSectionException.php
│  │        │  ├─ Extension
│  │        │  │  ├─ Extension.php
│  │        │  │  ├─ ExtensionBootstrapper.php
│  │        │  │  ├─ Facade.php
│  │        │  │  ├─ ParameterCollection.php
│  │        │  │  └─ PharLoader.php
│  │        │  ├─ Filter
│  │        │  │  ├─ ExcludeGroupFilterIterator.php
│  │        │  │  ├─ ExcludeNameFilterIterator.php
│  │        │  │  ├─ Factory.php
│  │        │  │  ├─ GroupFilterIterator.php
│  │        │  │  ├─ IncludeGroupFilterIterator.php
│  │        │  │  ├─ IncludeNameFilterIterator.php
│  │        │  │  ├─ NameFilterIterator.php
│  │        │  │  └─ TestIdFilterIterator.php
│  │        │  ├─ GarbageCollection
│  │        │  │  ├─ GarbageCollectionHandler.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ ExecutionFinishedSubscriber.php
│  │        │  │     ├─ ExecutionStartedSubscriber.php
│  │        │  │     ├─ Subscriber.php
│  │        │  │     └─ TestFinishedSubscriber.php
│  │        │  ├─ HookMethod
│  │        │  │  ├─ HookMethod.php
│  │        │  │  └─ HookMethodCollection.php
│  │        │  ├─ IssueFilter.php
│  │        │  ├─ PHPT
│  │        │  │  ├─ PhptTestCase.php
│  │        │  │  └─ templates
│  │        │  │     └─ phpt.tpl
│  │        │  ├─ ResultCache
│  │        │  │  ├─ DefaultResultCache.php
│  │        │  │  ├─ NullResultCache.php
│  │        │  │  ├─ ResultCache.php
│  │        │  │  ├─ ResultCacheHandler.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ Subscriber.php
│  │        │  │     ├─ TestConsideredRiskySubscriber.php
│  │        │  │     ├─ TestErroredSubscriber.php
│  │        │  │     ├─ TestFailedSubscriber.php
│  │        │  │     ├─ TestFinishedSubscriber.php
│  │        │  │     ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │     ├─ TestPreparedSubscriber.php
│  │        │  │     ├─ TestSkippedSubscriber.php
│  │        │  │     ├─ TestSuiteFinishedSubscriber.php
│  │        │  │     └─ TestSuiteStartedSubscriber.php
│  │        │  ├─ TestResult
│  │        │  │  ├─ Collector.php
│  │        │  │  ├─ Facade.php
│  │        │  │  ├─ Issue.php
│  │        │  │  ├─ PassedTests.php
│  │        │  │  ├─ Subscriber
│  │        │  │  │  ├─ AfterTestClassMethodErroredSubscriber.php
│  │        │  │  │  ├─ BeforeTestClassMethodErroredSubscriber.php
│  │        │  │  │  ├─ ExecutionStartedSubscriber.php
│  │        │  │  │  ├─ Subscriber.php
│  │        │  │  │  ├─ TestConsideredRiskySubscriber.php
│  │        │  │  │  ├─ TestErroredSubscriber.php
│  │        │  │  │  ├─ TestFailedSubscriber.php
│  │        │  │  │  ├─ TestFinishedSubscriber.php
│  │        │  │  │  ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │  │  ├─ TestPreparedSubscriber.php
│  │        │  │  │  ├─ TestRunnerTriggeredDeprecationSubscriber.php
│  │        │  │  │  ├─ TestRunnerTriggeredWarningSubscriber.php
│  │        │  │  │  ├─ TestSkippedSubscriber.php
│  │        │  │  │  ├─ TestSuiteFinishedSubscriber.php
│  │        │  │  │  ├─ TestSuiteSkippedSubscriber.php
│  │        │  │  │  ├─ TestSuiteStartedSubscriber.php
│  │        │  │  │  ├─ TestTriggeredDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredErrorSubscriber.php
│  │        │  │  │  ├─ TestTriggeredNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpunitDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpunitErrorSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpunitWarningSubscriber.php
│  │        │  │  │  └─ TestTriggeredWarningSubscriber.php
│  │        │  │  └─ TestResult.php
│  │        │  ├─ TestSuiteLoader.php
│  │        │  ├─ TestSuiteSorter.php
│  │        │  └─ Version.php
│  │        ├─ TextUI
│  │        │  ├─ Application.php
│  │        │  ├─ Command
│  │        │  │  ├─ Command.php
│  │        │  │  ├─ Commands
│  │        │  │  │  ├─ AtLeastVersionCommand.php
│  │        │  │  │  ├─ GenerateConfigurationCommand.php
│  │        │  │  │  ├─ ListGroupsCommand.php
│  │        │  │  │  ├─ ListTestFilesCommand.php
│  │        │  │  │  ├─ ListTestSuitesCommand.php
│  │        │  │  │  ├─ ListTestsAsTextCommand.php
│  │        │  │  │  ├─ ListTestsAsXmlCommand.php
│  │        │  │  │  ├─ MigrateConfigurationCommand.php
│  │        │  │  │  ├─ ShowHelpCommand.php
│  │        │  │  │  ├─ ShowVersionCommand.php
│  │        │  │  │  ├─ VersionCheckCommand.php
│  │        │  │  │  └─ WarmCodeCoverageCacheCommand.php
│  │        │  │  └─ Result.php
│  │        │  ├─ Configuration
│  │        │  │  ├─ Builder.php
│  │        │  │  ├─ Cli
│  │        │  │  │  ├─ Builder.php
│  │        │  │  │  ├─ Configuration.php
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  └─ XmlConfigurationFileFinder.php
│  │        │  │  ├─ CodeCoverageFilterRegistry.php
│  │        │  │  ├─ Configuration.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ CannotFindSchemaException.php
│  │        │  │  │  ├─ CodeCoverageReportNotConfiguredException.php
│  │        │  │  │  ├─ ConfigurationCannotBeBuiltException.php
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  ├─ FilterNotConfiguredException.php
│  │        │  │  │  ├─ LoggingNotConfiguredException.php
│  │        │  │  │  ├─ NoBaselineException.php
│  │        │  │  │  ├─ NoBootstrapException.php
│  │        │  │  │  ├─ NoCacheDirectoryException.php
│  │        │  │  │  ├─ NoConfigurationFileException.php
│  │        │  │  │  ├─ NoCoverageCacheDirectoryException.php
│  │        │  │  │  ├─ NoCustomCssFileException.php
│  │        │  │  │  ├─ NoDefaultTestSuiteException.php
│  │        │  │  │  ├─ NoPharExtensionDirectoryException.php
│  │        │  │  │  └─ SpecificDeprecationToStopOnNotConfiguredException.php
│  │        │  │  ├─ Merger.php
│  │        │  │  ├─ PhpHandler.php
│  │        │  │  ├─ Registry.php
│  │        │  │  ├─ SourceFilter.php
│  │        │  │  ├─ SourceMapper.php
│  │        │  │  ├─ TestSuiteBuilder.php
│  │        │  │  ├─ Value
│  │        │  │  │  ├─ Constant.php
│  │        │  │  │  ├─ ConstantCollection.php
│  │        │  │  │  ├─ ConstantCollectionIterator.php
│  │        │  │  │  ├─ Directory.php
│  │        │  │  │  ├─ DirectoryCollection.php
│  │        │  │  │  ├─ DirectoryCollectionIterator.php
│  │        │  │  │  ├─ ExtensionBootstrap.php
│  │        │  │  │  ├─ ExtensionBootstrapCollection.php
│  │        │  │  │  ├─ ExtensionBootstrapCollectionIterator.php
│  │        │  │  │  ├─ File.php
│  │        │  │  │  ├─ FileCollection.php
│  │        │  │  │  ├─ FileCollectionIterator.php
│  │        │  │  │  ├─ FilterDirectory.php
│  │        │  │  │  ├─ FilterDirectoryCollection.php
│  │        │  │  │  ├─ FilterDirectoryCollectionIterator.php
│  │        │  │  │  ├─ Group.php
│  │        │  │  │  ├─ GroupCollection.php
│  │        │  │  │  ├─ GroupCollectionIterator.php
│  │        │  │  │  ├─ IniSetting.php
│  │        │  │  │  ├─ IniSettingCollection.php
│  │        │  │  │  ├─ IniSettingCollectionIterator.php
│  │        │  │  │  ├─ Php.php
│  │        │  │  │  ├─ Source.php
│  │        │  │  │  ├─ TestDirectory.php
│  │        │  │  │  ├─ TestDirectoryCollection.php
│  │        │  │  │  ├─ TestDirectoryCollectionIterator.php
│  │        │  │  │  ├─ TestFile.php
│  │        │  │  │  ├─ TestFileCollection.php
│  │        │  │  │  ├─ TestFileCollectionIterator.php
│  │        │  │  │  ├─ TestSuite.php
│  │        │  │  │  ├─ TestSuiteCollection.php
│  │        │  │  │  ├─ TestSuiteCollectionIterator.php
│  │        │  │  │  ├─ Variable.php
│  │        │  │  │  ├─ VariableCollection.php
│  │        │  │  │  └─ VariableCollectionIterator.php
│  │        │  │  └─ Xml
│  │        │  │     ├─ CodeCoverage
│  │        │  │     │  ├─ CodeCoverage.php
│  │        │  │     │  └─ Report
│  │        │  │     │     ├─ Clover.php
│  │        │  │     │     ├─ Cobertura.php
│  │        │  │     │     ├─ Crap4j.php
│  │        │  │     │     ├─ Html.php
│  │        │  │     │     ├─ Php.php
│  │        │  │     │     ├─ Text.php
│  │        │  │     │     └─ Xml.php
│  │        │  │     ├─ Configuration.php
│  │        │  │     ├─ DefaultConfiguration.php
│  │        │  │     ├─ Exception.php
│  │        │  │     ├─ Generator.php
│  │        │  │     ├─ Groups.php
│  │        │  │     ├─ LoadedFromFileConfiguration.php
│  │        │  │     ├─ Loader.php
│  │        │  │     ├─ Logging
│  │        │  │     │  ├─ Junit.php
│  │        │  │     │  ├─ Logging.php
│  │        │  │     │  ├─ TeamCity.php
│  │        │  │     │  └─ TestDox
│  │        │  │     │     ├─ Html.php
│  │        │  │     │     └─ Text.php
│  │        │  │     ├─ Migration
│  │        │  │     │  ├─ MigrationBuilder.php
│  │        │  │     │  ├─ MigrationException.php
│  │        │  │     │  ├─ Migrations
│  │        │  │     │  │  ├─ ConvertLogTypes.php
│  │        │  │     │  │  ├─ CoverageCloverToReport.php
│  │        │  │     │  │  ├─ CoverageCrap4jToReport.php
│  │        │  │     │  │  ├─ CoverageHtmlToReport.php
│  │        │  │     │  │  ├─ CoveragePhpToReport.php
│  │        │  │     │  │  ├─ CoverageTextToReport.php
│  │        │  │     │  │  ├─ CoverageXmlToReport.php
│  │        │  │     │  │  ├─ IntroduceCacheDirectoryAttribute.php
│  │        │  │     │  │  ├─ IntroduceCoverageElement.php
│  │        │  │     │  │  ├─ LogToReportMigration.php
│  │        │  │     │  │  ├─ Migration.php
│  │        │  │     │  │  ├─ MoveAttributesFromFilterWhitelistToCoverage.php
│  │        │  │     │  │  ├─ MoveAttributesFromRootToCoverage.php
│  │        │  │     │  │  ├─ MoveCoverageDirectoriesToSource.php
│  │        │  │     │  │  ├─ MoveWhitelistExcludesToCoverage.php
│  │        │  │     │  │  ├─ MoveWhitelistIncludesToCoverage.php
│  │        │  │     │  │  ├─ RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php
│  │        │  │     │  │  ├─ RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php
│  │        │  │     │  │  ├─ RemoveCacheResultFileAttribute.php
│  │        │  │     │  │  ├─ RemoveCacheTokensAttribute.php
│  │        │  │     │  │  ├─ RemoveConversionToExceptionsAttributes.php
│  │        │  │     │  │  ├─ RemoveCoverageElementCacheDirectoryAttribute.php
│  │        │  │     │  │  ├─ RemoveCoverageElementProcessUncoveredFilesAttribute.php
│  │        │  │     │  │  ├─ RemoveEmptyFilter.php
│  │        │  │     │  │  ├─ RemoveListeners.php
│  │        │  │     │  │  ├─ RemoveLogTypes.php
│  │        │  │     │  │  ├─ RemoveLoggingElements.php
│  │        │  │     │  │  ├─ RemoveNoInteractionAttribute.php
│  │        │  │     │  │  ├─ RemovePrinterAttributes.php
│  │        │  │     │  │  ├─ RemoveRegisterMockObjectsFromTestArgumentsRecursivelyAttribute.php
│  │        │  │     │  │  ├─ RemoveTestDoxGroupsElement.php
│  │        │  │     │  │  ├─ RemoveTestSuiteLoaderAttributes.php
│  │        │  │     │  │  ├─ RemoveVerboseAttribute.php
│  │        │  │     │  │  ├─ RenameBackupStaticAttributesAttribute.php
│  │        │  │     │  │  ├─ RenameBeStrictAboutCoversAnnotationAttribute.php
│  │        │  │     │  │  ├─ RenameForceCoversAnnotationAttribute.php
│  │        │  │     │  │  ├─ ReplaceRestrictDeprecationsWithIgnoreDeprecations.php
│  │        │  │     │  │  └─ UpdateSchemaLocation.php
│  │        │  │     │  ├─ Migrator.php
│  │        │  │     │  └─ SnapshotNodeList.php
│  │        │  │     ├─ PHPUnit.php
│  │        │  │     ├─ SchemaDetector
│  │        │  │     │  ├─ FailedSchemaDetectionResult.php
│  │        │  │     │  ├─ SchemaDetectionResult.php
│  │        │  │     │  ├─ SchemaDetector.php
│  │        │  │     │  └─ SuccessfulSchemaDetectionResult.php
│  │        │  │     ├─ SchemaFinder.php
│  │        │  │     ├─ TestSuiteMapper.php
│  │        │  │     └─ Validator
│  │        │  │        ├─ ValidationResult.php
│  │        │  │        └─ Validator.php
│  │        │  ├─ Exception
│  │        │  │  ├─ CannotOpenSocketException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ InvalidSocketException.php
│  │        │  │  ├─ RuntimeException.php
│  │        │  │  ├─ TestDirectoryNotFoundException.php
│  │        │  │  └─ TestFileNotFoundException.php
│  │        │  ├─ Help.php
│  │        │  ├─ Output
│  │        │  │  ├─ Default
│  │        │  │  │  ├─ ProgressPrinter
│  │        │  │  │  │  ├─ ProgressPrinter.php
│  │        │  │  │  │  └─ Subscriber
│  │        │  │  │  │     ├─ BeforeTestClassMethodErroredSubscriber.php
│  │        │  │  │  │     ├─ Subscriber.php
│  │        │  │  │  │     ├─ TestConsideredRiskySubscriber.php
│  │        │  │  │  │     ├─ TestErroredSubscriber.php
│  │        │  │  │  │     ├─ TestFailedSubscriber.php
│  │        │  │  │  │     ├─ TestFinishedSubscriber.php
│  │        │  │  │  │     ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │  │  │     ├─ TestPreparedSubscriber.php
│  │        │  │  │  │     ├─ TestRunnerExecutionStartedSubscriber.php
│  │        │  │  │  │     ├─ TestSkippedSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredDeprecationSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredErrorSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredNoticeSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpunitDeprecationSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpunitWarningSubscriber.php
│  │        │  │  │  │     └─ TestTriggeredWarningSubscriber.php
│  │        │  │  │  ├─ ResultPrinter.php
│  │        │  │  │  └─ UnexpectedOutputPrinter.php
│  │        │  │  ├─ Facade.php
│  │        │  │  ├─ Printer
│  │        │  │  │  ├─ DefaultPrinter.php
│  │        │  │  │  ├─ NullPrinter.php
│  │        │  │  │  └─ Printer.php
│  │        │  │  ├─ SummaryPrinter.php
│  │        │  │  └─ TestDox
│  │        │  │     └─ ResultPrinter.php
│  │        │  ├─ ShellExitCodeCalculator.php
│  │        │  ├─ TestRunner.php
│  │        │  └─ TestSuiteFilterProcessor.php
│  │        └─ Util
│  │           ├─ Cloner.php
│  │           ├─ Color.php
│  │           ├─ Exception
│  │           │  ├─ Exception.php
│  │           │  ├─ InvalidDirectoryException.php
│  │           │  ├─ InvalidJsonException.php
│  │           │  ├─ InvalidVersionOperatorException.php
│  │           │  ├─ PhpProcessException.php
│  │           │  └─ XmlException.php
│  │           ├─ ExcludeList.php
│  │           ├─ Exporter.php
│  │           ├─ Filesystem.php
│  │           ├─ Filter.php
│  │           ├─ GlobalState.php
│  │           ├─ Http
│  │           │  ├─ Downloader.php
│  │           │  └─ PhpDownloader.php
│  │           ├─ Json.php
│  │           ├─ PHP
│  │           │  ├─ DefaultJobRunner.php
│  │           │  ├─ Job.php
│  │           │  ├─ JobRunner.php
│  │           │  ├─ JobRunnerRegistry.php
│  │           │  └─ Result.php
│  │           ├─ Reflection.php
│  │           ├─ Test.php
│  │           ├─ ThrowableToStringMapper.php
│  │           ├─ VersionComparisonOperator.php
│  │           └─ Xml
│  │              ├─ Loader.php
│  │              └─ Xml.php
│  ├─ plank
│  │  └─ laravel-mediable
│  │     ├─ .editorconfig
│  │     ├─ .readthedocs.yaml
│  │     ├─ CHANGELOG.md
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ UPGRADING.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ mediable.php
│  │     ├─ docs
│  │     │  ├─ Makefile
│  │     │  ├─ requirements.txt
│  │     │  └─ source
│  │     │     ├─ commands.rst
│  │     │     ├─ conf.py
│  │     │     ├─ configuration.rst
│  │     │     ├─ index.rst
│  │     │     ├─ installation.rst
│  │     │     ├─ media.rst
│  │     │     ├─ mediable.rst
│  │     │     ├─ types.rst
│  │     │     ├─ uploader.rst
│  │     │     └─ variants.rst
│  │     ├─ infection.json.dist
│  │     ├─ migrations
│  │     │  ├─ 2016_06_27_000000_create_mediable_tables.php
│  │     │  ├─ 2020_10_12_000000_add_variants_to_media.php
│  │     │  └─ 2024_03_30_000000_add_alt_to_media.php
│  │     ├─ phpstan.neon
│  │     ├─ phpunit.xml
│  │     ├─ src
│  │     │  ├─ Commands
│  │     │  │  ├─ ImportMediaCommand.php
│  │     │  │  ├─ PruneMediaCommand.php
│  │     │  │  └─ SyncMediaCommand.php
│  │     │  ├─ Exceptions
│  │     │  │  ├─ ImageManipulationException.php
│  │     │  │  ├─ MediaMoveException.php
│  │     │  │  ├─ MediaUpload
│  │     │  │  │  ├─ ConfigurationException.php
│  │     │  │  │  ├─ FileExistsException.php
│  │     │  │  │  ├─ FileNotFoundException.php
│  │     │  │  │  ├─ FileNotSupportedException.php
│  │     │  │  │  ├─ FileSizeException.php
│  │     │  │  │  ├─ ForbiddenException.php
│  │     │  │  │  └─ InvalidHashException.php
│  │     │  │  ├─ MediaUploadException.php
│  │     │  │  └─ MediaUrlException.php
│  │     │  ├─ Facades
│  │     │  │  ├─ ImageManipulator.php
│  │     │  │  └─ MediaUploader.php
│  │     │  ├─ HandlesMediaUploadExceptions.php
│  │     │  ├─ Helpers
│  │     │  │  └─ File.php
│  │     │  ├─ ImageManipulation.php
│  │     │  ├─ ImageManipulator.php
│  │     │  ├─ ImageOptimizer.php
│  │     │  ├─ Jobs
│  │     │  │  └─ CreateImageVariants.php
│  │     │  ├─ Media.php
│  │     │  ├─ MediaMover.php
│  │     │  ├─ MediaUploader.php
│  │     │  ├─ Mediable.php
│  │     │  ├─ MediableCollection.php
│  │     │  ├─ MediableInterface.php
│  │     │  ├─ MediableServiceProvider.php
│  │     │  ├─ SourceAdapters
│  │     │  │  ├─ DataUrlAdapter.php
│  │     │  │  ├─ FileAdapter.php
│  │     │  │  ├─ LocalPathAdapter.php
│  │     │  │  ├─ RawContentAdapter.php
│  │     │  │  ├─ RemoteUrlAdapter.php
│  │     │  │  ├─ SourceAdapterFactory.php
│  │     │  │  ├─ SourceAdapterInterface.php
│  │     │  │  ├─ StreamAdapter.php
│  │     │  │  ├─ StreamResourceAdapter.php
│  │     │  │  └─ UploadedFileAdapter.php
│  │     │  └─ UrlGenerators
│  │     │     ├─ BaseUrlGenerator.php
│  │     │     ├─ LocalUrlGenerator.php
│  │     │     ├─ S3UrlGenerator.php
│  │     │     ├─ TemporaryUrlGeneratorInterface.php
│  │     │     ├─ UrlGeneratorFactory.php
│  │     │     └─ UrlGeneratorInterface.php
│  │     └─ tests
│  │        ├─ Factories
│  │        │  └─ ModelFactory.php
│  │        ├─ Integration
│  │        │  ├─ Commands
│  │        │  │  ├─ ImportMediaCommandTest.php
│  │        │  │  ├─ PruneMediaCommandTest.php
│  │        │  │  └─ SyncMediaCommandTest.php
│  │        │  ├─ ConnectionTest.php
│  │        │  ├─ HandlesMediaExceptionsTest.php
│  │        │  ├─ Helpers
│  │        │  │  └─ FileTest.php
│  │        │  ├─ ImageManipulationTest.php
│  │        │  ├─ ImageManipulatorTest.php
│  │        │  ├─ ImageOptimizerTest.php
│  │        │  ├─ Jobs
│  │        │  │  └─ CreateImageVariantsTest.php
│  │        │  ├─ MediaTest.php
│  │        │  ├─ MediaUploaderTest.php
│  │        │  ├─ MediableCollectionTest.php
│  │        │  ├─ MediableTest.php
│  │        │  ├─ SourceAdapters
│  │        │  │  ├─ SourceAdapterFactoryTest.php
│  │        │  │  └─ SourceAdapterTest.php
│  │        │  └─ UrlGenerators
│  │        │     ├─ LocalUrlGeneratorTest.php
│  │        │     ├─ S3UrlGeneratorTest.php
│  │        │     └─ UrlGeneratorFactoryTest.php
│  │        ├─ Mocks
│  │        │  ├─ MediaSoftDelete.php
│  │        │  ├─ MediaSubclass.php
│  │        │  ├─ MockCallable.php
│  │        │  ├─ SampleExceptionHandler.php
│  │        │  ├─ SampleMediable.php
│  │        │  └─ SampleMediableSoftDelete.php
│  │        ├─ TestCase.php
│  │        ├─ _data
│  │        │  ├─ plank.png
│  │        │  └─ plank2.png
│  │        └─ migrations
│  │           └─ 2016_06_27_000001_create_mediable_test_tables.php
│  ├─ psr
│  │  ├─ clock
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ ClockInterface.php
│  │  ├─ container
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ContainerExceptionInterface.php
│  │  │     ├─ ContainerInterface.php
│  │  │     └─ NotFoundExceptionInterface.php
│  │  ├─ event-dispatcher
│  │  │  ├─ .editorconfig
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ EventDispatcherInterface.php
│  │  │     ├─ ListenerProviderInterface.php
│  │  │     └─ StoppableEventInterface.php
│  │  ├─ http-client
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ClientExceptionInterface.php
│  │  │     ├─ ClientInterface.php
│  │  │     ├─ NetworkExceptionInterface.php
│  │  │     └─ RequestExceptionInterface.php
│  │  ├─ http-factory
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ RequestFactoryInterface.php
│  │  │     ├─ ResponseFactoryInterface.php
│  │  │     ├─ ServerRequestFactoryInterface.php
│  │  │     ├─ StreamFactoryInterface.php
│  │  │     ├─ UploadedFileFactoryInterface.php
│  │  │     └─ UriFactoryInterface.php
│  │  ├─ http-message
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  ├─ PSR7-Interfaces.md
│  │  │  │  └─ PSR7-Usage.md
│  │  │  └─ src
│  │  │     ├─ MessageInterface.php
│  │  │     ├─ RequestInterface.php
│  │  │     ├─ ResponseInterface.php
│  │  │     ├─ ServerRequestInterface.php
│  │  │     ├─ StreamInterface.php
│  │  │     ├─ UploadedFileInterface.php
│  │  │     └─ UriInterface.php
│  │  ├─ log
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AbstractLogger.php
│  │  │     ├─ InvalidArgumentException.php
│  │  │     ├─ LogLevel.php
│  │  │     ├─ LoggerAwareInterface.php
│  │  │     ├─ LoggerAwareTrait.php
│  │  │     ├─ LoggerInterface.php
│  │  │     ├─ LoggerTrait.php
│  │  │     └─ NullLogger.php
│  │  └─ simple-cache
│  │     ├─ .editorconfig
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ CacheException.php
│  │        ├─ CacheInterface.php
│  │        └─ InvalidArgumentException.php
│  ├─ psy
│  │  └─ psysh
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ bin
│  │     │  └─ psysh
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ CodeCleaner
│  │        │  ├─ AbstractClassPass.php
│  │        │  ├─ AssignThisVariablePass.php
│  │        │  ├─ CallTimePassByReferencePass.php
│  │        │  ├─ CalledClassPass.php
│  │        │  ├─ CodeCleanerPass.php
│  │        │  ├─ EmptyArrayDimFetchPass.php
│  │        │  ├─ ExitPass.php
│  │        │  ├─ FinalClassPass.php
│  │        │  ├─ FunctionContextPass.php
│  │        │  ├─ FunctionReturnInWriteContextPass.php
│  │        │  ├─ ImplicitReturnPass.php
│  │        │  ├─ IssetPass.php
│  │        │  ├─ LabelContextPass.php
│  │        │  ├─ LeavePsyshAlonePass.php
│  │        │  ├─ ListPass.php
│  │        │  ├─ LoopContextPass.php
│  │        │  ├─ MagicConstantsPass.php
│  │        │  ├─ NamespaceAwarePass.php
│  │        │  ├─ NamespacePass.php
│  │        │  ├─ NoReturnValue.php
│  │        │  ├─ PassableByReferencePass.php
│  │        │  ├─ RequirePass.php
│  │        │  ├─ ReturnTypePass.php
│  │        │  ├─ StrictTypesPass.php
│  │        │  ├─ UseStatementPass.php
│  │        │  ├─ ValidClassNamePass.php
│  │        │  ├─ ValidConstructorPass.php
│  │        │  └─ ValidFunctionNamePass.php
│  │        ├─ CodeCleaner.php
│  │        ├─ Command
│  │        │  ├─ BufferCommand.php
│  │        │  ├─ ClearCommand.php
│  │        │  ├─ CodeArgumentParser.php
│  │        │  ├─ Command.php
│  │        │  ├─ DocCommand.php
│  │        │  ├─ DumpCommand.php
│  │        │  ├─ EditCommand.php
│  │        │  ├─ ExitCommand.php
│  │        │  ├─ HelpCommand.php
│  │        │  ├─ HistoryCommand.php
│  │        │  ├─ ListCommand
│  │        │  │  ├─ ClassConstantEnumerator.php
│  │        │  │  ├─ ClassEnumerator.php
│  │        │  │  ├─ ConstantEnumerator.php
│  │        │  │  ├─ Enumerator.php
│  │        │  │  ├─ FunctionEnumerator.php
│  │        │  │  ├─ GlobalVariableEnumerator.php
│  │        │  │  ├─ MethodEnumerator.php
│  │        │  │  ├─ PropertyEnumerator.php
│  │        │  │  └─ VariableEnumerator.php
│  │        │  ├─ ListCommand.php
│  │        │  ├─ ParseCommand.php
│  │        │  ├─ PsyVersionCommand.php
│  │        │  ├─ ReflectingCommand.php
│  │        │  ├─ ShowCommand.php
│  │        │  ├─ SudoCommand.php
│  │        │  ├─ ThrowUpCommand.php
│  │        │  ├─ TimeitCommand
│  │        │  │  └─ TimeitVisitor.php
│  │        │  ├─ TimeitCommand.php
│  │        │  ├─ TraceCommand.php
│  │        │  ├─ WhereamiCommand.php
│  │        │  └─ WtfCommand.php
│  │        ├─ ConfigPaths.php
│  │        ├─ Configuration.php
│  │        ├─ Context.php
│  │        ├─ ContextAware.php
│  │        ├─ EnvInterface.php
│  │        ├─ Exception
│  │        │  ├─ BreakException.php
│  │        │  ├─ DeprecatedException.php
│  │        │  ├─ ErrorException.php
│  │        │  ├─ Exception.php
│  │        │  ├─ FatalErrorException.php
│  │        │  ├─ ParseErrorException.php
│  │        │  ├─ RuntimeException.php
│  │        │  ├─ ThrowUpException.php
│  │        │  └─ UnexpectedTargetException.php
│  │        ├─ ExecutionClosure.php
│  │        ├─ ExecutionLoop
│  │        │  ├─ AbstractListener.php
│  │        │  ├─ Listener.php
│  │        │  ├─ ProcessForker.php
│  │        │  └─ RunkitReloader.php
│  │        ├─ ExecutionLoopClosure.php
│  │        ├─ Formatter
│  │        │  ├─ CodeFormatter.php
│  │        │  ├─ DocblockFormatter.php
│  │        │  ├─ ReflectorFormatter.php
│  │        │  ├─ SignatureFormatter.php
│  │        │  └─ TraceFormatter.php
│  │        ├─ Input
│  │        │  ├─ CodeArgument.php
│  │        │  ├─ FilterOptions.php
│  │        │  ├─ ShellInput.php
│  │        │  └─ SilentInput.php
│  │        ├─ Output
│  │        │  ├─ OutputPager.php
│  │        │  ├─ PassthruPager.php
│  │        │  ├─ ProcOutputPager.php
│  │        │  ├─ ShellOutput.php
│  │        │  └─ Theme.php
│  │        ├─ ParserFactory.php
│  │        ├─ Readline
│  │        │  ├─ GNUReadline.php
│  │        │  ├─ Hoa
│  │        │  │  ├─ Autocompleter.php
│  │        │  │  ├─ AutocompleterAggregate.php
│  │        │  │  ├─ AutocompleterPath.php
│  │        │  │  ├─ AutocompleterWord.php
│  │        │  │  ├─ Console.php
│  │        │  │  ├─ ConsoleCursor.php
│  │        │  │  ├─ ConsoleException.php
│  │        │  │  ├─ ConsoleInput.php
│  │        │  │  ├─ ConsoleOutput.php
│  │        │  │  ├─ ConsoleProcessus.php
│  │        │  │  ├─ ConsoleTput.php
│  │        │  │  ├─ ConsoleWindow.php
│  │        │  │  ├─ Event.php
│  │        │  │  ├─ EventBucket.php
│  │        │  │  ├─ EventException.php
│  │        │  │  ├─ EventListenable.php
│  │        │  │  ├─ EventListener.php
│  │        │  │  ├─ EventListens.php
│  │        │  │  ├─ EventSource.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ ExceptionIdle.php
│  │        │  │  ├─ File.php
│  │        │  │  ├─ FileDirectory.php
│  │        │  │  ├─ FileDoesNotExistException.php
│  │        │  │  ├─ FileException.php
│  │        │  │  ├─ FileFinder.php
│  │        │  │  ├─ FileGeneric.php
│  │        │  │  ├─ FileLink.php
│  │        │  │  ├─ FileLinkRead.php
│  │        │  │  ├─ FileLinkReadWrite.php
│  │        │  │  ├─ FileRead.php
│  │        │  │  ├─ FileReadWrite.php
│  │        │  │  ├─ IStream.php
│  │        │  │  ├─ IteratorFileSystem.php
│  │        │  │  ├─ IteratorRecursiveDirectory.php
│  │        │  │  ├─ IteratorSplFileInfo.php
│  │        │  │  ├─ Protocol.php
│  │        │  │  ├─ ProtocolException.php
│  │        │  │  ├─ ProtocolNode.php
│  │        │  │  ├─ ProtocolNodeLibrary.php
│  │        │  │  ├─ ProtocolWrapper.php
│  │        │  │  ├─ Readline.php
│  │        │  │  ├─ Stream.php
│  │        │  │  ├─ StreamBufferable.php
│  │        │  │  ├─ StreamContext.php
│  │        │  │  ├─ StreamException.php
│  │        │  │  ├─ StreamIn.php
│  │        │  │  ├─ StreamLockable.php
│  │        │  │  ├─ StreamOut.php
│  │        │  │  ├─ StreamPathable.php
│  │        │  │  ├─ StreamPointable.php
│  │        │  │  ├─ StreamStatable.php
│  │        │  │  ├─ StreamTouchable.php
│  │        │  │  ├─ Terminfo
│  │        │  │  │  ├─ 77
│  │        │  │  │  │  └─ windows-ansi
│  │        │  │  │  └─ 78
│  │        │  │  │     ├─ xterm
│  │        │  │  │     └─ xterm-256color
│  │        │  │  ├─ Ustring.php
│  │        │  │  └─ Xcallable.php
│  │        │  ├─ Libedit.php
│  │        │  ├─ Readline.php
│  │        │  ├─ Transient.php
│  │        │  └─ Userland.php
│  │        ├─ Reflection
│  │        │  ├─ ReflectionConstant.php
│  │        │  ├─ ReflectionLanguageConstruct.php
│  │        │  ├─ ReflectionLanguageConstructParameter.php
│  │        │  └─ ReflectionNamespace.php
│  │        ├─ Shell.php
│  │        ├─ Sudo
│  │        │  └─ SudoVisitor.php
│  │        ├─ Sudo.php
│  │        ├─ SuperglobalsEnv.php
│  │        ├─ SystemEnv.php
│  │        ├─ TabCompletion
│  │        │  ├─ AutoCompleter.php
│  │        │  └─ Matcher
│  │        │     ├─ AbstractContextAwareMatcher.php
│  │        │     ├─ AbstractDefaultParametersMatcher.php
│  │        │     ├─ AbstractMatcher.php
│  │        │     ├─ ClassAttributesMatcher.php
│  │        │     ├─ ClassMethodDefaultParametersMatcher.php
│  │        │     ├─ ClassMethodsMatcher.php
│  │        │     ├─ ClassNamesMatcher.php
│  │        │     ├─ CommandsMatcher.php
│  │        │     ├─ ConstantsMatcher.php
│  │        │     ├─ FunctionDefaultParametersMatcher.php
│  │        │     ├─ FunctionsMatcher.php
│  │        │     ├─ KeywordsMatcher.php
│  │        │     ├─ MongoClientMatcher.php
│  │        │     ├─ MongoDatabaseMatcher.php
│  │        │     ├─ ObjectAttributesMatcher.php
│  │        │     ├─ ObjectMethodDefaultParametersMatcher.php
│  │        │     ├─ ObjectMethodsMatcher.php
│  │        │     └─ VariablesMatcher.php
│  │        ├─ Util
│  │        │  ├─ Docblock.php
│  │        │  ├─ Json.php
│  │        │  ├─ Mirror.php
│  │        │  └─ Str.php
│  │        ├─ VarDumper
│  │        │  ├─ Cloner.php
│  │        │  ├─ Dumper.php
│  │        │  ├─ Presenter.php
│  │        │  └─ PresenterAware.php
│  │        ├─ VersionUpdater
│  │        │  ├─ Checker.php
│  │        │  ├─ Downloader
│  │        │  │  ├─ CurlDownloader.php
│  │        │  │  ├─ Factory.php
│  │        │  │  └─ FileDownloader.php
│  │        │  ├─ Downloader.php
│  │        │  ├─ GitHubChecker.php
│  │        │  ├─ Installer.php
│  │        │  ├─ IntervalChecker.php
│  │        │  ├─ NoopChecker.php
│  │        │  └─ SelfUpdate.php
│  │        └─ functions.php
│  ├─ ralouphie
│  │  └─ getallheaders
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ getallheaders.php
│  ├─ ramsey
│  │  ├─ collection
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AbstractArray.php
│  │  │     ├─ AbstractCollection.php
│  │  │     ├─ AbstractSet.php
│  │  │     ├─ ArrayInterface.php
│  │  │     ├─ Collection.php
│  │  │     ├─ CollectionInterface.php
│  │  │     ├─ DoubleEndedQueue.php
│  │  │     ├─ DoubleEndedQueueInterface.php
│  │  │     ├─ Exception
│  │  │     │  ├─ CollectionException.php
│  │  │     │  ├─ CollectionMismatchException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ InvalidPropertyOrMethod.php
│  │  │     │  ├─ NoSuchElementException.php
│  │  │     │  ├─ OutOfBoundsException.php
│  │  │     │  └─ UnsupportedOperationException.php
│  │  │     ├─ GenericArray.php
│  │  │     ├─ Map
│  │  │     │  ├─ AbstractMap.php
│  │  │     │  ├─ AbstractTypedMap.php
│  │  │     │  ├─ AssociativeArrayMap.php
│  │  │     │  ├─ MapInterface.php
│  │  │     │  ├─ NamedParameterMap.php
│  │  │     │  ├─ TypedMap.php
│  │  │     │  └─ TypedMapInterface.php
│  │  │     ├─ Queue.php
│  │  │     ├─ QueueInterface.php
│  │  │     ├─ Set.php
│  │  │     ├─ Sort.php
│  │  │     └─ Tool
│  │  │        ├─ TypeTrait.php
│  │  │        ├─ ValueExtractorTrait.php
│  │  │        └─ ValueToStringTrait.php
│  │  └─ uuid
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ BinaryUtils.php
│  │        ├─ Builder
│  │        │  ├─ BuilderCollection.php
│  │        │  ├─ DefaultUuidBuilder.php
│  │        │  ├─ DegradedUuidBuilder.php
│  │        │  ├─ FallbackBuilder.php
│  │        │  └─ UuidBuilderInterface.php
│  │        ├─ Codec
│  │        │  ├─ CodecInterface.php
│  │        │  ├─ GuidStringCodec.php
│  │        │  ├─ OrderedTimeCodec.php
│  │        │  ├─ StringCodec.php
│  │        │  ├─ TimestampFirstCombCodec.php
│  │        │  └─ TimestampLastCombCodec.php
│  │        ├─ Converter
│  │        │  ├─ Number
│  │        │  │  ├─ BigNumberConverter.php
│  │        │  │  ├─ DegradedNumberConverter.php
│  │        │  │  └─ GenericNumberConverter.php
│  │        │  ├─ NumberConverterInterface.php
│  │        │  ├─ Time
│  │        │  │  ├─ BigNumberTimeConverter.php
│  │        │  │  ├─ DegradedTimeConverter.php
│  │        │  │  ├─ GenericTimeConverter.php
│  │        │  │  ├─ PhpTimeConverter.php
│  │        │  │  └─ UnixTimeConverter.php
│  │        │  └─ TimeConverterInterface.php
│  │        ├─ DegradedUuid.php
│  │        ├─ DeprecatedUuidInterface.php
│  │        ├─ DeprecatedUuidMethodsTrait.php
│  │        ├─ Exception
│  │        │  ├─ BuilderNotFoundException.php
│  │        │  ├─ DateTimeException.php
│  │        │  ├─ DceSecurityException.php
│  │        │  ├─ InvalidArgumentException.php
│  │        │  ├─ InvalidBytesException.php
│  │        │  ├─ InvalidUuidStringException.php
│  │        │  ├─ NameException.php
│  │        │  ├─ NodeException.php
│  │        │  ├─ RandomSourceException.php
│  │        │  ├─ TimeSourceException.php
│  │        │  ├─ UnableToBuildUuidException.php
│  │        │  ├─ UnsupportedOperationException.php
│  │        │  └─ UuidExceptionInterface.php
│  │        ├─ FeatureSet.php
│  │        ├─ Fields
│  │        │  ├─ FieldsInterface.php
│  │        │  └─ SerializableFieldsTrait.php
│  │        ├─ Generator
│  │        │  ├─ CombGenerator.php
│  │        │  ├─ DceSecurityGenerator.php
│  │        │  ├─ DceSecurityGeneratorInterface.php
│  │        │  ├─ DefaultNameGenerator.php
│  │        │  ├─ DefaultTimeGenerator.php
│  │        │  ├─ NameGeneratorFactory.php
│  │        │  ├─ NameGeneratorInterface.php
│  │        │  ├─ PeclUuidNameGenerator.php
│  │        │  ├─ PeclUuidRandomGenerator.php
│  │        │  ├─ PeclUuidTimeGenerator.php
│  │        │  ├─ RandomBytesGenerator.php
│  │        │  ├─ RandomGeneratorFactory.php
│  │        │  ├─ RandomGeneratorInterface.php
│  │        │  ├─ RandomLibAdapter.php
│  │        │  ├─ TimeGeneratorFactory.php
│  │        │  ├─ TimeGeneratorInterface.php
│  │        │  └─ UnixTimeGenerator.php
│  │        ├─ Guid
│  │        │  ├─ Fields.php
│  │        │  ├─ Guid.php
│  │        │  └─ GuidBuilder.php
│  │        ├─ Lazy
│  │        │  └─ LazyUuidFromString.php
│  │        ├─ Math
│  │        │  ├─ BrickMathCalculator.php
│  │        │  ├─ CalculatorInterface.php
│  │        │  └─ RoundingMode.php
│  │        ├─ Nonstandard
│  │        │  ├─ Fields.php
│  │        │  ├─ Uuid.php
│  │        │  ├─ UuidBuilder.php
│  │        │  └─ UuidV6.php
│  │        ├─ Provider
│  │        │  ├─ Dce
│  │        │  │  └─ SystemDceSecurityProvider.php
│  │        │  ├─ DceSecurityProviderInterface.php
│  │        │  ├─ Node
│  │        │  │  ├─ FallbackNodeProvider.php
│  │        │  │  ├─ NodeProviderCollection.php
│  │        │  │  ├─ RandomNodeProvider.php
│  │        │  │  ├─ StaticNodeProvider.php
│  │        │  │  └─ SystemNodeProvider.php
│  │        │  ├─ NodeProviderInterface.php
│  │        │  ├─ Time
│  │        │  │  ├─ FixedTimeProvider.php
│  │        │  │  └─ SystemTimeProvider.php
│  │        │  └─ TimeProviderInterface.php
│  │        ├─ Rfc4122
│  │        │  ├─ Fields.php
│  │        │  ├─ FieldsInterface.php
│  │        │  ├─ MaxTrait.php
│  │        │  ├─ MaxUuid.php
│  │        │  ├─ NilTrait.php
│  │        │  ├─ NilUuid.php
│  │        │  ├─ TimeTrait.php
│  │        │  ├─ UuidBuilder.php
│  │        │  ├─ UuidInterface.php
│  │        │  ├─ UuidV1.php
│  │        │  ├─ UuidV2.php
│  │        │  ├─ UuidV3.php
│  │        │  ├─ UuidV4.php
│  │        │  ├─ UuidV5.php
│  │        │  ├─ UuidV6.php
│  │        │  ├─ UuidV7.php
│  │        │  ├─ UuidV8.php
│  │        │  ├─ Validator.php
│  │        │  ├─ VariantTrait.php
│  │        │  └─ VersionTrait.php
│  │        ├─ Type
│  │        │  ├─ Decimal.php
│  │        │  ├─ Hexadecimal.php
│  │        │  ├─ Integer.php
│  │        │  ├─ NumberInterface.php
│  │        │  ├─ Time.php
│  │        │  └─ TypeInterface.php
│  │        ├─ Uuid.php
│  │        ├─ UuidFactory.php
│  │        ├─ UuidFactoryInterface.php
│  │        ├─ UuidInterface.php
│  │        ├─ Validator
│  │        │  ├─ GenericValidator.php
│  │        │  └─ ValidatorInterface.php
│  │        └─ functions.php
│  ├─ sebastian
│  │  ├─ cli-parser
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Parser.php
│  │  │     └─ exceptions
│  │  │        ├─ AmbiguousOptionException.php
│  │  │        ├─ Exception.php
│  │  │        ├─ OptionDoesNotAllowArgumentException.php
│  │  │        ├─ RequiredOptionArgumentMissingException.php
│  │  │        └─ UnknownOptionException.php
│  │  ├─ code-unit
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ClassMethodUnit.php
│  │  │     ├─ ClassUnit.php
│  │  │     ├─ CodeUnit.php
│  │  │     ├─ CodeUnitCollection.php
│  │  │     ├─ CodeUnitCollectionIterator.php
│  │  │     ├─ FileUnit.php
│  │  │     ├─ FunctionUnit.php
│  │  │     ├─ InterfaceMethodUnit.php
│  │  │     ├─ InterfaceUnit.php
│  │  │     ├─ Mapper.php
│  │  │     ├─ TraitMethodUnit.php
│  │  │     ├─ TraitUnit.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ InvalidCodeUnitException.php
│  │  │        ├─ NoTraitException.php
│  │  │        └─ ReflectionException.php
│  │  ├─ code-unit-reverse-lookup
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Wizard.php
│  │  ├─ comparator
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ArrayComparator.php
│  │  │     ├─ Comparator.php
│  │  │     ├─ ComparisonFailure.php
│  │  │     ├─ DOMNodeComparator.php
│  │  │     ├─ DateTimeComparator.php
│  │  │     ├─ EnumerationComparator.php
│  │  │     ├─ ExceptionComparator.php
│  │  │     ├─ Factory.php
│  │  │     ├─ MockObjectComparator.php
│  │  │     ├─ NumberComparator.php
│  │  │     ├─ NumericComparator.php
│  │  │     ├─ ObjectComparator.php
│  │  │     ├─ ResourceComparator.php
│  │  │     ├─ ScalarComparator.php
│  │  │     ├─ SplObjectStorageComparator.php
│  │  │     ├─ TypeComparator.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        └─ RuntimeException.php
│  │  ├─ complexity
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Calculator.php
│  │  │     ├─ Complexity
│  │  │     │  ├─ Complexity.php
│  │  │     │  ├─ ComplexityCollection.php
│  │  │     │  └─ ComplexityCollectionIterator.php
│  │  │     ├─ Exception
│  │  │     │  ├─ Exception.php
│  │  │     │  └─ RuntimeException.php
│  │  │     └─ Visitor
│  │  │        ├─ ComplexityCalculatingVisitor.php
│  │  │        └─ CyclomaticComplexityCalculatingVisitor.php
│  │  ├─ diff
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Chunk.php
│  │  │     ├─ Diff.php
│  │  │     ├─ Differ.php
│  │  │     ├─ Exception
│  │  │     │  ├─ ConfigurationException.php
│  │  │     │  ├─ Exception.php
│  │  │     │  └─ InvalidArgumentException.php
│  │  │     ├─ Line.php
│  │  │     ├─ LongestCommonSubsequenceCalculator.php
│  │  │     ├─ MemoryEfficientLongestCommonSubsequenceCalculator.php
│  │  │     ├─ Output
│  │  │     │  ├─ AbstractChunkOutputBuilder.php
│  │  │     │  ├─ DiffOnlyOutputBuilder.php
│  │  │     │  ├─ DiffOutputBuilderInterface.php
│  │  │     │  ├─ StrictUnifiedDiffOutputBuilder.php
│  │  │     │  └─ UnifiedDiffOutputBuilder.php
│  │  │     ├─ Parser.php
│  │  │     └─ TimeEfficientLongestCommonSubsequenceCalculator.php
│  │  ├─ environment
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Console.php
│  │  │     └─ Runtime.php
│  │  ├─ exporter
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Exporter.php
│  │  ├─ global-state
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ CodeExporter.php
│  │  │     ├─ ExcludeList.php
│  │  │     ├─ Restorer.php
│  │  │     ├─ Snapshot.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        └─ RuntimeException.php
│  │  ├─ lines-of-code
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Counter.php
│  │  │     ├─ Exception
│  │  │     │  ├─ Exception.php
│  │  │     │  ├─ IllogicalValuesException.php
│  │  │     │  ├─ NegativeValueException.php
│  │  │     │  └─ RuntimeException.php
│  │  │     ├─ LineCountingVisitor.php
│  │  │     └─ LinesOfCode.php
│  │  ├─ object-enumerator
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Enumerator.php
│  │  ├─ object-reflector
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ ObjectReflector.php
│  │  ├─ recursion-context
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Context.php
│  │  ├─ type
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  ├─ infection.json
│  │  │  └─ src
│  │  │     ├─ Parameter.php
│  │  │     ├─ ReflectionMapper.php
│  │  │     ├─ TypeName.php
│  │  │     ├─ exception
│  │  │     │  ├─ Exception.php
│  │  │     │  └─ RuntimeException.php
│  │  │     └─ type
│  │  │        ├─ CallableType.php
│  │  │        ├─ FalseType.php
│  │  │        ├─ GenericObjectType.php
│  │  │        ├─ IntersectionType.php
│  │  │        ├─ IterableType.php
│  │  │        ├─ MixedType.php
│  │  │        ├─ NeverType.php
│  │  │        ├─ NullType.php
│  │  │        ├─ ObjectType.php
│  │  │        ├─ SimpleType.php
│  │  │        ├─ StaticType.php
│  │  │        ├─ TrueType.php
│  │  │        ├─ Type.php
│  │  │        ├─ UnionType.php
│  │  │        ├─ UnknownType.php
│  │  │        └─ VoidType.php
│  │  └─ version
│  │     ├─ ChangeLog.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Version.php
│  ├─ solomon-ochepa
│  │  ├─ laravel-settings
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CONTRIBUTING.md
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ settings.php
│  │  │  └─ src
│  │  │     ├─ Facades
│  │  │     │  └─ Settings.php
│  │  │     ├─ Interfaces
│  │  │     │  └─ SettingsInterface.php
│  │  │     ├─ Models
│  │  │     │  └─ Setting.php
│  │  │     ├─ Repositories
│  │  │     │  └─ SettingsRepository.php
│  │  │     ├─ SettingsServiceProvider.php
│  │  │     ├─ helpers.php
│  │  │     └─ migrations
│  │  │        └─ 2014_10_00_000000_create_settings_table.php
│  │  └─ nuban
│  │     ├─ Exceptions
│  │     │  ├─ ConfigurationException.php
│  │     │  └─ NubapiException.php
│  │     ├─ Readme.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ nubapi.php
│  │     ├─ src
│  │     │  ├─ Nubapi.php
│  │     │  └─ NubapiServiceProvider.php
│  │     └─ tests
│  │        └─ NubanTest.php
│  ├─ spatie
│  │  ├─ backtrace
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Arguments
│  │  │     │  ├─ ArgumentReducers.php
│  │  │     │  ├─ ProvidedArgument.php
│  │  │     │  ├─ ReduceArgumentPayloadAction.php
│  │  │     │  ├─ ReduceArgumentsAction.php
│  │  │     │  ├─ ReducedArgument
│  │  │     │  │  ├─ ReducedArgument.php
│  │  │     │  │  ├─ ReducedArgumentContract.php
│  │  │     │  │  ├─ TruncatedReducedArgument.php
│  │  │     │  │  ├─ UnReducedArgument.php
│  │  │     │  │  └─ VariadicReducedArgument.php
│  │  │     │  └─ Reducers
│  │  │     │     ├─ ArgumentReducer.php
│  │  │     │     ├─ ArrayArgumentReducer.php
│  │  │     │     ├─ BaseTypeArgumentReducer.php
│  │  │     │     ├─ ClosureArgumentReducer.php
│  │  │     │     ├─ DateTimeArgumentReducer.php
│  │  │     │     ├─ DateTimeZoneArgumentReducer.php
│  │  │     │     ├─ EnumArgumentReducer.php
│  │  │     │     ├─ MinimalArrayArgumentReducer.php
│  │  │     │     ├─ SensitiveParameterArrayReducer.php
│  │  │     │     ├─ StdClassArgumentReducer.php
│  │  │     │     ├─ StringableArgumentReducer.php
│  │  │     │     └─ SymphonyRequestArgumentReducer.php
│  │  │     ├─ Backtrace.php
│  │  │     ├─ CodeSnippets
│  │  │     │  ├─ CodeSnippet.php
│  │  │     │  ├─ FileSnippetProvider.php
│  │  │     │  ├─ LaravelSerializableClosureSnippetProvider.php
│  │  │     │  ├─ NullSnippetProvider.php
│  │  │     │  └─ SnippetProvider.php
│  │  │     └─ Frame.php
│  │  ├─ error-solutions
│  │  │  ├─ .php_cs.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ legacy
│  │  │  │  ├─ ignition
│  │  │  │  │  ├─ Contracts
│  │  │  │  │  │  ├─ BaseSolution.php
│  │  │  │  │  │  ├─ HasSolutionsForThrowable.php
│  │  │  │  │  │  ├─ ProvidesSolution.php
│  │  │  │  │  │  ├─ RunnableSolution.php
│  │  │  │  │  │  ├─ Solution.php
│  │  │  │  │  │  └─ SolutionProviderRepository.php
│  │  │  │  │  └─ Solutions
│  │  │  │  │     ├─ OpenAi
│  │  │  │  │     │  ├─ DummyCache.php
│  │  │  │  │     │  ├─ OpenAiPromptViewModel.php
│  │  │  │  │     │  ├─ OpenAiSolution.php
│  │  │  │  │     │  ├─ OpenAiSolutionProvider.php
│  │  │  │  │     │  └─ OpenAiSolutionResponse.php
│  │  │  │  │     ├─ SolutionProviders
│  │  │  │  │     │  ├─ BadMethodCallSolutionProvider.php
│  │  │  │  │     │  ├─ MergeConflictSolutionProvider.php
│  │  │  │  │     │  ├─ SolutionProviderRepository.php
│  │  │  │  │     │  └─ UndefinedPropertySolutionProvider.php
│  │  │  │  │     ├─ SolutionTransformer.php
│  │  │  │  │     ├─ SuggestCorrectVariableNameSolution.php
│  │  │  │  │     └─ SuggestImportSolution.php
│  │  │  │  └─ laravel-ignition
│  │  │  │     ├─ Solutions
│  │  │  │     │  ├─ GenerateAppKeySolution.php
│  │  │  │     │  ├─ LivewireDiscoverSolution.php
│  │  │  │     │  ├─ MakeViewVariableOptionalSolution.php
│  │  │  │     │  ├─ RunMigrationsSolution.php
│  │  │  │     │  ├─ SolutionProviders
│  │  │  │     │  │  ├─ DefaultDbNameSolutionProvider.php
│  │  │  │     │  │  ├─ GenericLaravelExceptionSolutionProvider.php
│  │  │  │     │  │  ├─ IncorrectValetDbCredentialsSolutionProvider.php
│  │  │  │     │  │  ├─ InvalidRouteActionSolutionProvider.php
│  │  │  │     │  │  ├─ LazyLoadingViolationSolutionProvider.php
│  │  │  │     │  │  ├─ MissingAppKeySolutionProvider.php
│  │  │  │     │  │  ├─ MissingColumnSolutionProvider.php
│  │  │  │     │  │  ├─ MissingImportSolutionProvider.php
│  │  │  │     │  │  ├─ MissingLivewireComponentSolutionProvider.php
│  │  │  │     │  │  ├─ MissingMixManifestSolutionProvider.php
│  │  │  │     │  │  ├─ MissingViteManifestSolutionProvider.php
│  │  │  │     │  │  ├─ OpenAiSolutionProvider.php
│  │  │  │     │  │  ├─ RouteNotDefinedSolutionProvider.php
│  │  │  │     │  │  ├─ RunningLaravelDuskInProductionProvider.php
│  │  │  │     │  │  ├─ SailNetworkSolutionProvider.php
│  │  │  │     │  │  ├─ SolutionProviderRepository.php
│  │  │  │     │  │  ├─ TableNotFoundSolutionProvider.php
│  │  │  │     │  │  ├─ UndefinedLivewireMethodSolutionProvider.php
│  │  │  │     │  │  ├─ UndefinedLivewirePropertySolutionProvider.php
│  │  │  │     │  │  ├─ UndefinedViewVariableSolutionProvider.php
│  │  │  │     │  │  ├─ UnknownMariadbCollationSolutionProvider.php
│  │  │  │     │  │  ├─ UnknownMysql8CollationSolutionProvider.php
│  │  │  │     │  │  ├─ UnknownValidationSolutionProvider.php
│  │  │  │     │  │  └─ ViewNotFoundSolutionProvider.php
│  │  │  │     │  ├─ SuggestCorrectVariableNameSolution.php
│  │  │  │     │  ├─ SuggestImportSolution.php
│  │  │  │     │  ├─ SuggestLivewireMethodNameSolution.php
│  │  │  │     │  ├─ SuggestLivewirePropertyNameSolution.php
│  │  │  │     │  ├─ SuggestUsingCorrectDbNameSolution.php
│  │  │  │     │  ├─ SuggestUsingMariadbDatabaseSolution.php
│  │  │  │     │  ├─ SuggestUsingMysql8DatabaseSolution.php
│  │  │  │     │  └─ UseDefaultValetDbCredentialsSolution.php
│  │  │  │     └─ Support
│  │  │  │        └─ StringComparator.php
│  │  │  ├─ phpstan-baseline.neon
│  │  │  ├─ phpstan.neon.dist
│  │  │  ├─ resources
│  │  │  │  └─ views
│  │  │  │     └─ aiPrompt.php
│  │  │  └─ src
│  │  │     ├─ Contracts
│  │  │     │  ├─ BaseSolution.php
│  │  │     │  ├─ HasSolutionsForThrowable.php
│  │  │     │  ├─ ProvidesSolution.php
│  │  │     │  ├─ RunnableSolution.php
│  │  │     │  ├─ Solution.php
│  │  │     │  └─ SolutionProviderRepository.php
│  │  │     ├─ DiscoverSolutionProviders.php
│  │  │     ├─ SolutionProviderRepository.php
│  │  │     ├─ SolutionProviders
│  │  │     │  ├─ BadMethodCallSolutionProvider.php
│  │  │     │  ├─ Laravel
│  │  │     │  │  ├─ DefaultDbNameSolutionProvider.php
│  │  │     │  │  ├─ GenericLaravelExceptionSolutionProvider.php
│  │  │     │  │  ├─ IncorrectValetDbCredentialsSolutionProvider.php
│  │  │     │  │  ├─ InvalidRouteActionSolutionProvider.php
│  │  │     │  │  ├─ LazyLoadingViolationSolutionProvider.php
│  │  │     │  │  ├─ MissingAppKeySolutionProvider.php
│  │  │     │  │  ├─ MissingColumnSolutionProvider.php
│  │  │     │  │  ├─ MissingImportSolutionProvider.php
│  │  │     │  │  ├─ MissingLivewireComponentSolutionProvider.php
│  │  │     │  │  ├─ MissingMixManifestSolutionProvider.php
│  │  │     │  │  ├─ MissingViteManifestSolutionProvider.php
│  │  │     │  │  ├─ OpenAiSolutionProvider.php
│  │  │     │  │  ├─ RouteNotDefinedSolutionProvider.php
│  │  │     │  │  ├─ RunningLaravelDuskInProductionProvider.php
│  │  │     │  │  ├─ SailNetworkSolutionProvider.php
│  │  │     │  │  ├─ TableNotFoundSolutionProvider.php
│  │  │     │  │  ├─ UndefinedLivewireMethodSolutionProvider.php
│  │  │     │  │  ├─ UndefinedLivewirePropertySolutionProvider.php
│  │  │     │  │  ├─ UndefinedViewVariableSolutionProvider.php
│  │  │     │  │  ├─ UnknownMariadbCollationSolutionProvider.php
│  │  │     │  │  ├─ UnknownMysql8CollationSolutionProvider.php
│  │  │     │  │  ├─ UnknownValidationSolutionProvider.php
│  │  │     │  │  └─ ViewNotFoundSolutionProvider.php
│  │  │     │  ├─ MergeConflictSolutionProvider.php
│  │  │     │  └─ UndefinedPropertySolutionProvider.php
│  │  │     ├─ Solutions
│  │  │     │  ├─ Concerns
│  │  │     │  │  └─ IsProvidedByFlare.php
│  │  │     │  ├─ Laravel
│  │  │     │  │  ├─ GenerateAppKeySolution.php
│  │  │     │  │  ├─ LivewireDiscoverSolution.php
│  │  │     │  │  ├─ MakeViewVariableOptionalSolution.php
│  │  │     │  │  ├─ RunMigrationsSolution.php
│  │  │     │  │  ├─ SuggestLivewireMethodNameSolution.php
│  │  │     │  │  ├─ SuggestLivewirePropertyNameSolution.php
│  │  │     │  │  ├─ SuggestUsingCorrectDbNameSolution.php
│  │  │     │  │  ├─ SuggestUsingMariadbDatabaseSolution.php
│  │  │     │  │  ├─ SuggestUsingMysql8DatabaseSolution.php
│  │  │     │  │  └─ UseDefaultValetDbCredentialsSolution.php
│  │  │     │  ├─ OpenAi
│  │  │     │  │  ├─ DummyCache.php
│  │  │     │  │  ├─ OpenAiPromptViewModel.php
│  │  │     │  │  ├─ OpenAiSolution.php
│  │  │     │  │  ├─ OpenAiSolutionProvider.php
│  │  │     │  │  └─ OpenAiSolutionResponse.php
│  │  │     │  ├─ SolutionTransformer.php
│  │  │     │  ├─ SuggestCorrectVariableNameSolution.php
│  │  │     │  └─ SuggestImportSolution.php
│  │  │     └─ Support
│  │  │        ├─ AiPromptRenderer.php
│  │  │        └─ Laravel
│  │  │           ├─ Composer
│  │  │           │  ├─ Composer.php
│  │  │           │  ├─ ComposerClassMap.php
│  │  │           │  └─ FakeComposer.php
│  │  │           ├─ LaravelVersion.php
│  │  │           ├─ LivewireComponentParser.php
│  │  │           └─ StringComparator.php
│  │  ├─ flare-client-php
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Api.php
│  │  │     ├─ Concerns
│  │  │     │  ├─ HasContext.php
│  │  │     │  └─ UsesTime.php
│  │  │     ├─ Context
│  │  │     │  ├─ BaseContextProviderDetector.php
│  │  │     │  ├─ ConsoleContextProvider.php
│  │  │     │  ├─ ContextProvider.php
│  │  │     │  ├─ ContextProviderDetector.php
│  │  │     │  └─ RequestContextProvider.php
│  │  │     ├─ Contracts
│  │  │     │  └─ ProvidesFlareContext.php
│  │  │     ├─ Enums
│  │  │     │  ├─ MessageLevels.php
│  │  │     │  └─ OverriddenGrouping.php
│  │  │     ├─ Flare.php
│  │  │     ├─ FlareMiddleware
│  │  │     │  ├─ AddDocumentationLinks.php
│  │  │     │  ├─ AddEnvironmentInformation.php
│  │  │     │  ├─ AddGitInformation.php
│  │  │     │  ├─ AddGlows.php
│  │  │     │  ├─ AddNotifierName.php
│  │  │     │  ├─ AddSolutions.php
│  │  │     │  ├─ CensorRequestBodyFields.php
│  │  │     │  ├─ CensorRequestHeaders.php
│  │  │     │  ├─ FlareMiddleware.php
│  │  │     │  └─ RemoveRequestIp.php
│  │  │     ├─ Frame.php
│  │  │     ├─ Glows
│  │  │     │  ├─ Glow.php
│  │  │     │  └─ GlowRecorder.php
│  │  │     ├─ Http
│  │  │     │  ├─ Client.php
│  │  │     │  ├─ Exceptions
│  │  │     │  │  ├─ BadResponse.php
│  │  │     │  │  ├─ BadResponseCode.php
│  │  │     │  │  ├─ InvalidData.php
│  │  │     │  │  ├─ MissingParameter.php
│  │  │     │  │  └─ NotFound.php
│  │  │     │  └─ Response.php
│  │  │     ├─ Report.php
│  │  │     ├─ Solutions
│  │  │     │  └─ ReportSolution.php
│  │  │     ├─ Support
│  │  │     │  └─ PhpStackFrameArgumentsFixer.php
│  │  │     ├─ Time
│  │  │     │  ├─ SystemTime.php
│  │  │     │  └─ Time.php
│  │  │     ├─ Truncation
│  │  │     │  ├─ AbstractTruncationStrategy.php
│  │  │     │  ├─ ReportTrimmer.php
│  │  │     │  ├─ TrimContextItemsStrategy.php
│  │  │     │  ├─ TrimStackFrameArgumentsStrategy.php
│  │  │     │  ├─ TrimStringsStrategy.php
│  │  │     │  └─ TruncationStrategy.php
│  │  │     ├─ View.php
│  │  │     └─ helpers.php
│  │  ├─ ignition
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ resources
│  │  │  │  ├─ compiled
│  │  │  │  │  ├─ ignition.css
│  │  │  │  │  └─ ignition.js
│  │  │  │  └─ views
│  │  │  │     ├─ aiPrompt.php
│  │  │  │     └─ errorPage.php
│  │  │  └─ src
│  │  │     ├─ Config
│  │  │     │  ├─ FileConfigManager.php
│  │  │     │  └─ IgnitionConfig.php
│  │  │     ├─ Contracts
│  │  │     │  └─ ConfigManager.php
│  │  │     ├─ ErrorPage
│  │  │     │  ├─ ErrorPageViewModel.php
│  │  │     │  └─ Renderer.php
│  │  │     └─ Ignition.php
│  │  ├─ image-optimizer
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ src
│  │  │  │  ├─ DummyLogger.php
│  │  │  │  ├─ Image.php
│  │  │  │  ├─ Optimizer.php
│  │  │  │  ├─ OptimizerChain.php
│  │  │  │  ├─ OptimizerChainFactory.php
│  │  │  │  └─ Optimizers
│  │  │  │     ├─ Avifenc.php
│  │  │  │     ├─ BaseOptimizer.php
│  │  │  │     ├─ Cwebp.php
│  │  │  │     ├─ Gifsicle.php
│  │  │  │     ├─ Jpegoptim.php
│  │  │  │     ├─ Optipng.php
│  │  │  │     ├─ Pngquant.php
│  │  │  │     └─ Svgo.php
│  │  │  └─ svgo.config.js
│  │  ├─ laravel-activitylog
│  │  │  ├─ .php_cs.dist
│  │  │  ├─ .php_cs.laravel
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ UPGRADING.md
│  │  │  ├─ art
│  │  │  │  ├─ README.md
│  │  │  │  ├─ logomark.png
│  │  │  │  ├─ logomark.svg
│  │  │  │  ├─ logomark@2x.png
│  │  │  │  ├─ logomark@3x.png
│  │  │  │  ├─ logomark@4x.png
│  │  │  │  ├─ palette
│  │  │  │  │  ├─ 100.png
│  │  │  │  │  ├─ 200.png
│  │  │  │  │  ├─ 300.png
│  │  │  │  │  ├─ 400.png
│  │  │  │  │  ├─ 500.png
│  │  │  │  │  ├─ 600.png
│  │  │  │  │  ├─ 700.png
│  │  │  │  │  ├─ 800.png
│  │  │  │  │  └─ 900.png
│  │  │  │  └─ socialcard.png
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ activitylog.php
│  │  │  ├─ database
│  │  │  │  └─ migrations
│  │  │  │     ├─ add_batch_uuid_column_to_activity_log_table.php.stub
│  │  │  │     ├─ add_event_column_to_activity_log_table.php.stub
│  │  │  │     └─ create_activity_log_table.php.stub
│  │  │  └─ src
│  │  │     ├─ ActivityLogStatus.php
│  │  │     ├─ ActivityLogger.php
│  │  │     ├─ ActivitylogServiceProvider.php
│  │  │     ├─ CauserResolver.php
│  │  │     ├─ CleanActivitylogCommand.php
│  │  │     ├─ Contracts
│  │  │     │  ├─ Activity.php
│  │  │     │  └─ LoggablePipe.php
│  │  │     ├─ EventLogBag.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ CouldNotLogActivity.php
│  │  │     │  ├─ CouldNotLogChanges.php
│  │  │     │  └─ InvalidConfiguration.php
│  │  │     ├─ Facades
│  │  │     │  ├─ Activity.php
│  │  │     │  ├─ CauserResolver.php
│  │  │     │  └─ LogBatch.php
│  │  │     ├─ LogBatch.php
│  │  │     ├─ LogOptions.php
│  │  │     ├─ Models
│  │  │     │  └─ Activity.php
│  │  │     ├─ PendingActivityLog.php
│  │  │     ├─ Traits
│  │  │     │  ├─ CausesActivity.php
│  │  │     │  └─ LogsActivity.php
│  │  │     └─ helpers.php
│  │  ├─ laravel-ignition
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  ├─ flare.php
│  │  │  │  └─ ignition.php
│  │  │  └─ src
│  │  │     ├─ ArgumentReducers
│  │  │     │  ├─ CollectionArgumentReducer.php
│  │  │     │  └─ ModelArgumentReducer.php
│  │  │     ├─ Commands
│  │  │     │  ├─ SolutionMakeCommand.php
│  │  │     │  ├─ SolutionProviderMakeCommand.php
│  │  │     │  ├─ TestCommand.php
│  │  │     │  └─ stubs
│  │  │     │     ├─ runnable-solution.stub
│  │  │     │     ├─ solution-provider.stub
│  │  │     │     └─ solution.stub
│  │  │     ├─ ContextProviders
│  │  │     │  ├─ LaravelConsoleContextProvider.php
│  │  │     │  ├─ LaravelContextProviderDetector.php
│  │  │     │  ├─ LaravelLivewireRequestContextProvider.php
│  │  │     │  └─ LaravelRequestContextProvider.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ CannotExecuteSolutionForNonLocalIp.php
│  │  │     │  ├─ InvalidConfig.php
│  │  │     │  ├─ ViewException.php
│  │  │     │  └─ ViewExceptionWithSolution.php
│  │  │     ├─ Facades
│  │  │     │  └─ Flare.php
│  │  │     ├─ FlareMiddleware
│  │  │     │  ├─ AddContext.php
│  │  │     │  ├─ AddDumps.php
│  │  │     │  ├─ AddEnvironmentInformation.php
│  │  │     │  ├─ AddExceptionHandledStatus.php
│  │  │     │  ├─ AddExceptionInformation.php
│  │  │     │  ├─ AddJobs.php
│  │  │     │  ├─ AddLogs.php
│  │  │     │  ├─ AddNotifierName.php
│  │  │     │  └─ AddQueries.php
│  │  │     ├─ Http
│  │  │     │  ├─ Controllers
│  │  │     │  │  ├─ ExecuteSolutionController.php
│  │  │     │  │  ├─ HealthCheckController.php
│  │  │     │  │  └─ UpdateConfigController.php
│  │  │     │  ├─ Middleware
│  │  │     │  │  └─ RunnableSolutionsEnabled.php
│  │  │     │  └─ Requests
│  │  │     │     ├─ ExecuteSolutionRequest.php
│  │  │     │     └─ UpdateConfigRequest.php
│  │  │     ├─ IgnitionServiceProvider.php
│  │  │     ├─ Recorders
│  │  │     │  ├─ DumpRecorder
│  │  │     │  │  ├─ Dump.php
│  │  │     │  │  ├─ DumpHandler.php
│  │  │     │  │  ├─ DumpRecorder.php
│  │  │     │  │  ├─ HtmlDumper.php
│  │  │     │  │  └─ MultiDumpHandler.php
│  │  │     │  ├─ JobRecorder
│  │  │     │  │  └─ JobRecorder.php
│  │  │     │  ├─ LogRecorder
│  │  │     │  │  ├─ LogMessage.php
│  │  │     │  │  └─ LogRecorder.php
│  │  │     │  └─ QueryRecorder
│  │  │     │     ├─ Query.php
│  │  │     │     └─ QueryRecorder.php
│  │  │     ├─ Renderers
│  │  │     │  ├─ ErrorPageRenderer.php
│  │  │     │  └─ IgnitionExceptionRenderer.php
│  │  │     ├─ Solutions
│  │  │     │  └─ SolutionTransformers
│  │  │     │     └─ LaravelSolutionTransformer.php
│  │  │     ├─ Support
│  │  │     │  ├─ FlareLogHandler.php
│  │  │     │  ├─ LaravelDocumentationLinkFinder.php
│  │  │     │  ├─ LaravelVersion.php
│  │  │     │  ├─ RunnableSolutionsGuard.php
│  │  │     │  └─ SentReports.php
│  │  │     ├─ Views
│  │  │     │  ├─ BladeSourceMapCompiler.php
│  │  │     │  └─ ViewExceptionMapper.php
│  │  │     ├─ helpers.php
│  │  │     └─ ignition-routes.php
│  │  ├─ laravel-package-tools
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Commands
│  │  │     │  ├─ Concerns
│  │  │     │  │  ├─ AskToRunMigrations.php
│  │  │     │  │  ├─ AskToStarRepoOnGitHub.php
│  │  │     │  │  ├─ PublishesResources.php
│  │  │     │  │  ├─ SupportsServiceProviderInApp.php
│  │  │     │  │  └─ SupportsStartWithEndWith.php
│  │  │     │  └─ InstallCommand.php
│  │  │     ├─ Concerns
│  │  │     │  ├─ Package
│  │  │     │  │  ├─ HasAssets.php
│  │  │     │  │  ├─ HasBladeComponents.php
│  │  │     │  │  ├─ HasCommands.php
│  │  │     │  │  ├─ HasConfigs.php
│  │  │     │  │  ├─ HasInertia.php
│  │  │     │  │  ├─ HasInstallCommand.php
│  │  │     │  │  ├─ HasMigrations.php
│  │  │     │  │  ├─ HasRoutes.php
│  │  │     │  │  ├─ HasServiceProviders.php
│  │  │     │  │  ├─ HasTranslations.php
│  │  │     │  │  ├─ HasViewComposers.php
│  │  │     │  │  ├─ HasViewSharedData.php
│  │  │     │  │  └─ HasViews.php
│  │  │     │  └─ PackageServiceProvider
│  │  │     │     ├─ ProcessAssets.php
│  │  │     │     ├─ ProcessBladeComponents.php
│  │  │     │     ├─ ProcessCommands.php
│  │  │     │     ├─ ProcessConfigs.php
│  │  │     │     ├─ ProcessInertia.php
│  │  │     │     ├─ ProcessMigrations.php
│  │  │     │     ├─ ProcessRoutes.php
│  │  │     │     ├─ ProcessServiceProviders.php
│  │  │     │     ├─ ProcessTranslations.php
│  │  │     │     ├─ ProcessViewComposers.php
│  │  │     │     ├─ ProcessViewSharedData.php
│  │  │     │     └─ ProcessViews.php
│  │  │     ├─ Exceptions
│  │  │     │  └─ InvalidPackage.php
│  │  │     ├─ Package.php
│  │  │     └─ PackageServiceProvider.php
│  │  └─ laravel-permission
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ permission.php
│  │     ├─ database
│  │     │  └─ migrations
│  │     │     ├─ add_teams_fields.php.stub
│  │     │     └─ create_permission_tables.php.stub
│  │     ├─ ide.json
│  │     ├─ pint.json
│  │     └─ src
│  │        ├─ Commands
│  │        │  ├─ CacheReset.php
│  │        │  ├─ CreatePermission.php
│  │        │  ├─ CreateRole.php
│  │        │  ├─ Show.php
│  │        │  └─ UpgradeForTeams.php
│  │        ├─ Contracts
│  │        │  ├─ Permission.php
│  │        │  ├─ PermissionsTeamResolver.php
│  │        │  ├─ Role.php
│  │        │  └─ Wildcard.php
│  │        ├─ DefaultTeamResolver.php
│  │        ├─ Events
│  │        │  ├─ PermissionAttached.php
│  │        │  ├─ PermissionDetached.php
│  │        │  ├─ RoleAttached.php
│  │        │  └─ RoleDetached.php
│  │        ├─ Exceptions
│  │        │  ├─ GuardDoesNotMatch.php
│  │        │  ├─ PermissionAlreadyExists.php
│  │        │  ├─ PermissionDoesNotExist.php
│  │        │  ├─ RoleAlreadyExists.php
│  │        │  ├─ RoleDoesNotExist.php
│  │        │  ├─ UnauthorizedException.php
│  │        │  ├─ WildcardPermissionInvalidArgument.php
│  │        │  ├─ WildcardPermissionNotImplementsContract.php
│  │        │  └─ WildcardPermissionNotProperlyFormatted.php
│  │        ├─ Guard.php
│  │        ├─ Middleware
│  │        │  ├─ PermissionMiddleware.php
│  │        │  ├─ RoleMiddleware.php
│  │        │  └─ RoleOrPermissionMiddleware.php
│  │        ├─ Models
│  │        │  ├─ Permission.php
│  │        │  └─ Role.php
│  │        ├─ PermissionRegistrar.php
│  │        ├─ PermissionServiceProvider.php
│  │        ├─ Traits
│  │        │  ├─ HasPermissions.php
│  │        │  ├─ HasRoles.php
│  │        │  └─ RefreshesPermissionCache.php
│  │        ├─ WildcardPermission.php
│  │        └─ helpers.php
│  ├─ staabm
│  │  └─ side-effects-detector
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ lib
│  │        ├─ SideEffect.php
│  │        ├─ SideEffectsDetector.php
│  │        └─ functionMetadata.php
│  ├─ stancl
│  │  ├─ jobpipeline
│  │  │  ├─ .php-cs-fixer.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ check
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ JobPipeline.php
│  │  ├─ tenancy
│  │  │  ├─ CONTRIBUTING.md
│  │  │  ├─ DONATIONS.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SUPPORT.md
│  │  │  ├─ assets
│  │  │  │  ├─ TenancyServiceProvider.stub.php
│  │  │  │  ├─ config.php
│  │  │  │  ├─ impersonation-migrations
│  │  │  │  │  └─ 2020_05_15_000010_create_tenant_user_impersonation_tokens_table.php
│  │  │  │  ├─ migrations
│  │  │  │  │  ├─ 2019_09_15_000010_create_tenants_table.php
│  │  │  │  │  └─ 2019_09_15_000020_create_domains_table.php
│  │  │  │  ├─ routes.php
│  │  │  │  └─ tenant_routes.stub.php
│  │  │  ├─ composer.json
│  │  │  ├─ docker-compose-m1.override.yml
│  │  │  └─ src
│  │  │     ├─ Bootstrappers
│  │  │     │  ├─ CacheTenancyBootstrapper.php
│  │  │     │  ├─ DatabaseTenancyBootstrapper.php
│  │  │     │  ├─ FilesystemTenancyBootstrapper.php
│  │  │     │  ├─ QueueTenancyBootstrapper.php
│  │  │     │  └─ RedisTenancyBootstrapper.php
│  │  │     ├─ CacheManager.php
│  │  │     ├─ Commands
│  │  │     │  ├─ Install.php
│  │  │     │  ├─ Migrate.php
│  │  │     │  ├─ MigrateFresh.php
│  │  │     │  ├─ Rollback.php
│  │  │     │  ├─ Run.php
│  │  │     │  ├─ Seed.php
│  │  │     │  └─ TenantList.php
│  │  │     ├─ Concerns
│  │  │     │  ├─ CreatesDatabaseUsers.php
│  │  │     │  ├─ DealsWithMigrations.php
│  │  │     │  ├─ ExtendsLaravelCommand.php
│  │  │     │  ├─ HasATenantArgument.php
│  │  │     │  ├─ HasATenantsOption.php
│  │  │     │  └─ TenantAwareCommand.php
│  │  │     ├─ Contracts
│  │  │     │  ├─ Domain.php
│  │  │     │  ├─ Feature.php
│  │  │     │  ├─ ManagesDatabaseUsers.php
│  │  │     │  ├─ SyncMaster.php
│  │  │     │  ├─ Syncable.php
│  │  │     │  ├─ TenancyBootstrapper.php
│  │  │     │  ├─ Tenant.php
│  │  │     │  ├─ TenantCannotBeCreatedException.php
│  │  │     │  ├─ TenantCouldNotBeIdentifiedException.php
│  │  │     │  ├─ TenantDatabaseManager.php
│  │  │     │  ├─ TenantResolver.php
│  │  │     │  ├─ TenantWithDatabase.php
│  │  │     │  └─ UniqueIdentifierGenerator.php
│  │  │     ├─ Controllers
│  │  │     │  └─ TenantAssetsController.php
│  │  │     ├─ Database
│  │  │     │  ├─ Concerns
│  │  │     │  │  ├─ BelongsToPrimaryModel.php
│  │  │     │  │  ├─ BelongsToTenant.php
│  │  │     │  │  ├─ CentralConnection.php
│  │  │     │  │  ├─ ConvertsDomainsToLowercase.php
│  │  │     │  │  ├─ EnsuresDomainIsNotOccupied.php
│  │  │     │  │  ├─ GeneratesIds.php
│  │  │     │  │  ├─ HasDataColumn.php
│  │  │     │  │  ├─ HasDatabase.php
│  │  │     │  │  ├─ HasDomains.php
│  │  │     │  │  ├─ HasInternalKeys.php
│  │  │     │  │  ├─ HasScopedValidationRules.php
│  │  │     │  │  ├─ InvalidatesResolverCache.php
│  │  │     │  │  ├─ InvalidatesTenantsResolverCache.php
│  │  │     │  │  ├─ MaintenanceMode.php
│  │  │     │  │  ├─ PrimaryDomain.php
│  │  │     │  │  ├─ ResourceSyncing.php
│  │  │     │  │  ├─ TenantConnection.php
│  │  │     │  │  └─ TenantRun.php
│  │  │     │  ├─ DatabaseManager.php
│  │  │     │  ├─ Models
│  │  │     │  │  ├─ Domain.php
│  │  │     │  │  ├─ ImpersonationToken.php
│  │  │     │  │  ├─ Tenant.php
│  │  │     │  │  └─ TenantPivot.php
│  │  │     │  ├─ ParentModelScope.php
│  │  │     │  ├─ TenantCollection.php
│  │  │     │  └─ TenantScope.php
│  │  │     ├─ DatabaseConfig.php
│  │  │     ├─ Events
│  │  │     │  ├─ BootstrappingTenancy.php
│  │  │     │  ├─ Contracts
│  │  │     │  │  ├─ DomainEvent.php
│  │  │     │  │  ├─ TenancyEvent.php
│  │  │     │  │  └─ TenantEvent.php
│  │  │     │  ├─ CreatingDatabase.php
│  │  │     │  ├─ CreatingDomain.php
│  │  │     │  ├─ CreatingTenant.php
│  │  │     │  ├─ DatabaseCreated.php
│  │  │     │  ├─ DatabaseDeleted.php
│  │  │     │  ├─ DatabaseMigrated.php
│  │  │     │  ├─ DatabaseRolledBack.php
│  │  │     │  ├─ DatabaseSeeded.php
│  │  │     │  ├─ DeletingDatabase.php
│  │  │     │  ├─ DeletingDomain.php
│  │  │     │  ├─ DeletingTenant.php
│  │  │     │  ├─ DomainCreated.php
│  │  │     │  ├─ DomainDeleted.php
│  │  │     │  ├─ DomainSaved.php
│  │  │     │  ├─ DomainUpdated.php
│  │  │     │  ├─ EndingTenancy.php
│  │  │     │  ├─ InitializingTenancy.php
│  │  │     │  ├─ MigratingDatabase.php
│  │  │     │  ├─ RevertedToCentralContext.php
│  │  │     │  ├─ RevertingToCentralContext.php
│  │  │     │  ├─ RollingBackDatabase.php
│  │  │     │  ├─ SavedDomain.php
│  │  │     │  ├─ SavedTenant.php
│  │  │     │  ├─ SavingDomain.php
│  │  │     │  ├─ SavingTenant.php
│  │  │     │  ├─ SeedingDatabase.php
│  │  │     │  ├─ SyncedResourceChangedInForeignDatabase.php
│  │  │     │  ├─ SyncedResourceSaved.php
│  │  │     │  ├─ TenancyBootstrapped.php
│  │  │     │  ├─ TenancyEnded.php
│  │  │     │  ├─ TenancyInitialized.php
│  │  │     │  ├─ TenantCreated.php
│  │  │     │  ├─ TenantDeleted.php
│  │  │     │  ├─ TenantSaved.php
│  │  │     │  ├─ TenantUpdated.php
│  │  │     │  ├─ UpdatingDomain.php
│  │  │     │  └─ UpdatingTenant.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ DatabaseManagerNotRegisteredException.php
│  │  │     │  ├─ DomainOccupiedByOtherTenantException.php
│  │  │     │  ├─ ModelNotSyncMasterException.php
│  │  │     │  ├─ NoConnectionSetException.php
│  │  │     │  ├─ NotASubdomainException.php
│  │  │     │  ├─ RouteIsMissingTenantParameterException.php
│  │  │     │  ├─ TenancyNotInitializedException.php
│  │  │     │  ├─ TenantCouldNotBeIdentifiedById.php
│  │  │     │  ├─ TenantCouldNotBeIdentifiedByPathException.php
│  │  │     │  ├─ TenantCouldNotBeIdentifiedByRequestDataException.php
│  │  │     │  ├─ TenantCouldNotBeIdentifiedOnDomainException.php
│  │  │     │  ├─ TenantDatabaseAlreadyExistsException.php
│  │  │     │  ├─ TenantDatabaseDoesNotExistException.php
│  │  │     │  └─ TenantDatabaseUserAlreadyExistsException.php
│  │  │     ├─ Facades
│  │  │     │  ├─ GlobalCache.php
│  │  │     │  └─ Tenancy.php
│  │  │     ├─ Features
│  │  │     │  ├─ CrossDomainRedirect.php
│  │  │     │  ├─ TelescopeTags.php
│  │  │     │  ├─ TenantConfig.php
│  │  │     │  ├─ UniversalRoutes.php
│  │  │     │  ├─ UserImpersonation.php
│  │  │     │  └─ ViteBundler.php
│  │  │     ├─ Jobs
│  │  │     │  ├─ CreateDatabase.php
│  │  │     │  ├─ DeleteDatabase.php
│  │  │     │  ├─ MigrateDatabase.php
│  │  │     │  └─ SeedDatabase.php
│  │  │     ├─ Listeners
│  │  │     │  ├─ BootstrapTenancy.php
│  │  │     │  ├─ CreateTenantConnection.php
│  │  │     │  ├─ QueueableListener.php
│  │  │     │  ├─ RevertToCentralContext.php
│  │  │     │  └─ UpdateSyncedResource.php
│  │  │     ├─ Middleware
│  │  │     │  ├─ CheckTenantForMaintenanceMode.php
│  │  │     │  ├─ IdentificationMiddleware.php
│  │  │     │  ├─ InitializeTenancyByDomain.php
│  │  │     │  ├─ InitializeTenancyByDomainOrSubdomain.php
│  │  │     │  ├─ InitializeTenancyByPath.php
│  │  │     │  ├─ InitializeTenancyByRequestData.php
│  │  │     │  ├─ InitializeTenancyBySubdomain.php
│  │  │     │  ├─ PreventAccessFromCentralDomains.php
│  │  │     │  └─ ScopeSessions.php
│  │  │     ├─ Resolvers
│  │  │     │  ├─ Contracts
│  │  │     │  │  └─ CachedTenantResolver.php
│  │  │     │  ├─ DomainTenantResolver.php
│  │  │     │  ├─ PathTenantResolver.php
│  │  │     │  └─ RequestDataTenantResolver.php
│  │  │     ├─ Tenancy.php
│  │  │     ├─ TenancyServiceProvider.php
│  │  │     ├─ TenantDatabaseManagers
│  │  │     │  ├─ MySQLDatabaseManager.php
│  │  │     │  ├─ PermissionControlledMySQLDatabaseManager.php
│  │  │     │  ├─ PostgreSQLDatabaseManager.php
│  │  │     │  ├─ PostgreSQLSchemaManager.php
│  │  │     │  └─ SQLiteDatabaseManager.php
│  │  │     ├─ UUIDGenerator.php
│  │  │     ├─ Vite.php
│  │  │     └─ helpers.php
│  │  └─ virtualcolumn
│  │     ├─ .php-cs-fixer.php
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ check
│  │     ├─ composer.json
│  │     ├─ phpunit.xml.bak
│  │     └─ src
│  │        └─ VirtualColumn.php
│  ├─ symfony
│  │  ├─ clock
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Clock.php
│  │  │  ├─ ClockAwareTrait.php
│  │  │  ├─ ClockInterface.php
│  │  │  ├─ DatePoint.php
│  │  │  ├─ LICENSE
│  │  │  ├─ MockClock.php
│  │  │  ├─ MonotonicClock.php
│  │  │  ├─ NativeClock.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ now.php
│  │  │  ├─ Test
│  │  │  │  └─ ClockSensitiveTrait.php
│  │  │  └─ composer.json
│  │  ├─ console
│  │  │  ├─ Application.php
│  │  │  ├─ Attribute
│  │  │  │  └─ AsCommand.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CI
│  │  │  │  └─ GithubActionReporter.php
│  │  │  ├─ Color.php
│  │  │  ├─ Command
│  │  │  │  ├─ Command.php
│  │  │  │  ├─ CompleteCommand.php
│  │  │  │  ├─ DumpCompletionCommand.php
│  │  │  │  ├─ HelpCommand.php
│  │  │  │  ├─ LazyCommand.php
│  │  │  │  ├─ ListCommand.php
│  │  │  │  ├─ LockableTrait.php
│  │  │  │  ├─ SignalableCommandInterface.php
│  │  │  │  └─ TraceableCommand.php
│  │  │  ├─ CommandLoader
│  │  │  │  ├─ CommandLoaderInterface.php
│  │  │  │  ├─ ContainerCommandLoader.php
│  │  │  │  └─ FactoryCommandLoader.php
│  │  │  ├─ Completion
│  │  │  │  ├─ CompletionInput.php
│  │  │  │  ├─ CompletionSuggestions.php
│  │  │  │  ├─ Output
│  │  │  │  │  ├─ BashCompletionOutput.php
│  │  │  │  │  ├─ CompletionOutputInterface.php
│  │  │  │  │  ├─ FishCompletionOutput.php
│  │  │  │  │  └─ ZshCompletionOutput.php
│  │  │  │  └─ Suggestion.php
│  │  │  ├─ ConsoleEvents.php
│  │  │  ├─ Cursor.php
│  │  │  ├─ DataCollector
│  │  │  │  └─ CommandDataCollector.php
│  │  │  ├─ Debug
│  │  │  │  └─ CliRequest.php
│  │  │  ├─ DependencyInjection
│  │  │  │  └─ AddConsoleCommandPass.php
│  │  │  ├─ Descriptor
│  │  │  │  ├─ ApplicationDescription.php
│  │  │  │  ├─ Descriptor.php
│  │  │  │  ├─ DescriptorInterface.php
│  │  │  │  ├─ JsonDescriptor.php
│  │  │  │  ├─ MarkdownDescriptor.php
│  │  │  │  ├─ ReStructuredTextDescriptor.php
│  │  │  │  ├─ TextDescriptor.php
│  │  │  │  └─ XmlDescriptor.php
│  │  │  ├─ Event
│  │  │  │  ├─ ConsoleAlarmEvent.php
│  │  │  │  ├─ ConsoleCommandEvent.php
│  │  │  │  ├─ ConsoleErrorEvent.php
│  │  │  │  ├─ ConsoleEvent.php
│  │  │  │  ├─ ConsoleSignalEvent.php
│  │  │  │  └─ ConsoleTerminateEvent.php
│  │  │  ├─ EventListener
│  │  │  │  └─ ErrorListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ CommandNotFoundException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidOptionException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MissingInputException.php
│  │  │  │  ├─ NamespaceNotFoundException.php
│  │  │  │  ├─ RunCommandFailedException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Formatter
│  │  │  │  ├─ NullOutputFormatter.php
│  │  │  │  ├─ NullOutputFormatterStyle.php
│  │  │  │  ├─ OutputFormatter.php
│  │  │  │  ├─ OutputFormatterInterface.php
│  │  │  │  ├─ OutputFormatterStyle.php
│  │  │  │  ├─ OutputFormatterStyleInterface.php
│  │  │  │  ├─ OutputFormatterStyleStack.php
│  │  │  │  └─ WrappableOutputFormatterInterface.php
│  │  │  ├─ Helper
│  │  │  │  ├─ DebugFormatterHelper.php
│  │  │  │  ├─ DescriptorHelper.php
│  │  │  │  ├─ Dumper.php
│  │  │  │  ├─ FormatterHelper.php
│  │  │  │  ├─ Helper.php
│  │  │  │  ├─ HelperInterface.php
│  │  │  │  ├─ HelperSet.php
│  │  │  │  ├─ InputAwareHelper.php
│  │  │  │  ├─ OutputWrapper.php
│  │  │  │  ├─ ProcessHelper.php
│  │  │  │  ├─ ProgressBar.php
│  │  │  │  ├─ ProgressIndicator.php
│  │  │  │  ├─ QuestionHelper.php
│  │  │  │  ├─ SymfonyQuestionHelper.php
│  │  │  │  ├─ Table.php
│  │  │  │  ├─ TableCell.php
│  │  │  │  ├─ TableCellStyle.php
│  │  │  │  ├─ TableRows.php
│  │  │  │  ├─ TableSeparator.php
│  │  │  │  └─ TableStyle.php
│  │  │  ├─ Input
│  │  │  │  ├─ ArgvInput.php
│  │  │  │  ├─ ArrayInput.php
│  │  │  │  ├─ Input.php
│  │  │  │  ├─ InputArgument.php
│  │  │  │  ├─ InputAwareInterface.php
│  │  │  │  ├─ InputDefinition.php
│  │  │  │  ├─ InputInterface.php
│  │  │  │  ├─ InputOption.php
│  │  │  │  ├─ StreamableInputInterface.php
│  │  │  │  └─ StringInput.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Logger
│  │  │  │  └─ ConsoleLogger.php
│  │  │  ├─ Messenger
│  │  │  │  ├─ RunCommandContext.php
│  │  │  │  ├─ RunCommandMessage.php
│  │  │  │  └─ RunCommandMessageHandler.php
│  │  │  ├─ Output
│  │  │  │  ├─ AnsiColorMode.php
│  │  │  │  ├─ BufferedOutput.php
│  │  │  │  ├─ ConsoleOutput.php
│  │  │  │  ├─ ConsoleOutputInterface.php
│  │  │  │  ├─ ConsoleSectionOutput.php
│  │  │  │  ├─ NullOutput.php
│  │  │  │  ├─ Output.php
│  │  │  │  ├─ OutputInterface.php
│  │  │  │  ├─ StreamOutput.php
│  │  │  │  └─ TrimmedBufferOutput.php
│  │  │  ├─ Question
│  │  │  │  ├─ ChoiceQuestion.php
│  │  │  │  ├─ ConfirmationQuestion.php
│  │  │  │  └─ Question.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ hiddeninput.exe
│  │  │  │  ├─ completion.bash
│  │  │  │  ├─ completion.fish
│  │  │  │  └─ completion.zsh
│  │  │  ├─ SignalRegistry
│  │  │  │  ├─ SignalMap.php
│  │  │  │  └─ SignalRegistry.php
│  │  │  ├─ SingleCommandApplication.php
│  │  │  ├─ Style
│  │  │  │  ├─ OutputStyle.php
│  │  │  │  ├─ StyleInterface.php
│  │  │  │  └─ SymfonyStyle.php
│  │  │  ├─ Terminal.php
│  │  │  ├─ Tester
│  │  │  │  ├─ ApplicationTester.php
│  │  │  │  ├─ CommandCompletionTester.php
│  │  │  │  ├─ CommandTester.php
│  │  │  │  ├─ Constraint
│  │  │  │  │  └─ CommandIsSuccessful.php
│  │  │  │  └─ TesterTrait.php
│  │  │  └─ composer.json
│  │  ├─ css-selector
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CssSelectorConverter.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ ExpressionErrorException.php
│  │  │  │  ├─ InternalErrorException.php
│  │  │  │  ├─ ParseException.php
│  │  │  │  └─ SyntaxErrorException.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Node
│  │  │  │  ├─ AbstractNode.php
│  │  │  │  ├─ AttributeNode.php
│  │  │  │  ├─ ClassNode.php
│  │  │  │  ├─ CombinedSelectorNode.php
│  │  │  │  ├─ ElementNode.php
│  │  │  │  ├─ FunctionNode.php
│  │  │  │  ├─ HashNode.php
│  │  │  │  ├─ MatchingNode.php
│  │  │  │  ├─ NegationNode.php
│  │  │  │  ├─ NodeInterface.php
│  │  │  │  ├─ PseudoNode.php
│  │  │  │  ├─ SelectorNode.php
│  │  │  │  ├─ Specificity.php
│  │  │  │  └─ SpecificityAdjustmentNode.php
│  │  │  ├─ Parser
│  │  │  │  ├─ Handler
│  │  │  │  │  ├─ CommentHandler.php
│  │  │  │  │  ├─ HandlerInterface.php
│  │  │  │  │  ├─ HashHandler.php
│  │  │  │  │  ├─ IdentifierHandler.php
│  │  │  │  │  ├─ NumberHandler.php
│  │  │  │  │  ├─ StringHandler.php
│  │  │  │  │  └─ WhitespaceHandler.php
│  │  │  │  ├─ Parser.php
│  │  │  │  ├─ ParserInterface.php
│  │  │  │  ├─ Reader.php
│  │  │  │  ├─ Shortcut
│  │  │  │  │  ├─ ClassParser.php
│  │  │  │  │  ├─ ElementParser.php
│  │  │  │  │  ├─ EmptyStringParser.php
│  │  │  │  │  └─ HashParser.php
│  │  │  │  ├─ Token.php
│  │  │  │  ├─ TokenStream.php
│  │  │  │  └─ Tokenizer
│  │  │  │     ├─ Tokenizer.php
│  │  │  │     ├─ TokenizerEscaping.php
│  │  │  │     └─ TokenizerPatterns.php
│  │  │  ├─ README.md
│  │  │  ├─ XPath
│  │  │  │  ├─ Extension
│  │  │  │  │  ├─ AbstractExtension.php
│  │  │  │  │  ├─ AttributeMatchingExtension.php
│  │  │  │  │  ├─ CombinationExtension.php
│  │  │  │  │  ├─ ExtensionInterface.php
│  │  │  │  │  ├─ FunctionExtension.php
│  │  │  │  │  ├─ HtmlExtension.php
│  │  │  │  │  ├─ NodeExtension.php
│  │  │  │  │  └─ PseudoClassExtension.php
│  │  │  │  ├─ Translator.php
│  │  │  │  ├─ TranslatorInterface.php
│  │  │  │  └─ XPathExpr.php
│  │  │  └─ composer.json
│  │  ├─ deprecation-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ function.php
│  │  ├─ error-handler
│  │  │  ├─ BufferingLogger.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Debug.php
│  │  │  ├─ DebugClassLoader.php
│  │  │  ├─ Error
│  │  │  │  ├─ ClassNotFoundError.php
│  │  │  │  ├─ FatalError.php
│  │  │  │  ├─ OutOfMemoryError.php
│  │  │  │  ├─ UndefinedFunctionError.php
│  │  │  │  └─ UndefinedMethodError.php
│  │  │  ├─ ErrorEnhancer
│  │  │  │  ├─ ClassNotFoundErrorEnhancer.php
│  │  │  │  ├─ ErrorEnhancerInterface.php
│  │  │  │  ├─ UndefinedFunctionErrorEnhancer.php
│  │  │  │  └─ UndefinedMethodErrorEnhancer.php
│  │  │  ├─ ErrorHandler.php
│  │  │  ├─ ErrorRenderer
│  │  │  │  ├─ CliErrorRenderer.php
│  │  │  │  ├─ ErrorRendererInterface.php
│  │  │  │  ├─ FileLinkFormatter.php
│  │  │  │  ├─ HtmlErrorRenderer.php
│  │  │  │  └─ SerializerErrorRenderer.php
│  │  │  ├─ Exception
│  │  │  │  ├─ FlattenException.php
│  │  │  │  └─ SilencedErrorContext.php
│  │  │  ├─ Internal
│  │  │  │  └─ TentativeTypes.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ assets
│  │  │  │  │  ├─ css
│  │  │  │  │  │  ├─ error.css
│  │  │  │  │  │  ├─ exception.css
│  │  │  │  │  │  └─ exception_full.css
│  │  │  │  │  ├─ images
│  │  │  │  │  │  ├─ chevron-right.svg
│  │  │  │  │  │  ├─ favicon.png.base64
│  │  │  │  │  │  ├─ icon-book.svg
│  │  │  │  │  │  ├─ icon-minus-square-o.svg
│  │  │  │  │  │  ├─ icon-minus-square.svg
│  │  │  │  │  │  ├─ icon-plus-square-o.svg
│  │  │  │  │  │  ├─ icon-plus-square.svg
│  │  │  │  │  │  ├─ icon-support.svg
│  │  │  │  │  │  ├─ symfony-ghost.svg.php
│  │  │  │  │  │  └─ symfony-logo.svg
│  │  │  │  │  └─ js
│  │  │  │  │     └─ exception.js
│  │  │  │  ├─ bin
│  │  │  │  │  ├─ extract-tentative-return-types.php
│  │  │  │  │  └─ patch-type-declarations
│  │  │  │  └─ views
│  │  │  │     ├─ error.html.php
│  │  │  │     ├─ exception.html.php
│  │  │  │     ├─ exception_full.html.php
│  │  │  │     ├─ logs.html.php
│  │  │  │     ├─ trace.html.php
│  │  │  │     ├─ traces.html.php
│  │  │  │     └─ traces_text.html.php
│  │  │  ├─ ThrowableUtils.php
│  │  │  └─ composer.json
│  │  ├─ event-dispatcher
│  │  │  ├─ Attribute
│  │  │  │  └─ AsEventListener.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Debug
│  │  │  │  ├─ TraceableEventDispatcher.php
│  │  │  │  └─ WrappedListener.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddEventAliasesPass.php
│  │  │  │  └─ RegisterListenersPass.php
│  │  │  ├─ EventDispatcher.php
│  │  │  ├─ EventDispatcherInterface.php
│  │  │  ├─ EventSubscriberInterface.php
│  │  │  ├─ GenericEvent.php
│  │  │  ├─ ImmutableEventDispatcher.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ composer.json
│  │  ├─ event-dispatcher-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Event.php
│  │  │  ├─ EventDispatcherInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ composer.json
│  │  ├─ finder
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Comparator
│  │  │  │  ├─ Comparator.php
│  │  │  │  ├─ DateComparator.php
│  │  │  │  └─ NumberComparator.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AccessDeniedException.php
│  │  │  │  └─ DirectoryNotFoundException.php
│  │  │  ├─ Finder.php
│  │  │  ├─ Gitignore.php
│  │  │  ├─ Glob.php
│  │  │  ├─ Iterator
│  │  │  │  ├─ CustomFilterIterator.php
│  │  │  │  ├─ DateRangeFilterIterator.php
│  │  │  │  ├─ DepthRangeFilterIterator.php
│  │  │  │  ├─ ExcludeDirectoryFilterIterator.php
│  │  │  │  ├─ FileTypeFilterIterator.php
│  │  │  │  ├─ FilecontentFilterIterator.php
│  │  │  │  ├─ FilenameFilterIterator.php
│  │  │  │  ├─ LazyIterator.php
│  │  │  │  ├─ MultiplePcreFilterIterator.php
│  │  │  │  ├─ PathFilterIterator.php
│  │  │  │  ├─ RecursiveDirectoryIterator.php
│  │  │  │  ├─ SizeRangeFilterIterator.php
│  │  │  │  ├─ SortableIterator.php
│  │  │  │  └─ VcsIgnoredFilterIterator.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SplFileInfo.php
│  │  │  └─ composer.json
│  │  ├─ http-foundation
│  │  │  ├─ AcceptHeader.php
│  │  │  ├─ AcceptHeaderItem.php
│  │  │  ├─ BinaryFileResponse.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ ChainRequestMatcher.php
│  │  │  ├─ Cookie.php
│  │  │  ├─ Exception
│  │  │  │  ├─ BadRequestException.php
│  │  │  │  ├─ ConflictingHeadersException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ JsonException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RequestExceptionInterface.php
│  │  │  │  ├─ SessionNotFoundException.php
│  │  │  │  ├─ SuspiciousOperationException.php
│  │  │  │  └─ UnexpectedValueException.php
│  │  │  ├─ File
│  │  │  │  ├─ Exception
│  │  │  │  │  ├─ AccessDeniedException.php
│  │  │  │  │  ├─ CannotWriteFileException.php
│  │  │  │  │  ├─ ExtensionFileException.php
│  │  │  │  │  ├─ FileException.php
│  │  │  │  │  ├─ FileNotFoundException.php
│  │  │  │  │  ├─ FormSizeFileException.php
│  │  │  │  │  ├─ IniSizeFileException.php
│  │  │  │  │  ├─ NoFileException.php
│  │  │  │  │  ├─ NoTmpDirFileException.php
│  │  │  │  │  ├─ PartialFileException.php
│  │  │  │  │  ├─ UnexpectedTypeException.php
│  │  │  │  │  └─ UploadException.php
│  │  │  │  ├─ File.php
│  │  │  │  ├─ Stream.php
│  │  │  │  └─ UploadedFile.php
│  │  │  ├─ FileBag.php
│  │  │  ├─ HeaderBag.php
│  │  │  ├─ HeaderUtils.php
│  │  │  ├─ InputBag.php
│  │  │  ├─ IpUtils.php
│  │  │  ├─ JsonResponse.php
│  │  │  ├─ LICENSE
│  │  │  ├─ ParameterBag.php
│  │  │  ├─ README.md
│  │  │  ├─ RateLimiter
│  │  │  │  ├─ AbstractRequestRateLimiter.php
│  │  │  │  ├─ PeekableRequestRateLimiterInterface.php
│  │  │  │  └─ RequestRateLimiterInterface.php
│  │  │  ├─ RedirectResponse.php
│  │  │  ├─ Request.php
│  │  │  ├─ RequestMatcher
│  │  │  │  ├─ AttributesRequestMatcher.php
│  │  │  │  ├─ ExpressionRequestMatcher.php
│  │  │  │  ├─ HeaderRequestMatcher.php
│  │  │  │  ├─ HostRequestMatcher.php
│  │  │  │  ├─ IpsRequestMatcher.php
│  │  │  │  ├─ IsJsonRequestMatcher.php
│  │  │  │  ├─ MethodRequestMatcher.php
│  │  │  │  ├─ PathRequestMatcher.php
│  │  │  │  ├─ PortRequestMatcher.php
│  │  │  │  ├─ QueryParameterRequestMatcher.php
│  │  │  │  └─ SchemeRequestMatcher.php
│  │  │  ├─ RequestMatcherInterface.php
│  │  │  ├─ RequestStack.php
│  │  │  ├─ Response.php
│  │  │  ├─ ResponseHeaderBag.php
│  │  │  ├─ ServerBag.php
│  │  │  ├─ Session
│  │  │  │  ├─ Attribute
│  │  │  │  │  ├─ AttributeBag.php
│  │  │  │  │  └─ AttributeBagInterface.php
│  │  │  │  ├─ Flash
│  │  │  │  │  ├─ AutoExpireFlashBag.php
│  │  │  │  │  ├─ FlashBag.php
│  │  │  │  │  └─ FlashBagInterface.php
│  │  │  │  ├─ FlashBagAwareSessionInterface.php
│  │  │  │  ├─ Session.php
│  │  │  │  ├─ SessionBagInterface.php
│  │  │  │  ├─ SessionBagProxy.php
│  │  │  │  ├─ SessionFactory.php
│  │  │  │  ├─ SessionFactoryInterface.php
│  │  │  │  ├─ SessionInterface.php
│  │  │  │  ├─ SessionUtils.php
│  │  │  │  └─ Storage
│  │  │  │     ├─ Handler
│  │  │  │     │  ├─ AbstractSessionHandler.php
│  │  │  │     │  ├─ IdentityMarshaller.php
│  │  │  │     │  ├─ MarshallingSessionHandler.php
│  │  │  │     │  ├─ MemcachedSessionHandler.php
│  │  │  │     │  ├─ MigratingSessionHandler.php
│  │  │  │     │  ├─ MongoDbSessionHandler.php
│  │  │  │     │  ├─ NativeFileSessionHandler.php
│  │  │  │     │  ├─ NullSessionHandler.php
│  │  │  │     │  ├─ PdoSessionHandler.php
│  │  │  │     │  ├─ RedisSessionHandler.php
│  │  │  │     │  ├─ SessionHandlerFactory.php
│  │  │  │     │  └─ StrictSessionHandler.php
│  │  │  │     ├─ MetadataBag.php
│  │  │  │     ├─ MockArraySessionStorage.php
│  │  │  │     ├─ MockFileSessionStorage.php
│  │  │  │     ├─ MockFileSessionStorageFactory.php
│  │  │  │     ├─ NativeSessionStorage.php
│  │  │  │     ├─ NativeSessionStorageFactory.php
│  │  │  │     ├─ PhpBridgeSessionStorage.php
│  │  │  │     ├─ PhpBridgeSessionStorageFactory.php
│  │  │  │     ├─ Proxy
│  │  │  │     │  ├─ AbstractProxy.php
│  │  │  │     │  └─ SessionHandlerProxy.php
│  │  │  │     ├─ SessionStorageFactoryInterface.php
│  │  │  │     └─ SessionStorageInterface.php
│  │  │  ├─ StreamedJsonResponse.php
│  │  │  ├─ StreamedResponse.php
│  │  │  ├─ Test
│  │  │  │  └─ Constraint
│  │  │  │     ├─ RequestAttributeValueSame.php
│  │  │  │     ├─ ResponseCookieValueSame.php
│  │  │  │     ├─ ResponseFormatSame.php
│  │  │  │     ├─ ResponseHasCookie.php
│  │  │  │     ├─ ResponseHasHeader.php
│  │  │  │     ├─ ResponseHeaderLocationSame.php
│  │  │  │     ├─ ResponseHeaderSame.php
│  │  │  │     ├─ ResponseIsRedirected.php
│  │  │  │     ├─ ResponseIsSuccessful.php
│  │  │  │     ├─ ResponseIsUnprocessable.php
│  │  │  │     └─ ResponseStatusCodeSame.php
│  │  │  ├─ UriSigner.php
│  │  │  ├─ UrlHelper.php
│  │  │  └─ composer.json
│  │  ├─ http-kernel
│  │  │  ├─ Attribute
│  │  │  │  ├─ AsController.php
│  │  │  │  ├─ AsTargetedValueResolver.php
│  │  │  │  ├─ Cache.php
│  │  │  │  ├─ MapDateTime.php
│  │  │  │  ├─ MapQueryParameter.php
│  │  │  │  ├─ MapQueryString.php
│  │  │  │  ├─ MapRequestPayload.php
│  │  │  │  ├─ MapUploadedFile.php
│  │  │  │  ├─ ValueResolver.php
│  │  │  │  ├─ WithHttpStatus.php
│  │  │  │  └─ WithLogLevel.php
│  │  │  ├─ Bundle
│  │  │  │  ├─ AbstractBundle.php
│  │  │  │  ├─ Bundle.php
│  │  │  │  ├─ BundleExtension.php
│  │  │  │  └─ BundleInterface.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CacheClearer
│  │  │  │  ├─ CacheClearerInterface.php
│  │  │  │  ├─ ChainCacheClearer.php
│  │  │  │  └─ Psr6CacheClearer.php
│  │  │  ├─ CacheWarmer
│  │  │  │  ├─ CacheWarmer.php
│  │  │  │  ├─ CacheWarmerAggregate.php
│  │  │  │  ├─ CacheWarmerInterface.php
│  │  │  │  └─ WarmableInterface.php
│  │  │  ├─ Config
│  │  │  │  └─ FileLocator.php
│  │  │  ├─ Controller
│  │  │  │  ├─ ArgumentResolver
│  │  │  │  │  ├─ BackedEnumValueResolver.php
│  │  │  │  │  ├─ DateTimeValueResolver.php
│  │  │  │  │  ├─ DefaultValueResolver.php
│  │  │  │  │  ├─ NotTaggedControllerValueResolver.php
│  │  │  │  │  ├─ QueryParameterValueResolver.php
│  │  │  │  │  ├─ RequestAttributeValueResolver.php
│  │  │  │  │  ├─ RequestPayloadValueResolver.php
│  │  │  │  │  ├─ RequestValueResolver.php
│  │  │  │  │  ├─ ServiceValueResolver.php
│  │  │  │  │  ├─ SessionValueResolver.php
│  │  │  │  │  ├─ TraceableValueResolver.php
│  │  │  │  │  ├─ UidValueResolver.php
│  │  │  │  │  └─ VariadicValueResolver.php
│  │  │  │  ├─ ArgumentResolver.php
│  │  │  │  ├─ ArgumentResolverInterface.php
│  │  │  │  ├─ ContainerControllerResolver.php
│  │  │  │  ├─ ControllerReference.php
│  │  │  │  ├─ ControllerResolver.php
│  │  │  │  ├─ ControllerResolverInterface.php
│  │  │  │  ├─ ErrorController.php
│  │  │  │  ├─ TraceableArgumentResolver.php
│  │  │  │  ├─ TraceableControllerResolver.php
│  │  │  │  └─ ValueResolverInterface.php
│  │  │  ├─ ControllerMetadata
│  │  │  │  ├─ ArgumentMetadata.php
│  │  │  │  ├─ ArgumentMetadataFactory.php
│  │  │  │  └─ ArgumentMetadataFactoryInterface.php
│  │  │  ├─ DataCollector
│  │  │  │  ├─ AjaxDataCollector.php
│  │  │  │  ├─ ConfigDataCollector.php
│  │  │  │  ├─ DataCollector.php
│  │  │  │  ├─ DataCollectorInterface.php
│  │  │  │  ├─ DumpDataCollector.php
│  │  │  │  ├─ EventDataCollector.php
│  │  │  │  ├─ ExceptionDataCollector.php
│  │  │  │  ├─ LateDataCollectorInterface.php
│  │  │  │  ├─ LoggerDataCollector.php
│  │  │  │  ├─ MemoryDataCollector.php
│  │  │  │  ├─ RequestDataCollector.php
│  │  │  │  ├─ RouterDataCollector.php
│  │  │  │  └─ TimeDataCollector.php
│  │  │  ├─ Debug
│  │  │  │  ├─ ErrorHandlerConfigurator.php
│  │  │  │  ├─ TraceableEventDispatcher.php
│  │  │  │  └─ VirtualRequestStack.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddAnnotatedClassesToCachePass.php
│  │  │  │  ├─ ConfigurableExtension.php
│  │  │  │  ├─ ControllerArgumentValueResolverPass.php
│  │  │  │  ├─ Extension.php
│  │  │  │  ├─ FragmentRendererPass.php
│  │  │  │  ├─ LazyLoadingFragmentHandler.php
│  │  │  │  ├─ LoggerPass.php
│  │  │  │  ├─ MergeExtensionConfigurationPass.php
│  │  │  │  ├─ RegisterControllerArgumentLocatorsPass.php
│  │  │  │  ├─ RegisterLocaleAwareServicesPass.php
│  │  │  │  ├─ RemoveEmptyControllerArgumentLocatorsPass.php
│  │  │  │  ├─ ResettableServicePass.php
│  │  │  │  └─ ServicesResetter.php
│  │  │  ├─ Event
│  │  │  │  ├─ ControllerArgumentsEvent.php
│  │  │  │  ├─ ControllerEvent.php
│  │  │  │  ├─ ExceptionEvent.php
│  │  │  │  ├─ FinishRequestEvent.php
│  │  │  │  ├─ KernelEvent.php
│  │  │  │  ├─ RequestEvent.php
│  │  │  │  ├─ ResponseEvent.php
│  │  │  │  ├─ TerminateEvent.php
│  │  │  │  └─ ViewEvent.php
│  │  │  ├─ EventListener
│  │  │  │  ├─ AbstractSessionListener.php
│  │  │  │  ├─ AddRequestFormatsListener.php
│  │  │  │  ├─ CacheAttributeListener.php
│  │  │  │  ├─ DebugHandlersListener.php
│  │  │  │  ├─ DisallowRobotsIndexingListener.php
│  │  │  │  ├─ DumpListener.php
│  │  │  │  ├─ ErrorListener.php
│  │  │  │  ├─ FragmentListener.php
│  │  │  │  ├─ LocaleAwareListener.php
│  │  │  │  ├─ LocaleListener.php
│  │  │  │  ├─ ProfilerListener.php
│  │  │  │  ├─ ResponseListener.php
│  │  │  │  ├─ RouterListener.php
│  │  │  │  ├─ SessionListener.php
│  │  │  │  ├─ SurrogateListener.php
│  │  │  │  └─ ValidateRequestListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AccessDeniedHttpException.php
│  │  │  │  ├─ BadRequestHttpException.php
│  │  │  │  ├─ ConflictHttpException.php
│  │  │  │  ├─ ControllerDoesNotReturnResponseException.php
│  │  │  │  ├─ GoneHttpException.php
│  │  │  │  ├─ HttpException.php
│  │  │  │  ├─ HttpExceptionInterface.php
│  │  │  │  ├─ InvalidMetadataException.php
│  │  │  │  ├─ LengthRequiredHttpException.php
│  │  │  │  ├─ LockedHttpException.php
│  │  │  │  ├─ MethodNotAllowedHttpException.php
│  │  │  │  ├─ NearMissValueResolverException.php
│  │  │  │  ├─ NotAcceptableHttpException.php
│  │  │  │  ├─ NotFoundHttpException.php
│  │  │  │  ├─ PreconditionFailedHttpException.php
│  │  │  │  ├─ PreconditionRequiredHttpException.php
│  │  │  │  ├─ ResolverNotFoundException.php
│  │  │  │  ├─ ServiceUnavailableHttpException.php
│  │  │  │  ├─ TooManyRequestsHttpException.php
│  │  │  │  ├─ UnauthorizedHttpException.php
│  │  │  │  ├─ UnexpectedSessionUsageException.php
│  │  │  │  ├─ UnprocessableEntityHttpException.php
│  │  │  │  └─ UnsupportedMediaTypeHttpException.php
│  │  │  ├─ Fragment
│  │  │  │  ├─ AbstractSurrogateFragmentRenderer.php
│  │  │  │  ├─ EsiFragmentRenderer.php
│  │  │  │  ├─ FragmentHandler.php
│  │  │  │  ├─ FragmentRendererInterface.php
│  │  │  │  ├─ FragmentUriGenerator.php
│  │  │  │  ├─ FragmentUriGeneratorInterface.php
│  │  │  │  ├─ HIncludeFragmentRenderer.php
│  │  │  │  ├─ InlineFragmentRenderer.php
│  │  │  │  ├─ RoutableFragmentRenderer.php
│  │  │  │  └─ SsiFragmentRenderer.php
│  │  │  ├─ HttpCache
│  │  │  │  ├─ AbstractSurrogate.php
│  │  │  │  ├─ Esi.php
│  │  │  │  ├─ HttpCache.php
│  │  │  │  ├─ ResponseCacheStrategy.php
│  │  │  │  ├─ ResponseCacheStrategyInterface.php
│  │  │  │  ├─ Ssi.php
│  │  │  │  ├─ Store.php
│  │  │  │  ├─ StoreInterface.php
│  │  │  │  ├─ SubRequestHandler.php
│  │  │  │  └─ SurrogateInterface.php
│  │  │  ├─ HttpClientKernel.php
│  │  │  ├─ HttpKernel.php
│  │  │  ├─ HttpKernelBrowser.php
│  │  │  ├─ HttpKernelInterface.php
│  │  │  ├─ Kernel.php
│  │  │  ├─ KernelEvents.php
│  │  │  ├─ KernelInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Log
│  │  │  │  ├─ DebugLoggerConfigurator.php
│  │  │  │  ├─ DebugLoggerInterface.php
│  │  │  │  └─ Logger.php
│  │  │  ├─ Profiler
│  │  │  │  ├─ FileProfilerStorage.php
│  │  │  │  ├─ Profile.php
│  │  │  │  ├─ Profiler.php
│  │  │  │  └─ ProfilerStorageInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ RebootableInterface.php
│  │  │  ├─ Resources
│  │  │  │  └─ welcome.html.php
│  │  │  ├─ TerminableInterface.php
│  │  │  └─ composer.json
│  │  ├─ mailer
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  └─ MailerTestCommand.php
│  │  │  ├─ DataCollector
│  │  │  │  └─ MessageDataCollector.php
│  │  │  ├─ DelayedEnvelope.php
│  │  │  ├─ Envelope.php
│  │  │  ├─ Event
│  │  │  │  ├─ FailedMessageEvent.php
│  │  │  │  ├─ MessageEvent.php
│  │  │  │  ├─ MessageEvents.php
│  │  │  │  └─ SentMessageEvent.php
│  │  │  ├─ EventListener
│  │  │  │  ├─ EnvelopeListener.php
│  │  │  │  ├─ MessageListener.php
│  │  │  │  ├─ MessageLoggerListener.php
│  │  │  │  └─ MessengerTransportListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ HttpTransportException.php
│  │  │  │  ├─ IncompleteDsnException.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RuntimeException.php
│  │  │  │  ├─ TransportException.php
│  │  │  │  ├─ TransportExceptionInterface.php
│  │  │  │  ├─ UnexpectedResponseException.php
│  │  │  │  └─ UnsupportedSchemeException.php
│  │  │  ├─ Header
│  │  │  │  ├─ MetadataHeader.php
│  │  │  │  └─ TagHeader.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Mailer.php
│  │  │  ├─ MailerInterface.php
│  │  │  ├─ Messenger
│  │  │  │  ├─ MessageHandler.php
│  │  │  │  └─ SendEmailMessage.php
│  │  │  ├─ README.md
│  │  │  ├─ SentMessage.php
│  │  │  ├─ Test
│  │  │  │  ├─ AbstractTransportFactoryTestCase.php
│  │  │  │  ├─ Constraint
│  │  │  │  │  ├─ EmailCount.php
│  │  │  │  │  └─ EmailIsQueued.php
│  │  │  │  ├─ IncompleteDsnTestTrait.php
│  │  │  │  └─ TransportFactoryTestCase.php
│  │  │  ├─ Transport
│  │  │  │  ├─ AbstractApiTransport.php
│  │  │  │  ├─ AbstractHttpTransport.php
│  │  │  │  ├─ AbstractTransport.php
│  │  │  │  ├─ AbstractTransportFactory.php
│  │  │  │  ├─ Dsn.php
│  │  │  │  ├─ FailoverTransport.php
│  │  │  │  ├─ NativeTransportFactory.php
│  │  │  │  ├─ NullTransport.php
│  │  │  │  ├─ NullTransportFactory.php
│  │  │  │  ├─ RoundRobinTransport.php
│  │  │  │  ├─ SendmailTransport.php
│  │  │  │  ├─ SendmailTransportFactory.php
│  │  │  │  ├─ Smtp
│  │  │  │  │  ├─ Auth
│  │  │  │  │  │  ├─ AuthenticatorInterface.php
│  │  │  │  │  │  ├─ CramMd5Authenticator.php
│  │  │  │  │  │  ├─ LoginAuthenticator.php
│  │  │  │  │  │  ├─ PlainAuthenticator.php
│  │  │  │  │  │  └─ XOAuth2Authenticator.php
│  │  │  │  │  ├─ EsmtpTransport.php
│  │  │  │  │  ├─ EsmtpTransportFactory.php
│  │  │  │  │  ├─ SmtpTransport.php
│  │  │  │  │  └─ Stream
│  │  │  │  │     ├─ AbstractStream.php
│  │  │  │  │     ├─ ProcessStream.php
│  │  │  │  │     └─ SocketStream.php
│  │  │  │  ├─ TransportFactoryInterface.php
│  │  │  │  ├─ TransportInterface.php
│  │  │  │  └─ Transports.php
│  │  │  ├─ Transport.php
│  │  │  └─ composer.json
│  │  ├─ mime
│  │  │  ├─ Address.php
│  │  │  ├─ BodyRendererInterface.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CharacterStream.php
│  │  │  ├─ Crypto
│  │  │  │  ├─ DkimOptions.php
│  │  │  │  ├─ DkimSigner.php
│  │  │  │  ├─ SMime.php
│  │  │  │  ├─ SMimeEncrypter.php
│  │  │  │  └─ SMimeSigner.php
│  │  │  ├─ DependencyInjection
│  │  │  │  └─ AddMimeTypeGuesserPass.php
│  │  │  ├─ DraftEmail.php
│  │  │  ├─ Email.php
│  │  │  ├─ Encoder
│  │  │  │  ├─ AddressEncoderInterface.php
│  │  │  │  ├─ Base64ContentEncoder.php
│  │  │  │  ├─ Base64Encoder.php
│  │  │  │  ├─ Base64MimeHeaderEncoder.php
│  │  │  │  ├─ ContentEncoderInterface.php
│  │  │  │  ├─ EightBitContentEncoder.php
│  │  │  │  ├─ EncoderInterface.php
│  │  │  │  ├─ IdnAddressEncoder.php
│  │  │  │  ├─ MimeHeaderEncoderInterface.php
│  │  │  │  ├─ QpContentEncoder.php
│  │  │  │  ├─ QpEncoder.php
│  │  │  │  ├─ QpMimeHeaderEncoder.php
│  │  │  │  └─ Rfc2231Encoder.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AddressEncoderException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RfcComplianceException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ FileBinaryMimeTypeGuesser.php
│  │  │  ├─ FileinfoMimeTypeGuesser.php
│  │  │  ├─ Header
│  │  │  │  ├─ AbstractHeader.php
│  │  │  │  ├─ DateHeader.php
│  │  │  │  ├─ HeaderInterface.php
│  │  │  │  ├─ Headers.php
│  │  │  │  ├─ IdentificationHeader.php
│  │  │  │  ├─ MailboxHeader.php
│  │  │  │  ├─ MailboxListHeader.php
│  │  │  │  ├─ ParameterizedHeader.php
│  │  │  │  ├─ PathHeader.php
│  │  │  │  └─ UnstructuredHeader.php
│  │  │  ├─ HtmlToTextConverter
│  │  │  │  ├─ DefaultHtmlToTextConverter.php
│  │  │  │  ├─ HtmlToTextConverterInterface.php
│  │  │  │  └─ LeagueHtmlToMarkdownConverter.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Message.php
│  │  │  ├─ MessageConverter.php
│  │  │  ├─ MimeTypeGuesserInterface.php
│  │  │  ├─ MimeTypes.php
│  │  │  ├─ MimeTypesInterface.php
│  │  │  ├─ Part
│  │  │  │  ├─ AbstractMultipartPart.php
│  │  │  │  ├─ AbstractPart.php
│  │  │  │  ├─ DataPart.php
│  │  │  │  ├─ File.php
│  │  │  │  ├─ MessagePart.php
│  │  │  │  ├─ Multipart
│  │  │  │  │  ├─ AlternativePart.php
│  │  │  │  │  ├─ DigestPart.php
│  │  │  │  │  ├─ FormDataPart.php
│  │  │  │  │  ├─ MixedPart.php
│  │  │  │  │  └─ RelatedPart.php
│  │  │  │  ├─ SMimePart.php
│  │  │  │  └─ TextPart.php
│  │  │  ├─ README.md
│  │  │  ├─ RawMessage.php
│  │  │  ├─ Resources
│  │  │  │  └─ bin
│  │  │  ├─ Test
│  │  │  │  └─ Constraint
│  │  │  │     ├─ EmailAddressContains.php
│  │  │  │     ├─ EmailAttachmentCount.php
│  │  │  │     ├─ EmailHasHeader.php
│  │  │  │     ├─ EmailHeaderSame.php
│  │  │  │     ├─ EmailHtmlBodyContains.php
│  │  │  │     ├─ EmailSubjectContains.php
│  │  │  │     └─ EmailTextBodyContains.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-ctype
│  │  │  ├─ Ctype.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-intl-grapheme
│  │  │  ├─ Grapheme.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-intl-idn
│  │  │  ├─ Idn.php
│  │  │  ├─ Info.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ unidata
│  │  │  │     ├─ DisallowedRanges.php
│  │  │  │     ├─ Regex.php
│  │  │  │     ├─ deviation.php
│  │  │  │     ├─ disallowed.php
│  │  │  │     ├─ disallowed_STD3_mapped.php
│  │  │  │     ├─ disallowed_STD3_valid.php
│  │  │  │     ├─ ignored.php
│  │  │  │     ├─ mapped.php
│  │  │  │     └─ virama.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-intl-normalizer
│  │  │  ├─ LICENSE
│  │  │  ├─ Normalizer.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ stubs
│  │  │  │  │  └─ Normalizer.php
│  │  │  │  └─ unidata
│  │  │  │     ├─ canonicalComposition.php
│  │  │  │     ├─ canonicalDecomposition.php
│  │  │  │     ├─ combiningClass.php
│  │  │  │     └─ compatibilityDecomposition.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-mbstring
│  │  │  ├─ LICENSE
│  │  │  ├─ Mbstring.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ unidata
│  │  │  │     ├─ caseFolding.php
│  │  │  │     ├─ lowerCase.php
│  │  │  │     ├─ titleCaseRegexp.php
│  │  │  │     └─ upperCase.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-php80
│  │  │  ├─ LICENSE
│  │  │  ├─ Php80.php
│  │  │  ├─ PhpToken.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ stubs
│  │  │  │     ├─ Attribute.php
│  │  │  │     ├─ PhpToken.php
│  │  │  │     ├─ Stringable.php
│  │  │  │     ├─ UnhandledMatchError.php
│  │  │  │     └─ ValueError.php
│  │  │  ├─ bootstrap.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-php83
│  │  │  ├─ LICENSE
│  │  │  ├─ Php83.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ stubs
│  │  │  │     ├─ DateError.php
│  │  │  │     ├─ DateException.php
│  │  │  │     ├─ DateInvalidOperationException.php
│  │  │  │     ├─ DateInvalidTimeZoneException.php
│  │  │  │     ├─ DateMalformedIntervalStringException.php
│  │  │  │     ├─ DateMalformedPeriodStringException.php
│  │  │  │     ├─ DateMalformedStringException.php
│  │  │  │     ├─ DateObjectError.php
│  │  │  │     ├─ DateRangeError.php
│  │  │  │     ├─ Override.php
│  │  │  │     └─ SQLite3Exception.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap81.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-uuid
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Uuid.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ process
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ ProcessFailedException.php
│  │  │  │  ├─ ProcessSignaledException.php
│  │  │  │  ├─ ProcessStartFailedException.php
│  │  │  │  ├─ ProcessTimedOutException.php
│  │  │  │  ├─ RunProcessFailedException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ ExecutableFinder.php
│  │  │  ├─ InputStream.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Messenger
│  │  │  │  ├─ RunProcessContext.php
│  │  │  │  ├─ RunProcessMessage.php
│  │  │  │  └─ RunProcessMessageHandler.php
│  │  │  ├─ PhpExecutableFinder.php
│  │  │  ├─ PhpProcess.php
│  │  │  ├─ PhpSubprocess.php
│  │  │  ├─ Pipes
│  │  │  │  ├─ AbstractPipes.php
│  │  │  │  ├─ PipesInterface.php
│  │  │  │  ├─ UnixPipes.php
│  │  │  │  └─ WindowsPipes.php
│  │  │  ├─ Process.php
│  │  │  ├─ ProcessUtils.php
│  │  │  ├─ README.md
│  │  │  └─ composer.json
│  │  ├─ routing
│  │  │  ├─ Alias.php
│  │  │  ├─ Annotation
│  │  │  │  └─ Route.php
│  │  │  ├─ Attribute
│  │  │  │  └─ Route.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CompiledRoute.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddExpressionLanguageProvidersPass.php
│  │  │  │  └─ RoutingResolverPass.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidParameterException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MethodNotAllowedException.php
│  │  │  │  ├─ MissingMandatoryParametersException.php
│  │  │  │  ├─ NoConfigurationException.php
│  │  │  │  ├─ ResourceNotFoundException.php
│  │  │  │  ├─ RouteCircularReferenceException.php
│  │  │  │  ├─ RouteNotFoundException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Generator
│  │  │  │  ├─ CompiledUrlGenerator.php
│  │  │  │  ├─ ConfigurableRequirementsInterface.php
│  │  │  │  ├─ Dumper
│  │  │  │  │  ├─ CompiledUrlGeneratorDumper.php
│  │  │  │  │  ├─ GeneratorDumper.php
│  │  │  │  │  └─ GeneratorDumperInterface.php
│  │  │  │  ├─ UrlGenerator.php
│  │  │  │  └─ UrlGeneratorInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Loader
│  │  │  │  ├─ AttributeClassLoader.php
│  │  │  │  ├─ AttributeDirectoryLoader.php
│  │  │  │  ├─ AttributeFileLoader.php
│  │  │  │  ├─ ClosureLoader.php
│  │  │  │  ├─ Configurator
│  │  │  │  │  ├─ AliasConfigurator.php
│  │  │  │  │  ├─ CollectionConfigurator.php
│  │  │  │  │  ├─ ImportConfigurator.php
│  │  │  │  │  ├─ RouteConfigurator.php
│  │  │  │  │  ├─ RoutingConfigurator.php
│  │  │  │  │  └─ Traits
│  │  │  │  │     ├─ AddTrait.php
│  │  │  │  │     ├─ HostTrait.php
│  │  │  │  │     ├─ LocalizedRouteTrait.php
│  │  │  │  │     ├─ PrefixTrait.php
│  │  │  │  │     └─ RouteTrait.php
│  │  │  │  ├─ ContainerLoader.php
│  │  │  │  ├─ DirectoryLoader.php
│  │  │  │  ├─ GlobFileLoader.php
│  │  │  │  ├─ ObjectLoader.php
│  │  │  │  ├─ PhpFileLoader.php
│  │  │  │  ├─ Psr4DirectoryLoader.php
│  │  │  │  ├─ XmlFileLoader.php
│  │  │  │  ├─ YamlFileLoader.php
│  │  │  │  └─ schema
│  │  │  │     └─ routing
│  │  │  │        └─ routing-1.0.xsd
│  │  │  ├─ Matcher
│  │  │  │  ├─ CompiledUrlMatcher.php
│  │  │  │  ├─ Dumper
│  │  │  │  │  ├─ CompiledUrlMatcherDumper.php
│  │  │  │  │  ├─ CompiledUrlMatcherTrait.php
│  │  │  │  │  ├─ MatcherDumper.php
│  │  │  │  │  ├─ MatcherDumperInterface.php
│  │  │  │  │  └─ StaticPrefixCollection.php
│  │  │  │  ├─ ExpressionLanguageProvider.php
│  │  │  │  ├─ RedirectableUrlMatcher.php
│  │  │  │  ├─ RedirectableUrlMatcherInterface.php
│  │  │  │  ├─ RequestMatcherInterface.php
│  │  │  │  ├─ TraceableUrlMatcher.php
│  │  │  │  ├─ UrlMatcher.php
│  │  │  │  └─ UrlMatcherInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ RequestContext.php
│  │  │  ├─ RequestContextAwareInterface.php
│  │  │  ├─ Requirement
│  │  │  │  ├─ EnumRequirement.php
│  │  │  │  └─ Requirement.php
│  │  │  ├─ Route.php
│  │  │  ├─ RouteCollection.php
│  │  │  ├─ RouteCompiler.php
│  │  │  ├─ RouteCompilerInterface.php
│  │  │  ├─ Router.php
│  │  │  ├─ RouterInterface.php
│  │  │  └─ composer.json
│  │  ├─ service-contracts
│  │  │  ├─ Attribute
│  │  │  │  ├─ Required.php
│  │  │  │  └─ SubscribedService.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ ResetInterface.php
│  │  │  ├─ ServiceCollectionInterface.php
│  │  │  ├─ ServiceLocatorTrait.php
│  │  │  ├─ ServiceMethodsSubscriberTrait.php
│  │  │  ├─ ServiceProviderInterface.php
│  │  │  ├─ ServiceSubscriberInterface.php
│  │  │  ├─ ServiceSubscriberTrait.php
│  │  │  ├─ Test
│  │  │  │  ├─ ServiceLocatorTest.php
│  │  │  │  └─ ServiceLocatorTestCase.php
│  │  │  └─ composer.json
│  │  ├─ string
│  │  │  ├─ AbstractString.php
│  │  │  ├─ AbstractUnicodeString.php
│  │  │  ├─ ByteString.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CodePointString.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Inflector
│  │  │  │  ├─ EnglishInflector.php
│  │  │  │  ├─ FrenchInflector.php
│  │  │  │  ├─ InflectorInterface.php
│  │  │  │  └─ SpanishInflector.php
│  │  │  ├─ LICENSE
│  │  │  ├─ LazyString.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  ├─ data
│  │  │  │  │  ├─ wcswidth_table_wide.php
│  │  │  │  │  └─ wcswidth_table_zero.php
│  │  │  │  └─ functions.php
│  │  │  ├─ Slugger
│  │  │  │  ├─ AsciiSlugger.php
│  │  │  │  └─ SluggerInterface.php
│  │  │  ├─ TruncateMode.php
│  │  │  ├─ UnicodeString.php
│  │  │  └─ composer.json
│  │  ├─ translation
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Catalogue
│  │  │  │  ├─ AbstractOperation.php
│  │  │  │  ├─ MergeOperation.php
│  │  │  │  ├─ OperationInterface.php
│  │  │  │  └─ TargetOperation.php
│  │  │  ├─ CatalogueMetadataAwareInterface.php
│  │  │  ├─ Command
│  │  │  │  ├─ TranslationLintCommand.php
│  │  │  │  ├─ TranslationPullCommand.php
│  │  │  │  ├─ TranslationPushCommand.php
│  │  │  │  ├─ TranslationTrait.php
│  │  │  │  └─ XliffLintCommand.php
│  │  │  ├─ DataCollector
│  │  │  │  └─ TranslationDataCollector.php
│  │  │  ├─ DataCollectorTranslator.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ DataCollectorTranslatorPass.php
│  │  │  │  ├─ LoggingTranslatorPass.php
│  │  │  │  ├─ TranslationDumperPass.php
│  │  │  │  ├─ TranslationExtractorPass.php
│  │  │  │  ├─ TranslatorPass.php
│  │  │  │  └─ TranslatorPathsPass.php
│  │  │  ├─ Dumper
│  │  │  │  ├─ CsvFileDumper.php
│  │  │  │  ├─ DumperInterface.php
│  │  │  │  ├─ FileDumper.php
│  │  │  │  ├─ IcuResFileDumper.php
│  │  │  │  ├─ IniFileDumper.php
│  │  │  │  ├─ JsonFileDumper.php
│  │  │  │  ├─ MoFileDumper.php
│  │  │  │  ├─ PhpFileDumper.php
│  │  │  │  ├─ PoFileDumper.php
│  │  │  │  ├─ QtFileDumper.php
│  │  │  │  ├─ XliffFileDumper.php
│  │  │  │  └─ YamlFileDumper.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ IncompleteDsnException.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidResourceException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MissingRequiredOptionException.php
│  │  │  │  ├─ NotFoundResourceException.php
│  │  │  │  ├─ ProviderException.php
│  │  │  │  ├─ ProviderExceptionInterface.php
│  │  │  │  ├─ RuntimeException.php
│  │  │  │  └─ UnsupportedSchemeException.php
│  │  │  ├─ Extractor
│  │  │  │  ├─ AbstractFileExtractor.php
│  │  │  │  ├─ ChainExtractor.php
│  │  │  │  ├─ ExtractorInterface.php
│  │  │  │  ├─ PhpAstExtractor.php
│  │  │  │  └─ Visitor
│  │  │  │     ├─ AbstractVisitor.php
│  │  │  │     ├─ ConstraintVisitor.php
│  │  │  │     ├─ TransMethodVisitor.php
│  │  │  │     └─ TranslatableMessageVisitor.php
│  │  │  ├─ Formatter
│  │  │  │  ├─ IntlFormatter.php
│  │  │  │  ├─ IntlFormatterInterface.php
│  │  │  │  ├─ MessageFormatter.php
│  │  │  │  └─ MessageFormatterInterface.php
│  │  │  ├─ IdentityTranslator.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Loader
│  │  │  │  ├─ ArrayLoader.php
│  │  │  │  ├─ CsvFileLoader.php
│  │  │  │  ├─ FileLoader.php
│  │  │  │  ├─ IcuDatFileLoader.php
│  │  │  │  ├─ IcuResFileLoader.php
│  │  │  │  ├─ IniFileLoader.php
│  │  │  │  ├─ JsonFileLoader.php
│  │  │  │  ├─ LoaderInterface.php
│  │  │  │  ├─ MoFileLoader.php
│  │  │  │  ├─ PhpFileLoader.php
│  │  │  │  ├─ PoFileLoader.php
│  │  │  │  ├─ QtFileLoader.php
│  │  │  │  ├─ XliffFileLoader.php
│  │  │  │  └─ YamlFileLoader.php
│  │  │  ├─ LocaleSwitcher.php
│  │  │  ├─ LoggingTranslator.php
│  │  │  ├─ MessageCatalogue.php
│  │  │  ├─ MessageCatalogueInterface.php
│  │  │  ├─ MetadataAwareInterface.php
│  │  │  ├─ Provider
│  │  │  │  ├─ AbstractProviderFactory.php
│  │  │  │  ├─ Dsn.php
│  │  │  │  ├─ FilteringProvider.php
│  │  │  │  ├─ NullProvider.php
│  │  │  │  ├─ NullProviderFactory.php
│  │  │  │  ├─ ProviderFactoryInterface.php
│  │  │  │  ├─ ProviderInterface.php
│  │  │  │  ├─ TranslationProviderCollection.php
│  │  │  │  └─ TranslationProviderCollectionFactory.php
│  │  │  ├─ PseudoLocalizationTranslator.php
│  │  │  ├─ README.md
│  │  │  ├─ Reader
│  │  │  │  ├─ TranslationReader.php
│  │  │  │  └─ TranslationReaderInterface.php
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ translation-status.php
│  │  │  │  ├─ data
│  │  │  │  │  └─ parents.json
│  │  │  │  ├─ functions.php
│  │  │  │  └─ schemas
│  │  │  │     ├─ xliff-core-1.2-transitional.xsd
│  │  │  │     ├─ xliff-core-2.0.xsd
│  │  │  │     └─ xml.xsd
│  │  │  ├─ Test
│  │  │  │  ├─ AbstractProviderFactoryTestCase.php
│  │  │  │  ├─ IncompleteDsnTestTrait.php
│  │  │  │  ├─ ProviderFactoryTestCase.php
│  │  │  │  └─ ProviderTestCase.php
│  │  │  ├─ TranslatableMessage.php
│  │  │  ├─ Translator.php
│  │  │  ├─ TranslatorBag.php
│  │  │  ├─ TranslatorBagInterface.php
│  │  │  ├─ Util
│  │  │  │  ├─ ArrayConverter.php
│  │  │  │  └─ XliffUtils.php
│  │  │  ├─ Writer
│  │  │  │  ├─ TranslationWriter.php
│  │  │  │  └─ TranslationWriterInterface.php
│  │  │  └─ composer.json
│  │  ├─ translation-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ LocaleAwareInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ Test
│  │  │  │  └─ TranslatorTest.php
│  │  │  ├─ TranslatableInterface.php
│  │  │  ├─ TranslatorInterface.php
│  │  │  ├─ TranslatorTrait.php
│  │  │  └─ composer.json
│  │  ├─ uid
│  │  │  ├─ AbstractUid.php
│  │  │  ├─ BinaryUtil.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  ├─ GenerateUlidCommand.php
│  │  │  │  ├─ GenerateUuidCommand.php
│  │  │  │  ├─ InspectUlidCommand.php
│  │  │  │  └─ InspectUuidCommand.php
│  │  │  ├─ Factory
│  │  │  │  ├─ NameBasedUuidFactory.php
│  │  │  │  ├─ RandomBasedUuidFactory.php
│  │  │  │  ├─ TimeBasedUuidFactory.php
│  │  │  │  ├─ UlidFactory.php
│  │  │  │  └─ UuidFactory.php
│  │  │  ├─ HashableInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ MaxUlid.php
│  │  │  ├─ MaxUuid.php
│  │  │  ├─ NilUlid.php
│  │  │  ├─ NilUuid.php
│  │  │  ├─ README.md
│  │  │  ├─ TimeBasedUidInterface.php
│  │  │  ├─ Ulid.php
│  │  │  ├─ Uuid.php
│  │  │  ├─ UuidV1.php
│  │  │  ├─ UuidV3.php
│  │  │  ├─ UuidV4.php
│  │  │  ├─ UuidV5.php
│  │  │  ├─ UuidV6.php
│  │  │  ├─ UuidV7.php
│  │  │  ├─ UuidV8.php
│  │  │  └─ composer.json
│  │  ├─ var-dumper
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Caster
│  │  │  │  ├─ AmqpCaster.php
│  │  │  │  ├─ ArgsStub.php
│  │  │  │  ├─ Caster.php
│  │  │  │  ├─ ClassStub.php
│  │  │  │  ├─ ConstStub.php
│  │  │  │  ├─ CutArrayStub.php
│  │  │  │  ├─ CutStub.php
│  │  │  │  ├─ DOMCaster.php
│  │  │  │  ├─ DateCaster.php
│  │  │  │  ├─ DoctrineCaster.php
│  │  │  │  ├─ DsCaster.php
│  │  │  │  ├─ DsPairStub.php
│  │  │  │  ├─ EnumStub.php
│  │  │  │  ├─ ExceptionCaster.php
│  │  │  │  ├─ FFICaster.php
│  │  │  │  ├─ FiberCaster.php
│  │  │  │  ├─ FrameStub.php
│  │  │  │  ├─ GmpCaster.php
│  │  │  │  ├─ ImagineCaster.php
│  │  │  │  ├─ ImgStub.php
│  │  │  │  ├─ IntlCaster.php
│  │  │  │  ├─ LinkStub.php
│  │  │  │  ├─ MemcachedCaster.php
│  │  │  │  ├─ MysqliCaster.php
│  │  │  │  ├─ PdoCaster.php
│  │  │  │  ├─ PgSqlCaster.php
│  │  │  │  ├─ ProxyManagerCaster.php
│  │  │  │  ├─ RdKafkaCaster.php
│  │  │  │  ├─ RedisCaster.php
│  │  │  │  ├─ ReflectionCaster.php
│  │  │  │  ├─ ResourceCaster.php
│  │  │  │  ├─ ScalarStub.php
│  │  │  │  ├─ SplCaster.php
│  │  │  │  ├─ StubCaster.php
│  │  │  │  ├─ SymfonyCaster.php
│  │  │  │  ├─ TraceStub.php
│  │  │  │  ├─ UninitializedStub.php
│  │  │  │  ├─ UuidCaster.php
│  │  │  │  ├─ VirtualStub.php
│  │  │  │  ├─ XmlReaderCaster.php
│  │  │  │  └─ XmlResourceCaster.php
│  │  │  ├─ Cloner
│  │  │  │  ├─ AbstractCloner.php
│  │  │  │  ├─ ClonerInterface.php
│  │  │  │  ├─ Cursor.php
│  │  │  │  ├─ Data.php
│  │  │  │  ├─ DumperInterface.php
│  │  │  │  ├─ Internal
│  │  │  │  │  └─ NoDefault.php
│  │  │  │  ├─ Stub.php
│  │  │  │  └─ VarCloner.php
│  │  │  ├─ Command
│  │  │  │  ├─ Descriptor
│  │  │  │  │  ├─ CliDescriptor.php
│  │  │  │  │  ├─ DumpDescriptorInterface.php
│  │  │  │  │  └─ HtmlDescriptor.php
│  │  │  │  └─ ServerDumpCommand.php
│  │  │  ├─ Dumper
│  │  │  │  ├─ AbstractDumper.php
│  │  │  │  ├─ CliDumper.php
│  │  │  │  ├─ ContextProvider
│  │  │  │  │  ├─ CliContextProvider.php
│  │  │  │  │  ├─ ContextProviderInterface.php
│  │  │  │  │  ├─ RequestContextProvider.php
│  │  │  │  │  └─ SourceContextProvider.php
│  │  │  │  ├─ ContextualizedDumper.php
│  │  │  │  ├─ DataDumperInterface.php
│  │  │  │  ├─ HtmlDumper.php
│  │  │  │  └─ ServerDumper.php
│  │  │  ├─ Exception
│  │  │  │  └─ ThrowingCasterException.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ var-dump-server
│  │  │  │  ├─ css
│  │  │  │  │  └─ htmlDescriptor.css
│  │  │  │  ├─ functions
│  │  │  │  │  └─ dump.php
│  │  │  │  └─ js
│  │  │  │     └─ htmlDescriptor.js
│  │  │  ├─ Server
│  │  │  │  ├─ Connection.php
│  │  │  │  └─ DumpServer.php
│  │  │  ├─ Test
│  │  │  │  └─ VarDumperTestTrait.php
│  │  │  ├─ VarDumper.php
│  │  │  └─ composer.json
│  │  └─ yaml
│  │     ├─ CHANGELOG.md
│  │     ├─ Command
│  │     │  └─ LintCommand.php
│  │     ├─ Dumper.php
│  │     ├─ Escaper.php
│  │     ├─ Exception
│  │     │  ├─ DumpException.php
│  │     │  ├─ ExceptionInterface.php
│  │     │  ├─ ParseException.php
│  │     │  └─ RuntimeException.php
│  │     ├─ Inline.php
│  │     ├─ LICENSE
│  │     ├─ Parser.php
│  │     ├─ README.md
│  │     ├─ Resources
│  │     │  └─ bin
│  │     │     └─ yaml-lint
│  │     ├─ Tag
│  │     │  └─ TaggedValue.php
│  │     ├─ Unescaper.php
│  │     ├─ Yaml.php
│  │     └─ composer.json
│  ├─ ta-tikoma
│  │  └─ phpunit-architecture-test
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ ArchitectureAsserts.php
│  │        ├─ Asserts
│  │        │  ├─ Dependencies
│  │        │  │  ├─ DependenciesAsserts.php
│  │        │  │  ├─ Elements
│  │        │  │  │  └─ ObjectUses.php
│  │        │  │  └─ ObjectDependenciesDescription.php
│  │        │  ├─ Inheritance
│  │        │  │  └─ ObjectInheritanceDescription.php
│  │        │  ├─ Iterator
│  │        │  │  └─ IteratorAsserts.php
│  │        │  ├─ Methods
│  │        │  │  ├─ Elements
│  │        │  │  │  ├─ MethodDescription.php
│  │        │  │  │  └─ ObjectMethods.php
│  │        │  │  ├─ MethodsAsserts.php
│  │        │  │  └─ ObjectMethodsDescription.php
│  │        │  └─ Properties
│  │        │     ├─ Elements
│  │        │     │  ├─ ObjectProperties.php
│  │        │     │  └─ PropertyDescription.php
│  │        │     ├─ ObjectPropertiesDescription.php
│  │        │     └─ PropertiesAsserts.php
│  │        ├─ Builders
│  │        │  └─ BuildFromTest.php
│  │        ├─ Elements
│  │        │  ├─ Layer
│  │        │  │  ├─ Layer.php
│  │        │  │  ├─ LayerExclude.php
│  │        │  │  ├─ LayerLeave.php
│  │        │  │  └─ LayerSplit.php
│  │        │  ├─ ObjectDescription.php
│  │        │  └─ ObjectDescriptionBase.php
│  │        ├─ Enums
│  │        │  ├─ ObjectType.php
│  │        │  └─ Visibility.php
│  │        ├─ Services
│  │        │  └─ ServiceContainer.php
│  │        └─ Storage
│  │           ├─ Filesystem.php
│  │           └─ ObjectsStorage.php
│  ├─ theseer
│  │  └─ tokenizer
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ composer.lock
│  │     └─ src
│  │        ├─ Exception.php
│  │        ├─ NamespaceUri.php
│  │        ├─ NamespaceUriException.php
│  │        ├─ Token.php
│  │        ├─ TokenCollection.php
│  │        ├─ TokenCollectionException.php
│  │        ├─ Tokenizer.php
│  │        └─ XMLSerializer.php
│  ├─ tijsverkoyen
│  │  └─ css-to-inline-styles
│  │     ├─ LICENSE.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Css
│  │        │  ├─ Processor.php
│  │        │  ├─ Property
│  │        │  │  ├─ Processor.php
│  │        │  │  └─ Property.php
│  │        │  └─ Rule
│  │        │     ├─ Processor.php
│  │        │     └─ Rule.php
│  │        └─ CssToInlineStyles.php
│  ├─ vlucas
│  │  └─ phpdotenv
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Dotenv.php
│  │        ├─ Exception
│  │        │  ├─ ExceptionInterface.php
│  │        │  ├─ InvalidEncodingException.php
│  │        │  ├─ InvalidFileException.php
│  │        │  ├─ InvalidPathException.php
│  │        │  └─ ValidationException.php
│  │        ├─ Loader
│  │        │  ├─ Loader.php
│  │        │  ├─ LoaderInterface.php
│  │        │  └─ Resolver.php
│  │        ├─ Parser
│  │        │  ├─ Entry.php
│  │        │  ├─ EntryParser.php
│  │        │  ├─ Lexer.php
│  │        │  ├─ Lines.php
│  │        │  ├─ Parser.php
│  │        │  ├─ ParserInterface.php
│  │        │  └─ Value.php
│  │        ├─ Repository
│  │        │  ├─ Adapter
│  │        │  │  ├─ AdapterInterface.php
│  │        │  │  ├─ ApacheAdapter.php
│  │        │  │  ├─ ArrayAdapter.php
│  │        │  │  ├─ EnvConstAdapter.php
│  │        │  │  ├─ GuardedWriter.php
│  │        │  │  ├─ ImmutableWriter.php
│  │        │  │  ├─ MultiReader.php
│  │        │  │  ├─ MultiWriter.php
│  │        │  │  ├─ PutenvAdapter.php
│  │        │  │  ├─ ReaderInterface.php
│  │        │  │  ├─ ReplacingWriter.php
│  │        │  │  ├─ ServerConstAdapter.php
│  │        │  │  └─ WriterInterface.php
│  │        │  ├─ AdapterRepository.php
│  │        │  ├─ RepositoryBuilder.php
│  │        │  └─ RepositoryInterface.php
│  │        ├─ Store
│  │        │  ├─ File
│  │        │  │  ├─ Paths.php
│  │        │  │  └─ Reader.php
│  │        │  ├─ FileStore.php
│  │        │  ├─ StoreBuilder.php
│  │        │  ├─ StoreInterface.php
│  │        │  └─ StringStore.php
│  │        ├─ Util
│  │        │  ├─ Regex.php
│  │        │  └─ Str.php
│  │        └─ Validator.php
│  ├─ voku
│  │  └─ portable-ascii
│  │     ├─ .deepsource.toml
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE.txt
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ voku
│  │           └─ helper
│  │              ├─ ASCII.php
│  │              └─ data
│  │                 ├─ ascii_by_languages.php
│  │                 ├─ ascii_extras_by_languages.php
│  │                 ├─ ascii_language_max_key.php
│  │                 ├─ ascii_ord.php
│  │                 ├─ x000.php
│  │                 ├─ x001.php
│  │                 ├─ x002.php
│  │                 ├─ x003.php
│  │                 ├─ x004.php
│  │                 ├─ x005.php
│  │                 ├─ x006.php
│  │                 ├─ x007.php
│  │                 ├─ x009.php
│  │                 ├─ x00a.php
│  │                 ├─ x00b.php
│  │                 ├─ x00c.php
│  │                 ├─ x00d.php
│  │                 ├─ x00e.php
│  │                 ├─ x00f.php
│  │                 ├─ x010.php
│  │                 ├─ x011.php
│  │                 ├─ x012.php
│  │                 ├─ x013.php
│  │                 ├─ x014.php
│  │                 ├─ x015.php
│  │                 ├─ x016.php
│  │                 ├─ x017.php
│  │                 ├─ x018.php
│  │                 ├─ x01d.php
│  │                 ├─ x01e.php
│  │                 ├─ x01f.php
│  │                 ├─ x020.php
│  │                 ├─ x021.php
│  │                 ├─ x022.php
│  │                 ├─ x023.php
│  │                 ├─ x024.php
│  │                 ├─ x025.php
│  │                 ├─ x026.php
│  │                 ├─ x027.php
│  │                 ├─ x028.php
│  │                 ├─ x029.php
│  │                 ├─ x02a.php
│  │                 ├─ x02c.php
│  │                 ├─ x02e.php
│  │                 ├─ x02f.php
│  │                 ├─ x030.php
│  │                 ├─ x031.php
│  │                 ├─ x032.php
│  │                 ├─ x033.php
│  │                 ├─ x04d.php
│  │                 ├─ x04e.php
│  │                 ├─ x04f.php
│  │                 ├─ x050.php
│  │                 ├─ x051.php
│  │                 ├─ x052.php
│  │                 ├─ x053.php
│  │                 ├─ x054.php
│  │                 ├─ x055.php
│  │                 ├─ x056.php
│  │                 ├─ x057.php
│  │                 ├─ x058.php
│  │                 ├─ x059.php
│  │                 ├─ x05a.php
│  │                 ├─ x05b.php
│  │                 ├─ x05c.php
│  │                 ├─ x05d.php
│  │                 ├─ x05e.php
│  │                 ├─ x05f.php
│  │                 ├─ x060.php
│  │                 ├─ x061.php
│  │                 ├─ x062.php
│  │                 ├─ x063.php
│  │                 ├─ x064.php
│  │                 ├─ x065.php
│  │                 ├─ x066.php
│  │                 ├─ x067.php
│  │                 ├─ x068.php
│  │                 ├─ x069.php
│  │                 ├─ x06a.php
│  │                 ├─ x06b.php
│  │                 ├─ x06c.php
│  │                 ├─ x06d.php
│  │                 ├─ x06e.php
│  │                 ├─ x06f.php
│  │                 ├─ x070.php
│  │                 ├─ x071.php
│  │                 ├─ x072.php
│  │                 ├─ x073.php
│  │                 ├─ x074.php
│  │                 ├─ x075.php
│  │                 ├─ x076.php
│  │                 ├─ x077.php
│  │                 ├─ x078.php
│  │                 ├─ x079.php
│  │                 ├─ x07a.php
│  │                 ├─ x07b.php
│  │                 ├─ x07c.php
│  │                 ├─ x07d.php
│  │                 ├─ x07e.php
│  │                 ├─ x07f.php
│  │                 ├─ x080.php
│  │                 ├─ x081.php
│  │                 ├─ x082.php
│  │                 ├─ x083.php
│  │                 ├─ x084.php
│  │                 ├─ x085.php
│  │                 ├─ x086.php
│  │                 ├─ x087.php
│  │                 ├─ x088.php
│  │                 ├─ x089.php
│  │                 ├─ x08a.php
│  │                 ├─ x08b.php
│  │                 ├─ x08c.php
│  │                 ├─ x08d.php
│  │                 ├─ x08e.php
│  │                 ├─ x08f.php
│  │                 ├─ x090.php
│  │                 ├─ x091.php
│  │                 ├─ x092.php
│  │                 ├─ x093.php
│  │                 ├─ x094.php
│  │                 ├─ x095.php
│  │                 ├─ x096.php
│  │                 ├─ x097.php
│  │                 ├─ x098.php
│  │                 ├─ x099.php
│  │                 ├─ x09a.php
│  │                 ├─ x09b.php
│  │                 ├─ x09c.php
│  │                 ├─ x09d.php
│  │                 ├─ x09e.php
│  │                 ├─ x09f.php
│  │                 ├─ x0a0.php
│  │                 ├─ x0a1.php
│  │                 ├─ x0a2.php
│  │                 ├─ x0a3.php
│  │                 ├─ x0a4.php
│  │                 ├─ x0ac.php
│  │                 ├─ x0ad.php
│  │                 ├─ x0ae.php
│  │                 ├─ x0af.php
│  │                 ├─ x0b0.php
│  │                 ├─ x0b1.php
│  │                 ├─ x0b2.php
│  │                 ├─ x0b3.php
│  │                 ├─ x0b4.php
│  │                 ├─ x0b5.php
│  │                 ├─ x0b6.php
│  │                 ├─ x0b7.php
│  │                 ├─ x0b8.php
│  │                 ├─ x0b9.php
│  │                 ├─ x0ba.php
│  │                 ├─ x0bb.php
│  │                 ├─ x0bc.php
│  │                 ├─ x0bd.php
│  │                 ├─ x0be.php
│  │                 ├─ x0bf.php
│  │                 ├─ x0c0.php
│  │                 ├─ x0c1.php
│  │                 ├─ x0c2.php
│  │                 ├─ x0c3.php
│  │                 ├─ x0c4.php
│  │                 ├─ x0c5.php
│  │                 ├─ x0c6.php
│  │                 ├─ x0c7.php
│  │                 ├─ x0c8.php
│  │                 ├─ x0c9.php
│  │                 ├─ x0ca.php
│  │                 ├─ x0cb.php
│  │                 ├─ x0cc.php
│  │                 ├─ x0cd.php
│  │                 ├─ x0ce.php
│  │                 ├─ x0cf.php
│  │                 ├─ x0d0.php
│  │                 ├─ x0d1.php
│  │                 ├─ x0d2.php
│  │                 ├─ x0d3.php
│  │                 ├─ x0d4.php
│  │                 ├─ x0d5.php
│  │                 ├─ x0d6.php
│  │                 ├─ x0d7.php
│  │                 ├─ x0f9.php
│  │                 ├─ x0fa.php
│  │                 ├─ x0fb.php
│  │                 ├─ x0fc.php
│  │                 ├─ x0fd.php
│  │                 ├─ x0fe.php
│  │                 ├─ x0ff.php
│  │                 ├─ x1d4.php
│  │                 ├─ x1d5.php
│  │                 ├─ x1d6.php
│  │                 ├─ x1d7.php
│  │                 └─ x1f1.php
│  ├─ webmozart
│  │  └─ assert
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Assert.php
│  │        ├─ InvalidArgumentException.php
│  │        └─ Mixin.php
│  └─ wikimedia
│     └─ composer-merge-plugin
│        ├─ LICENSE
│        ├─ README.md
│        ├─ composer.json
│        └─ src
│           ├─ ExtraPackage.php
│           ├─ Logger.php
│           ├─ MergePlugin.php
│           ├─ MissingFileException.php
│           ├─ MultiConstraint.php
│           ├─ NestedArray.php
│           ├─ PluginState.php
│           └─ StabilityFlags.php
├─ vite-module-loader.js
├─ vite.config.js
└─ workflows
   ├─ lint.yml
   └─ tests.yml

```