# web_fonts
 Web Fonts 애드온
[ V_1.9 업데이트 ] - 2024. 05. 12
• 네이버 나눔스퀘어 네오 NanumSquareNeo 외부링크 추가
https://moonhouse.co.kr/xetip/590732
• Font Awesome 6.5.2 외부링크 UP

[ Noto Sans KR 수정 ]
기존 ebay.co.kr에서 제공하던 소스가 막혔네요, 구글로 수정해 주세요
/addons/web_fonts/web_fonts.addon.php 파일 수정

if( $addon_info->noto_use == 'enable' ) {
    Context::addCSSFile('///fonts.googleapis.com/earlyaccess/notosanskr.css');
}
 
[ V_1.8 업데이트 ] - 2022. 03. 29
• 폰터 어썸 V 6.1.1으로 버전 UP

[ V_1.7.1 업데이트 ] - 2021. 08. 29
1. sky 색상 추가해서 총10가지 - SketchBook5 MH 게시판스킨 에서 10가지 색상 필요

[ V_1.7 업데이트 ] - 2020. 11. 23
1. 폰터 어썸 V 5.15.1으로 버전 UP
2. Noto Sans Korean 폰트 추가 - 외부파일 불러오기
css파일에 { font-family: "Noto Sans Korean", "Open Sans", sans-serif; }

[ V_1.6 업데이트 ] - 2019. 12. 18
1. 폰터 어썸 V 5.12.0으로 버전 UP
2. Sexy Button
- dark와 white 색상 추가해서 총 9가지
- 버턴크기 mini를 추가해서 총 3가지

 class="sbtn_mini sbtn-white"
 class="sbtn_mini sbtn-dark"

[ V_1.5 업데이트 ] - 2018. 10. 29
1. 폰터 어썸 V 5.4.2으로 버전 UP
2. 폰터 어썸 V4 / V5 통합됨

[ V_1.4 업데이트 ]

1. Sexy Button의 button소스가 XE와의 충돌로 문제
    - button_ 부분을 sbtn_으로 수정
    - button- 부분을 sbtn- 으로 수정
    - button_small button-red 를 sbtn_small sbtn-red 이렇게 변경해야지 Sext Button에드온이 작동함.
    - Sexy Button으로 자신이 버턴을 만든적이 없으면 Pass~      

[ V_1.3.1 업데이트 ]
1. 폰터 어썸 5.0.2으로 버전업후 일부 4.7.0 아이콘들 사리지는 증상을 해결(두버전 모두 포함)  

[ V_1.3 업데이트 ]
1. 폰터 어썸 5.0.2으로 버전업
2. 나눔고딕도 내,외부 파일 불러오기로 구분하였습니다.

[ V_1.2 업데이트 ]
1. 폰터 어썸 4.7.0으로 버전업
2. 폰터 어썸 을 내부, 외부 둘 중에서 선택해서 불러올 수 있게 수정함 

Web Fonts 애드온 1.0 에 Sexy Button을 추가했습니다.
Font Awesome Icons도 4.5.0으로 버전업 되었습니다.

"Sexy Button"은 웹폰트는 아니지만 작동기능이 비슷하고 사용목적도 비슷해서 같이 합쳤습니다.
Sexy Button은 제가 붙힌 것은 아니고 소스를 얻은 곳에서 사용된 제목입니다.

[Sexy Button 사용법]
큰 버턴, 작은버턴, 총 7가지의 색상으로 구현할 수 있습니다.
그리고 Font Awesome Icons과 함께 사용하도록 만들어져 있습니다.
