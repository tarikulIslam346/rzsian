<!DOCTYPE html>
<html>
<head>
  @include('user.head')
</head>
<body>
  @include('user.user-header')
<div class="container-fluid">
<div class="col-md-2 _r_left_side">
						@include('user.user-sidebar')
					</div>
  <div class="row">
    <div style="width:100%">

      <!-- title -->

      <!-- title -->

      <!-- carosel -->
      <div id="fest" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#fest" data-slide-to="0" class="active"></li>
          <li data-target="#fest" data-slide-to="1"></li>
          <li data-target="#fest" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner" style="height: 300px;">
          <div class="carousel-item active">
            <img src="img/mobile_back.jpg" alt="Los Angeles" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="img/mobile_back.jpg" alt="Los Angeles" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="img/mobile_back.jpg" alt="Los Angeles" width="1100" height="500">
          </div>
        </div>

        <a class="carousel-control-prev" href="#fest" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#fest" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      <!-- carosel -->
      
      <!-- ficture -->
      <section class="point-table">
        <div class="card card--has-table">
          <header class="card__header">
            <h4 class="sp-table-caption">Tournament Ficture 2019</h4>
          </header>
          <div class="entry home-match-mini">
            <div class="entry-data">
              <div class="match-info">
                <div class="dateTime"><span class="date">October 9, 2017</span><span class="time">7:00 pm</span></div>
                <div class="team1 ">
                  <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/club_logo5.png);"></div>
                  <div class="name"><a href="/team_page">Uventus</a></div>
                </div>
                <div class="vs">VS</div>
                <div class="team2 ">
                  <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/club_logo6.png);"></div>
                  <div class="name">Chalenger</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ficture -->

      <!-- current winning -->
      <section class="cricket">
        <div class="match-info">
          <div class="team1 new-design1">
            <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/logo1.png);"></div>
            <div class="name">Uventus</div>
          </div>
          <div class="match-score">
            <div class="data team1">
              <div class="team1 win">122/9</div>
              <div class="vs">VS</div>
              <div class="team2 loss">110/10</div>
            </div>
          </div>
          <div class="team2 new-design2">
            <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/logo2.png);"></div>
            <div class="name">Chalenger</div>
          </div>
        </div>
        <div class="match-info">
          <div class="team1 new-design1">
            <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/logo1.png);"></div>
            <div class="name">Uventus</div>
          </div>
          <div class="match-score">
            <div class="data team1">
              <div class="team1 win">122/9</div>
              <div class="vs">VS</div>
              <div class="team2 loss">110/10</div>
            </div>
          </div>
          <div class="team2 new-design2">
            <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/logo2.png);"></div>
            <div class="name">Chalenger</div>
          </div>
        </div>
        <div class="match-info">
          <div class="team1 new-design1">
            <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/logo1.png);"></div>
            <div class="name">Uventus</div>
          </div>
          <div class="match-score">
            <div class="data team1">
              <div class="team1 win">122/9</div>
              <div class="vs">VS</div>
              <div class="team2 loss">110/10</div>
            </div>
          </div>
          <div class="team2 new-design2">
            <div class="logo" style="background-image: url(http://azexo.com/sportak/wp-content/uploads/2015/10/logo2.png);"></div>
            <div class="name">Chalenger</div>
          </div>
        </div>
      </section>
      <!-- current winning -->

      <!-- point table -->
      <section class="point-table">
        <div class="card card--has-table">
          <header class="card__header">
            <h4 class="sp-table-caption">TOURNAMENT POINT TABLE 2019</h4>
          </header>
          <div class="card__content">
            <div class="table-responsive sp-table-wrapper">
              <div class="sp-scrollable-table-wrapper">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                  <table class="table table-hover table-standings sp-league-table sp-data-table sp-sortable-table sp-scrollable-table sp-paginated-table dataTable no-footer" data-sp-rows="10" id="DataTables_Table_0" role="grid">
                    <thead>
                      <tr role="row">
                        <th class="data-rank sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Pos">Pos</th>
                        <th class="data-name sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Team">Team</th>
                        <th class="data-w sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="W">Match</th>
                        <th class="data-l sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="L">W</th>
                        <th class="data-t sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="T">L</th>
                        <th class="data-pct sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Pct">D</th>
                        <th class="data-pf sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="PF">P</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="highlighted sp-row-no-0 odd" role="row">
                        <td class="data-rank sp-highlight" data-label="Pos">1</td>
                        <td class="data-name has-logo sp-highlight" data-label="Team"><span class="team-logo"><img width="107" height="128" src="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png" class="attachment-sportspress-fit-icon size-sportspress-fit-icon wp-post-image" alt="" srcset="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png 107w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-252x300.png 252w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-768x916.png 768w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-859x1024.png 859w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-27x32.png 27w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-335x400.png 335w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-470x560.png 470w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-59x70.png 59w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-84x100.png 84w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-600x715.png 600w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1.png 957w" sizes="(max-width: 107px) 100vw, 107px"></span>Alchemists</td>
                        <td class="data-w sp-highlight" data-label="W">4</td>
                        <td class="data-l sp-highlight" data-label="L">2</td>
                        <td class="data-t sp-highlight" data-label="T">1</td>
                        <td class="data-pct sp-highlight" data-label="Pct">1</td>
                        <td class="data-pf sp-highlight" data-label="PF">10</td>
                      </tr>
                      <tr class="highlighted sp-row-no-0 odd" role="row">
                        <td class="data-rank sp-highlight" data-label="Pos">2</td>
                        <td class="data-name has-logo sp-highlight" data-label="Team"><span class="team-logo"><img width="107" height="128" src="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png" class="attachment-sportspress-fit-icon size-sportspress-fit-icon wp-post-image" alt="" srcset="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png 107w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-252x300.png 252w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-768x916.png 768w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-859x1024.png 859w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-27x32.png 27w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-335x400.png 335w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-470x560.png 470w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-59x70.png 59w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-84x100.png 84w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-600x715.png 600w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1.png 957w" sizes="(max-width: 107px) 100vw, 107px"></span>Alchemists</td>
                        <td class="data-w sp-highlight" data-label="W">4</td>
                        <td class="data-l sp-highlight" data-label="L">2</td>
                        <td class="data-t sp-highlight" data-label="T">1</td>
                        <td class="data-pct sp-highlight" data-label="Pct">1</td>
                        <td class="data-pf sp-highlight" data-label="PF">10</td>
                      </tr>
                      <tr class="highlighted sp-row-no-0 odd" role="row">
                        <td class="data-rank sp-highlight" data-label="Pos">3</td>
                        <td class="data-name has-logo sp-highlight" data-label="Team"><span class="team-logo"><img width="107" height="128" src="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png" class="attachment-sportspress-fit-icon size-sportspress-fit-icon wp-post-image" alt="" srcset="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png 107w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-252x300.png 252w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-768x916.png 768w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-859x1024.png 859w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-27x32.png 27w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-335x400.png 335w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-470x560.png 470w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-59x70.png 59w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-84x100.png 84w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-600x715.png 600w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1.png 957w" sizes="(max-width: 107px) 100vw, 107px"></span>Alchemists</td>
                        <td class="data-w sp-highlight" data-label="W">4</td>
                        <td class="data-l sp-highlight" data-label="L">2</td>
                        <td class="data-t sp-highlight" data-label="T">1</td>
                        <td class="data-pct sp-highlight" data-label="Pct">1</td>
                        <td class="data-pf sp-highlight" data-label="PF">10</td>
                      </tr>
                      <tr class="highlighted sp-row-no-0 odd" role="row">
                        <td class="data-rank sp-highlight" data-label="Pos">4</td>
                        <td class="data-name has-logo sp-highlight" data-label="Team"><span class="team-logo"><img width="107" height="128" src="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png" class="attachment-sportspress-fit-icon size-sportspress-fit-icon wp-post-image" alt="" srcset="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png 107w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-252x300.png 252w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-768x916.png 768w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-859x1024.png 859w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-27x32.png 27w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-335x400.png 335w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-470x560.png 470w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-59x70.png 59w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-84x100.png 84w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-600x715.png 600w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1.png 957w" sizes="(max-width: 107px) 100vw, 107px"></span>Alchemists</td>
                        <td class="data-w sp-highlight" data-label="W">4</td>
                        <td class="data-l sp-highlight" data-label="L">2</td>
                        <td class="data-t sp-highlight" data-label="T">1</td>
                        <td class="data-pct sp-highlight" data-label="Pct">1</td>
                        <td class="data-pf sp-highlight" data-label="PF">10</td>
                      </tr>
                      <tr class="highlighted sp-row-no-0 odd" role="row">
                        <td class="data-rank sp-highlight" data-label="Pos">5</td>
                        <td class="data-name has-logo sp-highlight" data-label="Team"><span class="team-logo"><img width="107" height="128" src="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png" class="attachment-sportspress-fit-icon size-sportspress-fit-icon wp-post-image" alt="" srcset="http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-107x128.png 107w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-252x300.png 252w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-768x916.png 768w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-859x1024.png 859w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-27x32.png 27w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-335x400.png 335w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-470x560.png 470w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-59x70.png 59w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-84x100.png 84w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1-600x715.png 600w, http://alchemists-wp.dan-fisher.com/football/wp-content/uploads/2018/01/team-alchemists-1.png 957w" sizes="(max-width: 107px) 100vw, 107px"></span>Alchemists</td>
                        <td class="data-w sp-highlight" data-label="W">4</td>
                        <td class="data-l sp-highlight" data-label="L">2</td>
                        <td class="data-t sp-highlight" data-label="T">1</td>
                        <td class="data-pct sp-highlight" data-label="Pct">1</td>
                        <td class="data-pf sp-highlight" data-label="PF">10</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- point table -->


    </div>
  </div>
</div>
</body>