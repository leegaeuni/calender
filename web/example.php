<?php
    include_once './inc/header.php';
?>
    <div>
        Javascript Date Class 사용해보기
    </div>
<?php include_once './inc/footer.php'?>
<script type="text/javascript">
    window.addEventListener("DOMContentLoaded", function () {
        // 1. 현재 날짜 구하기
        var date = new Date();                                              // 현재 날짜(로컬 기준) 가져오기
        var utc = date.getTime() + (date.getTimezoneOffset() * 60 * 1000);  // utc 표준시 도출
        var kstGap = 9 * 60 * 60 * 1000;                                    // 한국 kst 기준시간 더하기
        var today = new Date(utc + kstGap);                                 // 한국 시간으로 date 객체 만들기(오늘)

        var currentYear = today.getFullYear();      // 현재 년
        var currentMonth = today.getMonth() + 1;    // 현재 월 ( 자바스크립트에서 월은 0 부터 시작해서 현재 월을 구하려면 + 1)
        var currentDate = today.getDate();          // 현재 일
        var currentDay = today.getDay();            // 현재 요일 ( 일요일 : 0 - 토요일 : 6 )

        console.log(currentYear);                   // 2024
        console.log(currentMonth);                  // 9
        console.log(currentDate);                   // 23
        console.log(currentDay);                    // 1

        // 2. 지난달 마지막 날의 날짜와 요일 구하기
        var prevMonthLastDate = new Date(currentYear, currentMonth - 1, 0);
        // date 객체를 생성할 때 날짜를 0 으로 지정하면 지난 달의 마지막 날짜를 가진 date 가 생성된다.
        // - 1 을 해준 이유는 위에서 선언한 currentMonth 가 이미 + 1 이 더해진 상태이기 때문에 현재 월인 9월에 해당하는 8을 넣어줌

        var prevMonth = prevMonthLastDate.getMonth() + 1;
        var prevDate = prevMonthLastDate.getDate();
        var prevDay = prevMonthLastDate.getDay();

        console.log(prevMonthLastDate); // 2024
        console.log(prevMonth);         // 8
        console.log(prevDate);          // 31
        console.log(prevDay);           // 6 ( 금요일 )

        // 3. 이번 달의 마지막 날의 날짜와 요일 구하기
        var endDate = new Date(currentYear, currentMonth, 0);
        var lastDate = endDate.getDate();
        var lastDay = endDate.getDay();

        console.log(endDate);   // Mon Sep 30 2024 00:00:00 GMT+0900 (한국 표준시)
        console.log(lastDate);  // 30
        console.log(lastDay);   // 1 ( 월요일 )
    });
</script>