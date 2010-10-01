<div id="primary" class="widget-area">
  <ul>

    <li id="search-1" class="widget-container widget_search">
      <h3 class="widget-title"><?php echo __('Search', '', 'twentyten') ?></h3>
      <form method="get" id="searchform" action="" >
      <div>
        <label class="screen-reader-text" for="s"><?php echo __('Search for', '', 'twentyten') ?>:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="<?php echo __('Search', '', 'twentyten') ?>" />
      </div>
      </form>
    </li>

    <li id="catetories-2" class="widget-container widget_categories">
      <h3 class="widget-title"><?php echo __('Categories', '', 'twentyten') ?></h3>
      <ul>
        <li><a href=""><?php echo __('First', '', 'twentyten') ?></a></li>
        <li><a href=""><?php echo __('Second', '', 'twentyten') ?></a></li>
        <li><a href=""><?php echo __('Third', '', 'twentyten') ?></a></li>
      </ul>
    </li>

    <li id="archive-3" class="widget-container widget_categories">
      <h3 class="widget-title"><?php echo __('Archives', '', 'twentyten') ?></h3>
      <ul>
        <li><a href=""><?php echo __('June', '', 'twentyten') ?> 2010</a></li>
        <li><a href=""><?php echo __('July', '', 'twentyten') ?> 2010</a></li>
        <li><a href=""><?php echo __('August', '', 'twentyten') ?> 2010</a></li>
      </ul>
    </li>

    <li id="calendar-4" class="widget-container widget_calendar">
      <h3 class="widget-title"><?php echo __('Calendar', '', 'twentyten') ?></h3>
      <div id="calendar_wrap"><table id="wp-calendar" summary="<?php echo __('Calendar', '', 'twentyten') ?>">
        <caption><?php echo __('september', '', 'twentyten') ?> 2010</caption>
        <thead>
        <tr>
          <th scope="col" >S</th>
          <th scope="col" >M</th>
          <th scope="col" >T</th>
          <th scope="col" >W</th>
          <th scope="col" >T</th>
          <th scope="col" >F</th>
          <th scope="col" >S</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
          <td colspan="3" id="prev" class="pad">&nbsp;</td>
          <td class="pad">&nbsp;</td>
          <td colspan="3" id="next" class="pad">&nbsp;</td>
        </tr>

        </tfoot>

        <tbody>
        <tr>
          <td colspan="3" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td><td>4</td>
        </tr>
        <tr>

          <td>5</td><td><a href="">6</a></td><td>7</td><td><a href="">8</a></td><td>9</td><td>10</td><td>11</td>
        </tr>
        <tr>
          <td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td>

        </tr>
        <tr>
          <td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td>
        </tr>
        <tr>

          <td>26</td><td>27</td><td>28</td><td>29</td><td id="today">30</td>
          <td class="pad" colspan="2">&nbsp;</td>
        </tr>
        </tbody>
        </table>
      </div>
    </li>

  </ul>
</div><!-- #sidebar -->
