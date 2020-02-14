-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 14 2020 г., 11:34
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecojer`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 NOT NULL,
  `language` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'english',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `title` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `description`, `image`, `language`, `created_date`, `update_date`, `status`, `title`) VALUES
(6, 'Казахстанская ассоциация региональных экологических инициатив «EcoJer» предлагает разделять офисные отходы для дальнейшей переработки.\r\n<br /><br />\r\nМы бросили клич столичным компаниям, чтобы они установили у себя в офисах специальные эко-боксы для сортировки отходов. Пластик, бумага, стекло могут послужить сырьем для наших предприятий, вместо того чтобы загрязнять окружающую среду.\r\n<br /><br />\r\n«На полигонах Казахстана скопилось свыше 120 млн тонн бытовых отходов и ежегодна эта цифра увеличивается на 4 млн тонны. Многие полигоны уже не пригодны для дальнейшего использования и наносят вред нашей экологии. Поэтому сегодня обходимо широко внедрять культуру раздельного сбора мусора, в том числе в офисах. Мы хотим на своем примере доказать, что это возможно, и запустить челлендж по установке в офисах экобоксов для бумаги, пластика, металлических отходов и стекла. Первую «волну» начинаем в столице, передаем ее Министерству экологии, крупнейшей отраслевой ассоциации Kazenergy, а также компании «МardenProperty», – говорит генеральный директор Казахстанской ассоциации региональных инициатив «EcoJer» Рустем Кабжанов.<br />\r\n<img src=\"/images/news/n1-1.jpg\" />\r\n<br />\r\nКазахстанцы готовы к раздельному сбору мусора,в стране есть активисты, которые прививают экокультуру, готовы настроить нужные для этого бизнес-процессы. «Мы все хотим жить в чистом Казахстане, дышать чистым воздухом», – отмечает Рустем Кабжанов. \r\n<br />\r\n<img src=\"/images/news/n1-2.jpg\" />\r\n<br />\r\nИнициатива реализуется при поддержке проекта «EcoNetwork». Специальные эко-урны можно установить в любом офисе. При этом, производители эко-урн готовы проводить для каждой компании бесплатные семинары и объяснять: как правильно сортировать мусор, что подлежит переработке, а что нет.  \r\n<a class=\"hlink\" href=\"https://inbusiness.kz/ru/news/novyj-chellendzh-dlya-kompanij-startoval-v-nur-sultane\">Читайте подробнее</a>', 'cf73794c49f770db31d396b3bc1acb24.jpg', 'russian', '2020-02-13 09:41:19', NULL, 1, 'ЭКО-ЧЕЛЕНДЖ ОТ «ECOJER». ПРИСОЕДИНЯЙТЕСЬ!'),
(7, 'Экодвижение в Казахстане со временем будет набирать силу. Такого мнения придерживается генеральный директор Казахстанской ассоциации региональных экологических инициатив EcoJer Рустем Кабжанов.<br /><br />\r\n\r\nВ Мажилисе парламента РК состоялась презентация проекта Экологического кодекса, который должен урегулировать все спорные моменты и исключить сложившийся дисбаланс в области охраны окружающей среды. По мнению Рустема Кабжанова, есть в нем как преимущества, так и недочеты. <br /><br />\r\n– Мы считаем прогрессивным тот факт, что государство сконцентрируется на крупных загрязнителях. Это так называемая первая категория, большие заводы, фабрики, \"АрселорМиттал Темиртау\", \"Казахмыс\", экибастузские ГРЭС, алматинские ТЭЦ, те, что наносят основной урон окружающей среде. А небольшие предприятия вроде АЗС, СТО, магазины, шашлычные и другие, им государство дает больше свободы, они будут декларировать свою экологическую политику, стараться минимизировать свое воздействие на экологию. Проверять их будут лишь в случае жалоб жителей. <br /><br />\r\nТакже большим прогрессом является то, что государство планирует ввести стратегическую экологическую оценку. Это такой международный инструмент, который применяется на стадии разработки государственной стратегии. <br /><br />\r\nМеняется процедура оценки воздействия на окружающую среду (ОВОС). К примеру, инвестор, желающий построить ТЭЦ на угле, заранее проводит анализ, как это предприятие будет в дальнейшем влиять на экологию. Сейчас это происходит так: инвестор создает проект и только потом доказывает на публичных слушаниях его безвредность. Предлагается же, чтобы еще на стадии идеи строительства, он уведомлял о своих намерениях все заинтересованные стороны – госорганы, общественников и непосредственно самих жителей. Те в свою очередь отправляют свои замечания, и вы пытаетесь их минимизировать. <br /><br />\r\n<a class=\"hlink\" href=\"https://inbusiness.kz/ru/news/ekodvizhenie-v-kazahstane-so-vremenem-budet-nabirat-silu\">ПОЛНАЯ ВЕРСИЯ ИНТЕРВЬЮ</a>', 'a4694d35304fd5d0ffd333ed2fefa023.jpg', 'russian', '2020-02-13 09:44:34', NULL, 1, 'ПРЕИМУЩЕСТВА И НЕДОЧЕТЫ ЭКОЛОГИЧЕСКОГО КОДЕКСА - МНЕНИЕ'),
(8, 'Владельцы одного из крупнейшихбизнес-центров столицы отказались выбрасывать мусор в обычные урны. \r\nВ офисах зданияустановили специальные эко-боксы для раздельного сбора отходов с целью их последующей переработки. Эко-боксыпозволяют сотрудникам сортировать отдельно бумагу, пластик, стекло и металлические изделия, предотвращая разрастание полигонов ТБО и загрязнение окружающей среды.<br /><br />\r\n\r\nТаким образом, столичные компании поддержали эко-челендж, который запустила Казахстанская ассоциация региональных экологических инициатив «EcoJer».<br /><br /> \r\n«Мы с воодушевлением поддержали призыв ассоциации «EcoJer», поскольку установка экологических урн для раздельного сбора мусора – это еще один шаг к развитию экосистемы, которую мы внедряем в здании для наших арендаторов. Мы устанавливаем по всему зданию энергосберегающие лампы для разумной экономии электричества, дозаторы на кранах для сбережения воды. Уверен, что примеру по установке эко-боксов последуют многие столичные компании», - говорит представитель компании «МardenProperty»ОлжасАхметбеков.<br /><br />\r\n\r\nНа очереди в эко-челендже – ассоциация «KazEnergy» и банк «KassaNova».', 'e353ac9365da93f9dc656ec4d7e28dda.jpg', 'russian', '2020-02-13 09:48:00', NULL, 1, '«EMERALD TOWER» ПРИСОЕДИНИЛСЯ К ЭКО-ЭСТАФЕТЕ'),
(9, 'EcoJer, Kazakh Association of Regional Environmental Initiatives, offers to sort office waste for further recycling. \r\n<br /><br />\r\nWe urge companies in the capital of Kazakhstan to install special eco-bins in their offices for sorting waste. Plastic, paper, glass can serve as raw material for our facilities instead of contaminating the environment.\r\n\"More than 120 million tonnes of household waste has accumulated in landfills in Kazakhstan, and this figure is increasing by 4 million tonnes annually. Many landfills are no longer suitable for further use and are harmful to our environment. Therefore, today it is necessary to widely introduce the culture of separate waste collection. We want to prove with our own example that this is possible, and launch an eco-collection facility for paper, plastic, metal waste and glass in offices. We initiate this challenge in Nur-Sultan and hands the baton to the Ministry of Ecology, the largest industry association Kazenergy, and the Marden Property company, RustemKabzhanov, General Director of the EcoJer Association, said.\r\n<br /><br />\r\nThe citizens of Kazakhstan are ready for separate waste collection, there are activists in the country who instill eco-culture, ready to set up the necessary business processes for this. \"We all want to breathe clean air. We all want to drink clean water in Kazakhstan,\" RustemKabzhanov said.  \r\n<br /><br />\r\nThe initiative is supported by the EcoNetwork project. Special eco-bins can be installed in any office. At the same time, manufacturers of eco-bins are ready to conduct free seminars for each company and explain: how to sort garbage correctly, which items can be or can’t be recycled.\r\n<a class=\"hlink\" href=\"https://inbusiness.kz/ru/news/novyj-chellendzh-dlya-kompanij-startoval-v-nur-sultane\">Read more</a>', '77aa5d1a2362d5571838181cdb9373b8.jpg', 'english', '2020-02-13 09:54:14', NULL, 1, 'EcoJer creates eco-challenge. Join us!'),
(10, 'According to RustemKabzhanov, General Director of EcoJer, Kazakh Association of Regional Environmental Initiatives, the eco-movement in Kazakhstan will gain momentum over time.\r\n<br /><br />\r\nThe Mazhilis of the Parliament of Kazakhstan hosted a presentation of the draft Environmental Code, which should resolve all controversial issues and eliminate the current imbalance in environmental protection. According to RustemKabzhanov, there are both advantages and disadvantages in the Draft Environmental Code. \r\n<br /><br />\r\n- We consider progressive the fact that the Government will concentrate on major pollutants. These are the so-called first category pollutants: large plants, factories, ArcelorMittal Temirtau, Kazakhmys, Ekibastuz GRES, Almaty thermal power stations, those that cause damage to the environment. And the small enterprises like the gas station, service station, shops, shashlik houses and others, the state provides them with more flexible conditions, they will declare their environmental policy, try to minimize their environmental impact. They will be checked only upon residents’ complaints. \r\n<br /><br />\r\nIt is also great progress that the state plans to introduce a strategic environmental assessment. This is an international instrument, which is applied at the stage of development of the state strategy.\r\nThe Environmental Impact Assessment (EIA) is a process of evaluating the likely environmental impacts of a proposed project or development, taking into account inter-related socio-economic, cultural and human-health impacts, both beneficial and adverse.\r\n<br /><br />\r\nThe EIA procedure is being changed. For example, an investor, who wants to construct a coal-fired power station, carries out an analysis of how the plant will influence the environment in the future. Now it happens as follows: an investor creates a project and only then proves its harmlessness at public hearings. It is proposed that at the construction idea stage, the investor informs all interested parties about his intentions – government agencies, public, and residents. In turn government agencies, public and residents send their comments, and the investor should try to minimize harms.\r\n<br />\r\n<a class=\"hlink\" href=\"https://inbusiness.kz/ru/news/ekodvizhenie-v-kazahstane-so-vremenem-budet-nabirat-silu\">READ FULL INTERVIEW</a>', '53d9086c0e4a8418a8dfdd592b1eaa80.jpg', 'english', '2020-02-13 09:56:37', NULL, 1, 'Expert expresses opinion on advantages and disadvantages of Draft Environmental Code'),
(11, 'The owners of one of the largest business centers of Nur-Sultan prefer to throw garbage into garbage and recycling bins to ordinary bins. \r\nSpecial eco-bins were installed in the offices of the business center for separate waste collection for its further processing. Eco-bins allow employees to sort paper, plastic, glass and metal products separately, preventing the increase of landfills and environmental pollution.\r\n<br /><br />\r\nThus, the companies of Nur-Sultan supported the eco-challenge, launched by the EcoJer, Kazakh Association of Regional Environmental Initiatives. \r\n\"We were inspired by the EcoJer. The installation of eco bins for separate collection of garbage is another step towards the development of the ecosystem, which we are implementing in our business center for our tenants. We are installing energy-efficient lamps in the building to save electricity, and taps to save water. I am sure that many companies in the capital will follow the example of installing eco-bins,\" OlzhasAkhmetbekov, a representative of the Marden Property company, said.\r\n<br /><br />\r\nKazEnergy Association and Kassa Nova Bank are willing to join the eco-challenge.', 'b2cd84e413e279161497a0eb017deced.jpg', 'english', '2020-02-13 09:59:28', NULL, 1, 'Emerald Tower Business Center joins eco challenge'),
(12, 'Челлендж Kassa Nova банкіне жолданды.<br /><br />\r\n\r\n«EcoJer» қазақстандық экологиялық аймақтық бастамалар қауымдастығы» заңды тұлғалар бірлестігінің директоры Рүстем Қабжанов экологиялық үлкен мәселені аз шығын жұмсап, шешу жолдарын айтып берді.<br /><br />\r\n\r\n«Қазір Қазақстанның қоқыс полигондарында 100 млн тоннадай қоқыс үйіндісі бар. Олар қалалардан шығатын жылына 4 млн тонна коммуналдық қалдықтардан жинақталады. Шіріген қалдықтар топыраққа, суға және ауаға өтіп, экологияға нұқсан келтіреді. Осындай коммуналдық қалдықтарды ажыратып, дұрыс өңдеу ел экологиясы үшін маңызды мәселе. Сол себепті, «EcoJer» ұйымы «Eko Network» жобасымен бірлесе отырып қоғам, мемлекет тарапынан жиі айтылатын тұрмыстық қалдықтарды қайта өңдеу мәселесіне қолдау көрсетуге кірісті. Бүгін офисімізде «экобокс» деп аталатын арнайы жәшіктер қойып жатырмыз. Ол жәшіктерге офис жұмысынан қалған қоқыстар тасталады. Бірінші кезекте, әрине ең көп шығарылатын қалдық – қағаз. Екінші жәшік пластик қалдықтарын тастау үшін қойылды. Үшіншісі – металл қалдықтарына арналған. Жәшіктер толған кезде, олар қайта өңдеуге жіберіледі», – деді ол.<br /><br />\r\n\r\nСөз соңында Рүстем Қабжанов «Экобокс» пайдалану челленджін Emireld Towers бизнес орталығының әкімшілігіне жолдады.<br /><br />\r\n\r\n«Экологиялық таза орта қалыптастыру мақсатында бірқатар жоба енгізіп жатырмыз. Ғимаратымыз да жасыл түсті. Бизнес орталығының ғимаратында өте көп қағаз пайдаланылып, кейін лақтырып тасталатынын клининг қызметкерлері қоқыс жинап жүрген кезде көремін. Сол себепті аз да болса, экологиялық жобаға өз үлесімізді қосқымыз келеді. «EcoJer» ұйымы бізге челлендж табыстады. Шын ниетімізбен қабылдап, «Eko Network» компаниясының экобокстарын орнатып жатырмыз. Челленджді Kassa Nova банкіне жолдаймыз», – деді ол.<br /><br />\r\n\r\n<iframe width=\"706\" height=\"489\" src=\"https://www.youtube.com/embed/K01uAMX9uFU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ffe54bb09ec548f0b8dcc0c85d863258.jpg', 'kazakh', '2020-02-13 10:24:34', NULL, 1, '«ЭКОБОКС» ПАЙДАЛАНУ ЧЕЛЛЕНДЖІ ЖАЛҒАСУДА'),
(13, 'Қазақстанда 160-тан астам қайта өңдеу кәсіпорны бар болғанымен, олар шикізат жетіспеушілігі себебінен толыққанды жұмыс істемей тұр.<br /><br />\r\n\r\nКеңселерде экомәдениетті қалай қалыптастыруға болады. Бұл туралы экобоксты насихаттап жүрген «Eko Network» компаниясының жетекшісі Аида Бапахова айтып берді.<br /><br />\r\n\r\n«Қазақстанның бірнеше қаласын қамтитын стартап жобаға бүгінгі күні 15 600-дей қызметкері бар сексеннен астам компания қосылды. Бұл адамдар өз жұмыс орнынан шыққан қалдықтарды ажыратып, өңдеуге жіберуде. Мақсатымыз – еліміздегі компанияларға эко мәдениет енгізу. Ол үшін бірінші кезекте қалдықтарды қалай сұрыптау керектігін үйретеміз. Содан кейін, жәшіктерді орнатамыз. Компаниялар қалдықтарын қалай сұрыптап жатқандығына тұрақты түрде мониторинг жасап отырамыз. Бүгінгі күні осы компаниялар 41 тоннадан астам қағаз, 3 тоннадан астам шыны, 2,6 тоннадай пластик қалдығын қайта өңдеуге өткізді. Егер қайта өңделген шикізатты кесілген ағаш санымен есептесек, бір жылдан сәл асатын уақыт аралығында экобокс пайдаланатын кеңсе қызметкерлері 413 ағашты кесілуден сақтап қалды. Осылайша, қалдықтарды қайта өңдеу арқылы ағаштар сақталып қалуда», – деді.<br /><br />\r\n\r\nАида Бапахова кеңселерге осындай экологиялық мәдениет егізу арқылы экологияны сақтап қалуға болатынына ерекше тоқталды.<br /><br />\r\n\r\n«Статистикалық мәліметтерге көз жүгіртсек, Қазақстан 18 жыл ішінде Ресейден 42 млн доллардан астам қаражатқа қағаз қалдықтарын сатып алған. Біздің қағаз өңдеуші кәсіпорындарымыз шикізатты шетелден сатып алуларына тура келді. Өйткені біз қалдықтарды жинамаймыз. Ресми мәліметтер бойынша, бүгінгі күні Қазақстанда 160-тан астам қайта өңдеу кәсіпорыны жұмыс істеуп тұр. Олар шикізат жетіспеушілігі себебінен толыққанды жұмыс істей алмауда. Ал шикізат қоқыс полигонына түскеннен кейін қайта өңдеу қиын. Жұмысшылар құмыраны қоқыстан шығарып, жумайды. Қағаз да ластанады. Сондықтан да, бүгінгі күні экомәдениет қалыптастыру аса қажет», – деді Eko Network жетекшісі.', '45677b4719f74ad7c42135818998035b.jpg', 'kazakh', '2020-02-13 10:26:07', NULL, 1, 'ҚАЗАҚСТАН РЕСЕЙДЕН 42 МЛН ДОЛЛАРҒА ҚАҒАЗ ҚАЛДЫҒЫН САТЫП АЛҒАН'),
(14, 'Жаңа Экологиялық кодекстің қабылдануы нені өзгертеді? <br /><br />\r\n\r\nATAMEKEN BUSINESS телеарнасының «Басты тақырып» бағдарламасында EcoJer қазақстандық экологиялық аймақтық бастамалар қауымдастығы кеңесінің   төрайымы Лаззат Рамазанова қазақстандықтардың экологиялық саясаттағы өзгерістерді қалай бағалайтындығы туралы айтты.<br /><br />\r\n\r\nОның айтуынша, Экологиялық кодекс жобасында азаматтық қоғамның рөлі күшейтілген, құжат айыппұлдар жинауға емес, қоршаған орта үшін қауіптің алдын алуға бағытталған.<br /><br />\r\n\r\n«Жоба қолданыстағы кодекстен несімен ерекшеленді? Егер бұрын ірі ластағыш-кәсіпорындар қоршаған ортаның әлемдік сапа стандарттарын өз  қалаулары бойынша қолданған болса, енді оны міндетті түрде енгізетін болады. Бұл эмиссиялардың төмендеуіне әсер етеді, әр түрлі ластағыш заттар шығарылуының қомақты бөлігі солардан бөлінеді ғой»,– деді EcoJer төрайымы бағдарлама эфирінде.<br /><br />\r\n\r\nМемлекет осы талаптарды орындамағандар үшін барынша қолайсыз жағдай туғызады.<br /><br />\r\n\r\nЛаззат Рамазанованың пікірінше бұл ретте қоғамдық бақылау аса маңызды болып табылады. «Қазір кәсіпорындар қоршаған ортаға әсері бойынша өздерінің ішкі мониторингін жүргізіп отыр, өздерінің не басқалардың зертханаларында зерттеулер жүргізеді және ол ақпаратты жарияламайды. Сондықтан жобада бұл процестердің барлығына қоғамдық мониторингтің болатыны қуантады», – деп түсіндірді ол.<br /><br />\r\n\r\nБұдан басқа, стратегиялық экологиялық бағалау (СЭБ) рәсімі енгізілмек. Атап айтқанда, индустриалды кәсіпорындар құрылысы туралы шешім қабылдау немесе қандай да болмасын салалық бағдарламаны жүзеге асыру экологияға әсер тұрғысынан қаралатын болады. Қоғамшылдар құрылыс туралы идея кезінде-ақ өздерінің ойларын, яғни жаңа өндірістің өңірдің экологиялық қауіпсіздігіне қаншалықты әсер етуі мүмкін екені туралы жеткізе алады. Инвестор, өз кезегінде, экологияға келетін зиянды мүмкіндігінше азайту үшін қандай шаралар қолданатыны туралы айтуға және ол шараларды кәсіпорын жобасына енгізуге міндетті. Бұл зауыт құрылысына қатысты түрлі қарсылықтар мен халық наразылығын болдырмауға мүмкіндік береді.<br /><br />\r\n\r\nТабиғатты өңірлік деңгейде тиімді пайдалану тәсілі де өзгереді. Егер бұрын жергілікті билік экологиялық айыппұлдарды өз білгенінше жаратқан болса, енді олар экоқауіпсіздік бойынша өздерінің салалық көрсеткіштерін көрсету керек болады.<br /><br />\r\n\r\n«Бұл реформаның сәтті іске асатынына сенімдімін, өйткені Экология министрлігі бұрынғыдай уақытын әр нәрсеге жұмсамайды, барлық табиғат пайдаланушының қызметін қадағаламайды, олардың саны 1,5 млн-ға жуық, енді ол ірі кәсіпорындардың қызметін бақылауға алады. Олардың саны 3 мыңнан астам, бірақ атмосфераны ластайтын шығарылымның шамамен 80%-ы соларға тиесілі», – дейді сұхбат беруші.<br /><br />\r\n\r\nСондай-ақ экономика мен экология арасында баланс сақтау үшін әлі де көп жұмыс жасау керек. Егер кәсіпорындар барлығы бір мезетте жетілген қолжетімді техникаға (әлемдік сапа стандарттары) көшсе, бұл тарифтердің өсуіне әсер етеді, яғни тұтынушылардың қалтасына да әсер етеді. Сондықтан  Лаззат Рамазанова бұл жерде кәспорындарды экономикалық ынталандыру шаралары қажет деп есептейді.<br /><br />\r\n\r\nӘзірге жоғарыда айтылған жаңа енгізілімдер тек қағаз жүзінде ғана, іс жүзінде қалай болатынын уақыт көрсетеді. Дегенмен оның тиімді қолданылуы үшін EcoJer өз Кеңестері арқылы өңірлермен тығыз қарым-қатынас орнатпақшы. Олар мемлекет, бизнес және қоғам арасында тиімді диалог орнату арқылы экологиялық проблемаларды бірлесіп шешуді мақсат етіп отыр.<br /><br />\r\n\r\n«Кез келген өзгеріске мемлекет қана емес, азаматтық қоғам да дайын болуы керек.  Қазақстан индустриалдандыру мен экономикалық өсу мәселесін қалай да шешу керек деп емес, бірінші кезекте өз азаматтары үшін экологиялық қолайлы жағдай басты мәселе деп қарайды. Мен, экологиялық қауымдастықтың төрайымы ретінде, мұндай көзқарасқа өте қуаныштымын», – деді ол.', '327cecd8364ddb7b3b05dda49741ec16.jpg', 'kazakh', '2020-02-13 10:33:26', NULL, 1, 'ЭКОЛОГИЯЛЫҚ РЕФОРМАНЫҢ ТАБЫСТЫЛЫҒЫ АЗАМАТТЫҚ ҚОҒАМНЫҢ БЕЛСЕНДІЛІГІНЕ БАЙЛАНЫСТЫ - ECOJER');

-- --------------------------------------------------------

--
-- Структура таблицы `photogallery`
--

CREATE TABLE `photogallery` (
  `id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'english',
  `image` varchar(500) CHARACTER SET utf8 NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `photogallery`
