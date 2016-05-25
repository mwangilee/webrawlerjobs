<?php

namespace App;

use DB;


/**
 * Description of DBQueries
 *
 * @author lee
 */
class DBQueries {
    
      public static function get_jobs($id) {
        //Queries

        if (isset($id) && $id != null) {

            return DB::table('jobs')
                            ->select('idx', 'job_id','title','description','status')
                            ->where('idx', '=', $id)
                            ->first();
        } else {

            return DB::table('jobs')
                            ->select('idx', 'job_id','title','description','status')
                            ->where('status', '=', '0')
                            ->get();
        }
    }
    
   public static function get_count(){
       
       return  DB::table('jobs')
                     ->where('status', '=', '0')
                     ->count();
       
       
   }
   
   public static function get_count_all(){
       
       return  DB::table('jobs')
                     ->where('status', '=', '1')
                     ->count();
       
       
   }


   public static function get_values($tablename, $column1, $column2, $wherecolumn, $id) {


        if (isset($wherecolumn) && $wherecolumn != null && isset($id) && $id != null) {
            return DB::table($tablename)
                            ->select($column1, $column2)
                            ->where($wherecolumn, '=', $id)
                            ->first();
        } else {
            return DB::table($tablename)->select($column1, $column2)->get();
        }
    }
}
