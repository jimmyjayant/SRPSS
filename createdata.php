<?php 
// Create database and input necessary information

// Create connection using MySQLi Object-Oriented

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error) {
    $createdataerror = "<p style='color:red;font-weight:bold;background:yellow;'>Error Connecting Server.</p><br>";
    echo $createdataerror;
    die("Connection failed: " . $conn->connect_error);
}

// store query in a variable
$sql = "CREATE DATABASE IF NOT EXISTS srpss";

// Create database 
$conn->query($sql);

if(!($conn->query($sql) === TRUE))
{
  echo "<p style='color:red;font-weight:bold;background:yellow;'>Error Creating database.</p><br>";
}

// Close the connection
$conn->close();
?>






<?php 
// include file 'databaseconnection.php'
include('databaseconnection.php');


// sql to create table researchsites 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS researchsites (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sitename VARCHAR(100) NOT NULL,
    headquarter VARCHAR(100) NOT NULL
)";


// Perform query that is create a table if it not exists 
$conn->query($sql);


// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Indian Agriculture Research Institute', 'New delhi'
        WHERE NOT EXISTS
                        (SELECT sitename, headquarter
                        FROM researchsites 
                        WHERE sitename = 'Indian Agriculture Research Institute' AND headquarter = 'New delhi');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Rice Research Institute', 'Cuttack'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Rice Research Institute' AND headquarter = 'Cuttack');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Sugarcane Research Institute', 'Coimbatore'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Sugarcane Research Institute' AND headquarter = 'Coimbatore');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Potato Research Institute', 'Shimla'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Potato Research Institute' AND headquarter = 'Shimla');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Tobacco Research Institute', 'Rajamundry'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Tobacco Research Institute' AND headquarter = 'Rajamundry');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Road Research Institute', 'New delhi'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Road Research Institute' AND headquarter = 'New delhi');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'National sugar Research Institute', 'Kanpur'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'National sugar Research Institute' AND headquarter = 'Kanpur');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Indian Lac Research Institute', 'Ranchi'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Indian Lac Research Institute' AND headquarter = 'Ranchi');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'National Dairy Research Institute', 'Karnal (Haryana)'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'National Dairy Research Institute' AND headquarter = 'Karnal (Haryana)');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Fuel Research Institute', 'Dhanbad'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Fuel Research Institute' AND headquarter = 'Dhanbad');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Leather Research Institute', 'Chennai'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Leather Research Institute' AND headquarter = 'Chennai');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Mining Research Institute', 'Dhanbad'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Mining Research Institute' AND headquarter = 'Dhanbad');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Drug Research Institute', 'Lucknow'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Drug Research Institute' AND headquarter = 'Lucknow');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Indian Meteorological Observatory', 'Pune & Delhi'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Indian Meteorological Observatory' AND headquarter = 'Pune & Delhi');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Raman Research Institute', 'Bangalore'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Raman Research Institute' AND headquarter = 'Bangalore');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Scientific Industrial Organsation', 'Chandigarh'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Scientific Industrial Organsation' AND headquarter = 'Chandigarh');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Salt and Marine Chemical Research Institute', 'Bhavnagar'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Salt and Marine Chemical Research Institute' AND headquarter = 'Bhavnagar');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Archeological Survey of India', 'Kolkata'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Archeological Survey of India' AND headquarter = 'Kolkata');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Jute Technological Research Institute', 'Kolkata'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Jute Technological Research Institute' AND headquarter = 'Kolkata');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Coconut Research Institute', 'Kasergod, Kerala'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Coconut Research Institute' AND headquarter = 'Kasergod, Kerala');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Textile Research Institute', 'Ahmadabad'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Textile Research Institute' AND headquarter = 'Ahmadabad');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'All Indian Institute of Medical Science', 'New Delhi'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'All Indian Institute of Medical Science' AND headquarter = 'New Delhi');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'National Aeronautical Laboratory', 'Bangalore'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'National Aeronautical Laboratory' AND headquarter = 'Bangalore');";


