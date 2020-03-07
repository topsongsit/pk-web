<div class="row">
    <h2></h2>
    <ul class="dash-list">

        <div class ="col-md-6">
        <li id="dash-item--1" class="dash-item dash-item--published">
            <div class="dash-item__header">
            <h4 style="font-family: 'Prompt', sans-serif ;"><img src="/images/fight.png" width="35"> จำนวนคอร์ส</h4>
            </div>
            <div class="dash-item__content">

                <ul class="quiz-results">
                    @foreach($courseReport as $c)
                    <li style="font-family: 'Prompt', sans-serif ;">
                        <h4 style="font-family: 'Prompt', sans-serif ;">{{ $c->total }}</h4>
                        <div style="font-family: 'Prompt', sans-serif ;">{{ $c->name }}</div>
                        </li>
                    @endforeach
                 
                </ul>
            </div>
        </li>
        </div>

        <div class ="col-md-3">
        <li id="dash-item--2" class="dash-item dash-item--published">
            <div class="dash-item__header">
            <h4 style="font-family: 'Prompt', sans-serif ;"><img src="/images/box.png" width="35">จำนวนคนจอง</h4>
            </div>
            <div class="dash-item__content">  
                <ul class="quiz-results">
                   
                    <li class="quiz-results__item quiz-results__item--views" >
                        <h4 style="font-family: 'Prompt', sans-serif ;"></h4>
                            <div style="font-family: 'Prompt', sans-serif ;"></div>
                        </li>

                    <li class="quiz-results__item quiz-results__item--views" >
                    <h4 style="font-family: 'Prompt', sans-serif ;">{{$userReport->user_total}}</h4>
                        <div style="font-family: 'Prompt', sans-serif ;">คน</div>
                    </li>

                    <li class="quiz-results__item quiz-results__item--views" >
                        <h4 style="font-family: 'Prompt', sans-serif ;"></h4>
                            <div style="font-family: 'Prompt', sans-serif ;"></div>
                        </li>
                   
                </ul>
            </div>
        </li>
        </div>

        <div class ="col-md-3">
            <li id="dash-item--2" class="dash-item dash-item--published">
                <div class="dash-item__header">
                <h4 style="font-family: 'Prompt', sans-serif ;"><img src="/images/money.png" width="35"> รายได้ (ค่ามัดจำ)</h4>
                </div>
                <div class="dash-item__content">  
                    <ul class="quiz-results">

                        <li class="quiz-results__item quiz-results__item--views" >
                            <h4 style="font-family: 'Prompt', sans-serif ;"></h4>
                                <div style="font-family: 'Prompt', sans-serif ;"></div>
                            </li>

                        <li class="quiz-results__item quiz-results__item--views">
                            <h4 style="font-family: 'Prompt', sans-serif ;">{{$total}}</h4>
                            <div style="font-family: 'Prompt', sans-serif ;">บาท</div>
                        </li>
                        
                        <li class="quiz-results__item quiz-results__item--views" >
                            <h4 style="font-family: 'Prompt', sans-serif ;"></h4>
                                <div style="font-family: 'Prompt', sans-serif ;"></div>
                            </li>
                            
                    </ul>
                </div>
            </li>
            </div>
    
            <div class ="col-md-6">
                <li id="dash-item--1" class="dash-item dash-item--published">
                    <div class="dash-item__header">
                        <h4 style="font-family: 'Prompt', sans-serif ;"><img src="/images/boxing.png" width="35"> จำนวนเทรนเนอร์</h4>
                    </div>
                    <div class="dash-item__content">
                        <ul class="quiz-results">
                            @foreach($trainerReport as $t)
                            <li class="quiz-results__item quiz-results__item--views">
                                <h4  style="font-family: 'Prompt', sans-serif ;">{{ $t->total }}</h4>
                                <div style="font-family: 'Prompt', sans-serif ;">{{ $t->name }}</div>
                                </li>
                            @endforeach
                         
                        </ul>
                    </div>
                </li>
            </div>


            </div>
        </li>
    </ul>

</div>