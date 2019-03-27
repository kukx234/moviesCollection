<?php

class Year
{
    public function yearGenerator()
    {
        for($i = 1900; $i <= date('Y'); $i++){
            echo "<option value=".$i.">$i</option>";
        }
    }
}