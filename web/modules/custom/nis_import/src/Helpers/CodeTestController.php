<?php

namespace Drupal\nis_import\Helpers;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Symfony\Component\HttpFoundation\Response;

class CodeTestController {
  private static function verifyData($info, $data, $index) {
    if(!empty($data[$index])) {
      $technologies = [
        10 => ['name' => 'access', 'id' => 12],
        11 => ['name' => 'ibm', 'id' => 13],
        12 => ['name' => 'mysql', 'id' => 14],
        13 => ['name' => 'oracle_db', 'id' => 15],
        14 => ['name' => 'oracle_admin', 'id' => 16],
        15 => ['name' => 'pl_sql', 'id' => 17],
        16 => ['name' => 'postgresql', 'id' => 18],
        17 => ['name' => 'sql_db_dev', 'id' => 19],
        18 => ['name' => 'sql_db_admin', 'id' => 20],
        19 => ['name' => 'sql_db_integration', 'id' => 21],
        20 => ['name' => 'sql_db_reporting', 'id' => 22],
        21 => ['name' => 't_sql', 'id' => 23],
        22 => ['name' => 'maria_db', 'id' => 24],
        23 => ['name' => 'couch_db', 'id' => 25],
        24 => ['name' => 'sql_lite', 'id' => 26],
        25 => ['name' => 'mongo_db', 'id' => 27],
        26 => ['name' => 'redis', 'id' => 28],
        27 => ['name' => 'no_sql', 'id' => 29],
        28 => ['name' => 'cassandra', 'id' => 30],
        29 => ['name' => 'asp_net', 'id' => 31],
        30 => ['name' => 'classic_asp', 'id' => 32],
        31 => ['name' => 'iis', 'id' => 33],
        32 => ['name' => 'infopath', 'id' => 34],
        33 => ['name' => 'sharepoint', 'id' => 35],
        34 => ['name' => 'vb', 'id' => 36],
        35 => ['name' => 'vb_studio', 'id' => 37],
        36 => ['name' => 'sourcesafe', 'id' => 38],
        37 => ['name' => 'office', 'id' => 39],
        38 => ['name' => 'sharepoint_framework', 'id' => 40],
        39 => ['name' => 'sharepoint_designer', 'id' => 41],
        40 => ['name' => 'html_json', 'id' => 42],
        41 => ['name' => 'wcag', 'id' => 43],
        42 => ['name' => 'apache', 'id' => 44],
        43 => ['name' => 'apex', 'id' => 45],
        44 => ['name' => 'coldfusion', 'id' => 46],
        45 => ['name' => 'eclipse', 'id' => 47],
        46 => ['name' => 'perl', 'id' => 48],
        47 => ['name' => 'php', 'id' => 49],
        48 => ['name' => 'python', 'id' => 50],
        49 => ['name' => 'ruby', 'id' => 51],
        50 => ['name' => 'weblogic', 'id' => 52],
        51 => ['name' => 'javascript', 'id' => 53],
        52 => ['name' => 'ajax', 'id' => 54],
        53 => ['name' => 'devops', 'id' => 55],
        54 => ['name' => 'java', 'id' => 56],
        55 => ['name' => 'golang', 'id' => 57],
        56 => ['name' => 'html_json2', 'id' => 58],
        57 => ['name' => 'web_services', 'id' => 59],
        58 => ['name' => 'api', 'id' => 60],
        59 => ['name' => 'drupal', 'id' => 61],
        60 => ['name' => 'wcab', 'id' => 62],
        61 => ['name' => 'sass', 'id' => 63],
        62 => ['name' => 'selenium', 'id' => 64],
        63 => ['name' => 'loadrunner', 'id' => 65],
        64 => ['name' => 'katalon', 'id' => 66],
        65 => ['name' => 'subject7', 'id' => 67],
        66 => ['name' => 'behat', 'id' => 68],
        67 => ['name' => 'nightwatch', 'id' => 69],
        68 => ['name' => 'appium', 'id' => 70],
        69 => ['name' => 'qtp', 'id' => 71],
        70 => ['name' => 'watir', 'id' => 72],
        71 => ['name' => 'silkperformer', 'id' => 73],
        72 => ['name' => 'telerik', 'id' => 74],
        73 => ['name' => 'active_directory', 'id' => 75],
        74 => ['name' => 'backup', 'id' => 76],
        75 => ['name' => 'evms', 'id' => 77],
        76 => ['name' => 'mail', 'id' => 78],
        77 => ['name' => 'vm', 'id' => 79],
        78 => ['name' => 'ibm_big', 'id' => 80],
        79 => ['name' => 'windows_server', 'id' => 81],
        80 => ['name' => 'linux', 'id' => 82],
        81 => ['name' => 'web_server_admin', 'id' => 83],
        82 => ['name' => 'powershell', 'id' => 84],
        83 => ['name' => 'dfs', 'id' => 85],
        84 => ['name' => 'active_directory_admin', 'id' => 86],
        85 => ['name' => 'mass360', 'id' => 87],
        86 => ['name' => 'comvault', 'id' => 88],
        87 => ['name' => 'solarwinds', 'id' => 89],
        88 => ['name' => 'manageengine', 'id' => 90],
        89 => ['name' => 'windows_patch', 'id' => 91],
        90 => ['name' => 'linux_patch', 'id' => 92],
        91 => ['name' => 'eftp', 'id' => 93],
        92 => ['name' => 'router', 'id' => 94],
        93 => ['name' => 'storage', 'id' => 95],
        94 => ['name' => 'lan', 'id' => 96],
        95 => ['name' => 'wireless', 'id' => 97],
        96 => ['name' => 'firewall', 'id' => 98],
        97 => ['name' => 'vpn', 'id' => 99],
        98 => ['name' => 'circuits', 'id' => 100],
        99 => ['name' => 'idps', 'id' => 101],
        100 => ['name' => 'juniper', 'id' => 102],
        101 => ['name' => 'cisco', 'id' => 103],
        102 => ['name' => 'palo_alto', 'id' => 104],
        103 => ['name' => 'coding_practices', 'id' => 105],
        104 => ['name' => 'penetration_testing', 'id' => 106],
        105 => ['name' => 'data_encryption', 'id' => 107],
        106 => ['name' => 'two_factor', 'id' => 108],
        107 => ['name' => 'oauth', 'id' => 109],
        108 => ['name' => 'devopsec', 'id' => 110],
        109 => ['name' => 'ms_office', 'id' => 111],
        110 => ['name' => 'google', 'id' => 112],
        111 => ['name' => 'atlassian', 'id' => 113],
        112 => ['name' => 'domino', 'id' => 114],
        113 => ['name' => 'help_desk', 'id' => 115],
        114 => ['name' => 'mobile', 'id' => 116],
        115 => ['name' => 'cloud', 'id' => 117],
        116 => ['name' => 'bi', 'id' => 118],
        117 => ['name' => 'blockchain', 'id' => 119],
        118 => ['name' => 'mapping', 'id' => 120],
        119 => ['name' => 'system', 'id' => 121],
        120 => ['name' => 'disaster_recovery', 'id' => 122],
      ];

      $prof = explode(' (', $data[$index]);
      $exp = '';

      switch (strtolower($prof[0])) {
        case 'beginner':
          $prof = 126;
          $exp = 9;
          break;
        case 'mid-level':
          $prof = 125;
          $exp = 10;
          break;
        case 'expert':
          $prof = 127;
          $exp = 11;
          break;
      }

      $info['skills'][$technologies[$index]['name']] = [
        'tech' => $technologies[$index]['id'],
        'prof' => $prof,
        'exp' => $exp
      ];
    }

    return $info;
  }

