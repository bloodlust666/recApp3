@extends('layouts.candidat')

@section('content')

<!--_________________Formulaire recruteur ___________________-->
<div class="content ">
   <div class="row ">

   <div class="col s12 m4 l8">
    <!--_________________Form and method store___________________--> 
<form action="{{url ('cvs')}}" method="post" >
{!! Form::open(array('url' => 'foo/bar')) !!}
       {{ csrf_field() }}

       @if (count($errors) >0)
        @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
      @endif


 <label>Profil :</label>

<div class="row">

    <div class="input-field col s6">
    <select  name="Situation_actuelle">
      <option value="" disabled selected>Situation actuelle</option>
      <option value="1">Etudiant</option>
      <option value="2">Diplomé a la recherche d'emploi</option>
      <option value="3">En poste</option>
    </select>
   
</div>
 <div class="input-field col s6">
<select name="Secteur_activité">

 <option value="" disabled selected>Secteur d'activité</option>
           <option value="1">Aéronautique / Spatial</option>
           <option value="2">Agence pub / Marketing Direct</option>
           <option value="3">Agriculture / Environnement </option>
           <option value="4">Agroalimentaire</option>
           <option value="5">Ameublement / Décoration</option>
           <option value="6">Assurance / Courtage</option>
           <option value="7">Audiovisuel</option>
           <option value="8">Automobile / Motos / Cycles</option>
           <option value="9">Logistique</option>
           <option value="10">Gouvernement</option>
           <option value="11">Banque / Finance</option>
           <option value="12">BTP / Génie Civil</option>
           <option value="13">Call Center / Web Center</option>
           <option value="14">Chimie / Parachimie / Peintures</option>
           <option value="15">Communication / Evénementiel</option>
           <option value="16">Comptabilité / Audit</option><option value="17">Conseil / Etudes</option><option value="18">Cosmétique / Parfumerie / Luxe</option><option value="19">Distribution</option><option value="20">Edition / Imprimerie</option><option value="21">Education / Formation</option><option value="22">Electro-mécanique / Mécanique</option><option value="23">Electronique</option><option value="24">Energie</option><option value="25">Extraction / Mines</option><option value="26">Ferroviaire</option><option value="27">Hôtellerie / Restauration</option><option value="28">Immobilier / Promoteur / Agence</option><option value="29">Import / Export / Négoce</option><option value="30">Informatique</option><option value="31">Internet / Multimédia</option><option value="32">Juridique / Cabinet d’avocats</option><option value="33">Location véhicules</option><option value="34">Matériel Médical / Parapharmacie</option><option value="35">Métallurgie / Sidérurgie</option><option value="36">Nettoyage / Sécurité / Gardiennage</option><option value="37">Offshoring / Nearshoring</option><option value="38">Papier / Carton</option><option value="39">Pétrole / Gaz</option><option value="40">Pharmacie / Santé</option><option value="41">Plasturgie</option><option value="42">Presse</option><option value="43">Recrutement / RH / Intérim</option><option value="44">Service public / Administration</option><option value="45">Telecom</option><option value="46">Textile / Cuir</option><option value="47">Tourisme / Voyage / Loisirs </option><option value="48">Transport / Messagerie / Logistique</option><option value="49">Autres Industries</option><option value="50">Autres services</option>
</select>     
      </div>
    </div> 







<div class="row">

    <div class="input-field col s6">
    <select name="Salaire_souhaité">
      <option value="" disabled selected>Salaire souhaité</option>
    <option value="1">Moins de 3000</option>
    <option value="2">3000 - 4000</option>
    <option value="3">4000 - 6000</option>
    <option value="4">6000 - 8000</option>
    <option value="5">8000 - 10000</option>
    <option value="6">10000 - 15000</option>
    <option value="7">15000 - 20000</option>
    <option value="8">+ de 20000 dhs</option>

    </select>

</div>
 <div class="input-field col s6">
<select  name="Niveau_de_formation">
      <option value="" disabled selected>Niveau de formation</option>
       <option value="1">Bac</option><option value="4">Bac+2</option>
       <option value="2">Bac+3</option>
       <option value="3">Bac+4</option>
       <option value="4">Bac+5</option>
       <option value="5">Bac+6 et plus</option>
       <option value="6">Autres</option>
      </select>
 
  </div>

    </div> 




