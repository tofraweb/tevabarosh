<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Catalog_model extends CI_Model
{

    public function get_catalog_count($category = null, $search = null, $kingdom){
        try {
            $sql = " SELECT * FROM species";
            if(!empty($search)){
                $sql .=  " WHERE name_he LIKE ? OR name_lat LIKE ? OR name_hu LIKE ?";
                $result = $this->db->query($sql, array('%'.$search.'%','%'.$search.'%','%'.$search.'%') ); //binding values to query
            }elseif(!empty($category)){
                $sql .= " WHERE category_id = ? ";
                $result = $this->db->query($sql, $category);
            }elseif(!empty($kingdom)){
                $sql .= " INNER JOIN categories ON categories.id = species.category_id WHERE categories.kingdom_id = ?";
                $result = $this->db->query($sql, $kingdom);
            }else{
                $result = $this->db->query($sql);
            }
        } catch(Exception $e){
            echo "Error in sql query";
            exit;
        }
        $count = sizeof($result->result());
        return $count;
    }

    public function get_results_count($table= null, $id){

    }

    public function full_catalog_array($limit = null, $offset = 0, $kingdom = 0){
        if($kingdom){
          try{
              $sql = "SELECT species.id,species.name_he,species.name_lat,species.name_hu, species.category_id, pictures.filename as picture
              FROM species
              JOIN pictures ON species.id = pictures.species_id
              INNER JOIN categories ON categories.id = species.category_id
              WHERE categories.kingdom_id = ?
              AND pictures.img_type_id = 1
              ORDER BY REPLACE(REPLACE(REPLACE(name_he,'The ',''), 'An ' , ''), 'A ', '')";
              if(is_integer($limit)){
                  $sql .= " LIMIT ? OFFSET ? ";
                  $results = $this->db->query($sql,array($kingdom,$limit,$offset));
              }else{
                  $results = $this->db->query($sql,$kingdom);
              }
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
        } else {
          try{
              $sql = "SELECT id,name_he,name_lat,name_hu, category_id, picture
              FROM species
              ORDER BY REPLACE(REPLACE(REPLACE(name_he,'The ',''), 'An ' , ''), 'A ', '')";
              if(is_integer($limit)){
                  $sql .= " LIMIT ? OFFSET ? ";
                  $results = $this->db->query($sql,array($limit,$offset));
              }else{
                  $results = $this->db->query($sql);
              }
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
        }
        $catalog = $results->result();
        return $catalog;
    }

    public function random_catalog_array($cat_id, $limit = null){
        if($cat_id){
          try{ //pulling random species by category from the DB
              $results = $this->db->query(
                "SELECT species.id, species.name_he,species.name_lat,species.name_hu, species.category_id, species.description, pictures.filename as picture
               FROM species
               JOIN pictures ON species.id = pictures.species_id
               INNER JOIN categories ON categories.id = species.category_id
               WHERE category_id = '$cat_id'
               AND featuring = 'on'
               AND pictures.img_type_id = 1
               ORDER BY RAND()
               LIMIT $limit"
                    );
          }catch(Exception $e){
              echo "Unable to retrieve results";
          }
        }else{
          try{ //pulling random species by category from the DB
              $results = $this->db->query(
                "SELECT species.id,species.name_he,species.name_lat,species.name_hu, species.category_id, species.description, pictures.filename as picture
               FROM species
               JOIN pictures ON species.id = pictures.species_id
               INNER JOIN categories ON categories.id = species.category_id
               WHERE pictures.img_type_id = 1
               AND featuring = 'on'
               ORDER BY RAND()
               LIMIT $limit"
                    );
          }catch(Exception $e){
              echo "Unable to retrieve results";
          }
        }
        $catalog = $results->result();
        return $catalog;
    }

    public function category_catalog_array($category, $limit = null, $offset = 0){

        try{
            $sql = "SELECT species.id,species.name_he,species.name_lat,species.name_hu, species.category_id, pictures.filename as picture
            FROM species
            Join pictures ON species.id = pictures.species_id
            WHERE pictures.img_type_id = 1 AND species.category_id = ?
            ORDER BY REPLACE(REPLACE(REPLACE(name_he,'The ',''), 'An ' , ''), 'A ', '')";
            if(is_integer($limit)){
                $sql .= " LIMIT ? OFFSET ? ";
                $results = $this->db->query($sql,array($category,$limit,$offset));
            }else{
                $results = $this->db->query($sql,$offset);
            }
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $catalog = $results->result();
        // var_dump($catalog);
        // exit;
        return $catalog;
    }




    public function search_catalog_array($search, $limit = null, $offset = 0){

        try{
            $sql = " SELECT species.id,species.name_he,species.name_lat,species.name_hu, species.category_id, pictures.filename as picture
                FROM species
                Join pictures ON species.id = pictures.species_id
                WHERE pictures.img_type_id = 1 
                AND (name_he LIKE ?
                OR name_lat LIKE ?
                OR name_hu LIKE ?)
                ORDER BY REPLACE(REPLACE(REPLACE(name_he,'The ',''), 'An ' , ''), 'A ', '')";
            if(is_integer($limit)){
                $sql .= " LIMIT ? OFFSET ? ";
                $results = $this->db->query($sql, array('%'.$search.'%','%'.$search.'%','%'.$search.'%',$limit,$offset));
            }else{
                $results = $this->db->query($sql, array('%'.$search.'%','%'.$search.'%','%'.$search.'%'));
            }
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $catalog = $results->result();
        // echo '<pre>';
        // var_dump($catalog);
        // echo '</pre>';
        // exit;
        return $catalog;
    }

    public function single_species_array($id){

       try{
           $sql = "SELECT * FROM species WHERE id = ?";
           $result = $this->db->query($sql,$id);
         }catch(Exception $e){
             echo "Unable to retrieve results";
             exit;
         }
         $species = $result->result();
         return $species;
    }

    public function get_pictures($id, $type = null, $limit = '100') {
      if($type){
        try{
            $sql = "SELECT * FROM pictures
            WHERE species_id = ? AND img_type_id = ?
            LIMIT $limit"; // refactory needed
            $result = $this->db->query($sql,array($id,$type));
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
      }else{
        try{
            $sql = "SELECT * FROM pictures WHERE species_id = ? LIMIT $limit"; // refactory needed
            $result = $this->db->query($sql,$id);
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
      }
      $pictures = $result->result();
      return $pictures;
    }

    public function get_genus($id = null, $all_genus = null){
      if($id){
        if($all_genus){ //retrieves all species in genus
          try{
              $sql = "SELECT genus.id, genus.family_id, genus.name_he, genus.name_lat, genus.name_hu FROM genus
              Join species ON genus.id = species.genus_id
              WHERE species.id = ?";
              $result = $this->db->query($sql,$id);
            }catch(Exception $e){
                echo "Unable to retrieve results";
                exit;
            }
        } else { //retrieves only specific genus
          try{
              $sql = "SELECT * FROM genus
              WHERE id = ?";
              $result = $this->db->query($sql,$id);
            }catch(Exception $e){
                echo "Unable to retrieve results";
                exit;
            }
        }
          $genus = $result->result();
          return $genus[0];
      } else {
        try{
            $sql = "SELECT * FROM genus
            ORDER BY name_he ASC";
            $result = $this->db->query($sql);
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
          $genus = $result->result();
          return $genus;
      }
    }

    public function get_families($id = null){
      if($id){
      try{
          $sql = "SELECT * FROM family
          WHERE id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $families = $result->result();
        return $families[0];
      } else {
        try{
            $sql = "SELECT * FROM family
            ORDER BY name_he ASC";
            $result = $this->db->query($sql);
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
          $families = $result->result();
          return $families;
      }
    }

    public function get_orders($id = null){
      if($id){
      try{
          $sql = "SELECT * FROM orders
          WHERE id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $order = $result->result();
        return $order[0];
      } else {
        try{
            $sql = "SELECT * FROM orders
            ORDER BY name_he ASC";
            $result = $this->db->query($sql);
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
          $order = $result->result();
          return $order;
      }
    }

    public function get_category_details($id){
      try{
          $sql = "SELECT * FROM categories WHERE id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $category_details = $result->result();
        return $category_details[0];
    }

    public function get_classification_name($id, $table){
      try{
          $sql = "SELECT name_he FROM $table WHERE id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $classification_name = $result->result();
        return $classification_name[0];
    }

    public function get_audio($id){
      try{
          $sql = "SELECT * FROM audio WHERE species_id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $audio = $result->result();
        return $audio[0];
    }

    public function get_video($id){
      try{
          $sql = "SELECT * FROM video WHERE species_id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $video = $result->result();
        return $video[0];
    }

    public function get_species_properties($id, $type){
      if($type == 1){
        try{
            $sql = "SELECT * FROM plant_properties WHERE species_id = ?";
            $result = $this->db->query($sql,$id);
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
      }else{
        // echo "<pre>";
        // var_dump($id);
        // echo "</pre>";
        // exit;
        try{
            $sql = "SELECT rlc.name_he, rlc.rlc_code, rlc.color, bird_properties.id
              FROM bird_properties
              INNER JOIN rlc ON bird_properties.rlc_id = rlc.id
              WHERE bird_properties.species_id = ?";
            $result = $this->db->query($sql,$id);
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
      }
        $properties = $result->result();
        return $properties[0];
    }

    public function getFamilyListInOrder($id) {
      try{
          $sql = "SELECT * FROM family WHERE order_id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $families = $result->result();
        return $families;
    }

    public function getGenusListInFamily($id) {
      try{
          $sql = "SELECT id, family_id, name_he FROM genus WHERE family_id = ?";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $genus = $result->result();
        return $genus;
    }

    public function getSpeciesListInGenus($id) {
      try{
          $sql = "SELECT species.id,species.name_he,species.name_lat,species.name_hu, species.category_id, pictures.filename as picture
          FROM species
          Join pictures ON species.id = pictures.species_id
          WHERE pictures.img_type_id = 1 AND species.genus_id = ?
          ORDER BY REPLACE(REPLACE(REPLACE(name_he,'The ',''), 'An ' , ''), 'A ', '')";
          $result = $this->db->query($sql,$id);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $species = $result->result();
        return $species;
    }

    public function get_species_by_id_array($id_array) {
      $in = join(',', $id_array);
      if(count($id_array) > 0){
        try{
            $sql = "SELECT species.id,species.name_he,species.name_lat,species.name_hu, species.category_id, pictures.filename as picture
            FROM species
            Join pictures ON species.id = pictures.species_id
            WHERE pictures.img_type_id = 1 AND species.id IN ($in)"; 
            $result = $this->db->query($sql);
          }catch(Exception $e){
              echo "Unable to retrieve results";
              exit;
          }
          $species = $result->result();
          return $species;
      } else{
        return null;
      }
    }


}
