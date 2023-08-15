<?php
error_reporting(0);
ob_start();
$token = "5834706910:AAGb29JrsCS4qeBLLC2Xhfm2KBtgM7Q23fo"; #التوكن
define('API_KEY',$token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
mkdir("data/$from_id");
$https = file_get_contents("data/$from_id/HTTPS.txt");
$http = file_get_contents("data/$from_id/HTTP.txt");
$Socks4 = file_get_contents("data/$from_id/Socks4.txt");
$Socks5 = file_get_contents("data/$from_id/Socks5.txt");

$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

$admin = 1467587346; #ايديك
mkdir("data");

$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "$channel"; 
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  [اضغط هنا للشتراك في القناة]($link)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  $uuser",
]);return false;}

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$a3bs9 = file_get_contents("data/a3bs9.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");

if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
٭ تم دخول شخص جديد الى البوت الخاص بك 👾
. — — — — — — — — — — .
• معلومات العضو الجديد .
. — — — — — — — — — — .
• الاسم : $name
• المعرف : $user
• الايدي : $id
. — — — — — — — — — — .
• عدد الاعضاء الكلي : $all
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/start" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"-•
🤍 | اهلا بك
🤍 | اليك قائمه الاوامر
. — — — — — — — — — — .
dev: @VIPJL  || 🇮🇶 
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت .","callback_data"=>"abcd"],["text"=>"- فتح البوت .","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت .","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه .","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه .","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه .","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك .", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- نسخة احتياطيةه .", 'callback_data' => "file"],['text' => "- رفع النسخةه .", 'callback_data' => "up"]],
[['text' => "- الاحصائيات .", 'callback_data' => "pannel"],['text' => "- قسم الادمن .", 'callback_data' => "lIllabbas"]],
[['text' => "- التعديلات .", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "- كليشةه /start .", 'callback_data' => "editstart"]],
]])
]);   
}

//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اهلا", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- رفع ادمن.","callback_data"=>"adl"]],
[["text"=>"- اخر الادمن.","callback_data"=>"addmin"]],
[["text"=>"- حذف الادمنيه.","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو
 ",
]); 
file_put_contents("data/a3bs9.txt","a3bs9");
}
if($text !="/start" and $a3bs9 == "a3bs9" and !in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $a3bs9 == "a3bs9" and !in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك ادمن في البوت", 
]);
}
if($text !="/start" and $a3bs9 == "a3bs9" and in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو ادمن بالفعل", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس ادمنيه :
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- الصفحه الرئيسيه.","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لا' ,'callback_data'=>"bak"]],
[['text'=>'نعم' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف الادمنيه
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوقف" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"عذرا البوت يخضع للتحديث الان",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي الادمن
 عدد الاعضاء : ( $all )",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم باختيار ما يناسبك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه صورة ",'callback_data'=>"photoi"]],
[['text' => "اذاعه رسالة ", 'callback_data' => "msg"],['text' => "اذاعه توجيه ", 'callback_data' => "forward"]],
[['text' => "اذاعه ميديا ", 'callback_data' => "midea"],['text' => "اذاعه انلاين ", 'callback_data' => "inline"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه توجيه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 يمكنك استخدام جميع انوع الميديا ماعدى الصوره
 (ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال الصورة لنشرها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الصورة بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"قناة خاصة ",'callback_data'=>"link"]],
[['text'=>"قناة عامة ",'callback_data'=>"user"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'نعم ', 'callback_data'=>'yesde2'],
['text'=>'لا ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*اهلا بك في قسم - الاحصائيات . 📊
. — — — — — — — — — — .
 عدد اعضاء بوتك : $all
 المتفاعلين اليوم  : $todayuser
 عدد الرسائل المرسله : ".$abbas09['addmessage']."
 عدد الرسائل المستلمه : ".$abbas09['messagee']."
 مجموع الرسائل : $xll
. — — — — — — — — — — .
 اخر خمس مشتركين :
▫️ 1- ".$users[count($users)-2]."
▫️ 2- ️".$users[count($users)-3]."
▫️ 3- ️".$users[count($users)-4]."
▫️ 4- ️".$users[count($users)-5]."
▫️ 5- ️".$users[count($users)-6]."
. — — — — — — — — — — .*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == "editstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال رسالة الاستارت الان
 ",
]); 
file_put_contents("data/q1.txt","q1");
}
if($text != "/start" and $q1 == "q1"){
file_put_contents("data/q1.txt","none");
file_put_contents("q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم التعين بنجاح", 
]);
}

