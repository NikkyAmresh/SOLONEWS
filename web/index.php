<!DOCTYPE html>
<html>

   <head>
       <title>SOLONEWS</title>
<meta name="theme-color" content="#37474F"> <meta name="description" content="Real-time news across 100+ countries, Search your favourite news with keywords ">

  <meta name="keywords" content="News, Real Time ">

  <meta name="author" content="Nikky Amresh ">
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script>console.log=function(){}
        console.error=function(){}
        console.warn=function(){}
        </script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
 </head>
    <body>
        
    <div class="text-center">
    <h2 class="header"><u>SOLO<span>NEWS</span></u></h2>
  <p>Real-time news app for sololearns</p> 
</div>
<div class="container">
<input class="form-control search" placeholder="Search news with Keywords.." id="search" type="search"> <button id="sbt" type="button" class="btn btn-success">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
</div>
  <div class="container" id="list">

</div>
<div class="container">
<label for="country">Please select your country</label>
   <select id="country" class="form-control" >
    <option value='ar'>Argentina</option>    
    <option value='au'>Australia</option>
    <option value='at'>Austria</option>
    <option value='be'>Belgium</option>
    <option value='br'>Brazil</option>
    <option value='bg'>Bulgaria</option>
    <option value='ca'>Canada</option>
    <option value='cn'>China</option>        
    <option value='co'>Colombia</option>        
    <option value='cu'>Cuba</option>        
    <option value='cz'>Czech Republic</option>        
    <option value='eg'>Egypt</option>       
    <option value='fr'>France</option>        
    <option value='de'>Germany</option>        
    <option value='gr'>Greece</option>        
    <option value='hk'>Hong Kong</option>
    <option value='hu'>Hungary</option>        
    <option value='in'>India</option>        
    <option value='id'>Indonesia</option>       
    <option value='ie'>Ireland</option>        
    <option value='il'>Israel</option>        
    <option value='it'>Italy</option>        
    <option value='jp'>Japan</option>        
    <option value='lv'>Latvia</option>        
    <option value='lt'>Lithuania</option>        
    <option value='my'>Malaysia</option>        
    <option value='mx'>Mexico</option>        
    <option value='ma'>Morocco</option>        
    <option value='nl'>Netherlands</option>        
    <option value='nz'>New Zealand</option>        
    <option value='ng'>Nigeria</option>        
    <option value='no'>Norway</option>        
    <option value='ph'>Philippines</option>        
    <option value='pl'>Poland</option>        
    <option value='pt'>Portugal</option>        
    <option value='ro'>Romania</option>        
    <option value='ru'>Russia</option>        
    <option value='sa'>Saudi Arabia</option>        
    <option value='rs'>Serbia</option>        
    <option value='sg'>Singapore</option>        
    <option value='sk'>Slovakia</option>        
    <option value='si'>Slovenia</option>        
    <option value='za'>South Africa</option>        
    <option value='kr'>South Korea</option>        
    <option value='se'>Sweden</option>        
    <option value='ch'>Switzerland</option>        
    <option value='tw'>Taiwan</option>        
    <option value='th'>Thailand</option>        
    <option value='tr'>Turkey</option>        
    <option value='ae'>UAE</option>        
    <option value='ua'>Ukraine</option>        
    <option value='gb'>United Kingdom</option>        
    <option value='us' selected>United States</option>        
    <option value='ve'>Venuzuela</option>
    </select>
        
    <label class="control-label" for="cat">Please choose a category</label>
        <select id="cat" class="form-control">
            <option selected value="">All</option>
            <option value="business">Business</option>
            <option value="entertainment">Entertainment</option>
            <option value="health">Health</option>
            <option value="science">Science</option>
            <option value="sports">Sports</option>
            <option value="technology">Technology</option>
        </select> <label class="control-label" for="sources">Please choose a Publisher</label>
