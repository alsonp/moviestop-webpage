<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class Functions{

    public static function getRecentMovies(){
        $criteria = new CDbCriteria();
        $criteria->addCondition("t.status = '1'");
        $criteria->order = 'releaseDate';
        $criteria->limit = '4';
        
        return Movie::model()->findAll($criteria);
    }
     public static function getUpcomingMovies(){
        $criteria = new CDbCriteria();
        $criteria->addCondition("t.status = '0'");
        $criteria->order = 'releaseDate';
        $criteria->limit = '4';
        
        return Movie::model()->findAll($criteria);
    }
    

    

}