if ($data == 'bak'){
$msg = unlink("msg.php");
unlink("forward.php");
unlink("midea.php");
unlink("inlin.php");
unlink("photoi.php");
unlink("up.php");
unlink("up.php");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"-•
🤍 | اهلا بك
🤍 | اليك قائمه الاوامر
. — — — — — — — — — — .
dev: @VIPJL  || 🇮🇶 
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت .","callback_data"=>"abcd"],["text"=>"- فتح البوت .","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت .","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه .","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه .","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه .","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك .", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- نسخة احتياطيةه .", 'callback_data' => "file"],['text' => "- رفع النسخةه .", 'callback_data' => "up"]],
[['text' => "- الاحصائيات .", 'callback_data' => "pannel"],['text' => "- قسم الادمن .", 'callback_data' => "lIllabbas"]],
[['text' => "- التعديلات .", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "- كليشةه /start .", 'callback_data' => "editstart"]],
]])
]);   
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $message->message_id;
$text = $message->text;
$name = $update->message->from->first_name;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$name2 = $update->callback_query->from->first_name;
$message_id2 = $update->callback_query->message->message_id;

$chat_id    = $message->chat->id;
$from_id     = $message->from->id;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$username = $message->from->username;
$type       = $message->chat->type;
$new_chat        = $message->new_chat_member;
$left_chat         = $message->left_chat_member;
$new_id            = $new_chat->id; 
$left_id              = $left_chat->id;
$left_name              = $left_chat->first_name;


	##### رسالة ترسل للبوت#####
$name = $message->from->first_name;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$nmnni = json_decode(file_get_contents('hasan.json'),1);
if(!in_array($admin,$nmnni['des'])){
$nmnni['des'][] = "$admin";
file_put_contents('hasan.json',json_encode($nmnni));
} 


##رساله الرد قبل التفعيل##

if($text == '/start' and ! in_array($from_id,$nmnni['des'])){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=> "
- أهلا عزيزي ، لتفعيل البوت راسل المطور 🤍.
", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'- مراسلةه المطور .' ,'url'=>"https://t.me/VIPJL"]],
   ] 
   ])
  ]);  
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"• شخص جديد يريد تفعيل عضوية 🔓 .
👤| اسم الشخص : $name .
🔍| معرف الشخص : @$username .
ℹ️| ايدي الشخص : $from_id .",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تفعيل ؟ .','callback_data'=>"/hs @$from_id"]],
]])]);
}
if(preg_match('/hs @/', $data )) { 
    $sh = explode('/hs @',$data)[1]; 
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- تم تفعيل العضويةه بنجاح ✅ .",
]);
if(!in_array($sh,$nmnni['des'])){
bot('sendMessage',[
'chat_id'=>$sh,
'text'=>"
- تم تفعيل العضوية بنجاح ✅ 
ارسل /start .",
]);
$nmnni['des'][] = "$sh";
file_put_contents('hasan.json',json_encode($nmnni));
} 
} 

