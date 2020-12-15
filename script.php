<?php

require_once 'Constant.php';

class Script{
    static $inited;

    const PR_NEWGAME = 0; // private new game
    const PR_JOINGAME = 1; // private join game

    const PU_KINGDONE = 2; // public king already done the discussion

    const PU_REJECTCHANGEKING = 7; // because quest is rejected, go to next king
    const PU_KINGNEEDDISCUSS = 8; // before choose xx players, %s need %d seconds to discuss
    const PU_AFTERAPPROVE = 9; // approve is bigger, quest is executed.

    const PR_EXECQUEST = 10; // Quest no. xx, what do you want to choose

    const PR_SUCCESS = 11; // success
    const PR_FAIL = 12; // fail

    const PR_EXECQUESTGOOD = 13; // "Kamu orang baik. Kamu pun berusaha untuk menyelesaikan quest dengan sebaik-baiknya.";

    const PR_GOFORQUEST = 14; // xx pergi menyelesaikan quest, diberikan waktu xx.

    const PR_YOUAREMERLIN = 15; // you are merlin. bad guy are xxx
    const PR_YOUAREPERCIVAL = 16; // you are percival. merlin are xxx
    const PR_YOUAREGOODNORMAL = 17; // you are villager
    const PR_YOUAREMORDRED = 18; // you are mordred. Your bad team are xxx
    const PR_YOUAREASSASSIN = 19; // you are assassin. Your bad team are xxx
    const PR_YOUAREMORGANA = 20; // you are morgana. Your bad team are xxx
    const PR_YOUAREOBERON = 21; // you are oberon.
    const PR_YOUAREBADNORMAL = 22; // you are bad normal.

    const PU_KINGNEEDASSIGN = 23; // %s as king will assign %d players to do quest. time given %d
    const PR_SENDONEPLAYER = 24; // Choose person no. xx (from xx players) to do the quest.

    const PR_KILLMERLIN = 25; // Kill merlin
    const PR_LADYCHOOSE = 26; // Choose person to check
    const PU_APPRREJINST = 27; // %s telah menunjuk %s. %d to discuss

    const PU_REJECT5TIMES= 28; // Quest sudah direject 5 kali.
    const PU_FAILWITHXFAIL= 29; // Fail with xx fail

    const PU_BADGUYSWONQUEST= 30; // bad guys won
    const PU_GOODGUYSWON = 31; // good guys won

    const PU_BADGUYSWONKILL= 32; // bad guys won

    const PU_LADYLAKEINST = 33; // %s as lady lake may choose 1 person

    const PU_KILLMERLIN = 34; // 3 quest success. Tim jahat adalah %s.

    const PU_QSUCCESSNOFAIL = 35; // Quest success
    const PU_QSUCCESSXXFAIL = 36; // but has xx fail

    const PR_ASSIGNONEQUEST = 37; // you have assign %s to quest
    const PU_ASSIGNONEQUEST = 38; // %s has assign %s to quest

    const PR_BADGUYSUCCESS = 39; //
    const PR_BADGUYFAIL = 40; //

    const PR_LADYNOTSEE = 41; //
    const PU_LADYNOTSEE = 42; //

    const PR_KILLMERLINSUCCESS = 43; //
    const PU_KILLMERLINSUCCESS = 44; //
    const PU_MERLIN = 45; //
    const PU_NOTMERLIN = 46; //

    const PR_LADYSEE = 47; //
    const PR_GOOD = 48; //
    const PR_BAD = 49; //
    const PU_LADYSEE = 50; //

    const PR_ASSIGNLATE = 51; //
    const PU_ASSIGNLATE = 52; //

    const PU_APPRREJLATE = 53; //
    const PU_APPRREJREMIND = 54; //

    const PR_BADGUYLATESUCCESS = 55; //
    const PR_BADGUYLATEFAIL = 56; //

    const PU_DISCUSSREMIND = 57; //

    const PR_LADYLATE = 58; //
    const PU_LADYLATE = 59; //

    const PR_KILLMERLINLATE = 60; //
    const PU_KILLMERLINLATE = 61; //
    const PU_KILLMERLINREMIND = 62; //

    const PU_NOHISTFOUND = 63; //
    const PU_HISTQEXECBY = 64; //
    const PU_HISTQREJECTBY = 65; //
    const PU_HISTQFAILREJ = 66; //

    const PU_CANNOTJOINFULL = 67; //
    const PU_CANNOTJOIN = 68; //
    const PU_STARTMEFIRST = 69; //

    const PU_CREATEFIRST = 70; //
    const PU_GAMESTART = 71; //
    const PU_GAMECANCEL = 72; //

    const PU_JOINREMIND = 73; //
    const PU_JOINSTART = 74; //
    const PU_JOINSUCCESS = 75; //

    const PR_YOUAREMORGAUSE= 76; // you are morgause.
    const PR_YOUAREKNIGHTTHEREBAD= 77; // you are knight, at least 1 bad
    const PR_YOUAREKNIGHTNOBAD= 78; // you are knight, no bad

    const PR_YOUARENINJA = 79; // you are ninja. Your bad team are xxx
    const PR_BADGUY2FAIL = 80; //

    const PR_2FAIL = 81; // fail

    const PR_YOUAREAGENT = 82; // you are agent. Your code are xxx
    const PR_YOUAREWITCH = 83; // you are witch. The other roles are xxx
    const PR_YOUAREAUDITOR = 84; // you are auditor.

    const PR_FAILDECREASE1 = 85;

    const PR_AGENTSECRETCODE = 86;

    const PU_APPROVE = 87; // approve with thumbs up
    const PU_REJECT = 88; // approve with thumbs down

    const PU_APPREJ_BOARD_HIDE = 89; // Approve (xx) : << list >>
    const PU_LADYHOLDER = 90; // Lady: xx > xx > xx
    const PU_APPREJ_BOARD_REVEAL = 91; // Approve (xx) : << list >>

    const PU_SHOWVOTE = 94; // click the reply message to vote.
    const PU_SECONDSLEFT = 95; //second left to start

    const PU_FAIL5XREJ = 96; //
    const PR_AUDITORDECREASE1 = 97;

    const PR_EXECQUESTLANCELOT = 98;

    const PU_CHCKPMTOCHGLANG = 100; // check PM untuk mengganti bahasa
    const PU_SECONDTODECIDE = 101; // you have %d to decide
    const PU_LANGGROUPNOTFOUND = 102; // "Bahasa tidak berhasil diganti. group tidak ditemukan.";
    const PR_LANGGROUPCHANGED = 103; // "Bahasa tidak berhasil diganti. group tidak ditemukan.";
    const PU_LANGCHANGED = 104; // "Bahasa berhasil diganti menjadi %s";
    const PR_SETLANGGROUPINST = 105;
    const PR_SETLANGINST = 106;
    const PR_GROUPONLY = 107;
    const PU_ADMINONLY = 108;
    const PU_MAINTENANCE = 109;

    const PU_CONTACT = 110;
    const PU_HELP = 111;
    const PU_HOWTOPLAY = 112;
    const PU_RATEME = 113;
    const PU_ROLELIST = 114;
    const PU_FLEE_SUCCESS = 115;
    const PU_FLEE_FAIL = 116;
    const PU_NEED_MORE_PLAYERS = 117;
    const PU_PMONLY= 118;
    const PR_GROUPLIST= 119;
    const PU_JOINCHANNEL = 120;
    const PU_REQUEST_STOP = 121;
    const PU_STOP_SUCCESS = 122;

    const PR_QUEUE_ME = 123;
    const PR_QUEUE_CALL = 124;
    const PR_QUEUE_FULL = 125;

    const PU_IN_PROGRESS = 126;

    const NORMAL_MODE = 127;
    const CHAOS_MODE = 128;
    const PLAY_TIME = 129;
    const X_TIMES = 130;
    const WIN_RATE = 131;

    const PLAY_TO_HAVE_STAT = 132;
    const EVIL_TEAM_WON_STAT = 133;
    const GOOD_TEAM_WON_STAT = 134;

    const WON = 135;
    const LOST = 136;
    const LANG = 137;

    const PU_REQUEST_START = 138;



    const SERVANT = 150;
    const WITCH = 151;
    const THIEF = 152;
    const AUDITOR = 153;
    const AGENT = 154;
    const ASSASSIN = 155;
    const MORGAUSE = 156;
    const KNIGHT = 157;
    const MERLIN = 158;
    const PERCIVAL = 159;
    const MORGANA = 160;
    const OBERON = 161;
    const NINJA = 162;
    const MORDRED = 163;

    const QUEST = 164;
    const TOKEN_REJECT = 165;


    const SECRETCODES = 200;

    const PU_MERLININFO = 258;
    const PU_PERCIVALINFO = 259;
    const PU_SERVANTINFO = 260;
    const PU_MORDREDINFO = 261;
    const PU_MORGANAINFO = 262;
    const PU_ASSASSININFO = 263;
    const PU_OBERONINFO = 264;
    const PU_THIEFINFO = 265;
    const PU_MORGAUSEINFO = 266;
    const PU_KNIGHTINFO = 267;
    const PU_NINJAINFO = 268;
    const PU_AGENTINFO = 269;
    const PU_WITCHINFO = 270;
    const PU_AUDITORINFO = 271;
    const PU_GOODLANCELOTINFO = 272;
    const PU_EVILLANCELOTINFO = 273;

    const NO_LANCELOT = 300;
    const LANCELOT_V1 = 301;
    const LANCELOT_V2 = 302;
    const PU_LANCELOT_V1_SELECT = 303;
    const PU_LANCELOT_V2_SELECT = 304;

    const GOOD_LANCELOT = 305;
    const EVIL_LANCELOT = 306;

    const PR_YOUAREGOODLANCELOT = 307;
    const PR_YOUAREEVILLANCELOT = 308;
    const PU_FORECAST_LANCELOT = 309;

    const PU_LANCELOT_NOT_SWITCHED = 310;
    const PU_LANCELOT_SWITCHED = 311;