<div class="row">

    <div class="input-field col s6">
   <select name="Disponibilité">
      <option value="" disabled selected>Disponibilité</option>
  
            <option value="1" >Immédiate</option>
            <option value="2" >Dans un mois</option>
            <option value="3" >Plus d'un mois</option>  
    </select>

</div>
 <div class="input-field col s6">
<select name="Expérience">   
   <option value="" disabled selected>Expérience</option>
     <option value="1">Moins de 3 ans</option>
     <option value="2">De 3 à 5 ans</option>
     <option value="3">De 5 à 10 ans</option>
     <option value="4">Plus de 10 ans</option>
     <option value="5">Autres</option>

      </select>
 
  </div>

    </div> 

 <label>Formation :</label>




 <div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker" name="Date_deb_Formation">
           <label for="Date_deb_Formation">Date Debut Formation</label>
        </div>
    
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker" name="Date_fin_Formation">
           <label for="Date_fin_Formation">Date Fin Formation</label>
        </div>
     



<div class="row">

    <div class="input-field col s6">
    <select  name="Etablissement">
      <option value="" disabled selected>Etablissement</option>
      <option value='1' >Université SIDI MOHAMMED BEN ABDELLAH, FES</option>
      <option value='9' >EAD, École d’Administration et Direction des affaires</option>
      <option value='61' >ESITH, École Supérieure des Industries du Textile et de l’Habillement</option>
      <option value='105' >ISFORT, Institut Supérieur de Formation en Technologie Alimentaire</option>
      <option value='106' >ISFOTEG, Institut Supérieur de Formation aux Techniques de Gestion</option>
      <option value='128' >SUPEMIR, École Supérieure des Multimédia, Informatique et Réseaux</option>
      <option value='200' >EMI, École Mohammadia des Ingénieurs</option>
      <option value='201' >EMSI, École Marocaine des Sciences de l&#39;Ingénieur</option>
      <option value='202' >ENA, École Nationale d&#39;Administration</option>
      <option value='203' >ENAC, Ecole Nationale de l&#39;Aviation Civile</option>
      <option value='205' >ENAC, Ecole Nationale de l&#39;Aviation Civile</option>
      <option value='206' >ENAM, École Nationale d&#39;Agriculture de Meknès</option>
      <option value='209' >ENCG Agadir, École Nationale de Commerce et de Gestion de Agadir</option>
      <option value='210' >ENCG d&#39;El Jedida, École Nationale de Commerce et de Gestion d&#39;El Jedida</option>
      <option value='211' >ENCG Kénitra, École Nationale de Commerce et de Gestion de Kénitra</option>
      <option value='214' >ENCG Marrakech, École Nationale de Commerce et de Gestion de Marrakech</option>
      <option value='217' >ENCG Settat, École Nationale de Commerce et de Gestion de Settat</option>
      <option value='218' >ENCGT, École Nationale de Commerce et de Gestion de Tanger</option>
      <option value='221' >ENFI, École Nationale Forestière des Ingénieurs</option>
      <option value='222' >ENIM, École Nationale de l&#39;Industrie Minérale</option>
      <option value='225' >ENS, Ecole normale supérieure</option>
      <option value='226' >ENSA Agadir, École Nationale des Sciences Appliquées d&#39;Agadir</option>
      <option value='229' >ENSA Fès, École Nationale des Sciences Appliquées de Fès</option>
      <option value='230' >ENSA Marrakech, École Nationale des Sciences Appliquées de Marrakech</option>
      <option value='231' >ENSA/ENSAO, École Nationale des Sciences Appliquées d&#39;Oujda</option>
      <option value='234' >ENSAM , École Nationale Supérieure des Arts et Métiers de Meknès</option>
      <option value='235' >ENSAS, École Nationale des Sciences Appliquées de Safi</option>
      <option value='238' >ENSAT, École Nationale des Sciences Appliquées de Tanger</option>
      <option value='239' >ENSEM , École Nationale Supérieure d&#39;Électricité et de Mécanique</option>
      <option value='242' >ENSIAS, École Nationale Supérieure d&#39;Informatique et d&#39;Analyse de Systèmes</option>
      <option value='243' >ERA, École Royale de l&#39;Air</option><option value='246' >ERN, École Royale Navale</option>
      <option value='247' >EST-Fès, École Supérieure de Technologie de Fès</option>
      <option value='248' >EST-Salé, École Supérieure de Technologie de Salé</option>
      <option value='250' >EST-Salé, École Supérieure de Technologie de Salé</option>
      <option value='251' >ESTA, École Supérieure de Technologie d&#39;Agadir</option>
      <option value='253' >ESTM, École Supérieure de Technologie de Meknès</option>
      <option value='254' >ESTC, École Supérieure de Technologie de Casablanca</option>
      <option value='255' >ESTM, École Supérieure de Technologie de Meknès</option>
      <option value='257' >ESTS, École Supérieure de Technologie de Safi</option>
      <option value='258' >ESTO, École Supérieure de Technologie d&#39;Oudja</option>
      <option value='259' >ESTS, École Supérieure de Technologie de Safi</option>
      <option value='260' >IAV, Institut Agronomique et Vétérinaire Hassan II</option>
      <option value='261' >IGA, Institut Supérieur du Génie Appliqué</option>
      <option value='264' >IAV, Institut Agronomique et Vétérinaire Hassan II</option>
      <option value='265' >IGA, Institut Supérieur du Génie Appliqué</option>
      <option value='266' >IIHEM, International Institute for Higher Education in Morocco</option>
      <option value='268' >IIHEM, International Institute for Higher Education in Morocco</option>
      <option value='269' >INPT, Institut National des Postes et Télécommunications</option>
      <option value='270' >ISCAE, Institut Supérieur de Commerce et d&#39;Administration des Entreprises</option>
      <option value='271' >Université ABDELMALEK SAADI</option><option value='272' >Université AL AKHAWAYN</option>
      <option value='273' >Université CHOUAIB DOUKKALI-EL JADIDA</option>
      <option value='274' >Université EL CADI AYAD</option>
      <option value='275' >Université HASSAN 1er, SETTAT</option><option value='276' >Université HASSAN II, AIN CHOCK-CASABLANCA</option>
      <option value='277' >Université HASSAN II à MOHAMMEDIA</option><option value='278' >Université MOHAMMED 1er OUJDA</option>
      <option value='279' >Université MOHAMMED V, AGDAL</option><option value='280' >Université MOHAMMED V, Souissi</option>
      <option value='281' >Université MOULAY ISMAIL</option><option value='286' >Autre</option>
    </select>
   
