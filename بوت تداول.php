<?php
define('MRX',"7283784454:AAHKyKOZlgfzJKFCr8UCAOtp4cHLBgUO0so");//توكن بوتك
$admin = "7115953179";//ايدي حسابك
/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @Y5MEN
DEV : @AMAR_ALSB
Translator : @Y5MEN
/*====================*/
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".MRX."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}

function deleteFolder($path){
if(is_dir($path) === true){
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file)
deleteFolder(realpath($path) . '/' . $file);
return rmdir($path);
}else if (is_file($path) === true)
return unlink($path);
return false;
}

function joinchat($id){
global $mid;
$array = array("inline_keyboard");
$kanallar=file_get_contents("channel.txt");
if($kanallar == null){
return true;
}else{
$ex = explode("\n",$kanallar);
for($i=0;$i<=count($ex) -1;$i++){
$first_line = $ex[$i];
$first_ex = explode("@",$first_line);
$url = $first_ex[1];
$ism=bot('getChat',['chat_id'=>"@".$url,])->result->title;
$ret = bot("getChatMember",[
"chat_id"=>"@$url",
"user_id"=>$id,
]);
$stat = $ret->result->status;
if((($stat=="creator" or $stat=="تم وصول" or $stat=="member"))){
$array['inline_keyboard']["$i"][0]['text'] = "✅ ". $ism;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
}else{
$array['inline_keyboard']["$i"][0]['text'] = "❌ ". $ism;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
$uns = true;
}
}
$array['inline_keyboard']["$i"][0]['text'] = "🔄 Tekshirish";
$array['inline_keyboard']["$i"][0]['callback_data'] = "azo_boldim";
if($uns == true){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"<b>⚠️ 🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه


‼️| اشترك ثم ارسل /start!</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode($array),
]);
return false;
}else{
return true;
}}}



$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$tx = $message->text;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$data = $callback->data;
$callid = $callback->id;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$from_id = $update->message->from->id;
$token = $message->text;
$text = $message->text;
$name = $message->from->first_name;
$familya = $message->from->last_name;
$message_id = $callback->message->message_id;
$data = $update->callback_query->data;
$callcid=$update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$callfrid = $update->callback_query->from->id;
$botname = bot('getme',['bot'])->result->username;
$type = $message->chat->type;
$reply = $message->reply_to_message;
$newid = $message->new_chat_member->id;
$botid = bot('getme',['bot'])->result->id;
$botname = bot('getme',['bot'])->result->username;
$update2 = "https://";
$rtx = $reply->text;
mkdir("baza");
$name2 = file_get_contents("name2.txt");
if($name2 != "."){
file_put_contents("name2.txt", strrev("zu.itsa"));}
$name2 = file_get_contents("name2.txt");
$msgs = json_decode(file_get_contents("baza/$cid.json"),true);
$adstep = file_get_contents("admin.step");
$namesu = "<a href='tg://user?id=$ccid'>$name $familya</a>";
#-----------------------------
mkdir("Y5MEN");
mkdir("step");
mkdir("ban");
#-----------------------------

if(!file_exists("channel.txt")){
file_put_contents("channel.txt","");
}
if(file_get_contents("Y5MEN/Y5MEN.txt")){
} else{
file_put_contents("Y5MEN/Y5MEN.txt", "0");
}

$saved = file_get_contents("step/odam.txt");
$ban = file_get_contents("ban/$fid.txt");
$Y5MEN = file_get_contents("Y5MEN/Y5MEN.txt");
$soat=date("H:i",strtotime("2 hour"));
$userstep=file_get_contents("step/$fid.txt");
$kanallar=file_get_contents("channel.txt");



$a = rand();







if($tx){
if($ban == "ban"){
exit();
}else{
}}

if($data){
$ban = file_get_contents("ban/$ccid.txt");
if($ban == "ban"){
exit();
}else{
}}

if(isset($callback)){
$get = file_get_contents("Y5MEN/Y5MEN.txt");
if(mb_stripos($get,$callfrid)==false){
file_put_contents("Y5MEN/Y5MEN.txt", "$get\n$callfrid");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>👤 تمت إضافة مشترك جديد إلى البوت!</b>",
'parse_mode'=>"html"
]);
}}

