<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2015 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.40
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/lang/persian.php $
  $Revision: 8830 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Persian';
$lang_translation_info['lang_name_native'] = 'فارسی';
$lang_translation_info['lang_country_code'] = 'IR';
$lang_translation_info['trans_name'] = 'F.K.A';
$lang_translation_info['trans_email'] = 'gofteg@gmail.com';
$lang_translation_info['trans_website'] = '';
$lang_translation_info['trans_date'] = '2013-04-07';


$lang_charset = 'utf-8';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('بایت', ' کیلو بایت', ' مگا بایت', ' گیگا بایت ');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('یکشنبه', 'دوشنبه', 'سه شنبه', 'چهار شنبه', 'پنجشنبه', 'جمعه', 'شنبه');
$lang_month = array('ژانویه', 'فوریه', 'مارس', 'آوریل', 'مه', 'ژوئن', 'ژوئیه', 'اوت', 'سپتامبر', 'اکتبر', 'نوامبر', 'دسامبر');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B %Y';
$lang_date['lastcom'] = '%d/%m/%y ساعت %H:%M';
$lang_date['lastup'] = '%d %B %Y';
$lang_date['register'] = '%d %B %Y';
$lang_date['lasthit'] = '%d %B %Y ساعت %I:%M %p';
$lang_date['comment'] = '%d %B %Y ساعت %I:%M %p';
$lang_date['log'] = '%d %B %Y ساعت %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'تصاویر تصادفی';
$lang_meta_album_names['lastup'] = 'آخرین تصاویر';
$lang_meta_album_names['lastalb'] = 'آخرین آلبوم';
$lang_meta_album_names['lastcom'] = 'آخرین نظرات';
$lang_meta_album_names['topn'] = 'بیشترین بازدید';
$lang_meta_album_names['toprated'] = 'بالاترین امتیاز';
$lang_meta_album_names['lasthits'] = 'آخرین بازدید';
$lang_meta_album_names['search'] = 'نتیجه جستجوی تصاویر';
$lang_meta_album_names['album_search'] = 'نتیجه جستجوی آلبوم‌ها';
$lang_meta_album_names['category_search'] = 'نتیجه جستجوی موضوعات';
$lang_meta_album_names['favpics'] = 'تصاویر برگزیده';
$lang_meta_album_names['datebrowse'] = 'جستجو بر اساس تاریخ'; //cpg1.5

$lang_errors['access_denied'] = 'اجازه دسترسی به این صفحه را ندارید.';
$lang_errors['invalid_form_token'] = 'لطفا مجددا سعی کنید'; //cpg1.5
$lang_errors['perm_denied'] = 'اجازه انجام این کار را ندارید.';
$lang_errors['param_missing'] = 'اطلاعات برای انجام عملیات کافی نیست.';
$lang_errors['non_exist_ap'] = 'آلبوم/تصویر انتخابی وجود ندارد!';
$lang_errors['quota_exceeded'] = 'فضای تخصیص شده کامل است.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'فضای [quota]K برای شما در نظر گرفته شده، در حال حاضر تصاویرتان [space]K را اشغال کرده‌اند، بدین جهت افزودن این تصویر مقدور نیست.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'در هنگام استفاده از GD image library فقط فرمت JPEG و PNG مجاز خواهد بود.';
$lang_errors['invalid_image'] = 'خطا در بارگذاری یا فراخوانی تصویر توسط GD library';
$lang_errors['resize_failed'] = 'خطا در کوچک کردن یا تغییر اندازه تصویر.';
$lang_errors['no_img_to_display'] = 'چیزی وجود ندارد';
$lang_errors['non_exist_cat'] = 'موضوع انتخاب شده وجود ندارد';
$lang_errors['directory_ro'] = 'زیر شاخه  \'%s\' غیر قابل تغییر است، نمی‌توان تصویر را حذف کرد';
$lang_errors['pic_in_invalid_album'] = 'تصویر در آلبومی (%s) است که وجود ندارد!?';
$lang_errors['banned'] = 'در حال حاضر استفاده از این سایت برای شما ممنوع است.';
$lang_errors['offline_title'] = 'خارج از سرویس';
$lang_errors['offline_text'] = 'این گالری موقتا تعطیل است، بزودی باز خواهد شد';
$lang_errors['ecards_empty'] = 'در حال حاضر هیچ کارت پستالی برای نمایش وجود ندارد.';
$lang_errors['database_query'] = 'خطایی در زمان پردازش اجرای یکی از داده‌ها بوجود آمد';
$lang_errors['non_exist_comment'] = 'نظر انتخاب شده وجود ندارد';
$lang_errors['captcha_error'] = 'کد تصویری بدرستی وارد نشده است'; // cpg1.5
$lang_errors['login_needed'] = 'برای دسترسی به این صفحه باید %sثبت نام%s کنید یا %sوارد شوید%s'; // cpg1.5
$lang_errors['error'] = 'خطا'; // cpg1.5
$lang_errors['critical_error'] = 'خطای شاخص'; // cpg1.5
$lang_errors['access_thumbnail_only'] = ' فقط می‌توانید تصاویر بند انگشتی را مشاهده نمایید.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'اجازه مشاهده تصاویر در اندازه اصلی را ندارید.'; // cpg1.5
$lang_errors['access_none'] = 'اجازه دیدن هیچ تصویری را ندارید.'; // cpg1.5
$lang_errors['register_globals_title'] = 'ثبت نام عمومی (اختصاصی) فعال است!';// cpg1.5
$lang_errors['register_globals_warning'] = 'تنظیمات پی‌اچ‌پی register_globals روی سرور شما فعال است، که ایده نامناسبی از لحاظ امنیتی است. شدیدا توصیه می‌شود آن را غیر فعال کنید.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode راهنمای';
$lang_bbcode_help = 'استفاده از کدهای موجود برای نمایش بهتر نظرات:
 <li>[b]<b>توپر</b>[/b]</li> <li>[i]<i>خمیده</i>[/i]</li> <li>[url=http://yoursite.com/]متن لینک شده به سایت شما[/url]</li> <li>[email]نشانی ایمیل شما[/email]</li>';

$lang_common['yes'] = 'بله'; // cpg1.5
$lang_common['no'] = 'خیر'; // cpg1.5
$lang_common['back'] = 'برگشت'; // cpg1.5
$lang_common['continue'] = 'ادامه'; // cpg1.5
$lang_common['information'] = 'اطلاعات'; // cpg1.5
$lang_common['error'] = 'خطا'; // cpg1.5
$lang_common['check_uncheck_all'] = 'انتخاب/عدم انتخاب همگی'; // cpg1.5
$lang_common['confirm'] = 'لطفا کد نشان داده شده را وارد نمایید'; // cpg1.5
$lang_common['captcha_help_title'] = 'کد تصویری (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'برای جلوگیری از ارسال نظرات خودکار، لطفا کد نشان داده شده را وارد نمایید <br />اندازه حروف تاثیری ندارد و می‌توانید با حروف کوچک کد را وارد نمایید'; // cpg1.5
$lang_common['title'] = ' عنوان '; // cpg1.5
$lang_common['caption'] = 'توضیحات زیر تصویر'; // cpg1.5
$lang_common['keywords'] = 'کلمات کلیدی'; // cpg1.5
$lang_common['keywords_insert1'] = 'کلمات کلیدی (جدا کردن با %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'انتخاب از فهرست'; // cpg1.5
$lang_common['keyword_separator'] = 'جدا کننده کلمات کلیدی'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'فاصله', ','=>'ویرگول', ';'=>'نقطه ویرگول'); // cpg1.5
$lang_common['owner_name'] = 'نام فرستنده'; // cpg1.5
$lang_common['filename'] = ' تصویر '; // cpg1.5
$lang_common['filesize'] = 'حجم تصویر'; // cpg1.5
$lang_common['album'] = ' آلبوم '; // cpg1.5
$lang_common['file'] = ' تصویر '; // cpg1.5
$lang_common['date'] = 'تاریخ'; // cpg1.5
$lang_common['help'] = 'راهنما'; // cpg1.5
$lang_common['close'] = 'بستن'; // cpg1.5
$lang_common['go'] = 'ارسال'; // cpg1.5
$lang_common['javascript_needed'] = 'این صفحه نیازمند JavaScript است. لطفا JavaScript را فعال سازید.'; // cpg1.5
$lang_common['move_up'] = 'بطرف بالا'; // cpg1.5
$lang_common['move_down'] = 'بطرف پایین'; // cpg1.5
$lang_common['move_top'] = 'بطرف بالا'; // cpg1.5
$lang_common['move_bottom'] = 'بطرف پایین'; // cpg1.5
$lang_common['delete'] = 'حذف'; // cpg1.5
$lang_common['edit'] = 'ویرایش'; // cpg1.5
$lang_common['username_if_blank'] = 'ناشناس'; // cpg1.5
$lang_common['albums_no_category'] = 'آلبوم‌های بدون موضوع'; // cpg1.5
$lang_common['personal_albums'] = '* آلبوم‌های شخصی'; // cpg1.5
$lang_common['select_album'] = 'انتخاب آلبوم'; // cpg1.5
$lang_common['ok'] = 'ارسال'; // cpg1.5
$lang_common['status'] = 'وضعیت'; // cpg1.5
$lang_common['apply_changes'] = 'اجرای تغییرات'; // cpg1.5
$lang_common['done'] = 'Done'; // cpg1.5
$lang_common['album_properties'] = 'ویژگی‌های آلبوم'; // cpg1.5
$lang_common['parent_category'] = 'موضوع مادر'; // cpg1.5
$lang_common['edit_files'] = 'ویرایش تصاویر'; // cpg1.5
$lang_common['thumbnail_view'] = 'نمایش بند انگشتی'; // cpg1.5
$lang_common['album_manager'] = 'مدیریت آلبوم'; // cpg1.5
$lang_common['more'] = 'بیشتر'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'برو به صفحه اصلی';
$lang_main_menu['home_lnk'] = 'صفحه اصلی';
$lang_main_menu['alb_list_title'] = 'برو به آلبوم‌ها';
$lang_main_menu['alb_list_lnk'] = ' آلبوم‌ها';
$lang_main_menu['my_gal_title'] = 'برو به گالری شخصی من';
$lang_main_menu['my_gal_lnk'] = 'گالری من';
$lang_main_menu['my_prof_title'] = 'برو به نمایه شخصی من';
$lang_main_menu['my_prof_lnk'] = 'نمایه من';
$lang_main_menu['adm_mode_title'] = 'باز کردن بخش مدیریت'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'نمایش بخش مدیریت'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'بستن بخش مدیریت '; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'پنهان کردن بخش مدیریت'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'آپلود یک تصویر برای یک آلبوم';
$lang_main_menu['upload_pic_lnk'] = 'آپلود فایل';
$lang_main_menu['register_title'] = 'ایجاد حساب کاربری';
$lang_main_menu['register_lnk'] = 'ثبت نام';
$lang_main_menu['login_title'] = 'ورود به سایت';
$lang_main_menu['login_lnk'] = 'ورود';
$lang_main_menu['logout_title'] = 'خروج از سایت';
$lang_main_menu['logout_lnk'] = 'خروج';
$lang_main_menu['lastup_title'] = 'نمایش آخرین آپلودها';
$lang_main_menu['lastup_lnk'] = 'آخرین تصاویر اضافه شده';
$lang_main_menu['lastcom_title'] = 'نمایش آخرین نظرات';
$lang_main_menu['lastcom_lnk'] = 'آخرین نظرات';
$lang_main_menu['topn_title'] = 'نمایش تصاویر با بیشترین بازدید';
$lang_main_menu['topn_lnk'] = 'بیشترین بازدید';
$lang_main_menu['toprated_title'] = 'نمایش تصاویر با بیشترین امتیاز';
$lang_main_menu['toprated_lnk'] = 'بالاترین امتیاز';
$lang_main_menu['search_title'] = 'جستجوی این گالری';
$lang_main_menu['search_lnk'] = 'جستجو';
$lang_main_menu['fav_title'] = 'برو به برگزیده‌های من';
$lang_main_menu['fav_lnk'] = 'برگزیده‌های من';
$lang_main_menu['memberlist_title'] = 'نمایش فهرست اعضا';
$lang_main_menu['memberlist_lnk'] = 'فهرست اعضا';
$lang_main_menu['browse_by_date_lnk'] = 'بر اساس تاریخ'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'بر اساس تاریخ آپلود'; // cpg1.5
$lang_main_menu['contact_title'] = 'تماس با %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'تماس با مدیریت گالری'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'اضافه کردن سایدبار به مرورگر شما'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'سایدبار «نوار کناری»'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'تایید آپلودهای جدید';
$lang_gallery_admin_menu['upl_app_lnk'] = 'تایید آپلود';
$lang_gallery_admin_menu['admin_title'] = 'برو به پیکر بندی';
$lang_gallery_admin_menu['admin_lnk'] = 'پیکر بندی';
$lang_gallery_admin_menu['albums_title'] = 'برو به مدیریت آلبوم‌ها';
$lang_gallery_admin_menu['albums_lnk'] = 'آلبوم‌ها';
$lang_gallery_admin_menu['categories_title'] = 'برو به مدیریت موضوعات';
$lang_gallery_admin_menu['categories_lnk'] = 'موضوعات';
$lang_gallery_admin_menu['users_title'] = 'برو به مدیریت کاربران';
$lang_gallery_admin_menu['users_lnk'] = 'کاربران';
$lang_gallery_admin_menu['groups_title'] = 'بروه به مدیریت گروه‌های کاربری';
$lang_gallery_admin_menu['groups_lnk'] = 'مدیریت گروه‌های کاربری';
$lang_gallery_admin_menu['comments_title'] = 'نمایش همه نظرات';
$lang_gallery_admin_menu['comments_lnk'] = 'نمایش نظرات';
$lang_gallery_admin_menu['searchnew_title'] = 'برو به پردازش batch-add';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Batch و تصاویر';
$lang_gallery_admin_menu['util_title'] = 'برو به ابزار مدیریت';
$lang_gallery_admin_menu['util_lnk'] = 'ابزار مدیریت';
$lang_gallery_admin_menu['key_lnk'] = 'فرهنگ کلمات کلیدی';
$lang_gallery_admin_menu['ban_title'] = 'برو به کاربران محروم شده';
$lang_gallery_admin_menu['ban_lnk'] = 'کاربران محروم شده';
$lang_gallery_admin_menu['db_ecard_title'] = 'نمایش کارت‌های پستال';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'نمایش کارت‌های پستال';
$lang_gallery_admin_menu['pictures_title'] = 'مرتب کردن تصاویرم';
$lang_gallery_admin_menu['pictures_lnk'] = 'مرتب کردن تصاویر من';
$lang_gallery_admin_menu['documentation_lnk'] = 'مستندات';
$lang_gallery_admin_menu['documentation_title'] = 'راهنمای گالری';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'اطلاعات فنی جامع در مورد سرور شما. ممکن است هنگام  درخواست پشتیبانی ارائه این اطلاعات از شما خواسته شود.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'بروز رسانی داده‌ها'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'اگر در فایل‌های گالری کاپرماین تغییری ایجاد کنید، بهبودش دهید، یا نسخه قبلی‌اش را بروز کنید،  لازم است برای اجرای پایگاه داده‌ها یکبار آن را بروز کنید. این کار جداول مورد نیاز یا پیکربندی با ارزشی را در پایگاه داده‌های گالری شما ایجاد می‌کند.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'مشاهده فایل‌های ورود به سیستم'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'گالری قادر است به مسیر از عملیات مختلف انجام شده توسط کاربران را ذخیره کند. شما می‌توانید این گزارشات را مشاهده کنید، اگر  این مورد را در تنظیمات گالری فعال سازید.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'بررسی نسخه‌ها'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'بررسی نسخه فایل‌ها برای دانستن اینکه همگی پس از بروز رسانی تغییر کرده‌اند، و یا اگر فایلی در منبع کاپرماین پس از انتشار بسته جدید به روز شده است.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'مدیریت پل ارتباطی'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'فعال کردن/ غیر فعال کردن ادغام (پل زدن) گالری با نرم افزار‌های دیگر (به عنوان مثال BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'مدیریت پلاگین‌ها'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'مدیریت پلاگین‌ها'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'آمار کلی'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'نمایش آمار کلی بازدیدها توسط مرورگر و سیستم عامل (در صورتی که گزینه‌های مربوط در پیکربندی فعال شوند).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'مدیریت کلمات کلیدی'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'مدیریت کلمات کلیدی (در صورتی که گزینه‌های مربوط در پیکربندی فعال شوند).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF مدیریت'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'مدیریت نمایش EXIF  (در صورتی که گزینه‌های مربوط در پیکربندی فعال شوند).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'نمایش اخبار'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'نمایش اخبار از  coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'ایجاد و سفارشی کردن آلبوم‌های من';
$lang_user_admin_menu['albmgr_lnk'] = 'ایجاد/ سفارشی کردن آلبوم‌های من';
$lang_user_admin_menu['modifyalb_title'] = 'برو به بخش مدیریت آلبوم‌های من';
$lang_user_admin_menu['modifyalb_lnk'] = 'مدیریت آلبوم‌های من';
$lang_user_admin_menu['my_prof_title'] = 'برو به نمایه شخصی من';
$lang_user_admin_menu['my_prof_lnk'] = 'نمایه من';

$lang_cat_list['category'] = 'موضوع';
$lang_cat_list['albums'] = 'آلبوم';
$lang_cat_list['pictures'] = 'تصویر';

$lang_album_list['album_on_page'] = '%d آلبوم در %d صفحه';

$lang_thumb_view['date'] = 'تاریخ';
//Sort by filename and title
$lang_thumb_view['name'] = 'نام تصویر';
$lang_thumb_view['sort_da'] = 'تاریخ به ترتیب صعودی';
$lang_thumb_view['sort_dd'] = 'تاریخ به ترتیب نزولی';
$lang_thumb_view['sort_na'] = 'نام به ترتیب صعودی';
$lang_thumb_view['sort_nd'] = 'نام به ترتیب نزولی';
$lang_thumb_view['sort_ta'] = 'عنوان به ترتیب صعودی';
$lang_thumb_view['sort_td'] = 'عنوان به ترتیب نزولی';
$lang_thumb_view['position'] = 'موقعیت';
$lang_thumb_view['sort_pa'] = 'موقعیت به ترتیب صعودی';
$lang_thumb_view['sort_pd'] = 'موقعیت به ترتیب نزولی';
$lang_thumb_view['download_zip'] = 'دانلود بصورت فشرده Zip شده';
$lang_thumb_view['pic_on_page'] = '%d تصویر در %d صفحه';
$lang_thumb_view['user_on_page'] = '%d کاربر در %d صفحه';
$lang_thumb_view['enter_alb_pass'] = 'رمز آلبوم را وارد نمایید';
$lang_thumb_view['invalid_pass'] = 'رمز نادرست است';
$lang_thumb_view['pass'] = 'رمز';
$lang_thumb_view['submit'] = 'ثبت شود';
$lang_thumb_view['zipdownload_copyright'] = 'لطفا به کپی رایت احترام بگذارید-  از تصاویری که دانلود کرده‌اید فقط در چهارچوب تعیین شده مالک گالری استفاده کنید'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'این بایگانی شامل تصاویر فشرده شده از برگزیده‌های %s است'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'برگشت به صفحه تصاویر بند انگشتی';
$lang_img_nav_bar['pic_info_title'] = 'نمایش یا پنهان کردن اطلاعات تصویر';
$lang_img_nav_bar['slideshow_title'] = 'نمایش تصاویر پشت سر هم';
$lang_img_nav_bar['ecard_title'] = 'ارسال این تصویر بصورت کارت پستال برای یک دوست';
$lang_img_nav_bar['ecard_disabled'] = 'کارت پستال‌ها غیر فعالند';
$lang_img_nav_bar['ecard_disabled_msg'] = 'شما مجاز به ارسال کارت پستال نمی‌باشید'; // js-alert
$lang_img_nav_bar['prev_title'] = 'مشاهده تصویر قبلی';
$lang_img_nav_bar['next_title'] = 'مشاهده تصویر بعدی';
$lang_img_nav_bar['pic_pos'] = 'تصویر %s از %s';
$lang_img_nav_bar['report_title'] = 'گزارش اشکال این تصویر برای مدیریت سایت';
$lang_img_nav_bar['go_album_end'] = 'پایان';
$lang_img_nav_bar['go_album_start'] = 'از ابتدا';

$lang_rate_pic['rate_this_pic'] = 'ارزش گذاری این تصویر ';
$lang_rate_pic['no_votes'] = '(هنوز امتیازی نگرفته است)';
$lang_rate_pic['rating'] = '(رتبه بندی تا این زمان : %s ستاره از %s ستاره، توسط %s نفر)';
$lang_rate_pic['rubbish'] = 'بی‌ارزش';
$lang_rate_pic['poor'] = 'ضعیف';
$lang_rate_pic['fair'] = 'قابل قبول';
$lang_rate_pic['good'] = 'خوب';
$lang_rate_pic['excellent'] = 'عالی';
$lang_rate_pic['great'] = 'بی نظیر';
$lang_rate_pic['js_warning'] = 'برای رای دادن Javascript باید فعال باشد'; // cpg1.5
$lang_rate_pic['already_voted'] = 'قبلا به این تصویر رای داده‌اید.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'نیکوست که به خودتان رای ندهید.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'رتبه بندی این تصویر'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'تصویر: ';
$lang_cpg_die['line'] = 'خط: ';