$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'National Institute of Oceanography', 'Panaji'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'National Institute of Oceanography' AND headquarter = 'Panaji');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'National Geophysics Research Institute', 'Hyderabad'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'National Geophysics Research Institute' AND headquarter = 'Hyderabad');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Indian Institute of Petroleum', 'Dehradun'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Indian Institute of Petroleum' AND headquarter = 'Dehradun');";


$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Building Research Institute', 'Roorkee'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Building Research Institute' AND headquarter = 'Roorkee');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Tata Institute of Fundamental Research', 'Mumbai'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Tata Institute of Fundamental Research' AND headquarter = 'Mumbai');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'High Altitude Research Laboratory', 'Gulmarg'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'High Altitude Research Laboratory' AND headquarter = 'Gulmarg');";


$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'National Botanical Research Institute', 'Lucknow'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'National Botanical Research Institute' AND headquarter = 'Lucknow');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Food Technological Research Institute', 'Mysore'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Food Technological Research Institute' AND headquarter = 'Mysore');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Glass and Ceramic Research Institute', 'Kolkata'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Glass and Ceramic Research Institute' AND headquarter = 'Kolkata');";


$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'National environmental engineering research institute', 'Nagpur'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'National environmental engineering research institute' AND headquarter = 'Nagpur');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Electro Chemical Research Institute', 'Karaikudi (Tamil Nadu)'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Electro Chemical Research Institute' AND headquarter = 'Karaikudi (Tamil Nadu)');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Indian Institute of Chemical Biology', 'Kolkata'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Indian Institute of Chemical Biology' AND headquarter = 'Kolkata');";


$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Industrial Toxicology Research Centre', 'Lucknow'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Industrial Toxicology Research Centre' AND headquarter = 'Lucknow');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Central Mechanical Engineering Research Institute', 'Durgapur'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Central Mechanical Engineering Research Institute' AND headquarter = 'Durgapur');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Centre for Cellular and Molecular Biology', 'Hyderabad'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Centre for Cellular and Molecular Biology' AND headquarter = 'Hyderabad');";


$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Vikram Sarabhai Space Centre', 'Thiruvananthapuram'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Vikram Sarabhai Space Centre' AND headquarter = 'Thiruvananthapuram');";

$sql .= "INSERT INTO researchsites (sitename, headquarter)
        SELECT 'Uranium Corporation of India', 'Jadugoda'
        WHERE NOT EXISTS
                (SELECT sitename, headquarter
                FROM researchsites 
                WHERE sitename = 'Uranium Corporation of India' AND headquarter = 'Jadugoda');";


// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());



// sql to create table magazines 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS magazines (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    magazinename VARCHAR(100) NOT NULL,
    publisher VARCHAR(100) NOT NULL
)";

// perform query
$conn->query($sql);


// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Resonance', 'Indian Academy of Sciences'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Resonance' AND publisher = 'Indian Academy of Sciences');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Current Science', 'Current Science Association'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Current Science' AND publisher = 'Current Science Association');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Dream 2047', 'Vigyan Prasar'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Dream 2047' AND publisher = 'Vigyan Prasar');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Jnan o Bijnan', 'Bangiya Bijnan Parishad'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Jnan o Bijnan' AND publisher = 'Bangiya Bijnan Parishad');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Sandarbh', 'Eklavya Foundation'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Sandarbh' AND publisher = 'Eklavya Foundation');";


$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Science Reporter', 'National Institute of Science Communication and Information Resources'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Science Reporter' AND publisher = 'National Institute of Science Communication and Information Resources');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Safari', 'Harshal Publications'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Safari' AND publisher = 'Harshal Publications');";


$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Bhawana', 'Bhavana Trust'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Bhawana' AND publisher = 'Bhavana Trust');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Yojna', 'Ministry of Information & Broadcasting'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Yojna' AND publisher = 'Ministry of Information & Broadcasting');";


