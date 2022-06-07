fetch("https://api.weatherapi.com/v1/forecast.json?key=4d8f8c4117894ba2bbd41806222505&q=Thredbo&aqi=no&days=4")
.then((response) => response.json())
.then(data => {
  currentWeather(data);
  day2(data);
  day3(data);

});

function currentWeather(data) {
  console.log(data);
    let currentTemp = data.current.temp_c;
    let currentIcon = data.current.condition.icon;
    let currentConditions = data.current.condition.text;

    let currentIconHTML = "<img src="+currentIcon+" type='image/png'/>";
    let currentTempHTML = "Current: "+currentTemp+"°C";

    const currentTempID = document.getElementById("currentTemp");
    const currentConditionID = document.getElementById("currentCondition");
    const currentIconID = document.getElementById("currentIcon");

  currentIconID.innerHTML = currentIconHTML;
  currentTempID.innerHTML = currentTempHTML;
  currentConditionID.innerHTML = currentConditions;
}

function day2(data) {
  let forecast = data.forecast.forecastday[1].day;
  let day2MinTemp = forecast.mintemp_c;
  let day2MaxTemp = forecast.maxtemp_c;
  let day2Icon = forecast.condition.icon;
  let day2Condition = forecast.condition.text;

  let day2IconHTML = "<img src="+day2Icon+" type='image/png'/>";
  let day2MinTempHTML = "Min: "+day2MinTemp+"°C";
  let day2MaxTempHTML = "Max: "+day2MaxTemp+"°C";

  const day2MaxTempID = document.getElementById("day2MaxTemp");
  const day2MinTempID = document.getElementById("day2MinTemp");
  const day2ConditionID = document.getElementById("day2Condition");
  const day2IconID = document.getElementById("day2Icon");

  day2IconID.innerHTML = day2IconHTML;
  day2MinTempID.innerHTML = day2MinTempHTML;
  day2MaxTempID.innerHTML = day2MaxTempHTML;
  day2ConditionID.innerHTML = day2Condition;
}

function day3(data) {
  let forecast = data.forecast.forecastday[2].day;
  let day3MinTemp = forecast.mintemp_c;
  let day3MaxTemp = forecast.maxtemp_c;
  let day3Icon = forecast.condition.icon;
  let day3Condition = forecast.condition.text;

  let day3IconHTML = "<img src="+day3Icon+" type='image/png'/>";
  let day3MinTempHTML = "Min: "+day3MinTemp+"°C";
  let day3MaxTempHTML = "Max: "+day3MaxTemp+"°C";

  const day3MaxTempID = document.getElementById("day3MaxTemp");
  const day3MinTempID = document.getElementById("day3MinTemp");
  const day3ConditionID = document.getElementById("day3Condition");
  const day3IconID = document.getElementById("day3Icon");

  day3IconID.innerHTML = day3IconHTML;
  day3MinTempID.innerHTML = day3MinTempHTML;
  day3MaxTempID.innerHTML = day3MaxTempHTML;
  day3ConditionID.innerHTML = day3Condition;
}