$lang_display_thumbnails['dimensions'] = 'Size=';
$lang_display_thumbnails['date_added'] = 'زمان ارسال=';

$lang_get_pic_data['n_comments'] = '%s نظر';
$lang_get_pic_data['n_views'] = '%s بازدید';
$lang_get_pic_data['n_votes'] = '(%s رای)';

$lang_cpg_debug_output['debug_info'] = 'اطلاعات اشکال زدایی «دیباگ»';
$lang_cpg_debug_output['debug_output'] = 'خروجی اشکال زدایی'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'انتخاب همگی';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'اگر  درخواست راهنمایی از بخش پشتیبانی کاپرماین را دارید، خروجی اشکال زدایی «دیباگ» را در صورتی که خواسته شد کپی و همراه با پیغام خطا (در صورت وجود) ارسال کنید. فقط در صورتیکه واحد پشتیبانی از شما خواست debug_output را برای بخش پشتیبانی ارسال نمایید! قبل از ارسال اطمینان حاصل کنید که نشانه‌های *** را  جانشین هر گونه رمز عبور نموده‌اید.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'توجه: این فقط برای راهنمائی و اطلاعات و به این معنا نیست که خطا با گالری وجود دارد.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'مشاهده اطلاعات پی‌اچ‌پی';
$lang_cpg_debug_output['notices'] = 'نکته‌ها';
$lang_cpg_debug_output['notices_help_admin'] = 'نکاتی در این صفحه نمایش داده می‌شود زیرا شما (به عنوان مدیر گالری) این قابلیت را در پیکر بندی فعال ساخته‌اید. این الزاما به معنای وجود خطا در گالری شما نیست. در حقیقت، آن‌ها  ویژگی توسعه دهنده‌ای هستند که فقط برنامه نویسان ماهر قادر به ردیابی اشکالات می‌باشند. اگر این نکات مزاحم شما هستند یا ایده‌ای برای درک معنای آن‌ها ندارید، این قابلیت را در پیکربندی غیر فعال کنید..'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'نکات نمایش داده شده تعمدا توسط مدیر سایت فعال گشته است. این بدان معنی نیست که چیزی اشتباه است. شما با خیال راحت می‌​​توانید نکات نمایش داده شده را نادیده بگیرید.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'نمایش دادن/ پنهان نمودن'; // cpg1.5

$lang_language_selection['reset_language'] = 'زبان پیش فرض';
$lang_language_selection['choose_language'] = 'انتخاب زبان خودتان';

$lang_theme_selection['reset_theme'] = 'قالب پیش فرض';
$lang_theme_selection['choose_theme'] = 'انتخاب یک قالب';

$lang_version_alert['version_alert'] = 'نسخه پشتیبانی نشده!';
$lang_version_alert['no_stable_version'] = 'شما در حال استفاده از نسخه کاپرماین هستید که فقط برای کاربران ورزیده تدارک دیده شده است. این نسخه بدون پشتیبانی و ضمانت می‌باشد. از این نسخه که دارای ریسک بالا و پر مخاطره می‌باشد به مسئولیت خودتان استفاده کنید، و یا در صورت نیاز به پشتیبانی از آخرین نسخه پایدار استفاده نمایید!';
$lang_version_alert['gallery_offline'] = 'در حال حاضر گالری آفلاین است و فقط برای مدیران قابل مشاهده می‌باشد. فراموش نکنید پس از اتمام تعمیر و نگهداری آن را آنلاین کنید .';
$lang_version_alert['coppermine_news'] = 'اخبار از coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'مرورگر شما نمی‌تواند آیفریم‌ها را نمایش دهد'; // cpg1.5
$lang_version_alert['hide'] = 'پنهان کردن'; // cpg1.5