$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Vigyan Pragati (Hindi)', 'NISCAIR'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Vigyan Pragati (Hindi)' AND publisher = 'NISCAIR');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Bulletin of Materials Science', 'Indian Academy of Sciences'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Bulletin of Materials Science' AND publisher = 'Indian Academy of Sciences');";


$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Science India Magazine', 'Vijnana Bharati'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Science India Magazine' AND publisher = 'Vijnana Bharati');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Everyman''s Science', 'The Indian Science Congress Association'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Everyman''s Science' AND publisher = 'The Indian Science Congress Association');";


$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Scientific India', 'Scientific Planet Society'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Scientific India' AND publisher = 'Scientific Planet Society');";

$sql .= "INSERT INTO magazines (magazinename, publisher)
        SELECT 'Shaastra', 'Indian Educational Institution'
        WHERE NOT EXISTS
                        (SELECT magazinename, publisher
                        FROM magazines  
                        WHERE magazinename = 'Shaastra' AND publisher = 'Indian Educational Institution');";



// Perform Multi query 
$conn->multi_query($sql);



// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());




// sql to create table journals 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS journals (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    journalname VARCHAR(150) NOT NULL
)";

// perform query
$conn->query($sql);


// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO journals (journalname)
        SELECT 'American Indian and Alaska Native Mental Health Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'American Indian and Alaska Native Mental Health Research');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Annals of Indian Academy of Neurology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Annals of Indian Academy of Neurology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Contributions to Indian Sociology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Contributions to Indian Sociology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Chemical Engineer'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Chemical Engineer');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Drugs'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Drugs');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Economic and Social History Review'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Economic and Social History Review');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Economic Review'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Economic Review');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Geotechnical Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Geotechnical Journal');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Growth and Development Review'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Growth and Development Review');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Heart Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Heart Journal');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Historical Review'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Historical Review');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Agricultural Biochemistry'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Agricultural Biochemistry');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Agricultural Economics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Agricultural Economics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Agricultural Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Agricultural Research');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Agricultural Sciences'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Agricultural Sciences');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Agronomy'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Agronomy');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Anaesthesia'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Anaesthesia');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Animal Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Animal Research');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Animal Sciences'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Animal Sciences');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Biochemistry and Biophysics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Biochemistry and Biophysics');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Biotechnology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Biotechnology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Cancer'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Cancer');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Chemical Technology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Chemical Technology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Chemistry – Section A Inorganic, Physical, Theoretical and Analytical Chemistry'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Chemistry – Section A Inorganic, Physical, Theoretical and Analytical Chemistry');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Chemistry – Section B Organic and Medicinal Chemistry'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Chemistry – Section B Organic and Medicinal Chemistry');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Clinical Biochemistry'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Clinical Biochemistry');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Community Health'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Community Health');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Community Medicine'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Community Medicine');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Computer Science and Engineering'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Computer Science and Engineering');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Corporate Governance'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Corporate Governance');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Critical Care Medicine'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Critical Care Medicine');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Dental Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Dental Research');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Dermatology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Dermatology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Dermatology, Venereology and Leprology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Dermatology, Venereology and Leprology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Economics and Development'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Economics and Development');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Endocrinology and Metabolism'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Endocrinology and Metabolism');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Engineering and Materials Sciences'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Engineering and Materials Sciences');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Entomology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Entomology');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Environmental Protection'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Environmental Protection');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Fibre and Textile Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Fibre and Textile Research');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Finance'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Finance');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Fisheries'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Fisheries');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Forensic Medicine and Pathology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Forensic Medicine and Pathology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Gastroenterology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Gastroenterology');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Gender Studies'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Gender Studies');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Genetics and Plant Breeding'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Genetics and Plant Breeding');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Geo-Marine Sciences'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Geo-Marine Sciences');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Gynecologic Oncology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Gynecologic Oncology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Hematology and Blood Transfusion'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Hematology and Blood Transfusion');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Heterocyclic Chemistry'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Heterocyclic Chemistry');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Horticulture'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Horticulture');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Human Development'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Human Development');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Labour Economics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Labour Economics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Leprosy'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Leprosy');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Marketing'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Marketing');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Mathematics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Mathematics');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Medical and Paediatric Oncology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Medical and Paediatric Oncology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian journal of medical ethics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian journal of medical ethics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Medical Microbiology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Medical Microbiology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Medical Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Medical Research');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Medical Research, Supplement'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Medical Research, Supplement');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Microbiology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Microbiology');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Natural Products and Resources'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Natural Products and Resources');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Nematology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Nematology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Nephrology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Nephrology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Nuclear Medicine'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Nuclear Medicine');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Occupational and Environmental Medicine'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Occupational and Environmental Medicine');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Ophthalmology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Ophthalmology');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Orthopaedics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Orthopaedics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Otolaryngology and Head and Neck Surgery'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Otolaryngology and Head and Neck Surgery');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Otology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Otology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Palliative Care'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Palliative Care');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Pathology and Microbiology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Pathology and Microbiology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Pediatrics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Pediatrics');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Pharmaceutical Education and Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Pharmaceutical Education and Research');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Pharmaceutical Sciences'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Pharmaceutical Sciences');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Pharmacology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Pharmacology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Physics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Physics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Physiology and Pharmacology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Physiology and Pharmacology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Plastic Surgery'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Plastic Surgery');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Practical Pediatrics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Practical Pediatrics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Psychiatry'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Psychiatry');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Psychological Medicine'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Psychological Medicine');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian journal of public health'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian journal of public health');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Pure and Applied Mathematics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Pure and Applied Mathematics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Pure and Applied Physics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Pure and Applied Physics');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Radio and Space Physics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Radio and Space Physics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Radiology and Imaging'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Radiology and Imaging');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Research in Homoeopathy'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Research in Homoeopathy');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Rheumatology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Rheumatology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Sexually Transmitted Diseases and AIDS'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Sexually Transmitted Diseases and AIDS');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Small Ruminants'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Small Ruminants');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Social Work'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Social Work');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Surgery'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Surgery');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Surgical Oncology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Surgical Oncology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Thoracic and Cardiovascular Surgery'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Thoracic and Cardiovascular Surgery');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Traditional Knowledge'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Traditional Knowledge');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Transplantation'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Transplantation');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Tuberculosis'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Tuberculosis');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Journal of Urology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Journal of Urology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Law Review'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Law Review');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Pacing and Electrophysiology Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Pacing and Electrophysiology Journal');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Pediatrics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Pediatrics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Phytopathology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Phytopathology');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Spine Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Spine Journal');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indian Veterinary Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indian Veterinary Journal');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indiana'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indiana');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indiana Journal of Global Legal Studies'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indiana Journal of Global Legal Studies');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indiana Law Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indiana Law Journal');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Indiana University Mathematics Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Indiana University Mathematics Journal');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'International Journal of Anglo-Indian Studies'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'International Journal of Anglo-Indian Studies');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'IPPTA: Quarterly Journal of Indian Pulp and Paper Technical Association'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'IPPTA: Quarterly Journal of Indian Pulp and Paper Technical Association');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Academy of Forensic Medicine'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Academy of Forensic Medicine');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Academy of Oral Medicine and Radiology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Academy of Oral Medicine and Radiology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Association for Child and Adolescent Mental Health'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Association for Child and Adolescent Mental Health');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Association of Pediatric Surgeons'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Association of Pediatric Surgeons');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Business Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Business Research');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Council of Philosophical Research'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Council of Philosophical Research');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Philosophy'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Philosophy');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Prosthodontist Society'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Prosthodontist Society');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of Indian Society of Periodontology'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of Indian Society of Periodontology');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Academy of Wood Science'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Academy of Wood Science');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Chemical Society'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Chemical Society');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Institute of Science'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Institute of Science');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Mathematical Society'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Mathematical Society');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Medical Association'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Medical Association');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Ocean Region'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Ocean Region');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Society of Pedodontics and Preventive Dentistry'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Society of Pedodontics and Preventive Dentistry');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Society of Remote Sensing'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Society of Remote Sensing');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal of the Indian Society of Soil Science'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal of the Indian Society of Soil Science');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Journal, Indian Academy of Clinical Medicine'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Journal, Indian Academy of Clinical Medicine');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'New West Indian Guide/Nieuwe West-Indische Gids (NWIG)'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'New West Indian Guide/Nieuwe West-Indische Gids (NWIG)');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Prabandhan: Indian Journal of Management'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Prabandhan: Indian Journal of Management');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Proceedings of the Indian Academy of Sciences: Mathematical Sciences'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Proceedings of the Indian Academy of Sciences: Mathematical Sciences');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Proceedings of the Indian National Science Academy'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Proceedings of the Indian National Science Academy');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Sankhya: The Indian Journal of Statistics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Sankhya: The Indian Journal of Statistics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'SCMS Journal of Indian Management'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'SCMS Journal of Indian Management');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Studies in American Indian Literatures'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Studies in American Indian Literatures');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Studies in Indian Politics'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Studies in Indian Politics');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Transactions of the Indian Ceramic Society'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Transactions of the Indian Ceramic Society');";