</div>
 <div class="input-field col s6">
<select  name="Diplome">

      <option value="" disabled selected>Diplome</option>
      <option value="4">Actuariat et prévoyance</option>
      <option value="5">Actuariat</option>
      <option value="6">Administration des affaires</option>
      <option value="7">Administration des entreprises</option>
      <option value="8">Affaires internationales </option>
      <option value="9">Analyse et gestion qualité </option>
      <option value="10">Analyses chimiques et qualité</option>
      <option value="11">Analyses physico-chimiques et environnement </option>
      <option value="12">Analytique et contrôle de qualité</option>
      <option value="13">Assistanat</option>
      <option value="14">Assurance qualité et contrôle analytique</option>
      <option value="15">Audit contrôle de gestion comptabilité</option>
      <option value="16">audit et contrôle de gestion </option>
      <option value="17">audit et expertise comptable </option>
      <option value="18">audit et ingénierie financière </option>
      <option value="19">Audit et ingénierie financière monnaie, finance, banque</option>
      <option value="20">Audit, contrôle de gestion et système d’information</option>
      <option value="21">automatisme et informatique industrielle</option>
      <option value="22">Banque et finance européennes</option>
      <option value="23">Banque et marches financiers </option>
      <option value="24">Bâtiment</option>
      <option value="25">Bâtiment</option>
      <option value="26">Bâtiments ponts et chaussées,</option>
      <option value="27">Biochimie</option>
      <option value="28">Biotechnologie  et démarche qualité</option>
      <option value="29">Business intelligent</option>
      <option value="30">Chantier en bâtiment et travaux public </option>
      <option value="31">Chef de chantier travaux publics</option>
      <option value="32">Chimie analytique et démarche qualité</option>
      <option value="33">Chimie analytique </option>
      <option value="34">Chimie fondamentale et appliquée</option>
      <option value="35">Chimie industrielle et génie des procédées</option>
      <option value="36">Chimie industrielle </option>
      <option value="37">Chimie organique industrielle </option>
      <option value="38">Chimie organique</option>
      <option value="39">Chimie- physique appliquée et environnement</option>
      <option value="40">Chimie </option>
      <option value="41">Commerce</option>
      <option value="42">Commerce et gestion</option>
      <option value="43">Commerce international et logistique</option>
      <option value="44">Commerce international </option>
      <option value="45">Commerce  international</option>
      <option value="46">Comptabilité contrôle de gestion, audit </option>
      <option value="47">Comptabilité et contrôle de gestion</option>
      <option value="48">Comptabilité </option>
      <option value="49">Conception et production intégrées </option>
      <option value="50">Conception mécanique et innovation </option>
      <option value="51">Conducteur de travaux bâtiment et tp</option>
      <option value="52">Conducteur des travaux publics</option>
      <option value="53">Conduite de projet </option>
      <option value="54">Conduite de projets de btp</option>
      <option value="55">Contrôle de gestion et finance </option>
      <option value="56">Contrôle de gestion et si</option>
      <option value="57">Contrôle de gestion</option>
      <option value="58">Contrôle de la qualité des produits agro-alimentaire </option>
      <option value="59">Contrôle non destructif</option>
      <option value="60">Contrôle, qualité et maintenance </option>
      <option value="61">Création et gestion des entreprises innovantes</option>
      <option value="62">Direction des entités et divisions financières</option>
      <option value="63">Economie et finance internationales</option>
      <option value="64">Electricité de maintenance industrielle </option>
      <option value="65">Electromécanique et systèmes automatises </option>
      <option value="66">Electromécanique et maintenance industrielle</option>
      <option value="67">Electromécanique </option><option value="68">Electromécanique </option>
      <option value="69">Electrotechnique et électronique de puissance</option>
      <option value="70">Electrotechnique </option>
      <option value="71">Energie renouvelable </option>
      <option value="72">entrepreneuriat et développement international </option>
      <option value="73">entrepreneuriat et stratégie des pme</option>
      <option value="74">Etatique analyse et gestion-qualité</option>
      <option value="75">Exploitation en transport et logistique </option>
      <option value="76">Finance – audit – contrôle</option>
      <option value="77">Finance appliquée ingénierie financière </option>
      <option value="78">Finance audit et contrôle de gestion </option>
      <option value="79">Finance banque et marches</option>
      <option value="80">Finance d’entreprise</option>
      <option value="81">Finance de marche et management des risques</option>
      <option value="82">Finance d'entreprise </option>
      <option value="83">Finance des marches et de l’entreprise </option>
      <option value="84">Finance et comptabilité </option>
      <option value="85">Finance et économétrie appliquée</option>
      <option value="86">Finance et économie appliquée</option>
      <option value="87">Finance et gestion comptable</option>
      <option value="88">Finance et management des institutions financières</option>
      <option value="89">Finance et management des organisations économiques</option>
      <option value="90">Finance et système d’information</option>
      <option value="91">Finance quantitative </option>
      <option value="92">Finance </option>
      <option value="93">Finance, audit et contrôle de gestion</option>
      <option value="94">Finance, banque et assurance</option>
      <option value="95">Finance</option>
      <option value="96">Finance-audit-contrôle de gestion </option>
      <option value="97">Finances de marche et management des risques</option>
      <option value="98">Génie chimique,</option>
      <option value="99">Génie civil</option>
      <option value="100">Génie civil et assainissement</option>
      <option value="101">Génie civil et bâtiment</option>
        <option value="102">Génie civil et environnement</option>
       <option value="103">Génie civil et ingénierie de construction</option>
        <option value="104">Génie civil et construction</option>
        <option value="105">Génie civil et urbain,</option>
        <option value="106">Génie civil tmbtp</option>
        <option value="107">Génie de l'hydraulique </option>
        <option value="108">Génie des matériaux et qualité</option>
        <option value="109">Génie des procèdes et maitrise de la qualité</option>
        <option value="110">Génie des procédés</option>
        <option value="111">Génie des systèmes électriques </option>
        <option value="112">Génie électrique et maintenance</option>
        <option value="113">Génie électromécanique  et maintenance industrielle </option>
        <option value="114">Génie électromécanique </option>
        <option value="115">Génie géo-ingénierie,</option>
        <option value="116">Génie industriel et maintenance électromécanique  maintenance industrielle</option>
        <option value="117">Génie industriel </option>
        <option value="118">Génie logistique</option>
        <option value="119">Génie mécanique et structures </option>
        <option value="120">Génie mécanique   </option>
        <option value="121">Génie minéral,</option>
        <option value="122">Géo ressources et génie minier</option>
        <option value="123">Géo -environnement et risques naturels</option>
        <option value="124">Géo -ingénierie,</option>
        <option value="125">Géologie appliquée aux ressources minières </option>
        <option value="126">Géologie cartographie et géomatique</option>
        <option value="127">Géologie et hydrogéologie,</option>
        <option value="128">Géologie sciences appliques a l'environnement</option>
        <option value="129">Géologie, </option><option value="130">Géoscience appliquée</option>
        <option value="131">Géotechnique hydrogéologie géophysique</option>
        <option value="132">Géotechnique,</option>
        <option value="133">Géo-technologie,</option>
        <option value="134">Gestion  financière et comptable</option>
        <option value="135">Gestion d’assainissement des milieux urbain</option>
        <option value="136">Gestion de commerce</option>
        <option value="137">Gestion de la chaine logistique</option>
        <option value="138">Gestion de la qse </option>
        <option value="139">Gestion de l'assainissement en milieu urbain</option>
        <option value="140">Gestion de production et logistique intégrée</option>
        <option value="141">Gestion des entreprises et des territoires</option>
        <option value="142">Gestion des entreprises </option>
        <option value="143">Gestion des risques en finance</option>
        <option value="144">Gestion des risques financiers et assurantiels</option>
        <option value="145">Gestion des systèmes logistiques</option>
        <option value="146">Gestion et administration des entreprises </option>
        <option value="147">Gestion informatisée  comptable des entreprises</option>
        <option value="148">Gestion logistique et transport</option><option value="149">Gros œuvres</option>
        <option value="150">Industriel chimiques</option><option value="151">Informatique et techniques de gestion</option>
        <option value="152">Infrastructures de transport,</option><option value="153">Ingénierie agroalimentaire qualité</option>
        <option value="154">Ingénierie de la qualité </option><option value="155">Ingénierie des marches financiers économie appliquée</option>
        <option value="156">Ingénierie et qualité logiciels</option><option value="157">Ingénierie financière et bancaire</option>
        <option value="158">Ingénierie financière publique</option><option value="159">Ingénierie financière</option><option value="160">Ingénierie fiscale, comptable et financière</option><option value="161">Ingénierie géologique</option><option value="162">Ingénierie industrielle </option><option value="163">Ingénierie juridique fiscale et financière</option><option value="164">Ingénierie management de la qse</option><option value="165">Instrumentation et métrologie physique </option><option value="166">Logistique et approvisionnement</option><option value="167">Logistique et commerce international</option><option value="168">Logistique et commerce</option><option value="169">Logistique et export </option><option value="170">Logistique multimodale et organisateur de transports internationaux</option><option value="171">Logistique multimodale et organisateur de transports internationaux</option><option value="172">Logistique organisateur de transport de marchandises</option><option value="173">Logistique </option><option value="174">Maintenance contrôle et qualité</option><option value="175">Maintenance industriel </option><option value="176">Maintenance industrielle et électromécanique </option><option value="177">Maintenance industrielle  génie industriel et maintenance</option><option value="178">Management & gestion des entreprises</option><option value="179">Management administration des entreprises</option><option value="180">Management bancaire et finance internationale</option><option value="181">Management de la logistique et de la qualité</option><option value="182">Management de la qhse</option><option value="183">Management de la qualité dans les industries agroalimentaires</option><option value="184">Management de la qualité et des projets</option><option value="185">Management de la qualité production et logistique </option><option value="186">Management de la qualité</option><option value="187">Management de logistique & production</option><option value="188">Management de qualité et sante</option><option value="189">Management de relation client </option><option value="190">Management de transport & logistique</option><option value="191">Management des relations clients</option><option value="192">Management du e-commerce </option><option value="193">Management et administration des affaires </option><option value="194">Management et finance d’entreprise</option><option value="195">Management et stratégies financières</option><option value="196">Management finance des entreprises</option><option value="197">Management financier international</option><option value="198">Management public et gouvernance financière</option><option value="199">Management qualité des ressources naturelles</option><option value="200">Management qualité sécurité et environnement</option><option value="201">Management qualité </option><option value="202">Management stratégie et finance d’entreprise</option><option value="203">Management technologie du btp</option><option value="204">Management, audit et contrôle</option><option value="205">Management gestion internationale</option><option value="206">Marketing de la relation client</option><option value="207">Marketing, management commercial</option><option value="208">Marketing</option><option value="209">Matériaux de construction</option><option value="210">Matériaux et management de qualité</option><option value="211">Matériaux </option><option value="212">Mécanique électronique mécatronique </option><option value="213">Mécanique et développement </option><option value="214">Méthodes d’analyses chimiques</option><option value="215">Méthodes et exploitation logistique</option><option value="216">Modélisation financière </option><option value="217">Polymères textiles et colorants </option><option value="218">Procèdes et analyses physico-chimiques</option><option value="219">Qualité & métrologie</option><option value="220">Qualité et management des performances</option><option value="221">Qualité, maintenance et sécurité industrielle</option><option value="222">Ressources minières marocaine & valorisation</option><option value="223">Risques et management de la banque</option><option value="224">Route</option><option value="225">Science de la terre et de l'univers</option><option value="226">Sciences de gestion</option><option value="227">Sciences de l’eau</option><option value="228">Sciences de la matière chimique</option><option value="229">Sciences économiques et gestion</option><option value="230">Sciences et techniques comptables et financières</option><option value="231">Sciences et technologies mécaniques </option><option value="232">Sciences physiques</option><option value="233">Secrétariat bureautique </option><option value="234">Secrétariat de direction </option><option value="235">Si audit et contrôle de gestion</option><option value="236">Si et génie financier</option><option value="237">Statistique et économie appliquée</option><option value="238">Système d’information et contrôle de gestion</option><option value="239">Système d’information, audit et contrôle de gestion</option><option value="240">Technique de développement informatique </option><option value="241">Technique de management financier de l’entreprise</option><option value="242">Techniques comptable et financier</option><option value="243">Techniques d’analyse et contrôle de qualité</option><option value="244">Technologie et coordination btp </option><option value="245">Technologie minérale</option><option value="246">Tmbtp</option><option value="247">Transformation et qualité des matériaux</option><option value="248">Transport logistique supply chain management</option><option value="249">Travaux publics</option>
        <option value="250">Autres</option>

      </select>
   
  </div>

    </div> 




      
      <div class="row">
        <div class="input-field col s12">
          <textarea id="Description_Formation" class="materialize-textarea"></textarea>
          <label for="">Description Formation</label>
        </div>
      </div>





 <label>Vos expérience professionnelle</label>