$lang_create_tabs['previous'] = 'قبلی'; // cpg1.5
$lang_create_tabs['next'] = 'بعدی'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'صفحه'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'No data returned using %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl در سرور شما در دسترس نیست'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'تعداد خطا: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'پیام خطا: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'حداقل یکی را ارائه دهید ';
$lang_mailer['mailer_not_supported'] = ' نامه رسان پشتیبانی نمی‌کند.';
$lang_mailer['execute'] = 'اجرا نمی‌شود: ';
$lang_mailer['instantiate'] = 'Could not instantiate mail function.';
$lang_mailer['authenticate'] = 'SMTP Error: Could not authenticate.';
$lang_mailer['from_failed'] = 'The following From address failed: ';
$lang_mailer['recipients_failed'] = 'SMTP Error: The following ';
$lang_mailer['data_not_accepted'] = 'خطای SMTP: اطلاعات پذیرفته نمی‌شوند.';
$lang_mailer['connect_host'] = 'خطای SMTP: ناتوان در اتصال با هاست SMTP.';
$lang_mailer['file_access'] = 'ناتوان در دسترسی به فایل: ';
$lang_mailer['file_open'] = 'خطای فایل: فایل باز نشد: ';
$lang_mailer['encoding'] = 'رمزگذاری ناشناخته: ';
$lang_mailer['signing'] = 'خطای ورود به سیستم: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'پلاگین نصب نمی‌شود \'%s\'';
$lang_plugin_api['error_uninstall'] = 'پلاگین حذف نمی‌شود \'%s\'';
$lang_plugin_api['error_sleep'] = 'پلاگین از کار نمی‌افتد \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'تعجب';
$lang_smilies_inc_php['Question'] = 'پرسش';
$lang_smilies_inc_php['Very Happy'] = 'خیلی شاد';
$lang_smilies_inc_php['Smile'] = 'خندان';
$lang_smilies_inc_php['Sad'] = 'غمگین';
$lang_smilies_inc_php['Surprised'] = 'متعجب';
$lang_smilies_inc_php['Shocked'] = 'هاج و واج';
$lang_smilies_inc_php['Confused'] = 'گیج';
$lang_smilies_inc_php['Cool'] = 'خونسرد';
$lang_smilies_inc_php['Laughing'] = 'قهقهه';
$lang_smilies_inc_php['Mad'] = 'عصبی';
$lang_smilies_inc_php['Razz'] = 'شوخ';
$lang_smilies_inc_php['Embarrassed'] = 'شرمگین'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'گریان';
$lang_smilies_inc_php['Evil or Very Mad'] = 'خشمگین';
$lang_smilies_inc_php['Twisted Evil'] = 'در حال انفجار';
$lang_smilies_inc_php['Rolling Eyes'] = 'حیران';
$lang_smilies_inc_php['Wink'] = 'چشمک';
$lang_smilies_inc_php['Idea'] = 'ایده';
$lang_smilies_inc_php['Arrow'] = 'پیکان';
$lang_smilies_inc_php['Neutral'] = 'عادی';
$lang_smilies_inc_php['Mr. Green'] = 'سبز';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'مدیریت آلبوم'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'آلبوم‌ها باید نامی داشته باشند!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'مطمئنید می‌خواهید این تغییرات انجام شود؟'; // js-alert
$lang_albmgr_php['no_change'] = 'تغییری انجام ندادید!'; // js-alert
$lang_albmgr_php['new_album'] = 'آلبوم جدید';
$lang_albmgr_php['delete_album'] = 'حذف آلبوم'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'مطمئنید می‌خواهید این آلبوم را حذف کنید؟'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'همه تصاویر و نظرات مرتبط از بین خواهند رفت!'; // js-alert
$lang_albmgr_php['select_first'] = 'ابتدا یک آلبوم انتخاب کنید'; // js-alert
$lang_albmgr_php['my_gallery'] = '* گالری من *';
$lang_albmgr_php['no_category'] = '* بدون موضوع *';
$lang_albmgr_php['select_category'] = 'انتخاب موضوع';
$lang_albmgr_php['category_change'] = 'اگر این موضوع را تغییر دهید، تغییرات شما از بین خواهند رفت!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'با متابعت از این لینک، تغییرات شما از بین خواهند رفت!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'لغو'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'مرتب سازی تغییرات تا زمانی که روی &quot;اجرای تغییرات&quot; کلیک نکرده‌اید ذخیره نخواهند شد.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'کاربران ممنوع شده';
$lang_banning_php['user_name'] = 'شناسه';
$lang_banning_php['user_account'] = 'حساب کاربری';
$lang_banning_php['email_address'] = 'ایمیل'; // cpg1.5
$lang_banning_php['ip_address'] = 'آی پی';
$lang_banning_php['expires'] = 'مقتضی'; // cpg1.5
$lang_banning_php['expiry_date'] = 'تاریخ انقضا'; // cpg1.5
$lang_banning_php['expired'] = 'منقضی'; // cpg1.5
$lang_banning_php['edit_ban'] = 'ذخیره تغییرات';
$lang_banning_php['add_new'] = 'اضافه کردن ممنوعیت جدید';
$lang_banning_php['add_ban'] = 'اضافه کردن';
$lang_banning_php['error_user'] = 'ناتوان در یافتن کاربر';
$lang_banning_php['error_specify'] = 'شما باید یا شناسه یا آی پی کاربر را مشخص کنید';
$lang_banning_php['error_ban_id'] = 'هویت ممنوع شده نادرست است!';
$lang_banning_php['error_admin_ban'] = 'نمی‌توانید خودتان را ممنوع کنید!';
$lang_banning_php['error_server_ban'] = 'شما می‌خواهید سرور خودتان را ممنوع کنید؟ نه نه نه نمی‌توانید...';
$lang_banning_php['skipping'] = 'صرفنظر از این فرمان.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'جستجوی آی پی';
$lang_banning_php['select_date'] = 'انتخاب تاریخ';
$lang_banning_php['delete_comments'] = 'حذف نظرات'; // cpg1.5
$lang_banning_php['current'] = 'فعلی'; // cpg1.5
$lang_banning_php['all'] = 'همه'; // cpg1.5
$lang_banning_php['none'] = 'نداده'; // cpg1.5
$lang_banning_php['view'] = 'نمایش'; // cpg1.5
$lang_banning_php['ban_id'] = 'هویت شخص ممنوع شده'; // cpg1.5
$lang_banning_php['existing_bans'] = 'ممنوع شده‌های موجود'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = ' در حال حاضر در حال اجرای پل زدن گالری خودتان به نرم افزار دیگری هستید. از مکانیسم ممنوعیت نرم افزار مورد نظر به جای نظام کاپرماین استفاده کنید.  مکانیزم ممنوعیت نظام کاپرماین هنگام پل زدن به سختی اعمال می‌شود.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d بایگانی در %d صفحه'; // cpg1.5
$lang_banning_php['ascending'] = 'به ترتیب صعودی'; // cpg1.5
$lang_banning_php['descending'] = 'به ترتیب نزولی'; // cpg1.5
$lang_banning_php['sort_by'] = 'ترتیب بر اساس'; // cpg1.5
$lang_banning_php['sorted_by'] = 'مرتب شده بر اساس'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'بایگانی ممنوعیت %s بروز شد'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'بایگانی ممنوعیت %s باطل شد'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'پیشینه ممنوعیت جدیدی ایجاد شد'; // cpg1.5New
$lang_banning_php['ban_record_x_already_exists'] = 'بایگانی ممنوعیت برای %s از قبل وجود دارد!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s نظر ارسال شده توسط %s حذف شد'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s تمامی نظرات ارسال شده توسط %s حذف شدند'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'ایمیل معتبری را وارد نمایید'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'آی پی معتبری را وارد نمایید (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'تاریخ را بدرستی وارد کنید (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'فرم ارسال نشد. خطایی وجود دارد که لازم است اصلاح شود!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'برنامه پل ارتباطی';
$lang_bridgemgr_php['back'] = 'برگشت';
$lang_bridgemgr_php['next'] = 'بعدی';
$lang_bridgemgr_php['start_wizard'] = 'آغاز برنامه پل ارتباطی';
$lang_bridgemgr_php['finish'] = 'پایان';
$lang_bridgemgr_php['no_action_needed'] = 'در این مرحله نیاز به انجام کاری نیست، فقط برای ادامه روی «بعدی» کلیک کنید.';
$lang_bridgemgr_php['reset_to_default'] = 'برگشت به مقدار پیش فرض';
$lang_bridgemgr_php['choose_bbs_app'] = 'یکی از برنامه‌ها را برای استفاده در کاپرماین انتخاب کنید';
$lang_bridgemgr_php['support_url'] = 'برای پشتیبانی گرفتن این برنامه به آنجا بروید';
$lang_bridgemgr_php['settings_path'] = 'مسیری که توسط برنامه ارتباطی شما بکار می‌رود';
$lang_bridgemgr_php['full_forum_url'] = 'نشانی برنامه ارتباطی';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'مسیر مستقل برنامه ارتباطی';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'مسیر مرتبط با  فایل پیکربندی برنامه ارتباطی';
$lang_bridgemgr_php['cookie_prefix'] = 'پیشوند کوکی';
$lang_bridgemgr_php['special_settings'] = 'تنظیمات ویژه برنامه ارتباطی';
$lang_bridgemgr_php['use_post_based_groups'] = 'استفاده گروه‌های سفارشی برنامه ارتباطی؟';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'بله';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'خیر';
$lang_bridgemgr_php['error_title'] = ' نیاز به اصلاح این اشتباهات قبل از ادامه کار دارید. به صفحه قبلی برگردید.';
$lang_bridgemgr_php['error_specify_bbs'] = 'باید مشخص کنید چه برنامه‌ای را می‌خواهید برای بکارگیری در کاپرماین نصب کنید.';
$lang_bridgemgr_php['finalize'] = 'فعال کردن یا نکردن پل ارتباطی';
$lang_bridgemgr_php['finalize_explanation'] = 'به هر حال تنظیماتی که مشخصنمودید در پایگاهداده‌ها نوشته شده است، اما هماهنگ ساز برنامه ارتباطی فعال نشده است. می‌توانید بعدا و در هر زمانی آن را فعال یا غیر فعال سازید. مطمئن شوید که شناسه و رمز عبور مدیریت گالری را در خاطر دارید، زیرا برای اعمال تغییرات بدان نیاز خواهید داشت. اگر مشکلی پیش آمد، به %s بروید و در آنجا پل ارتباطی را غیر فعال سازید، و برای این کار به حساب کاربری مدیریت (شناسه و رمزی که هنگام نصب گالری از آن استفاده نمودید) نیاز دارید.';
$lang_bridgemgr_php['your_bridge_settings'] = 'تنظیمات پل ارتباطی شما';
$lang_bridgemgr_php['title_enable'] = 'فعال کردن ادغام/ پل ارتباطی با %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'فعال';
$lang_bridgemgr_php['bridge_enable_no'] = 'غیر فعال';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'نباید خالی باشد';
$lang_bridgemgr_php['error_either_be'] = 'باید یا %s یا %s باشد';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s وجود ندارد. مقداری را که برای %s وارد نمودید تصحیح نمایید';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'گالری نمی‌تواند کوکی با نام %s بخواند. مقداری را که برای %s وارد نمودید تصحیح کنید، یا به پنل مدیریتی برنامه ارتباطی بروید و مطمئن شوید که مسیر این کوکی برای گالری قابل خواندن است.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'نمی‌توانید خانه %s را خالی بگذارید - مقادیر لازم را وارد نمایید.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'نباید علامت ممیز در انتهای خانه %s باشد.';
$lang_bridgemgr_php['error_trailing_slash'] = 'باید علامت ممیز در انتهای خانه %s باشد.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s و ';
$lang_bridgemgr_php['recovery_title'] = 'مدیریت پل ارتباطی: باز سازی اضطراری';
$lang_bridgemgr_php['recovery_explanation'] = 'اگر به اینجا برای مدیریت پل ارتباطی گالری آمدید، باید ابتدا در مقام مدیر وارد شوید. اگر نمی‌توانید وارد شوید بدلیل اینکه آنگونه که انتظار می‌رود پل ارتباطی کار نمی‌کند، می‌توانید با استفاده از این صفحه پل ارتباطی را غیر فعال سازید. وارد نمودن شناسه و رمز عبورتان شما را وارد نخواهد کرد، اما پل ارتباطی را غیر فعال می‌کند. برای اطلاعات بیشتر به مستندات مراجعه نمایید.';
$lang_bridgemgr_php['username'] = 'شناسه';
$lang_bridgemgr_php['password'] = 'رمز عبور';
$lang_bridgemgr_php['disable_submit'] = 'ارسال';
$lang_bridgemgr_php['recovery_success_title'] = 'شناسایی با موفقیت انجام شد';
$lang_bridgemgr_php['recovery_success_content'] = 'با موفقیت پل ارتباطی غیر فعال شد. گالری شما در حال حاضر بطور مستقل کار می‌کند.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'در مقام مدیر وارد شوید تا تنظیمات پل ارتباطی را ویرایش کنید یا آن را مجددا فعال سازید.';
$lang_bridgemgr_php['goto_login'] = 'برو به صفحه ورود';
$lang_bridgemgr_php['goto_bridgemgr'] = 'برو به مدیریت پل ارتباطی';
$lang_bridgemgr_php['recovery_failure_title'] = 'شناسایی موفق نبود';
$lang_bridgemgr_php['recovery_failure_content'] = 'اطلاعات وارد شده اشتباه است. باید اطلاعات حساب کاربری مدیریت نسخه مستقل را وارد نمایید (معمولا حساب کاربری که در هنگام نصب گالری استفاده شده است).';
$lang_bridgemgr_php['try_again'] = 'دوباره بکوشید';
$lang_bridgemgr_php['recovery_wait_title'] = 'زمان انتظار بپیان نرسیده است';
$lang_bridgemgr_php['recovery_wait_content'] = 'به دلایل امنیتی این اسکریپت اجازه ورود‌های نادرست به سیستم را نمی‌دهد، پس باید کمی صبر کنید تا زمانی‌که به شما اجازه تلاش مجدد داده شود.';
$lang_bridgemgr_php['wait'] = 'لطفا شکیبا باشید';
$lang_bridgemgr_php['browse'] = 'بگرد';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'تقویم';
$lang_calendar_php['clear_date'] = 'clear date';
$lang_calendar_php['files'] = 'تصاویر'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'پارامترهای مورد نیاز برای عملیات  \'%s\'  عرضه نشده است!';
$lang_catmgr_php['unknown_cat'] = 'موضوع انتخاب شده در پایگاه داده‌ها وجود ندارد';
$lang_catmgr_php['usergal_cat_ro'] = 'موضوع گالری‌های کاربر قابل حذف نیست!';
$lang_catmgr_php['manage_cat'] = 'مدیریت موضوعات';
$lang_catmgr_php['confirm_delete'] = 'آیا مطمئنید می‌خواهید این موضوع را حذف کنید؟'; // js-alert
$lang_catmgr_php['category'] = 'موضوعات'; // cpg1.5
$lang_catmgr_php['operations'] = 'عملیات';
$lang_catmgr_php['move_into'] = 'انتقال به';
$lang_catmgr_php['update_create'] = 'بروز رسانی/ ایجاد موضوع';
$lang_catmgr_php['parent_cat'] = 'موضوع مادر';
$lang_catmgr_php['cat_title'] = 'عنوان موضوع';
$lang_catmgr_php['cat_thumb'] = 'بند انگشتی موضوع';
$lang_catmgr_php['cat_desc'] = 'شرح موضوع';
$lang_catmgr_php['categories_alpha_sort'] = 'ترتیب الفبایی موضوع (بجای ترتیب سفارشی)';
$lang_catmgr_php['save_cfg'] = 'ذخیره تنظیمات';
$lang_catmgr_php['no_category'] = '* بدون موضوع *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'گروه کاربری اجازه ایجاد آلبوم در این موضوع را دارد'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'تماس با مدیریت'; // cpg1.5
$lang_contact_php['your_name'] = 'نام شما'; // cpg1.5
$lang_contact_php['your_email'] = 'ایمیل شما'; // cpg1.5
$lang_contact_php['subject'] = 'موضوع'; // cpg1.5
$lang_contact_php['your_message'] = 'پیام شما'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'لطفا نام خود را وارد نمایید'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'لطفا نام اصلی خود را وارد نمایید'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'لطفا ایمیل خود را وارد نمایید'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'لطفا ایمیل درستی را وارد نمایید'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'لطفا یک موضوع مناسب وارد نمایید'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'لطفا پیام خود را وارد نمایید'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'لطفا کد نشان داده شده را وارد نمایید'; // cpg1.5
$lang_contact_php['email_headline'] = 'این نامه در %s از سوی %s با آی پی %s فرستاده شد'; // cpg1.5
$lang_contact_php['registered_user'] = 'کاربر ثبت نام کرده'; // cpg1.5
$lang_contact_php['guest'] = 'بازدیدکننده'; // cpg1.5
$lang_contact_php['unknown'] = 'ناشناس'; // cpg1.5
$lang_contact_php['user_info'] = '%s نامبرده %s با ایمیل %s گفت:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'خطا در ارسال نامه! لطفا دوباره تلاش کنید.'; // cpg1.5
$lang_contact_php['email_sent'] = 'نامه شما ارسال شد.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'مدیریت گالری';
$lang_admin_php['general_settings'] = 'تنظیمات عمومی'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'تنظیم زبان و نویسه‌ها'; // cpg1.5
$lang_admin_php['themes_settings'] = 'تنظیم قالب‌ها'; // cpg1.5
$lang_admin_php['album_list_view'] = 'نمایش فهرست آلبوم‌ها'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'نمایش بند انگشتی'; // cpg1.5
$lang_admin_php['image_view'] = 'نمایش تصاویر'; // cpg1.5
$lang_admin_php['comment_settings'] = 'تنظیم نظرات'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'تنظیم بند انگشتی'; // cpg1.5
$lang_admin_php['file_settings'] = 'تنظیم تصاویر'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'نشان «واتر مارک» دار کردن تصاویر'; // cpg1.5
$lang_admin_php['registration'] = 'ثبت نام'; // cpg1.5
$lang_admin_php['user_settings'] = 'تنظیم کاربران'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'سفارشی کردن خانه‌ها برای نمایه کاربران ( در صورت استفاده نکردن خالی بگذارید). از نمایه ششم برای نوشته‌های طولانی مانند زندگی‌نامه استفاده شود'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'خانه‌های سفارشی برای توصیف تصاویر (در صورت استفاده نکردن خالی بگذارید)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'تنظیم کوکی‌ها'; // cpg1.5
$lang_admin_php['email_settings'] = 'تنظیمات ایمیل (معمولا به تغییر نیازی نیست؛ تمام خانه‌ها را خالی بگذارید وقتی مطمئن نیستید)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'گزارش‌ها و آمار'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'تنظیم نگهداری و تعمیر'; // cpg1.5
$lang_admin_php['manage_exif'] = 'مدیریت نمایش EXIF';
$lang_admin_php['manage_plugins'] = 'مدیریت پلاگین‌ها';
$lang_admin_php['manage_keyword'] = 'مدیریت کلمات کلیدی';
$lang_admin_php['restore_cfg'] = 'بازگشت به حالت پیش فرض';
$lang_admin_php['restore_cfg_confirm'] = 'آیا واقعا می‌خواهید تمامی تنظیمات را به پیش فرض اولیه برگردانید؟ این عمل برگشت ناپذیر است!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'ذخیره تغییرات جدید';
$lang_admin_php['notes'] = 'نکته‌ها';
$lang_admin_php['info'] = 'اطلاعات';
$lang_admin_php['upd_success'] = 'تنظیماتئ گالری بروز شد';
$lang_admin_php['restore_success'] = 'تنظیمات پیش فرض گالری بازسازی شد';
$lang_admin_php['name_a'] = 'نام به ترتیب صعودی';
$lang_admin_php['name_d'] = 'نام به ترتیب نزولی';
$lang_admin_php['title_a'] = 'عنوان به ترتیب صعودی';
$lang_admin_php['title_d'] = 'عنوان به ترتیب نزولی';
$lang_admin_php['date_a'] = 'تاریخ به ترتیب صعودی';
$lang_admin_php['date_d'] = 'تاریخ به ترتیب نزولی';
$lang_admin_php['pos_a'] = 'موقعیت به ترتیب صعودی';
$lang_admin_php['pos_d'] = 'موقعیت به ترتیب نزولی';
$lang_admin_php['th_any'] = 'حداکثر بعد';
$lang_admin_php['th_ht'] = 'ارتفاع';
$lang_admin_php['th_wd'] = 'عرض';
$lang_admin_php['th_ex'] = 'دقیق'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'هر کسی';
$lang_admin_php['debug_admin'] = 'فقط مدیران';
$lang_admin_php['no_logs'] = 'خاموش';
$lang_admin_php['log_normal'] = 'عادی';
$lang_admin_php['log_all'] = 'همه';
$lang_admin_php['view_logs'] = 'نمایش گزارشات';
$lang_admin_php['click_expand'] = 'برای باز شدن همگی کلیک کنید';
$lang_admin_php['click_collapse'] = 'روی نام بخش‌ها کلیک کنید تا باز شوند'; // cpg1.5
$lang_admin_php['expand_all'] = 'باز کردن همه';
$lang_admin_php['toggle_all'] = 'تغییر وضعیت همه'; // cpg1.5
$lang_admin_php['notice1'] = '(*) این تنظیمات نباید تغییر کند اگر پیش از این فایل‌هایی در پایگاه داده‌هایتان داشته باشید.';
$lang_admin_php['notice2'] = '(**)  وقتی این تنظیمات را تغییر می‌دهید، تنها فایل‌هایی که از آن زمان به بعد اضافه شده‌اند تحت تاثیر قرار می‌گیرند، بنابراین بهتر است اگر در حال حاضر فایلی در گالری وجود دارد این تنظیمات تغییری نکند . با این وجود می‌توانید برای تغییر در فایل‌های موجود از امکانات «<a href="util.php">ابزار مدیریت</a> (بروز کردن یا تغییر اندازه تصاویر)» در بخش مدیریت استفاده کنید.';
$lang_admin_php['notice3'] = '(***) تمامی فایل‌های گزارشات به انگلیسی است.';
$lang_admin_php['bbs_disabled'] = 'هنگام استفاده از پل ارتباطی/ ادغام تابع غیر فعال است';
$lang_admin_php['auto_resize_everyone'] = 'همه';
$lang_admin_php['auto_resize_user'] = 'فقط کاربران';
$lang_admin_php['ascending'] = 'صعودی';
$lang_admin_php['descending'] = 'نزولی';
$lang_admin_php['collapse_all'] = 'بستن همگی'; // cpg1.5
$lang_admin_php['separate_page'] = 'در صفحه جداگانه'; // cpg1.5
$lang_admin_php['inline'] = 'میان خطوط'; // cpg1.5
$lang_admin_php['guests_only'] = 'فقط بازدیدکنندگان'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'پایین راست'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'پایین چپ'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'بالا چپ'; // cpg1.5
$lang_admin_php['wm_topright'] = 'بالا راست'; // cpg1.5
$lang_admin_php['wm_center'] = 'مرکز'; // cpg1.5
$lang_admin_php['wm_both'] = 'هر دو'; // cpg1.5
$lang_admin_php['wm_original'] = 'اصلی'; // cpg1.5
$lang_admin_php['wm_resized'] = 'تغییر اندازه شده'; // cpg1.5
$lang_admin_php['gallery_name'] = 'نام گالری'; // cpg1.5
$lang_admin_php['gallery_description'] = 'توصیف گالری'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'ایمیل مدیریت گالری'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'نشانی پوشه گالری شما'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(با علامت ممیز«/»، بدون  \'index.php\'  یا مشابه آن در پایان)'; // cpg1.5
$lang_admin_php['home_target'] = 'نشانی صفحه اصلی سایت شما'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'اجازه دانلود زیپ شده برای برگزیده‌ها'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'فقط برای برگزیده‌ها'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'برگزیده‌ها و فایل‌های خواندنی'; // cpg1.5
$lang_admin_php['time_offset'] = 'تفاوت منطقه زمانی نسبت به GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(زمان کنونی: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'فعال کردن آیکن راهنما'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'بخشی از راهنما فقط در زبان انگلیسی در دسترس است'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'قابل کلیک کردن کلمات کلیدی در جستجو'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'جدا  کننده کلمات کلیدی'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'تغییر جدا  کننده کلمات کلیدی'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'فعال کردن پلاگین‌ها'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'بطور خودکار ممنوعیت منقضی شده پاک شود'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'قابل جستجو کردن میانجی batch-add'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'قابل جستجو کردن میانجی batch-add'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'مشاهده پیش نمایش تصاویر بند انگشتی در میانجی batch-add'; // cpg1.5
$lang_admin_php['lang'] = 'زبان پیش فرض'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'انتخاب خودکار زبان'; // cpg1.5
$lang_admin_php['charset'] = 'رمز گذاری نویسه‌ها'; // cpg1.5
// 'previous_next_tab'] = 'نمایش قبلی/بعدی در صفحات جدول‌ بندی‌ شده'; // cpg1.5
$lang_admin_php['theme'] = 'قالب'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'نام لینک منوی سفارشی'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'نشانی لینک منوی سفارشی'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'نمایش آیکن‌های منو'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'نمایش راهنمای BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'To highlight multiple lines, hold the [Ctrl]-key down'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'مسیر محتوای بالای صفحه سفارشی'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'مسیر محتوای پایین صفحه سفارشی'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'قابلیت جستجو بر اساس تاریخ'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'نمایش صفحات تغییر مسیر'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'ترویج استفاده از XP Publisher بوسیله نمایش لینک مربوطه در صفحه آپلود'; // cpg1.5
$lang_admin_php['main_table_width'] = 'عرض جدول اصلی'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'پیکسل یا درصد'; // cpg1.5
$lang_admin_php['subcat_level'] = 'تعداد سطوح موضوعات برای نمایش'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'تعداد آلبوم‌ها برای نمایش'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'تعداد ستون‌های فهرست آلبوم‌ها'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'اندازه بند انگشتی‌های آلبوم‌ها'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'محتوای صفحه اصلی'; // cpg1.5
$lang_admin_php['first_level'] = 'نمایش تصاویر بند انگشتی اولین سطح آلبوم در موضوعات'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'مرتب کردن موضوعات به ترتیب الفبا'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(بجای ترتیب سفارشی)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'نمایش تعداد تصاویر لینک شده'; // cpg1.5
$lang_admin_php['thumbcols'] = 'تعداد ستون‌ها در صفحه بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['thumbrows'] = 'تعداد ردیف‌ها در صفحه بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['max_tabs'] = 'حداکثر تعداد زبانه‌ها برای نمایش'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'نمایش لیست کرکره‌ای همه صفحات نزدیک به زبانه‌ها'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'نمایش توضیحات تصویر (علاوه بر عنوان) زیر بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'نمایش تعداد بازدیدها زیر بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'نمایش تعداد نظرات زیر بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['display_uploader'] = 'نمایش نام آپلود کننده زیر بند انگشتی‌ها'; // cpg1.5
// 'display_admin_uploader'] = 'نمایش نام مدیر آپلود کنندگان زیر بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['display_filename'] = 'نمایش نام تصویر زیر بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'نمایش رتبه بندی زیر بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'نمایش شرح آلبوم'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'یکراست رفتن از تصاویر بند انگشتی‌ به تصاویر در اندازه اصلی'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'پیش فرض ترتیب برای تصاویر'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'حداقل تعداد آرای یک تصویر برای ظاهر شدن در فهرست «بالاترین امتیاز»'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'عرض جدول برای نمایش تصاویر'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'اطلاعات تصویر بطور پیش فرض نشان داده شود'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'نمایش لینک دانلود فیلم در ناحیه اطلاعات تصویر'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'حداکثر طول برای شرح تصاویر'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'حداکثر تعداد حروف در یک کلمه'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'نمایش نوار فیلم'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'تعداد تصاویر در نوار فیلم'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'فاصله نمایش پشت سر هم'; // cpg1.5
$lang_admin_php['milliseconds'] = 'میلی ثانیه'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = 'یک ثانیه = هزار میلی ثانیه'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'شمارش بازدید‌ها در نمایش پشت سر هم'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'اجازه فلش در کارت پستال'; // cpg1.5
$lang_admin_php['not_recommended'] = 'توصیه نمی‌شود'; // cpg1.5
$lang_admin_php['recommended'] = 'توصیه می‌شود'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'قرار دادن یک پوشش شفاف برای به حداقل رساندن سرقت تصویر'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'برگشت به سیستم رتبه بندی قدیمی'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'این کار گزینه «تعداد ستاره‌های رای گیری استفاده شده» را غیر فعال می‌کند'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'تعداد ستاره‌های رای گیری برای استفاده هنگام رتبه بندی'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'کاربران می‌توانند به تصاویر خودشانرای دهند'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'فیلتر کردن کلمات زشت در نظرات'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'اجازه خندانک‌ها در نظرات'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'اجازه ارسال پشت سر هم چندین نظر توسط یک کاربر زیر یک تصویر'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(برای حفاظت از سیل نظرات غیرفعال باشد)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'حداکثر تعداد خطوط در یک نظر'; // cpg1.5
$lang_admin_php['max_com_size'] = 'حداکثر طول یک نظر'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'آگاه کردن مدیریت از نظرات توسط ایمیل'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'ترتیب نظرات'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'نظرات در هر صفحه'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'پیشوند برای نویسنده ناشناس نظرات'; // cpg1.5
$lang_admin_php['comment_approval'] = 'نظرات نیاز به تایید دارند'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'فقط نمایش نظراتی که نیاز به تایید دارند در صفحه «نمایش نظرات»'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'نمایش نگاهدارنده متن پایان کار کاربران برای نظرات در انتظار تایید مدیریت'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'اجازه به کاربران برای ویرایش نظرات خودشان'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'نمایش کپتچا (کد تصویری) برای نظرات اضافه شده'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'گزینه‌های اکیسمت'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'اگر اکیسمت بدلیل اسپم نظری را نپذیرفت چه کاری انجام شود؟'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'گزینه‌ها فقط زمانی اجرا می‌شوند که اکیسمت با وارد کردن یک کلید API معتبر فعال شده باشد
'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'اجازه به نظراتی که موفق نشده‌اند از اکیسمت عبور کنند، اما نشان تایید نشده خورده‌اند'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'نظری که موفق به کسب اعتبار نشده‌ است کم شود، و به نویسنده آن‌ گفته شود که آن نظر پذیرفته نشده است'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'نظری که موفق به کسب اعتبار نشده‌ است کم شود، اما به نویسنده آن‌ (اسپمگر) گفته شود که آن نظر پذیرفته شده است'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'کلید API اکیسمت'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'برای غیر فعال کردن اکیسمت خالی بگذارید'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'اعمال اکیسمت برای نظرات ایجاد شده توسط '; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'تقاضا از بازدید کنندگان برای وارد شدن جهت ارسال نظر '; // cpg1.5
$lang_admin_php['thumb_width'] = 'حداکثر ابعاد برای بند انگشتی‌ها (عرض، اگر «دقیق» را در «استفاده از ابعاد» انتخاب کرده‌اید)'; // cpg1.5
$lang_admin_php['thumb_use'] = 'استفاده از ابعاد'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(عرض یا ارتفاع یا حداکثر بعد برای بند انگشتی ها)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'ارتفاع یک تصویر بند انگشتی'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(تنها زمانی اجرا می‌شود که «دقیق» را از «استفاده از ابعاد»انتخاب کرده باشید)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'فیلم، صدا، سند'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'پیشوند برای تصاویر بند انگشتی'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: enable Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening amount'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'کیفیت تصاویر JPEG'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'ایجاد تصاویر میانی'; // cpg1.5
$lang_admin_php['picture_use'] = 'استفاده از ابعاد'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(عرض یا ارتفاع یا حداکثر بعد برای یک تصویر میانی)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'مانند بند انگشتی‌ها'; // cpg1.5
$lang_admin_php['picture_width'] = 'حداکثر عرض یا ارتفاع یک تصویر میانی'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'حداکثر اندازه برای آپلود تصاویر'; // cpg1.5
$lang_admin_php['kilobytes'] = 'کیلو بایت'; // cpg1.5
$lang_admin_php['pixels'] = 'پیکسل'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'حداکثر عرض یا ارتفاع برای تصاویر آپلود شده'; // cpg1.5
$lang_admin_php['auto_resize'] = 'تغییر خودکار اندازه تصاویری که بزرگتر از حداکثر عرض یا ارتفاع می‌باشد'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'padding افقی برای پاپ اپ‌های تمام قد'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'padding عمودی برای پاپ اپ‌های تمام قد'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'آلبوم می‌تواند خصوصی باشد'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(نکته: اگر از «بله» به «خیر» تغییر دادید همه آلبوم‌های خصوصی قابل مشاهده خواهند شد)'; // cpg1.5
$lang_admin_php['show_private'] = 'نمایش آیکن آلبوم خصوصی برای کاربران وارد نشده'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'نشانه‌های ممنوع در نام تصویر'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'فعال کردن حالت سطحی ایمن'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'انواع تصویر مجاز'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'انواع فیلم مجاز'; // cpg1.5
$lang_admin_php['media_autostart'] = 'شروع خودکار پخش فیلم'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'انواع فایل صوتی مجاز'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'انواع سند مجاز'; // cpg1.5
$lang_admin_php['thumb_method'] = 'شیوه تغییر اندازه تصاویر'; // cpg1.5
$lang_admin_php['impath'] = 'مسیر برنامه مفید «تبدیل» ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(eg. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'گزینه های اضافی در خط فرمان برای ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Read EXIF data from JPEG files'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Read IPTC data from JPEG files'; // cpg1.5
$lang_admin_php['fullpath'] = 'مسیر آلبوم'; // cpg1.5
$lang_admin_php['userpics'] = 'مسیر برای تصاویر کاربران'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'پیشوند برای تصاویر میانی'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'حالت پیش فرض برای مسیرها'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'حالت پیش فرض برای فایل‌ها'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'واترمارک دار کردن تصاویر'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'واترمارک دار کردن سفارشی بندانگشتی‌ها'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'کجای تصویر اترمارک گذاشته شود'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'کدام تصاویر واترمارک دار شوند'; // cpg1.5
$lang_admin_php['watermark_file'] = 'کدام تصویر برای واترمارک استفاده شود'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'شفافیت برای تمام تصویر'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'کوچک کردن واترمارک اگر عرض تصویر کوچکتر از مقدار وارد شده است. این مقدار  100٪ نقطه مرجع است. تغییر اندازه واترمارک 0 برای غیر فعال کردن است'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'تنظیم شفافیت رنگ x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'تنظیم شفافیت رنگ y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'فقط GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'اجازه ثبت نام کاربران جدید'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'رمز عبور عمومی (اختصاصی) هنگام ثبت نام'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'نمایش محدوده مسئولیت‌ها موقع ثبت نام کاربران'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'نمایش کپتچا (کد تصویری) در صفحه ثبت نام'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'ثبت نام کاربران نیاز به ایمیل تاییدیه دارد'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'آگاه کردن مدیر از ثبت نام کاربران توسط ایمیل'; // cpg1.5
$lang_admin_php['admin_activation'] = 'فعال کردن ثبت نام توسط مدیریت'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'ایجاد آلبوم برای کاربران در گالری شخصی هنگام ثبت نام'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'اجازه دسترسی به کاربران وارد نشده (بازدیدکنندگان یا افراد ناشناس)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'تصاویر بند انگشتی، میانی و اندازه واقعی'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'تصاویر بند انگشتی و میانی'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'فقط بند انگشتی'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'شیوه آپلود پیش فرض'; // cpg1.5
$lang_admin_php['upload_swf'] = 'پیشرفته - چند فایل، فلش (توصیه شده)'; // cpg1.5
$lang_admin_php['upload_single'] = 'ساده - یک تصویر در یک زمان'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'اجازه به کاربران برای انتخاب شیوه آپلود'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'اجازه به داشتن یک ایمیل برای دو کاربر'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'آگاه کردن مدیران از در انتظار تایید بودن آپلود کاربران'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'اجازه به کاربران وارد شده برای مشاهده فهرست اعضا'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'اجازه به کاربران برای تغییر ایمیل در نمایه خودشان'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'اجازه به کاربران برای حذف حساب کاربری خودشان'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'اجازه به کاربران برای حفظ کنترل تصاویر خودشان در گالری‌های عمومی'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'اجازه به کاربران برای جابجا کردن آلبوم‌هایشان در موضوعات مجاز'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'اجازه به کاربران برای تعیین کلمات کلیدی آلبوم'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'اجازه به کاربران برای ویرایش آلبوم خودشان هنگامی که در موضوعی قفل شده قرار دارد'; // cpg1.5
$lang_admin_php['login_method_username'] = 'با شناسه'; // cpg1.5
$lang_admin_php['login_method_email'] = 'با ایمیل'; // cpg1.5
$lang_admin_php['login_method_both'] = 'هر دو'; // cpg1.5
$lang_admin_php['login_method'] = 'چگونه می‌خواهید کاربرانتان وارد شوند'; // cpg1.5
$lang_admin_php['login_threshold'] = 'تعداد تلاش ناموفق ورود تا زمان ممنوعیت موقت '; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(برای جلوگیری از توان تاخت و تازهای بی‌رحمانه)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'زمان ممنوعیت موقت پس از تلاش‌های ناموفق ورود'; // cpg1.5
$lang_admin_php['minutes'] = 'دقیقه'; // cpg1.5
$lang_admin_php['report_post'] = 'فعال کردن ارسال گزارش برای مدیریت'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'نام مشخصات اول'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'نام مشخصات دوم'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'نام مشخصات سوم'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'نام مشخصات چهارم'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'نام مشخصات پنجم'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'نام مشخصات ششم'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'نام خانه اول'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'نام خانه دوم'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'نام خانه سوم'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'نام خانه چهارم'; // cpg1.5
$lang_admin_php['cookie_name'] = 'نام کوکی'; // cpg1.5
$lang_admin_php['cookie_path'] = 'مسیر کوکی'; // cpg1.5
$lang_admin_php['smtp_host'] = 'هاست SMTP (هنگامی که خالی باشد از sendmail استفاده می‌شود)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'شناسه SMTP '; // cpg1.5
$lang_admin_php['smtp_password'] = 'رمز عبور SMTP'; // cpg1.5
$lang_admin_php['log_mode'] = 'نمای گزارشات'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'تمامی گزارش‌ها به انگلیسی نوشته شده است.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'گزارش کارت پستال‌ها'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'توجه: گزارشات می‌توانند پیامدهای قانونی داشته باشند. کاربران باید هنگام ثبت نام آگاه باشند که از کارت پستال‌ها گزارش تهیه می‌شود. توصیه می‌شود صفحه جداگانه‌ای با خط مشی حریم خصوصی فراهم شود.'; // cpg1.5
$lang_admin_php['vote_details'] = 'نگهداری آمار جزئیات رای‌ها'; // cpg1.5
$lang_admin_php['hit_details'] = 'نگهداری آمار جزئیات بازدیدها'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'نمایش آمار در صفحه اصلی'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'نمایش شمارش نظرات'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'نمایش شمارش آلبوم‌ها'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'نمایش بازدید مدیریت'; // cpg1.5
$lang_admin_php['debug_mode'] = 'فعال کردن نمای اشکال زدایی «دیباگ»'; // cpg1.5
$lang_admin_php['debug_notice'] = 'نمایش نکات در نمای دیباگ'; // cpg1.5
$lang_admin_php['offline'] = 'گالری تعطیل است'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'نمایش اخبار coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'فقط برای مدیریت به نمایش در می‌اید'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'تنظیم شما برای &laquo;%s&raquo; ذخیره شد.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'تنظیم فرم تماس'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'نمایش خانه تماس برای بازدیدکنندگان ناشناس'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'نمایش خانه تماس برای کاربران ثبت نام کرده'; // cpg1.5
$lang_admin_php['with_captcha'] = 'با کپتچا'; // cpg1.5
$lang_admin_php['without_captcha'] = 'بدون کپتچا'; // cpg1.5
$lang_admin_php['optional'] = 'اختیاری'; // cpg1.5
$lang_admin_php['mandatory'] = 'اجباری'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'نمایش خانه نام برای بازدیدکنندگان'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'نمایش خانه ایمیل فرستنده برای بازدیدکنندگان'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'نمایش خانه موضوع'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'سطر موضوع برای ایمیل ایجاد شده توسط فرم تماس '; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'استفاده از ایمیل فرستنده بجای «از سوی»'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'مجاز، اما بدون نمایش لینک'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'مجاز و ترویج آن توسط نمایش یک لینک'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'سایدبار برای کاربران ثبت نام شده'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'سایدبار برای بازدیدکنندگان'; // cpg1.5
$lang_admin_php['do_not_change'] = 'این قسمت را تغییر ندهید، مگر آنکه دقیقا می‌دانید چه می‌خواهید بکنید!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'برگشت به پیش فرض'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'نیازی به تغییر نیست، گزینه‌های پیکربندی روی پیش فرض تنظیم شده‌اند'; // cpg1.5
$lang_admin_php['enabled'] = 'فعال شده'; // cpg1.5
$lang_admin_php['disabled'] = 'disabled'; // cpg1.5
$lang_admin_php['none'] = 'ندارد'; // cpg1.5
$lang_admin_php['warning_change'] = 'وقتی این تنظیمات را تغییر می‌دهید، تنها فایل‌هایی که از آن زمان به بعد اضافه شده‌اند تحت تاثیر قرار می‌گیرند، بنابراین بهتر است اگر در حال حاضر فایلی در گالری وجود دارد این تنظیمات تغییری نکند. با این وجود می‌توانید برای تغییر در فایل‌های موجود از امکانات «ابزار مدیریت (بروز کردن یا تغییر اندازه تصاویر)» در بخش مدیریت استفاده کنید.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'این تنظیمات نمی‌تواند تغییری ایجاد کند اگر پیش از این فایل‌هایی در پایگاه داده‌هایتان داشته باشید.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'فقط منو'; // cpg1.5
$lang_admin_php['everywhere'] = 'هر جا'; // cpg1.5
$lang_admin_php['manage_languages'] = 'مدیریت زبان‌ها'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Form token lifetime'; // cpg1.5
$lang_admin_php['seconds'] = 'ثانیه'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'نمایش تنظیم مجدد جعبه‌ها در پیکربندی'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'نیازی به بروز رسانی نبود.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'کارت پستال‌های ارسال شده';
$lang_db_ecard_php['ecard_sender'] = 'فرستنده';
$lang_db_ecard_php['ecard_recipient'] = 'گیرنده';
$lang_db_ecard_php['ecard_date'] = 'تاریخ';
$lang_db_ecard_php['ecard_display'] = 'نمایش کارت پستال';
$lang_db_ecard_php['ecard_name'] = 'نام';
$lang_db_ecard_php['ecard_email'] = 'ایمیل';
$lang_db_ecard_php['ecard_ip'] = 'آی پی';
$lang_db_ecard_php['ecard_ascending'] = 'به ترتیب صعودی';
$lang_db_ecard_php['ecard_descending'] = 'به ترتیب نزولی';
$lang_db_ecard_php['ecard_sorted'] = 'مرتب شده';
$lang_db_ecard_php['ecard_by_date'] = 'بر اساس تاریخ';
$lang_db_ecard_php['ecard_by_sender_name'] = 'بر اساس نام فرستنده';
$lang_db_ecard_php['ecard_by_sender_email'] = 'بر اساس ایمیل فرستنده';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'بر اساس آی‌ پی فرستنده';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'بر اساس نام گیرنده';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'بر اساس ایمیل گیرنده';
$lang_db_ecard_php['ecard_number'] = 'نمایش سابقه %s از %s تا %s';
$lang_db_ecard_php['ecard_goto_page'] = 'برو به صفحه';
$lang_db_ecard_php['ecard_records_per_page'] = 'سابقه در هر صفحه';
$lang_db_ecard_php['check_all'] = 'انتخاب همه';
$lang_db_ecard_php['uncheck_all'] = 'عدم انتخاب همه';
$lang_db_ecard_php['ecards_delete_selected'] = 'حذف کارت پستال انتخاب شده';
$lang_db_ecard_php['ecards_delete_confirm'] = 'آیا مطمئنید می‌خواهید این سابقه پاک شود؟ چک‌باکس را علامت بزنید!';
$lang_db_ecard_php['ecards_delete_sure'] = 'مطمئنم';
$lang_db_ecard_php['invalid_data'] = 'داده‌ها برای کارت پستالی که در حال تلاش برای دسترسی به آن هستید توسط سرویس پست الکترونیکی شما تباه شده است.  لینک کامل را بازبینی کنید.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'نام یا پیام وارد نشده است';
$lang_db_input_php['com_added'] = 'پیام شما ثبت شد'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'باید عنوانی را برای آلبوم مشخص کنید!';
$lang_db_input_php['no_udp_needed'] = 'نیازی به بروز رسانی نیست.';
$lang_db_input_php['alb_updated'] = 'آلبوم بروز شد';
$lang_db_input_php['unknown_album'] = 'آلبوم انتخاب شده وجود ندارد یا مجوز آپلود در آن را ندارید';
$lang_db_input_php['no_pic_uploaded'] = 'تصویری آپلود نشد!<br /> اگر تصویری را برای آپلود انتخاب کرده‌اید، بررسی کنید که آیا سرور اجازه آپلود کردن را می‌دهد...';
$lang_db_input_php['err_mkdir'] = 'ناتوان در ایجاد مسیر %s!';
$lang_db_input_php['dest_dir_ro'] = 'مسیر مقصد %s توسط این اسکریپت غیر قابل نوشتن است!';
$lang_db_input_php['err_move'] = 'حرکت %s به %s غیر ممکن است!';
$lang_db_input_php['err_fsize_too_large'] = 'اندازه تصویری که قصد آپلودش را دارید بیش از اندازه است «حداکثر مقدار مجاز %s x %s می‌باشد)!';
$lang_db_input_php['err_imgsize_too_large'] = 'اندازه تصویری که آپلود نموده‌اید بیش از حد بزرگ است (حداکثر مجاز %s کیلو بایت می‌باشد)!';
$lang_db_input_php['err_invalid_img'] = 'فایلی که آپلود کرده‌اید تصویری سالمی نمی‌باشد!';
$lang_db_input_php['allowed_img_types'] = 'شما فقط %s تصویر می‌توانید آپلود کنید.';
$lang_db_input_php['err_insert_pic'] = 'The file \'%s\' can\'t be inserted in the album ';
$lang_db_input_php['upload_success'] = 'فایل شما با موفقیت آپلود شد. <br />پس از تایید مدیریت قابل مشاهده خواهد بود.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - ابلاغ آپلود';
$lang_db_input_php['notify_admin_email_body'] = 'تصویری توسط  %s آپلود شده است که نیاز به تایید شما دارد. مشاهده  %s';
$lang_db_input_php['info'] = 'اطلاعات';
$lang_db_input_php['com_updated'] = 'نظر بروز شد'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'آلبوم بروز شد';
$lang_db_input_php['err_comment_empty'] = 'پیامی ننوشتید!';
$lang_db_input_php['err_invalid_fext'] = 'فایل‌هایی با پسوند‌های زیر پذیرفته می‌شوند:'; // js-alert
$lang_db_input_php['no_flood'] = 'با پوزش، قبلا نظری برای این تصویر ارسال کرده‌اید.<br />اگر مایلید تغییری در نظر پیشین خود اعمال کنید، لطفا همان نظر را ویرایش نمایید!';
$lang_db_input_php['redirect_msg'] = ' در حال انتقال هستید.<br /><br /> اگر این صفحه بطور خودکار تغییر نکرد لطفا روی «ادامه» کلیک کنید';
$lang_db_input_php['upl_success'] = 'تصویر شما با موفقیت افزوده شد';
$lang_db_input_php['email_comment_subject'] = 'نظرات ارسال شده برای گالری';
$lang_db_input_php['email_comment_body'] = 'شخصی نظری در گالری شما ارسال نموده است. آن را ببینید در';
$lang_db_input_php['album_not_selected'] = 'آلبومی انتخاب نشده است';
$lang_db_input_php['com_author_error'] = 'این نام قبلا ثبت شده است، اگر متعلق به شماست با آن وارد شوید، در غیر این صورت نام دیگری انتخاب کنید';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'تصویر اصلی'; // cpg1.5
$lang_delete_php['fs_pic'] = 'اندازه کامل تصویر';
$lang_delete_php['del_success'] = 'با موفقیت حذف شد';
$lang_delete_php['ns_pic'] = 'انداز طبیعی تصویر';
$lang_delete_php['err_del'] = 'ناتوان در حذف';
$lang_delete_php['thumb_pic'] = 'بند انگشتی';
$lang_delete_php['comment'] = 'نظر';
$lang_delete_php['im_in_alb'] = 'تصویر در آلبوم';
$lang_delete_php['alb_del_success'] = 'آلبوم «%s» حذف شد';
$lang_delete_php['alb_mgr'] = 'مدیریت آلبوم';
$lang_delete_php['err_invalid_data'] = 'دریافت داده‌های نادرست در \'%s\'';
$lang_delete_php['create_alb'] = 'ایجاد آلبوم \'%s\'';
$lang_delete_php['update_alb'] = 'بروز کردن آلبوم \'%s\' با عنوان \'%s\' و فهرست \'%s\'';
$lang_delete_php['del_pic'] = 'حذف تصویر';
$lang_delete_php['del_alb'] = 'حذف آلبوم';
$lang_delete_php['del_user'] = 'حذف کاربر';
$lang_delete_php['err_unknown_user'] = 'کاربر انتخاب شده موجود نیست!';
$lang_delete_php['err_empty_groups'] = 'جدول گروه وجود ندارد یا خالی است!';
$lang_delete_php['comment_deleted'] = 'نظر با موفقیت پاک شد';
$lang_delete_php['npic'] = 'تصویر';
$lang_delete_php['pic_mgr'] = 'مدیریت تصاویر';
$lang_delete_php['update_pic'] = 'تصویر آپلود شده \'%s\' با نام \'%s\' و فهرست \'%s\'';
$lang_delete_php['username'] = 'شناسه';
$lang_delete_php['anonymized_comments'] = '%s نظر ناشناس';
$lang_delete_php['anonymized_uploads'] = '%s آپلود عمومی ناشناس';
$lang_delete_php['deleted_comments'] = '%s نظر حذف شد';
$lang_delete_php['deleted_uploads'] = '%s آپلود عمومی حذف شد';
$lang_delete_php['user_deleted'] = 'کاربر %s حذف شد';
$lang_delete_php['activate_user'] = 'کاربر فعال';
$lang_delete_php['user_already_active'] = 'حساب کاربری در حال حاضر فعال است';
$lang_delete_php['activated'] = 'فعال شده';
$lang_delete_php['deactivate_user'] = 'کاربر غیر فعال';
$lang_delete_php['user_already_inactive'] = 'حساب کاربری در حال حاضر غیر فعال است';
$lang_delete_php['deactivated'] = 'غیر فعال شده';
$lang_delete_php['reset_password'] = 'برگرداندن رمز عبور';
$lang_delete_php['password_reset'] = 'برگرداندن رمز عبور برای %s';
$lang_delete_php['change_group'] = 'تغییر گروه کاربری اولیه';
$lang_delete_php['change_group_to_group'] = 'تغییر از %s به %s';
$lang_delete_php['add_group'] = 'افزودن گروهکاربری ثانویه';
$lang_delete_php['add_group_to_group'] = 'افزودن کاربر %s به گروه %s. او اینک عضو %s به عنوان عضو گروه اولیه و عضو %s به عنوان عضو گروه ثانویه می‌باشد.';
$lang_delete_php['status'] = 'وضعیت';
$lang_delete_php['updating_album'] = 'آپلود شدن آلبوم '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'تغییر مکان تصویر %s به محل %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'آیا مطمئنید می‌خواهید این تصویر حذف شود؟\\nنظرات نیز  حذف خواهند شد.'; // js-alert
$lang_display_image_php['del_pic'] = 'حذف این تصویر';
$lang_display_image_php['size'] = '%s در %s پیکسل';
$lang_display_image_php['views'] = '%s بازدید';
$lang_display_image_php['slideshow'] = 'نمایش تصاویر پشت سر هم';
$lang_display_image_php['stop_slideshow'] = 'پایان نمایش';
$lang_display_image_php['view_fs'] = 'برای مشاهده تصویر در اندازه اصلی کلیک کنید';
$lang_display_image_php['edit_pic'] = 'ویرایش اطلاعات تصویر';
$lang_display_image_php['crop_pic'] = 'برش و چرخش';
$lang_display_image_php['set_player'] = 'تغییر پخش کننده';

$lang_picinfo['title'] = 'اطلاعات تصویر';
$lang_picinfo['Album name'] = 'نام آلبوم';
$lang_picinfo['Rating'] = 'رتبه بندی (%s رای)';
$lang_picinfo['Date Added'] = 'زمان ارسال';
$lang_picinfo['Dimensions'] = 'اندازه تصویر';
$lang_picinfo['Displayed'] = 'دفعات بازدید شده';
$lang_picinfo['URL'] = 'نشانی';
$lang_picinfo['Make'] = 'Make';
$lang_picinfo['Model'] = 'مدل';
$lang_picinfo['DateTime'] = 'Date Time';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'حداکثر دیافراگم';
$lang_picinfo['FocalLength'] = 'Focal length';
$lang_picinfo['Comment'] = 'نظر';
$lang_picinfo['addFav'] = 'افزودن به برگزیده‌ها';
$lang_picinfo['addFavPhrase'] = 'برگزیده‌ها';
$lang_picinfo['remFav'] = 'حذف از برگزیده‌ها';
$lang_picinfo['iptcTitle'] = 'IPTC Title';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Keywords';
$lang_picinfo['iptcCategory'] = 'IPTC Category';
$lang_picinfo['iptcSubCategories'] = 'IPTC Sub Categories';
$lang_picinfo['ColorSpace'] = 'Color Space';
$lang_picinfo['ExposureProgram'] = 'برنامه نور دهی';
$lang_picinfo['Flash'] = 'فلش';
$lang_picinfo['MeteringMode'] = 'Metering Mode';
$lang_picinfo['ExposureTime'] = 'زمان نور دهی';
$lang_picinfo['ExposureBiasValue'] = 'جهت نور دهی';
$lang_picinfo['ImageDescription'] = 'Image Description';
$lang_picinfo['Orientation'] = 'Orientation';
$lang_picinfo['xResolution'] = 'X Resolution';
$lang_picinfo['yResolution'] = 'Y Resolution';
$lang_picinfo['ResolutionUnit'] = 'Resolution Unit';
$lang_picinfo['Software'] = 'نرم افزار';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'نسخه EXIF';
$lang_picinfo['DateTimeOriginal'] = 'DateTime Original';
$lang_picinfo['DateTimedigitized'] = 'DateTime digitized';
$lang_picinfo['ComponentsConfiguration'] = 'Components Configuration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Compressed Bits Per Pixel';
$lang_picinfo['LightSource'] = 'Light Source';
$lang_picinfo['ISOSetting'] = 'تنظیمات ISO';
$lang_picinfo['ColorMode'] = 'Color Mode';
$lang_picinfo['Quality'] = 'کیفیت';
$lang_picinfo['ImageSharpening'] = 'Image Sharpening';
$lang_picinfo['FocusMode'] = 'Focus Mode';
$lang_picinfo['FlashSetting'] = 'تنظیمات فلش';
$lang_picinfo['ISOSelection'] = 'ISO Selection';
$lang_picinfo['ImageAdjustment'] = 'Image Adjustment';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Manual Focus Distance';
$lang_picinfo['DigitalZoom'] = 'زوم دیجیتال (بزرگنمایی نرم افزاری)';
$lang_picinfo['AFFocusPosition'] = 'AF Focus Position';
$lang_picinfo['Saturation'] = 'Saturation';
$lang_picinfo['NoiseReduction'] = 'Noise Reduction';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Version';
$lang_picinfo['ExifImageWidth'] = 'عرض تصویر EXIF';
$lang_picinfo['ExifImageHeight'] = 'ارتفاع تصویر EXIF';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'File Source';
$lang_picinfo['SceneType'] = 'Scene Type';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Exposure Mode';
$lang_picinfo['WhiteBalance'] = 'تعادل سفیدی';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom Ratio';
$lang_picinfo['SceneCaptureMode'] = 'Scene Capture Mode';
$lang_picinfo['GainControl'] = 'Gain Control';
$lang_picinfo['Contrast'] = 'کنتراست';
$lang_picinfo['Sharpness'] = 'وضوح';
$lang_picinfo['ManageExifDisplay'] = 'مدیریت نمایش EXIF';
$lang_picinfo['success'] = 'اطلاعات با موفقیت بروز شد.';
$lang_picinfo['show_details'] = 'نمایش جزییات'; // cpg1.5
$lang_picinfo['hide_details'] = 'پنهان کردن جزییات'; // cpg1.5
$lang_picinfo['download_URL'] = 'لینک مستقیم';
$lang_picinfo['movie_player'] = 'پخش این فایل در نرم افزار استاندارد شما';

$lang_display_comments['comment_x_to_y_of_z'] = '%d به %d از %d'; // cpg1.5
$lang_display_comments['page'] = 'صفحه'; // cpg1.5
$lang_display_comments['edit_title'] = 'ویرایش این نظر';
$lang_display_comments['delete_title'] = 'حذف این نظر'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'آیا مطمئن هستید می‌خواهید این نظر حذف شود؟'; // js-alert
$lang_display_comments['add_your_comment'] = 'لطفا نظرتان را در مورد این تصویر بیان کنید';
$lang_display_comments['name'] = 'نام';
$lang_display_comments['comment'] = 'نظر';
$lang_display_comments['your_name'] = 'نام شما';
$lang_display_comments['report_comment_title'] = 'گزارش اشکال در مورد این نظر برای مدیریت سایت';
$lang_display_comments['pending_approval'] = 'نظر پس از تایید مدیریت سایت قابل مشاهده همگانی خواهد بود'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'نظر تایید نشده'; // cpg1.5
$lang_display_comments['pending_approval_message'] = ' نظری برای اینجا ارسال شده است. این نظر پس از تایید مدیریت قابل رویت خواهد بود.'; // cpg1.5
$lang_display_comments['approve'] = 'تایید نظر'; // cpg1.5
$lang_display_comments['disapprove'] = 'علامت گذاری نظر تایید نشده'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'نظرات ناشناس مجاز نیست برای ارسال نظر %sوارد%s شوید'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'لطفا برای نظر دادن نامتان وارد نمایید'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'نظر شما رد شده است';  // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'برای بستن این پنجره روی تصویر کلیک کنید';
$lang_fullsize_popup['close_window'] = 'بستن پنجره'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //


if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'ارسال کارت پستال';
$lang_ecard_php['invalid_email'] = 'خطا: لطفا ایمیل را بدرستی وارد نمایید!:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'کارت پستالی از %s تقدیم به شما';
$lang_ecard_php['error_not_image'] = 'فقط تصاویر می‌توانند بصورت کارت پستال ارسال می شوند.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'فقط تصاویر و فلش می‌توانند بصورت کارت پستال ارسال شوند.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'لینک جایگزین، اگر کارت پستال بدرستی نشان داده نشود';
$lang_ecard_php['view_ecard_plaintext'] = 'برای نمایش کارت پستال، نشانی را کپی و در مرورگر خود وارد نمایید:';
$lang_ecard_php['view_more_pics'] = 'نمایش تصاویر بیشتر!';
$lang_ecard_php['send_success'] = 'کارت پستال شما ارسال شد';
$lang_ecard_php['send_failed'] = 'با تاسف سرور قادر به ارسال کارت پستال نمی‌باشد';
$lang_ecard_php['from'] = 'از سوی';
$lang_ecard_php['your_name'] = 'نام شما';
$lang_ecard_php['your_email'] = 'ایمیل شما';
$lang_ecard_php['to'] = 'به';
$lang_ecard_php['rcpt_name'] = 'نام گیرنده';
$lang_ecard_php['rcpt_email'] = 'ایمیل گیرنده';
$lang_ecard_php['greetings'] = 'عنوان';
$lang_ecard_php['message'] = 'پیام';
$lang_ecard_php['ecards_footer'] = 'اهدا شده توسط %s با آی پی %s در تاریخ %s (به وقت گالری)';
$lang_ecard_php['preview'] = 'پیش نمایش این کارت پستال';
$lang_ecard_php['preview_button'] = 'پیش نمایش';
$lang_ecard_php['submit_button'] = 'ارسال کارت پستال';
$lang_ecard_php['preview_view_ecard'] = 'این صفحه اگر ارسال شود جایگزین لینک این کارت پستال خواهد بود. این صفحه برای پیش نمایش کار نخواهد کرد.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'ارسال گزارش برای مدیریت ';
$lang_report_php['invalid_email'] = '<strong>اخطار</strong> : ایمیل نادرست!';
$lang_report_php['report_subject'] = 'گزارشی از «%s» در مورد «%s»';
$lang_report_php['view_report'] = 'لینک جایگزین اگر گزارش بدرستی نشان داده نشد';
$lang_report_php['view_report_plaintext'] = 'برای مشاهده گزارش، این نشانی را کپی و در نوار نشانی مرورگر خود وارد نمایید:';
$lang_report_php['view_more_pics'] = 'گالری';
$lang_report_php['send_success'] = 'گزارش شما ارسال شد';
$lang_report_php['send_failed'] = 'با پوزش سرور نمی‌تواند درخواست شما را ارسال کند';
$lang_report_php['from'] = 'از';
$lang_report_php['your_name'] = 'نام شما';
$lang_report_php['your_email'] = 'ایمیل شما';
$lang_report_php['to'] = 'به';
$lang_report_php['administrator'] = 'مدیریت';
$lang_report_php['subject'] = 'موضوع';
$lang_report_php['comment_field_name'] = 'گزارش در مورد نظر «%s»';
$lang_report_php['reason'] = 'دلیل';
$lang_report_php['message'] = 'پیام';
$lang_report_php['report_footer'] = 'اهدا شده توسط %s با آی پی %s در تاریخ %s (به وقت گالری)';
$lang_report_php['obscene'] = 'زشت';
$lang_report_php['offensive'] = 'اهانت آمیز';
$lang_report_php['misplaced'] = 'بی‌ربط / خارج از موضوع';
$lang_report_php['missing'] = 'ناپیدا';
$lang_report_php['issue'] = 'خطا/ غیر قابل مشاهده';
$lang_report_php['other'] = 'غیره';
$lang_report_php['refers_to'] = 'گزارش در مورد ';
$lang_report_php['reasons_list_heading'] = 'دلیل گزارش:';
$lang_report_php['no_reason_given'] = 'دلیلی مشاهده نشد';
$lang_report_php['go_comment'] = 'برو به نظر';
$lang_report_php['view_comment'] = 'نمایش گزارش کامل همراه نظر';
$lang_report_php['type_file'] = 'یک تصویر';
$lang_report_php['type_comment'] = 'یک نظر';
$lang_report_php['invalid_data'] = 'داده‌ها برای این گزارشی که شما در حال تلاش برای دسترسی به آن هستید توسط  سرویس گیرنده پست الکترونیکی شما تباه شده است. لینک کامل را بازبینی کنید.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'اطلاعات مربوط به تصویر';
$lang_editpics_php['desc'] = 'شرح';
$lang_editpics_php['approval'] = 'تایید'; //cpg 1.5
$lang_editpics_php['approved'] = 'تایید شده'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'تایید نشده'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'کلمات کلیدی جدید';
$lang_editpics_php['new_keywords'] = 'کلمات کلیدی جدید پیدا شد';
$lang_editpics_php['existing_keyword'] = 'کلمات کلیدی موجود';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s کیلو بایت - %s بازدید - %s رای';
$lang_editpics_php['approve'] = 'تایید تصویر';
$lang_editpics_php['postpone_app'] = 'در انتظار تایید';
$lang_editpics_php['del_pic'] = 'حذف تصویر';
$lang_editpics_php['del_all'] = 'حذف تمامی تصاویر';
$lang_editpics_php['read_exif'] = 'بازخوانی اطلاعات EXIF';
$lang_editpics_php['reset_view_count'] = 'صفر کردن بازدیدها';
$lang_editpics_php['reset_all_view_count'] = 'صفر کردن همه بازدیدها';
$lang_editpics_php['reset_votes'] = 'صفر کردن آرا';
$lang_editpics_php['reset_all_votes'] = 'حذف تمامی رای‌ها';
$lang_editpics_php['del_comm'] = 'حذف نظرات';
$lang_editpics_php['del_all_comm'] = 'حذف تمامی نظرات';
$lang_editpics_php['upl_approval'] = 'تایید آپلود';
$lang_editpics_php['edit_pics'] = 'ویرایش تصاویر';
$lang_editpics_php['edit_pic'] = 'ویرایش تصویر'; // cpg 1.5
$lang_editpics_php['see_next'] = 'مشاهده تصاویر بعدی';
$lang_editpics_php['see_prev'] = 'مشاهده تصاویر قبلی';
$lang_editpics_php['n_pic'] = '%s تصویر';
$lang_editpics_php['n_of_pic_to_disp'] = 'تعداد تصاویر برای نمایش';
$lang_editpics_php['crop_title'] = 'Coppermine ویرایشگر تصاویر';
$lang_editpics_php['preview'] = 'پیش نمایش';
$lang_editpics_php['save'] = 'ذخیره تصویر';
$lang_editpics_php['save_thumb'] = 'ذخیره بصورت بند انگشتی';
$lang_editpics_php['gallery_icon'] = 'این را آیکن «نماد» من کن';
$lang_editpics_php['sel_on_img'] = 'The selection has to be entirely on the image!'; // js-alert
$lang_editpics_php['album_properties'] = 'ویژگی‌های آلبوم';
$lang_editpics_php['parent_category'] = 'موضوع مادر';
$lang_editpics_php['thumbnail_view'] = 'نمایش بند انگشتی';
$lang_editpics_php['select_unselect'] = 'انتخاب کردن یا نکردن همگی';
$lang_editpics_php['file_exists'] = 'فایل مقصد \'%s\' از قبل وجود دارد.';
$lang_editpics_php['rename_failed'] = 'ناتوان در تغییر نام \'%s\' به \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'فایل منبع \'%s\' گمشضده است.';
$lang_editpics_php['mime_conv'] = 'ناتوان در تغییر فایل از \'%s\' به \'%s\'';
$lang_editpics_php['forb_ext'] = 'فرمت ممنوعه فایل.';
$lang_editpics_php['error_editor_class'] = 'Editor class for your resize method not implemented'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'سند بدون عرض یا ارتفاع'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'تصویر با موفقیت ذخیره شد - می‌توانید این پنجره را %sببندید%s'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'تصویر بند انگشتی با موفقیت ذخیره شد - می‌توانید این پنجره را %sببندید%s'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'چرخش'; // cpg 1.5
$lang_editpics_php['mirror'] = 'آینه'; // cpg 1.5
$lang_editpics_php['scale'] = 'مقیاس'; // cpg 1.5
$lang_editpics_php['new_width'] = 'عرض جدید'; // cpg 1.5
$lang_editpics_php['new_height'] = 'ارتفاع جدید'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'فعال کردن برش، اجرای برش'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'کیفیت خروجیJPEG '; // cpg 1.5
$lang_editpics_php['or'] = 'یا'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'تایید تصویر'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'تایید تمامی تصاویر'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'آلبوم خالی است'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'ممنوعیت تصاویر بیشتری برای تایید'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album only contains linked files, which you cannot edit here'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Files moved to a public album must be approved by an admin.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Files moved to a private gallery album must be approved by an admin.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Files moved to a public album cannot be edited.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'مطمئنید می‌خواهید این فایل را جابجا کنید؟'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'تغییرات با موفقیت ذخیره شدند'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'یادآوری رمز عبور';
$lang_forgot_passwd_php['err_already_logged_in'] = 'شما هم اکنون وارد شده‌اید!';
$lang_forgot_passwd_php['enter_email'] = 'ایمیل خود را وارد کنید';
$lang_forgot_passwd_php['submit'] = 'ارسال';
$lang_forgot_passwd_php['illegal_session'] = 'رمز نادرست است یا مدت زمان این نشست به پایان رسیده است.';
$lang_forgot_passwd_php['failed_sending_email'] = 'امکان ارسال نامه یادآوری رمز وجود ندارد!';
$lang_forgot_passwd_php['email_sent'] = 'نامه‌ای همراه شناسه شما و رمز عبور جدید به %s ارسال شد';
$lang_forgot_passwd_php['verify_email_sent'] = 'نامه‌ای به %s فرستاه شد. لطفا برای کامل کردن پروسه ایمیل خود را چک کنید.';
$lang_forgot_passwd_php['err_unk_user'] = 'کاربر انتخاب شده وجود ندارد!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - درخواست رمز عبور جدید';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - رمز عبور جدید شما';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
شما تقاضای رمز عبور جدیدی کرده‌اید. اگر می خواهید رمز عبور جدیدی برای شما ارسال شود، لطفا روی لینک زیر کلیک نمایید:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


با احترام

مدیریت {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
رمز جدید درخواستی شما:

شناسه: {USER_NAME}
رمز عبور: {PASSWORD}

برای ورود به سایت <a href="{SITE_LINK}">{SITE_LINK}</a> وارد شوید.


با احترام

مدیریت {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'مدیریت گروه‌های کاربری'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'گروه‌های کاربری';
$lang_groupmgr_php['permissions'] = 'مجوز‌ها';
$lang_groupmgr_php['public_albums'] = 'ایجاد آلبوم عمومی';
$lang_groupmgr_php['personal_gallery'] = 'گالری شخصی';
$lang_groupmgr_php['disk_quota'] = 'سهمیه';
$lang_groupmgr_php['rating'] = 'رتبه بندی';
$lang_groupmgr_php['ecards'] = 'کارت پستال‌ها';
$lang_groupmgr_php['comments'] = 'نظرات';
$lang_groupmgr_php['allowed'] = 'اجازه دارد';
$lang_groupmgr_php['approval'] = 'تاییدیه';
$lang_groupmgr_php['create_new_group'] = 'ایجاد گروه جدید';
$lang_groupmgr_php['del_groups'] = 'حذف گروه انتخاب شده';
$lang_groupmgr_php['confirm_del'] = 'اخطار، هنگامی یک گروه را حذف می‌کنید، کاربران متعلق به آن گروه به گروه \'Registered\' منتقل خواهند شد!\n\n آیا می‌خواهید این کار انجام شود؟'; // js-alert
$lang_groupmgr_php['title'] = 'مدیریت گروه کاربران';
$lang_groupmgr_php['reset_to_default'] = 'برگشت به نام پیش فرض (%s) - توصیه شده!';
$lang_groupmgr_php['error_group_empty'] = 'جدول گروه خالی است!<br />گروه‌های پیش فرض ایجاد شدند، لطفا این صفحه را مجدد بارگذاری نمایید';
$lang_groupmgr_php['explain_greyed_out_title'] = 'چرا این ردیف رنگ باخته است؟';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'شما نمی‌توانید ویژگی‌های این گروه را تغییر دهید زیرا سطح دسترسی این گروه «هیچکدام» است. تمامی کاربران وارد نشده (اعضای گروه %s) نمی‌توانند بجز ورود کاری انجام دهند؛ بنابراین تنظیمات گروه نمی‌تواند اجرا شود. سطح دسترسی را اینجا یا در پیکربندی گالری زیر «تنظیم کاربران»، «اجازه دسترسی به کاربران وارد نشده» تغییر دهید.';
$lang_groupmgr_php['group_assigned_album'] = 'آلبوم‌های اختصاص یافته';
$lang_groupmgr_php['access_level'] = 'سطح دسترسی'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'تصاویر بند انگشتی و میانی و اندازه اصلی'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'تصاویر بند انگشتی و میانی'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'فقط تصاویر بند انگشتی'; // cpg1.5
$lang_groupmgr_php['none'] = 'هیچکدام'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'خوش آمدید!';

$lang_album_admin_menu['confirm_delete'] = 'آیا مطمئنید می‌خواهید این آلبوم را حذف کنید؟\\n تمامی تصاویر و نظرات نیز حذف خواهند شد.'; // js-alert
$lang_album_admin_menu['delete'] = 'حذف';
$lang_album_admin_menu['modify'] = 'ویژگی‌ها';
$lang_album_admin_menu['edit_pics'] = 'ویرایش تصویر';
$lang_album_admin_menu['cat_locked'] = 'این آلبوم برای ویرایش قفل شده است'; // cpg1.5.x

$lang_list_categories['home'] = 'صفحه اصلی';
$lang_list_categories['stat1'] = '[pictures] تصویر در [albums] آلبوم با [cat] موضوع، [comments] نظر ارسال شده، [views] بازدید'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] تصویر در [albums] آلبوم [views] بازدید'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'گالری %s';
$lang_list_categories['stat3'] = '[pictures] تصویر در [albums] آلبوم با [comments] نظر ارسال شده [views] بازدید'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'فهرست کاربران';
$lang_list_users['no_user_gal'] = 'گالری کاربری وجود ندارد';
$lang_list_users['n_albums'] = '%s آلبوم';
$lang_list_users['n_pics'] = '%s تصویر';

$lang_list_albums['n_pictures'] = '%s تصویر';
$lang_list_albums['last_added'] = '، آخرین ارسال %s';
$lang_list_albums['n_link_pictures'] = '%s تصاویر مرتبط';
$lang_list_albums['total_pictures'] = '%s تمام تصاویر';
$lang_list_albums['alb_hits'] = 'بازدید از این آلبوم %s بار'; // cpg1.5
$lang_list_albums['from_category'] = ' - از موضوع: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'The installer has already been successfully run once and is now locked.';
$lang_install['already_succ_explain'] = 'If you want to run the installer again, you first need to delete the \'include/config.inc.php\' file that was created in the directory where you put Coppermine. You can do this with any FTP program';
$lang_install['cant_read_tmp_conf'] = 'The installer can\'t read the temporary config file %s.';
$lang_install['cant_write_tmp_conf'] = 'The installer can\'t write the temporary config file %s.';
$lang_install['review_permissions'] = 'Please review directory permissions.';
$lang_install['change_lang'] = 'تغییر زبان';
$lang_install['check_path'] = 'Check path';
$lang_install['continue'] = 'گام بعدی';
$lang_install['conv_said'] = 'The convert program said:';
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:';
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.';
$lang_install['license'] = 'Coppermine license agreement';
$lang_install['create_table'] = 'Creating table \'%s\'';
$lang_install['db_populating'] = 'Trying to insert data in the database.';
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.';
$lang_install['dir_ok'] = 'Directory found';
$lang_install['directory'] = 'Directory';
$lang_install['email'] = 'Email address';
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.';
$lang_install['email_verif'] = 'Verify email';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Finish installation';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Go to the main page';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Path to ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'The installer is locked';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['mysql_create_btn'] = 'Create';
$lang_install['mysql_create_db'] = 'Create new MySQL database';
$lang_install['mysql_db_name'] = 'MySQL database name';
$lang_install['mysql_error'] = 'MySQL error: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost is usually OK)';
$lang_install['mysql_username'] = 'MySQL username'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL password'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Could not create MySQL database.';
$lang_install['mysql_no_sel_dbs'] = 'Could not retrieve available MySQL databases';
$lang_install['mysql_succ'] = 'Successful connection with database';
$lang_install['mysql_tbl_pref'] = 'MySQL table prefix';
$lang_install['mysql_test_connection'] = 'Test connection';
$lang_install['mysql_wrong_db'] = 'MySQL could not locate a database called \'%s\' please check the value entered for this';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'You have to enter an admin email address';
$lang_install['no_admin_password'] = 'You have to enter an admin password';
$lang_install['no_admin_username'] = 'You have to enter an admin username';
$lang_install['no_dir'] = 'Directory not available';
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.';
$lang_install['no_mysql_conn'] = 'Could not create a MySQL connection, please check the MySQL details entered';
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.';
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)';
$lang_install['nok'] = 'Not OK';
$lang_install['not_here_yet'] = 'Nothing here yet, please click %shere%s to go back.';
$lang_install['ok'] = 'بله';
$lang_install['on_q'] = 'on query';
$lang_install['or'] = 'or';
$lang_install['pass_err'] = 'Passwords don\'t match, you used illegal characters or didn\'t provide one.';
$lang_install['password'] = 'Password';
$lang_install['password_verif'] = 'Verify Password';
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to';
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.';
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.';
$lang_install['populate_db'] = 'Populate database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your MySQL account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Create Coppermine administrator';
$lang_install['title_dir_check'] = 'Checking directory permissions';
$lang_install['title_file_check'] = 'Checking installation files';
$lang_install['title_finished'] = 'Installation completed';
$lang_install['title_imp'] = 'Image package selection';
$lang_install['title_imp_test'] = 'Testing image library';
$lang_install['title_mysql_db_sel'] = 'MySQL database selection';
$lang_install['title_mysql_pop'] = 'Creating database structure';
$lang_install['title_mysql_user'] = 'MySQL user authentication';
$lang_install['title_welcome'] = 'Welcome to Coppermine installation';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Try again!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must contain only alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Username';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.';
$lang_install['more'] = 'more';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
$lang_install['read_gif'] = 'Read/write .gif file';
$lang_install['read_png'] = 'Read/write .png file';
$lang_install['read_jpg'] = 'Read/write .jpg file';
$lang_install['write_error'] = 'Could not write generated image to disk.';
$lang_install['read_error'] = 'Could not read the source image.';
$lang_install['combine_error'] = 'Could not combine the source images';
$lang_install['text_error'] = 'Could not add text to the source image';
$lang_install['scale_error'] = 'Could not scale the source image';
$lang_install['pixels'] = 'پیکسل';
$lang_install['combine'] = 'Combine 2 images';
$lang_install['text'] = 'Write text on image';
$lang_install['scale'] = 'Scale an image';
$lang_install['generated_image'] = 'Generated image';
$lang_install['reference_image'] = 'Reference image';
$lang_install['imp_test_error'] = 'There was an error in one or more of the tests, please make sure you selected the appropriate Image Processing Package and it is configured correctly!';
$lang_install['writable'] = 'Writable';
$lang_install['not_writable'] = 'Not writable';
$lang_install['not_exist'] = 'Does not exist';
$lang_install['old_install'] = 'This is the new install wizard. Click %shere%s for the classic install screen.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'مدیریت کلمات کلیدی';
$lang_keywordmgr_php['search'] = 'جستجو';
$lang_keywordmgr_php['keyword_test_search'] = 'جستجوی %s در پنجره جدید';
$lang_keywordmgr_php['keyword_del'] = 'حذف کلمات کلیدی %s';
$lang_keywordmgr_php['confirm_delete'] = 'آیا مطمئنید می‌خواهید کلمات کلیدی %s از تمام گالری حذف شوند؟'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'تغییر کلمات کلیدی';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'مدیریت زبان';
$lang_langmgr_php['english_language_name'] = 'انگلیسی';
$lang_langmgr_php['native_language_name'] = 'بومی';
$lang_langmgr_php['custom_language_name'] = 'سفارشی';
$lang_langmgr_php['language_name'] = 'نام زبان';
$lang_langmgr_php['language_file'] = 'فایل زبان';
$lang_langmgr_php['flag'] = 'پرچم';
$lang_langmgr_php['file_available'] = 'موجود';
$lang_langmgr_php['enabled'] = 'فعال شده';
$lang_langmgr_php['complete'] = 'کامل';
$lang_langmgr_php['default'] = 'پیش فرض';
$lang_langmgr_php['missing'] = 'مفقود';
$lang_langmgr_php['broken'] = 'appears to be broken or inaccessible';
$lang_langmgr_php['exists_in_db_and_file'] = 'exists in database and as file';
$lang_langmgr_php['exists_as_file_only'] = 'exists as file only';
$lang_langmgr_php['pick_a_flag'] = 'Pick one';
$lang_langmgr_php['replace_x_with_y'] = 'تغییر %s با %s';
$lang_langmgr_php['tanslator_information'] = 'اطلاعات مترجم';
$lang_langmgr_php['cpg_version'] = 'نسخه کاپرماین';
$lang_langmgr_php['hide_details'] = 'پنهانیدن جزییات';
$lang_langmgr_php['show_details'] = 'نمایش جزییات';
$lang_langmgr_php['loading'] = 'Loading';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.';
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work';
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!';
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!';
$lang_langmgr_php['version_does_not_match'] = 'The version of this file does not match your Coppermine version. Use with caution and test thoroughly!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'اندازه فایل %s غیر قابل قبول است';
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'زبان پیش فرض به  %s تغییر یافت';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'ورود';
$lang_login_php['enter_login_pswd'] = 'برای ورود شناسه و رمز خود را وارد نمایید';
$lang_login_php['username'] = 'شناسه «نام کاربری»';
$lang_login_php['email'] = 'ایمیل'; // cpg1.5
$lang_login_php['both'] = 'شناسه/ ایمیل'; // cpg1.5
$lang_login_php['password'] = 'رمز عبور';
$lang_login_php['remember_me'] = 'مرا بخاطر بسپار';
$lang_login_php['welcome'] = 'خوش آمدید %s گرامی';
$lang_login_php['err_login'] = 'خطا در ورود! دوباره بکوشید.';
$lang_login_php['err_already_logged_in'] = 'در حال حاضر وارد شده‌اید!';
$lang_login_php['forgot_password_link'] = 'رمز خود را فراموش کرده‌ام';
$lang_login_php['cookie_warning'] = 'اخطار: مرورگر شما اسکریپت/ کوکی‌ها را نمی‌پذیرد';
$lang_login_php['send_activation_link'] = 'لینک فعال سازی را گم نموده‌اید؟';
$lang_login_php['force_login'] = 'برای مشاهده این صفحه باید وارد شوید'; // cpg1.5
$lang_login_php['force_login_title'] = 'برای ادامه وارد شوید'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'خروج';
$lang_logout_php['bye'] = 'خداحافظ %s گرامی';
$lang_logout_php['err_not_logged_in'] = 'خارج شدید!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'up one level';
$lang_minibrowser_php['current_path'] = 'current path';
$lang_minibrowser_php['select_directory'] = 'لطفا یک مسیر را انتخاب کنید';
$lang_minibrowser_php['click_to_close'] = 'روی تصویر کلیک کنید تا پنجره بسته شود';
$lang_minibrowser_php['folder'] = 'پوشه'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'بسته شدن بخش مدیریت...'; // cpg1.5
$lang_mode_php[1] = 'باز شدن بخش مدیریت...'; // cpg1.5
$lang_mode_php['news_hide'] = 'پنهان کردن اخبار...'; // cpg1.5
$lang_mode_php['news_show'] = 'نمایش اخبار...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'بروز شدن آلبوم %s';
$lang_modifyalb_php['related_tasks'] = 'کارهای مرتبط'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'انتخاب آلبوم'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'تنظیمات عمومی';
$lang_modifyalb_php['alb_title'] = 'عنوان آلبوم';
$lang_modifyalb_php['alb_cat'] = 'موضوع آلبوم';
$lang_modifyalb_php['alb_desc'] = 'شرح آلبوم';
$lang_modifyalb_php['alb_keyword'] = 'کلمات کلیدی آلبوم';
$lang_modifyalb_php['alb_thumb'] = 'تصویر بند انگشتی آلبوم';
$lang_modifyalb_php['alb_perm'] = 'مجوز برای این آلبوم';
$lang_modifyalb_php['can_view'] = 'نمایش این آلبوم برای';
$lang_modifyalb_php['can_upload'] = 'بازدیدکنندگان می‌توانند تصاویر را آپلود کنند';
$lang_modifyalb_php['can_post_comments'] = 'بازدید کنندگان می‌توانند نظر دهند';
$lang_modifyalb_php['can_rate'] = 'بازدید کنندگان می‌توانند امتیاز دهند';
$lang_modifyalb_php['user_gal'] = 'گالری کاربران';
$lang_modifyalb_php['my_gal'] = '* گالری من *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* بدون موضوع *';
$lang_modifyalb_php['alb_empty'] = 'آلبوم خالی است';
$lang_modifyalb_php['last_uploaded'] = 'آخرین ارسال شده‌ها';
$lang_modifyalb_php['public_alb'] = 'هر کسی «آلبوم عمومی»';
$lang_modifyalb_php['me_only'] = 'فقط من';
$lang_modifyalb_php['owner_only'] = 'مالک آلبوم (%s) فقط';
$lang_modifyalb_php['group_only'] = 'اعضای گروه \'%s\' ';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'آلبومی که بتوانید ویرایش کنید در پایگاه داده‌ها وجود ندارد.';
$lang_modifyalb_php['update'] = 'بروز کردن آلبوم';
$lang_modifyalb_php['reset_album'] = 'تنظیم مجدد آلبوم';
$lang_modifyalb_php['reset_views'] = 'صفر کردن &quot;0&quot; تعداد بازدیدها  در %s';
$lang_modifyalb_php['reset_rating'] = 'حذف امتیازهای داده شده به %s';
$lang_modifyalb_php['delete_comments'] = 'حذف تمامی نظرات داده شده در %s';
$lang_modifyalb_php['delete_files'] = 'حذف %sبرگشت ناپذیر%s تمامی تصاویر  %s';
$lang_modifyalb_php['views'] = 'بازدید';
$lang_modifyalb_php['votes'] = 'نفر';
$lang_modifyalb_php['comments'] = 'نظر';
$lang_modifyalb_php['files'] = 'تصویر';
$lang_modifyalb_php['submit_reset'] = 'تغییرات اعمال شوند';
$lang_modifyalb_php['reset_views_confirm'] = 'مطمئنم';
$lang_modifyalb_php['notice1'] = '(*) بر اساس تنظیم %sگروه‌ها%s '; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'تعدیل آلبوم توسط'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'فقط مدیران'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'رمز آلبوم «رمز جدید»';
$lang_modifyalb_php['alb_password_hint'] = 'Album password hint';
$lang_modifyalb_php['edit_files'] = 'ویرایش تصاویر';
$lang_modifyalb_php['parent_category'] = 'موضوع مرتبط';
$lang_modifyalb_php['thumbnail_view'] = 'نمایش بند انگشتی';
$lang_modifyalb_php['random_image'] = 'تصویر تصادفی'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'گذاشتن رمز برای حمایت از این آلبوم (تیک زدن برای بله)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'This is the output generated by the PHP function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine.';
$lang_phpinfo_php['no_link'] = 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You cannot post a link to this page for others, they will be denied access.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'مدیریت تصاویر';
$lang_picmgr_php['confirm_modifs'] = 'تغییرات اجرا شوند؟'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'هیچگونه تغییری ایجاد نکردید!';
$lang_picmgr_php['no_album'] = '* بدون آ«بوم *';
$lang_picmgr_php['explanation_header'] = 'ترتیب سفارشی که می‌توانید برای این صفحه تعیین کنید فقط در صورتی اعمال می‌شود که';
$lang_picmgr_php['explanation1'] = 'مدیریت «پیش فرض ترتیب برای تصاویر» را در پیکر بندی برای «موقعیت به ترتیب نزولی» یا «موقعیت به ترتیب صعودی» (تنظیم عمومی برای تمامی کاربرانی که گزینه مرتب سازی اختصاصی دیگری را انتخاب نکرده‌اند) تعیین کرده است';
$lang_picmgr_php['explanation2'] = 'کاربر «موقعیت به ترتیب نزولی» یا «موقعیت به ترتیب صعودی» در صفحه بندانگشتی‌ها انتخاب کرده است (در تنظیمات کاربر)';
$lang_picmgr_php['change_album'] = 'اگر آلبوم را تغییر دهید،تغییراتتان از دست خواهند رفت!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'تغییرات مرتب‌سازی تا وقتی‌که روی «اجرای تغییرات» کلیک نکرده‌اید ذخیره نخواهند شد.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Are you sure you want to UNINSTALL this plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'آیا مطمئنید می‌خواهید این پلاگین را حذف کنید؟';
$lang_pluginmgr_php['pmgr'] = 'مدیریت پلاگین‌ها';
$lang_pluginmgr_php['explanation'] = 'نصب/ حذف/ مدیریت پلاگین‌ها با استفاده از این صفحه.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'پلاگین API فعال شده است'; // cpg1.5
$lang_pluginmgr_php['name'] = 'نام';
$lang_pluginmgr_php['author'] = 'نویسنده';
$lang_pluginmgr_php['desc'] = 'شرح';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'پلاگین‌های نصب شده';
$lang_pluginmgr_php['n_plugins'] = 'پلاگین‌های نصب نشده';
$lang_pluginmgr_php['none_installed'] = 'چیزی نصب نشده';
$lang_pluginmgr_php['operation'] = 'عملکرد';
$lang_pluginmgr_php['not_plugin_package'] = 'فایل آپلود شده یک بسته پلاگینی نیست.';
$lang_pluginmgr_php['copy_error'] = 'There was an error copying the package to the plugins folder.';
$lang_pluginmgr_php['upload'] = 'آپلود';
$lang_pluginmgr_php['configure_plugin'] = 'تنظیمات پلاگین';
$lang_pluginmgr_php['cleanup_plugin'] = 'Cleanup plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'اطلاعات نصب'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, so that operation is not allowed.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'نصب'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'حذف'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimum requirements not met'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Could not determine the version requirements for this plugin. This is usually an indicator that the plugin was not designed for your version of Coppermine and might therefore crash your gallery. Continue anyway (not recommended)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'شرمنده، قبلابه این تصویر رای داده‌اید';
$lang_rate_pic_php['rate_ok'] = 'با سپاس، رای شما پذیرفته شد';
$lang_rate_pic_php['forbidden'] = 'شایسته نیست به تصاویر خودتان رای دهید.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
مدیریت {SITE_NAME} حق هرگونه تغییر یا حذف مطالب را در اسرع وقت برای خود محفوظ نگه می‌دارد، اگر چه مشاهده و رسیدگی به تک تک مطالب غیر ممکن است، لهذا  مسئولیت تمامی مطالب منتشر شده برعهده نویسندگان و ارسال کنندگان محترم می‌باشد و مدیران سایت (جز در مورد مطالب ارسالی خودشان) مسئولیتی نخواهند داشت.<br />
<br />
شما با عضویت در این سایت متعهد می‌شوید که هیچگونه مطلب توهین آمیز، مستهجن، مبتذل، افترا آمیز، ایجاد کننده دشمنی و تهدید و تحریک کننده  خشونت، جنسی و سکسی، ترسناک، آزار دهنده، حریم شخصی دیگران و هر گونه اطلاعات برخلاف قانون را به سایت ارسال نکنید.
 شما می‌پذیرید که مدیران و ناظران سایت {SITE_NAME} حق حذف و یا ویرایش هر یک از مطالب منتشر شده را در هر زمانی که مناسب بدانند را دارند .
 شما به عنوان یک کاربر می‌پذیرید که تمامی اطلاعاتی را که در سایت وارد می‌کنید در یک پایگاه داده‌ها ذخیره می‌شود، این اطلاعات بدون رضایت شما در اختیار شخص ثالثی قرار نخواهد گرفت، اما این سایت مسئولیتی در قبال حملات هکری که ممکن است منجر به در معرض خطر گرفتن و فاش شدن این داده‌ها شود قبول نمی‌کند.<br />
<br />
این سایت از کوکی‌ها برای نگهداری اطلاعات روی موقعیت کامپیوتر شما استفاده می نماید. این کوکی ها فقط برای بهبود بازدید شما بکار می‌روند. ایمیل شما تنها جهت فعال سازی شناسه «نام کاربری» و ارسال رمز فراموش شده استفاده خواهد شد.<br />
<br />
با کلیک روی دکمه «می‌پذیرم» کلیه موارد بالا را قبول می‌کنید.
EOT;
$lang_register_php['page_title'] = 'ثبت نام کاربران';
$lang_register_php['term_cond'] = 'قوانین و مقررات';
$lang_register_php['i_agree'] = 'می‌پذیرم';
$lang_register_php['submit'] = 'ثبت نام';
$lang_register_php['err_user_exists'] = 'شناسه‌ای که وارد نمودید، از قبل وجود دارد، لطفا شناسه دیگری انتخاب کنید';
$lang_register_php['err_global_pw'] = 'Invalid global registration password'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'رمز عبور شما باید متفاوت از رمز عبور عمومی (اختصاصی)'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'کاربر دیگری با ایمیلی که شما وارد نموده‌اید ثبت نام کرده است';
$lang_register_php['err_disclaimer'] = 'شما باید شرایط را بپذیرید'; // cpg1.5
$lang_register_php['enter_info'] = 'لطفا اطلاعات مورد نیاز برای ثبت نام را وارد نمایید';
$lang_register_php['required_info'] = 'اطلاعات الزامی';
$lang_register_php['optional_info'] = 'اطلاعات اختیاری';
$lang_register_php['username'] = 'شناسه';
$lang_register_php['password'] = 'رمز عبور';
$lang_register_php['password_again'] = 'تکرار رمز عبور';
$lang_register_php['global_registration_pw'] = 'Global registration password'; // cpg1.5
$lang_register_php['email'] = 'ایمیل';
$lang_register_php['location'] = 'محل زندگی';
$lang_register_php['interests'] = 'علاقه‌مندی‌ها';
$lang_register_php['website'] = 'صفحه اصلی';
$lang_register_php['occupation'] = 'شغل';
$lang_register_php['error'] = 'خطا';
$lang_register_php['confirm_email_subject'] = '%s - تایید ثبت نام';
$lang_register_php['information'] = 'اطلاعات';
$lang_register_php['failed_sending_email'] = 'The registration confirmation email can\'t be send!';
$lang_register_php['thank_you'] = 'سپاس از ثبت نام.<br /> ایمیلی حاوی اطلاعات لازم در مورد نحوه فعال سازی حسابتان به آدرس ایمیل شما فرستاده شد.';
$lang_register_php['acct_created'] = 'حساب کاربری شما ایجاد شده است و هم اکنون می‌توانید با وارد کردن نام کاربری و رمز عبور خود وارد سایت شوید';
$lang_register_php['acct_active'] = 'حساب کاربری شما فعال شده است و هم اکنون می‌توانید با وارد کردن نام کاربری و رمز عبور خود وارد سایت شوید';
$lang_register_php['acct_already_act'] = 'حساب کاربری در حال حاضر فعال است!';
$lang_register_php['acct_act_failed'] = 'این حساب کاربری نمی‌تواند فعال شود!';
$lang_register_php['err_unk_user'] = 'کاربر انتخاب شده موجود نیست!';
$lang_register_php['x_s_profile'] = ' نمایه %s ';
$lang_register_php['group'] = 'گروه کاربری';
$lang_register_php['reg_date'] = 'عضو شده در تاریخ';
$lang_register_php['disk_usage'] = 'فضای استفاده شده';
$lang_register_php['change_pass'] = 'تغییر رمز عبور';
$lang_register_php['current_pass'] = 'رمز عبور فعلی';
$lang_register_php['new_pass'] = 'رمز عبور جدید';
$lang_register_php['new_pass_again'] = 'تکرار رمز عبور جدید';
$lang_register_php['err_curr_pass'] = 'رمز عبور فعلی نادرست است';
$lang_register_php['change_pass'] = 'تغییر رمز عبور من';
$lang_register_php['update_success'] = 'نمایه شما بروز شد';
$lang_register_php['pass_chg_success'] = 'رمز عبور شما تغییر یافت';
$lang_register_php['pass_chg_error'] = 'رمز عبور شما تغییری نکرده است';
$lang_register_php['notify_admin_email_subject'] = '%s - Registration notification';
$lang_register_php['last_uploads'] = 'آخرین تصویر آپلود کرده'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'برای مشاهده تمامی تصاویر ارسال شده %s کلیک کنید'; // cpg1.5
$lang_register_php['last_comments'] = 'آخرین نظر'; // cpg1.5
$lang_register_php['you'] = 'شما'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'برای مشاهده تمامی نظرات ارسال شده توسط %s کلیک کنید'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'کاربر جدیدی با شناسه «%s» در گالری شما ثبت نام کرد';
$lang_register_php['pic_count'] = 'تصاویر آپلود کرده';
$lang_register_php['notify_admin_request_email_subject'] = '%s - درخواست ثبت نام';
$lang_register_php['thank_you_admin_activation'] = 'متشکریم.<br />درخواست شما برای فعال شدن برای مدیریت فرستاده شد. در صورت موافقت نامه‌ای برای شما ارسال خواهد شد.';
$lang_register_php['acct_active_admin_activation'] = 'The account is now active and an email has been sent to the user.';
$lang_register_php['notify_user_email_subject'] = '%s - اعلام فعال سازی';
$lang_register_php['delete_my_account'] = 'حذف حساب کاربری من'; // cpg1.5
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and %syour comments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'I\'m sure that I want to delete my user account'; // cpg1.5
$lang_register_php['really_delete'] = 'Do you really want to delete your user account?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'ویرایش نمایه %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'ویرایش نمایه من'; // cpg1.5
$lang_register_php['none'] = 'هنوز نظری نداده است'; // cpg1.5
$lang_register_php['user_name_banned'] = 'The username you have chosen is not allowed/banned. Choose another user name'; // cpg1.5
$lang_register_php['email_address_banned'] = 'You are banned from this gallery. You are not allowed to re-register. Go away!'; // cpg1.5
$lang_register_php['email_warning1'] = 'خانه ایمیل نباید خالی بماند!'; // cpg1.5
$lang_register_php['email_warning2'] = 'ایمیلی که وارد نمودید نادرست است!'; // cpg1.5
$lang_register_php['username_warning1'] = 'خانه‌ شناسه نباید خالی بماند!'; // cpg1.5
$lang_register_php['username_warning2'] = 'شناسه حداقل باید دو حرف داشته باشد!'; // cpg1.5
$lang_register_php['password_warning1'] = 'رمز عبور حداقل باید دارای دو حرف باشد!'; // cpg1.5
$lang_register_php['password_warning2'] = 'شناسه و رمز عبور باید متفاوت باشند!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'The two passwords do not match, please enter them again!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'فرم ارسال نشد. خطایی وجود دارد که لازم است اصلاح شود!'; // cpg1.5
$lang_register_php['banned'] = 'ممنوع شده!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
با سپاس از ثبت نام در {SITE_NAME}

برای فعال شدن حساب شما با شناسه «{USER_NAME}»، لازم است روی لینک زیر کلیک کنید یا آن را کپی نموده و در مرورگرتان وارد نمایید.
<a href="{ACT_LINK}">{ACT_LINK}</a>

با احترام

مدیریت {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
 کاربر جدیدی با شناسه «{USER_NAME}» در گالری شما ثبت نام کرد.

برای اجرای فعال شدن حساب کاربری لازم است که روی لینک زیر کلیک کنید یا آن را کپی نموده در مرورگرتان وارد نمایید. 


<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
حساب کاربری شما تایید و فعال شد.

شما می‌توانید با نام کاربری «{USER_NAME}» برای ورود به <a href="{SITE_LINK}">{SITE_LINK}</a> اقدام کنید. 


با احترام

مدیریت {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'نمایش نظرات';
$lang_reviewcom_php['no_comment'] = 'نظری برای نمایش وجود ندارد';
$lang_reviewcom_php['n_comm_del'] = '%s نظر حذف شد';
$lang_reviewcom_php['n_comm_disp'] = 'تعداد نظرات جهت نمایش';
$lang_reviewcom_php['see_prev'] = 'مشاهده قبلی';
$lang_reviewcom_php['see_next'] = 'مشاهده بعدی';
$lang_reviewcom_php['del_comm'] = 'حذف نظرات انتخاب شده';
$lang_reviewcom_php['user_name'] = 'نام';
$lang_reviewcom_php['date'] = 'تاریخ';
$lang_reviewcom_php['comment'] = 'نظر';
$lang_reviewcom_php['file'] = 'تصویر';
$lang_reviewcom_php['name_a'] = 'شناسه به ترتیب صعودی';
$lang_reviewcom_php['name_d'] = 'شناسه به ترتیب نزولی';
$lang_reviewcom_php['date_a'] = 'تاریخ به ترتیب صعودی';
$lang_reviewcom_php['date_d'] = 'تاریخ به ترتیب نزولی';
$lang_reviewcom_php['comment_a'] = 'نظرات به ترتیب صعودی';
$lang_reviewcom_php['comment_d'] = 'نظرات به ترتیب نزولی';
$lang_reviewcom_php['file_a'] = 'تصاویر به ترتیب صعودی';
$lang_reviewcom_php['file_d'] = 'تصاویر به ترتیب نزولی';
$lang_reviewcom_php['approval_a'] = 'تایید به ترتیب صعودی'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'تایید به ترتیب نزولی'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'آی پی به ترتیب صعودی'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'آی پی به ترتیب نزولی'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (valid comments at the bottom)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (valid comments at the top)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s approved comment(s)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s unapproved comment(s)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'فقط نمایش نظراتی که به تایید نیاز دارند'; // cpg1.5
$lang_reviewcom_php['approval'] = 'تایید شده'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'ذخیره تغییرات'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'مطمئنید می‌خواهید نظر یا نظرات انتخاب شده حذف شوند؟ '; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'با انتخاب'; // cpg1.5
$lang_reviewcom_php['delete'] = 'حذف'; // cpg1.5
$lang_reviewcom_php['approve'] = 'تایید'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'تایید نشده'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'بدون تغییر'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'نظر تایید شد'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comment marked unapproved'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'کاربران ممنوع شده و نظرات حذف شده'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'اکیسمت می‌گوید'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'اسپم است'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'اسپم نیست'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'اکیسمت'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'تا این لحظه اکیسمت %s پیام اسپم یافته است'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'نتیجه آزمایش برای کلید اپی‌آی اکیسمت شما %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'بی اعتبار'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Unable to connect to akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Unknown error'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'The error message returned was'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'آی پی'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Side Bar'; // cpg1.5
$lang_sidebar_php['install'] = 'install'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Among the many smart access methods to get to information quickly on the site, we provide sidebars for the most popular browsers used on different operating systems to access pages easily. Here you can find setup and uninstall information for the browsers supported.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detecting your OS and browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'The script is trying to detect your operating system and browser version - please wait a second. If auto-detection fails, you might want to %sunhide%s all possible sidebar install options manually.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'If you use Mozilla 0.9.4 or later, you can %sadd our sidebar to your set%s. You can uninstall this sidebar using the "Customize Sidebar" dialog in Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 and above on Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'If you use Internet Explorer 5 or above on MacOS, %sopen our sidebar page%s in a separate window. In that window, open the "Page Holder" tab on the left side of the window. Click "Add". If you want to keep it for future use, click on "Favorites" and select "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 and above on Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'If you use Internet Explorer 5 or above on Windows, you can add the Side Bar to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed in place of your usual search bar by right-clicking %shere%s and selecting "Add to favorites" from the context menu. This link does not install our bar as your default search bar, so no modification is made to your system.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 on Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'If you use Internet Explorer 7 on Windows, you can add a navigation pop-up to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed as a pop-up window by right-clicking %shere%s and selecting "Add to favorites" from the context menu. In previous versions of IE, it was possible to add an actual side bar, but in IE7 you cannot accomplish this without applying complicated registry hacks. It is recommended to use another browser if you want to use an actual sidebar.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 and above'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'If you are using Opera, you can %sclick on this link to add our sidebar to your set%s. Tick "Show in panel" then. You can uninstall the sidebar by right clicking on it\'s tab and choosing "Delete" from the context menu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Additional options'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'If you have another browser than the one mentioned above, then click %shere%s to display all possible sidebar options.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar cannot be added! Your browser does not support this method!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Search'; // cpg1.5
$lang_sidebar_php['reload'] = 'Reload'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'جستجو';
$lang_search_php['submit_search'] = 'بگرد';
$lang_search_php['keyword_list_title'] = 'فهرست کلمات کلیدی';
$lang_search_php['keyword_msg'] = 'فهرست بالا در برگیرنده همه موارد نیست. این فهرست شامل عناوین تصاویر و شرح و موضوع آن‌ها نمی‌باشد. جستجوی متن کاملی را بیازمایید.';
$lang_search_php['edit_keywords'] = 'ویرایش کلمات کلیدی';
$lang_search_php['search in'] = 'جستجو در:';
$lang_search_php['ip_address'] = 'آی پی';
$lang_search_php['imgfields'] = 'جستجوی تصاویر';
$lang_search_php['albcatfields'] = 'جستجوی آلبوم و موضوع تصویر';
$lang_search_php['age'] = 'تاریخ ارسال تصویر';
$lang_search_php['newer_than'] = 'جدیدتر از';
$lang_search_php['older_than'] = 'قدیمی‌تر از';
$lang_search_php['days'] = 'روز';
$lang_search_php['all_words'] = 'تطابق کامل با عبارت مورد جستجو';
$lang_search_php['any_words'] = 'هر کدام از کلمات عبارت مورد جستجو';
$lang_search_php['regex'] = 'تطابق عبارت بطور منظم';
$lang_search_php['album_title'] = 'عنوان آلبوم';
$lang_search_php['category_title'] = 'موضوع';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'جستجوی تصاویر تازه';
$lang_search_new_php['select_dir'] = 'انتخاب مسیر';
$lang_search_new_php['select_dir_msg'] = 'این ویژگی به شما اجازه می‌دهد که دسته تصاویری را که از طریق اف تی پی در سرورتان آپلود کرده‌اید اضافه نمایید.<br /> مسیری که تصاویر را در آنجا آپلود کرده‌اید انتخاب نمایید.';
$lang_search_new_php['no_pic_to_add'] = 'تصویری برای اضافه کردن وجود ندارد';
$lang_search_new_php['need_one_album'] = 'You need at least one album to use this function';
$lang_search_new_php['warning'] = 'اخطار';
$lang_search_new_php['change_perm'] = 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files!';
$lang_search_new_php['target_album'] = '<strong>Put files of &quot;</strong>%s<strong>&quot; into </strong>%s';
$lang_search_new_php['folder'] = 'پوشه';
$lang_search_new_php['image'] = 'فایل';
$lang_search_new_php['result'] = 'نتیجه';
$lang_search_new_php['dir_ro'] = 'غیر قابل نگارش. ';
$lang_search_new_php['dir_cant_read'] = 'غیر قابل خواندن. ';
$lang_search_new_php['insert'] = 'اضافه کردن تصویر جدید به گالری';
$lang_search_new_php['list_new_pic'] = 'فهرست تمامی فایل‌های جدید';
$lang_search_new_php['insert_selected'] = 'Insert selected files';
$lang_search_new_php['no_pic_found'] = 'فایل جدیدی یافت نشد';
$lang_search_new_php['be_patient'] = 'Please be patient, the script needs time to add the files';
$lang_search_new_php['no_album'] = 'آلبومی انتخاب نشده است';
$lang_search_new_php['result_icon'] = 'click for details or to reload';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: تصویر با موفقیت اضافه شد</li>
        <li>%s: the file is a duplicate and is already in the database</li>
        <li>%s: the file could not be added, check your configuration and the permission of directories where the files are located</li>
        <li>%s: لازم است ابتدا آلبومی را انتخاب نمایید</li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: نوع نامشخص تصویر</li>
        <li>%s: فایل در واقع تصویری با فرمت GIF است</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>If your browser timeouts, hit the reload button</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'انتخاب همه';
$lang_search_new_php['uncheck_all'] = 'عدم انتخاب همه';
$lang_search_new_php['no_folders'] = 'هنوز پوشه‌ای درون پوشه «آلبومز» وجود ندارد. مطمئن شوید دست کم یک پوشه سفارشی درون پوشه «آلبومز» ایجاد شود و تصاویرتان از طریق اف‌‌ تی‌ پی در آنجا آپلود شوند. شما نباید در پوشه‌های «یوزرپیکس» یا «ادیت» چیزی آپلود کنید، آنها برای آپلود اچ‌تی‌تی‌پی و اهداف داخلی اختصاص یافته‌اند.<br /><br />آلبومز=albums<br />یوزرپیکس=userpics<br />ادیت=edit';
$lang_search_new_php['browse_batch_add'] = 'رابط‌های قابل جستجو'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'مشاهده پیش نمایش تصاویر بند انگشتی'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'ویرایش تصاویر';
$lang_search_new_php['edit_properties'] = 'ویژگی‌های آلبوم';
$lang_search_new_php['view_thumbs'] = 'نمایش بند انگشتی';
$lang_search_new_php['add_more_folder'] = 'Batch-add تصاویر بیشتر از پوشه  %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'You are already logged in!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'This website does not require activation by email'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'کاربر انتخاب شده وجود ندارد!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'ارسال مجدد کد فعال سازی'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'ایمیل خود را وارد کنید'; // cpg1.5
$lang_send_activation_php['submit'] = 'ارسال'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Failed to send email with activation link'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'ایمیلی همراه لینک فعال سازی به %s فرستاده شد، لطفا ایمیل خود را برای کامل کردن این روند بازبینی نمایید'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'نمایش/عدم نمایش این ستون';
$lang_stat_details_php['title'] = 'جزئیات آمار'; // cpg1.5
$lang_stat_details_php['vote'] = 'جزئیات آراء';
$lang_stat_details_php['hits'] = 'جزئیات بازدید';
$lang_stat_details_php['stats'] = 'آمار رای';
$lang_stat_details_php['users'] = 'آمار کاربران';
$lang_stat_details_php['sdate'] = 'تاریخ';
$lang_stat_details_php['rating'] = 'رتبه بندی';
$lang_stat_details_php['search_phrase'] = 'Search phrase';
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'بگرد';
$lang_stat_details_php['os'] = 'Operating System';
$lang_stat_details_php['ip'] = 'آی پی';
$lang_stat_details_php['uid'] = 'کاربر'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'به ترتیب %s';
$lang_stat_details_php['ascending'] = 'صعودی';
$lang_stat_details_php['descending'] = 'نزولی';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'close';
$lang_stat_details_php['hide_internal_referers'] = 'hide internal referers';
$lang_stat_details_php['date_display'] = 'نمایش تاریخ';
$lang_stat_details_php['records_per_page'] = 'records per page';
$lang_stat_details_php['submit'] = 'پذیرش / از نو ';
$lang_stat_details_php['overall_stats'] = 'Overall Statistics'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Stats by operating systems'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Number of hits'; // cpg1.5
$lang_stat_details_php['total'] = 'کل'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Stats by browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Overall stats configuration'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Empty all hit stats'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Empty all voting stats'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'پذیرش'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine configuration was updated'; // cpg1.5
$lang_stat_details_php['votes'] = 'votes'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Reset selected vote(s)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Are you sure that you want to delete the selected votes? This cannot be undone!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Back to intermediate file view'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s records on %s page(s)'; // cpg1.5
$lang_stat_details_php['guest'] = 'یک دوست'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'not implemented yet'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'آپلود تصویر';
$lang_upload_php['restrictions'] = 'محدودیت‌ها'; // cpg1.5
$lang_upload_php['choose_method'] = 'انتخاب شیوه آپلود'; // cpg1.5
$lang_upload_php['upload_swf'] = 'تصاویر متعدد- فلش (توصیه شده)'; // cpg1.5
$lang_upload_php['upload_single'] = 'ساده  - یک تصویر در یک زمان'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'یک آلبوم را از فهرست کشویی «انتخاب آلبوم» انتخاب کنید';
$lang_upload_php['up_instr_2'] = 'روی دکمه «Browse»‌ کلیک کنید و تصویری را که می‌خواهید آپلود کنید بیابید. می‌توانید یکباره چند فایل را با استفاده از Ctrl+Click انتخاب نمایید.';
$lang_upload_php['up_instr_3'] = 'Select more files to upload by repeating step 2';
$lang_upload_php['up_instr_4'] = 'Click the "Continue" button after all your files have completed uploading (the button will only appear when you have uploaded at least one file).';
$lang_upload_php['up_instr_5'] = 'You\'ll be sent to a screen where you can enter details about the uploaded files. After filling in, submit that form using the "Apply changes" button at the bottom of that form.';
$lang_upload_php['restriction_zip'] = 'ZIP files uploaded will remain compressed, they will not be extracted on the server.';
$lang_upload_php['restriction_filesize'] = 'The size of files uploaded from your client to the server must not exceed %s each.';
$lang_upload_php['reg_instr_1'] = 'Invalid action for form creation.';
$lang_upload_php['no_name'] = 'Filename unavailable'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'ناتوان از آپلود'; // cpg 1.5
$lang_upload_php['no_post'] = 'File not uploaded by POST.';
$lang_upload_php['forb_ext'] = 'Forbidden file extension.';
$lang_upload_php['exc_php_ini'] = 'Exceeded filesize allowed in php.ini.';
$lang_upload_php['exc_file_size'] = 'Exceeded filesize permitted by CPG.';
$lang_upload_php['partial_upload'] = 'Only a partial upload.';
$lang_upload_php['no_upload'] = 'No upload occurred.';
$lang_upload_php['unknown_code'] = 'Unknown PHP upload error code.';
$lang_upload_php['impossible'] = 'Impossible to move.';
$lang_upload_php['not_image'] = 'Not an image/corrupt';
$lang_upload_php['not_GD'] = 'Not a GD extension.';
$lang_upload_php['pixel_allowance'] = 'The height and/or width of the uploaded picture is more than that allowed by the gallery config.';
$lang_upload_php['failure'] = 'Upload failure';
$lang_upload_php['no_place'] = 'The previous file could not be placed.';
$lang_upload_php['max_fsize'] = 'حداکثر اندازه مجاز تصویر %s';
$lang_upload_php['picture'] = 'تصویر';
$lang_upload_php['pic_title'] = 'عنوان تصویر';
$lang_upload_php['description'] = 'شرح تصویر';
$lang_upload_php['keywords_sel'] = 'انتخاب کلمات کلیدی';
$lang_upload_php['err_no_alb_uploadables'] = 'متاسفانه آلبومی وجود ندارد تا اجازه داده شود تصاویر آپلود شوند';
$lang_upload_php['close'] = 'بستن';
$lang_upload_php['no_keywords'] = 'با پوزش، در حال حاضر هیچ کلمه کلیدی وجود ندارد!';
$lang_upload_php['regenerate_dictionary'] = 'بازسازی فرهنگ لغت';
$lang_upload_php['allowed_types'] = 'You are allowed to upload files with the following extensions:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Image extensions: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Video extensions: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Document extensions: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Audio extensions: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Please wait while the script is uploading - this might take a while'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternative upload method'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'If you are running Windows XP/Vista, you can use the Windows XP Uploading Wizard as well to upload files, providing an easier user interface directly on the client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash upload interface could not load. You must have JavaScript enabled to enjoy the flash upload interface.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Upload interface is taking a long time to load or the load has failed. Please make sure that the Flash Plugin is enabled and that a working version of the Flash Player is installed.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternately you can use the <a href="upload.php?single=1">single</a> file upload interface.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Upload interface could not load. You may need to install or upgrade Flash Player. Visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> to get the Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Upload interface is loading. Please wait a moment...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'بگرد...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'لغو همه آپلودها'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Upload Queue'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'files uploaded'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'All Files'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Pending...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Uploading...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Complete.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Cancelled.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stopped.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Upload Failed.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'تصویر بیش از اندازه برزگ است.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Cannot upload Zero Byte files.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Invalid File Type.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Unhandled Error'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'خطا در آپلود: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Error'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Security Error'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Upload limit exceeded.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Failed Validation. Upload skipped.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'You have attempted to queue too many files.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'You have reached the upload limit.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'You may select up to %s file(s)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'فهرست اعضا';
$lang_usermgr_php['user_manager'] = 'مدیریت کاربران';
$lang_usermgr_php['title'] = 'تنظیمات کاربران';
$lang_usermgr_php['name_a'] = 'نام (ترتیب صعودی)';
$lang_usermgr_php['name_d'] = 'نام (ترتیب نزولی)';
$lang_usermgr_php['group_a'] = 'گروه (ترتیب صعودی)';
$lang_usermgr_php['group_d'] = 'گروه (ترتیب نزولی)';
$lang_usermgr_php['reg_a'] = 'تاریخ ثبت نام (ترتیب صعودی)';
$lang_usermgr_php['reg_d'] = 'تاریخ ثبت نام (ترتیب نزولی)';
$lang_usermgr_php['pic_a'] = 'به ترتیب صعودی تعداد تصاویر';
$lang_usermgr_php['pic_d'] = 'به ترتیب نزولی تعداد تصاویر';
$lang_usermgr_php['disku_a'] = 'به ترتیب صعودی فضای استفاده شده';
$lang_usermgr_php['disku_d'] = 'به ترتیب نزولی فضای استفاده';
$lang_usermgr_php['lv_a'] = 'آخرین بازدید (ترتیب صعودی)';
$lang_usermgr_php['lv_d'] = 'آخرین بازدید (ترتیب نزولی)';
$lang_usermgr_php['sort_by'] = 'ترتیب کاربران بر اساس';
$lang_usermgr_php['err_no_users'] = 'جدول کاربران خالی است!';
$lang_usermgr_php['err_edit_self'] = 'You can\'t edit your own profile, use the \'My profile\' link for that';
$lang_usermgr_php['with_selected'] = 'گزینش:';
$lang_usermgr_php['delete_files_no'] = 'keep public files (but anonymize)';
$lang_usermgr_php['delete_files_yes'] = 'delete public files as well';
$lang_usermgr_php['delete_comments_no'] = 'keep comments (but anonymize)';
$lang_usermgr_php['delete_comments_yes'] = 'delete comments as well';
$lang_usermgr_php['activate'] = 'فعال شود';
$lang_usermgr_php['deactivate'] = 'غیر فعال شود';
$lang_usermgr_php['reset_password'] = 'برگرداندن رمز عبور';
$lang_usermgr_php['change_primary_membergroup'] = 'تغییر عضویت اولیه';
$lang_usermgr_php['add_secondary_membergroup'] = 'اضافه کردن عضویت ثانویه';
$lang_usermgr_php['name'] = 'شناسه';
$lang_usermgr_php['group'] = 'گروه کاربری';
$lang_usermgr_php['inactive'] = 'غیر فعال';
$lang_usermgr_php['operations'] = 'Operations';
$lang_usermgr_php['pictures'] = 'تصاویر';
$lang_usermgr_php['disk_space_used'] = 'فضای استفاده شده';
$lang_usermgr_php['disk_space_quota'] = 'سهمیه'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'ثبت نام';
$lang_usermgr_php['last_visit'] = 'آخرین بازدید';
$lang_usermgr_php['u_user_on_p_pages'] = '%d کاربر در %d صفحه';
$lang_usermgr_php['confirm_del'] = 'مطمئنید می‌خواهید این کاربر را حذف کنید؟\\n تمامی تصاویر و آلبوم‌هایش نیز حذف خواهند شد.'; // js-alert
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'کاربر انتخاب شده وجود ندارد!';
$lang_usermgr_php['modify_user'] = 'ویرایش کاربر';
$lang_usermgr_php['notes'] = 'نکته';
$lang_usermgr_php['note_list'] = 'اگر نمی‌خواهید رمز فعلی را تغییر دهید، خانه «رمز عبور» را خالی بگذارید';
$lang_usermgr_php['password'] = 'رمز عبور';
$lang_usermgr_php['user_active'] = 'کاربر فعال باشد';
$lang_usermgr_php['user_group'] = 'گروه کاربری';
$lang_usermgr_php['user_email'] = 'ایمیل کاربر';
$lang_usermgr_php['user_web_site'] = 'وبسایت کاربر';
$lang_usermgr_php['create_new_user'] = 'ایجاد کاربر جدید';
$lang_usermgr_php['user_location'] = 'محل کاربر';
$lang_usermgr_php['user_interests'] = 'برگزیده‌های کاربر';
$lang_usermgr_php['user_occupation'] = 'شغل کاربر';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Recent uploads';
$lang_usermgr_php['no_latest_upload'] = 'هیچ تصویری آپلود نکرده است'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'آخرین نظرات'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'نظری ارسال نکرده است'; // cpg1.5
$lang_usermgr_php['comments'] = 'نظرات'; // cpg1.5
$lang_usermgr_php['never'] = 'هرگز';
$lang_usermgr_php['search'] = 'جستجوی کاربران';
$lang_usermgr_php['submit'] = 'پذیرش';
$lang_usermgr_php['search_submit'] = 'بگرد!';
$lang_usermgr_php['search_result'] = 'نتیجه جستجو برای: ';
$lang_usermgr_php['alert_no_selection'] = 'You have to select at least one user first!'; // js-alert
$lang_usermgr_php['select_group'] = 'انتخاب گروه';
$lang_usermgr_php['groups_alb_access'] = 'مجوز آلبوم بر اساس گروه کاربری';
$lang_usermgr_php['category'] = 'موضوع';
$lang_usermgr_php['modify'] = 'Modify?';
$lang_usermgr_php['group_no_access'] = 'این گروه مجوز ویژه را ندارد';
$lang_usermgr_php['notice'] = 'Notice';
$lang_usermgr_php['group_can_access'] = 'Album(s) that only "%s" can access';
$lang_usermgr_php['send_login_data'] = 'Send login data to this user (Password will be sent via email)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'اطلاعات حساب کاربری جدید شما'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'نامه محتوی اطلاعات ورود نمی‌تواند فرستاده شود!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'نمایش نمایه'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'ویرایش نمایه'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'کاربر ممنوع شود'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'کاربر ممنوع شده است'; // cpg1.5
$lang_usermgr_php['status'] = 'وضعیت'; // cpg1.5
$lang_usermgr_php['status_active'] = 'فعال'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'غیر فعال'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
شناسه جدیدی برای استفاده  شما در {SITE_NAME} ایجاد شده است.


شما می‌توانید هم اکنون با استفاده از شناسه «{USER_NAME}» و رمز عبور «{USER_PASS}» وارد سایت <a href="{SITE_LINK}">{SITE_LINK}</a> شوید



با احترام

مدیریت {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Welcome to Coppermine update'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Could not authenticate you'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Please provide your Coppermine admin account details or your MySQL account data'; // cpg1.5
$lang_update_php['try_again'] = 'بار دیگر انجام دهید'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Could not create a MySQL connection'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL could not locate a database called %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL said'; // cpg1.5
$lang_update_php['check_config_file'] = 'Please check the MySQL details in %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'انجام به روز رسانی پایگاه داده‌ها'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'انجام به روز رسانی فایل‌ها'; // cpg1.5
$lang_update_php['already_done'] = 'انجام شد'; // cpg1.5
$lang_update_php['password_encryption'] = 'Encryption of passwords'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Encryption of album passwords'; // cpg1.5
$lang_update_php['category_tree'] = 'Category tree'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Authentication needed'; // cpg1.5
$lang_update_php['username'] = 'شناسه'; // cpg1.5
$lang_update_php['password'] = 'رمز عبور'; // cpg1.5
$lang_update_php['update_completed'] = 'به روز رسانی کامل شد'; // cpg1.5
$lang_update_php['check_versions'] = 'توصیه می‌شود %sنسخه فایل خود را بررسی کنید%s اگر بتازگی نسخه قدیمی را بروز کرده‌اید'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'اگر این کار را نکرده‌اید (یا نمی‌خواهید بررسی‌اش کنید)، می‌توانید به %sصفحه اول گالری‌تان%s بروید'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'The following errors were encountered and need to be corrected first'; // cpg1.5
$lang_update_php['delete_file'] = 'حذف %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Could not delete due to missing permissions. Delete the file manually!'; // cpg1.5
$lang_update_php['rename_file'] = 'تغییر نام %s به %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Could not rename due to missing permissions. Rename the file manually!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'ابزار مدیریت'; // cpg1.5
$lang_util_php['file'] = 'تصویر';
$lang_util_php['problem'] = 'مشکل';
$lang_util_php['status'] = 'موقعیت';
$lang_util_php['title_set_to'] = 'title set to';
$lang_util_php['submit_form'] = 'پذیرش';
$lang_util_php['titles_updated'] = '%s Titles Updated.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'با موفقیت بروز شد'; // cpg1.5
$lang_util_php['error_create'] = 'ایجاد خطا';
$lang_util_php['continue'] = 'Process more files'; // cpg1.5
$lang_util_php['main_success'] = 'The file %s was successfully used as main file';
$lang_util_php['error_rename'] = 'خطا در تغییر نام %s به %s';
$lang_util_php['error_not_found'] = 'تصویر %s پیدا نشد';
$lang_util_php['back'] = 'back to Admin tools start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Updating thumbnails and/or resized images, please wait...';
$lang_util_php['thumbs_continue_wait'] = 'Continuing to update thumbnails and/or resized images...';
$lang_util_php['titles_wait'] = 'بروز شدن عناوین، لطفا شکیبا باشید...';
$lang_util_php['delete_wait'] = 'حذف عناوین، لطفا شکیبا باشید';
$lang_util_php['replace_wait'] = 'حذف تصویر اصلی و جایگزینی آن با تصویر تغییر اندازه شده، لطفا شکیبا باشید...';
$lang_util_php['update'] = 'بروز کردن یا تغییر اندازه تصاویر';
$lang_util_php['update_what'] = 'آنچه باید بروز شود';
$lang_util_php['update_thumb'] = 'فقط تصاویر بند انگشتی';
$lang_util_php['update_pic'] = 'فقط تصاویر تغییر اندازه شده';
$lang_util_php['update_both'] = 'تصاویر بند انگشتی و تصاویر تغییر اندازه شده';
$lang_util_php['update_number'] = 'تعداد تصاویر پردازش شده در هر کلیک';
$lang_util_php['update_option'] = '(تنظیم پایین‌تری را انتخاب کنید اگر با مشکلی در مدت زمان مواجه شدید)';
$lang_util_php['update_missing'] = 'فقط بروز کردن تصاویر گمشده'; // cpg1.5
$lang_util_php['filename_title'] = 'نام تصویر &rArr; عنوان تصویر';
$lang_util_php['filename_how'] = 'عنوان تصویر چگونه تعدیل شود';
$lang_util_php['filename_remove'] = 'برداشتن اضافه (.jpg یا غیره) و جایگزینی _ (خط زیرین) با فاصله'; // cpg1.5
$lang_util_php['filename_euro'] = 'تغییر 2003_11_23_13_20_20.jpg به 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'تغییر 2003_11_23_13_20_20.jpg به 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'تغییر 2003_11_23_13_20_20.jpg به 13:20';
$lang_util_php['notitle'] = 'اجرا فقط برای تصاویر فاقد عنوان '; // cpg1.5
$lang_util_php['delete_title'] = 'حذف عناوین تصاویر';
$lang_util_php['delete_title_explanation'] = 'این عمل تمامی عناوین تصاویر را در آلبومی که مشخص نمودید حذف می‌کند.';
$lang_util_php['delete_original'] = 'حذف تصاویر در اندازه اصلی';
$lang_util_php['delete_original_explanation'] = 'این عمل تصاویر در اندازه اصلی را حذف می‌کند.';
$lang_util_php['delete_intermediate'] = 'حذف تصاویر در اندازه میانی';
$lang_util_php['delete_intermediate_explanation1'] = 'این عمل تصاویر در اندازه میانی را حذف می‌کند.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'اگر «ایجاد تصاویر میانی» را در پیکربندی فعال نموده‌اید از این ویژگی پس از اضافه نمودن تصاویر برای آزاد کردن فضای دیسک بهره برید.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'در حال حاضر گزینه پیکر بندی «ایجاد تصاویر میانی» %s است.'; // cpg1.5
$lang_util_php['no_image'] = '%s has been skipped because it is not an image.'; // cpg1.5
$lang_util_php['enabled'] = 'فعال'; // cpg1.5
$lang_util_php['disabled'] = 'غیر فعال'; // cpg1.5
$lang_util_php['delete_replace'] = 'Deletes the original images replacing them with the sized versions';
$lang_util_php['titles_deleted'] = 'تمامی عناوین آلبوم مشخص شده پاک شدند';
$lang_util_php['deleting_intermediates'] = 'حذف تصاویر میانی، لطفا شکیبا باشید...';
$lang_util_php['searching_orphans'] = 'جستجو برای جدا افتاده‌ها، لطفا شکیبا باشید...';
$lang_util_php['delete_orphans'] = 'حذف نظرات تصاویر گمشده';
$lang_util_php['delete_orphans_explanation'] = 'این عمل  تمامی نظرات مربوط به تصاویری که دیگر در گالری وجود ندارند شناسایی می‌کند و اجازه می‌دهد که حذف شوند.<br /> بررسی تمامی آلبوم‌ها.';
$lang_util_php['update_full_normal_thumb'] = 'همگی: اندازه اصلی‌ها، تغیر اندازه شده‌ها و بند انگشتی‌ها '; // cpg1.5
$lang_util_php['update_full_normal'] = 'تصاویر تغییر اندازه شده و تصاویر در اندازه اصلی (اگر کپی اصلی در دسترس است)'; // cpg1.5
$lang_util_php['update_full'] = 'فقط تصاویر در اندازه اصلی (اگر کپی اصلی در دسترس است)'; // cpg1.5
$lang_util_php['delete_back'] = 'حذف تصویر اصلی که تصویر واترمارک دار شده جایگزین است'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'این عمل تصویر اصلی را حذف می‌کند. اگر چه با این کار در فضای دیسک صرفه جویی می‌کنید، اما دیگر قادر نخواهید بود واترمارک را برگردانید!!! پس از این عمل واترمارک دائمی خواهد بود .'; // cpg1.5
$lang_util_php['finished'] = '<br />بروز رسانی تصاویر/بندانگشتی‌ها بپایان رسید!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'تازه کردن خودکار صفحه (بدون نیاز بیشتر به کلیک روی دکمه ادامه)'; // cpg1.5
$lang_util_php['refresh_db'] = 'بازنگری ابعاد تصاویر و اطلاعات اندازه.';
$lang_util_php['refresh_db_explanation'] = 'این عمل اندازه و ابعاد تصاویر را بازخوانی می‌کند. اگر سهمیه‌ها نادرست هستند یا تصاویر را بطور دستی تغییر داده‌اید از این ویژگی‌ استفاده کنید.';
$lang_util_php['reset_views'] = 'صفر کردن تعداد بازدیدها';
$lang_util_php['reset_views_explanation'] = 'شمار بازدیدها از تصاویر در آلبوم‌های مشخص شده صفر می‌شود.';
$lang_util_php['reset_success'] = 'باز گردانی موفق بود'; // cpg1.5
$lang_util_php['orphan_comment'] = 'نظرات جدا افتاده پیدا شد';
$lang_util_php['delete_all'] = 'حذف همه';
$lang_util_php['delete_all_orphans'] = 'حذف تمامی جدا افتاده‌ها';
$lang_util_php['comment'] = 'نظر: ';
$lang_util_php['nonexist'] = 'attached to non-existent file # ';
$lang_util_php['delete_old'] = 'حذف تصاویر با عمر بیش از روزهای تعیین شده'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'این عمل تصاویری که عمری بیش از روزهای تعیین شده دارند حذف می‌کند (تصاویر در اندازه اصلی، میانی، بند انگشتی). از این ویژگی برای آزاد کردن فضای دیسک استفاده کنید.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'اخطار: تصاویری که مشخص نمودید بدون اخطار بیشتری برای همیشه حذف خواهند شد!'; // cpg1.5
$lang_util_php['deleting_old'] = 'حذف تصاویر قدیمی، لطفا شکیبا باشید...'; // cpg1.5
$lang_util_php['older_than'] = 'حذف تصاویر با عمر بیش از %s روز'; // cpg1.5
$lang_util_php['del_orig'] = 'تصویر اصلی %s با موفقیت پاک شد'; // cpg1.5
$lang_util_php['del_intermediate'] = 'تصویر میانی %s با موفقیت پاک شد'; // cpg1.5
$lang_util_php['del_thumb'] = 'تصویر بند انگشتی %s با موفقیت پاک شد'; // cpg1.5
$lang_util_php['del_error'] = 'Error deleting %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s affected records.'; // cpg1.5
$lang_util_php['all_albums'] = 'آلبوم‌ها'; // cpg1.5
$lang_util_php['update_result'] = 'نتایج بروز رسانی'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filesize is incorrect'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Actual: '; // cpg1.5
$lang_util_php['updated'] = 'Updated'; // cpg1.5
$lang_util_php['filesize_error'] = 'Could not obtain file size (may be invalid file), skipping....'; // cpg1.5
$lang_util_php['skipped'] = 'Skipped'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensions are incorrect'; // cpg1.5
$lang_util_php['dimension_error'] = 'Could not obtain dimension info, skipping....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'ناتوان در تعمیر'; // cpg1.5
$lang_util_php['fullpic_error'] = 'تصویر %s وجود ندارد!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'مشکلی شناسایی نشد'; // cpg1.5
$lang_util_php['no_prob_found'] = 'مشکلی پیدا نشد.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'تغییر جدا  کننده کلمات کلیدی'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'تغییر جدا کننده کلمات کلیدی از %s به %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'تغییر جدا کننده کلمات کلیدی گالری به ترتیب جدید'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'پیش از تغییر  %s را جایگزین  %s کن'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'پس از تغییر  %s را جایگزین  %s کن'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'این عمل تمامی جدا کننده‌های کلمات کلیدی تصاویر را تغییر می‌دهد. برای جزئیات بیشتر به راهنما مراجعه کنید.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'بررسی نسخه';
$lang_versioncheck_php['versioncheck_output'] = 'نتیجه بررسی نسخه';
$lang_versioncheck_php['file'] = 'فایل';
$lang_versioncheck_php['folder'] = 'پوشه';
$lang_versioncheck_php['outdated'] = 'قدیمی‌تر از %s';
$lang_versioncheck_php['newer'] = 'جدید تر از %s';
$lang_versioncheck_php['modified'] = 'اصلاح شده';
$lang_versioncheck_php['not_modified'] = 'تغییر نیافته'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'نیاز به تغییر';
$lang_versioncheck_php['review_permissions'] = 'بازبینی مجوزها';
$lang_versioncheck_php['inaccessible'] = 'فایل خارج از دسترس است';
$lang_versioncheck_php['review_version'] = 'فایل شما از رده خارج شده است';
$lang_versioncheck_php['review_dev_version'] = 'فایل شما جدیدتر از انتظار است';
$lang_versioncheck_php['review_modified'] = 'فایل ممکن است خراب شده باشد (یا شما به عمد آن را ویرایش نمودید)';
$lang_versioncheck_php['review_missing'] = '%s مفقود و یا غیر قابل دسترس';
$lang_versioncheck_php['existing'] = 'موجود';
$lang_versioncheck_php['review_removed_existing'] = 'این فایل بدلیل مسائل امنیتی باید پاک شود';
$lang_versioncheck_php['counter'] = 'شمارنده';
$lang_versioncheck_php['type'] = 'نوع';
$lang_versioncheck_php['path'] = 'مسیر';
$lang_versioncheck_php['missing'] = 'مفقود';
$lang_versioncheck_php['permissions'] = 'مجوز‌ها';
$lang_versioncheck_php['version'] = 'نسخه';
$lang_versioncheck_php['revision'] = 'تجدید نظر';
$lang_versioncheck_php['modified'] = 'اصلاح شده';
$lang_versioncheck_php['comment'] = 'نظر';
$lang_versioncheck_php['help'] = 'راهنما';
$lang_versioncheck_php['repository_link'] = 'لینک متعلق به';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'جستجوی صفحه مطابق با این فایل در انبار پروژه واژگونی';
$lang_versioncheck_php['mandatory'] = 'االزامی';
$lang_versioncheck_php['mandatory_missing'] = 'فایل االزامی گمشده است'; // cpg1.5
$lang_versioncheck_php['optional'] = 'اختیاری';
$lang_versioncheck_php['removed'] = 'حذف شده'; // cpg1.5
$lang_versioncheck_php['options'] = 'گزینه‌ها';
$lang_versioncheck_php['display_output'] = 'نمایش نتیجه';
$lang_versioncheck_php['on_screen'] = 'بیانات کامل';
$lang_versioncheck_php['text_only'] = 'فقط متن';
$lang_versioncheck_php['errors_only'] = 'فقط نمایش خطاهای بالقوه';
$lang_versioncheck_php['hide_images'] = 'پنهان کردن تصاویر'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'فایل‌های اصلاح شده بررسی نشود'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'بدون تماس با مخزن آنلاین';
$lang_versioncheck_php['online_repository_explain'] = 'تنها در صورتی توصیه می‌شود که ارتباط ممکن نباشد';
$lang_versioncheck_php['submit'] = 'پذیرش/ از نو';
$lang_versioncheck_php['select_all'] = 'انتخاب همگی'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'نمایش %s فقره از %s پوشه/فایل‌های پردازش شده با %s مسائل بالقوه';
$lang_versioncheck_php['read'] = 'خواندن'; // cpg1.5
$lang_versioncheck_php['write'] = 'نوشتن'; // cpg1.5
$lang_versioncheck_php['warning'] = 'اخطار'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'در دسترس نیست'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'حذف ورودی‌ها';
$lang_viewlog_php['delete_this'] = 'حذف این ورودی';
$lang_viewlog_php['view_logs'] = 'نمایش ورودی‌ها';
$lang_viewlog_php['no_logs'] = 'هیچ ورودی ثبت نشده است.';
$lang_viewlog_php['last_updated'] = 'آخرین بروز رسانی'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Requirements'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'You appear to be running another, unsupported operating system'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Could not detect your operating system'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'A working installation of Coppermine on which the http upload function works properly'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'The administrator of the gallery must have granted you permission to upload'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'You need to be logged in to upload'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'You appear to be using another, unsupported browser'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Could not detect your browser'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'You need to specify a gallery name in config'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'You need to specify a gallery description in config'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'How to install'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Right click on %sthis link%s and select &quot;save target as...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Save the file on your client. When saving the file, make sure that the proposed file name is <tt>cpg_###.reg</tt> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'After the download has finished, execute the file by double clicking on it in order to register your server with the web publishing wizard'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Usage'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'In Windows Explorer, select the files you want to upload'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Make sure that the folders are not being displayed in left bar of the Explorer'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'click on &quot;Publish xxx on the web&quot; in the left pane'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Confirm your file selection'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'In the list of services that appear, select the one for your photo gallery (it has the name of your gallery)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Enter your login information if required'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Select the target album for your pictures or create a new one'; // cpg1.5
$lang_xp_publish_php['next'] = 'روی «بعدی» کلیک کنید'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'The upload of your pictures should start'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'When it is completed, check your gallery to see if pictures have been properly added'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'خوش آمدید <strong>%s</strong>،';
$lang_xp_publish_php['need_login'] = 'You need to login to the gallery using Internet Explorer before you can use this wizard.<p/><p>When you login don\'t forget to select the &quot;remember me&quot; option if it is present.';
$lang_xp_publish_php['no_alb'] = 'Sorry but there is no album where you are allowed to upload pictures with this wizard.';
$lang_xp_publish_php['upload'] = 'Upload your pictures into an existing album';
$lang_xp_publish_php['create_new'] = 'Create a new album for your pictures';
$lang_xp_publish_php['category'] = 'Category';
$lang_xp_publish_php['new_alb_created'] = 'آلبوم تازه شما &quot;<strong>%s</strong>&quot; ایجاد شد.';
$lang_xp_publish_php['continue'] = 'Press &quot;Next&quot; to start to upload your pictures';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'زبانه‌های الفبایی گالری کاربران'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'آنچه انجام می‌دهد: نمایش زبانه‌ها از A  تا Z در بالای گالری کاربران برای آنکه بازدیدکنندگان بتوانند با کلیک روی یک حرف مستقیما به صفحه‌ای که تمام گالری‌های کاربرانی را نمایش می‌دهد که شناسه کاربری‌شان با آن حرف شروع می‌شود بروند. نصب این پلاگین فقط اگر تعداد واقعا بسیاری گالری‌های کاربری داریدتوصیه می‌شود.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'انتخاب بر اساس نام کاربری'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'پلاگین نمونه'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'این یک پلاگین نمونه است. کار چندان مفیدی انجام نمی‌دهد - به این معنی که نشان می‌دهد پلاگین‌ها چه می‌توانند انجام دهند و چگونه رمز گذاری شده‌اند. هنگام فعال شدن برخی از متن‌های نمونه را به رنگ قرمز نمایش می‌دهد .'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Documentation'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'برای نصب شناسه (\'foo\') و رمز عبور (\'bar\') را وارد نمایید'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'شناسه'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'رمز عبور'; // cpg1.5
$lang_plugin_php['sample_output'] = 'This is sample data returned from the sample plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'An implementation of <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />When enabled, visitors can add your gallery to their browser\'s search bar.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Search %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'You may want to add some text to your site that explains what this plugin does'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Failed to open file %s - check permissions'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Failed to write to file %s - check permissions'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Enter the details to be used for the description file'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'نشانی اینترنتی گالری (باید صحیح باشد)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Name as displayed in browser'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'شرح'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s character limit'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'نمایش نموداری در هر صفحه گالری که کاربران و بازدیدکنندگان آنلاین را نشان می‌دهد.';
$lang_plugin_php['onlinestats_name'] = 'چه کسانی آنلاین هستند؟';
$lang_plugin_php['onlinestats_config_extra'] = 'To enable this plugin (make it actually display the onlinestats block), the string "onlinestats" (separated with a slash) has been added to "the content of the main page" in <a href="admin.php">Coppermine\'s config</a> in the section "Album list view". The setting should now look like "breadcrumb/catlist/alblist/onlinestats" or similar. To change the position of the block, move the string "onlinestats" around inside that config field.';
$lang_plugin_php['onlinestats_config_install'] = 'این پلاگین در هر بار برای پرس و جوهای اضافی در پایگاه داده‌ها از چرخه‌های CPU و بکارگیری منابع استفاده می‌کند. اگر گالری شما آهسته شده است یا تعدا بسیاری کاربر دارید، نباید از این پلاگین استفاده کنید .';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'تعداد %s کاربر ثبت نام شده وجود دارد';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' تعداد %s کاربر ثبت نام شده وجود دارد';
$lang_plugin_php['onlinestats_most_recent'] = '%s جدیدترین کاربر است';
$lang_plugin_php['onlinestats_is'] = 'در مجموع تعداد %s بازدید کننده آنلاین هستند';
$lang_plugin_php['onlinestats_are'] = 'در مجموع تعداد %s بازدید کننده آنلاین هستند';
$lang_plugin_php['onlinestats_and'] = 'و';
$lang_plugin_php['onlinestats_reg_member'] = '%s کاربر ثبت نام کرده';
$lang_plugin_php['onlinestats_reg_members'] = '%s کاربر ثبت نام کرده';
$lang_plugin_php['onlinestats_guest'] = '%s بازدید کننده';
$lang_plugin_php['onlinestats_guests'] = '%s بازدیدکننده';
$lang_plugin_php['onlinestats_record'] = 'بیشتر کاربران آنلاین هستند: %s در %s';
$lang_plugin_php['onlinestats_since'] = 'کاربران ثبت نام شده‌ای که در %s دقیقه اخیر آنلاین بوده‌اند عبارتند از: %s';
$lang_plugin_php['onlinestats_config_text'] = 'برای چه مدت می‌خواهید فهرست کاربران آنلاین ذخیره شود پیش از آنکه فرض شود خارج شده‌اند؟';
$lang_plugin_php['onlinestats_minute'] = 'دقیقه';
$lang_plugin_php['onlinestats_remove'] = 'حذف جدولی که برای ذخیره داده‌های آنلاین بکار می‌رود؟';
$lang_plugin_php['link_target_name'] = 'لینک هدف ';
$lang_plugin_php['link_target_description'] = 'تغییر روش لینک‌های خارجی در حال باز شدن:  زمانی که این پلاگین را فعال کنید، تمام لینک‌هایی خارجی در یک پنجره جدید (به جای همان پنجره)
باز می‌شوند .';
$lang_plugin_php['link_target_extra'] = 'این پلاگین دارای تاثیر زیادی روی لینک «Powered by Coppermine» در پایین خروجی گالری می‌باشد.';
$lang_plugin_php['link_target_recommendation'] = 'توصیه می‌شود برای جلوگیری از مجبور کردن کاربران‌تان از این پلاگین استفاده نکنید. باز شدن لینک‌ها در پنجره جداگانه به معنای مجبور کردن بازدیدکنندگان سایتتان است.';
}

?>