$sql .= "INSERT INTO journals (journalname)
        SELECT 'Transactions of the Indian Institute of Metals'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Transactions of the Indian Institute of Metals');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'Transactions of the Institute of Indian Geographers'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'Transactions of the Institute of Indian Geographers');";

$sql .= "INSERT INTO journals (journalname)
        SELECT 'West Indian Medical Journal'
        WHERE NOT EXISTS
                        (SELECT journalname
                        FROM journals  
                        WHERE journalname = 'West Indian Medical Journal');";

// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());

// sql to create table newspapers 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS newspapers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        newspapername VARCHAR(150) NOT NULL,
        link VARCHAR(512) NOT NULL
)";

// perform query
$conn->query($sql);

// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO newspapers (newspapername, link)
        SELECT 'Economic Times', 'https://economictimes.indiatimes.com/'
        WHERE NOT EXISTS
                        (SELECT newspapername, link
                        FROM newspapers  
                        WHERE newspapername = 'Economic Times' AND link = 'https://economictimes.indiatimes.com/');";

$sql .= "INSERT INTO newspapers (newspapername, link)
        SELECT 'Hindu', 'https://www.thehindu.com/'
        WHERE NOT EXISTS
                        (SELECT newspapername
                        FROM newspapers  
                        WHERE newspapername = 'Hindu' AND link = 'https://www.thehindu.com/');";

