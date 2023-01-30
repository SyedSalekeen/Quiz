<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-------CSS Stylesheet----------->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="bg-white">
        <nav class="navbar navbar-expand-sm navbar-light bg-transparent container-fluid mainNav">
            <a class="navbar-brand" href="#">Sauerborn</a>
            <div>
                <span style="color: #868686;">| Management Consulting </span>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <section id="screen1" class="mt-4 maxWidth90 text-center">
            <div>
                <img src="{{ asset('quizImg.avif') }}" alt="quiz Img">
            </div>
            <div>
                <div class="form-group-custom">
                    <input type="checkbox" id="termsAccept">
                    <label for="termsAccept"></label>
                </div>
                <!-- <input type="checkbox" id="termsAccept"> -->
                <span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatum ab hic totam minus fugit.
                </span>
            </div>
            <div class="mt-4">
                <button type="button" class="nextPrevBtns" id="start-btn">Start</button>
            </div>
        </section>
        <!-----------------Quiz Window Here----------->
        <div class="pregressDiv mt-4 hide-form maxWidth90">
            <div class="d-flex justify-content-between">
                <span>
                    0%
                </span>
                <span>
                    100%
                </span>
            </div>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div>
        <section id="quiz-window" class="container-fluid mt-4 hide-form">
            <div class="quizWidthDiv maxWidth90">
                @foreach ($getQuestions as $key => $item)
                    <div class="mb-3">
                        <{{ $item->catgeory->name }}>
                    </div>
                    <div>
                        <p><label for="" id="question-id" class="mr-4">{{ $key +1 }}</label> <span
                                class="question">{{ $item->QuestionText }}</span> </span></p>
                        <div class="row ml-4">
                            @foreach ($item->options as $item2)
                            <div class="col-lg-6">
                                <p>
                                    <input type="radio" id="q1_opt1" class="mr-3" name="q1_answer">
                                    <label for="q1_opt1">{{ $item2->answer }}</label>
                                </p>
                            </div>
                            @endforeach

                            {{-- <div class="col-lg-6">
                                <p>
                                    <input type="radio" id="q1_opt2" class="mr-3" name="q1_answer">
                                    <label for="q1_opt2">Answer 2</label>
                                </p>
                            </div> --}}
                        </div>
                        {{-- <div class="row ml-4 mt-2">
                            <div class="col-lg-6">
                                <p>
                                    <input type="radio" id="q1_opt3" class="mr-3" name="q1_answer">
                                    <label for="q1_opt3">Answer 3</label>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <input type="radio" id="q1_opt4" class="mr-3" name="q1_answer">
                                    <label for="q1_opt4">Answer 4</label>
                                </p>
                            </div>
                        </div> --}}
                    </div>
                @endforeach

                {{-- <div class="mt-4">
        <p><label for="" id="question-id" class="mr-4">1</label> <span class="question">Question text .......</span> </span></p>
        <div class="row ml-4">
            <div class="col-lg-6">
                <p>
                    <input type="radio" id="q2_opt1" class="mr-3" name="q2_answer">
                    <label for="q2_opt1">Answer 1</label>
                </p>
            </div>
            <div class="col-lg-6">
                <p>
                    <input type="radio" id="q2_opt2" class="mr-3" name="q2_answer">
                    <label for="q2_opt2">Answer 2</label>
                </p>
            </div>
        </div>
        <div class="row ml-4 mt-2">
            <div class="col-lg-6">
                <p>
                    <input type="radio" id="q2_opt3" class="mr-3" name="q2_answer">
                    <label for="q2_opt3">Answer 3</label>
                </p>
            </div>
            <div class="col-lg-6">
                <p>
                    <input type="radio" id="q2_opt4" class="mr-3" name="q2_answer">
                    <label for="q2_opt4">Answer 4</label>
                </p>
            </div>
        </div>
    </div> --}}
                <div class="nextPrevBtnDiv">
                    <button type="button" class="nextPrevBtns" id="prev-btn">Previous</button>
                    <button type="button" class="nextPrevBtns" id="next-btn">Next</button>

                </div>

            </div>

        </section>
        <!-----------------Quiz Window End Here----------->

        <section id="companyScreen" class="maxWidth90 mt-60 hide-form">
            <div class="companyInpDivs">
                <div>
                    Company Name:
                </div>
                <div>
                    <input type="text" placeholder="Input" name="company_name">
                </div>
            </div>
            <div class="companyInpDivs mt-4">
                <div>
                    Industry Area:
                </div>
                <div>
                    <input type="text" placeholder="Combo" name="industry_area">
                </div>
            </div>
            <div class="mt-60">
                <div class="companyInpDivs">
                    <div></div>
                    <div>
                        <button type="button" class="nextPrevBtns" id="download-btn">Download</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="lastScreen" class="maxWidth90 mt-4 hide-form">
            <p>
                Do you wish a personal discussion on this or other transformation topics?
            </p>
            <div class="companyInpDivs">
                <div>
                    Name:
                </div>
                <div>
                    <input type="text" placeholder="Input" name="name">
                </div>
            </div>
            <div class="companyInpDivs mt-4">
                <div>
                    Function:
                </div>
                <div>
                    <input type="text" placeholder="Combo" name="function">
                </div>
            </div>
            <div class="companyInpDivs mt-4">
                <div>
                    Phone Number:
                </div>
                <div>
                    <input type="phone" placeholder="Input" name="phone">
                </div>
            </div>
            <div class="companyInpDivs mt-4">
                <div>
                    Email:
                </div>
                <div>
                    <input type="email" placeholder="Input" name="email">
                </div>
            </div>
            <div class="mt-60">
                <div class="companyInpDivs">
                    <div></div>
                    <div>
                        <button type="button" class="nextPrevBtns" id="submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('app.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