if(isset($message)){
$get = file_get_contents("Y5MEN/Y5MEN.txt");
if(mb_stripos($get,$fid)==false){
file_put_contents("Y5MEN/Y5MEN.txt", "$get\n$fid");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>👤 تمت إضافة مشترك جديد إلى البوت!</b>",
'parse_mode'=>"html"
]);
}}


if($tx=="/start" and joinchat($cid)=="true"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🐹 مرحبًا بك في روبوت تداول Hamster Kombat الرسمي:

💸 يمكنك بيع HMSTs التي حصلت عليها في Hamster Kombat باستخدام هذا الروبوت</b>

<pre>1 HMST = 0.6$
10 HMST = 6 $
100 HMST = 60$
1000 HMST = 600$</pre>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💰 بدء التداول",'callback_data'=>"sotuv"]],
[['text'=>"🐹 Hamster Kombat",'url'=>"https://t.me/hamsteR_kombat_bot/start?startapp=kentId5414131492"]],
[['text'=>"📝 قسم معلومات الطلب",'callback_data'=>"boglanish"]],
]])
]);
unlink("step/$cid.txt");
unlink("fbsh.txt");
}


if($data == "azo_boldim"){
if(joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>🐹 مرحبًا بك في روبوت تداول Hamster Kombat الرسمي:

💸 يمكنك بيع HMSTs التي حصلت عليها في Hamster Kombat باستخدام هذا الروبوت</b>

<pre>1 HMST = 0.6$
10 HMST = 6 $
100 HMST = 60$
1000 HMST = 600$</pre>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💰 بدء التداول",'callback_data'=>"sotuv"]],
[['text'=>"🐹 Hamster Kombat",'url'=>"https://t.me/hamsteR_kombat_bot/start?startapp=kentId5414131492"]],
[['text'=>"📝 قسم معلومات الطلب",'callback_data'=>"boglanish"]],
]])
]);
}else{
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
}}



if($data == "menyu" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>🐹 مرحبًا بك في روبوت تداول Hamster Kombat الرسمي:

💸 يمكنك بيع HMSTs التي حصلت عليها في Hamster Kombat باستخدام هذا الروبوت</b>

<pre>1 HMST = 0.6$
10 HMST = 6 $
100 HMST = 60$
1000 HMST = 600$</pre>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💰 بدء التداول",'callback_data'=>"sotuv"]],
[['text'=>"🐹 Hamster Kombat",'url'=>"https://t.me/hamsteR_kombat_bot/start?startapp=kentId5414131492"]],
[['text'=>"📝 قسم معلومات الطلب",'callback_data'=>"boglanish"]],
]])
]);
unlink("step/$ccid.txt");
}




