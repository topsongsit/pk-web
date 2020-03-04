
<div class="row">
    <h2></h2>
    <ul class="dash-list">
        <li id="dash-item--1" class="dash-item dash-item--published">
            <div class="dash-item__header">
                <h3 class="dash-item__title"><a href="#">จำนวนคอร์ส</a></h3>
            </div>
            <div class="dash-item__content">

                <ul class="quiz-results">
                    @foreach($courseReport as $c)
                    <li class="quiz-results__item quiz-results__item--views">
                        <span class="quiz-results__number quiz-results__number--views">{{ $c->total }}</span>
                        <div class="quiz-results__label">{{ $c->name }}</div>
                        </li>
                    @endforeach
                 
                </ul>
            </div>
        </li>
        <li id="dash-item--2" class="dash-item dash-item--published">
            <div class="dash-item__header">
                <h3 class="dash-item__title"><a href="#">จำนวนคนจอง</a></h3>

            </div>
            <div class="dash-item__content">
               
                <ul class="quiz-results">
                    <li class="quiz-results__item quiz-results__item--views">
                        <span class="quiz-results__number quiz-results__number--views"></span>
                        <div class="quiz-results__label"></div>
                    </li>
                    <li class="quiz-results__item quiz-results__item--views">
                    <span class="quiz-results__number quiz-results__number--views">{{$userReport->user_total}}</span>
                        <div class="quiz-results__label">คน</div>
                    </li>
                    <li class="quiz-results__item quiz-results__item--views">
                        <span class="quiz-results__number quiz-results__number--views"></span>
                        <div class="quiz-results__label"></div>
                    </li>
                </ul>
              
            </div>
        </li>
        <li id="dash-item--3" class="dash-item dash-item--draft">
            <div class="dash-item__header">
                <h3 class="dash-item__title"><a href="#">รายได้</a></h3>



            </div>
            <div class="dash-item__content">


                <ul class="quiz-results">
                    <li class="quiz-results__item quiz-results__item--views">
                        <span class="quiz-results__number quiz-results__number--views"></span>
                        <div class="quiz-results__label"></div>
                    </li>
                    <li class="quiz-results__item quiz-results__item--views">
                        <span class="">{{$total}}</span>
                            <div class="quiz-results__label">บาท</div>
                        </li>
                    <li class="quiz-results__item quiz-results__item--views">
                        <span class="quiz-results__number quiz-results__number--views"></span>
                        <div class="quiz-results__label"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>

</div>