$sql .= "INSERT INTO newspapers (newspapername, link)
        SELECT 'Hindustan Times', 'https://www.hindustantimes.com/'
        WHERE NOT EXISTS
                        (SELECT newspapername
                        FROM newspapers  
                        WHERE newspapername = 'Hindustan Times' AND link = 'https://www.hindustantimes.com/');";

$sql .= "INSERT INTO newspapers (newspapername, link)
        SELECT 'Indian Express', 'https://indianexpress.com/'
        WHERE NOT EXISTS
                        (SELECT newspapername
                        FROM newspapers  
                        WHERE newspapername = 'Indian Express' AND link = 'https://indianexpress.com/');";

$sql .= "INSERT INTO newspapers (newspapername, link)
        SELECT 'Times Of India', 'https://timesofindia.indiatimes.com/us'
        WHERE NOT EXISTS
                        (SELECT newspapername
                        FROM newspapers  
                        WHERE newspapername = 'Times Of India' AND link = 'https://timesofindia.indiatimes.com/us');";

// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());

// sql to create table conferences 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS conferences (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        conferencename VARCHAR(450) NOT NULL
)";

// perform query
$conn->query($sql);

// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Inventive Material Science Applications (ICIMA)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Inventive Material Science Applications (ICIMA)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Mechanical, Aerospace and Production Engineering (ICMAPE)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Mechanical, Aerospace and Production Engineering (ICMAPE)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Educational Technology, Learning and Social Science (ICETLSS)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Educational Technology, Learning and Social Science (ICETLSS)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Environmental Science and Biotechnology (ICESB)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Environmental Science and Biotechnology (ICESB)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Food Technology, Agriculture and Fisheries (ICFTAF)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Food Technology, Agriculture and Fisheries (ICFTAF)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Medical and Health Sciences (ICMHS)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Medical and Health Sciences (ICMHS)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Recent Innovations in Computer Science, Engineering and Technology (ICRICSET)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Recent Innovations in Computer Science, Engineering and Technology (ICRICSET)');";