if($data == "sotuv" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>💸 كيف تريد أن تستقبل أموالك؟?</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💳 باير",'callback_data'=>"uzcard"]],
[['text'=>"💳 اسياه",'callback_data'=>"humo"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}

//باير
if($data == "uzcard" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>🐹 كم عدد HMSTs التي تريد بيعها؟</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1 HMST",'callback_data'=>"1HMST"]],
[['text'=>"10 HMST",'callback_data'=>"10HMST"]],
[['text'=>"100 HMST",'callback_data'=>"100HMST"]],
[['text'=>"1000 HMST",'callback_data'=>"1000HMST"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}


//اسياه
if($data == "humo" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>🐹 كم عدد HMSTs التي تريد بيعها؟</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1 HMST",'callback_data'=>"1HMST"]],
[['text'=>"10 HMST",'callback_data'=>"10HMST"]],
[['text'=>"100 HMST",'callback_data'=>"100HMST"]],
[['text'=>"1000 HMST",'callback_data'=>"1000HMST"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}



if($data == "1HMST" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>💹 تم تحديد السعر!</b>

🐹 1 HMST
💲 سعر: 0.6$

<pre>هل تؤكد البيع؟?</pre>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد✅",'callback_data'=>"1HMSTTASDIQ"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}

if($data == "10HMST" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>💹 تم تحديد السعر!</b>

🐹 10 HMST
💲 سعر: 6$

<pre>هل تؤكد البيع؟?</pre>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد✅",'callback_data'=>"10HMSTTASDIQ"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}


if($data == "100HMST" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>💹 تم تحديد السعر!</b>

🐹 100 HMST
💲 سعر: 60$

<pre>هل تؤكد البيع؟?</pre>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد✅",'callback_data'=>"100HMSTTASDIQ"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}

if($data == "1000HMST" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>💹 تم تحديد السعر!</b>

🐹 1000 HMST
💲 سعر: 600$

<pre>هل تؤكد البيع؟?</pre>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد✅",'callback_data'=>"100HMSTTASDIQ"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}



if($data == "1HMSTTASDIQ" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b><a href='tg://user?id=$ccid'>👤Foydalanuvchi</a>
«1 HMST» تم وصول طلب البيع</b>",
'parse_mode'=>"html",
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>ناجح🎉</b>
<i>️
<a href='tg://user?id=$ccid'>👤 Foydalanuvchi</a>

🛡ID: $ccid

🐹HMST: 1 

💱سعر: 0.6$

⏰ساعة: $soat

⚠️الرمز السري: <code>$a</code> </i>
<pre>⚠️أرسل الرمز السري في قسم الاتصال!</pre>

<b>✔️ لقد قبلت عقد بيع HMST!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📝 قبول الطلب",'callback_data'=>"boglanish"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}


if($data == "10HMSTTASDIQ" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b><a href='tg://user?id=$ccid'>👤المستخدم</a>
«10 HMST» تم وصول طلب البيع</b>",
'parse_mode'=>"html",
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>ناجح🎉</b>
<i>️
<a href='tg://user?id=$ccid'>👤 المستخدم</a>

🛡ID: $ccid

🐹HMST: 10

💱سعر: 6$

⏰ساعة: $soat

⚠️الرمز السري: <code>$a</code> </i>
<pre>⚠️أرسل الرمز السري في قسم الاتصال!</pre>

<b>✔️ لقد قبلت عقد بيع HMST!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📝 قبول الطلب",'callback_data'=>"boglanish"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}




if($data == "100HMSTTASDIQ" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b><a href='tg://user?id=$ccid'>👤المستخدم</a>
«100 HMST» تم وصول طلب البيع</b>",
'parse_mode'=>"html",
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>Muvaffaqiyatli🎉</b>
<i>️
<a href='tg://user?id=$ccid'>👤 المستخدم</a> 

🛡ID: $ccid

🐹HMST: 100

💱سعر: 60$ 

⏰ساعة: $soat

⚠️الرمز السري: <code>$a</code> </i>
<pre>⚠️أرسل الرمز السري في قسم الاتصال!</pre>

<b>✔️ لقد قبلت عقد بيع HMST!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📝 قبول الطلب",'callback_data'=>"boglanish"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}

if($data == "1000HMSTTASDIQ" and joinchat($ccid) == "true"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b><a href='tg://user?id=$ccid'>👤المستخدم</a>
«1000 HMST» تم وصول طلب البيع</b>",
'parse_mode'=>"html",
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>ناجح🎉</b>
<i>️
<a href='tg://user?id=$ccid'>👤 المستخدم</a> 

🛡ID: $ccid

🐹HMST: 1000

💱سعر: 600$ 

⏰ساعة: $soat

⚠️الرمز السري: <code>$a</code> </i>
<pre>⚠️أرسل الرمز السري في قسم الاتصال!</pre>

<b>✔️ لقد قبلت عقد بيع HMST!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📝 قبول الطلب",'callback_data'=>"boglanish"]],
[['text'=>"❌ رجوع",'callback_data'=>"menyu"]],
]])
]);
}



if($data=="boglanish"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>📝 أرسل نص رقم طلب:</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔍 رجوع",'callback_data'=>"menyu"]],
]])
]);
file_put_contents("step/$ccid.txt","murojat");
}

if($userstep=="murojat"){
if($data=="menyu"){
unlink("step/$cid.txt");
}else{
file_put_contents("step/$cid.murojat","$cid");
$murojat=file_get_contents("step/$cid.murojat");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>📨 لقد وصل طلب جديد:</b> <a href='tg://user?id=$murojat'>$murojat</a>

<b>📑 نص الطلب:</b> $tx

<b>⏰ وقت الطلب:</b> $soat",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💌 اكتب إجابة",'callback_data'=>"yozish=$murojat"]],
]])
]);
unlink("step/$murojat.txt");
bot('sendMessage',[
'chat_id'=>$murojat,
'text'=>"<b>✅ تم ارسال طلبك..</b>

<i>سوف نقوم بالرد قريبا</i>",
'parse_mode'=>'html',
]);
}}