<div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker">
           <label for="Date_Deb_Experience">Date Debut Experience</label>
        </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker">
           <label for="Date_Fin_Experience">Date Fin Experience</label>
        </div>

 </div> 
</div>
     

 <div class="row">
        <div class="input-field col s6">
          
          <input id="Entreprise" type="text" class="validate">
          
           <label for="Entreprise">Entreprise</label>
        </div>
    
    
        <div class="input-field col s6">
           <input id="Intitulé_poste" type="text" class="validate">
           <label for="Intitulé_poste">Intitulé de poste</label>
        </div>
 </div>




<div class="row">

    <div class="input-field col s6">
  <select  name="Secteur_activité_exp">
      <option value="" disabled selected>Secteur d'activité</option>
      <option value="1">Aéronautique / Spatial</option><option value="2">Agence pub / Marketing Direct</option><option value="3">Agriculture / Environnement </option><option value="4">Agroalimentaire</option><option value="5">Ameublement / Décoration</option><option value="6">Assurance / Courtage</option><option value="7">Audiovisuel</option><option value="8">Automobile / Motos / Cycles</option><option value="9">Logistique</option><option value="10">Gouvernement</option><option value="11">Banque / Finance</option><option value="12">BTP / Génie Civil</option><option value="13">Call Center / Web Center</option><option value="14">Chimie / Parachimie / Peintures</option><option value="15">Communication / Evénementiel</option><option value="16">Comptabilité / Audit</option><option value="17">Conseil / Etudes</option><option value="18">Cosmétique / Parfumerie / Luxe</option><option value="19">Distribution</option><option value="20">Edition / Imprimerie</option><option value="21">Education / Formation</option><option value="22">Electro-mécanique / Mécanique</option><option value="23">Electronique</option><option value="24">Energie</option><option value="25">Extraction / Mines</option><option value="26">Ferroviaire</option><option value="27">Hôtellerie / Restauration</option><option value="28">Immobilier / Promoteur / Agence</option><option value="29">Import / Export / Négoce</option><option value="30">Informatique</option><option value="31">Internet / Multimédia</option><option value="32">Juridique / Cabinet d’avocats</option><option value="33">Location véhicules</option><option value="34">Matériel Médical / Parapharmacie</option><option value="35">Métallurgie / Sidérurgie</option><option value="36">Nettoyage / Sécurité / Gardiennage</option><option value="37">Offshoring / Nearshoring</option><option value="38">Papier / Carton</option><option value="39">Pétrole / Gaz</option><option value="40">Pharmacie / Santé</option><option value="41">Plasturgie</option><option value="42">Presse</option><option value="43">Recrutement / RH / Intérim</option><option value="44">Service public / Administration</option><option value="45">Telecom</option><option value="46">Textile / Cuir</option><option value="47">Tourisme / Voyage / Loisirs </option><option value="48">Transport / Messagerie / Logistique</option><option value="49">Autres Industries</option><option value="50">Autres services</option>
    </select>

