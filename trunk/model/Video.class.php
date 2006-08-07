<?php

require_once('Database.class.php');

class Video {
    var $id;
    var $title;
    var $subtitle;
    var $runtime;
    var $country;
    var $year;
    var $plot;
    var $comment;
    var $rating;
    var $added;
    var $director;
    var $cast;
    var $cover;
    var $language;
    var $diskid;
    var $filename;
    var $filesize;
    var $audiocodec;
    var $videocodec;

    function Video() {
        $this->id = 0;          $this->title = '';
        $this->subtitle = '';   $this->runtime = 0;   $this->country= '';
        $this->year = '';       $this->plot = '';
        $this->comment = '';    $this->rating = '';
        $this->added = '';      $this->director = '';
        $this->cast = '';       $this->cover = '';
        $this->language = '';   $this->diskid = 0;
        $this->filename = '';   $this->filesize = 0;
        $this->audiocodec = ''; $this->videocodec = '';
    }

    function save() {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }

        $sql = "INSERT INTO video(title, subtitle, runtime, country, year, plot, comment, rating, added, director, " .
                                 "cast, cover, language, diskid, filename, filesize, audiocodec, videocodec) " .
               "VALUES ('" . $this->getTitle()      . "', '" .
                             $this->getSubtitle()   . "', "  .
                             $this->getRuntime()    . ", '"  .
                             $this->getCountry()    . "', '" .
                             $this->getYear()       . "', '" .
                             $this->getPlot()       . "', '" .
                             $this->getComment()    . "', "  .
                             $this->getRating()     . ", '"  .
                             date('Y-m-d H:i:s')    . "', '" .
                             $this->getDirector()   . "', '" .
                             $this->getCast()       . "', '" .
                             $this->getCover()      . "', '" .
                             $this->getLanguage()   . "', "  .
                             $this->getDiskid()     . ", '"  .
                             $this->getFilename()   . "', "  .
                             $this->getFilesize()   . ", '"  .
                             $this->getAudiocodec() . "', '" .
                             $this->getVideocodec() . "')"
        ;

