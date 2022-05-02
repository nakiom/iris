<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Loading Countries');
        
        DB::table('paises')->insert([
            [
                "id" => 1, 
                "nombre" => "argentina", 
                "nombre_en" => "argentine", 
                "iso_alfa2" => "AR", 
                "iso_alfa3" => "ARG", 
                "iso_num" => 32, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "54"
            ],[
                "id" => 46, 
                "nombre" => "chile", 
                "nombre_en" => "chile", 
                "iso_alfa2" => "CL", 
                "iso_alfa3" => "CHL", 
                "iso_num" => 152, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "56"
            ],[
                "id" => 2, 
                "nombre" => "islas gland", 
                "nombre_en" => "åland islands", 
                "iso_alfa2" => "AX", 
                "iso_alfa3" => "ALA", 
                "iso_num" => 248, 
                "lenguaje" => "SV", 
                "tel_prefijo" => "358-1"
            ],[
                "id" => 3, 
                "nombre" => "albania", 
                "nombre_en" => "albania", 
                "iso_alfa2" => "AL", 
                "iso_alfa3" => "ALB", 
                "iso_num" => 8, 
                "lenguaje" => "SQ", 
                "tel_prefijo" => "355"
            ],[
                "id" => 4, 
                "nombre" => "argelia", 
                "nombre_en" => "algeria", 
                "iso_alfa2" => "DZ", 
                "iso_alfa3" => "DZA", 
                "iso_num" => 12, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "213"
            ],[
                "id" => 5, 
                "nombre" => "samoa americana", 
                "nombre_en" => "american samoa", 
                "iso_alfa2" => "AS", 
                "iso_alfa3" => "ASM", 
                "iso_num" => 16, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "684"
            ],[
                "id" => 6, 
                "nombre" => "andorra", 
                "nombre_en" => "andorra", 
                "iso_alfa2" => "AD", 
                "iso_alfa3" => "AND", 
                "iso_num" => 20, 
                "lenguaje" => "CA", 
                "tel_prefijo" => "376"
            ],[
                "id" => 7, 
                "nombre" => "angola", 
                "nombre_en" => "angola", 
                "iso_alfa2" => "AO", 
                "iso_alfa3" => "AGO", 
                "iso_num" => 24, 
                "lenguaje" => "PT", 
                "tel_prefijo" => "244"
            ],[
                "id" => 8, 
                "nombre" => "anguilla", 
                "nombre_en" => "anguilla", 
                "iso_alfa2" => "AI", 
                "iso_alfa3" => "AIA", 
                "iso_num" => 660, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "264"
            ],[
                "id" => 9, 
                "nombre" => "antártida", 
                "nombre_en" => "antarctica", 
                "iso_alfa2" => "AQ", 
                "iso_alfa3" => "ATA", 
                "iso_num" => 10, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "672"
            ],[
                "id" => 10, 
                "nombre" => "antigua y barbuda", 
                "nombre_en" => "antigua and barbuda", 
                "iso_alfa2" => "AG", 
                "iso_alfa3" => "ATG", 
                "iso_num" => 28, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "1268"
            ],[
                "id" => 11, 
                "nombre" => "afganistán", 
                "nombre_en" => "afghanistan", 
                "iso_alfa2" => "AF", 
                "iso_alfa3" => "AFG", 
                "iso_num" => 4, 
                "lenguaje" => "FA", 
                "tel_prefijo" => "93"
            ],[
                "id" => 12, 
                "nombre" => "armenia", 
                "nombre_en" => "armenia", 
                "iso_alfa2" => "AM", 
                "iso_alfa3" => "ARM", 
                "iso_num" => 51, 
                "lenguaje" => "HY", 
                "tel_prefijo" => "374"
            ],[
                "id" => 13, 
                "nombre" => "aruba", 
                "nombre_en" => "aruba", 
                "iso_alfa2" => "AW", 
                "iso_alfa3" => "ABW", 
                "iso_num" => 533, 
                "lenguaje" => "NL", 
                "tel_prefijo" => "297"
            ],[
                "id" => 14, 
                "nombre" => "australia", 
                "nombre_en" => "australia", 
                "iso_alfa2" => "AU", 
                "iso_alfa3" => "AUS", 
                "iso_num" => 36, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "61"
            ],[
                "id" => 15, 
                "nombre" => "austria", 
                "nombre_en" => "austria", 
                "iso_alfa2" => "AT", 
                "iso_alfa3" => "AUT", 
                "iso_num" => 40, 
                "lenguaje" => "DE", 
                "tel_prefijo" => "43"
            ],[
                "id" => 16, 
                "nombre" => "azerbaiyán", 
                "nombre_en" => "azerbaijan", 
                "iso_alfa2" => "AZ", 
                "iso_alfa3" => "AZE", 
                "iso_num" => 31, 
                "lenguaje" => "AZ", 
                "tel_prefijo" => "994"
            ],[
                "id" => 17, 
                "nombre" => "bahamas", 
                "nombre_en" => "bahamas", 
                "iso_alfa2" => "BS", 
                "iso_alfa3" => "BHS", 
                "iso_num" => 44, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "242"
            ],[
                "id" => 18, 
                "nombre" => "bahréin", 
                "nombre_en" => "bahrain", 
                "iso_alfa2" => "BH", 
                "iso_alfa3" => "BHR", 
                "iso_num" => 48, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "973"
            ],[
                "id" => 19, 
                "nombre" => "bangladesh", 
                "nombre_en" => "bangladesh", 
                "iso_alfa2" => "BD", 
                "iso_alfa3" => "BGD", 
                "iso_num" => 50, 
                "lenguaje" => "BN", 
                "tel_prefijo" => "880"
            ],[
                "id" => 20, 
                "nombre" => "barbados", 
                "nombre_en" => "barbados", 
                "iso_alfa2" => "BB", 
                "iso_alfa3" => "BRB", 
                "iso_num" => 52, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "246"
            ],[
                "id" => 21, 
                "nombre" => "bielorrusia", 
                "nombre_en" => "belarus", 
                "iso_alfa2" => "BY", 
                "iso_alfa3" => "BLR", 
                "iso_num" => 112, 
                "lenguaje" => "BE", 
                "tel_prefijo" => "375"
            ],[
                "id" => 22, 
                "nombre" => "bélgica", 
                "nombre_en" => "belgium", 
                "iso_alfa2" => "BE", 
                "iso_alfa3" => "BEL", 
                "iso_num" => 56, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "32"
            ],[
                "id" => 23, 
                "nombre" => "belice", 
                "nombre_en" => "belize", 
                "iso_alfa2" => "BZ", 
                "iso_alfa3" => "BLZ", 
                "iso_num" => 84, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "501"
            ],[
                "id" => 24, 
                "nombre" => "benin", 
                "nombre_en" => "benin", 
                "iso_alfa2" => "BJ", 
                "iso_alfa3" => "BEN", 
                "iso_num" => 204, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "229"
            ],[
                "id" => 25, 
                "nombre" => "bermudas", 
                "nombre_en" => "bermuda", 
                "iso_alfa2" => "BM", 
                "iso_alfa3" => "BMU", 
                "iso_num" => 60, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "441"
            ],[
                "id" => 26, 
                "nombre" => "bhután", 
                "nombre_en" => "bhutan", 
                "iso_alfa2" => "BT", 
                "iso_alfa3" => "BTN", 
                "iso_num" => 64, 
                "lenguaje" => "DZ", 
                "tel_prefijo" => "975"
            ],[
                "id" => 27, 
                "nombre" => "bolivia", 
                "nombre_en" => "bolivia", 
                "iso_alfa2" => "BO", 
                "iso_alfa3" => "BOL", 
                "iso_num" => 68, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "591"
            ],[
                "id" => 28, 
                "nombre" => "bonaire, san eustaquio y saba", 
                "nombre_en" => "bonaire, sint eustatius and saba", 
                "iso_alfa2" => "BQ", 
                "iso_alfa3" => "BES", 
                "iso_num" => 535, 
                "lenguaje" => "NL", 
                "tel_prefijo" => "599"
            ],[
                "id" => 29, 
                "nombre" => "bosnia y herzegovina", 
                "nombre_en" => "bosnia and herzegovina", 
                "iso_alfa2" => "BA", 
                "iso_alfa3" => "BIH", 
                "iso_num" => 70, 
                "lenguaje" => "BS", 
                "tel_prefijo" => "387"
            ],[
                "id" => 30, 
                "nombre" => "botsuana", 
                "nombre_en" => "botswana", 
                "iso_alfa2" => "BW", 
                "iso_alfa3" => "BWA", 
                "iso_num" => 72, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "267"
            ],[
                "id" => 31, 
                "nombre" => "isla bouvet", 
                "nombre_en" => "bouvet island", 
                "iso_alfa2" => "BV", 
                "iso_alfa3" => "BVT", 
                "iso_num" => 74, 
                "lenguaje" => "NO", 
                "tel_prefijo" => ""
            ],[
                "id" => 32, 
                "nombre" => "brasil", 
                "nombre_en" => "brazil", 
                "iso_alfa2" => "BR", 
                "iso_alfa3" => "BRA", 
                "iso_num" => 76, 
                "lenguaje" => "PT", 
                "tel_prefijo" => "55"
            ],[
                "id" => 33, 
                "nombre" => "territorio británico del océano índico", 
                "nombre_en" => "british indian ocean territory", 
                "iso_alfa2" => "IO", 
                "iso_alfa3" => "IOT", 
                "iso_num" => 86, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "284"
            ],[
                "id" => 34, 
                "nombre" => "islas vírgenes británicas", 
                "nombre_en" => "british virgin islands", 
                "iso_alfa2" => "VG", 
                "iso_alfa3" => "VGB", 
                "iso_num" => 92, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "1340"
            ],[
                "id" => 35, 
                "nombre" => "brunéi", 
                "nombre_en" => "brunei darussalam", 
                "iso_alfa2" => "BN", 
                "iso_alfa3" => "BRN", 
                "iso_num" => 96, 
                "lenguaje" => "MS", 
                "tel_prefijo" => "673"
            ],[
                "id" => 36, 
                "nombre" => "bulgaria", 
                "nombre_en" => "bulgaria", 
                "iso_alfa2" => "BG", 
                "iso_alfa3" => "BGR", 
                "iso_num" => 100, 
                "lenguaje" => "BG", 
                "tel_prefijo" => "359"
            ],[
                "id" => 37, 
                "nombre" => "burkina faso", 
                "nombre_en" => "burkina faso", 
                "iso_alfa2" => "BF", 
                "iso_alfa3" => "BFA", 
                "iso_num" => 854, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "226"
            ],[
                "id" => 38, 
                "nombre" => "burundi", 
                "nombre_en" => "burundi", 
                "iso_alfa2" => "BI", 
                "iso_alfa3" => "BDI", 
                "iso_num" => 108, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "257"
            ],[
                "id" => 39, 
                "nombre" => "camboya", 
                "nombre_en" => "cambodia", 
                "iso_alfa2" => "KH", 
                "iso_alfa3" => "KHM", 
                "iso_num" => 116, 
                "lenguaje" => "KM", 
                "tel_prefijo" => "855"
            ],[
                "id" => 40, 
                "nombre" => "camerún", 
                "nombre_en" => "cameroon", 
                "iso_alfa2" => "CM", 
                "iso_alfa3" => "CMR", 
                "iso_num" => 120, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "237"
            ],[
                "id" => 41, 
                "nombre" => "canadá", 
                "nombre_en" => "canada", 
                "iso_alfa2" => "CA", 
                "iso_alfa3" => "CAN", 
                "iso_num" => 124, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "1"
            ],[
                "id" => 42, 
                "nombre" => "cabo verde", 
                "nombre_en" => "cape verde", 
                "iso_alfa2" => "CV", 
                "iso_alfa3" => "CPV", 
                "iso_num" => 132, 
                "lenguaje" => "PT", 
                "tel_prefijo" => "238"
            ],[
                "id" => 43, 
                "nombre" => "islas caimán", 
                "nombre_en" => "cayman islands", 
                "iso_alfa2" => "KY", 
                "iso_alfa3" => "CYM", 
                "iso_num" => 136, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "345"
            ],[
                "id" => 44, 
                "nombre" => "república centroafricana", 
                "nombre_en" => "central african republic", 
                "iso_alfa2" => "CF", 
                "iso_alfa3" => "CAF", 
                "iso_num" => 140, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "236"
            ],[
                "id" => 45, 
                "nombre" => "chad", 
                "nombre_en" => "chad", 
                "iso_alfa2" => "TD", 
                "iso_alfa3" => "TCD", 
                "iso_num" => 148, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "235"
            ],[
                "id" => 47, 
                "nombre" => "china", 
                "nombre_en" => "china", 
                "iso_alfa2" => "CN", 
                "iso_alfa3" => "CHN", 
                "iso_num" => 156, 
                "lenguaje" => "ZH", 
                "tel_prefijo" => "86"
            ],[
                "id" => 48, 
                "nombre" => "isla de navidad", 
                "nombre_en" => "christmas island", 
                "iso_alfa2" => "CX", 
                "iso_alfa3" => "CXR", 
                "iso_num" => 162, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "61"
            ],[
                "id" => 49, 
                "nombre" => "islas cocos", 
                "nombre_en" => "cocos (keeling) islands", 
                "iso_alfa2" => "CC", 
                "iso_alfa3" => "CCK", 
                "iso_num" => 166, 
                "lenguaje" => "MS", 
                "tel_prefijo" => "61"
            ],[
                "id" => 50, 
                "nombre" => "colombia", 
                "nombre_en" => "colombia", 
                "iso_alfa2" => "CO", 
                "iso_alfa3" => "COL", 
                "iso_num" => 170, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "57"
            ],[
                "id" => 51, 
                "nombre" => "comoras", 
                "nombre_en" => "comoros", 
                "iso_alfa2" => "KM", 
                "iso_alfa3" => "COM", 
                "iso_num" => 174, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "269"
            ],[
                "id" => 52, 
                "nombre" => "congo", 
                "nombre_en" => "congo (brazzaville)", 
                "iso_alfa2" => "CG", 
                "iso_alfa3" => "COG", 
                "iso_num" => 178, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "242"
            ],[
                "id" => 53, 
                "nombre" => "república democrática del congo", 
                "nombre_en" => "congo dr", 
                "iso_alfa2" => "CD", 
                "iso_alfa3" => "COD", 
                "iso_num" => 180, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "243"
            ],[
                "id" => 54, 
                "nombre" => "islas cook", 
                "nombre_en" => "cook islands", 
                "iso_alfa2" => "CK", 
                "iso_alfa3" => "COK", 
                "iso_num" => 184, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "682"
            ],[
                "id" => 55, 
                "nombre" => "costa rica", 
                "nombre_en" => "costa rica", 
                "iso_alfa2" => "CR", 
                "iso_alfa3" => "CRI", 
                "iso_num" => 188, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "506"
            ],[
                "id" => 56, 
                "nombre" => "costa de marfil", 
                "nombre_en" => "côte d'ivoire", 
                "iso_alfa2" => "CI", 
                "iso_alfa3" => "CIV", 
                "iso_num" => 384, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "225"
            ],[
                "id" => 57, 
                "nombre" => "croacia", 
                "nombre_en" => "croatia", 
                "iso_alfa2" => "HR", 
                "iso_alfa3" => "HRV", 
                "iso_num" => 191, 
                "lenguaje" => "HR", 
                "tel_prefijo" => "385"
            ],[
                "id" => 58, 
                "nombre" => "cuba", 
                "nombre_en" => "cuba", 
                "iso_alfa2" => "CU", 
                "iso_alfa3" => "CUB", 
                "iso_num" => 192, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "53"
            ],[
                "id" => 59, 
                "nombre" => "curazao", 
                "nombre_en" => "curaçao", 
                "iso_alfa2" => "CW", 
                "iso_alfa3" => "CUW", 
                "iso_num" => 531, 
                "lenguaje" => "NL", 
                "tel_prefijo" => "599-9"
            ],[
                "id" => 60, 
                "nombre" => "chipre", 
                "nombre_en" => "cyprus", 
                "iso_alfa2" => "CY", 
                "iso_alfa3" => "CYP", 
                "iso_num" => 196, 
                "lenguaje" => "EL", 
                "tel_prefijo" => "357"
            ],[
                "id" => 61, 
                "nombre" => "república checa", 
                "nombre_en" => "czech republic", 
                "iso_alfa2" => "CZ", 
                "iso_alfa3" => "CZE", 
                "iso_num" => 203, 
                "lenguaje" => "CS", 
                "tel_prefijo" => "42"
            ],[
                "id" => 62, 
                "nombre" => "dinamarca", 
                "nombre_en" => "denmark", 
                "iso_alfa2" => "DK", 
                "iso_alfa3" => "DNK", 
                "iso_num" => 208, 
                "lenguaje" => "DA", 
                "tel_prefijo" => "45"
            ],[
                "id" => 63, 
                "nombre" => "yibuti", 
                "nombre_en" => "djibouti", 
                "iso_alfa2" => "DJ", 
                "iso_alfa3" => "DJI", 
                "iso_num" => 262, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "253"
            ],[
                "id" => 64, 
                "nombre" => "dominica", 
                "nombre_en" => "dominica", 
                "iso_alfa2" => "DM", 
                "iso_alfa3" => "DMA", 
                "iso_num" => 212, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "767"
            ],[
                "id" => 65, 
                "nombre" => "república dominicana", 
                "nombre_en" => "dominican republic", 
                "iso_alfa2" => "DO", 
                "iso_alfa3" => "DOM", 
                "iso_num" => 214, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "809"
            ],[
                "id" => 66, 
                "nombre" => "timor oriental", 
                "nombre_en" => "east timor", 
                "iso_alfa2" => "TL", 
                "iso_alfa3" => "TLS", 
                "iso_num" => 626, 
                "lenguaje" => "TE", 
                "tel_prefijo" => "670"
            ],[
                "id" => 67, 
                "nombre" => "ecuador", 
                "nombre_en" => "ecuador", 
                "iso_alfa2" => "EC", 
                "iso_alfa3" => "ECU", 
                "iso_num" => 218, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "593"
            ],[
                "id" => 68, 
                "nombre" => "egipto", 
                "nombre_en" => "egypt", 
                "iso_alfa2" => "EG", 
                "iso_alfa3" => "EGY", 
                "iso_num" => 818, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "20"
            ],[
                "id" => 69, 
                "nombre" => "el salvador", 
                "nombre_en" => "el salvador", 
                "iso_alfa2" => "SV", 
                "iso_alfa3" => "SLV", 
                "iso_num" => 222, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "503"
            ],[
                "id" => 70, 
                "nombre" => "guinea ecuatorial", 
                "nombre_en" => "equatorial guinea", 
                "iso_alfa2" => "GQ", 
                "iso_alfa3" => "GNQ", 
                "iso_num" => 226, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "240"
            ],[
                "id" => 71, 
                "nombre" => "eritrea", 
                "nombre_en" => "eritrea", 
                "iso_alfa2" => "ER", 
                "iso_alfa3" => "ERI", 
                "iso_num" => 232, 
                "lenguaje" => "AA", 
                "tel_prefijo" => "291"
            ],[
                "id" => 72, 
                "nombre" => "estonia", 
                "nombre_en" => "estonia", 
                "iso_alfa2" => "EE", 
                "iso_alfa3" => "EST", 
                "iso_num" => 233, 
                "lenguaje" => "ET", 
                "tel_prefijo" => "372"
            ],[
                "id" => 73, 
                "nombre" => "etiopía", 
                "nombre_en" => "ethiopia", 
                "iso_alfa2" => "ET", 
                "iso_alfa3" => "ETH", 
                "iso_num" => 231, 
                "lenguaje" => "AM", 
                "tel_prefijo" => "251"
            ],[
                "id" => 74, 
                "nombre" => "islas malvinas", 
                "nombre_en" => "falkland islands", 
                "iso_alfa2" => "FK", 
                "iso_alfa3" => "FLK", 
                "iso_num" => 238, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "500"
            ],[
                "id" => 75, 
                "nombre" => "islas feroe", 
                "nombre_en" => "faroe islands", 
                "iso_alfa2" => "FO", 
                "iso_alfa3" => "FRO", 
                "iso_num" => 234, 
                "lenguaje" => "FO", 
                "tel_prefijo" => "298"
            ],[
                "id" => 76, 
                "nombre" => "fiyi", 
                "nombre_en" => "fiji", 
                "iso_alfa2" => "FJ", 
                "iso_alfa3" => "FJI", 
                "iso_num" => 242, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "679"
            ],[
                "id" => 77, 
                "nombre" => "finlandia", 
                "nombre_en" => "finland", 
                "iso_alfa2" => "FI", 
                "iso_alfa3" => "FIN", 
                "iso_num" => 246, 
                "lenguaje" => "FI", 
                "tel_prefijo" => "358"
            ],[
                "id" => 78, 
                "nombre" => "francia", 
                "nombre_en" => "france", 
                "iso_alfa2" => "FR", 
                "iso_alfa3" => "FRA", 
                "iso_num" => 250, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "33"
            ],[
                "id" => 79, 
                "nombre" => "guayana francesa", 
                "nombre_en" => "french guiana", 
                "iso_alfa2" => "GF", 
                "iso_alfa3" => "GUF", 
                "iso_num" => 254, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "594"
            ],[
                "id" => 80, 
                "nombre" => "polinesia francesa", 
                "nombre_en" => "french polynesia", 
                "iso_alfa2" => "PF", 
                "iso_alfa3" => "PYF", 
                "iso_num" => 258, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "689"
            ],[
                "id" => 81, 
                "nombre" => "territorios australes franceses", 
                "nombre_en" => "french southern territories", 
                "iso_alfa2" => "TF", 
                "iso_alfa3" => "ATF", 
                "iso_num" => 260, 
                "lenguaje" => "FR", 
                "tel_prefijo" => ""
            ],[
                "id" => 82, 
                "nombre" => "gabón", 
                "nombre_en" => "gabon", 
                "iso_alfa2" => "GA", 
                "iso_alfa3" => "GAB", 
                "iso_num" => 266, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "241"
            ],[
                "id" => 83, 
                "nombre" => "gambia", 
                "nombre_en" => "gambia", 
                "iso_alfa2" => "GM", 
                "iso_alfa3" => "GMB", 
                "iso_num" => 270, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "220"
            ],[
                "id" => 84, 
                "nombre" => "georgia", 
                "nombre_en" => "georgia", 
                "iso_alfa2" => "GE", 
                "iso_alfa3" => "GEO", 
                "iso_num" => 268, 
                "lenguaje" => "KA", 
                "tel_prefijo" => "995"
            ],[
                "id" => 85, 
                "nombre" => "alemania", 
                "nombre_en" => "germany", 
                "iso_alfa2" => "DE", 
                "iso_alfa3" => "DEU", 
                "iso_num" => 276, 
                "lenguaje" => "DE", 
                "tel_prefijo" => "49"
            ],[
                "id" => 86, 
                "nombre" => "ghana", 
                "nombre_en" => "ghana", 
                "iso_alfa2" => "GH", 
                "iso_alfa3" => "GHA", 
                "iso_num" => 288, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "233"
            ],[
                "id" => 87, 
                "nombre" => "gibraltar", 
                "nombre_en" => "gibraltar", 
                "iso_alfa2" => "GI", 
                "iso_alfa3" => "GIB", 
                "iso_num" => 292, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "350"
            ],[
                "id" => 88, 
                "nombre" => "grecia", 
                "nombre_en" => "greece", 
                "iso_alfa2" => "GR", 
                "iso_alfa3" => "GRC", 
                "iso_num" => 300, 
                "lenguaje" => "EL", 
                "tel_prefijo" => "30"
            ],[
                "id" => 89, 
                "nombre" => "groenlandia", 
                "nombre_en" => "greenland", 
                "iso_alfa2" => "GL", 
                "iso_alfa3" => "GRL", 
                "iso_num" => 304, 
                "lenguaje" => "KL", 
                "tel_prefijo" => "299"
            ],[
                "id" => 90, 
                "nombre" => "granada", 
                "nombre_en" => "grenada", 
                "iso_alfa2" => "GD", 
                "iso_alfa3" => "GRD", 
                "iso_num" => 308, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "473"
            ],[
                "id" => 91, 
                "nombre" => "guadalupe", 
                "nombre_en" => "guadeloupe", 
                "iso_alfa2" => "GP", 
                "iso_alfa3" => "GLP", 
                "iso_num" => 312, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "590"
            ],[
                "id" => 92, 
                "nombre" => "guam", 
                "nombre_en" => "guam", 
                "iso_alfa2" => "GU", 
                "iso_alfa3" => "GUM", 
                "iso_num" => 316, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "671"
            ],[
                "id" => 93, 
                "nombre" => "guatemala", 
                "nombre_en" => "guatemala", 
                "iso_alfa2" => "GT", 
                "iso_alfa3" => "GTM", 
                "iso_num" => 320, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "502"
            ],[
                "id" => 94, 
                "nombre" => "guernsey", 
                "nombre_en" => "guernsey", 
                "iso_alfa2" => "GG", 
                "iso_alfa3" => "GGY", 
                "iso_num" => 831, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "44-14"
            ],[
                "id" => 95, 
                "nombre" => "guinea", 
                "nombre_en" => "guinea", 
                "iso_alfa2" => "GN", 
                "iso_alfa3" => "GIN", 
                "iso_num" => 324, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "224"
            ],[
                "id" => 96, 
                "nombre" => "guinea-bissau", 
                "nombre_en" => "guinea-bissau", 
                "iso_alfa2" => "GW", 
                "iso_alfa3" => "GNB", 
                "iso_num" => 624, 
                "lenguaje" => "PT", 
                "tel_prefijo" => "245"
            ],[
                "id" => 97, 
                "nombre" => "guyana", 
                "nombre_en" => "guyana", 
                "iso_alfa2" => "GY", 
                "iso_alfa3" => "GUY", 
                "iso_num" => 328, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "592"
            ],[
                "id" => 98, 
                "nombre" => "haití", 
                "nombre_en" => "haiti", 
                "iso_alfa2" => "HT", 
                "iso_alfa3" => "HTI", 
                "iso_num" => 332, 
                "lenguaje" => "HT", 
                "tel_prefijo" => "509"
            ],[
                "id" => 99, 
                "nombre" => "islas heard y mcdonald", 
                "nombre_en" => "heard island and mcdonald islands", 
                "iso_alfa2" => "HM", 
                "iso_alfa3" => "HMD", 
                "iso_num" => 334, 
                "lenguaje" => "EN", 
                "tel_prefijo" => ""
            ],[
                "id" => 100, 
                "nombre" => "honduras", 
                "nombre_en" => "honduras", 
                "iso_alfa2" => "HN", 
                "iso_alfa3" => "HND", 
                "iso_num" => 340, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "504"
            ],[
                "id" => 101, 
                "nombre" => "hong kong", 
                "nombre_en" => "hong kong", 
                "iso_alfa2" => "HK", 
                "iso_alfa3" => "HKG", 
                "iso_num" => 344, 
                "lenguaje" => "ZH", 
                "tel_prefijo" => "852"
            ],[
                "id" => 102, 
                "nombre" => "hungría", 
                "nombre_en" => "hungary", 
                "iso_alfa2" => "HU", 
                "iso_alfa3" => "HUN", 
                "iso_num" => 348, 
                "lenguaje" => "HU", 
                "tel_prefijo" => "36"
            ],[
                "id" => 103, 
                "nombre" => "islandia", 
                "nombre_en" => "iceland", 
                "iso_alfa2" => "IS", 
                "iso_alfa3" => "ISL", 
                "iso_num" => 352, 
                "lenguaje" => "IS", 
                "tel_prefijo" => "354"
            ],[
                "id" => 104, 
                "nombre" => "india", 
                "nombre_en" => "india", 
                "iso_alfa2" => "IN", 
                "iso_alfa3" => "IND", 
                "iso_num" => 356, 
                "lenguaje" => "TA", 
                "tel_prefijo" => "91"
            ],[
                "id" => 105, 
                "nombre" => "indonesia", 
                "nombre_en" => "indonesia", 
                "iso_alfa2" => "ID", 
                "iso_alfa3" => "IDN", 
                "iso_num" => 360, 
                "lenguaje" => "ID", 
                "tel_prefijo" => "62"
            ],[
                "id" => 106, 
                "nombre" => "irán", 
                "nombre_en" => "iran", 
                "iso_alfa2" => "IR", 
                "iso_alfa3" => "IRN", 
                "iso_num" => 364, 
                "lenguaje" => "FA", 
                "tel_prefijo" => "98"
            ],[
                "id" => 107, 
                "nombre" => "iraq", 
                "nombre_en" => "iraq", 
                "iso_alfa2" => "IQ", 
                "iso_alfa3" => "IRQ", 
                "iso_num" => 368, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "964"
            ],[
                "id" => 108, 
                "nombre" => "irlanda", 
                "nombre_en" => "ireland", 
                "iso_alfa2" => "IE", 
                "iso_alfa3" => "IRL", 
                "iso_num" => 372, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "353"
            ],[
                "id" => 109, 
                "nombre" => "isla de man", 
                "nombre_en" => "isle of man", 
                "iso_alfa2" => "IM", 
                "iso_alfa3" => "IMN", 
                "iso_num" => 833, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "44-16"
            ],[
                "id" => 110, 
                "nombre" => "israel", 
                "nombre_en" => "israel", 
                "iso_alfa2" => "IL", 
                "iso_alfa3" => "ISR", 
                "iso_num" => 376, 
                "lenguaje" => "HE", 
                "tel_prefijo" => "972"
            ],[
                "id" => 111, 
                "nombre" => "italia", 
                "nombre_en" => "italy", 
                "iso_alfa2" => "IT", 
                "iso_alfa3" => "ITA", 
                "iso_num" => 380, 
                "lenguaje" => "IT", 
                "tel_prefijo" => "39"
            ],[
                "id" => 112, 
                "nombre" => "jamaica", 
                "nombre_en" => "jamaica", 
                "iso_alfa2" => "JM", 
                "iso_alfa3" => "JAM", 
                "iso_num" => 388, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "1"
            ],[
                "id" => 113, 
                "nombre" => "japón", 
                "nombre_en" => "japan", 
                "iso_alfa2" => "JP", 
                "iso_alfa3" => "JPN", 
                "iso_num" => 392, 
                "lenguaje" => "JA", 
                "tel_prefijo" => "81"
            ],[
                "id" => 114, 
                "nombre" => "jersey ", 
                "nombre_en" => "jersey", 
                "iso_alfa2" => "JE", 
                "iso_alfa3" => "JEY", 
                "iso_num" => 832, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "44-15"
            ],[
                "id" => 115, 
                "nombre" => "jordania", 
                "nombre_en" => "jordan", 
                "iso_alfa2" => "JO", 
                "iso_alfa3" => "JOR", 
                "iso_num" => 400, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "962"
            ],[
                "id" => 116, 
                "nombre" => "kazajstán", 
                "nombre_en" => "kazakhstan", 
                "iso_alfa2" => "KZ", 
                "iso_alfa3" => "KAZ", 
                "iso_num" => 398, 
                "lenguaje" => "KK", 
                "tel_prefijo" => "7"
            ],[
                "id" => 117, 
                "nombre" => "kenia", 
                "nombre_en" => "kenya", 
                "iso_alfa2" => "KE", 
                "iso_alfa3" => "KEN", 
                "iso_num" => 404, 
                "lenguaje" => "SW", 
                "tel_prefijo" => "254"
            ],[
                "id" => 118, 
                "nombre" => "kiribati", 
                "nombre_en" => "kiribati", 
                "iso_alfa2" => "KI", 
                "iso_alfa3" => "KIR", 
                "iso_num" => 296, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "686"
            ],[
                "id" => 119, 
                "nombre" => "kosovo", 
                "nombre_en" => "kosovo", 
                "iso_alfa2" => "XK", 
                "iso_alfa3" => "XKX", 
                "iso_num" => 0, 
                "lenguaje" => "SR", 
                "tel_prefijo" => "381"
            ],[
                "id" => 120, 
                "nombre" => "kuwait", 
                "nombre_en" => "kuwait", 
                "iso_alfa2" => "KW", 
                "iso_alfa3" => "KWT", 
                "iso_num" => 414, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "965"
            ],[
                "id" => 121, 
                "nombre" => "kirguistán", 
                "nombre_en" => "kyrgyzstan", 
                "iso_alfa2" => "KG", 
                "iso_alfa3" => "KGZ", 
                "iso_num" => 417, 
                "lenguaje" => "KY", 
                "tel_prefijo" => "7"
            ],[
                "id" => 122, 
                "nombre" => "laos", 
                "nombre_en" => "laos", 
                "iso_alfa2" => "LA", 
                "iso_alfa3" => "LAO", 
                "iso_num" => 418, 
                "lenguaje" => "LO", 
                "tel_prefijo" => "856"
            ],[
                "id" => 123, 
                "nombre" => "letonia", 
                "nombre_en" => "latvia", 
                "iso_alfa2" => "LV", 
                "iso_alfa3" => "LVA", 
                "iso_num" => 428, 
                "lenguaje" => "LV", 
                "tel_prefijo" => "371"
            ],[
                "id" => 124, 
                "nombre" => "líbano", 
                "nombre_en" => "lebanon", 
                "iso_alfa2" => "LB", 
                "iso_alfa3" => "LBN", 
                "iso_num" => 422, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "961"
            ],[
                "id" => 125, 
                "nombre" => "lesotho", 
                "nombre_en" => "lesotho", 
                "iso_alfa2" => "LS", 
                "iso_alfa3" => "LSO", 
                "iso_num" => 426, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "266"
            ],[
                "id" => 126, 
                "nombre" => "liberia", 
                "nombre_en" => "liberia", 
                "iso_alfa2" => "LR", 
                "iso_alfa3" => "LBR", 
                "iso_num" => 430, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "231"
            ],[
                "id" => 127, 
                "nombre" => "libia", 
                "nombre_en" => "libya", 
                "iso_alfa2" => "LY", 
                "iso_alfa3" => "LBY", 
                "iso_num" => 434, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "218"
            ],[
                "id" => 128, 
                "nombre" => "liechtenstein", 
                "nombre_en" => "liechtenstein", 
                "iso_alfa2" => "LI", 
                "iso_alfa3" => "LIE", 
                "iso_num" => 438, 
                "lenguaje" => "DE", 
                "tel_prefijo" => "41"
            ],[
                "id" => 129, 
                "nombre" => "lituania", 
                "nombre_en" => "lithuania", 
                "iso_alfa2" => "LT", 
                "iso_alfa3" => "LTU", 
                "iso_num" => 440, 
                "lenguaje" => "LT", 
                "tel_prefijo" => "370"
            ],[
                "id" => 130, 
                "nombre" => "luxemburgo", 
                "nombre_en" => "luxembourg", 
                "iso_alfa2" => "LU", 
                "iso_alfa3" => "LUX", 
                "iso_num" => 442, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "352"
            ],[
                "id" => 131, 
                "nombre" => "macao", 
                "nombre_en" => "macau", 
                "iso_alfa2" => "MO", 
                "iso_alfa3" => "MAC", 
                "iso_num" => 446, 
                "lenguaje" => "ZH", 
                "tel_prefijo" => "853"
            ],[
                "id" => 132, 
                "nombre" => "ary macedonia", 
                "nombre_en" => "macedonia", 
                "iso_alfa2" => "MK", 
                "iso_alfa3" => "MKD", 
                "iso_num" => 807, 
                "lenguaje" => "MK", 
                "tel_prefijo" => "389"
            ],[
                "id" => 133, 
                "nombre" => "madagascar", 
                "nombre_en" => "madagascar", 
                "iso_alfa2" => "MG", 
                "iso_alfa3" => "MDG", 
                "iso_num" => 450, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "261"
            ],[
                "id" => 134, 
                "nombre" => "malawi", 
                "nombre_en" => "malawi", 
                "iso_alfa2" => "MW", 
                "iso_alfa3" => "MWI", 
                "iso_num" => 454, 
                "lenguaje" => "NY", 
                "tel_prefijo" => "265"
            ],[
                "id" => 135, 
                "nombre" => "malasia", 
                "nombre_en" => "malaysia", 
                "iso_alfa2" => "MY", 
                "iso_alfa3" => "MYS", 
                "iso_num" => 458, 
                "lenguaje" => "MS", 
                "tel_prefijo" => "60"
            ],[
                "id" => 136, 
                "nombre" => "maldivas", 
                "nombre_en" => "maldives", 
                "iso_alfa2" => "MV", 
                "iso_alfa3" => "MDV", 
                "iso_num" => 462, 
                "lenguaje" => "DI", 
                "tel_prefijo" => "960"
            ],[
                "id" => 137, 
                "nombre" => "malí", 
                "nombre_en" => "mali", 
                "iso_alfa2" => "ML", 
                "iso_alfa3" => "MLI", 
                "iso_num" => 466, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "223"
            ],[
                "id" => 138, 
                "nombre" => "malta", 
                "nombre_en" => "malta", 
                "iso_alfa2" => "MT", 
                "iso_alfa3" => "MLT", 
                "iso_num" => 470, 
                "lenguaje" => "MT", 
                "tel_prefijo" => "356"
            ],[
                "id" => 139, 
                "nombre" => "islas marshall", 
                "nombre_en" => "marshall islands", 
                "iso_alfa2" => "MH", 
                "iso_alfa3" => "MHL", 
                "iso_num" => 584, 
                "lenguaje" => "MH", 
                "tel_prefijo" => "692"
            ],[
                "id" => 140, 
                "nombre" => "martinica", 
                "nombre_en" => "martinique", 
                "iso_alfa2" => "MQ", 
                "iso_alfa3" => "MTQ", 
                "iso_num" => 474, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "596"
            ],[
                "id" => 141, 
                "nombre" => "mauritania", 
                "nombre_en" => "mauritania", 
                "iso_alfa2" => "MR", 
                "iso_alfa3" => "MRT", 
                "iso_num" => 478, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "222"
            ],[
                "id" => 142, 
                "nombre" => "mauricio", 
                "nombre_en" => "mauritius", 
                "iso_alfa2" => "MU", 
                "iso_alfa3" => "MUS", 
                "iso_num" => 480, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "230"
            ],[
                "id" => 143, 
                "nombre" => "mayotte", 
                "nombre_en" => "mayotte", 
                "iso_alfa2" => "YT", 
                "iso_alfa3" => "MYT", 
                "iso_num" => 175, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "269"
            ],[
                "id" => 144, 
                "nombre" => "méxico", 
                "nombre_en" => "mexico", 
                "iso_alfa2" => "MX", 
                "iso_alfa3" => "MEX", 
                "iso_num" => 484, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "52"
            ],[
                "id" => 145, 
                "nombre" => "micronesia", 
                "nombre_en" => "micronesia", 
                "iso_alfa2" => "FM", 
                "iso_alfa3" => "FSM", 
                "iso_num" => 583, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "691"
            ],[
                "id" => 146, 
                "nombre" => "moldavia", 
                "nombre_en" => "moldova", 
                "iso_alfa2" => "MD", 
                "iso_alfa3" => "MDA", 
                "iso_num" => 498, 
                "lenguaje" => "RO", 
                "tel_prefijo" => "373"
            ],[
                "id" => 147, 
                "nombre" => "mónaco", 
                "nombre_en" => "monaco", 
                "iso_alfa2" => "MC", 
                "iso_alfa3" => "MCO", 
                "iso_num" => 492, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "337"
            ],[
                "id" => 148, 
                "nombre" => "mongolia", 
                "nombre_en" => "mongolia", 
                "iso_alfa2" => "MN", 
                "iso_alfa3" => "MNG", 
                "iso_num" => 496, 
                "lenguaje" => "MN", 
                "tel_prefijo" => "976"
            ],[
                "id" => 149, 
                "nombre" => "montenegro", 
                "nombre_en" => "montenegro", 
                "iso_alfa2" => "ME", 
                "iso_alfa3" => "MNE", 
                "iso_num" => 499, 
                "lenguaje" => "SR", 
                "tel_prefijo" => "381"
            ],[
                "id" => 150, 
                "nombre" => "montserrat", 
                "nombre_en" => "montserrat", 
                "iso_alfa2" => "MS", 
                "iso_alfa3" => "MSR", 
                "iso_num" => 500, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "1"
            ],[
                "id" => 151, 
                "nombre" => "marruecos", 
                "nombre_en" => "morocco", 
                "iso_alfa2" => "MA", 
                "iso_alfa3" => "MAR", 
                "iso_num" => 504, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "212"
            ],[
                "id" => 152, 
                "nombre" => "mozambique", 
                "nombre_en" => "mozambique", 
                "iso_alfa2" => "MZ", 
                "iso_alfa3" => "MOZ", 
                "iso_num" => 508, 
                "lenguaje" => "PT", 
                "tel_prefijo" => "258"
            ],[
                "id" => 153, 
                "nombre" => "myanmar", 
                "nombre_en" => "myanmar", 
                "iso_alfa2" => "MM", 
                "iso_alfa3" => "MMR", 
                "iso_num" => 104, 
                "lenguaje" => "MY", 
                "tel_prefijo" => "95"
            ],[
                "id" => 154, 
                "nombre" => "namibia", 
                "nombre_en" => "namibia", 
                "iso_alfa2" => "NA", 
                "iso_alfa3" => "NAM", 
                "iso_num" => 516, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "264"
            ],[
                "id" => 155, 
                "nombre" => "nauru", 
                "nombre_en" => "nauru", 
                "iso_alfa2" => "NR", 
                "iso_alfa3" => "NRU", 
                "iso_num" => 520, 
                "lenguaje" => "NA", 
                "tel_prefijo" => "674"
            ],[
                "id" => 156, 
                "nombre" => "nepal", 
                "nombre_en" => "nepal", 
                "iso_alfa2" => "NP", 
                "iso_alfa3" => "NPL", 
                "iso_num" => 524, 
                "lenguaje" => "NE", 
                "tel_prefijo" => "977"
            ],[
                "id" => 157, 
                "nombre" => "países bajos", 
                "nombre_en" => "netherlands", 
                "iso_alfa2" => "NL", 
                "iso_alfa3" => "NLD", 
                "iso_num" => 528, 
                "lenguaje" => "NL", 
                "tel_prefijo" => "31"
            ],[
                "id" => 158, 
                "nombre" => "antillas holandesas", 
                "nombre_en" => "netherlands antilles", 
                "iso_alfa2" => "AN", 
                "iso_alfa3" => "ANT", 
                "iso_num" => 530, 
                "lenguaje" => "NL", 
                "tel_prefijo" => "599"
            ],[
                "id" => 159, 
                "nombre" => "nueva caledonia", 
                "nombre_en" => "new caledonia", 
                "iso_alfa2" => "NC", 
                "iso_alfa3" => "NCL", 
                "iso_num" => 540, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "687"
            ],[
                "id" => 160, 
                "nombre" => "nueva zelanda", 
                "nombre_en" => "new zealand", 
                "iso_alfa2" => "NZ", 
                "iso_alfa3" => "NZL", 
                "iso_num" => 554, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "64"
            ],[
                "id" => 161, 
                "nombre" => "nicaragua", 
                "nombre_en" => "nicaragua", 
                "iso_alfa2" => "NI", 
                "iso_alfa3" => "NIC", 
                "iso_num" => 558, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "505"
            ],[
                "id" => 162, 
                "nombre" => "níger", 
                "nombre_en" => "niger", 
                "iso_alfa2" => "NE", 
                "iso_alfa3" => "NER", 
                "iso_num" => 562, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "227"
            ],[
                "id" => 163, 
                "nombre" => "nigeria", 
                "nombre_en" => "nigeria", 
                "iso_alfa2" => "NG", 
                "iso_alfa3" => "NGA", 
                "iso_num" => 566, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "234"
            ],[
                "id" => 164, 
                "nombre" => "niue", 
                "nombre_en" => "niue", 
                "iso_alfa2" => "NU", 
                "iso_alfa3" => "NIU", 
                "iso_num" => 570, 
                "lenguaje" => "NI", 
                "tel_prefijo" => "683"
            ],[
                "id" => 165, 
                "nombre" => "isla norfolk", 
                "nombre_en" => "norfolk island", 
                "iso_alfa2" => "NF", 
                "iso_alfa3" => "NFK", 
                "iso_num" => 574, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "672"
            ],[
                "id" => 166, 
                "nombre" => "corea del norte", 
                "nombre_en" => "north korea", 
                "iso_alfa2" => "KP", 
                "iso_alfa3" => "PRK", 
                "iso_num" => 408, 
                "lenguaje" => "KO", 
                "tel_prefijo" => "850"
            ],[
                "id" => 167, 
                "nombre" => "islas marianas del norte", 
                "nombre_en" => "northern mariana islands", 
                "iso_alfa2" => "MP", 
                "iso_alfa3" => "MNP", 
                "iso_num" => 580, 
                "lenguaje" => "FI", 
                "tel_prefijo" => "670"
            ],[
                "id" => 168, 
                "nombre" => "noruega", 
                "nombre_en" => "norway", 
                "iso_alfa2" => "NO", 
                "iso_alfa3" => "NOR", 
                "iso_num" => 578, 
                "lenguaje" => "NO", 
                "tel_prefijo" => "47"
            ],[
                "id" => 169, 
                "nombre" => "omán", 
                "nombre_en" => "oman", 
                "iso_alfa2" => "OM", 
                "iso_alfa3" => "OMN", 
                "iso_num" => 512, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "968"
            ],[
                "id" => 170, 
                "nombre" => "pakistán", 
                "nombre_en" => "pakistan", 
                "iso_alfa2" => "PK", 
                "iso_alfa3" => "PAK", 
                "iso_num" => 586, 
                "lenguaje" => "UR", 
                "tel_prefijo" => "92"
            ],[
                "id" => 171, 
                "nombre" => "palau", 
                "nombre_en" => "palau", 
                "iso_alfa2" => "PW", 
                "iso_alfa3" => "PLW", 
                "iso_num" => 585, 
                "lenguaje" => "PW", 
                "tel_prefijo" => "680"
            ],[
                "id" => 172, 
                "nombre" => "palestina", 
                "nombre_en" => "palestinian territory (gaza strip)", 
                "iso_alfa2" => "PS", 
                "iso_alfa3" => "PSE", 
                "iso_num" => 275, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "970"
            ],[
                "id" => 173, 
                "nombre" => "panamá", 
                "nombre_en" => "panama", 
                "iso_alfa2" => "PA", 
                "iso_alfa3" => "PAN", 
                "iso_num" => 591, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "507"
            ],[
                "id" => 174, 
                "nombre" => "papúa nueva guinea", 
                "nombre_en" => "papua new guinea", 
                "iso_alfa2" => "PG", 
                "iso_alfa3" => "PNG", 
                "iso_num" => 598, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "675"
            ],[
                "id" => 175, 
                "nombre" => "paraguay", 
                "nombre_en" => "paraguay", 
                "iso_alfa2" => "PY", 
                "iso_alfa3" => "PRY", 
                "iso_num" => 600, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "595"
            ],[
                "id" => 176, 
                "nombre" => "perú", 
                "nombre_en" => "peru", 
                "iso_alfa2" => "PE", 
                "iso_alfa3" => "PER", 
                "iso_num" => 604, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "51"
            ],[
                "id" => 177, 
                "nombre" => "filipinas", 
                "nombre_en" => "philippines", 
                "iso_alfa2" => "PH", 
                "iso_alfa3" => "PHL", 
                "iso_num" => 608, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "63"
            ],[
                "id" => 178, 
                "nombre" => "islas pitcairn", 
                "nombre_en" => "pitcairn islands", 
                "iso_alfa2" => "PN", 
                "iso_alfa3" => "PCN", 
                "iso_num" => 612, 
                "lenguaje" => "EN", 
                "tel_prefijo" => ""
            ],[
                "id" => 179, 
                "nombre" => "polonia", 
                "nombre_en" => "poland", 
                "iso_alfa2" => "PL", 
                "iso_alfa3" => "POL", 
                "iso_num" => 616, 
                "lenguaje" => "PL", 
                "tel_prefijo" => "48"
            ],[
                "id" => 180, 
                "nombre" => "portugal", 
                "nombre_en" => "portugal", 
                "iso_alfa2" => "PT", 
                "iso_alfa3" => "PRT", 
                "iso_num" => 620, 
                "lenguaje" => "PT", 
                "tel_prefijo" => "351"
            ],[
                "id" => 181, 
                "nombre" => "puerto rico", 
                "nombre_en" => "puerto rico", 
                "iso_alfa2" => "PR", 
                "iso_alfa3" => "PRI", 
                "iso_num" => 630, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "1"
            ],[
                "id" => 182, 
                "nombre" => "qatar", 
                "nombre_en" => "qatar", 
                "iso_alfa2" => "QA", 
                "iso_alfa3" => "QAT", 
                "iso_num" => 634, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "974"
            ],[
                "id" => 183, 
                "nombre" => "reunión", 
                "nombre_en" => "réunion", 
                "iso_alfa2" => "RE", 
                "iso_alfa3" => "REU", 
                "iso_num" => 638, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "262"
            ],[
                "id" => 184, 
                "nombre" => "rumania", 
                "nombre_en" => "romania", 
                "iso_alfa2" => "RO", 
                "iso_alfa3" => "ROU", 
                "iso_num" => 642, 
                "lenguaje" => "RO", 
                "tel_prefijo" => "40"
            ],[
                "id" => 185, 
                "nombre" => "rusia", 
                "nombre_en" => "russia", 
                "iso_alfa2" => "RU", 
                "iso_alfa3" => "RUS", 
                "iso_num" => 643, 
                "lenguaje" => "RU", 
                "tel_prefijo" => "7"
            ],[
                "id" => 186, 
                "nombre" => "ruanda", 
                "nombre_en" => "rwanda", 
                "iso_alfa2" => "RW", 
                "iso_alfa3" => "RWA", 
                "iso_num" => 646, 
                "lenguaje" => "RW", 
                "tel_prefijo" => "250"
            ],[
                "id" => 187, 
                "nombre" => "sahara occidental", 
                "nombre_en" => "sahrawi arab (western sahara)", 
                "iso_alfa2" => "EH", 
                "iso_alfa3" => "ESH", 
                "iso_num" => 732, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "212"
            ],[
                "id" => 188, 
                "nombre" => "san bartolomé", 
                "nombre_en" => "saint barthélemy", 
                "iso_alfa2" => "BL", 
                "iso_alfa3" => "BLM", 
                "iso_num" => 652, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "590"
            ],[
                "id" => 189, 
                "nombre" => "santa helena", 
                "nombre_en" => "saint helena, ascension and tristan da cunha", 
                "iso_alfa2" => "SH", 
                "iso_alfa3" => "SHN", 
                "iso_num" => 654, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "290"
            ],[
                "id" => 190, 
                "nombre" => "san cristóbal y nevis", 
                "nombre_en" => "saint kitts and nevis", 
                "iso_alfa2" => "KN", 
                "iso_alfa3" => "KNA", 
                "iso_num" => 659, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "869"
            ],[
                "id" => 191, 
                "nombre" => "santa lucía", 
                "nombre_en" => "saint lucia", 
                "iso_alfa2" => "LC", 
                "iso_alfa3" => "LCA", 
                "iso_num" => 662, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "758"
            ],[
                "id" => 192, 
                "nombre" => "saint martin", 
                "nombre_en" => "saint martin", 
                "iso_alfa2" => "MF", 
                "iso_alfa3" => "MAF", 
                "iso_num" => 663, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "590"
            ],[
                "id" => 193, 
                "nombre" => "san pedro y miquelón", 
                "nombre_en" => "saint pierre and miquelon", 
                "iso_alfa2" => "PM", 
                "iso_alfa3" => "SPM", 
                "iso_num" => 666, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "508"
            ],[
                "id" => 194, 
                "nombre" => "san vicente y las granadinas", 
                "nombre_en" => "saint vincent and the grenadines", 
                "iso_alfa2" => "VC", 
                "iso_alfa3" => "VCT", 
                "iso_num" => 670, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "809"
            ],[
                "id" => 195, 
                "nombre" => "samoa", 
                "nombre_en" => "samoa", 
                "iso_alfa2" => "WS", 
                "iso_alfa3" => "WSM", 
                "iso_num" => 882, 
                "lenguaje" => "SM", 
                "tel_prefijo" => "685"
            ],[
                "id" => 196, 
                "nombre" => "san marino", 
                "nombre_en" => "san marino", 
                "iso_alfa2" => "SM", 
                "iso_alfa3" => "SMR", 
                "iso_num" => 674, 
                "lenguaje" => "IT", 
                "tel_prefijo" => "378"
            ],[
                "id" => 197, 
                "nombre" => "santo tomé y príncipe", 
                "nombre_en" => "são tomé and príncipe", 
                "iso_alfa2" => "ST", 
                "iso_alfa3" => "STP", 
                "iso_num" => 678, 
                "lenguaje" => "PT", 
                "tel_prefijo" => "239"
            ],[
                "id" => 198, 
                "nombre" => "arabia saudí", 
                "nombre_en" => "saudi arabia", 
                "iso_alfa2" => "SA", 
                "iso_alfa3" => "SAU", 
                "iso_num" => 682, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "966"
            ],[
                "id" => 199, 
                "nombre" => "senegal", 
                "nombre_en" => "senegal", 
                "iso_alfa2" => "SN", 
                "iso_alfa3" => "SEN", 
                "iso_num" => 686, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "221"
            ],[
                "id" => 200, 
                "nombre" => "serbia", 
                "nombre_en" => "serbia", 
                "iso_alfa2" => "RS", 
                "iso_alfa3" => "SRB", 
                "iso_num" => 688, 
                "lenguaje" => "SR", 
                "tel_prefijo" => "381"
            ],[
                "id" => 201, 
                "nombre" => "seychelles", 
                "nombre_en" => "seychelles", 
                "iso_alfa2" => "SC", 
                "iso_alfa3" => "SYC", 
                "iso_num" => 690, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "248"
            ],[
                "id" => 202, 
                "nombre" => "sierra leona", 
                "nombre_en" => "sierra leone", 
                "iso_alfa2" => "SL", 
                "iso_alfa3" => "SLE", 
                "iso_num" => 694, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "232"
            ],[
                "id" => 203, 
                "nombre" => "singapur", 
                "nombre_en" => "singapore", 
                "iso_alfa2" => "SG", 
                "iso_alfa3" => "SGP", 
                "iso_num" => 702, 
                "lenguaje" => "ZH", 
                "tel_prefijo" => "65"
            ],[
                "id" => 205, 
                "nombre" => "eslovaquia", 
                "nombre_en" => "slovakia", 
                "iso_alfa2" => "SK", 
                "iso_alfa3" => "SVK", 
                "iso_num" => 703, 
                "lenguaje" => "SK", 
                "tel_prefijo" => "42"
            ],[
                "id" => 206, 
                "nombre" => "eslovenia", 
                "nombre_en" => "slovenia", 
                "iso_alfa2" => "SI", 
                "iso_alfa3" => "SVN", 
                "iso_num" => 705, 
                "lenguaje" => "SL", 
                "tel_prefijo" => "386"
            ],[
                "id" => 207, 
                "nombre" => "islas salomón", 
                "nombre_en" => "solomon islands", 
                "iso_alfa2" => "SB", 
                "iso_alfa3" => "SLB", 
                "iso_num" => 90, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "677"
            ],[
                "id" => 208, 
                "nombre" => "somalia", 
                "nombre_en" => "somalia", 
                "iso_alfa2" => "SO", 
                "iso_alfa3" => "SOM", 
                "iso_num" => 706, 
                "lenguaje" => "SO", 
                "tel_prefijo" => "252"
            ],[
                "id" => 209, 
                "nombre" => "sudáfrica", 
                "nombre_en" => "south africa", 
                "iso_alfa2" => "ZA", 
                "iso_alfa3" => "ZAF", 
                "iso_num" => 710, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "27"
            ],[
                "id" => 210, 
                "nombre" => "islas georgias del sur y sandwich del sur", 
                "nombre_en" => "south georgia and the south sandwich islands", 
                "iso_alfa2" => "GS", 
                "iso_alfa3" => "SGS", 
                "iso_num" => 239, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "995"
            ],[
                "id" => 211, 
                "nombre" => "corea del sur", 
                "nombre_en" => "south korea", 
                "iso_alfa2" => "KR", 
                "iso_alfa3" => "KOR", 
                "iso_num" => 410, 
                "lenguaje" => "KO", 
                "tel_prefijo" => "82"
            ],[
                "id" => 212, 
                "nombre" => "sudán del sur", 
                "nombre_en" => "south sudan", 
                "iso_alfa2" => "SS", 
                "iso_alfa3" => "SSD", 
                "iso_num" => 728, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "211"
            ],[
                "id" => 213, 
                "nombre" => "españa", 
                "nombre_en" => "spain", 
                "iso_alfa2" => "ES", 
                "iso_alfa3" => "ESP", 
                "iso_num" => 724, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "34"
            ],[
                "id" => 214, 
                "nombre" => "sri lanka", 
                "nombre_en" => "sri lanka", 
                "iso_alfa2" => "LK", 
                "iso_alfa3" => "LKA", 
                "iso_num" => 144, 
                "lenguaje" => "SI", 
                "tel_prefijo" => "94"
            ],[
                "id" => 215, 
                "nombre" => "sudán", 
                "nombre_en" => "sudan", 
                "iso_alfa2" => "SD", 
                "iso_alfa3" => "SDN", 
                "iso_num" => 736, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "249"
            ],[
                "id" => 216, 
                "nombre" => "surinam", 
                "nombre_en" => "suriname", 
                "iso_alfa2" => "SR", 
                "iso_alfa3" => "SUR", 
                "iso_num" => 740, 
                "lenguaje" => "NL", 
                "tel_prefijo" => "597"
            ],[
                "id" => 217, 
                "nombre" => "svalbard y jan mayen", 
                "nombre_en" => "svalbard and jan mayen", 
                "iso_alfa2" => "SJ", 
                "iso_alfa3" => "SJM", 
                "iso_num" => 744, 
                "lenguaje" => "NO", 
                "tel_prefijo" => "47"
            ],[
                "id" => 218, 
                "nombre" => "suazilandia", 
                "nombre_en" => "swaziland", 
                "iso_alfa2" => "SZ", 
                "iso_alfa3" => "SWZ", 
                "iso_num" => 748, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "268"
            ],[
                "id" => 219, 
                "nombre" => "suecia", 
                "nombre_en" => "sweden", 
                "iso_alfa2" => "SE", 
                "iso_alfa3" => "SWE", 
                "iso_num" => 752, 
                "lenguaje" => "SV", 
                "tel_prefijo" => "46"
            ],[
                "id" => 220, 
                "nombre" => "suiza", 
                "nombre_en" => "switzerland", 
                "iso_alfa2" => "CH", 
                "iso_alfa3" => "CHE", 
                "iso_num" => 756, 
                "lenguaje" => "DE", 
                "tel_prefijo" => "41"
            ],[
                "id" => 221, 
                "nombre" => "siria", 
                "nombre_en" => "syria", 
                "iso_alfa2" => "SY", 
                "iso_alfa3" => "SYR", 
                "iso_num" => 760, 
                "lenguaje" => "SY", 
                "tel_prefijo" => "963"
            ],[
                "id" => 222, 
                "nombre" => "taiwán", 
                "nombre_en" => "taiwan", 
                "iso_alfa2" => "TW", 
                "iso_alfa3" => "TWN", 
                "iso_num" => 158, 
                "lenguaje" => "CH", 
                "tel_prefijo" => "886"
            ],[
                "id" => 223, 
                "nombre" => "tayikistán", 
                "nombre_en" => "tajikistan", 
                "iso_alfa2" => "TJ", 
                "iso_alfa3" => "TJK", 
                "iso_num" => 762, 
                "lenguaje" => "TG", 
                "tel_prefijo" => "7"
            ],[
                "id" => 224, 
                "nombre" => "tanzania", 
                "nombre_en" => "tanzania", 
                "iso_alfa2" => "TZ", 
                "iso_alfa3" => "TZA", 
                "iso_num" => 834, 
                "lenguaje" => "SW", 
                "tel_prefijo" => "255"
            ],[
                "id" => 225, 
                "nombre" => "tailandia", 
                "nombre_en" => "thailand", 
                "iso_alfa2" => "TH", 
                "iso_alfa3" => "THA", 
                "iso_num" => 764, 
                "lenguaje" => "TH", 
                "tel_prefijo" => "66"
            ],[
                "id" => 226, 
                "nombre" => "togo", 
                "nombre_en" => "togo", 
                "iso_alfa2" => "TG", 
                "iso_alfa3" => "TGO", 
                "iso_num" => 768, 
                "lenguaje" => "FR", 
                "tel_prefijo" => "228"
            ],[
                "id" => 227, 
                "nombre" => "tokelau", 
                "nombre_en" => "tokelau", 
                "iso_alfa2" => "TK", 
                "iso_alfa3" => "TKL", 
                "iso_num" => 772, 
                "lenguaje" => "TK", 
                "tel_prefijo" => "690"
            ],[
                "id" => 228, 
                "nombre" => "tonga", 
                "nombre_en" => "tonga", 
                "iso_alfa2" => "TO", 
                "iso_alfa3" => "TON", 
                "iso_num" => 776, 
                "lenguaje" => "TO", 
                "tel_prefijo" => "676"
            ],[
                "id" => 229, 
                "nombre" => "trinidad y tobago", 
                "nombre_en" => "trinidad and tobago", 
                "iso_alfa2" => "TT", 
                "iso_alfa3" => "TTO", 
                "iso_num" => 780, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "868"
            ],[
                "id" => 230, 
                "nombre" => "túnez", 
                "nombre_en" => "tunisia", 
                "iso_alfa2" => "TN", 
                "iso_alfa3" => "TUN", 
                "iso_num" => 788, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "216"
            ],[
                "id" => 231, 
                "nombre" => "turquía", 
                "nombre_en" => "turkey", 
                "iso_alfa2" => "TR", 
                "iso_alfa3" => "TUR", 
                "iso_num" => 792, 
                "lenguaje" => "TR", 
                "tel_prefijo" => "90"
            ],[
                "id" => 232, 
                "nombre" => "turkmenistán", 
                "nombre_en" => "turkmenistan", 
                "iso_alfa2" => "TM", 
                "iso_alfa3" => "TKM", 
                "iso_num" => 795, 
                "lenguaje" => "TK", 
                "tel_prefijo" => "993"
            ],[
                "id" => 233, 
                "nombre" => "islas turcas y caicos", 
                "nombre_en" => "turks and caicos", 
                "iso_alfa2" => "TC", 
                "iso_alfa3" => "TCA", 
                "iso_num" => 796, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "649"
            ],[
                "id" => 234, 
                "nombre" => "tuvalu", 
                "nombre_en" => "tuvalu", 
                "iso_alfa2" => "TV", 
                "iso_alfa3" => "TUV", 
                "iso_num" => 798, 
                "lenguaje" => "TV", 
                "tel_prefijo" => "688"
            ],[
                "id" => 235, 
                "nombre" => "uganda", 
                "nombre_en" => "uganda", 
                "iso_alfa2" => "UG", 
                "iso_alfa3" => "UGA", 
                "iso_num" => 800, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "256"
            ],[
                "id" => 236, 
                "nombre" => "ucrania", 
                "nombre_en" => "ukraine", 
                "iso_alfa2" => "UA", 
                "iso_alfa3" => "UKR", 
                "iso_num" => 804, 
                "lenguaje" => "UK", 
                "tel_prefijo" => "380"
            ],[
                "id" => 237, 
                "nombre" => "emiratos árabes unidos", 
                "nombre_en" => "united arab emirates", 
                "iso_alfa2" => "AE", 
                "iso_alfa3" => "ARE", 
                "iso_num" => 784, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "971"
            ],[
                "id" => 238, 
                "nombre" => "reino unido", 
                "nombre_en" => "united kingdom", 
                "iso_alfa2" => "GB", 
                "iso_alfa3" => "GBR", 
                "iso_num" => 826, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "44"
            ],[
                "id" => 239, 
                "nombre" => "estados unidos", 
                "nombre_en" => "united states", 
                "iso_alfa2" => "US", 
                "iso_alfa3" => "USA", 
                "iso_num" => 840, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "1"
            ],[
                "id" => 240, 
                "nombre" => "islas ultramarinas de estados unidos", 
                "nombre_en" => "united states minor outlying islands", 
                "iso_alfa2" => "UM", 
                "iso_alfa3" => "UMI", 
                "iso_num" => 581, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "340"
            ],[
                "id" => 241, 
                "nombre" => "uruguay", 
                "nombre_en" => "uruguay", 
                "iso_alfa2" => "UY", 
                "iso_alfa3" => "URY", 
                "iso_num" => 858, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "598"
            ],[
                "id" => 242, 
                "nombre" => "islas vírgenes de los estados unidos", 
                "nombre_en" => "us virgin islands", 
                "iso_alfa2" => "VI", 
                "iso_alfa3" => "VIR", 
                "iso_num" => 850, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "340"
            ],[
                "id" => 243, 
                "nombre" => "uzbekistán", 
                "nombre_en" => "uzbekistan", 
                "iso_alfa2" => "UZ", 
                "iso_alfa3" => "UZB", 
                "iso_num" => 860, 
                "lenguaje" => "UZ", 
                "tel_prefijo" => "7"
            ],[
                "id" => 244, 
                "nombre" => "vanuatu", 
                "nombre_en" => "vanuatu", 
                "iso_alfa2" => "VU", 
                "iso_alfa3" => "VUT", 
                "iso_num" => 548, 
                "lenguaje" => "BI", 
                "tel_prefijo" => "678"
            ],[
                "id" => 245, 
                "nombre" => "ciudad del vaticano", 
                "nombre_en" => "vatican city", 
                "iso_alfa2" => "VA", 
                "iso_alfa3" => "VAT", 
                "iso_num" => 336, 
                "lenguaje" => "LA", 
                "tel_prefijo" => "379"
            ],[
                "id" => 246, 
                "nombre" => "venezuela", 
                "nombre_en" => "venezuela", 
                "iso_alfa2" => "VE", 
                "iso_alfa3" => "VEN", 
                "iso_num" => 862, 
                "lenguaje" => "ES", 
                "tel_prefijo" => "58"
            ],[
                "id" => 247, 
                "nombre" => "vietnam", 
                "nombre_en" => "viet nam", 
                "iso_alfa2" => "VN", 
                "iso_alfa3" => "VNM", 
                "iso_num" => 704, 
                "lenguaje" => "VI", 
                "tel_prefijo" => "84"
            ],[
                "id" => 248, 
                "nombre" => "wallis y futuna", 
                "nombre_en" => "wallis and futuna", 
                "iso_alfa2" => "WF", 
                "iso_alfa3" => "WLF", 
                "iso_num" => 876, 
                "lenguaje" => "WL", 
                "tel_prefijo" => "681"
            ],[
                "id" => 249, 
                "nombre" => "yemen", 
                "nombre_en" => "yemen", 
                "iso_alfa2" => "YE", 
                "iso_alfa3" => "YEM", 
                "iso_num" => 887, 
                "lenguaje" => "AR", 
                "tel_prefijo" => "967"
            ],[
                "id" => 250, 
                "nombre" => "zambia", 
                "nombre_en" => "zambia", 
                "iso_alfa2" => "ZM", 
                "iso_alfa3" => "ZMB", 
                "iso_num" => 894, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "260"
            ],[
                "id" => 251, 
                "nombre" => "zimbabue", 
                "nombre_en" => "zimbabwe", 
                "iso_alfa2" => "ZW", 
                "iso_alfa3" => "ZWE", 
                "iso_num" => 716, 
                "lenguaje" => "EN", 
                "tel_prefijo" => "263"
            ]
        ]);
    }
}