  public function test_import_data() {
    $file = getcwd() . '/modules/nis_import/data.csv';
    $row = 1;
    $info = [];
    if (($handle = fopen($file, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
        $num = count($data);
        $row++;

        $it = 0;
        switch ($data[4]) {
          case '1 - 3': $it = 1; break;
          case '4 - 6': $it = 2; break;
          case '7 - 10': $it = 3; break;
          case '11 - 14': $it = 4; break;
          case '15+': $it = 5; break;
        }

        $database = \Drupal::database();
        if(!empty($data[1])) {
          $query = $database->select('node_field_data', 'n')->fields('n', []);
          $query->condition('n.title', $data[1]);
          $query->condition('n.status', '1');
          $results = $query->execute();
          foreach ($results as $record) {
            $info['task_order'][0] = $record->nid;
          }
        }

        if(!empty($data[2])) {
          $query = $database->select('node_field_data', 'n')->fields('n', []);
          $query->condition('n.title', $data[2]);
          $query->condition('n.status', '1');
          $results = $query->execute();
          foreach ($results as $record) {
            $info['task_order'][1] = $record->nid;
          }
        }

        $name = explode(' ', $data[0]);
        $info['name'] = $data[0];
        $info['first_name'] = $name[array_key_first($name)];
        $info['last_name'] = end($name);
        $info['job_title'] = $data[3];
        $info['it_experience'] = $it;
        $info['responsability'] = $data[5];
        $info['has_backup'] = ($data[6] == 'Yes') ? 1 : 0;
        $info['certification'] = $data[8];
        $info['education'] = $data[9];

        for($i = 10; $i <= 120; $i++) {
          $info = self::verifyData($info, $data, $i);
        }

        $info['additional_skills'] = $data[121];
        $info['future_additional_skills'] = $data[122];

        $p = [];
        foreach($info['skills'] as $skill) {
          $paragraph = Paragraph::create([
            'type' => 'skills',
            'field_proficiency' => $skill['prof'],
            'field_technology' => $skill['tech'],
            'field_years_of_experience' => $skill['exp'],
          ]);
          $paragraph->save();

          $p[] = [
            'target_id' => $paragraph->id(),
            'target_revision_id' => $paragraph->getRevisionId()
          ];
        }

        // Create node object with attached file.
        $node = Node::create([
          'type'        => 'staff_profile',
          'title'       => $info['name'],
          'field_certifications_training_pl' => [
            'value' => $info['certification'],
            'format' => 'full_html'
          ],
          'field_description_of_duties_resp' => [
            'value' => $info['responsability'],
            'format' => 'full_html'
          ],
          'field_education' => [
            'value' => $info['education'],
            'format' => 'full_html'
          ],
          'field_is_someone_on_the_team_des' => [
            'value' => $info['has_backup'],
          ],
          'field_job_title' => [
            'value' => $info['job_title'],
          ],
          'field_first_name' => [
            'value' => $info['first_name'],
          ],
          'field_last_name' => [
            'value' => $info['last_name'],
          ],
          'field_please_list_any_additional' => [
            'value' => $info['additional_skills'],
            'format' => 'full_html'
          ],
          'field_skills' => $p,
          'field_please_list_any_skills_tec' => [
            'value' => $info['future_additional_skills'],
            'format' => 'full_html'
          ],
          'field_years_of_it_experience' => [
            'value' => $info['it_experience'],
          ],
          'field_task_order_s_' => $info['task_order'],
        ]);

        $node->save();
      }
      fclose($handle);
    }


  }

  public function test() {
    return new Response('Hello World.');
  }
}