--

INSERT INTO `photogallery` (`id`, `title`, `description`, `language`, `image`, `created_date`, `update_date`, `status`) VALUES
(3, 'PHOTOGALLERY', 'PHOTOGALLERY', 'english', 'bd37c9fc8dbe2b26f9e3027951f74d94.jpg', '2020-02-13 10:43:03', NULL, 1),
(4, 'PHOTOGALLERY 2', 'PHOTOGALLERY', 'english', '33b5877ac1da011463ad9a96872d0e4a.jpg', '2020-02-13 10:43:56', NULL, 1),
(5, 'PHOTOGALLERY 3', 'PHOTOGALLERY', 'english', '2f3968f77fd81a8ca48a441f00b66b3a.jpg', '2020-02-13 10:44:13', NULL, 1),
(6, 'PHOTOGALLERY 4', 'PHOTOGALLERY', 'english', '03eaee2c3f4135a64863578b51c6fa77.jpg', '2020-02-13 10:44:39', NULL, 1),
(7, 'PHOTOGALLERY 5', 'PHOTOGALLERY', 'english', '1a9c7a329aa23f694c6609eff763a33f.jpg', '2020-02-13 10:45:02', NULL, 1),
(8, 'PHOTOGALLERY 6', 'PHOTOGALLERY', 'english', '46f0f4b499100a552f55ad9f41168dc8.jpg', '2020-02-13 10:45:20', NULL, 1),
(9, 'PHOTOGALLERY 7', 'PHOTOGALLERY', 'english', 'ec8ac0f6ac5b50b53b347ea66901c5d8.jpg', '2020-02-13 10:45:40', NULL, 1),
(10, 'PHOTOGALLERY 8', 'PHOTOGALLERY', 'english', '526cd8f0f9c6e73b1cfbf3649a1a969d.jpg', '2020-02-13 10:45:55', NULL, 1),
(11, 'Фотогалерея', 'Фотогалерея', 'russian', 'ea40ba5cb14822ec9d8852a18bb10a8d.jpg', '2020-02-13 10:46:59', NULL, 1),
(12, 'Фотогалерея 2', 'Фотогалерея', 'russian', '758bb6e5f892b21188b5841e05cbb89f.jpg', '2020-02-13 10:47:15', NULL, 1),
(13, 'Фотогалерея 3', 'Фотогалерея', 'russian', 'a2ff07da2cd8773ab1c0159103ed914e.jpg', '2020-02-13 10:47:37', NULL, 1),
(14, 'Фотогалерея 4', 'Фотогалерея', 'russian', '40c82d2fa10a88636ef89834aad4d30a.jpg', '2020-02-13 10:48:19', NULL, 1),
(15, 'Фотогалерея 5', 'Фотогалерея', 'russian', '24d76d78865f437843ad71285cba5100.jpg', '2020-02-13 10:53:01', NULL, 1),
(16, 'Фотогалерея 6', 'Фотогалерея', 'russian', 'fc0f9d21d7a4ae53e169ae371b4cb08c.jpg', '2020-02-13 10:53:22', NULL, 1),
(17, 'Фотогалерея 7', 'Фотогалерея', 'russian', '2ebd7525b8d4debd0e96568a901c2f32.jpg', '2020-02-13 10:53:41', NULL, 1),
(19, 'Фотогалерея 8', 'Фотогалерея', 'russian', '35b92e7699ab4006e73c930c94e0541a.jpg', '2020-02-13 10:58:19', NULL, 1),
(20, 'Фотосуреттер', 'Фотосуреттер', 'kazakh', '76ed9c5c51f54d38826105a7e1911af8.jpg', '2020-02-13 10:59:24', NULL, 1),
(21, 'Фотосуреттер 2', 'Фотосуреттер', 'kazakh', '9c63fa6085659a6b751c2c17618f2527.jpg', '2020-02-13 10:59:39', NULL, 1),
(22, 'Фотосуреттер 3', 'Фотосуреттер', 'kazakh', '33ee93fa38fd5d25dc7f296c1cfd5b35.jpg', '2020-02-13 10:59:56', NULL, 1),
(23, 'Фотосуреттер 4', 'Фотосуреттер', 'kazakh', '9b69260c389ea856d4af18af6b1f72b2.jpg', '2020-02-13 11:00:21', NULL, 1),
(24, 'Фотосуреттер 5', 'Фотосуреттер', 'kazakh', 'b0e9bee52564b0105a5db60b3c874f74.jpg', '2020-02-13 11:00:47', NULL, 1),
(25, 'Фотосуреттер 6', 'Фотосуреттер', 'kazakh', '507794b624e54a059a7941ee2f70d1e8.jpg', '2020-02-13 11:01:08', NULL, 1),
(26, 'Фотосуреттер 7', 'Фотосуреттер', 'kazakh', 'c632394dfdd6eb98df3b501fe79a42c2.jpg', '2020-02-13 11:01:25', NULL, 1),
(27, 'Фотосуреттер 8', 'Фотосуреттер', 'kazakh', '5dd7da311b473c4544a6b9980fc50148.jpg', '2020-02-13 11:01:43', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `language` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'english',
  `image` varchar(500) CHARACTER SET utf8 NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `language`, `image`, `created_date`, `update_date`, `status`) VALUES