</div>
 <div class="input-field col s6">
  <select  name="Fonction">

      <option value="" disabled selected>Fonction</option>
    <option value="5" >Avocat / Juriste / Fiscaliste</option><option value="6" >Commercial / Vente / Export</option><option value="7" >Communication / Publicité / RP</option><option value="8" >Dirigeant / Poste de direction</option><option value="9" >Gestion / Comptabilité / Finance</option><option value="10" >Gestion projet / Etudes / R&D</option><option value="11" >Hôtellerie / Restauration</option><option value="12" >Immobilier / Promotion</option><option value="13" >Journalisme / Traduction</option><option value="14" >Marketing / EBusiness</option><option value="15" >Médical / Paramédical</option><option value="16" >Méthodes / Process / Industrialisation</option><option value="17" >Multimédia / Internet</option><option value="18" >Production / Qualité / Sécurité / Maintenance</option><option value="19" >RH / Personnel / Formation</option><option value="20" >Santé / Social</option><option value="21" >Sport / Loisirs</option><option value="22" >Télé-opération</option><option value="23" >Télécoms / Réseaux</option><option value="24" >Tourisme </option><option value="25" >Travaux / Chantiers / BTP</option><option value="26" >Urbanisme / architecture</option><option value="27" >stage</option><option value="28" >Autres</option>  
      </select>
      <label>Fonction</label>

  </div>

    </div> 
      
      <div class="row">

    <div class="input-field col s6">
