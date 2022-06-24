<?php
function naverNewsResult($query='', $sort='', $display=0, $start=0) {

    $api_url = "";

    $client_id = "AO4recUI7cI5s1XzftkT";
    $client_secret = "SvbOJUuT1O";

    // 요청 URL
    // $api_url .= "https://openapi.naver.com/v1/search/news.json"; // 뉴스 검색 결과 json
    $api_url .= "https://openapi.naver.com/v1/search/news.xml"; // 뉴스 검색 결과 xml

    // 검색어, 필수 입력
    $api_url .= "?query=".urlencode($query);

    // 정렬, sim (정확도순) or date(최신순). 없으면 default 값인 sim 으로 적용됨
    if($sort != "")
        $api_url .= "&sort=".$sort;

    // 검색 시작 위치, 없으면 기본값
    if($start > 0)
        $api_url .= "&start=".$start;

    // 한 페이지에 보여줄 개수, 없으면 기본값
    if($display > 0)
        $api_url .= "&display=".$display;

    $ch = curl_init();
    $ch_headers[] = "X-Naver-Client-Id: ".$client_id;
    $ch_headers[] = "X-Naver-Client-Secret: ".$client_secret;
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ch_headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    // echo "URL123:".$api_url;
    return $result;

}
?>