(1, 'ЭКО-КЕҢСЕ', '\"EcoJer\" қауымдастығы қоқысты бөлек жинау мәдениетін қалыптастыруды ұсынып отыр', 'kazakh', '0c23900659c41d1b5cbb6d5ff255c3ca.png', '2020-02-12 17:54:56', NULL, 1),
(3, 'ECO-OFFICE', 'The EcoJer Association proposes to actively develop the sorting waste culture', 'english', 'db53ed6861acb0cc29328894fe660ad4.jpg', '2020-02-14 04:10:05', NULL, 1),
(4, 'ЭКО-ОФИС', 'Ассоциация «EcoJer» предлагает активно развивать культуру раздельного сбора мусора', 'russian', 'cdff2017dc0e18aa8319827aa5308062.jpg', '2020-02-14 04:19:23', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'admin', 'Administrator', 0, '2018-07-05 08:48:35', NULL, NULL),
(2, 'webadmin', 'Web Admin', 0, '2018-07-05 08:49:29', NULL, NULL),
(3, 'user', 'Normal User', 0, '2018-07-05 08:48:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role_id` int(11) DEFAULT '2',
  `image` varchar(500) NOT NULL DEFAULT 'Noimage.png',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `update_date` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `image`, `first_name`, `last_name`, `email`, `password`, `created_by`, `created_date`, `updated_by`, `update_date`, `status`) VALUES
(1, 1, 'Noimage.png', 'admin', '.', 'admin@admin.com', '$2y$10$YEw4GQmOdw9DIqaw5xq2g.gkgj7sdPHT6tfjMWqN.qLMvDiW4/IKO', 1, '2018-07-05 06:03:39', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `videogallery`
--

CREATE TABLE `videogallery` (
  `id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `language` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'english',
  `image` varchar(500) CHARACTER SET utf8 NOT NULL,
  `video` varchar(500) CHARACTER SET utf8 NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
