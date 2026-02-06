<?php
    require 'sessionstart.php';
    try
    {
        if(!file_exists('../app/Models/checkcookie.php'))
        {
            throw new Exception("checkcookie.php is missing.");
        }
        else
        {
            require '../app/Models/checkcookie.php';
        }
    }
    catch(Exception $e)
    {
        echo "<script>alert('{$e->getMessage()}');</script>";
    }
?>

<?php require 'headerandnavbar.php'; ?>

<div class="main">
    <h2>
       Scientific Websites from around the World:- 
    </h2>

    <p>
        List of the scientific websites from around the world.
        <br>
        Please choose a country to see its scientific websites.         
    </p>

    <div class="list_of_countries">
        <div class="a">
            <h2>A</h2>
            <a href="afghanistan" target="_self">Afghanistan</a>
            <a href="albania" target="_self">Albania</a>
            <a href="algeria" target="_self">Algeria</a>
            <a href="andorra" target="_self">Andorra</a>
            <a href="angola" target="_self">Angola</a>
            <a href="antigua_and_barbuda" target="_self">Antigua and Barbuda </a>
            <a href="argentina" target="_self">Argentina</a>
            <a href="armenia" target="_self">Armenia</a>
            <a href="australia" target="_self">Australia</a>
            <a href="austria" target="_self">Austria</a>
            <a href="azerbaijan" target="_self">Azerbaijan</a>
        </div>
        <div class="b">
            <h2>B</h2>
            <a href="bahamas" target="_self">Bahamas</a>
            <a href="bahrain" target="_self">Bahrain</a>
            <a href="bangladesh" target="_self">Bangladesh</a>
            <a href="barbados" target="_self">Barbados</a>
            <a href="belarus" target="_self">Belarus</a>
            <a href="belgium" target="_self">Belgium</a>
            <a href="belize" target="_self">Belize</a>
            <a href="benin" target="_self">Benin</a>
            <a href="bhutan" target="_self">Bhutan</a>
            <a href="bolivia" target="_self">Bolivia</a>
            <a href="bosnia_and_herzegovina" target="_self">Bosnia and Herzegovina</a>
            <a href="botswana" target="_self">Botswana</a>
            <a href="brazil" target="_self">Brazil</a>
            <a href="brunei" target="_self">Brunei</a>
            <a href="bulgaria" target="_self">Bulgaria</a>
            <a href="burkina_faso" target="_self">Burkina Faso</a>
            <a href="burundi" target="_self">Burundi</a>
        </div>
        <div class="c">
            <h2>C</h2>
            <a href="cabo_verde" target="_self">Cabo Verde</a>
            <a href="cambodia" target="_self">Cambodia</a>
            <a href="cameroon" target="_self">Cameroon</a>
            <a href="canada" target="_self">Canada</a>
            <a href="central_african_republic" target="_self">Central African Republic</a>
            <a href="chad" target="_self">Chad</a>
            <a href="chile" target="_self">Chile</a>
            <a href="china" target="_self">China</a>
            <a href="colombia" target="_self">Colombia</a>
            <a href="comoros" target="_self">Comoros</a>
            <a href="congo_brazzaville" target="_self">Congo (Congo-Brazzaville)</a>
            <a href="congo_kinshasa" target="_self">Congo, Democratic Republic of the (Congo-Kinshasa)</a>
            <a href="costa_rica" target="_self">Costa Rica</a>
            <a href="croatia" target="_self">Croatia</a>
            <a href="cuba" target="_self">Cuba</a>
            <a href="cyprus" target="_self">Cyprus</a>
            <a href="czechia" target="_self">Czechia</a>
        </div>
        <div class="d">
            <h2>D</h2>
            <a href="denmark" target="_self">Denmark</a>
            <a href="djinouti" target="_self">Djibouti</a>
            <a href="dominica" target="_self">Dominica</a>
            <a href="dominican_republic" target="_self">Dominican Republic</a>
        </div>
        <div class="e">
            <h2>E</h2>
            <a href="ecuador" target="_self">Ecuador</a>
            <a href="egypt" target="_self">Egypt</a>
            <a href="el_salvador" target="_self">El Salvador</a>
            <a href="equatorial_guinea" target="_self">Equatorial Guinea</a>
            <a href="eritrea" target="_self">Eritrea</a>
            <a href="estonia" target="_self">Estonia</a>
            <a href="eswatini" target="_self">Eswatini</a>
            <a href="ethiopia" target="_self">Ethiopia</a>
        </div>
        <div class="f">
            <h2>F</h2>
            <a href="fiji" target="_self">Fiji</a>
            <a href="finland" target="_self">Finland</a>
            <a href="france" target="_self">France</a>
        </div>
        <div class="g">
            <h2>G</h2>
            <a href="gabon" target="_self">Gabon</a>
            <a href="gambia" target="_self">Gambia</a>
            <a href="georgia" target="_self">Georgia</a>
            <a href="germany" target="_self">Germany</a>
            <a href="ghana" target="_self">Ghana</a>
            <a href="greece" target="_self">Greece</a>
            <a href="grenada" target="_self">Grenada</a>
            <a href="guatemala" target="_self">Guatemala</a>
            <a href="guinea" target="_self">Guinea</a>
            <a href="guinea_bissau" target="_self">Guinea-Bissau</a>
            <a href="guyana" target="_self">Guyana</a>
        </div>
        <div class="h">
            <h2>H</h2>
            <a href="haiti" target="_self">Haiti</a>
            <a href="honduras" target="_self">Honduras</a>
            <a href="hungary" target="_self">Hungary</a>
        </div>
        <div class="i">
            <h2>I</h2>
            <a href="iceland" target="_self">Iceland</a>
            <a href="india" target="_self">India</a>
            <a href="indonesia" target="_self">Indonesia</a>
            <a href="iran" target="_self">Iran</a>
            <a href="iraq" target="_self">Iraq</a>
            <a href="ireland" target="_self">Ireland</a>
            <a href="israel" target="_self">Israel</a>
            <a href="italy" target="_self">Italy</a>
        </div>
        <div class="j">
            <h2>J</h2>
            <a href="jamaica" target="_self">Jamaica</a>
            <a href="japan" target="_self">Japan</a>
            <a href="jordan" target="_self">Jordan</a>
        </div>
        <div class="k">
            <h2>K</h2>
            <a href="kazakhstan" target="_self">Kazakhstan</a>
            <a href="kenya" target="_self">Kenya</a>
            <a href="kiribati" target="_self">Kiribati</a>
            <a href="north_korea" target="_self">North Korea</a>
            <a href="south_korea" target="_self">South Korea</a>
            <a href="kuwait" target="_self">Kuwait</a>
            <a href="kyrgyzstan" target="_self">Kyrgyzstan</a>
        </div>
        <div class="l">
            <h2>L</h2>
            <a href="laos" target="_self">Laos</a>
            <a href="latvia" target="_self">Latvia</a>
            <a href="lebanon" target="_self">Lebanon</a>
            <a href="lesotho" target="_self">Lesotho</a>
            <a href="liberia" target="_self">Liberia</a>
            <a href="libya" target="_self">Libya</a>
            <a href="liechtenstein" target="_self">Liechtenstein</a>
            <a href="lithuania" target="_self">Lithuania</a>
            <a href="luxembourg" target="_self">Luxembourg</a>
        </div>
        <div class="m">
            <h2>M</h2>
            <a href="madagascar" target="_self">Madagascar</a>
            <a href="malawi" target="_self">Malawi</a>
            <a href="malaysia" target="_self">Malaysia</a>
            <a href="maldives" target="_self">Maldives</a>
            <a href="mali" target="_self">Mali</a>
            <a href="malta" target="_self">Malta</a>
            <a href="marshall_islands" target="_self">Marshall Islands</a>
            <a href="mauritania" target="_self">Mauritania</a>
            <a href="mauritius" target="_self">Mauritius</a>
            <a href="mexico" target="_self">Mexico</a>
            <a href="micronesia" target="_self">Micronesia</a>
            <a href="moldova" target="_self">Moldova</a>
            <a href="monaco" target="_self">Monaco</a>
            <a href="mongolia" target="_self">Mongolia</a>
            <a href="montenegro" target="_self">Montenegro</a>
            <a href="morocco" target="_self">Morocco</a>
            <a href="mozambique" target="_self">Mozambique</a>
        </div>
        <div class="n">
            <h2>N</h2>
            <a href="namibia" target="_self">Namibia</a>
            <a href="nauru" target="_self">Nauru</a>
            <a href="nepal" target="_self">Nepal</a>
            <a href="netherlands" target="_self">Netherlands</a>
            <a href="new_zealand" target="_self">New Zealand</a>
            <a href="nicaragua" target="_self">Nicaragua</a>
            <a href="niger" target="_self">Niger</a>
            <a href="nigeria" target="_self">Nigeria</a>
            <a href="north_macedonia" target="_self">North Macedonia</a>
            <a href="norway" target="_self">Norway</a>
        </div>
        <div class="o">
            <h2>O</h2>
            <a href="oman" target="_self">Oman</a>
        </div>
        <div class="p">
            <h2>P</h2>
            <a href="pakistan" target="_self">Pakistan</a>
            <a href="palau" target="_self">Palau</a>
            <a href="panama" target="_self">Panama</a>
            <a href="papua_new_guinea" target="_self">Papua New Guinea</a>
            <a href="paraguay" target="_self">Paraguay</a>
            <a href="peru" target="_self">Peru</a>
            <a href="philippines" target="_self">Philippines</a>
            <a href="poland" target="_self">Poland</a>
            <a href="portugal" target="_self">Portugal</a>
        </div>
        <div class="q">
            <h2>Q</h2>
            <a href="qatar" target="_self">Qatar</a>
        </div>
        <div class="r">
            <h2>R</h2>
            <a href="romania" target="_self">Romania</a>
            <a href="russia" target="_self">Russia</a>
            <a href="rwanda" target="_self">Rwanda</a>
        </div>
        <div class="s">
            <h2>S</h2>
            <a href="sao_tome_and_principe" target="_self">Sao Tome and Principe</a>
            <a href="saudi_arabia" target="_self">Saudi Arabia</a>
            <a href="senegal" target="_self">Senegal</a>
            <a href="serbia" target="_self">Serbia</a>
            <a href="seychelles" target="_self">Seychelles</a>
            <a href="sierra_leone" target="_self">Sierra Leone</a>
            <a href="singapore" target="_self">Singapore</a>
            <a href="slovakia" target="_self">Slovakia</a>
            <a href="slovenia" target="_self">Slovenia</a>
            <a href="solomon_islands" target="_self">Solomon Islands</a>
            <a href="somalia" target="_self">Somalia</a>
            <a href="south_africa" target="_self">South Africa</a>
            <a href="south_sudan" target="_self">South Sudan</a>
            <a href="spain" target="_self">Spain</a>
            <a href="sri_lanka" target="_self">Sri Lanka</a>
            <a href="sudan" target="_self">Sudan</a>
            <a href="suriname" target="_self">Suriname</a>
            <a href="sweden" target="_self">Sweden</a>
            <a href="switzerland" target="_self">Switzerland</a>
        </div>
        <div class="t">
            <h2>T</h2>
            <a href="tajikistan" target="_self">Tajikistan</a>
            <a href="tanzania" target="_self">Tanzania</a>
            <a href="thailand" target="_self">Thailand</a>
            <a href="togo" target="_self">Togo</a>
            <a href="tonga" target="_self">Tonga</a>
            <a href="trinidad_and_tobago" target="_self">Trinidad and Tobago</a>
            <a href="tunisia" target="_self">Tunisia</a>
            <a href="turkey" target="_self">Turkey</a>
            <a href="turkmenistan" target="_self">Turkmenistan</a>
            <a href="tuvalu" target="_self">Tuvalu</a>
        </div>
        <div class="u">
            <h2>U</h2>
            <a href="uganda" target="_self">Uganda</a>
            <a href="ukraine" target="_self">Ukraine</a>
            <a href="united_arab_emirates" target="_self">United Arab Emirates</a>
            <a href="united_kingdom" target="_self">United Kingdom</a>
            <a href="united_states" target="_self">United States</a>
            <a href="uruguay" target="_self">Uruguay</a>
            <a href="uzbekistan" target="_self">Uzbekistan</a>
        </div>
        <div class="v">
            <h2>V</h2>
            <a href="vanuatu" target="_self">Vanuatu</a>
            <a href="vatican_city" target="_self">Vatican City</a>
            <a href="venezuela" target="_self">Venezuela</a>
            <a href="vietnam" target="_self">Vietnam</a>
        </div>
        <div class="w">
            <h2>W</h2>
            <a href="wales" target="_self">Wales</a>
        </div>
        <!--
        <div class="x">
            <h2>X</h2>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
            <a href="" target="_self"></a>
        </div>
-->
        <div class="y">
            <h2>Y</h2>
            <a href="yemen" target="_self">Yemen</a>
        </div>
        <div class="z">
            <h2>Z</h2>
            <a href="zambia" target="_self">Zambia</a>
            <a href="zimbabwe" target="_self">Zimbabwe</a>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
    </body>
</html>