<select id="sources" class="form-control">
<option value="">All</option>
<option value='abc-news'>ABC News</option>
<option value='abc-news-au'>ABC News (AU)</option>
<option value='aftenposten'>Aftenposten</option>
<option value='al-jazeera-english'>Al Jazeera English</option>
<option value='ansa'>ANSA.it</option>
<option value='argaam'>Argaam</option>
<option value='ars-technica'>Ars Technica</option>
<option value='ary-news'>Ary News</option>
<option value='associated-press'>Associated Press</option>
<option value='australian-financial-review'>Australian Financial Review</option>
<option value='axios'>Axios</option>
<option value='bbc-news'>BBC News</option>
<option value='bbc-sport'>BBC Sport</option>
<option value='bild'>Bild</option>
<option value='blasting-news-br'>Blasting News (BR)</option>
<option value='bleacher-report'>Bleacher Report</option>
<option value='bloomberg'>Bloomberg</option>
<option value='breitbart-news'>Breitbart News</option>
<option value='business-insider'>Business Insider</option>
<option value='business-insider-uk'>Business Insider (UK)</option>
<option value='buzzfeed'>Buzzfeed</option>
<option value='cbc-news'>CBC News</option>
<option value='cbs-news'>CBS News</option>
<option value='cnbc'>CNBC</option>
<option value='cnn'>CNN</option>
<option value='cnn-es'>CNN Spanish</option>
<option value='crypto-coins-news'>Crypto Coins News</option>
<option value='daily-mail'>Daily Mail</option>
<option value='der-tagesspiegel'>Der Tagesspiegel</option>
<option value='die-zeit'>Die Zeit</option>
<option value='el-mundo'>El Mundo</option>
<option value='engadget'>Engadget</option>
<option value='entertainment-weekly'>Entertainment Weekly</option>
<option value='espn'>ESPN</option>
<option value='espn-cric-info'>ESPN Cric Info</option><option value='financial-post'>Financial Post</option>
<option value='financial-times'>Financial Times</option>
<option value='focus'>Focus</option>
<option value='football-italia'>Football Italia</option>
<option value='fortune'>Fortune</option>
<option value='four-four-two'>FourFourTwo</option>
<option value='fox-news'>Fox News</option>
<option value='fox-sports'>Fox Sports</option>
<option value='globo'>Globo</option>
<option value='google-news'>Google News</option>
<option value='google-news-ar'>Google News (Argentina)</option>
<option value='google-news-au'>Google News (Australia)</option>
<option value='google-news-br'>Google News (Brasil)</option>
<option value='google-news-ca'>Google News (Canada)</option>
<option value='google-news-fr'>Google News (France)</option>
<option value='google-news-in'>Google News (India)</option>
<option value='google-news-is'>Google News (Israel)</option>
<option value='google-news-it'>Google News (Italy)</option>
<option value='google-news-ru'>Google News (Russia)</option>
<option value='google-news-sa'>Google News (Saudi Arabia)</option>
<option value='google-news-uk'>Google News (UK)</option>
<option value='goteborgs-posten'>Göteborgs-Posten</option>
<option value='gruenderszene'>Gruenderszene</option>
<option value='hacker-news'>Hacker News</option>
<option value='handelsblatt'>Handelsblatt</option>
<option value='ign'>IGN</option>
<option value='il-sole-24-ore'>Il Sole 24 Ore</option>
<option value='independent'>Independent</option>
<option value='infobae'>Infobae</option>
<option value='info-money'>InfoMoney</option>
<option value='la-gaceta'>La Gaceta</option>
<option value='la-nacion'>La Nacion</option>
<option value='la-repubblica'>La Repubblica</option>
<option value='le-monde'>Le Monde</option>
<option value='lenta'>Lenta</option>
<option value='lequipe'>L'equipe</option>
<option value='les-echos'>Les Echos</option>
<option value='liberation'>Libération</option>
<option value='marca'>Marca</option>
<option value='mashable'>Mashable</option>
<option value='metro'>Metro</option>
<option value='mirror'>Mirror</option>
<option value='msnbc'>MSNBC</option>
<option value='mtv-news'>MTV News</option>
<option value='mtv-news-uk'>MTV News (UK)</option>
<option value='national-geographic'>National Geographic</option>
<option value='national-review'>National Review</option>
<option value='nbc-news'>NBC News</option>
<option value='news24'>News24</option>
<option value='new-scientist'>New Scientist</option>
<option value='news-com-au'>News.com.au</option>
<option value='newsweek'>Newsweek</option>
<option value='new-york-magazine'>New York Magazine</option>
<option value='next-big-future'>Next Big Future</option>
<option value='nfl-news'>NFL News</option>
<option value='nhl-news'>NHL News</option>
<option value='nrk'>NRK</option>
<option value='politico'>Politico</option>
<option value='polygon'>Polygon</option>
<option value='rbc'>RBC</option>
<option value='recode'>Recode</option>
<option value='reddit-r-all'>Reddit /r/all</option>
<option value='reuters'>Reuters</option>
<option value='rt'>RT</option>
<option value='rte'>RTE</option>
<option value='rtl-nieuws'>RTL Nieuws</option>
<option value='sabq'>SABQ</option>
<option value='spiegel-online'>Spiegel Online</option>
<option value='svenska-dagbladet'>Svenska Dagbladet</option>
<option value='t3n'>T3n</option>
<option value='talksport'>TalkSport</option>
<option selected value='techcrunch'>TechCrunch</option>
<option value='techcrunch-cn'>TechCrunch (CN)</option>
<option value='techradar'>TechRadar</option>
<option value='the-american-conservative'>The American Conservative</option>
<option value='the-economist'>The Economist</option>
<option value='the-globe-and-mail'>The Globe And Mail</option>
<option value='the-guardian-au'>The Guardian (AU)</option>
<option value='the-guardian-uk'>The Guardian (UK)</option>
<option value='the-hill'>The Hill</option>
<option value='the-hindu'>The Hindu</option>
<option value='the-huffington-post'>The Huffington Post</option>
<option value='the-irish-times'>The Irish Times</option>
<option value='the-jerusalem-post'>The Jerusalem Post</option>
<option value='the-lad-bible'>The Lad Bible</option>
<option value='the-new-york-times'>The New York Times</option>
<option value='the-next-web'>The Next Web</option>
<option value='the-sport-bible'>The Sport Bible</option>
<option value='the-telegraph'>The Telegraph</option>
<option value='the-times-of-india'>The Times of India</option>
<option value='the-verge'>The Verge</option>
<option value='the-wall-street-journal'>The Wall Street Journal</option>
<option value='the-washington-post'>The Washington Post</option>
<option value='the-washington-times'>The Washington Times</option>
<option value='time'>Time</option>
<option value='usa-today'>USA Today</option>
<option value='vice-news'>Vice News</option>
<option value='wired'>Wired</option>
<option value='wired-de'>Wired.de</option>
<option value='xinhua-net'>Xinhua Net</option>
<option value='ynet'>Ynet</option></select>
        <br>Visitor number : <img  src='http://online-visit-counter.com/cg.php?t=MTQzNDA0OQ==' border='0' alt='page visit count'>
    <br>
   <small>Copyright &copy; Nikky Amresh </small>
   <small> (Powered by newsapi.org)</small>
   
    <div id="s">India/Test</div>
  </div>
  <div class="container" id="popup"> <h3 id="ittl">Your news is loading....</h3> <span onclick="$(this).parent().toggle(300)">CLOSE ❌</span>
      <iframe class="thmb" id="iframe"></iframe>
  </div>
    </body>
</html>