$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Business Management and Humanities (ICBEMH)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Business Management and Humanities (ICBEMH)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Applied Science Mathematics and Statistics (ICASMS)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Applied Science Mathematics and Statistics (ICASMS)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Industrial Engineering and Operations Management (ICIEOM)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Industrial Engineering and Operations Management (ICIEOM)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Artificial Intelligence (ICAI)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Artificial Intelligence (ICAI)');";


$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Robotics and Automation (ICRA)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Robotics and Automation (ICRA)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Teaching, Education and new learning Technologies (ICTENLT)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Teaching, Education and new learning Technologies (ICTENLT)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on social science and humanities (ICSSH)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on social science and humanities (ICSSH)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Physics (ICP)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Physics (ICP)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'Global Conference on Renewable Energy and Climate Change (GCRECC)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'Global Conference on Renewable Energy and Climate Change (GCRECC)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Agricultural and Biological Sciences (ICABS)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Agricultural and Biological Sciences (ICABS)');";


$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Recent Advances in Engineering, Technology and Science (ICRAETS)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Recent Advances in Engineering, Technology and Science (ICRAETS)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Business Management and Social Innovation (ICBMSI)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Business Management and Social Innovation (ICBMSI)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on arts and humanities (ICAH)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on arts and humanities (ICAH)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Astronomy, Astrophysics, Space Science (ICAASS)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Astronomy, Astrophysics, Space Science (ICAASS)');";


$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Mathematical, Physics, and Dynamics (ICMPD)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Mathematical, Physics, and Dynamics (ICMPD)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Big Data and Smart Computing (ICBDSC)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Big Data and Smart Computing (ICBDSC)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Research Conference on Arts, Commerce, and Business Management (IRCACBM)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Research Conference on Arts, Commerce, and Business Management (IRCACBM)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Software Engineering and Computer Science (ICSECS)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Software Engineering and Computer Science (ICSECS)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Recent Developments in Social Science and Business Management (ICRDSSBM)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Recent Developments in Social Science and Business Management (ICRDSSBM)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Recent Advances in Science, Technology & Engineering (ICRASTE)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Recent Advances in Science, Technology & Engineering (ICRASTE)');";


$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Environment, Agriculture and Biotechnology (ICEABT)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Environment, Agriculture and Biotechnology (ICEABT)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Control System, power and electrical engineering (ICCSPEE)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Control System, power and electrical engineering (ICCSPEE)');";

$sql .= "INSERT INTO conferences (conferencename)
        SELECT 'International Conference on Artificial Intelligence, Robots and Mechanical Engineering (ICAIRME)'
        WHERE NOT EXISTS
                        (SELECT conferencename
                        FROM conferences  
                        WHERE conferencename = 'International Conference on Artificial Intelligence, Robots and Mechanical Engineering (ICAIRME)');";

// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());

// sql to create table ytchannels 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS ytchannels (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        channelname VARCHAR(150) NOT NULL
)";

// perform query
$conn->query($sql);

// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO ytchannels (channelname)
        SELECT 'GetsetflySCIENCE'
        WHERE NOT EXISTS
                        (SELECT channelname
                        FROM ytchannels  
                        WHERE channelname = 'GetsetflySCIENCE');";