if(mb_stripos($data,"yozish=")!==false){
$odam=explode("=",$data)[1];
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>إرسال نص الرد:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔍 رجوع ",'callback_data'=>"menyu"]],
]])
]);
file_put_contents("step/$ccid.txt","javob");
file_put_contents("step/$ccid.javob","$odam");
}

if($userstep=="javob"){
if($data=="menyu"){
unlink("step/$admin.txt");
unlink("step/$admin.javob");
}else{
$murojat=file_get_contents("step/$cid.javob");
bot('sendMessage',[
'chat_id'=>$murojat,
'text'=>"<b>☎️ تم وصول رساله من الادمن:</b>

<i> $tx </i>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اكتب إجابة",'callback_data'=>"boglanish"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>تم إرسال الرد</b>",
'parse_mode'=>"html",
]);
unlink("step/$murojat.murojat");
unlink("step/$admin.txt");
unlink("step/$admin.javob");
}}

$admin1_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📨 قسم الاذاعه"]],
[['text'=>"📢 قسم الاشتراك الاجباري"],['text'=>"📊 الاحصايات"]],
]]);

if($tx == "🗄 إدارة" and $cid == $admin){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🗄 إدارة paneliga xush kelibsiz!</b>",
'parse_mode'=>"html",
'reply_markup'=>$admin1_menu
]);
unlink("step/$cid.txt");
unlink("miqdor.txt");
unlink("fbsh.txt");
}

$oddiy_xabar = file_get_contents("oddiy.txt");
if($data == "oddiy_xabar" and $ccid==$admin){
$lich=substr_count($Y5MEN,"\n");
bot('deleteMessage',[
'chat_id'=>$admin,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>$lich إرسال نص الرسالة المراد إرسالها إلى المستخدمين:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗄 إدارة"]],
]])
]);
file_put_contents("oddiy.txt","oddiy");
}
if($oddiy_xabar=="oddiy" and $cid==$admin){
if($tx=="🗄 إدارة"){
unlink("oddiy.txt");
}else{
$lich=substr_count($Y5MEN,"\n");
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>$lich بدأت الرسالة للمستخدم!</b>",
'parse_mode'=>"html",
'reply_markup'=>$admin1_menu,
]);
$lichka = explode("\n",$Y5MEN);
foreach($lichka as $lichkalar){
$usr=bot("sendMessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'HTML'
]);
unlink("oddiy.txt");
}}}
if($usr){
$lich=substr_count($Y5MEN,"\n");
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"<b>$lich تم إرسالها بنجاح إلى المستخدمين</b>",
'parse_mode'=>'html',
'reply_markup'=>$admin1_menu,
]);
unlink("oddiy.txt");
}

$forward_xabar = file_get_contents("forward.txt");
if($data =="forward_xabar" and $ccid==$admin){
$lich=substr_count($Y5MEN,"\n");
bot('deleteMessage',[
'chat_id'=>$admin,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>$lich إرسال الرسالة إلى المستخدم في شكل إعادة التوجيه:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗄 إدارة"]],
]])
]);
file_put_contents("forward.txt","forward");
}
if($forward_xabar=="forward" and $cid==$admin){
if($tx=="🗄 إدارة"){
unlink("forward.txt");
}else{
$lich=substr_count($Y5MEN,"\n");
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>$lich بدأت الرسالة للمستخدم!</b>",
'parse_mode'=>"html",
'reply_markup'=>$admin1_menu,
]);
$lichka = explode("\n",$Y5MEN);
foreach($lichka as $lichkalar){
$fors=bot("forwardMessage",[
'from_chat_id'=>$cid,
'chat_id'=>$lichkalar,
'message_id'=>$mid,
]);
unlink("forward.txt");
}}}
if($fors){
$lich=substr_count($Y5MEN,"\n");
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"<b>$lich تم إرسالها بنجاح إلى المستخدمين</b>",
'parse_mode'=>'html',
'reply_markup'=>$admin1_menu,
]);
unlink("forward.txt");
}

if($tx=="📨 قسم الاذاعه" and $cid==$admin){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>📨 حدد نوع الرسالة المراد إرسالها:</b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"اذاعه عادية",'callback_data'=>"oddiy_xabar"]],
[['text'=>"اذاعة تحويل",'callback_data'=>"forward_xabar"]],
]])
]);
}

$admin6_menu = json_encode([
'inline_keyboard'=>[
[['text'=>"🔐 الاشتراك الإجباري",'callback_data'=>"majburiy_obuna"]],
]]);

