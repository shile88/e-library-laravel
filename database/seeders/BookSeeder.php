<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Hari Poter i Kamen mudrosti',
                'isbn' => '978-80728-005',
                'description' => 'Hari Poter i Kamen mudrosti je prvi deo serijala o Hariju Poteru, za koji je planirano sedam knjiga. Knjige je za decu napisala engleska književnica Džoan Ketlin Rouling. Glavni lik je dečak čarobnjak Hari Poter. Ova knjiga je prvi put izašla 30. juna 1997. godine, a izdavač je bio Blumsburi (Bloomsbury Publishing Plc) iz Londona. Knjiga je prevedena na oko 60 jezika. Po knjizi je 2001. godine snimljen i istoimeni film.',
                'page_count' => 352,
                'size_id' => 1,
                'script_id' => 1,
                'binding_id' => 3,
                'publisher_id' => 1,
                'publish_date' => '2014-09-01',
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Harri Poter i Dvorana tajni',
                'isbn' => '978-80728-158',
                'description' => '',
                'page_count' => 384,
                'size_id' => 1,
                'script_id' => 1,
                'binding_id' => 3,
                'publisher_id' => 2,
                'publish_date' => '2014-09-11',
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Hari Poter i zatvorenik iz Askabana',
                'isbn' => '074-54215-123',
                'description' => 'Hari Poter i zatvorenik iz Askabana (engl. Harry Potter and the Prisoner of Azkaban) je fantastični film iz 2004. godine, rećisera Alfonsa Kuarona i studija Vorner bros. Zasnovan je na istoimenom romanu Dž. K. Rouling. Treći je film u seriji filmova o Hariju Poteru. Kao tumači glavnih uloga zadržani su glumci iz prva dva filma, sem što Majkl Gambon glumi lik Albusa Dambldora umesto Ričarda Hrisa. Scenarista je, kao i u prva dva filma, Stiv Klouvs. Nastavak je filma Hari Poter i Dvorana tajni, a prati ga film Hari Poter i vatreni pehar.',
                'page_count' => 480,
                'size_id' => 1,
                'script_id' => 1,
                'binding_id' => 4,
                'publisher_id' => 3,
                'publish_date' => '2014-09-27',
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Na Drini ćuprija',
                'isbn' => '6-01-03056-4',
                'description' => 'Na Drini ćuprija je roman srpskog književnika i nobelovca Ive Andrića. Roman pripoveda o građenju mosta preko reke Drine u bosanskom gradu Višegradu. Građenje mosta naručio je Mehmed paša Sokolović, čuveni zvaničnik Osmanskog carstva koji je bio rođeni Srbin iz Rudog. Još kao mali dečak, Bajica, odveden je sa ostalom decom kao danak u krvi u Carigrad. Uprkos raširenom mišljenju, Andrić nije dobio Nobelovu nagradu za književnost za ovaj roman, već je, kao i svi drugi dobitnici, zvanično nagrađen za celokupno književno stvaralaštvo, a ne pojedinačno delo.',
                'page_count' => 464,
                'size_id' => 1,
                'script_id' => 5,
                'binding_id' => 2,
                'publisher_id' => 8,
                'publish_date' => '1983-02-07',
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Gorski vijenac',
                'isbn' => '978-63732-608',
                'description' => 'Gorski vijenac (u prvom izdanju Горскıй вıенацъ) refleksivno-herojska je poema u obliku narodne drame Petra II Petrovića Njegoša, nastala u doba srpskog romantizma. Delo je objavljeno u Beču 1847. na srpskom narodnom jeziku i svojom pojavom predstavljalo je veliki doprinos pobedi Vukove borbe za novi književni jezik. Tema „Gorskog vijenca” je istraga, odnosno istrebljenje, poturica. Delo je napisano posle poeme „Luča mikrokozma” (1845), a pre poeme „Lažni car Šćepan Mali” (1847, objavljena 1851).',
                'page_count' => 132,
                'size_id' => 1,
                'script_id' => 5,
                'binding_id' => 1,
                'publisher_id' => 7,
                'publish_date' => '1964-10-09',
                'total_count' => rand(1, 15),
            ], [
                'title' => 'Lelejska gora',
                'page_count' => 599,
                'binding_id' => 2,
                'publisher_id' => 1,
                'publish_date' => '2006-01-01',
                'script_id' => 1,
                'isbn' => '86-7706-190-8',
                'description' => 'Lelejska gora je roman crnogorskog književnika Mihaila Lalića objavljen 1957. Prerađeno izdanje izašlo je 1962. Roman pripoveda sudbinu partizana Lada Tajovića koji se tokom leta 1942. vraća u svoj zavičajni kraj, tražeći prijatelja Nika Doselića. Pošto je saznao da mu se prijatelj predao i suočen sa samoćom, on doživljava krizu svojih ubeđenja. „Lelejska gora“ je po izlasku pozitivno dočekana od strane književne kritike, osvojivši Njegoševu i Nolitovu nagradu. Književni kritičar Dragan Jeremić je roman u prikazu za časopis NIN opisao kao: veliku poemu o mnogim vidovima postojanja i ispoljavanja prirode po sebi i u odnosu na čoveka.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Tvrdica',
                'page_count' => 98,
                'binding_id' => 2,
                'publisher_id' => 3,
                'publish_date' => '1998-01-01',
                'script_id' => 2,
                'isbn' => '86-09-00133-4',
                'description' => 'Molijer nije odbacio ni komiku zapleta, ni komiku situacije, pa čak ni romaneskne neočekivanosti u radnji i raspletu, ali se time ni izdaleka ne iscrpljuje njegov repertoar. Jedno od njegovih najboljih, ako ne i najbolje, djelo je svakako „Tvrdica“. Maštovito osmišljen zaplet isprepletani likovi i osjećanja, misterija i šarm starine ostavljaju čitaoca bez daha, dok pokušava da otkrije rasplet. Ali rijetki su oni čiji duh može da se mjere sa genijalnošću Pisca. Ono što je zasmijavalo i očaravalo mase u sedamnaestom vijeku, još uvijek je aktuelno. Ljubav, jedina tema, koja nikada ne mijenja oblik, koja ne stari i ne umire, bila je česta inspiracija i Molijeru. Zbog ljubavi dva čovjeka više nisu otac i sin, nego surovi rivali u borbi za djevojčinu naklonost. U pričama i pozorišnim komadima toga doba, pozitivni ženski likovi su, obavezno, lijepe, čedne, smijerne, požrtvovane djevojke, poput Molijerevih Elize i Marjane. Na njihovom putu ka sreći, po pravilu stoji ili siromaštvo (Marijana), ili strog i nepravedan otac (Harpagon-Elizin otac). Muški likovi su kao po pravilu mladići viteškog ponašanja spremni na sve da dobiju damu, koju žele. Takve uloge Molijer je dodijelio Valeru i Kleantu. Pored čitave galerije likova, koji su tu da učine predstavu, što stvarnijom, zasluženu pažnju posvećujemo Frosini, spletkašici i provodadžiki dobroga srca, koja na kraju pomaže mladima da ostvare svoju ljubav. Molijer se pobrinuo i za užasnu tragediju (brodolom), koja je rastavila porodicu. Stari Anselmo, otac mladog Valera koji je zaljubljen u Elizu, treba dotičnom da se oženi. Za to je, naravno, zaslužan stari tvrdica Harpagon, kome „bez miraza“ zamjenjuje (adekvatno) i kćerkinu sreću, i ljubav, i ogromnu razliku u godinama.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Rani jadi',
                'page_count' => 114,
                'binding_id' => 1,
                'publisher_id' => 2,
                'publish_date' => '1998-01-01',
                'script_id' => 2,
                'isbn' => '148-08124-989',
                'description' => 'Rani jadi je zbirka priča srpskog pisca Danila Kiša i prvi deo trilogije Porodični cirkus. Objavljena je 1970. godine, s tim što je priča pod nazivom \'Eolska harfa\' dodata 1983. godine. Ova knjiga, zajedno sa romanima Bašta, pepeo i Peščanik, pripada takozvanom porodičnom ciklusu romana Danila Kiša. Namenjena je, kako stoji u podnaslovu, „za decu i osetljive“. U zbirci Rani jadi se kroz nekoliko priča oslikava lični razvoj dečaka Andreasa Sama. Ova zbirka žanrovski spada u autobiografsku zbirku za decu i mlade s obzirom da govori o ranom detinjstu i odrastanju samog pisca. Pisac je dobio Andrićevu nagradu za ovo delo.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Primjeri čojstva i junaštva',
                'page_count' => 217,
                'binding_id' => 1,
                'publisher_id' => 3,
                'publish_date' => '1976-01-01',
                'script_id' => 2,
                'isbn' => '488-85443-575',
                'description' => '„Primjeri čojstva i junaštva“ počinju jednom pričom o tome kako je ljutnja štetna i o tome kakve neprilike ljudima donosi naprasita i prijeka narav. Ovim primjerom, ispričanim u svega sedam redaka, intonirana je cijela knjiga. Kroz cijelo djelo postoje teme o kojima govore ovi primjeri: pobjeda nad svojim osjećanjima uzvisuje čovjeka; pazi šta ćeš reći, a kad si dao riječ, ona te obavezuje i na zlo i na dobro; bratska ljubav; čast je skuplja od života; velikodušnost; opšte dobro iznad svega; ne gubi svijest o dužnosti ni onda kad ti je najteže; šta je pravo junaštvo ili ne zaboravi da je junak samo onaj koji nikada ne zaboravlja da je čovjek; pobratimstvo; priznanje neprijatelju, i tako dalje do kraja knjige, ističući kroz najveći broj primjera prije svega čast. Osjećanju časti, podređena su i najdublja osjećanja, kao što je rodoljublje, ljubav, glad. Ljudi i junaci ginu, to je pogibija, ali ne i smrt. Oni ostaju da žive, u svojim djelima, u sjećanju, u pjesmi, u narodu, u moralnoj i duhovnoj povjesnici njegovoj. Ljudi prolaze, junaci ginu, ali za njima ostaju junački spomeni.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Gospoda Glembajevi',
                'page_count' => 177,
                'binding_id' => 1,
                'publisher_id' => 4,
                'publish_date' => '1974-01-01',
                'script_id' => 2,
                'isbn' => '290-06016-551',
                'description' => 'Gospoda Glembajevi je drama Miroslava Krleže iz 1929. godine. Drama je podeljena u tri čina i bavi se događajima i raskolom unutar porodice Glembaj. Ovo je prva drama, od tri drame iz glembajevskog ciklusa, u koji spadaju i drame U agoniji i Leda.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Don Kihot',
                'page_count' => 788,
                'binding_id' => 2,
                'publisher_id' => 1,
                'publish_date' => '2004-01-01',
                'script_id' => 1,
                'isbn' => '86-7706-037-5',
                'description' => 'Don Kihot ili Don Kihote (šp. Don Quijote) je jedno od remek-dela španske i svetske književnosti, autora Migela de Servantesa. Jedna je od najviše objavljivanih i najprevođenijih knjiga na svetu. Smatra se kamenom temeljcem zapadnoevropske književnosti i jednim od najboljih objavljenih dela fikcije svih vremena, kao i najvažnijim delom španskog Zlatnog veka (šp. Siglo de Oro).',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Seobe',
                'page_count' => 796,
                'binding_id' => 2,
                'publisher_id' => 1,
                'publish_date' => '2004-01-01',
                'script_id' => 1,
                'isbn' => '86-7706-060-X',
                'description' => 'Seobe je roman Miloša Crnjanskog napisan 1929. godine. Druga knjiga Seoba ili „Seobe 2“, roman Miloša Crnjanskog koji se pojavio 1962, nije nastavak romana „Seobe“ iz 1929, već je sasvim autonomno delo. Govori o teškom životu Srba posle velike seobe u Habzburškoj monarhiji. Glavni lik Vuk Isakovič, kao i sam roman zasnovani su na dokumentovanim istorijskim činjenicama. Autor kao glavni motiv romana ističe osećanje praznine i uzaludnosti, a život koji su proživeli likovi je besmislen i proživljen pod tuđom voljom i za tuđ račun.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Ana Karenjina',
                'page_count' => 830,
                'binding_id' => 2,
                'publisher_id' => 1,
                'publish_date' => '2004-01-01',
                'script_id' => 1,
                'isbn' => '86-7706-059-6',
                'description' => 'Ana Karenjina (rus. Анна Каренина) je roman ruskog pisca Lava Tolstoja, koji je prvo objavljivan u delovima od 1873. do 1877. godine. Prva pojava romana je bila u Ruskom glasniku (rus. Русский Вестник), ali nije objavljen do kraja, pošto je Tolstoj došao u sukob sa urednikom Mihailom Katkovim oko pitanja koja su pokrenuta u završnom delu. Stoga je prva pojava romana u celini bila u obliku knjige.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Nečista krv',
                'page_count' => 214,
                'binding_id' => 2,
                'publisher_id' => 3,
                'publish_date' => '1998-01-01',
                'script_id' => 2,
                'isbn' => '86-09-00251-9',
                'description' => 'Nečista krv je jedno od najpoznatijih dela srpskog pisca epohe moderne Borisava „Bore“ Stankovića. Glavni lik je Sofka, poslednji potomak nekada ugledne vranjske porodice. Govoreći o njoj, Bora zapravo govori o uzdizanju, degeneraciji i gašenju jedne porodice, o moralnom izopačenju njenih članova, nesreći koja pada na Sofkina leđa i prenosi se na njene potomke. U časopisima i listovima, najviše u Politici, Stanković objavljuje pripovetke i odlomke iz romana Nečista krv, koji će u celosti izaći 1910. godine. Prvi odlomak, pod istim imenom, objavljen je „više godina" ranije u niškoj „Gradini” (što mora biti 1900-1901) a odlomci „U amamu” i „Efendi Mita” su feljtonizirani u „Politici”. Pišući o ovom delu, Jovan Skerlić konstatuje da je to "dvostruka dobit za srpsku književnost, ne samo što srpska književnost dobija roman od velike vrednosti, nego što se i potpuno razbija strah koji je vladao kod onih koji su najviše verovali u originalni i snažni talenat Borisava Stankovića"',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Revizor',
                'page_count' => 132,
                'binding_id' => 2,
                'publisher_id' => 3,
                'publish_date' => '1986-01-01',
                'script_id' => 2,
                'isbn' => '218-18235-689',
                'description' => 'Revizor je satirična komedija ruskog romanopisca i dramaturga Nikolaja Vasiljeviča Gogolja. Prvo izdanje je objavljeno 1836, dok je drugo, prepravljeno, izdanje objavljeno 1842. godine. Gogolj je ovo delo napisao nadahnut anegdotom koju mu je prepričao prijatelj Aleksandar Sergejevič Puškin.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Romeo i Julija',
                'page_count' => 199,
                'binding_id' => 2,
                'publisher_id' => 3,
                'publish_date' => '1987-01-01',
                'script_id' => 2,
                'isbn' => '86-09-0072-9',
                'description' => 'Romeo i Julija (engl. Romeo and Juliet), u ranijim prevodima Romeo i Đulijeta (ital. Romeo e Giulietta), jedna je od tragedija engleskog pisca Vilijama Šekspira. To je njegovo najpoznatije delo. Radnja se odvija u italijanskom gradu Veroni. Jedna od kultnih rečenica iz ovog dela je Julijina: O, Romeo, zašto si Romeo?',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Cigani',
                'page_count' => 256,
                'binding_id' => 1,
                'publisher_id' => 5,
                'publish_date' => '1997-01-01',
                'script_id' => 2,
                'isbn' => '86-427-0632-5',
                'description' => 'Poema „Cigani” spada u najtragičniji Puškinov tekst, koji je napisao dok je bio u progonstvu u Besarabiji. Puškina je zainteresovao život Cigana koje je upoznao dok je bio u Kišnjevu, pa je odlučio da ga pretoči u romantičarsku poemu.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Gilgameš',
                'page_count' => 93,
                'binding_id' => 1,
                'publisher_id' => 5,
                'publish_date' => '1997-01-01',
                'script_id' => 2,
                'isbn' => '86-427-0608-2',
                'description' => 'Ep o Gilgamešu je sumersko-vavilonsko delo o Gilgamešu, petom vladaru prve poslepotopske dinastije iz Uruka između 2700. i 2650. g. p. n. e. Ep o Gilgamešu je ep (spev) iz Sumera i nesumnjivo najstarije poznato književno delo. Priča sadrži niz legendi i pesama uključenih u duži akadski ep o heroju-kralju Gilgamešu od Uruka, vladaru iz trećeg milenijuma p. n. e. Nekoliko verzija je sačuvano, a najpotpunije je očuvano dvanaest glinenih ploča u biblioteci asirskog kralja Asurbanipala iz 7. veka p. n. e. u Ninivi.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Derviš i smrt',
                'page_count' => 426,
                'binding_id' => 1,
                'publisher_id' => 5,
                'publish_date' => '1997-01-01',
                'script_id' => 2,
                'isbn' => '86-427-0642-2',
                'description' => 'Pisan je u razdoblju od četiri godine (1962—1966) u piščevom poodmaklom dobu. Objavljen je 1966. godine od strane izdavačke kuće Svjetlost iz Sarajeva i doživio je veliki uspeh u okvirima čitalačke javnosti širom tadašnje Jugoslavije. Roman je doživeo brojna reizdanja. Derviš i smrt doneo je Selimoviću mnogobrojne najviše jugoslovenske nagrade (između ostalih, Njegoševu, Goranovu, NIN-ovu).',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Starac i more',
                'page_count' => 106,
                'binding_id' => 2,
                'publisher_id' => 6,
                'publish_date' => '1990-01-01',
                'script_id' => 1,
                'isbn' => '86-01-01639-1',
                'description' => 'Starac i more je roman američkog književnika Ernesta Hemingveja. Roman je 1951. napisan na Kubi, a objavljen je 1952. u SAD. Ovaj kratki roman je Hemingveju doneo i Nobelovu nagradu za književnost 1954. godine. Tema romana je životna borba sa kojom se suočavaju svi ljudi, ali i sklad i nesklad čoveka sa prirodom.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Čiča Gorio',
                'page_count' => 314,
                'binding_id' => 2,
                'publisher_id' => 7,
                'publish_date' => '2005-01-01',
                'script_id' => 1,
                'isbn' => '86-7706-124-x',
                'description' => 'Čiča Gorio (franc. Le Père Goriot) roman je francuskog realiste Onorea de Balzaka, objavljen 1835. Dio је velikog ciklusu koji je Balzak nazvao ljudska komedija (Comédie humaine). Roman Čiča Gorio je složene strukture, tipološki višeznačan te se može odrediti i kao društveni roman, i kriminalistički i ljubavni i roman o vaspitanju ili o razvoju karaktera.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Ilijada',
                'page_count' => 287,
                'binding_id' => 2,
                'publisher_id' => 7,
                'publish_date' => '2005-01-01',
                'script_id' => 2,
                'isbn' => '86-7706-106-1',
                'description' => 'Ilijada je junački epski spev. Pretpostavlja se da je nastao u 8. veku pre nove ere u grčkim kolonijama u Maloj Aziji.[1] Oblik u kome je Ilijada došla do nas dobila je u 6 veku pre. n. e. u Atini u vreme Pizistrata (vladao Atinom sa prekidima od 560. p. n. e. do 527. p. n. e.). Pizistrat je ustanovio Panatinski praznik o kome su se recitovale Homerove pesme. U tu svrhu u atičkoj redakciji pripremljena su državna izdanja tih pesama. Autorstvo se pripisivalo Homeru. Međutim, nema nijednog pouzdanog podatka o životu Homera zbog čega se u njegovu istoričnost sumnja. U vezi s tim nastalo je u nauci homersko pitanje. Ilijada je podeljena u 24 knjige. Podelu su ustanovili ispitivači Ilijade u Aleksandriji. Osnovni motiv Ilijade je srdžba najboljeg ahajskog junaka, Ahila.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Hamlet',
                'page_count' => 219,
                'binding_id' => 2,
                'publisher_id' => 8,
                'publish_date' => '2007-01-01',
                'script_id' => 1,
                'isbn' => '978-86-7712-2',
                'description' => 'Tragedija Hamleta, kraljevića danskog, tragedija je Vilijama Šekspira i jedan je od njegovih najpoznatijih i najizvođenijih komada. Postoje dokazi da je napisana i izvođena pre 1600. godine, ali su neke tematske reference, koje i dalje postoje, dodate naredne godine. Hamlet je verovatno Šekspirov najpopularniji komad, sudeći po broju izvođenja; npr. na vrhu je liste u Kraljevskom šekspirskom pozorištu od 1879. godine. Zaplet sadrži elemente tragedije osvete, bratoubistva, ubistva, introspekcije i natprirodnog uplitanja. Predstavlja najduži Šekspirov komad, a uloga princa Hamleta je ubedljivo najduža uloga među svim njegovim komadima.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Proces',
                'page_count' => 191,
                'binding_id' => 2,
                'publisher_id' => 6,
                'publish_date' => '1987-01-01',
                'script_id' => 1,
                'isbn' => '717-05001-441',
                'description' => 'Proces (nem. Der Prozess) je roman Franca Kafke objavljen posthumno, 1925. godine. Franc Kafka je napisao roman između 1914. i 1915. godine, a posthumno objavljen 26. aprila 1925. godine. Jedno od njegovih najpoznatijih dela, govori o Josefu K., čoveku koji je uhapšen i odveden od strane nepristupačnog autoriteta, a priroda njegovog zločina nije otkrivena ni njemu ni čitaocu. Radnja se odvija u jednom nedefinisanom evropskom gradu, a vreme radnje je 20. vek.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Prokleta avlija',
                'page_count' => 98,
                'binding_id' => 2,
                'publisher_id' => 1,
                'publish_date' => '2007-01-01',
                'script_id' => 2,
                'isbn' => '717-05001-441',
                'description' => 'Roman Prokleta avlija, velikog pisca Ive Andrića, vraća nas u minula vremena gde je pravda bila utopija, ali i san mnogih potlačenih. Likove u delu uglavnom upoznajemo preko priča neke druge osobe, a ne njih samih, ali oni skrivaju probleme s kojima se svakodnevno susrećemo i u našim životima, što govori o njihovoj bezvremenosti. Takvi problemi ne ispoljavaju se javno, nego se drže duboko potisnuti u individuama koje same moraju da se bore s nizom nepravilnosti postojećeg društva. Tako i lik fra Petra upoznajemo preko druge osobe, emotivno vezane za fratra, pa kratko nakon njegove smrti već oseća prazninu i nedostatak bliskosti.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Dekameron',
                'page_count' => 285,
                'binding_id' => 1,
                'publisher_id' => 9,
                'publish_date' => '1998-01-01',
                'script_id' => 2,
                'isbn' => '848-91291-125',
                'description' => 'Dekameron (итал. Il Decamerone, Decameron) je zbirka od 100 novela koju je napisao italijanski autor Đovani Bokačo. Vjerovatno je započeta 1350, a završena 1353. godine. To je srednjovjekovni alegorijski rad čije priče imaju oblike od erotskih do tragičnih. Teme su ljubavne ili o lukavosti i raznim neslanim šalama. Iako je to veliko umjetničko djelo sa elementima zabavnog karaktera, ipak je to važan istorijski dokument života u 14. vijeku. Dekameron u prevodu znači 10 dana. Svaka priča je prožeta porukom da treba uživati u svakom trenutku, kao i kritikom lažnog morala. Sve priče su povezane jednom okvirnom koja govori kako su se sedam devojaka i tri mladića sklonili od kuge koja je harala Firencom na obližnjem imanju, gde su proveli 10 dana tako što je svaki dan svako ispričao po jednu priču. Posle svake priče se nalazi podatak kog dana je ispričana priča i koja je bila po redu toga dana. Bokačo je ovu zbirku novela posvetio svojoj dragoj Fijameti.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Kanconijer',
                'page_count' => 124,
                'binding_id' => 1,
                'publisher_id' => 11,
                'publish_date' => '1996-01-01',
                'script_id' => 2,
                'isbn' => '86-7058-037-3',
                'description' => 'Kanconijer (ital. Il Canzoniere) Frančeska Petrarke (1304—1374) jedna je od najpoznatijih zbirki pesama svih vremena. Inspirisana je pesnikovom platonskom ljubavlju prema gospođi Lauri. Petrarka nije mislio da će biti poznat po ovom delu već po delu "Afrika". Naziv dela nije on dao, on je ove pesme nazivao " rasutim rimama" i napisao ih je na narodnom italijanskom, toskanskim dijalektom.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Antigona',
                'page_count' => 101,
                'binding_id' => 2,
                'publisher_id' => 6,
                'publish_date' => '1990-01-01',
                'script_id' => 1,
                'isbn' => '86-01-01695-2',
                'description' => 'Antigona (gr. Ἀντιγόνη) je Sofoklova tragedija iz 5. veka p. n. e.. To je klasična tragedija starogrčke dramske umetnosti. Drama je podeljena u sedam činova. Pored dela od pet epizoda (činova) ima još početni deo — prolog i završni deo — eksodu, u koji je uključena i katastrofa drame. Glavni likovi u drami su: Antigona, ćerka tebanskog kralja Edipa, njena sestra Ismena, novi kralj tebanski Kreont, sin mu Hemon, žena Euridika i prorok Teresija. Radnja drame je smeštena u Tebu (Stara Grčka), u vreme vladavine kralja Kreonta.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ],
            [
                'title' => 'Stranac',
                'page_count' => 127,
                'binding_id' => 2,
                'publisher_id' => 6,
                'publish_date' => '1991-01-01',
                'script_id' => 1,
                'isbn' => '354-04584-476',
                'description' => 'Stranac je roman kojim je Kami postigao prvi veliki uspeh na koji je uticaj izvršila Ničeova filozofija, Sartrova filozofija egzistencijalizma, a najviše, njegova filozofija apsurda. Roman pripada razdoblju kasnog modernizma (od 40-ih do 70-ih godina 20. veka) u kojoj je tema prikaz besmislenog i apsurdnog života i čovekova otuđenost i život kao besmisleno postojanje kojim vlada nepredvidiv niz slučajnosti.',
                'size_id' => 1,
                'total_count' => rand(1, 15),
            ]
        ]);
    }
}