<select  name="Type_de_contrat">
      <option value="" disabled selected>Type de contrat</option>
     <option value='1' >CDI</option>
     <option value='2' >CDD</option>
     <option value='3' >Stage</option>
     <option value='4' >Autres</option>
    </select>

</div>
 <div class="input-field col s6">
<select  name="Ville">
      <option value="" disabled selected>Ville</option>
      <option value="Agadir">Agadir</option><option value="Agadiridaoutanan">Agadiridaoutanan</option><option value="Alhaouz">Alhaouz</option><option value="Alhoceima">Alhoceima</option><option value="Aousserd">Aousserd</option><option value="Assazag">Assazag</option><option value="Assilah">Assilah</option><option value="Azilal">Azilal</option><option value="Benimellal">Benimellal</option><option value="Benslimane">Benslimane</option><option value="Berkane">Berkane</option><option value="Boujdour">Boujdour</option><option value="Boulemane">Boulemane</option><option value="Casablanca">Casablanca</option><option value="Chefchaouen">Chefchaouen</option><option value="Chichaoua">Chichaoua</option><option value="Chtoukaaitbaha">Chtoukaaitbaha</option><option value="Elhajeb">Elhajeb</option><option value="Eljadida">Eljadida</option><option value="Elkelaadessraghna">Elkelaadessraghna</option><option value="Errachidia">Errachidia</option><option value="Essemara">Essemara</option><option value="Essaouira">Essaouira</option><option value="Fahsanjra">Fahsanjra</option><option value="Fes">Fes</option><option value="Figuig">Figuig</option><option value="Guelmim">Guelmim</option><option value="Ifrane">Ifrane</option><option value="Inezgane">Inezgane</option><option value="Inezganeaitmelloul">Inezganeaitmelloul</option><option value="Jerada">Jerada</option><option value="Kenitra">Kenitra</option><option value="Khemisset">Khemisset</option><option value="Khenifra">Khenifra</option><option value="Khouribga">Khouribga</option><option value="Ksar_el_kbir">Ksar_el_kbir</option><option value="Laayoune">Laayoune</option><option value="Larache">Larache</option><option value="Marrakech">Marrakech</option><option value="Mediouna">Mediouna</option><option value="Meknes">Meknes</option><option value="Mohammedia">Mohammedia</option><option value="Moulayyacoub">Moulayyacoub</option><option value="Nador">Nador</option><option value="Nouaceur">Nouaceur</option><option value="Ouarzazate">Ouarzazate</option><option value="Oueded-dahab">Oueded-dahab</option><option value="Oujda">Oujda</option><option value="Oujdaangad">Oujdaangad</option><option value="Rabat">Rabat</option><option value="Safi">Safi</option><option value="Sale">Sale</option><option value="Sefrou">Sefrou</option><option value="Settat">Settat</option><option value="Sidikacem">Sidikacem</option><option value="Skhirate">Skhirate</option><option value="Temara">Temara</option><option value="Tantan">Tantan</option><option value="Tanger">Tanger</option><option value="Taounate">Taounate</option><option value="Taourirt">Taourirt</option><option value="Taroudannt">Taroudannt</option><option value="Tata">Tata</option><option value="Taza">Taza</option><option value="Temara">Temara</option><option value="Tetouan">Tetouan</option><option value="Tiznit">Tiznit</option><option value="Zagora">Zagora</option><option value="Autres">Autres</option>

      </select>
    

  </div>

    </div> 


 <div class="row">



        <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
           <label for="Salaire">Salaire Reçu</label>
        </div>

