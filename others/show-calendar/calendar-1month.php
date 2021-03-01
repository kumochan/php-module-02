<?php

    $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $current_month = date('n');
    $current_year = date('Y');
    $current_day = date('d');
    $month = 0;


    echo '<table class="calendar">';
    echo '<th colspan="4" class="year">' . $current_year . '</th>';

    // Table of months

    echo '</table>';


    for ($row = 1; $row <= 3; $row++) {
      echo '<tr>';
      for ($column = 1; $column <= 4; $column++) {
        echo '<td class="month">';

        $month++;

        // Month Cell

        echo '</td>';
      }
      echo '</tr>';
    }

    $first_day_in_month = date('w', mktime(0, 0, 0, $month, 1, $current_year));
    $month_days = date('t', mktime(0, 0, 0, $month, 1, $current_year));

    // in PHP, Sunday is the first day in the week with number zero (0)
    // to make our calendar works we will change this to (7)
    if ($first_day_in_month == 0) {
      $first_day_in_month = 7;
    }


    echo '<table>';
    echo '<th colspan="7">' . $months[$month - 1] . '</th>';
    echo '<tr class="days"><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td>';
    echo '<td class="sat">Sa</td><td class="sun">Su</td></tr>';
    echo '<tr>';

    for ($i = 1; $i < $first_day_in_month; $i++) {
      echo '<td> </td>';
    }


    for ($day = 1; $day <= $month_days; $day++) {
      $pos = ($day + $first_day_in_month - 1) % 7;
      $class = (($day == $current_day) && ($month == $current_month)) ? 'today' : 'day';
      $class .= ($pos == 6) ? ' sat' : '';
      $class .= ($pos == 0) ? ' sun' : '';

      echo '<td class="' . $class . '">' . $day . '</td>';
      if ($pos == 0) echo '</tr><tr>';
    }

    echo '</tr>';
    echo '</table>';
