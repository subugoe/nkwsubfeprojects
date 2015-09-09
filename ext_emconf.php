<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nkwsubfeprojects".
 *
 * Auto generated 12-12-2012 16:26
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'SUB Projects',
    'description' => 'Datstellung der Projekte der SUB Goettingen',
    'category' => 'plugin',
    'author' => 'Ingo Pfennigstorf, Nils Windisch',
    'author_email' => 'www@sub.uni-goettingen.de',
    'shy' => '',
    'dependencies' => 'extbase,fluid',
    'conflicts' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => 1,
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'author_company' => 'Goettingen State and University Library, Germany http://www.sub.uni-goettingen.de',
    'version' => '2.5.0',
    'constraints' => [
        'depends' => [
            'extbase' => '',
            'fluid' => '',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    '_md5_values_when_last_written' => 'a:62:{s:9:"build.xml";s:4:"ffec";s:9:"config.rb";s:4:"4ebc";s:12:"ext_icon.gif";s:4:"c8ca";s:17:"ext_localconf.php";s:4:"2118";s:14:"ext_tables.php";s:4:"3197";s:14:"ext_tables.sql";s:4:"b15b";s:44:"Classes/Controller/InstitutionController.php";s:4:"cbbe";s:41:"Classes/Controller/KeywordsController.php";s:4:"9dfd";s:40:"Classes/Controller/ProjectController.php";s:4:"d742";s:30:"Classes/Domain/Model/Group.php";s:4:"041c";s:36:"Classes/Domain/Model/Institution.php";s:4:"4f9f";s:33:"Classes/Domain/Model/Keywords.php";s:4:"699b";s:31:"Classes/Domain/Model/Person.php";s:4:"d696";s:32:"Classes/Domain/Model/Project.php";s:4:"f832";s:45:"Classes/Domain/Repository/GroupRepository.php";s:4:"208a";s:51:"Classes/Domain/Repository/InstitutionRepository.php";s:4:"8754";s:48:"Classes/Domain/Repository/KeywordsRepository.php";s:4:"c4ff";s:46:"Classes/Domain/Repository/PersonRepository.php";s:4:"05b2";s:47:"Classes/Domain/Repository/ProjectRepository.php";s:4:"010b";s:56:"Classes/ViewHelpers/Widget/SimilarKeywordsViewHelper.php";s:4:"0818";s:67:"Classes/ViewHelpers/Widget/Controller/SimilarKeywordsController.php";s:4:"f894";s:39:"Configuration/FlexForms/ProjectList.xml";s:4:"4ef2";s:33:"Configuration/TCA/Institution.php";s:4:"156e";s:30:"Configuration/TCA/Keywords.php";s:4:"4a54";s:29:"Configuration/TCA/Project.php";s:4:"7325";s:34:"Configuration/TypoScript/setup.txt";s:4:"544d";s:31:"Documentation/Manual/Manual.pdf";s:4:"d90d";s:31:"Documentation/Manual/Manual.rst";s:4:"3f01";s:32:"Documentation/Manual/Img/pi1.png";s:4:"6c9e";s:32:"Documentation/Manual/Img/pi2.png";s:4:"2af3";s:40:"Resources/Private/Language/locallang.xml";s:4:"6ed9";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"a8af";s:35:"Resources/Private/Layouts/Main.html";s:4:"4ab6";s:37:"Resources/Private/Partials/Group.html";s:4:"f297";s:43:"Resources/Private/Partials/Institution.html";s:4:"fdab";s:46:"Resources/Private/Partials/KeywordSidebar.html";s:4:"14f3";s:38:"Resources/Private/Partials/Person.html";s:4:"4689";s:43:"Resources/Private/Partials/ProjectLink.html";s:4:"76e7";s:46:"Resources/Private/Partials/ProjectSidebar.html";s:4:"2b6b";s:44:"Resources/Private/Sass/nkwsubfeprojects.scss";s:4:"f3f4";s:43:"Resources/Private/Scripts/CommaListToMM.php";s:4:"3caf";s:48:"Resources/Private/Scripts/GroupCommaListToMM.php";s:4:"5981";s:43:"Resources/Private/Scripts/Keywordlister.php";s:4:"0421";s:47:"Resources/Private/Scripts/LocalizationFixer.php";s:4:"59a1";s:49:"Resources/Private/Scripts/PersonCommaListToMM.php";s:4:"911e";s:38:"Resources/Private/Scripts/ToInnoDb.php";s:4:"9655";s:51:"Resources/Private/Scripts/UpdateRelationCounter.php";s:4:"c3d5";s:51:"Resources/Private/Templates/Institution/Detail.html";s:4:"7255";s:49:"Resources/Private/Templates/Institution/List.html";s:4:"6d73";s:48:"Resources/Private/Templates/Keywords/Detail.html";s:4:"5ac3";s:46:"Resources/Private/Templates/Keywords/List.html";s:4:"f990";s:47:"Resources/Private/Templates/Project/Detail.html";s:4:"5b8a";s:57:"Resources/Private/Templates/Project/DetailEinspaltig.html";s:4:"d61b";s:45:"Resources/Private/Templates/Project/List.html";s:4:"7cc5";s:73:"Resources/Private/Templates/ViewHelpers/Widget/SimilarKeywords/Index.html";s:4:"3d42";s:41:"Resources/Public/Css/nkwsubfeprojects.css";s:4:"1d3f";s:74:"Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_institution.gif";s:4:"475a";s:71:"Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_keywords.gif";s:4:"475a";s:70:"Resources/Public/Img/icon_tx_nkwsubfeprojects_domain_model_project.gif";s:4:"475a";s:39:"Resources/Public/Js/nkwsubfeprojects.js";s:4:"0f40";s:15:"build/phpcs.xml";s:4:"ab01";s:15:"build/phpmd.xml";s:4:"ab48";}',
    'suggests' => [],
];

?>