<div class="input-field col s12">
          <textarea id="Description_exp" class="materialize-textarea"></textarea>
          <label for="Description_exp">Description Experience professionnelle</label>
        </div>

  </div>



 <label>Langues</label>

  <div class="row">

    <div class="input-field col s6">
    <select  name="Arab">
      <option value="" disabled selected>Arabe</option>
      <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
      
    </select>
   
</div>
 <div class="input-field col s6">
<select  name="Français">
      <option value="" disabled selected>Français</option>
       <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
      
</select>
  </div>
   </div>

    <div class="row">

   <div class="input-field col s6">
<select  name="Anglais">
      <option value="" disabled selected>Englais</option>
      <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
     
    </select>
    </div> 
    <div class="input-field col s6">
<select  name="Autres">
      <option value="" disabled selected>Autres</option>
      <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
     
    </select>
    </div> 
 </div> 

    <div class="row">


<label>JOINDRE LA PHOTO</label>

<div class="file-field input-field">
      <div class="btn">
        <span>Photo</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>CV</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
       </div> 

</div>
   <div class="row">

<div class="file-field input-field">
      <div class="btn">
        <span>Lettre de motivation</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

 </div>
<button class="btn waves-effect waves-light" type="submit" name="action">
   Valider
  </button>
        
{!! Form::close() !!}
    </form>

@endsection