        $res =& $db->query($sql);
        if (DB::isError($res)) {
            echo $res->getMessage() . "<pre>$sql</pre>";
            return false;
        }
        return true;
    }
    function loadById($id) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $id = $db->quoteSmart($id);
        $db->setFetchMode(DB_FETCHMODE_ASSOC);
        
        $sql = "SELECT *
                FROM video
                WHERE id=$id"
        ;
        
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<pre>$sql</pre>");
        }
        
        $row =& $res->fetchRow();
        $res->free();
        
        $this->setId($row['id']);
        $this->setTitle($row['title']);
        $this->setSubtitle($row['subtitle']);
        $this->setRuntime($row['runtime']);
        $this->setCountry($row['country']);
        $this->setYear($row['year']);
        $this->setPlot(strip_tags(html_entity_decode($row['plot'])));
        $this->setComment(strip_tags(html_entity_decode($row['comment'])));
        $this->setRating($row['rating']);
        $this->setAdded($row['added']);
        $this->setDirector($row['director']);
        $this->setCast($row['cast']);
        $this->setCover($row['cover']);
        $this->setLanguage($row['language']);
        $this->setDiskid($row['diskid']);
        $this->setFilename($row['filename']);
        $this->setFilesize($row['filesize']);
        $this->setAudiocodec($row['audiocodec']);
        $this->setVideocodec($row['videocodec']);
        
        return $row;
    }
    function editById($id) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $id = $db->quoteSmart($id);
        
        $sql = "UPDATE video SET " .
                        "title='"       . $this->getTitle()     . "', " .
                        "subtitle='"    . $this->getSubtitle()  . "', " .
                        "runtime="      . $this->getRuntime()   . ", "  .
                        "country='"     . $this->getCountry()   . "', " .
                        "year='"        . $this->getYear()      . "', " .
                        "plot='"        . $this->getPlot()      . "', " .
                        "comment='"     . $this->getComment()   . "', " .
                        "rating="       . $this->getRating()    . ", "  .
                        "added='"       . $this->getAdded()     . "', " .
                        "director='"    . $this->getDirector()  . "', " .
                        "cast='"        . $this->getCast()      . "', " .
                        "cover='"       . $this->getCover()     . "', " .
                        "language='"    . $this->getLanguage()  . "', " .
                        "diskid="       . $this->getDiskid()    . ", "  .
                        "filename='"    . $this->getFilename()  . "', " .
                        "filesize= "    . $this->getFilesize()  . ", "  .
                        "audiocodec='"  . $this->getAudiocodec(). "', " .
                        "videocodec='"  . $this->getVideocodec(). "' "  .
               "WHERE id=$id"
        ;
        
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<pre>$sql</pre>");
        }
        return true;
    }
    function deleteById($id) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $id = $db->quoteSmart($id);
        
        $sql = "DELETE
                FROM video
                WHERE id=$id"
        ;
        
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<pre>$sql</pre>");
        }
        
        return true;
    }

    function setAll($title, $subtitle, $runtime, $country, $year, $plot, $comment,
                $rating, $added, $director, $cast, $cover, $language, $diskid,
                $filename, $filesize, $audiocodec, $videocodec) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->runtime = $runtime;
        $this->country = $country;
        $this->year = $year;
        $this->plot = nl2br($plot);
        $this->comment = nl2br($comment);
        $this->rating = $rating;
        $this->added = $added;
        $this->director = $director;
        $this->cast = $cast;
        $this->cover = $cover;
        $this->language = $language;
        $this->diskid = $diskid;
        $this->filename = $filename;
        $this->filesize = $filesize;
        $this->audiocodec = $audiocodec;
        $this->videocodec = $videocodec;
    }
    function setId($id) {
        $this->id = $id;
    }
    function getId() {
        return $this->id;
    }
    function setTitle($title) {
        $this->title = $title;
    }
    function getTitle() {
        return $this->title;
    }
    function setSubtitle($subtitle) {
        $this->subtitle = $subtitle;
    }
    function getSubtitle() {
        return $this->subtitle;
    }
    function setRuntime($runtime) {
        // folgender Trick ist notwendig, da ansonsten Fehler in der MySql-Syntax auftauchen
        $this->runtime = ($runtime == '') ? '0' : $runtime;
    }
    function getRuntime() {
        return $this->runtime;
    }
    function setCountry($country) {
        $this->country = $country;
    }
    function getCountry() {
        return $this->country;
    }
    function setYear($year) {
        // folgender Trick ist notwendig, da ansonsten Fehler in der MySql-Syntax auftauchen
        $this->year = ($year == '') ? '0000' : $year;
    }
    function getYear() {
        return $this->year;
    }
    function setPlot($plot) {
        $this->plot = $plot;
    }
    function getPlot() {
        return $this->plot;
    }
    function setComment($comment) {
        $this->comment = $comment;
    }
    function getComment() {
        return $this->comment;
    }
    function setRating($rating) {
        // folgender Trick ist notwendig, da ansonsten Fehler in der MySql-Syntax auftauchen
        $this->rating = ($rating == '') ? '10' : $rating;
    }
    function getRating() {
        return $this->rating;
    }
    function setAdded($added) {
        $this->added = $added;
    }
    function getAdded() {
        return $this->added;
    }
    function setDirector($director) {
        $this->director = $director;
    }
    function getDirector() {
        return $this->director;
    }
    function setCast($cast) {
        $this->cast = $cast;
    }
    function getCast() {
        return $this->cast;
    }
    function setCover($cover) {
        $this->cover = $cover;
    }
    function getCover() {
        return $this->cover;
    }
    function setLanguage($language) {
        $this->language = $language;
    }
    function getLanguage() {
        return $this->language;
    }
    function setDiskid($diskid) {
        $this->diskid = $diskid;
    }
    function getDiskid() {
        return $this->diskid;
    }
    function setFilename($filename) {
        $this->filename = $filename;
    }
    function getFilename() {
        return $this->filename;
    }
    function setFilesize($filesize) {
        // folgender Trick ist notwendig, da ansonsten Fehler in der MySql-Syntax auftauchen
        $this->filesize = ($filesize == '') ? '0' : $filesize;
    }
    function getFilesize() {
        return $this->filesize;
    }
    function setAudiocodec($audiocodec) {
        $this->audiocodec = $audiocodec;
    }
    function getAudiocodec() {
        return $this->audiocodec;
    }
    function setVideocodec($videocodec) {
        $this->videocodec = $videocodec;
    }
    function getVideocodec() {
        return $this->videocodec;
    }
}
