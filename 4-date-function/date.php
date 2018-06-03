<?php 

  /*
    ان للوقت و التاريخ اهمية كبيرة جدا ً و خصوصا ً في عالم الويب
    (تاريخ إضافة مقال , تعليق أو آخر تحديث للموقع ..الخ) ,
  وبالتاكيد تُوفر لغة php 
    امكانية الحصول  على الوقت والتاريخ .

    php و للحصول على الوقت أو التاريخ في
    string التي تُعيد الوقت أو التاريخ على شكل سلسلة نصية  date نستخدم الدالة 
    حسب التنسيق المُمرر اليها سواء اظهار التاريخ أو الوقت به 

    php جدول التنسيقات التي يمكن استخدامها مع دوال الوقت والتاريخ في 
  */
  
  // عرض اليوم على شكل ارقام من 01 - 31
  // echo date('d'); 
  
  // عرض اليوم على شكل ارقام بدون الاصفار 1 - 31
  // echo date('j'); 
  
  /*
    N الحرف 
    يُستخدم للحصول على رقم اليوم من الاسبوع
    l وتتراوح قيمته واحد الى سبعة, وللحصول على اسم اليوم من السبوع نستخدم حرف 
  */

  // echo date('l');
  // echo date('N');

  /*
    يعيد رقم الشهر m الحرف
    وتتراوح قيمته بين 01 - 12 
    n وللحصول على رقم الشهر بدون اصفار استخدم التنسيق
  */

  // echo date('m');

  //  يُعيد رقم السنة الحالية بشكل اربعة ارقام  Y الحرف 
  // echo date('Y');

  // للحصول على تاريخ اليوم والشهر والسنة مع مبعض
  // 2018-06-03
  // echo date('Y-m-d');

  /*
    التعامل مع الوقت لاكن الوقت الذي يتم التعامل معه هو وقت الخادم سواء على الإستضافة أو خادم شخصي ويعتمد هذا على البلد الموجود به الخادم، وإن كان الخادم هو جهازك سيكون توقيت الخادم هو توقيت جهازك لأنه هو الخادم في هذه الحالة.

    يُمكنك استخدام دالة date_default_timezone_set 
    لضبط القيمة الإفتراضية للبلد الذي تريده ليتم اعتماد التوقيت الجديد
    في جميع تعاملات الوقت في الملف المُعرفه الدالة أعلاه.
  
    مثال بسيط
    date_default_timezone_set('Asia/Baghdad');
    او
    date_default_timezone_set("Europe/Stockholm");

  */
  // H الساعة الحالية لكن بنظام 12 ساعة, وللحصول على وساعة حالية بنظام 24 ساعه نستخدم حرف 
  // echo date('h');

  // ليُعيد الدقائق الحالية
  // echo date('i');

  // يُعيد الثواني الحالية 
  // echo date('s');

  // لمعرفة الوقت مساء او صباح 
  // AM or PM
  // echo date('a');

  // لعرض الوقت بالكامل
  // 10:30:29AM
  // echo date('H:i:sa');

  /*
   لا تشغل نفسك في حفظ الجدول السابق لان كلها متوفرة على موقع اللغة
   http://php.net/manual/en/function.date.php
  */

  /*
    (The unix timestamp)  بصمة الوقت لنظام اليونكس 
    time باختصار هو عدد الثواني منذ منتصف ليلة رأس السنة عام 1970 , ولتوليد هذه البصمة استخدم الدالة 
    التي تُعيد الوقت الحالي
    mktime أما اذا اردت ان تحصل على بصمة الوقت لأي تاريخ تريد استخدم الدالة
  */
  // mktime($hour, $minute, $second, $month, $day, $year);
  // لكل هذه الدالة تسترجع الوقت على نظام يونكس اي على شكل ثواني من سنة 1970 الى الوقت الي اردت حصول عليها
  
  $mkTime = mktime(10, 19, 30, 9, 10, 2014); // الرقم الناتج من هذا الدالة تكون على شكل رقم كبير للثانية
 
  // date ولتحويلها لوقت مفهوم بستخدم التنسيق نستطيع بتمريرها على شكل متغير داخل دالة التاريخ
  //echo date('m/d/Y', $mkTime);

  // اول على شكل متخصر
  // echo date('m/d/Y', mktime(10, 19, 30, 9, 10, 2014));

  //  بتحويل التاريخ الى عدد الثواني بحسب نظام لينكس strtotime() وايضا يمكننا استخدام دالة
  // وتاخذ بارمتر اجباري وهو تاريخ معين على شكل نص
  $timeStamp = strtotime('23 December 2013');
  $timeStamp2 = strtotime('tomorrow');
  $timeStamp3 = strtotime('+2 Months');
  $timeStamp4 = strtotime('last day of +2 Months');
  $timeStamp5 = strtotime('next Thursday');

  // date ولتحويلها ايضا نستطيع استخدام دالة 
  //echo date('m/d/Y', $timeStamp5);
?>