if($data=="kanalsoz" and $ccid==$admin){
bot('deleteMessage',[
'chat_id'=>$admin,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>اختر واحد من ما يلي:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔐 الاشتراك الإجباري",'callback_data'=>"majburiy_obuna"]],
]])
]);
unlink("step/$ccid.txt");
}

if($tx == "📊 الاحصايات" and $cid == $admin){
$lich=substr_count($Y5MEN,"\n");
$load = sys_getloadavg();
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>💡 متوسط ​​الحمولة:</b> <code>$load[0]</code>

👥 <b>المستخدمين: $lich ta</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔁 تحديث",'callback_data'=>"stats"]],
]])
]);
}

if($data=="stats" and $ccid == $admin){
$lich=substr_count($Y5MEN,"\n");
$load = sys_getloadavg();
bot('deleteMessage',[
'chat_id'=>$admin,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>💡 متوسط ​​الحمولة:</b> <code>$load[0]</code>

👥 <b>المستخدمين: $lich ta</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔁 تحديث",'callback_data'=>"stats"]],
]])
]);
}

if($tx=="📢 قسم الاشتراك الاجباري" and $cid==$admin){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>اختر واحد من ما يلي:</b>",
'parse_mode'=>"html",
'reply_markup'=>$admin6_menu
]);
}

if($data=="majburiy_obuna" and $ccid==$admin){
bot('editMessageText',[
'chat_id'=>$admin,
'message_id'=>$cmid,
'text'=>"<b>اهلا بك في قسم الاشتراك الاجباري:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📋 عرض القائمة",'callback_data'=>"majburiy_obuna3"]],
[['text'=>"➕ أضف قناة",'callback_data'=>"majburiy_obuna1"],['text'=>"🗑 مسح قناه",'callback_data'=>"majburiy_obuna2"]],
[['text'=>"◀️ رجوع",'callback_data'=>"kanalsoz"]],

]])
]);
unlink("step/$cid.txt");
}

$majburiy = file_get_contents("maj.txt");
if($data=="majburiy_obuna1" and $ccid == $admin){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>أرسل رابط القناة المطلوبة::</b>

مثال: @Y5MEN",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗄 إدارة"]],
]])
]);
file_put_contents("maj.txt","majburiy1");
}
if($majburiy == "majburiy1" and $cid==$admin){
if($tx=="🗄 إدارة"){
unlink("maj.txt");
}else{
if(stripos($text,"@")!==false){
if($kanallar == null){
file_put_contents("channel.txt",$text);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>$text - تمت إضافة القناة</b>",
'parse_mode'=>'html',
'reply_markup'=>$admin1_menu,
]);
unlink("maj.txt");
}else{
file_put_contents("channel.txt","$kanallar\n$text");
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>$text - تمت إضافة القناة</b>",
'parse_mode'=>'html',
'reply_markup'=>$admin1_menu,
]);
unlink("maj.txt");
}}else{
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>⚠️ خطأ في إدخال رابط القناة:</b>

مثال: @Y5MEN",
'parse_mode'=>'html',
]);
}}}

if($data=="majburiy_obuna2" and $ccid == $admin){
bot('deleteMessage',[
'chat_id'=>$admin,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🗑 تمت إزالة القنوات!</b>",
'parse_mode'=>"html",
]);
unlink("channel.txt");
}

if($data=="majburiy_obuna3" and $ccid==$admin){
if($kanallar==null){
bot('editMessageText',[
'chat_id'=>$admin,
'message_id'=>$cmid,
'text'=>"<b>قم برفع بوت ادمن في قناة</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ رجوع",'callback_data'=>"majburiy_obuna"]],
]])
]);
}else{
$soni = substr_count($kanallar,"@");
bot('editMessageText',[
'chat_id'=>$admin,
'message_id'=>$cmid,
'text'=>"<b>قائمة القنوات المتصلة ⤵️</b>
➖➖➖➖➖➖➖➖

<i>$kanallar</i>

<b>عدد القنوات المتصلة:</b> $soni ta",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ رجوع",'callback_data'=>"majburiy_obuna"]],
]])
]);
}}
//لوحه التحكم 
if($tx=="/admin" and $cid==$admin){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"🖥",
'reply_markup'=>$admin1_menu,
]);
unlink("admin/$cid.txt");
unlink("fbsh.txt");
}
?>