$sql .= "INSERT INTO ytchannels (channelname)
        SELECT 'The Knowledge'
        WHERE NOT EXISTS
                        (SELECT channelname
                        FROM ytchannels  
                        WHERE channelname = 'The Knowledge');";

$sql .= "INSERT INTO ytchannels (channelname)
        SELECT 'RE - research'
        WHERE NOT EXISTS
                        (SELECT channelname
                        FROM ytchannels  
                        WHERE channelname = 'RE - research');";

$sql .= "INSERT INTO ytchannels (channelname)
        SELECT 'Research Tv India'
        WHERE NOT EXISTS
                        (SELECT channelname
                        FROM ytchannels  
                        WHERE channelname = 'Research Tv India');";

$sql .= "INSERT INTO ytchannels (channelname)
        SELECT 'Universe Adventure'
        WHERE NOT EXISTS
                        (SELECT channelname
                        FROM ytchannels  
                        WHERE channelname = 'Universe Adventure');";

// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());

// sql to create table scientists 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS scientists (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        scientistname VARCHAR(250) NOT NULL
)";

// perform query
$conn->query($sql);

// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO scientists (scientistname)
        SELECT 'C.V. Raman'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'C.V. Raman');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Meghnad Saha'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Meghnad Saha');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Homi J. Bhabha'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Homi J. Bhabha');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'A.P.J. Abdul Kalam'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'A.P.J. Abdul Kalam');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Srinivasa Ramanujan'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Srinivasa Ramanujan');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Satyendra Nath Bose'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Satyendra Nath Bose');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Jagadish Chandra Bose'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Jagadish Chandra Bose');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Har Gobind Khorana'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Har Gobind Khorana');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Vikram Sarabhai'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Vikram Sarabhai');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Subrahmanyan Chandrasekhar'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Subrahmanyan Chandrasekhar');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Prasanta Chandra Mahalanobis'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Prasanta Chandra Mahalanobis');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Salim Ali'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Salim Ali');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Birbal Sahni'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Birbal Sahni');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Venkatraman Radhakrishnan'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Venkatraman Radhakrishnan');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Asima Chatterjee'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Asima Chatterjee');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Mokshagundam Visvesvaraya'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Mokshagundam Visvesvaraya');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Prafulla Chandra Ray'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Prafulla Chandra Ray');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Radha Balakrishnan'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Radha Balakrishnan');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'M.S. Swaminathan'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'M.S. Swaminathan');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Ashoke Sen'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Ashoke Sen');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Ambarish Ghosh'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Ambarish Ghosh');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Archana Bhattacharyya'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Archana Bhattacharyya');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Amar Gupta'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Amar Gupta');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Amal Kumar Raychaudhuri'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Amal Kumar Raychaudhuri');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Animesh Chakravorty'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Animesh Chakravorty');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Ajoy Ghatak'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Ajoy Ghatak');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Amitava Raychaudhuri'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Amitava Raychaudhuri');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Anil Kakodkar'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Anil Kakodkar');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Aditi Pant'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Aditi Pant');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Amartya Sen'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Amartya Sen');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'G.N. Ramachandran'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'G.N. Ramachandran');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Abhik Ghosh'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Abhik Ghosh');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Asoke Nath Mitra'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Asoke Nath Mitra');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Janaki Ammal'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Janaki Ammal');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'A. Sivathanu Pillai'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'A. Sivathanu Pillai');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'A.S. Kiran Kumar'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'A.S. Kiran Kumar');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Abhay Ashtekar'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Abhay Ashtekar');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'A.P. Balachandran'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'A.P. Balachandran');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Arun K. Pati'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Arun K. Pati');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'A.S. Rao'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'A.S. Rao');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Anna Mani'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Anna Mani');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Agnikumar G. Vedeshwar'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Agnikumar G. Vedeshwar');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Gautam Radhakrishna Desiraju'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Gautam Radhakrishna Desiraju');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Kedareswar Banerjee'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Kedareswar Banerjee');";