    static $script;
    static function init(){
        // if have not inited
        if (!Script::$inited) {
            Script::$inited = true;
            
            Script::$script["en"][Script::LANG] = "English";
            Script::$script["id"][Script::LANG] = "Bahasa Indonesia";
            
            Script::$script["en"][Script::QUEST] = "Quest";
            Script::$script["id"][Script::QUEST] = "Quest";
            
            Script::$script["en"][Script::TOKEN_REJECT] = "Reject token";
            Script::$script["id"][Script::TOKEN_REJECT] = "Token Menolak";
            
            Script::$script["en"][Script::MERLIN] = "Merlin ". Constant::EMO_MERLIN;
            Script::$script["id"][Script::MERLIN] = "Merlin ". Constant::EMO_MERLIN;
            
            Script::$script["en"][Script::PERCIVAL] = "Percival ". Constant::EMO_PERCIVAL;
            Script::$script["id"][Script::PERCIVAL] = "Percival ". Constant::EMO_PERCIVAL;
            
            Script::$script["en"][Script::MORGANA] = "Morgana " .Constant::EMO_MORGANA;
            Script::$script["id"][Script::MORGANA] = "Morgana ".Constant::EMO_MORGANA;
            
            Script::$script["en"][Script::OBERON] = "Oberon " .Constant::EMO_OBERON;
            Script::$script["id"][Script::OBERON] = "Oberon ".Constant::EMO_OBERON;
            
            Script::$script["en"][Script::NINJA] = "Ninja ".Constant::EMO_NINJA;
            Script::$script["id"][Script::NINJA] = "Ninja ".Constant::EMO_NINJA;
            
            Script::$script["en"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            Script::$script["id"][Script::MORDRED] = "Mordred ".Constant::EMO_MORDRED;
            
            Script::$script["en"][Script::SERVANT] = "Servant ".Constant::EMO_SERVANT;
            Script::$script["id"][Script::SERVANT] = "Rakyat Jelata ".Constant::EMO_SERVANT;
            
            Script::$script["en"][Script::THIEF] = "Thief " .Constant::EMO_THIEF;
            Script::$script["id"][Script::THIEF] = "Penjahat Biasa ".Constant::EMO_THIEF;
            
            Script::$script["en"][Script::WITCH] = "Witch " .Constant::EMO_WITCH;
            Script::$script["id"][Script::WITCH] = "Penyihir ".Constant::EMO_WITCH;
            
            Script::$script["en"][Script::AGENT] = "Agent " .Constant::EMO_AGENT;
            Script::$script["id"][Script::AGENT] = "Agen " .Constant::EMO_AGENT;
            
            Script::$script["en"][Script::AUDITOR] = "Auditor ".Constant::EMO_AUDITOR;
            Script::$script["id"][Script::AUDITOR] = "Auditor ".Constant::EMO_AUDITOR;
            
            Script::$script["en"][Script::ASSASSIN] = "Assassin " .Constant::EMO_ASSASSIN;
            Script::$script["id"][Script::ASSASSIN] = "Assassin ".Constant::EMO_ASSASSIN;
            
            Script::$script["en"][Script::MORGAUSE] = "Morgause " .Constant::EMO_MORGAUSE;
            Script::$script["id"][Script::MORGAUSE] = "Morgause ".Constant::EMO_MORGAUSE;
            
            Script::$script["en"][Script::KNIGHT] = "Knight ".Constant::EMO_KNIGHT;
            Script::$script["id"][Script::KNIGHT] = "Ksatria ".Constant::EMO_KNIGHT;
            
             // NEW
            Script::$script["en"][Script::GOOD_LANCELOT] = "Good Lancelot ".Constant::EMO_GOOD_LANCELOT;
            Script::$script["id"][Script::GOOD_LANCELOT] = "Good Lancelot ".Constant::EMO_GOOD_LANCELOT;
            
             // NEW
            Script::$script["en"][Script::EVIL_LANCELOT] = "Evil Lancelot ".Constant::EMO_EVIL_LANCELOT;
            Script::$script["id"][Script::EVIL_LANCELOT] = "Evil Lancelot ".Constant::EMO_EVIL_LANCELOT;
            
            Script::$script["en"][Script::PR_NEWGAME]
                = "You have created the new game - %s mode in group %s.";
            Script::$script["id"][Script::PR_NEWGAME]
                = "Kamu telah membuat permainan baru - %s di grup %s.";
                
            Script::$script["en"][Script::PR_JOINGAME]
                = "You have joined the Avalon game in Group %s.";
            Script::$script["id"][Script::PR_JOINGAME]
                = "Kamu telah bergabung Avalon di group %s.";
                
            Script::$script["en"][Script::PU_KINGDONE]
                = "The king has already found the answer and then finally decided to finish this never-ending discussion.";
            Script::$script["id"][Script::PU_KINGDONE]
                = "Raja sudah mendapatkan pencerahan dan akhirnya memutuskan untuk mengakhiri diskusi tiada akhir ini.";
                
            Script::$script["en"][Script::PU_REJECTCHANGEKING]
                = "The quest lead by %s has been already rejected. The Quest is now lead by the new king: %s.";
            Script::$script["id"][Script::PU_REJECTCHANGEKING]
                = "Quest yang dipimpin oleh %s telah ditolak. Quest dibatalkan dan king berpindah ke %s.";
                
            Script::$script["en"][Script::PU_KINGNEEDDISCUSS]
                = "Before assign <b>%d persons</b>, %s as the king has <b>%d seconds</b> to discuss with the team. King may type /done to finish the discussion. Click /questhistory to see the history.";
            Script::$script["id"][Script::PU_KINGNEEDDISCUSS]
                = "Sebelum menunjuk <b>%d orang</b>, %s sebagai raja mempunyai <b>%d detik</b> untuk berdiskusi dengan tim. Raja boleh mengetik /done untuk mengakhiri diskusi. Klik /questhistory untuk melihat history.";

            Script::$script["en"][Script::PU_AFTERAPPROVE]
                = "Most of the team members approved. The quest will be executed!";
            Script::$script["id"][Script::PU_AFTERAPPROVE]
                = "Sebagian besar tim setuju, quest pun akan dijalankan!";
                
            Script::$script["en"][Script::PR_EXECQUEST]
                = "Quest no.%d. What do you want to choose?";
            Script::$script["id"][Script::PR_EXECQUEST]
                = "Quest ke-%d. Apa yang ingin kamu pilih?";
                
            Script::$script["en"][Script::PR_SUCCESS]
                = "SUCCESS";
            Script::$script["id"][Script::PR_SUCCESS]
                = "SUKSES";
                
            Script::$script["en"][Script::PR_FAIL]
                = "FAIL";
            Script::$script["id"][Script::PR_FAIL]
                = "GAGAL";
                
             Script::$script["en"][Script::PR_2FAIL]
                = "2 FAIL";
            Script::$script["id"][Script::PR_2FAIL]
                = "2 GAGAL";
                
            Script::$script["en"][Script::PR_EXECQUESTGOOD]
                = "You are a good guy. You put a lot effort to finish the quest as well as possible.";
            Script::$script["id"][Script::PR_EXECQUESTGOOD]
                = "Kamu orang baik. Kamu pun berusaha untuk menyelesaikan quest dengan sebaik-baiknya.";
                
            // NEW
            Script::$script["en"][Script::PR_EXECQUESTLANCELOT]
                = "As the Evil Lancelot, you must fail the mission no matter what. “?(`?´)?";
            Script::$script["id"][Script::PR_EXECQUESTLANCELOT]
                = "Sebagai Evil Lancelot, kamu harus menggagalkan misi apapun yang terjadi. “?(`?´)?";
                
            Script::$script["en"][Script::PR_GOFORQUEST]
                = "%s go to execute the quest. <b>%d seconds</b> are given to finish the quest.";
            Script::$script["id"][Script::PR_GOFORQUEST]
                = "%s pergi untuk menyelesaikan quest. Diberikan waktu <b>%d detik</b> untuk menyelesaikan quest.";
                
            Script::$script["en"][Script::PR_YOUAREMERLIN]
                = "You are Merlin. Bad aura is radiated from %s. Guide your team without getting caught by the bad guys! Note: Merlin should not use the Private Message to communicate with the team.";
            Script::$script["id"][Script::PR_YOUAREMERLIN]
                = "Kamu adalah Merlin. Aura jahat terpancar kuat dari %s. Pandu timmu dalam quest tanpa ketahuan tim jahat! Catatan: Merlin tidak boleh menggunakan PM untuk berkomunikasi dengan tim.";
                
            Script::$script["en"][Script::PR_YOUAREPERCIVAL]
                = "You are Percival. You see %s as Merlin, but it seems that only one of them is the true Merlin. Note: you should not use Private Message to ask Merlin directly.";
            Script::$script["id"][Script::PR_YOUAREPERCIVAL]
                = "Kamu adalah Percival. Kamu melihat %s sebagai Merlin, namun hanya satu dari mereka Merlin yang asli. Catatan: kamu tidak boleh menggunakan PM untuk bertanya Merlin secara langsung.";
                
            Script::$script["en"][Script::PR_YOUAREGOODNORMAL]
                = "You are servant. You don't know anything good or bad, but it is important to follow the right king. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREGOODNORMAL]
                = "Kamu adalah Rakyat jelata yang baik. Kamu tidak tahu menahu, yang penting ikut menyukseskan quest dan mengikuti perintah raja. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
                
            Script::$script["en"][Script::PR_YOUAREMORDRED]
                = "You are Mordred. You team are %s. Merlin does not know you are in the bad side. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREMORDRED]
                = "Kamu adalah Mordred. Tim jahatmu adalah %s. Merlin tidak tahu bahwa kamu orang jahat. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
                
            Script::$script["en"][Script::PR_YOUARENINJA]
                = "You are Ninja (Super Mordred). You team are %s. Merlin does not know you are in the bad side. You can give 2 FAILs if you are assigned in a quest, but this ability can only be used once per one game. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUARENINJA]
                = "Kamu adalah Ninja (Super Mordred). Tim jahatmu adalah %s. Merlin tidak tahu bahwa kamu orang jahat. Kamu bisa memberikan 2 GAGAL jika kamu diikutkan dalam sebuah quest, namun kemampuan ini hanya bisa dipakai 1 kali saja dalam 1 game. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";

            Script::$script["en"][Script::PR_YOUAREAGENT]
                = "You are Agent, a good person whose job is to succeed the missions. The same secret codes are given to agents after a quest has been failed. Find your agent teammates, then together you will succeed the mission easier. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREAGENT]
                = "Kamu adalah agent, orang baik yang bertugas untuk menyukseskan misi. Kode rahasia yang sama akan diberikan ke agent setelah sebuah quest gagal. Temukan teman agenmu, maka bersama-sama kalian akan menyukseskan misi lebih mudah. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
                
            Script::$script["en"][Script::PR_YOUAREWITCH]
                = "You are Witch, an evil person. Your evil teams are %s. With your ability, you know that there are these roles on the good sides: %s. You should not use the Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREWITCH]
                = "Kamu adalah Witch (Penyihir), orang jahat. Tim jahatmu adalah %s. Dengan kemampuanmu, kamu tahu bahwa ada peran-peran ini di sisi baik: %s. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";
                
            Script::$script["en"][Script::PR_YOUAREAUDITOR]
                = "You are Auditor, a good person. When you are assigned for a quest, there is 20% chance you can eliminate 1 FAIL for that quest.";
            Script::$script["id"][Script::PR_YOUAREAUDITOR]
                = "Kamu adalah Auditor, orang baik. Ketika kamu ditunjuk di sebuah quest, ada 20% kemungkinan kamu dapat menghilangkan 1 FAIL dari quest itu.";
                
            // NEW
            Script::$script["en"][Script::PR_YOUAREGOODLANCELOT]
                = "You are <b>".Script::$script["en"][Script::GOOD_LANCELOT]
                ."</b>. Your allegiance is not stable. Sometimes, you cannot control your emotion and become evil.";
            Script::$script["id"][Script::PR_YOUAREGOODLANCELOT]
                = "You are <b>".Script::$script["id"][Script::GOOD_LANCELOT]
                ."</b>. Kepercayaanmu terhadap kebenaran goyah. Kadang kamu tidak dapat mengontrol emosi dan menjadi jahat.";
                
            // NEW
            Script::$script["en"][Script::PR_YOUAREEVILLANCELOT]
                = "You are <b>".Script::$script["en"][Script::EVIL_LANCELOT]
                ."</b>. You don't know your any evil friends. Your allegiance is not stable. Sometimes, you cannot control your emotion and become good.";
            Script::$script["id"][Script::PR_YOUAREEVILLANCELOT]
                = "Kamu adalah <b>".Script::$script["id"][Script::EVIL_LANCELOT]
                ."</b>. Kamu tidak tahu satu pun teman jahatmu. Pendirianmu tidak kuat. Kadang, kamu tidak bisa mengontrol emosi dan menjadi baik.";
                
            Script::$script["en"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "Lancelot roles have entered. Use the following forecast to see the future!\n";
            Script::$script["id"][Script::PU_FORECAST_LANCELOT]
                = Constant::EMO_MEGAPHONE_B. "Peran Lancelot sudah masuk. Gunakan ramalan berikut untuk melihat masa depan!\n";
                
            Script::$script["en"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "This turn Evil Lancelot is evil and Good Lancelot is good. As usual. " . Constant::EMO_HEART_NOT_SWITCH;
            Script::$script["id"][Script::PU_LANCELOT_NOT_SWITCHED]
                = Constant::EMO_SINGLE_EXCLAMATION_MARK. "Di giliran ini, Evil Lancelot tetap jahat dan Good Lancelot tetap baik, seperti biasa. " . Constant::EMO_HEART_NOT_SWITCH;
                
            Script::$script["en"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "This turn Evil Lancelot becomes good and Good Lancelot becomes evil! " . Constant::EMO_HEART_SWITCH;
            Script::$script["id"][Script::PU_LANCELOT_SWITCHED]
                = Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK .Constant::EMO_EXCLAMATION_MARK
                . "Di giliran ini, Evil Lancelot menjadi baik dan Good Lancelot menjadi jahat. " . Constant::EMO_HEART_SWITCH;
                
            Script::$script["en"][Script::PR_FAILDECREASE1]
                = "You use the ability of auditor. You have decreased the 1 FAIL for this quest.";
            Script::$script["id"][Script::PR_FAILDECREASE1]
                = "Kamu menggunakan kemampuan auditor. Kamu berhasil mengurangi 1 FAIL for this quest.";
                
            Script::$script["en"][Script::PR_AUDITORDECREASE1]
                = "Auditor has used the ability to decrease 1 FAIL for this quest.";
            Script::$script["id"][Script::PR_AUDITORDECREASE1]
                = "Auditor berhasil mengurangi 1 FAIL di quest ini.";
                
            Script::$script["en"][Script::PR_YOUAREASSASSIN]
                = "You are Assassin. Your team are %s. At the end of the game, you can kill Merlin to win.";
            Script::$script["id"][Script::PR_YOUAREASSASSIN]
                = "Kamu adalah Assassin. Tim jahatmu adalah %s. Di akhir permainan, kamu bisa membunuh Merlin untuk menang.";
                
            Script::$script["en"][Script::PR_YOUAREMORGANA]
                = "You are Morgana. Your evil team are %s. On Percival's eyes, you are Merlin.";
            Script::$script["id"][Script::PR_YOUAREMORGANA]
                = "Kamu adalah Morgana. Tim jahatmu adalah %s. Di mata Percival, kamu adalah Merlin.";
                
            Script::$script["en"][Script::PR_YOUAREOBERON]
                = "You are Oberon. Your evil teams are %s. The other evil teams don't know that you are evil. You should not use Private Message to communicate.";
            Script::$script["id"][Script::PR_YOUAREOBERON]
                = "Kamu adalah Oberon. Tim jahatmu adalah %s. Tim jahat yang lain tidak tahu bahwa kamu adalah jahat. Kamu tidak boleh menggunakan PM untuk berkomunikasi.";

             Script::$script["en"][Script::PR_YOUAREBADNORMAL]
                = "You are the bad guy. Your evil team are %s.";
            Script::$script["id"][Script::PR_YOUAREBADNORMAL]
                = "Kamu adalah Pejahat kacangan. Tim jahatmu adalah %s.";
                
            Script::$script["en"][Script::PR_YOUAREMORGAUSE]
                = "You are Morgause (Morgana with assassin ability). Your team are %s.  On Percival's eyes, you were Merlin. At the end of the game, you can kill Merlin to win.";
            Script::$script["id"][Script::PR_YOUAREMORGAUSE]
                = "Kamu adalah Morgause (Morgana dengan kemampuan assassin). Tim jahatmu adalah %s. Di mata Percival, kamu adalah Merlin. Di akhir permainan, kamu bisa membunuh Merlin untuk menang.";
                
            Script::$script["en"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "You are Knight, a good person whose job is to succeed the mission. Between %s and %s, there is at least 1 person is bad role. (Remember, knight cannot detect Mordred)";
            Script::$script["id"][Script::PR_YOUAREKNIGHTTHEREBAD]
                = "Kamu adalah seorang Knight (Ksatria) yang bertugas untuk mensukseskan misi. Di antara %s dan %s, terdapat setidaknya 1 orang jahat (Ingat, knight tidak dapat mendeteksi Mordred)";
                
            cript::$script["en"][Script::PR_YOUAREKNIGHTNOBAD]
                = "You are Knight, a good person whose job it to succeed the quests. Between %s and %s, it seems that there is no bad guys. (Remember, knight cannot detect Mordred or Ninja)";
            Script::$script["id"][Script::PR_YOUAREKNIGHTNOBAD]
                = "Kamu adalah seorang Knight (Ksatria) yang bertugas menyukseskan misi. Di antara %s dan %s, sepertinya tidak terdapat orang jahat. (Ingat, knight tidak dapat mendeteksi Mordred)";
                
            Script::$script["en"][Script::PR_AGENTSECRETCODE]
                = "The secret codes have been decrypted: %s. Use this code to find the other agents! Note: you cannot use Private Message to communicate.";
            Script::$script["id"][Script::PR_AGENTSECRETCODE]
                = "Kode rahasia sudah terpecahkan: %s. gunakan kode ini untuk menemukan agent lainnya! Catatan: kamu tidak boleh menggunakan PM untuk berkomunikasi.";
                
            Script::$script["en"][Script::PU_APPROVE]
                = "Approve ".Constant::EMO_YES_B;
            Script::$script["id"][Script::PU_APPROVE]
                = "Setuju ".Constant::EMO_YES_B;
                
            Script::$script["en"][Script::PU_REJECT]
                = "Reject ".Constant::EMO_NO_B;
            Script::$script["id"][Script::PU_REJECT]
                = "Menolak ".Constant::EMO_NO_B;
                
            Script::$script["en"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Approve (<b>%d</b>) : %s\n"
                ."Reject (<b>%d</b>) : %s";
            Script::$script["id"][Script::PU_APPREJ_BOARD_REVEAL]
                = "Setuju (<b>%d</b>) : %s\n"
                ."Menolak (<b>%d</b>) : %s";
                
            Script::$script["en"][Script::PU_APPREJ_BOARD_HIDE]
                = "Approve/Reject?? (<b>%d</b>) : %s";
            Script::$script["id"][Script::PU_APPREJ_BOARD_HIDE]
                = "Setuju/Menolak?? (<b>%d</b>) : %s";
                
            Script::$script["en"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
            Script::$script["id"][Script::PU_LADYHOLDER]
                = Constant::EMO_LADY_B ." : %s\n";
                
            Script::$script["en"][Script::PU_KINGNEEDASSIGN]
                = "%s as king will assign <b>%d persons</b> to execute the quest. The king is given time <b>%d seconds</b>";
            Script::$script["id"][Script::PU_KINGNEEDASSIGN]
                = "%s sebagai raja akan menunjuk <b>%d orang</b> untuk menyelesaikan quest. Raja diberikan waktu sebanyak <b>%d detik</b>";
                
            Script::$script["en"][Script::PR_SENDONEPLAYER]
                = "Choose person no.%d (from %d persons) to execute the quest";
            Script::$script["id"][Script::PR_SENDONEPLAYER]
                = "Pilih orang ke-%d (dari %d orang) untuk menyelesaikan quest";
                
            Script::$script["en"][Script::PR_KILLMERLIN]
                = "You evil team has lost the missions. But, you still have the last weapon. Kill Merlin!";
            Script::$script["id"][Script::PR_KILLMERLIN]
                = "Tim jahatmu sudah kalah dalam misi. Namun, kamu masih punya senjata terakhir. Bunuh Merlin!";
                
            Script::$script["en"][Script::PR_LADYCHOOSE]
                = "Choose one person you want to see its true identity.";
            Script::$script["id"][Script::PR_LADYCHOOSE]
                = "Pilih orang untuk diterawang.";
                
            Script::$script["en"][Script::PU_APPRREJINST]
                = "%s has assigned %s to do the quest.\n\nYou have <b>%d seconds</b> to choose. Type /showvote to show the voting buttons.";
            Script::$script["id"][Script::PU_APPRREJINST]
                = "%s telah menunjuk %s untuk menyelesaikan quest.\n\nDiberikan waktu <b>%d detik</b> untuk memilih. Ketik /showvote untuk melihat tombol vote.";
                
            Script::$script["en"][Script::PU_SHOWVOTE]
                = "Click the above reply message to vote.";
            Script::$script["id"][Script::PU_SHOWVOTE]
                = "Klik pesan reply di atas untuk vote.";
                
            Script::$script["en"][Script::PU_REJECT5TIMES]
                = "Quest was rejected 5 times, so it's failed.";
            Script::$script["id"][Script::PU_REJECT5TIMES]
                = "Quest sudah di-reject 5 kali, sehingga dianggap gagal.\n";
                
            Script::$script["en"][Script::PU_FAILWITHXFAIL]
                = "In quest, we found <b>%d FAIL</b>! Quest is failed.";
            Script::$script["id"][Script::PU_FAILWITHXFAIL]
                = "Dalam menyelesaikan quest ditemukan <b>%d FAIL</b>! Quest dianggap gagal.";

            Script::$script["en"][Script::PU_BADGUYSWONQUEST]
                = "The good guys cried, they didn't have any chance. The evil team held a party, celebrating their victory..";
            Script::$script["id"][Script::PU_BADGUYSWONQUEST]
                = "Tim baik menangis, mereka tidak diberi kesempatan ole tim jahat. Tim jahat pun mengadakan pesta, merayakan kemenangan mereka.";
                
            Script::$script["en"][Script::PU_BADGUYSWONKILL]
                = "The good guys thought they'd won, but they now realize that it is merely a ruse of the wicked. The evil team laugh over their victory...";
            Script::$script["id"][Script::PU_BADGUYSWONKILL]
                = "Orang baik pikir mereka sudah menang, namun sesunggunya itu hanyalah jebakan dari orang jahat. Para penjahat tertawa atas kemenangan mereka...";
                
            Script::$script["en"][Script::PU_GOODGUYSWON]
                = "Congratulations! The good team won! The good team are really solid and very clever deceiving evil team.";
            Script::$script["id"][Script::PU_GOODGUYSWON]
                = "Selamat! Tim baik menang! Tim baik memang kompak dan pintar menipu orang jahat..";
                
             Script::$script["en"][Script::PU_LADYLAKEINST]
                = "%s as Lady of the Lake may use the power to see the true identity of one player. The other team members may give the advice.. <b>%d seconds</b> are given to do the action.";
            Script::$script["id"][Script::PU_LADYLAKEINST]
                = "%s sebagai Lady of the Lake dapat menggunakan kekuatannya untuk menerawang salah seorang anggota tim. Anggota tim lain boleh memberikan petunjuk... Diberikan waktu <b>%d detik</b>.";
                
            Script::$script["en"][Script::PU_KILLMERLIN]
                = "3 Quest has been successfully done by the team. However, evil team still has the last weapon. The evil team are %s. If the assassin can guess the Merlin, the evil team will win! Evil team has <b>%d seconds</b> to decide.";
            Script::$script["id"][Script::PU_KILLMERLIN]
                = "3 Quest berhasil disukseskan oleh tim. Namun, tim jahat masih mempunyai senjata terakhir. Tim jahat membuka kedok mereka %s.. Jika assassin berhasil menebak merlin, maka tim jahatlah yang menang! Diberikan waktu <b>%d detik</b>.";
                
            Script::$script["en"][Script::PU_QSUCCESSNOFAIL]
                = "Quest has been successfully done! ";
            Script::$script["id"][Script::PU_QSUCCESSNOFAIL]
                = "Quest berhasil diselesaikan dengan baik sekali. ";
                
            Script::$script["en"][Script::PU_QSUCCESSXXFAIL]
                = "However, team found there is <b>%d FAIL</b> in this quest..";
            Script::$script["id"][Script::PU_QSUCCESSXXFAIL]
                = "Namun, tim menemukan <b>%d FAIL </b> dalam quest ini..";
                
            Script::$script["en"][Script::PR_ASSIGNONEQUEST]
                = "You have successfully assigned %s in quest.";
            Script::$script["id"][Script::PR_ASSIGNONEQUEST]
                = "Kamu berhasil memilih %s dalam quest.";
                
            Script::$script["en"][Script::PU_ASSIGNONEQUEST]
                = "%s assigned %s in quest.";
            Script::$script["id"][Script::PU_ASSIGNONEQUEST]
                = "%s memilih %s dalam quest.";
                
            Script::$script["en"][Script::PR_BADGUYSUCCESS]
                = "Although you are evil, you have successfully made a good impression.";
            Script::$script["id"][Script::PR_BADGUYSUCCESS]
                = "Meskipun kamu jahat, kamu berhasil membuat pencitraan yang baik.";
                
            Script::$script["en"][Script::PR_BADGUYFAIL]
                = "You have successfully failed the quest.";
            Script::$script["id"][Script::PR_BADGUYFAIL]
                = "Kamu berhasil menggagalkan quest.";
                
            Script::$script["en"][Script::PR_BADGUY2FAIL]
                = "You have successfully used ninja ability. This quest is given 2 FAILS!";
            Script::$script["id"][Script::PR_BADGUY2FAIL]
                = "Kamu berhasil menggunakan kemampuan ninja. Quest ini diberikan 2 kegagalan!";
                
            Script::$script["en"][Script::PR_LADYNOTSEE]
                = "You decided to not use your power to see.";
            Script::$script["id"][Script::PR_LADYNOTSEE]
                = "Kamu memilih untuk tidak menerawang..";
                
            Script::$script["en"][Script::PU_LADYNOTSEE]
                = "%s decided to not use the power to see.";
            Script::$script["id"][Script::PU_LADYNOTSEE]
                = "%s memilih untuk tidak menerawang.";
                
            Script::$script["en"][Script::PR_LADYSEE]
                = "You have seen %s.. He/she is ";
            Script::$script["id"][Script::PR_LADYSEE]
                = "Kamu berhasil menerawang %s.. Dia adalah orang ";
                
            Script::$script["en"][Script::PR_GOOD]
                = "good.";
            Script::$script["id"][Script::PR_GOOD]
                = "baik.";
                
            Script::$script["en"][Script::PR_BAD]
                = "evil.";
            Script::$script["id"][Script::PR_BAD]
                = "jahat.";
                
            Script::$script["en"][Script::PU_LADYSEE]
                = "%s use its power to see %s.";
            Script::$script["id"][Script::PU_LADYSEE]
                = "%s menerawang %s.";
                
            Script::$script["en"][Script::PR_KILLMERLINSUCCESS]
                = "You have successfully killed %s.";
            Script::$script["id"][Script::PR_KILLMERLINSUCCESS]
                = "Kamu berhasil membunuh %s.";
                
            Script::$script["en"][Script::PU_KILLMERLINSUCCESS]
                = "%s have successfully killed %s and in fact %s ";
            Script::$script["id"][Script::PU_KILLMERLINSUCCESS]
                = "%s berhasil membunuh %s dan ternyata %s ";
                
            Script::$script["en"][Script::PU_MERLIN]
                = "is <b>MERLIN</b>!";
            Script::$script["id"][Script::PU_MERLIN]
                = "adalah <b>MERLIN</b>!";
                
            Script::$script["en"][Script::PU_NOTMERLIN]
                = "is <b>not MERLIN</b>!";
            Script::$script["id"][Script::PU_NOTMERLIN]
                = "<b>bukan MERLIN</b>!";
                
            Script::$script["en"][Script::PR_ASSIGNLATE]
                = "The time's up. The rest of players are assigned randomly. ";
            Script::$script["id"][Script::PR_ASSIGNLATE]
                = "Jawabanmu terlambat, sisa player dipilih secara random. ";
                
            Script::$script["en"][Script::PU_ASSIGNLATE]
                = "Because the time's up, the rest of players are assigned randomly: %s.";
            Script::$script["id"][Script::PU_ASSIGNLATE]
                = "Karena waktu habis, sisa pemain dipilih secara random: %s.";
                
            Script::$script["en"][Script::PU_APPRREJLATE]
                = "Because the time's up, the rest of the members are assumed abstain.";
            Script::$script["id"][Script::PU_APPRREJLATE]
                = "Karena waktu habis, pemain lain dianggap memilih abstain.";
                
            Script::$script["en"][Script::PU_APPRREJREMIND]
                = "The assignees in this quest are %s\n\n<b>%d seconds</b> left to choose <b>approve</b> or <b>reject</b>. If there is minimum <b>%d member(s)</b> fail the quest, the quest will be failed.";
            Script::$script["id"][Script::PU_APPRREJREMIND]
                = "Pejuang di quest ini %s\n\n<b>%d detik</b> lagi untuk memilih <b>setuju</b> atau <b>menolak</b>. Jika ada minimal <b>%d anggota</b> menggagalkan quest, maka quest akan dianggap gagal!";
                
            Script::$script["en"][Script::PR_BADGUYLATESUCCESS]
                = "You answered late. Boss forced you to give the good impression this time.";
            Script::$script["id"][Script::PR_BADGUYLATESUCCESS]
                = "Jawabanmu terlambat. Boss memaksamu untuk memberikan pencitraan yang baik.";
                
            Script::$script["en"][Script::PR_BADGUYLATEFAIL]
                = "You answered late. Boss forced you to fail the quest.";
            Script::$script["id"][Script::PR_BADGUYLATEFAIL]
                = "Jawabanmu terlambat. Kamu dipaksa menggagalkan quest dari boss.";
                
            Script::$script["en"][Script::PU_DISCUSSREMIND]
                = "<b>%d seconds</b> left to discuss... %s may type /done if you are ready to give the assignment.";
            Script::$script["id"][Script::PU_DISCUSSREMIND]
                = "<b>%d detik</b> lagi untuk berdiskusi... %s boleh mengetik /done jika sudah mendapat pencerahan.";
                
            Script::$script["en"][Script::PR_LADYLATE]
                = "You answered late to see the person's identity.";
            Script::$script["id"][Script::PR_LADYLATE]
                = "Kamu terlambat memilih untuk menerawang..";
                
            Script::$script["en"][Script::PU_LADYLATE]
                = "%s answered late so the power to see is not used.";
            Script::$script["id"][Script::PU_LADYLATE]
                = "%s terlambat memilih sehingga tidak bisa menerawang.";
                
            Script::$script["en"][Script::PR_KILLMERLINLATE]
                = "You answered late to kill Merlin.";
            Script::$script["id"][Script::PR_KILLMERLINLATE]
                = "Kamu terlambat memilih untuk membunuh Merlin..";
                
            Script::$script["en"][Script::PU_KILLMERLINLATE]
                = "%s answered late. It seems Merlin is saved this time.";
            Script::$script["id"][Script::PU_KILLMERLINLATE]
                = "%s terlambat memilih.. Sepertinya Merlin selamat kali ini..";
                
            Script::$script["en"][Script::PU_KILLMERLINREMIND]
                = "<b>%d seconds</b> left for assassin to guess and kill Merlin...";
            Script::$script["id"][Script::PU_KILLMERLINREMIND]
                = "<b>%d detik</b> lagi waktu yang dibutuhkan assassin untuk membunuh Merlin...";
                
            Script::$script["en"][Script::PU_NOHISTFOUND]
                = "No History found for the current game.";
            Script::$script["id"][Script::PU_NOHISTFOUND]
                = "Tidak ditemukan history untuk game yang sedang berlangsung.";
                
            Script::$script["en"][Script::PU_HISTQEXECBY]
                = "Quest no.%d %s lead by %s %s, executed by %s";
            Script::$script["id"][Script::PU_HISTQEXECBY]
                = "Quest ke-%d %s dipimpin oleh %s %s, dieksekusi oleh %s";
                
            Script::$script["en"][Script::PU_HISTQREJECTBY]
                = ", rejected by %s\n\n";
            Script::$script["id"][Script::PU_HISTQREJECTBY]
                = ", ditolak oleh %s\n\n";
                
            Script::$script["en"][Script::PU_HISTQFAILREJ]
                = "Quest no.%d [%s 5x REJECT]\n\n";
            Script::$script["id"][Script::PU_HISTQFAILREJ]
                = "Quest ke-%d [%s 5x DITOLAK]\n\n";
                
            Script::$script["en"][Script::PU_FAIL5XREJ]
                = "5x REJECT";
            Script::$script["id"][Script::PU_FAIL5XREJ]
                = "5x DITOLAK";
                
            Script::$script["en"][Script::PU_CANNOTJOINFULL]
                = " cannot join. Already %d players.";
            Script::$script["id"][Script::PU_CANNOTJOINFULL]
                = " tidak bisa bergabung. Sudah %d pemain.";
                
            Script::$script["en"][Script::PU_CANNOTJOIN]
                = " cannot join.";
            Script::$script["id"][Script::PU_CANNOTJOIN]
                = " tidak bisa bergabung.";
                
            Script::$script["en"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">Start Me</a> first.";
            Script::$script["id"][Script::PU_STARTMEFIRST]
                = " <a href=\"http://telegram.me/%s\">Start Me</a> terlebih dahulu.";
                
            Script::$script["en"][Script::PU_CREATEFIRST]
                = "Game has not started yet. Type /start or /startchaos to start Avalon.";
            Script::$script["id"][Script::PU_CREATEFIRST]
                = "Game belum distart. Ketik /start atau /startchaos untuk memulai Avalon.";
                
            Script::$script["en"][Script::PU_GAMESTART]
                = "Game has been started. Please anyone check the private message to know your role.";
            Script::$script["id"][Script::PU_GAMESTART]
                = "Game sudah dimulai. Silakan cek PM masing-masing untuk melihat peran.";
                
            Script::$script["en"][Script::PU_GAMECANCEL]
                = "Game is canceled because there is not enough players. Invite your friends to join.";
            Script::$script["id"][Script::PU_GAMECANCEL]
                = "Game dibatalkan karena tidak cukup pemain. Ayo ajak teman-temanmu untuk join";
                
            Script::$script["en"][Script::PU_SECONDSLEFT]
                = "<b>%d seconds</b> left.";
            Script::$script["id"][Script::PU_SECONDSLEFT]
                = "<b>%d detik</b> lagi.";
                
            Script::$script["en"][Script::PU_JOINREMIND]
                = "<b>%d seconds</b> left. Invite your friends to /join. Use /forcestart to immediately start the game.";
            Script::$script["id"][Script::PU_JOINREMIND]
                = "<b>%d detik</b> lagi. Ayo ajak teman-temanmu untuk /join. Gunakan /forcestart untuk langsung memulai game.";
                
            Script::$script["en"][Script::PU_JOINSTART]
                = "%s has started the Avalon - %s. Type /join to join the game.";
            Script::$script["id"][Script::PU_JOINSTART]
                = "%s telah memulai Avalon - %s. Ketik /join untuk bergabung.";
                
            Script::$script["en"][Script::PU_JOINSUCCESS]
                = "%s joined. <b>%d</b> players. min <b>%d</b>. max <b>%d</b>.";
            Script::$script["id"][Script::PU_JOINSUCCESS]
                = "%s bergabung. <b>%d</b> pemain. min <b>%d</b>. max <b>%d</b>.";
                
            Script::$script["en"][Script::PU_FLEE_SUCCESS]
                = "%s fleed. <b>%d</b> players remaining.";
            Script::$script["id"][Script::PU_FLEE_SUCCESS]
                = "%s kabur. <b>%d</b> pemain tersisa.";
                
            Script::$script["en"][Script::PU_FLEE_FAIL]
                = "%s cannot flee. The game has already started.";
            Script::$script["id"][Script::PU_FLEE_FAIL]
                = "%s tidak dapat kabur. Game sudah dimulai";
                
            Script::$script["en"][Script::PU_NEED_MORE_PLAYERS]
                = "We need minimum %d players to start the game.";
            Script::$script["id"][Script::PU_NEED_MORE_PLAYERS]
                = "Dibutuhkan min %d pemain untuk memulai game.";
                
            Script::$script["en"][Script::PU_REQUEST_STOP]
                = "%s requested to cancel the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["id"][Script::PU_REQUEST_STOP]
                = "%s ingin membatalkan permainan. <b>%d</b> dari <b>%d</b>.";
                
            Script::$script["en"][Script::PU_REQUEST_START]
                = "%s requests to start the game. <b>%d</b> of <b>%d</b>.";
            Script::$script["id"][Script::PU_REQUEST_START]
                = "%s ingin memulai permainan. <b>%d</b> dari <b>%d</b>.";
                
            Script::$script["en"][Script::PU_STOP_SUCCESS]
                = "The game is canceled.";
            Script::$script["id"][Script::PU_STOP_SUCCESS]
                = "Permainan dibatalkan.";
                
            Script::$script["en"][Script::PR_QUEUE_ME]
                = "You have registered yourself to the next Avalon Game in %s group. Do not forget to /join when the game start. :D";
            Script::$script["id"][Script::PR_QUEUE_ME]
                = "Kamu sudah mendaftarkan diri pada permainan Avalon berikutnya di grup %s. Jangan lupa untuk /join saat game dimulai. :D";
                
            Script::$script["en"][Script::PR_QUEUE_CALL]
                = "The Avalon game is going to start in %s group.";
            Script::$script["id"][Script::PR_QUEUE_CALL]
                = "Permainan Avalon akan dimulai di grup %s.";
                
            Script::$script["en"][Script::PR_QUEUE_FULL]
                = "You cannot join for the avalon next game. The queue is full. Try to start the game!";
            Script::$script["id"][Script::PR_QUEUE_FULL]
                = "Kamu tidak bisa bergabung ke permainan avalon berikutnya. Antrian penuh. Cobalah untuk memulai permainan!";
                
            Script::$script["en"][Script::PU_IN_PROGRESS]
                = "In Progress~";
            Script::$script["id"][Script::PU_IN_PROGRESS]
                = "Sdg berlangsung";
                
            Script::$script["en"][Script::NORMAL_MODE]
                = "Normal Mode";
            Script::$script["id"][Script::NORMAL_MODE]
                = "Mode Normal";
                
            Script::$script["en"][Script::CHAOS_MODE]
                = "Chaos Mode";
            Script::$script["id"][Script::CHAOS_MODE]
                = "Mode Chaos";
                
            // NEW
            Script::$script["en"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " No Lancelot";
            Script::$script["id"][Script::NO_LANCELOT]
                = Constant::EMO_PROHIBITED. " No Lancelot";
                
            // NEW
            Script::$script["en"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v1";
            Script::$script["id"][Script::LANCELOT_V1]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v1";
                
            // NEW
            Script::$script["en"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v2";
            Script::$script["id"][Script::LANCELOT_V2]
                = Constant::EMO_EVIL_LANCELOT. Constant::EMO_HEART_SWITCH. Constant::EMO_GOOD_LANCELOT.  " Lancelot v2";
                
            // NEW
            Script::$script["en"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 is selected</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n";
            Script::$script["id"][Script::PU_LANCELOT_V1_SELECT]
                = "<b>Variant 1 dipilih</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." dan ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." akan masuk ke permainan.\n"
                ."Keduanya dapat bertukar peran selama permainan.\n\n";
                
            // NEW
            Script::$script["en"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 is selected</b>\n"
                .Script::$script["en"][Script::GOOD_LANCELOT]
                ." and ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." roles will join the game.\n"
                ."Both of the roles may switch allegiance during the game.\n\n"
                ."In this variant, Evil Lancelot must fail the quest he is on.\n\n";
            Script::$script["id"][Script::PU_LANCELOT_V2_SELECT]
                = "<b>Variant 2 dipilih</b>\n"
                . Script::$script["en"][Script::GOOD_LANCELOT]
                ." dan ".Script::$script["en"][Script::EVIL_LANCELOT]
                ." akan masuk dalam permainan.\n"
                ."Keduanya dapat bertukar peran selama permainan.\n\n"
                ."Di varian ini, Evil Lancelot harus memberikan FAIL di misi yang diikutinya\n\n";
                
            Script::$script["en"][Script::PLAY_TIME]
                = "played %d times";
            Script::$script["id"][Script::PLAY_TIME]
                = "dimainkan %d kali";
                
            Script::$script["en"][Script::X_TIMES]
                = "%d times";
            Script::$script["id"][Script::X_TIMES]
                = "%d kali";
                
            Script::$script["en"][Script::WIN_RATE]
                = "Winrate: %d%%";
            Script::$script["id"][Script::WIN_RATE]
                = "Menang: %d%%";
                
            Script::$script["en"][Script::GOOD_TEAM_WON_STAT]
                = "Good Team Won %d%%";
            Script::$script["id"][Script::GOOD_TEAM_WON_STAT]
                = "Tim Baik menang %d%%";
                
            // NEW
            Script::$script["en"][Script::WON]
                = "Won";
            Script::$script["id"][Script::WON]
                = "Menang";
                
            // NEW
            Script::$script["en"][Script::LOST]
                = "Lost";
            Script::$script["id"][Script::LOST]
                = "Kalah";
                
            Script::$script["en"][Script::EVIL_TEAM_WON_STAT]
                = "Evil Team Won %d%%";
            Script::$script["id"][Script::EVIL_TEAM_WON_STAT]
                = "Tim Jahat menang %d%%";
                
            Script::$script["en"][Script::PLAY_TO_HAVE_STAT]
                = "You have to play a game to have the statistics.";
            Script::$script["id"][Script::PLAY_TO_HAVE_STAT]
                = "Kamu harus main untuk memiliki statistik.";
                
            Script::$script["en"][Script::PU_CHCKPMTOCHGLANG]
                = "Please check private message to change the language.";
            Script::$script["id"][Script::PU_CHCKPMTOCHGLANG]
                = "Silakan mengecek PM untuk memilih bahasa.";
                
            Script::$script["en"][Script::PU_SECONDTODECIDE]
                = "\n\nYou have <b>%d seconds</b> to decide.\n";
            Script::$script["id"][Script::PU_SECONDTODECIDE]
                = "\n\nWaktu yang diberikan adalah <b>%d</b> detik.\n";
                
            Script::$script["en"][Script::PU_LANGGROUPNOTFOUND]
                = "Language cannot be changed. We cannot find the group.";
            Script::$script["id"][Script::PU_LANGGROUPNOTFOUND]
                = "Bahasa tidak berhasil diganti. group tidak ditemukan.";
                
            Script::$script["en"][Script::PR_LANGGROUPCHANGED]
                = "Language in %s has been set to %s.";
            Script::$script["id"][Script::PR_LANGGROUPCHANGED]
                = "Bahasa di %s berhasil diganti menjadi %s.";
                
            Script::$script["en"][Script::PU_LANGCHANGED]
                = "Language has been set to %s.";
            Script::$script["id"][Script::PU_LANGCHANGED]
                = "Bahasa berhasil diganti menjadi %s.";
                
            Script::$script["en"][Script::PR_SETLANGGROUPINST]
                = "for %s.";
            Script::$script["id"][Script::PR_SETLANGGROUPINST]
                = "untuk %s.";
                
            Script::$script["en"][Script::PR_SETLANGINST]
                = "Choose the language ";
            Script::$script["id"][Script::PR_SETLANGINST]
                = "Pilih bahasa yang ingin digunakan ";
                
            Script::$script["en"][Script::PR_GROUPONLY]
                = "This command can only be executed from group.";
            Script::$script["id"][Script::PR_GROUPONLY]
                = "Kamu harus berada di grup untuk dapat menggunakan perintah ini.";
                
            Script::$script["en"][Script::PU_PMONLY]
                = "This command can only be executed by Private Message to Bot.";
            Script::$script["id"][Script::PU_PMONLY]
                = "Kamu harus Private Message Bot untuk dapat menggunakan perintah ini.";
                
            Script::$script["en"][Script::PU_ADMINONLY]
                = "This command can only be executed by admin.";
            Script::$script["id"][Script::PU_ADMINONLY]
                = "Hanya admin yang dapat menggunakan perintah ini.";
                
            Script::$script["en"][Script::PU_MAINTENANCE]
                = "Currently there is a maintenance for avalon bot. Please try again later.";
            Script::$script["id"][Script::PU_MAINTENANCE]
                = "Saat ini, bot sedang dalam maintenance. Silakan coba beberapa saat lagi.";
                
            $contributor =
                Script::$script["en"][Script::LANG]."(@Rhyned), "
                .Script::$script["id"][Script::LANG]."(@Rhyned), "
                
            Script::$script["en"][Script::PU_CONTACT]
                = "Telegram code by <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Contact to email: hendry.setiadi.89@gmail.com to give support or feedback.\n\n"
                ."Rate me by clicking the link: <a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>.\n\n"
                ."Thank you.";
            Script::$script["id"][Script::PU_CONTACT]
                = "Kode Telegram oleh <b>Hendry Setiadi</b>.\n\n"
                . $contributor
                ."Hubungi email: hendry.setiadi.89@gmail.com untuk memberikan support atau feedback.\n\n"
                ."Berikan rating dengan meng-klik link berikut: <a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>.\n\n"
                ."Terima kasih.";
                
            Script::$script["en"][Script::PU_JOINCHANNEL]
                = "Join this <a href=\"https://telegram.me/avalonbgbot\">channel</a> to see the news and the latest updates to avalon bot.\n";
            Script::$script["id"][Script::PU_JOINCHANNEL]
                = "Ikuti <a href=\"https://telegram.me/avalonbgbot\">channel</a> ini untuk melihat berita dan update terbaru seputar avalon bot.\n";
                
            Script::$script["en"][Script::PU_HELP]
                = "Avalon bot for telegram.\n"
                . "Based on the <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">The Resistance:Avalon BoardGame</a>\n\n"
                . "To start playing, invite this bot to your group then type /start or /startchaos to start the game.\n\n"
                . "Type /howtoplay if you are new to avalon and want to know more\n"
                . "Type /rolelist to see the avalon role list\n"
                . "Type /contact if you want to contact the developer\n\n"
                . Script::$script["en"][Script::PU_JOINCHANNEL];
            Script::$script["id"][Script::PU_HELP]
                = "Avalon bot untuk Telegram.\n"
                . "Berdasarkan game <a href=\"https://boardgamegeek.com/boardgame/128882/resistance-avalon\">The Resistance:Avalon BoardGame</a>\n\n"
                . "Untuk bermain, undang bot ini ke dalam grup kemudian ketik /start atau /startchaos untuk memulai permainan.\n\n"
                . "Ketik /howtoplay untuk tahu cara bermain avalon\n"
                . "Ketik /rolelist untuk melihat daftar peran Avalon\n"
                . "Ketik /contact untuk menghubungi developer\n\n"
                . Script::$script["id"][Script::PU_JOINCHANNEL];
                
            $normalRoleList = Constant::EMO_SMILE_B."/merlin\n"
                .Constant::EMO_SMILE_B."/percival\n"
                .Constant::EMO_SMILE_B."/servant\n"
                .Constant::EMO_EVIL_B."/assassin\n"
                .Constant::EMO_EVIL_B."/morgana\n"
                .Constant::EMO_EVIL_B."/mordred\n"
                .Constant::EMO_EVIL_B."/oberon\n"
                .Constant::EMO_SMILE_B."/goodlancelot\n"
                .Constant::EMO_EVIL_B."/evillancelot\n\n";


            $chaosRoleList = Constant::EMO_SMILE_B."/knight\n"
                .Constant::EMO_SMILE_B."/agent\n"
                .Constant::EMO_SMILE_B."/auditor\n"
                .Constant::EMO_EVIL_B."/morgause\n"
                .Constant::EMO_EVIL_B."/witch\n"
                .Constant::EMO_EVIL_B."/ninja\n";


            Script::$script["en"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Addition roles exclusive for telegram:\n"
                . $chaosRoleList;
            Script::$script["id"][Script::PU_ROLELIST]
                = $normalRoleList
                . "Tambahan role khusus untuk Telegram:\n"
                . $chaosRoleList;
                
            Script::$script["en"][Script::PU_HOWTOPLAY]
                = " <b>The avalon game is a game about deduction and bluffing</b>\n\n"
                . "This game tells the story about a group that is in a journey to control the civilization of Arthur. "
                . "There are always <b>5 quests</b> in total. The players will play the first quest first, then sequentially go to the next quest."
                . " If at least 3 quests succeed, then good forces <i>might</i> win. If there are 3 quests fail, evil force win.\n\n"

                . "At the start of the game, each player will be randomly assigned a role secretly.\n"
                . "Click to see the detail of the role:\n"

                . Script::$script["en"][Script::PU_ROLELIST]

                . "\nAt the start of the game, King token".Constant::EMO_KING_B. " will be randomly assigned to a player and the King may choose who can complete the current quest.\n"
                . "After the king has done the assignment, any player may vote <b>approve</b> or <b>reject</b> to the assignment. Then, the approve and reject will be counted.\n\n"

                . "If the <b>reject</b> count is half or more the count of the players, then the quest is rejected, and the king token"
                .Constant::EMO_KING_B." will be given to the next player (next to the King)\n"
                . "If the <b>approve</b> count is more than half players' count, then the quest is executed by the assignees.\n\n"

                . "When executing a quest, evil players may choose to fail the quest and this will be done secretly. "
                . "In general, if at least 1 player give the FAIL to that quest, it means that quest will FAIL.\n\n"

                . "And to prevent each quest being rejected over and over, each quest has maximum reject of 5. If the quest is rejected 5 times, it will automatically FAIL\n\n"

                . "In a game 8 players or more, <b>lady of the lake</b>".Constant::EMO_LADY_B." can be used. Lady of The Lake will give a large benefit for a good forces.. "
                . "A player who hold the lady token may choose a player to know his/her true identity (good or evil) but only the lady holder knows the truth.\n\n"

                . "That's all. Practice is the faster way to learn.. Type /start or /startchaos to start the game.\n\n";




            Script::$script["id"][Script::PU_HOWTOPLAY]
                = " <b>Game Avalon adalah game tentang deduksi dan berbohong</b>\n\n"
                . "Game ini bercerita tentang perjalanan suatu grup untuk menemukan peradaban Arthur. "
                . "Ada <b>5 quests</b> yang harus diselesaikan. Pemain harus memainkan quest pertama terlebih dahulu, baru kemudian lanjut ke quest berikutnya secara berurutan."
                . " Jika terdapat minimal 3 quest berhasil, maka tim baik <i>mungkin</i> menang. Jika terdapat 3 quest gagal, maka tim jahatlah yang menang.\n\n"

                . "Di awal permainan, Tiap orang akan diberikan peran secara rahasia.\n"
                . "Klik untuk melihat detil peran :\n"

                . Script::$script["id"][Script::PU_ROLELIST]

                . "\nDi awal permainan, King token ".Constant::EMO_KING_B. " akan diberikan secara random ke salah seorang pemain dan raja boleh memilih orang yang akan berangkat untuk quest yang berlangsung.\n"
                . "Setelah raja memberikan penugasan, tiap orang boleh <b>setuju</b> or <b>menolak</b> terhadap penugasan itu. Kemudian, jumlah setuju dan jumlah menolak akan dihitung.\n\n"

                . "Jika jumlah <b>menolak</b> lebih besar atau sama dengan jumlah pemain, maka quest akan ditolak dan King token"
                . Constant::EMO_KING_B ." akan berpindah ke pemain berikutnya (sesudah raja)\n"
                . "Jika jumlah <b>setuju</b> lebih besar dari jumlah pemain, maka quest akan dijalankan oleh orang yang ditunjuk oleh raja.\n\n"

                . "Ketika mengerjakan quest, Pemain jahat boleh menggagalkan quest dan ini dilakukan secara rahasia. "
                . "Umumnya, Jika minimal terdapat 1 GAGAL dalam quest, maka quest tersebut akan dianggap GAGAL.\n\n"

                . "Untuk mencegah suatu quest ditolak terus menerus, setiap quest memiliki penolakan maksimum 5 kali. "
                . " Jika quest tersebut sudah direject 5 kali, maka quest itu dianggap GAGAL.\n\n"

                . "Dalam game dengan 8 pemain atau lebih, <b>lady of the lake</b>".Constant::EMO_LADY_B." dapat digunakan. Lady of the Lake dapat memberikan keuntungan yang besar bagi tim baik. "
                . "Pemain yang memegang the lady token boleh menerawang sesorang untuk mengetahui identitas sebenarnya (baik atau jahat) namun hanya pemegang lady lah yang mengetahuinya.\n\n"

                . "Sekian. Latihan adalah cara yang cepat untuk belajar. Ketik /start atau /startchaos untuk memulai game.\n\n";
                
          $groupList =
                "<b>ENGLISH-JAPANESE</b>\n"
                ."<a href=\"http://telegram.me/AvalonAnime\">Avalon Anime</a>\n\n"
                ."<b>INDONESIA</b>\n"
                ."<a href=\"http://telegram.me/mainavalon\">Main Avalon Indonesia</a>\n"
                ."<a href=\"http://telegram.me/avalonwolfcircle\">Avalon Wolf Circle</a>\n"
                ."<a href=\"https://telegram.me/joinchat/ArAp4UFSojc5mFfM7iLPWw\">Play Avalon</a>\n"
                ."<a href=\"https://t.me/avalonhavefun\">Avalon Have Fun</a>\n"
                ."<a href=\"http://telegram.me/avalonindonesia\">Avalon Indonesia</a>\n"
                ."<a href=\"http://telegram.me/avalonacademy\">Avalon Academy</a>\n\n"
                
          Script::$script["en"][Script::PR_GROUPLIST]
                = "This Group List is currently in development. If you have your own open group you can share, contact developer to add it in grouplist.\n\n"
                .$groupList;
          Script::$script["id"][Script::PR_GROUPLIST]
                = "Group List masih dalam tahap pengembangan. Jika kamu mempunyai open group untuk avalon, kontak developer agar bisa menambahkannya di grouplist.\n\n"
                .$groupList;
                
          Script::$script["en"][Script::PU_RATEME]
                = "Like this bot? Please rate me ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>\n\n"
                . Script::$script["en"][Script::PU_JOINCHANNEL];
            Script::$script["id"][Script::PU_RATEME]
                = "Suka bot ini? Tolong berikan rating untuk bot ". Constant::EMO_SMILE_B . "\n"
                ."<a href=\"http://telegram.me/storebot?start=%s\">Rate me</a>\n\n"
                . Script::$script["id"][Script::PU_JOINCHANNEL];
                
            Script::$script["en"][Script::PU_MERLININFO]
                = "<b>".Script::$script["en"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " knows all evil players except /mordred (and also /ninja). His job is to give clues to the good team, "
                . "so it will prevent the evil players having a chance failing the quests.\n\n"
                . "Note that if Merlin is too obvious, even though 3 quests have succeed, the /assassin can "
                . "guess the Merlin at the end of the game. If Assassin's guess is correct, the good side will lose although 3 quests has been success.";
            Script::$script["id"][Script::PU_MERLININFO]
                = "<b>".Script::$script["id"][Script::MERLIN]."</b>".Constant::EMO_SMILE_B
                . " tahu semua pemain jahat kecuali Mordred (dan juga /ninja). Merlin harus memberikan petunjuk-petunjuk ke tim baik, "
                . "sehingga mencegah pemain jahat untuk mengerjakan quest.\n\n"
                . "Penting juga bagi Merlin agar dia tidak ketahuan tim jahat karena /assassin dapat "
                . "menebak Merlin di akhir game. Jika assassin berhasil menebak Merlin, tim baik akan kalah meskipun 3 quest sudah berhasil.";
                
            Script::$script["en"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["en"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " knows the Merlin and Morgana at the start of the game. However, Percival does not know which is Merlin or Morgana\n\n"
                . "Percival's job is to guess the Merlin correctly between the 2 and then follow the Merlin's order. "
                . "Besides, Percival needs to act as a Merlin to deceive /assassin.";
            Script::$script["id"][Script::PU_PERCIVALINFO]
                = "<b>".Script::$script["id"][Script::PERCIVAL]."</b>".Constant::EMO_SMILE_B
                . " tahu Merlin dan Morgana di awal permainan. Namun, Percival tidak tahu siapa yang Merlin atau Morgana\n\n"
                . "Tugas Percival adalah menebak dengan benar siapa Merlin dan mengikuti perintah Merlin. ".
                " Selain itu, Percival perlu berpura-pura menjadi Merlin untuk mengelabui /assassin.";
                
            Script::$script["en"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["en"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " is in a good side but do not know anything at the start of the game.\n\n"
                . "Servant's job is to succeed the quest and to try guess the Merlin correctly (mainly based on the deduction). ".
                "Servant might also need to act as a Merlin to deceive the evil force.";
            Script::$script["id"][Script::PU_SERVANTINFO]
                = "<b>".Script::$script["id"][Script::SERVANT]."</b>".Constant::EMO_SMILE_B
                . " adalah pemain baik yang tidak tahu apa-apa.\n\n"
                ."Tugas servant adalah menyukseskan quest dan mencoba menebak Merlin (berdasarkan deduksi). ".
                "Servant mungkin juga perlu berpura-pura menjadi Merlin untuk mengelabui tim jahat.";
                
            Script::$script["en"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["en"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " is in a good side. If auditor is assigned in a quest, there is 20% chance 1 FAIL can be eliminated.\n\n";
            Script::$script["id"][Script::PU_AUDITORINFO]
                = "<b>".Script::$script["id"][Script::AUDITOR]."</b>".Constant::EMO_SMILE_B
                . " adalah pemain baik. Jika auditor ditunjuk dalam sebuah quest, maka terdapat 20% kemungkinan 1 FAIL dapat dieliminasi.\n\n";
                
            Script::$script["en"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["en"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game (except Oberon) and has to cooperate together to fail the quests.\n\n"
                . "Merlin cannot see Mordred as an evil player so Mordred may act as a good player without being known.";
            Script::$script["id"][Script::PU_MORDREDINFO]
                = "<b>".Script::$script["id"][Script::MORDRED]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Merlin tidak dapat melihat Mordred sehingga Mordred dapat berpura-pura menjadi pemain yang baik tanpa diketahui.\n\n";
                
            Script::$script["en"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["en"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) as an evil player knows the other evil players at the start of the game (except Oberon) and has to cooperate together to fail the quests.\n\n"
                . "Merlin cannot see Ninja as an evil player so Ninja may act as a good player without being known. Ninja can also give 2 FAILS if being assigned in the quest, but this ability can only be used once per game.";
            Script::$script["id"][Script::PU_NINJAINFO]
                = "<b>".Script::$script["id"][Script::NINJA]."</b>".Constant::EMO_EVIL_B
                . " (Super Mordred) adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Merlin tidak dapat melihat Ninja sehingga Ninja dapat berpura-pura menjadi pemain yang baik tanpa diketahui. Ninja dapat memberikan 2 GAGAL jika diikutkan dalam quest, namun kemampuan ini hanya bisa digunakan sekali dalam satu game.\n\n";
                
            Script::$script["en"][Script::SECRETCODES] = array(
                "thanks",
                "sorry",
                "honest",
                "lie",
                "confused",
                "happy",
                "sad",
                "stupid",
                "smart",
//                "Oh my God",
                "believe",
                "choose",
                "sure",
                "doubt",
                "play",
            );
            Script::$script["id"][Script::SECRETCODES] = array(
                "terima kasih",
                "maaf",
                "jujur",
                "bohong",
                "bingung",
                "senang",
                "sedih",
                "bodoh",
                "pintar",
//                "ya Tuhan",
                "percaya",
                "pilih",
                "yakin",
                "ragu",
                "main",
            );
            
            Script::$script["en"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["en"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " is in a good side. All agents in the team share the same secret codes given via Bot Private Message.\n\n"
                . "Agents can find the other teammates by using those secret codes, so that together they will succeed the mission easier. Remember, do not make it too obvious, or the bad guys will know the agents and it will make assassin's job easier to kill Merlin.\n\n"
                . "Possible secret codes: ".Constant::arrayToString(Script::$script["en"][Script::SECRETCODES]).".\n\n";
            Script::$script["id"][Script::PU_AGENTINFO]
                = "<b>".Script::$script["id"][Script::AGENT]."</b>".Constant::EMO_SMILE_B
                . " berada di tim baik. Semua agent dalam tim mendapatkan kode rahasia yang sama yang diberikan melalui PM Bot.\n\n"
                . "Agent dapat menemukan teman agen lainnya menggunakan kode rahasia tersebut, sehingga bersama-sama agent dapat menyukseskan misi lebih mudah. Ingat, jangan terlalu jelas memberikan kode, atau penjahat akan tahu semua agent sehingga membuat tugas assassin untuk membunuh Merlin menjadi lebih mudah.\n\n"
                . "Kode rahasia yang mungkin: ".Constant::arrayToString(Script::$script["id"][Script::SECRETCODES]).".\n\n";
                
            Script::$script["en"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["en"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Because Percival can see Merlin and Morgana, Morgana's primary job is to gain trust from Percival by acting as a Merlin. If Percival can be deceived, Merlin will be in trouble.\n\n";
            Script::$script["id"][Script::PU_MORGANAINFO]
                = "<b>".Script::$script["id"][Script::MORGANA]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Karena Percival dapat melihat Merlin dan Morgana, tugas utama Morgana adalah mendapatkan kepercayaan dari Percival dengan berpura-pura menjadi Merlin. Jika Percival dapat ditipu, maka Merlin akan berada dalam bahaya.\n\n";
                
            Script::$script["en"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["en"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Assassin can guess Merlin at the end of the game (if 3 quests already been succeed). If the guess is correct, whatever the result in the quests, Evil force will win.";
            Script::$script["id"][Script::PU_ASSASSININFO]
                = "<b>".Script::$script["id"][Script::ASSASSIN]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Assassin dapat menebak Merlin di akhir game (jika 3 quest sudah sukses). Jika Merlin berhasil dibunuh, apapun hasil di quest, tim jahat akan menang.";
                
            Script::$script["en"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["en"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Witch has the ability to know what are the roles that the good team holds, but witch doesn't know how much or who hold the roles. Use this information to narrow down the merlin.\n";
            Script::$script["id"][Script::PU_WITCHINFO]
                = "<b>".Script::$script["id"][Script::WITCH]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Witch mempunyai kemampuan untuk mengetahui peran apa saja yang ada di tim baik, tapi witch tidak mengetahui jumlah dan siapa yang memegang peran tersebut. Gunakan informasi ini untuk mencari merlin.";
                
            Script::$script["en"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["en"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n"
                . "Morgause is a combination role from /morgana and /assassin. The player with this character can deceive Percival and Morgause can also kill Merlin at the game of the game.\n\n";
            Script::$script["id"][Script::PU_MORGAUSEINFO]
                = "<b>".Script::$script["id"][Script::MORGAUSE]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n"
                . "Morgause adalah peran kombinasi dari /morgana dan /assassin. Pemain dengan karakter ini dapat menipu Percival dan Morgause juga dapat membunuh Merlin di akhir game.\n\n";
                
            Script::$script["en"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["en"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " is a good person whose job is to succeed the quests.\n\n"
                . "At the start of the game, knight can have information about 2 neighborhood players. Knight knows whether there is no bad person between them, or there is at least 1 bad person. However, Knight cannot detect Mordred, so Mordred will be seen as a good person.\n\n";
            Script::$script["id"][Script::PU_KNIGHTINFO]
                = "<b>".Script::$script["id"][Script::KNIGHT]."</b>".Constant::EMO_SMILE_B
                . " adalah pemain baik yang bertugas menyukseskan quest.\n\n"
                . "Di awal permainan, knight dapat memperoleh informasi mengenai 2 pemain di sekelilingnya. Knight tahu apakah tidak ada pemain jahat dari kedua orang itu, atau terdapat minimal 1 orang jahat. Namun, Knight tidak dapat mendeteksi Mordred, sehingga Mordred terlihat seperti orang baik.\n\n";
                
            // NEW
            Script::$script["en"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["en"][Script::GOOD_LANCELOT]."</b>"
                . " is originally a good person whose job is to succeed the quests.\n\n"
                . "However, there is a slight chance in a quest, Good Lancelot will switch role with the Evil Lancelot. If that happens, then in that quest, the lady will see the Good Lancelot as evil, and the winning condition for Good Lancelot will also change (for that quest only)\n\n";
            Script::$script["id"][Script::PU_GOODLANCELOTINFO]
                = "<b>".Script::$script["id"][Script::GOOD_LANCELOT]."</b>"
                . " awalnya adalah orang baik yang tugasnya menyukseskan misi\n\n"
                . "Namun, ada kemungkinan di suatu misi, Good Lancelot akan bertukar peran dengan Evil Lancelot. Jika itu terjadi, maka di misi itu, lady akan melihat Good Lancelot sebagai Jahat, dan kondisi kemenangan untuk Good Lancelot juga berubah (untuk misi itu saja)\n\n";
                
            // NEW
            Script::$script["en"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["en"][Script::EVIL_LANCELOT]."</b>"
                . " is originally an evil person. He is known to Merlin and the other evil friends. However, Evil Lancelot doesn't know his evil teammates.\n\n"
                . "There is a slight chance in a quest, Evil Lancelot will switch role with the Good Lancelot. If that happens, then in that quest, the lady will see the Evil Lancelot as good, and the winning condition for Evil Lancelot will also change (for that quest only)\n\n"
                . "In Variant 1, Evil Lancelot may give SUCCESS OR FAIL to quest. In Variant 2, Evil Lancelot must give FAIL on the quest he is on.";
            Script::$script["id"][Script::PU_EVILLANCELOTINFO]
                = "<b>".Script::$script["id"][Script::EVIL_LANCELOT]."</b>"
                . " awalnya adalah orang jahat. Dia diketahui oleh Merlin dan teman jahat lainnya. Namun, Evil Lancelot sendiri tidak tahu teman jahatnya.\n\n"
                . "Ada kemungkinan di suatu misi, Evil Lancelot akan bertukar peran dengan Good Lancelot. Jika itu terjadi, maka di misi itu, lady akan melihat Evil Lancelot sebagai Baik, dan kondisi kemenangan untuk Evil Lancelot juga berubah (untuk misi itu saja)\n\n"
                . "Di Varian 1, Evil Lancelot boleh memberikan SUKSES atau GAGAL. Di Varian 2, Evil Lancelot harus memberikan GAGAL di misi yang dia ikuti.";
                
            Script::$script["en"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["en"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " is an evil player but all other evil players do not know the oberon's identity. Merlin can still see Oberon though."
                . " Oberon knows all the evil teammates but should not use Private Message to communicate.";
            Script::$script["id"][Script::PU_OBERONINFO]
                = "<b>".Script::$script["id"][Script::OBERON]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat namun pemain jahat lain tidak tahu identitas Oberon. Sayangnya, Merlin masih dapat melihat Oberon."
                . " Oberon tahu semua teman jahatnya, namun tidak boleh menggunakan PM untuk berkomunasi.";
                
            Script::$script["en"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["en"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " as an evil player knows the other evil players at the start of the game and has to cooperate together to fail the quests.\n\n";
            Script::$script["id"][Script::PU_THIEFINFO]
                = "<b>".Script::$script["id"][Script::THIEF]."</b>".Constant::EMO_EVIL_B
                . " adalah pemain jahat yang tahu teman-teman jahatnya di awal permainan (kecuali Oberon) dan harus bekerja sama dengan tim jahat untuk mengagalkan quest.\n\n";
                
             }
    }

    static function getNameByRole($role, $lang="en"){
        if (!Script::$inited) {
            Script::init();
        }
        switch ($role) {
            case Constant::MERLIN:
                return Script::$script[$lang][Script::MERLIN];
            case Constant::PERCIVAL:
                return Script::$script[$lang][Script::PERCIVAL];
            case Constant::GOOD_NORMAL:
                return Script::$script[$lang][Script::SERVANT];
            case Constant::MORDRED:
                return Script::$script[$lang][Script::MORDRED];
            case Constant::ASSASSIN:
                return Script::$script[$lang][Script::ASSASSIN];
            case Constant::MORGANA:
                return Script::$script[$lang][Script::MORGANA];
            case Constant::OBERON:
                return Script::$script[$lang][Script::OBERON];
            case Constant::BAD_NORMAL:
                return Script::$script[$lang][Script::THIEF];
            case Constant::MORGAUSE:
                return Script::$script[$lang][Script::MORGAUSE];
            case Constant::KNIGHT:
                return Script::$script[$lang][Script::KNIGHT];
            case Constant::NINJA:
                return Script::$script[$lang][Script::NINJA];
            case Constant::AGENT:
                return Script::$script[$lang][Script::AGENT];
            case Constant::WITCH:
                return Script::$script[$lang][Script::WITCH];
            case Constant::AUDITOR:
                return Script::$script[$lang][Script::AUDITOR];
            case Constant::GOOD_LANCELOT:
                return Script::$script[$lang][Script::GOOD_LANCELOT];
            case Constant::EVIL_LANCELOT:
                return Script::$script[$lang][Script::EVIL_LANCELOT];
            default:
                return "undefined";
        }
    }

}