##رساله التفعيل##
if($text == '/start' and in_array($from_id,$nmnni['des'])){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://c4.wallpaperflare.com/wallpaper/274/323/713/code-php-html-ilya-pavlov-wallpaper-preview.jpg",
'caption'=>"*
⌁ : اهلاً عَمري { $name } .
⌁ : انا بوت اقوم بسحب بروكسيات .
⌁ : اضغط عالنوع الذي تريده وسأقوم بالتحميل .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- HTTP ." ,"callback_data"=>"HTTP"]],
[["text"=>"- proxy Telegram ." ,"callback_data"=>"Telegram"]],
[["text"=>"- HTTPS ." ,"callback_data"=>"HTTPS"]],
[["text"=>"- SOCKS5 ." ,"callback_data"=>"Socks5"],["text"=>"- SOCKS4 ." ,"callback_data"=>"Socks4"]],
[["text"=>"- about ." ,"callback_data"=>"info"]],
]])
]);
}
if($data == "back"){
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo'=>"https://c1.wallpaperflare.com/preview/182/936/1023/hacker-silhouette-hack-anonymous.jpg",
'caption'=>"*
⌁ : اهلاً عَمري { $name2 } .
⌁ : انا بوت اقوم بسحب بروكسيات .
⌁ : اضغط عالنوع الذي تريده وسأقوم بالتحميل .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- HTTP ." ,"callback_data"=>"HTTP"]],
[["text"=>"- HTTPS ." ,"callback_data"=>"HTTPS"]],
[["text"=>"- SOCKS5 ." ,"callback_data"=>"Socks5"],["text"=>"- SOCKS4 ." ,"callback_data"=>"Socks4"]],
[["text"=>"- about ." ,"callback_data"=>"info"]],
]])
]);
}
if($data == "info"){
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://c1.wallpaperflare.com/preview/182/936/1023/hacker-silhouette-hack-anonymous.jpg",
'caption'=>"
╭──── • ◈ • ────╮
么 [Black Diamond ](https://t.me/vipeh)
么 [Tom](https://t.me/VIPJL)
╰──── • ◈ • ────╯
⍟ 𝚃𝙷𝙴 𝙱𝙴𝚂𝚃 𝚂𝙾𝚄𝚁𝙲𝙴 𝙾𝙽 𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- back .","callback_data"=>"back"]],
]])
]);
}
if($data == "HTTP"){
$proxy = file_get_contents("https://www.proxy-list.download/api/v1/get?type=http");
file_put_contents("data/$from_id/HTTP.txt", $proxy);
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://c1.wallpaperflare.com/preview/182/936/1023/hacker-silhouette-hack-anonymous.jpg",
'caption'=>"*
- انتظر قليلا .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- 𝗗𝗘𝗩 ." ,"url"=>"t.me/VIPJL"]],
]])
]);
sleep(0.4);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('sendDocument',[  
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'document'=>new CURLFile("data/$from_id/HTTP.txt"),
'caption'=>"*
- HTTP .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- again .","callback_data"=>"HTTP"]],
[['text'=>"- back .","callback_data"=>"back"]],
]])
]);
}
if($data == "HTTPS"){
$proxy = file_get_contents("https://www.proxy-list.download/api/v1/get?type=https");
file_put_contents("data/$from_id/HTTPS.txt", $proxy);
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://c1.wallpaperflare.com/preview/182/936/1023/hacker-silhouette-hack-anonymous.jpg",
'caption'=>"*
- انتظر قليلا .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- 𝗗𝗘𝗩 ." ,"url"=>"t.me/VIPJL"]],
]])
]);
sleep(0.4);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('sendDocument',[  
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'document'=>new CURLFile("data/$from_id/HTTPS.txt"),
'caption'=>"*
- HTTPS .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- again .","callback_data"=>"HTTP"]],
[['text'=>"- back .","callback_data"=>"back"]],
]])
]);
}
if($data == "Socks4"){
$proxy = file_get_contents("https://api.proxyscrape.com/v2/?request=displayproxies&protocol=socks4&timeout=100000&country=all&ssl=all&anonymity=all");
file_put_contents("data/$from_id/Socks4.txt", $proxy);
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://c1.wallpaperflare.com/preview/182/936/1023/hacker-silhouette-hack-anonymous.jpg",
'caption'=>"*
- انتظر قليلا .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- 𝗗𝗘𝗩 ." ,"url"=>"t.me/VIPJL"]],
]])
]);
sleep(0.4);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('sendDocument',[  
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'document'=>new CURLFile("data/$from_id/Socks4.txt"),
'caption'=>"*
- SOCKS4 .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- again .","callback_data"=>"Socks4"]],
[['text'=>"- back .","callback_data"=>"back"]],
]])
]);
}
if($data == "Socks5"){
$proxy = file_get_contents("https://api.proxyscrape.com/v2/?request=displayproxies&protocol=socks5&timeout={bing}&country=all&ssl=all&anonymity=all");
file_put_contents("data/$from_id/Socks5.txt", $proxy);
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://c1.wallpaperflare.com/preview/182/936/1023/hacker-silhouette-hack-anonymous.jpg",
'caption'=>"*
- انتظر قليلا .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- 𝗗𝗘𝗩 ." ,"url"=>"t.me/VIPJL"]],
]])
]);
sleep(0.4);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('sendDocument',[  
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'document'=>new CURLFile("data/$from_id/Socks5.txt"),
'caption'=>"*
- SOCKS5 .
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- again .","callback_data"=>"Socks5"]],
[['text'=>"- back .","callback_data"=>"back"]],
]])
]);
}
if($data == "telegram"){
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('Sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://c1.wallpaperflare.com/preview/182/936/1023/hacker-silhouette-hack-anonymous.jpg",
'caption'=>"
    ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=wood-mood.www.fendi-berox.monster&port=443&secret=ee32b920dffb51643028e2f6b878d4eac179656b74616e65742e636f6d
 — — — — — —
↯ البينغ : 26 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=cloudaaflare.com.nokia.com.co.uk.do_yo.want_to.this.www.microsoft.com.there_is_no.pldaace_like.locllhost.www.bing.com.count_with_me.cyou.com.now_sudo.rm_rf.ddns.net.we_are_here.again_to_fight.everyone.i_am.the_inte-et.special_hsx.iol-toop.space&port=443&secret=ee000000000000000000000000000000007765622e62616c652e6972
 — — — — — —
↯ البينغ : 144 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=novinaco.ir.arioparvaz.ir.dorsascarf.ir.h_amid-_cp.com.ps_ychotherapie-bagheri.ir.kimia-sa_lamat-paj.ir.pdade.net.rey_haneshop.biz.sayeroshanco.ir.csir_tpro.ir.delsagallery.ir.ajilhosaini.com.srahkar.com.artavil.co.matia-academy.com.mostanadpasargad.lol&port=443&secret=eeda411655b684fe87abf58ec2235e28167765622e62616c652e6972
 — — — — — —
↯ البينغ : 32 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=zika.ir.ryanvalve.org.vakhibiya.ir.en-amin.ir.tadvinniroo.ir.khabiran.net.keihanserver.com.sinatebmg.com.farazkishtours.ir.arvijpub.com.dglamp.com.jahadtossee.ir.sokhane-ashena.com.shokashop.ir.nikanjob.ir.drahmadalimossaddeghi.com.powerfulliranian.info&port=443&secret=eeda411655b684fe87abf58ec2235e28167765622e62616c652e6972
 — — — — — —
↯ البينغ : 184 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=n.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.l.co.co.uk-charchter-google-digiakala-g-messanger-meaan.cloudc-99.space&port=443&secret=ee000000000000000000000000000000007765622e62616c652e696f
 — — — — — —
↯ البينغ : 107 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=cloudaaflare.com.nokia.com.co.uk.do_yo.want_to.this.www.microsoft.com.there_is_no.pldaace_like.locllhost.www.bing.com.count_with_me.cyou.com.now_sudo.rm_rf.ddns.net.we_are_here.again_to_fight.everyone.i_am.the_inte-et.special_hsx.d0nia.space&port=443&secret=ee000000000000000000000000000000007765622e62616c652e6972
 — — — — — —
↯ البينغ : 39 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=zistak.com.esfahanpart.com.badilgostar.com.hifly.ir.salafchegan-ip.ir.zhinko.com.newpopcorn.ir.shaparak-wear.ir.truncata.ir.wealthacademy.ir.abadisholding.com.mibrand1.ir.arnikacenter.ir.persianna.com.tirajeh.center.aryasan-pos.ir.mostanadayande.website&port=443&secret=eeda411655b684fe87abf58ec2235e28167765622e62616c652e6972
 — — — — — —
↯ البينغ : 187 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=lcnklpp.dynu.com&port=443&secret=eef4359a9b325ff1d1e5084df0e0f7537b6d736e2e636f6d
 — — — — — —
↯ البينغ : 26 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=sahabcard.com.borhantanpo_sh.ir.c_artr_oubleshoot.com.dtr_avel-lebanon.com.myheaven.ir.sobhe_taft.ir.parsa-r.ir.alborzins.net.ajide.ir.ocs_thr.com.drkarampour.ir.bmkashan.ir.saeed-bot2.ir.boseiran.com.cvpn.ir.frsco.ir.chatragroup.ir.hollandcompany.rodeo&port=443&secret=eeda411655b684fe87abf58ec2235e28167765622e62616c652e6972
 — — — — — —
↯ البينغ : 189 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=proxy.kamran007a.top&port=80&secret=ee869f86b41f8f159b60f0dc8111d1d458666173742e636f6d
 — — — — — —
↯ البينغ : 25 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=recent.immigration.extraordinary.accept.accident.self-microsoft.hair.yoern.space&port=443&secret=ee000000000000000000000000000000007765622e62616c652e6972
 — — — — — —
↯ البينغ : 114 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=65.109.13.31&port=443&secret=ee4416004416004400441604416000441666612e6d2e77696b6970656469612e6f7267
 — — — — — —
↯ البينغ : 1 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=cloudaaflare.com.nokia.com.co.uk.do_yo.want_to.this.www.microsoft.com.there_is_no.pldaace_like.locllhost.www.bing.com.count_with_me.cyou.com.now_sudo.rm_rf.ddns.net.we_are_here.again_to_fight.everyone.i_am.the_inte-et.special_hsx.000000000.space&port=443&secret=ee000000000000000000000000000000007765622e62616c652e6972
 — — — — — —
↯ البينغ : 179 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=194.116.217.127&port=443&secret=ee1603010200010001fc030386e24c3add79616e6465782e7275
 — — — — — —
↯ البينغ : 30000 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=cloudaaflare.com.nokia.com.co.uk.www.microsoft.com.there_is_no.pldaace_like.locllhost.www.bing.com.count_with_me.cyou.com.now_sudo.rm_rf.ddnss.net.we_are_here.again_to_fight.everyone.i_am.the_inte-et.special_hsz---hsh.d_d_d222.new-doaq.space.y-0-o.space&port=443&secret=ee000000000000000000000000000000007765622e62616c652e6972
 — — — — — —
↯ البينغ : 116 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=cloudflare.com.nokia.com.ir.co.uk.do_yo.want_to.with.this.wwuw.microsoft.hyu-0iop.sbs&port=443&secret=ee000000000000000000000000000000006b65746161626f6e6c696e652e636f6d
 — — — — — —
↯ البينغ : 7 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=hamim.co.hosainibrothers.com.mashha_d-bargh.ir.vilatab.com.parsianlotus.org.ariamahankabir.com.mirdisease.ir.satacom_pany.com.sebtco.com.ni_koohamianiranian.ir.itparts.ir.abrockposhesh.com.ns_un.net.peaple.ir.joombarg.com.randola.com.mahanairflight.info&port=443&secret=eeda411655b684fe87abf58ec2235e28167765622e62616c652e696f
 — — — — — —
↯ البينغ : 180 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=aw----h-------yu-------lk-----------------------00_m.linc.buzz&port=443&secret=ee000000000000000000000000000000007765622e62616c652e6972
 — — — — — —
↯ البينغ : 141 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=cloudflare.com.nokia.com.ir.co.uk.do_yo.want_to.with.this.www.microsoft.me.uk.dyno-upgrade.sbs.&port=443&secret=eecf09e5861586f39dafe5aa1f2ff9f20562616c61642e6972
 — — — — — —
↯ البينغ : 56 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=128.140.51.139&port=443&secret=ee000000000000000000000000000000006b65746161626f6e6c696e652e636f6d
 — — — — — —
↯ البينغ : 683 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=Sorena-dual.www.shaparak.day.&port=443&secret=7jK5IN_7UWQwKOL2uHjU6sFrZXRhYWJvbmxpbmUuY29t
 — — — — — —
↯ البينغ : 1 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=Sorena-dual.www.shaparak.day.&port=443&secret=7jK5IN_7UWQwKOL2uHjU6sFrZXRhYWJvbmxpbmUuY29t
 — — — — — —
↯ البينغ : 18 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=www.gb-ovh.homes.&port=443&secret=7gAAAAAAAAAAAAAAAAAAAAB3ZWIuYmFsZS5pcg==
 — — — — — —
↯ البينغ : 179 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=cloudflare.com.nokia.com.ir.co.uk.do_yo.want_to.with.this.www.microsoft.uk.co.ultra-p0wer.sbs.&port=443&secret=eecf09e5861586f39dafe5aa1f2ff9f20562616c61642e6972
 — — — — — —
↯ البينغ : 81 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=new.cns.dsfs.osadp.sadks.wikilocal.quest&port=8010&secret=7mSRzx5g9VhGn5qKmZfLQkVmYXJha2F2LmNvbQ==
 — — — — — —
↯ البينغ : 84 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=116.202.104.195&port=443&secret=ee000000000000000000000000000000006b65746161626f6e6c696e652e636f6d
 — — — — — —
↯ البينغ : 11 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=www.cloudscene.com.lechef-ir.info&port=443&secret=ee000000000000000000000000000000006b65746161626f6e6c696e652e636f6d
 — — — — — —
↯ البينغ : 20 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=Dorani-fetkazo.www.shaparak.day.&port=443&secret=7jK5IN_7UWQwKOL2uHjU6sFrZXRhYWJvbmxpbmUuY29t
 — — — — — —
↯ البينغ : 18 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=5.252.21.140&port=8443&secret=ee6cb3dc15a8eea68e940d39b2b8190092696d616765732e6170706c652e636f6d20
 — — — — — —
↯ البينغ : 2 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=114.gets-it.net&port=443&secret=ee8d7bae4a594dd151ccfec81f46668063646e2e79656b74616e65742e636f6d646c2e676f6f676c652e636f6d666172616b61762e636f6d20
 — — — — — —
↯ البينغ : 287 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=85.90.247.63&port=443&secret=eec210ca2aa6d3d81670ed32899925445b626c6f672e636c6f7564666c6172652e636f6d
 — — — — — —
↯ البينغ : 7 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=23.26.113.130&port=8010&secret=ee32b920dffb51643028e2f6b878d4eac1666172616b61762e636f6d
 — — — — — —
↯ البينغ : 58 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=37.27.4.54&port=443&secret=ee0000000000000000000000000000000063646e2e79656b74616e65742e636f6d
 — — — — — —
↯ البينغ : 31 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=199.247.16.197&port=6969&secret=ddb90c47a06ca64369151a3a8a59e5ceaf
 — — — — — —
↯ البينغ : 6 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=5.75.203.200&port=8088&secret=dd341f90bdb09109ce65c0380ded7c13e5
 — — — — — —
↯ البينغ : 9 ms .,
        ↯ تم العثور على بروكسي مناسب!
 — — — — — —
https://t.me/proxy?server=hagh.aloblog.trickip.net&port=443&secret=ee1603010200010001fc030386e24c3add7777772e7370656564746573742e6e6574
 — — — — — —
↯ البينغ : 434 ms .""
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- back .","callback_data"=>"back"]],
]])
]);
}