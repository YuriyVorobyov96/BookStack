<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nastavení',
    'settings_save' => 'Uložit nastavení',
    'settings_save_success' => 'Nastavení uloženo',

    // App Settings
    'app_customization' => 'Přizpůsobení',
    'app_features_security' => 'Funkce a zabezpečení',
    'app_name' => 'Název aplikace',
    'app_name_desc' => 'Název se bude zobrazovat v záhlaví této aplikace a v e-mailech odesílaných systémem.',
    'app_name_header' => 'Zobrazovat název aplikace v záhlaví',
    'app_public_access' => 'Veřejný přístup',
    'app_public_access_desc' => 'Zapnutím této volby umožníte nepřihlášeným návštěvníkům přístup k Vašemu obsahu v BookStack aplikaci.',
    'app_public_access_desc_guest' => 'Přístup pro nepřihlášené návštěvníky je možné nastavit přes uživatele "Guest".',
    'app_public_access_toggle' => 'Povolit veřejný přístup',
    'app_public_viewing' => 'Povolit prohlížení veřejností?',
    'app_secure_images' => 'Nahrávat obrázky neveřejně a zabezpečeně',
    'app_secure_images_toggle' => 'Zapnout bezpečnější nahrávání obrázků',
    'app_secure_images_desc' => 'Z výkonnostních důvodů jsou všechny obrázky veřejně dostupné. Tato volba přidá do adresy obrázku náhodný řetězec, aby nikdo neodhadnul adresu obrázku. Ujistěte se, že server nezobrazuje v adresáři seznam souborů, což by přístup k přístup opět otevřelo.',
    'app_editor' => 'Editor stránek',
    'app_editor_desc' => 'Zvolte který editor budou užívat všichni uživatelé k úpravě stránek.',
    'app_custom_html' => 'Vlastní obsah hlavičky HTML',
    'app_custom_html_desc' => 'Cokoliv sem napíšete bude přidáno na konec sekce <head> v každém místě této aplikace. To se hodí pro přidávání nebo změnu CSS stylů nebo přidání kódu pro analýzu používání (např.: google analytics.).',
    'app_custom_html_disabled_notice' => 'Na této stránce nastavení je zakázán vlastní obsah HTML hlavičky, aby bylo zajištěno, že bude možné vrátit případnou problematickou úpravu.',
    'app_logo' => 'Logo aplikace',
    'app_logo_desc' => 'Tento obrázek by měl mít výšku 43px. <br>Větší obrázky zmenšíme na tuto velikost.',
    'app_primary_color' => 'Hlavní barva aplikace',
    'app_primary_color_desc' => 'Nastaví hlavní barvu aplikace včetně panelů, tlačítek a odkazů.',
    'app_homepage' => 'Úvodní stránka aplikace',
    'app_homepage_desc' => 'Vyberte si zobrazení, které se použije jako úvodní stránka. U zvolených stránek bude ignorováno jejich oprávnění.',
    'app_homepage_select' => 'Zvolte stránku',
    'app_footer_links' => 'Footer Links',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Link Label',
    'app_footer_links_url' => 'Link URL',
    'app_footer_links_add' => 'Add Footer Link',
    'app_disable_comments' => 'Vypnutí komentářů',
    'app_disable_comments_toggle' => 'Vypnout komentáře',
    'app_disable_comments_desc' => 'Vypne komentáře napříč všemi stránkami. <br> Existující komentáře se přestanou zobrazovat.',

    // Color settings
    'content_colors' => 'Barvy obsahu',
    'content_colors_desc' => 'Nastaví barvy pro všechny prvky v organizační struktuře stránky. Pro lepší čitelnost doporučujeme zvolit barvy s podobným jasem, jakou mají výchozí barvy.',
    'bookshelf_color' => 'Barva knihovny',
    'book_color' => 'Barva knihy',
    'chapter_color' => 'Barva kapitoly',
    'page_color' => 'Barva stránky',
    'page_draft_color' => 'Barva návrhu stránky',

    // Registration Settings
    'reg_settings' => 'Nastavení registrace',
    'reg_enable' => 'Povolení registrace',
    'reg_enable_toggle' => 'Povolit registrace',
    'reg_enable_desc' => 'Pokud jsou povoleny registrace, bude se uživatel moci sám registrovat jako uživatel aplikace. Po registraci dostane jednu výchozí uživatelskou roli.',
    'reg_default_role' => 'Role přiřazená po registraci',
    'reg_enable_external_warning' => 'Pokud je povolené externí ověřování přes LDAP nebo SAML, je výše uvedená možnost ignorována. Uživatelský účet budou automaticky vytvořen i neexistujícímu uživateli, jakmile se úspěšně přihlásí přes použitý externí přihlašovací systém.',
    'reg_email_confirmation' => 'Ověření e-mailu',
    'reg_email_confirmation_toggle' => 'Vyžadovat ověření e-mailu',
    'reg_confirm_email_desc' => 'Pokud je zapnuté Omezení registrace podle domény, bude e-mail ověřován vždy a tato volba bude ignorována.',
    'reg_confirm_restrict_domain' => 'Omezit registraci podle domény',
    'reg_confirm_restrict_domain_desc' => 'Zadejte seznam e-mailových domén oddělených čárkami, na které chcete registraci omezit. Registrujícímu se uživateli bude zaslán e-mail, aby ověřil svoji e-mailovou adresu před tím, než mu bude přístup do aplikace povolen. <br> Upozorňujeme, že po úspěšné registraci může uživatel svoji e-mailovou adresu změnit.',
    'reg_confirm_restrict_domain_placeholder' => 'Žádná omezení nebyla nastavena',

    // Maintenance settings
    'maint' => 'Údržba',
    'maint_image_cleanup' => 'Pročistění obrázků',
    'maint_image_cleanup_desc' => "Prohledá stránky a jejich revize, aby zjistil, které obrázky a kresby jsou momentálně používány a které jsou zbytečné. Zajistěte plnou zálohu databáze a obrázků než se do toho pustíte.",
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Spustit pročištění',
    'maint_image_cleanup_warning' => 'Nalezeno :count potenciálně nepoužitých obrázků. Jste si jistí, že je chcete smazat?',
    'maint_image_cleanup_success' => 'Potenciálně nepoužité obrázky byly smazány. Celkem :count.',
    'maint_image_cleanup_nothing_found' => 'Žádné potenciálně nepoužité obrázky nebyly nalezeny. Nic nebylo smazáno.',
    'maint_send_test_email' => 'Odeslat zkušební e-mail',
    'maint_send_test_email_desc' => 'Toto pošle zkušební e-mail na vaši e-mailovou adresu uvedenou ve vašem profilu.',
    'maint_send_test_email_run' => 'Odeslat zkušební e-mail',
    'maint_send_test_email_success' => 'E-mail odeslán na :address',
    'maint_send_test_email_mail_subject' => 'Testovací e-mail',
    'maint_send_test_email_mail_greeting' => 'Zdá se, že posílání e-mailů funguje!',
    'maint_send_test_email_mail_text' => 'Gratulujeme! Protože jste dostali tento e-mail, zdá se, že nastavení e-mailů je v pořádku.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Protokol auditu',
    'audit_desc' => 'Tento protokol auditu zobrazuje seznam činností zaznamenaných v systému. Tento seznam není filtrován na rozdíl od podobných seznamů aktivit v systému, kde jsou použity filtry podle oprávnění.',
    'audit_event_filter' => 'Filtr událostí',
    'audit_event_filter_no_filter' => 'Bez filtru',
    'audit_deleted_item' => 'Odstraněná položka',
    'audit_deleted_item_name' => 'Jméno: :name',
    'audit_table_user' => 'Uživatel',
    'audit_table_event' => 'Událost',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Datum aktivity',
    'audit_date_from' => 'Časový rozsah od',
    'audit_date_to' => 'Časový rozsah do',

    // Role Settings
    'roles' => 'Role',
    'role_user_roles' => 'Uživatelské role',
    'role_create' => 'Vytvořit novou roli',
    'role_create_success' => 'Role byla úspěšně vytvořena',
    'role_delete' => 'Smazat roli',
    'role_delete_confirm' => 'Role \':roleName\' bude smazána.',
    'role_delete_users_assigned' => 'Role je přiřazena :userCount uživatelům. Pokud jim chcete náhradou přidělit jinou roli, zvolte jednu z následujících.',
    'role_delete_no_migration' => "Nepřiřazovat uživatelům náhradní roli",
    'role_delete_sure' => 'Opravdu chcete tuto roli smazat?',
    'role_delete_success' => 'Role byla úspěšně smazána',
    'role_edit' => 'Upravit roli',
    'role_details' => 'Detaily role',
    'role_name' => 'Název role',
    'role_desc' => 'Stručný popis role',
    'role_external_auth_id' => 'Přihlašovací identifikátory třetích stran',
    'role_system' => 'Systémová oprávnění',
    'role_manage_users' => 'Správa uživatelů',
    'role_manage_roles' => 'Správa rolí a jejich práv',
    'role_manage_entity_permissions' => 'Správa práv všech knih, kapitol a stránek',
    'role_manage_own_entity_permissions' => 'Správa práv vlastních knih, kapitol a stránek',
    'role_manage_page_templates' => 'Správa šablon stránek',
    'role_access_api' => 'Přístup k systémovému API',
    'role_manage_settings' => 'Správa nastavení aplikace',
    'role_asset' => 'Obsahová oprávnění',
    'roles_system_warning' => 'Berte na vědomí, že přístup k některému ze tří výše uvedených oprávnění může uživateli umožnit změnit svá vlastní oprávnění nebo oprávnění ostatních uživatelů v systému. Přiřazujte role s těmito oprávněními pouze důvěryhodným uživatelům.',
    'role_asset_desc' => 'Tato práva řídí přístup k obsahu napříč systémem. Specifická práva na knihách, kapitolách a stránkách převáží tato nastavení.',
    'role_asset_admins' => 'Administrátoři automaticky dostávají přístup k veškerému obsahu, ale tyto volby mohou ukázat nebo skrýt volby v uživatelském rozhraní.',
    'role_all' => 'Vše',
    'role_own' => 'Vlastní',
    'role_controlled_by_asset' => 'Řídí se obsahem, do kterého jsou nahrávány',
    'role_save' => 'Uložit roli',
    'role_update_success' => 'Role úspěšně aktualizována',
    'role_users' => 'Uživatelé mající tuto roli',
    'role_users_none' => 'Žádný uživatel nemá tuto roli',

    // Users
    'users' => 'Uživatelé',
    'user_profile' => 'Profil uživatele',
    'users_add_new' => 'Přidat nového uživatele',
    'users_search' => 'Vyhledávání uživatelů',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'Údaje o uživateli',
    'users_details_desc' => 'Nastavte zobrazované jméno a e-mailovou adresu pro tohoto uživatele. E-mailová adresa bude použita pro přihlášení do aplikace.',
    'users_details_desc_no_email' => 'Nastavte zobrazované jméno pro tohoto uživatele, aby jej ostatní uživatele poznali.',
    'users_role' => 'Uživatelské role',
    'users_role_desc' => 'Zvolte role, do kterých chcete uživatele zařadit. Pokud bude uživatel zařazen do více rolí, oprávnění z těchto rolí se sloučí a uživateli bude dovoleno vše, k čemu mají jednotlivé role oprávnění.',
    'users_password' => 'Heslo uživatele',
    'users_password_desc' => 'Zadejte heslo pro přihlášení do aplikace. Heslo musí být nejméně 6 znaků dlouhé.',
    'users_send_invite_text' => 'Uživateli můžete poslat pozvánku e-mailem, která umožní uživateli, aby si zvolil sám svoje heslo do aplikace a nebo můžete zadat heslo sami.',
    'users_send_invite_option' => 'Poslat uživateli pozvánku e-mailem',
    'users_external_auth_id' => 'Přihlašovací identifikátor třetích stran',
    'users_external_auth_id_desc' => 'ID použité pro rozpoznání tohoto uživatele když komunikuje s externím přihlašovacím systémem.',
    'users_password_warning' => 'Vyplňujte pouze v případě, že chcete heslo změnit.',
    'users_system_public' => 'Symbolizuje každého nepřihlášeného návštěvníka, který navštívil aplikaci. Nelze ho použít k přihlášení ale je přiřazen automaticky nepřihlášeným.',
    'users_delete' => 'Smazat uživatele',
    'users_delete_named' => 'Odstranit uživatele :userName',
    'users_delete_warning' => 'Uživatel \':userName\' bude zcela smazán ze systému.',
    'users_delete_confirm' => 'Opravdu chcete tohoto uživatele smazat?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_delete_success' => 'User successfully removed',
    'users_edit' => 'Upravit uživatele',
    'users_edit_profile' => 'Upravit profil',
    'users_edit_success' => 'Uživatel byl úspěšně aktualizován',
    'users_avatar' => 'Obrázek uživatele',
    'users_avatar_desc' => 'Vyberte obrázek, který bude reprezentovat tohoto uživatele. Měl by být přibližně 256px velký ve tvaru čtverce.',
    'users_preferred_language' => 'Preferovaný jazyk',
    'users_preferred_language_desc' => 'Tato volba ovlivní pouze jazyk používaný v uživatelském rozhraní aplikace. Volba nemá vliv na žádný uživateli vytvářený obsah.',
    'users_social_accounts' => 'Sociální účty',
    'users_social_accounts_info' => 'Zde můžete přidat vaše účty ze sociálních sítí pro pohodlnější přihlašování. Odpojení účtů neznamená, že tato aplikace ztratí práva číst detaily z vašeho účtu. Zakázat této aplikaci přístup k detailům vašeho účtu musíte přímo ve svém profilu na dané sociální síti.',
    'users_social_connect' => 'Připojit účet',
    'users_social_disconnect' => 'Odpojit účet',
    'users_social_connected' => 'Účet :socialAccount byl úspěšně připojen k vašemu profilu.',
    'users_social_disconnected' => 'Účet :socialAccount byl úspěšně odpojen od vašeho profilu.',
    'users_api_tokens' => 'API Tokeny',
    'users_api_tokens_none' => 'Tento uživatel nemá vytvořené žádné API Tokeny',
    'users_api_tokens_create' => 'Vytvořit Token',
    'users_api_tokens_expires' => 'Vyprší',
    'users_api_tokens_docs' => 'API Dokumentace',

    // API Tokens
    'user_api_token_create' => 'Vytvořit API Klíč',
    'user_api_token_name' => 'Název',
    'user_api_token_name_desc' => 'Zadejte srozumitelný název tokenu, který vám později může pomoci připomenout účel, za jakým jste token vytvářeli.',
    'user_api_token_expiry' => 'Platný do',
    'user_api_token_expiry_desc' => 'Zadejte datum, kdy platnost tokenu vyprší. Po tomto datu nebudou požadavky, které používají tento token, fungovat. Pokud ponecháte pole prázdné, bude tokenu nastavena platnost na dalších 100 let.',
    'user_api_token_create_secret_message' => 'Ihned po vytvoření tokenu Vám bude vygenerován a zobrazen "Token ID" a "Token Secret". Upozorňujeme, že "Token Secret" bude možné zobrazit pouze jednou, ujistěte se, že si jej poznamenáte a uložíte na bezpečné místo před tím, než budete pokračovat dále.',
    'user_api_token_create_success' => 'API klíč úspěšně vytvořen',
    'user_api_token_update_success' => 'API klíč úspěšně aktualizován',
    'user_api_token' => 'API Klíč',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Toto je neupravitelný systémový identifikátor generovaný pro tento klíč, který musí být uveden v API requestu.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Toto je systémem generovaný "secret" pro tento klíč, který musí být v API requestech. Toto bude zobrazeno pouze jednou, takže si uložte tuto hodnotu na bezpečné místo.',
    'user_api_token_created' => 'Token vytvořen :timeAgo',
    'user_api_token_updated' => 'Token aktualizován :timeAgo',
    'user_api_token_delete' => 'Odstranit Token',
    'user_api_token_delete_warning' => 'Tímto plně smažete tento API klíč s názvem \':tokenName\' ze systému.',
    'user_api_token_delete_confirm' => 'Opravdu chcete odstranit tento API klíč?',
    'user_api_token_delete_success' => 'API Klíč úspěšně odstraněn',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