$sql .= "INSERT INTO scientists (scientistname)
        SELECT 'Manjula Reddy'
        WHERE NOT EXISTS
                        (SELECT scientistname
                        FROM scientists  
                        WHERE scientistname = 'Manjula Reddy');";

// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());

// sql to create table movies 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS movies (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        moviename VARCHAR(250) NOT NULL
)";

// perform query
$conn->query($sql);

// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO movies (moviename)
        SELECT 'Rocketry'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'Rocketry');";

$sql .= "INSERT INTO movies (moviename)
        SELECT 'Hawaizaada'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'Hawaizaada');";

$sql .= "INSERT INTO movies (moviename)
        SELECT 'Mission Mangal'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'Mission Mangal');";

$sql .= "INSERT INTO movies (moviename)
        SELECT 'Parmanu'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'Parmanu');";

$sql .= "INSERT INTO movies (moviename)
        SELECT 'Ek Doctor Ki Maut'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'Ek Doctor Ki Maut');";

$sql .= "INSERT INTO movies (moviename)
        SELECT 'The Quantum Indians'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'The Quantum Indians');";

$sql .= "INSERT INTO movies (moviename)
        SELECT 'Ramanujan'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'Ramanujan');";

$sql .= "INSERT INTO movies (moviename)
        SELECT 'Shakuntala Devi'
        WHERE NOT EXISTS
                        (SELECT moviename
                        FROM movies  
                        WHERE moviename = 'Shakuntala Devi');";

// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());

// sql to create table webseries 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS webseries (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        webseriesname VARCHAR(150) NOT NULL
)";

// perform query
$conn->query($sql);

// sql to insert multiple data before checking if records already exists
$sql = "INSERT INTO webseries (webseriesname)
        SELECT 'Rocket Boys'
        WHERE NOT EXISTS
                        (SELECT webseriesname
                        FROM webseries  
                        WHERE webseriesname = 'Rocket Boys');";

// Perform Multi query 
$conn->multi_query($sql);

// Fetch and free each result set
do {
        if($result = $conn->store_result()) {
                $result->free();
        }
}while($conn->more_results() && $conn->next_result());

// sql to create table researchers 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS researchers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(100) NOT NULL,
        lastname VARCHAR(100) NOT NULL,
        gender VARCHAR(10) NOT NULL,
        dob DATE NOT NULL,
        addr VARCHAR(300) NOT NULL,
        contact INT(10) NOT NULL,
        email VARCHAR(150) NOT NULL,
        researchcategory VARCHAR(15) NOT NULL,
        twitter VARCHAR(100) NULL,
        facebook VARCHAR(100) NULL,
        linkedin VARCHAR(100) NULL,
        pass VARCHAR(30) NOT NULL,
        UNIQUE (firstname, lastname, gender, dob, addr, contact, email, pass)
)";

// perform query
$conn->query($sql);

// sql to create table researchpapers 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS researchpapers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        loggeduser VARCHAR(150), 
        category VARCHAR(150) NOT NULL,
        topic VARCHAR(300) NOT NULL,
        paper VARCHAR(500) NOT NULL,
        approved INT(6) DEFAULT 0,
        CONSTRAINT FK_loggeduser FOREIGN KEY (loggeduser) REFERENCES researchers(firstname)
)";

// perform query
$conn->query($sql);


// sql to create table feedback 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS feedback (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(150) NOT NULL,
        topic VARCHAR(100) NOT NULL,
        contact INT(10) NOT NULL,
        email VARCHAR(150) NOT NULL,
        mess VARCHAR(1000) NOT NULL,
        UNIQUE (fname, contact, email)
)";

// perform query
$conn->query($sql);

// sql to create table chat 'store query in a variable'
$sql = "CREATE TABLE IF NOT EXISTS chat (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL,
        chatmsg VARCHAR(1000) NOT NULL,
        dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// perform query
$conn->query($sql);

// Close the connection
$conn->close();
?>
