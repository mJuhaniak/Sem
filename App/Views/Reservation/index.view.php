<?php /** @var Array $data */ ?>

<div class="buttons">
    <a href="?c=reservation&a=add" class="btn btn-primary" style="margin-left: 10%">Pridať rezervaciu</a>
    <a href="?c=reservation&a=edit" class="btn btn-primary">Zmeniť/Zrušiť rezerváciu</a>
</div>

<div class="planner">

    <div class="calendar">
        <div class="calendar-header">
			<span class="btn btn-prev">
				<i class="icon-angle-left"></i>
			</span>

            <span class="">September</span>

            <span class="btn btn-next">
				<i class="icon-angle-right"></i>
			</span>
        </div>
        <table>
            <thead>
            <tr>
                <th>SUN</th>
                <th>MON</th>
                <th>TUE</th>
                <th>WED</th>
                <th>THU</th>
                <th>FRI</th>
                <th>SAT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><span>30</span></td>
                <td><span>1</span></td>
                <td><span>2</span></td>
                <td><span>3</span></td>
                <td><span>4</span></td>
                <td><span>5</span></td>
                <td><span>6</span></td>
            </tr>
            <tr>
                <td><span>7</span></td>
                <td><span>8</span></td>
                <td><span>9</span></td>
                <td><span>10</span></td>
                <td><span>11</span></td>
                <td><span>12</span></td>
                <td><span>13</span></td>
            </tr>
            <tr>
                <td><span>14</span></td>
                <td><span>15</span></td>
                <td><span>16</span></td>
                <td><span>17</span></td>
                <td><span>18</span></td>
                <td><span>19</span></td>
                <td><span>20</span></td>
            </tr>
            <tr>
                <td><span>21</span></td>
                <td><span>22</span></td>
                <td><span>23</span></td>
                <td><span>24</span></td>
                <td><span>25</span></td>
                <td><span>27</span></td>
                <td><span>27</span></td>
            </tr>
            <tr>
                <td><span>28</span></td>
                <td><span>29</span></td>
                <td><span>31</span></td>
                <td><span>1</span></td>
                <td><span>2</span></td>
                <td><span>3</span></td>
                <td><span>4</span></td>
            </tr>
            </tbody>

        </table>
    </div>
</div>

<div class="planner">

    <div class="calendar">
        <div class="calendar-header">
			<span class="btn btn-prev">
				<i class="icon-angle-left"></i>
			</span>

            <span class="">Október</span>

            <span class="btn btn-next">
				<i class="icon-angle-right"></i>
			</span>
        </div>
        <table>
            <thead>
            <tr>
                <th>SUN</th>
                <th>MON</th>
                <th>TUE</th>
                <th>WED</th>
                <th>THU</th>
                <th>FRI</th>
                <th>SAT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><span>30</span></td>
                <td><span>1</span></td>
                <td><span>2</span></td>
                <td><span>3</span></td>
                <td><span>4</span></td>
                <td><span>5</span></td>
                <td><span>6</span></td>
            </tr>
            <tr>
                <td><span>7</span></td>
                <td><span>8</span></td>
                <td><span>9</span></td>
                <td><span>10</span></td>
                <td><span>11</span></td>
                <td><span>12</span></td>
                <td><span>13</span></td>
            </tr>
            <tr>
                <td><span>14</span></td>
                <td><span>15</span></td>
                <td><span>16</span></td>
                <td><span>17</span></td>
                <td><span>18</span></td>
                <td><span>19</span></td>
                <td><span>20</span></td>
            </tr>
            <tr>
                <td><span>21</span></td>
                <td><span>22</span></td>
                <td><span>23</span></td>
                <td><span>24</span></td>
                <td><span>25</span></td>
                <td><span>27</span></td>
                <td><span>27</span></td>
            </tr>
            <tr>
                <td><span>28</span></td>
                <td><span>29</span></td>
                <td><span>31</span></td>
                <td><span>1</span></td>
                <td><span>2</span></td>
                <td><span>3</span></td>
                <td><span>4</span></td>
            </tr>
            </tbody>

        </table>
    </div>
</div>

<?php
/** @var \App\Models\Reservation $reservation */
foreach ($data['reservations'] as $reservation) {
?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?=$reservation->getName()?></h5>
            <a href="?c=reservation&a=edit" class="btn btn-primary btn-sm">Edit</a>
            <a href="?c=reservation&a=delete" class="btn btn-danger btn-sm">Zmazať</a>
            <p class="card-text"><?=$reservation->getArrivalDate()?></p>
        </div>
    </div>
<?php }
?>
