<?php
$appliances = [
    ["title" => "Select an Appliance", "qty"=>1, "watt" => null, "hours" => null, "selected" => true, "note"=>null, "solar" => null,"backup" => null ],
    ["title" => "Blender", "qty"=>1, "watt" => 500, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Vacuum", "qty"=>1, "watt" => 1000, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Coffee Machine", "qty"=>1, "watt" => 1000, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Dishwasher", "qty"=>1, "watt" => 1300, "hours" => 2, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Espresso Machine", "qty"=>1, "watt" => 800, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Freezer Upright 15 cu ft", "qty"=>1, "watt" => 55, "hours" => 24, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Freezer Chest 15 cu ft", "qty"=>1, "watt" => 45, "hours" => 24, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Fridge 20 cu ft AC", "qty"=>1, "watt" => 60, "hours" => 24, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Fridge 16 cu ft AC", "qty"=>1, "watt" => 50, "hours" => 24, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Kettle Electric", "qty"=>1, "watt" => 1200, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Microwave", "qty"=>1, "watt" => 1000, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Oven Electric", "qty"=>1, "watt" => 1200, "hours" => 1, "backup" => false, "solar" => true, "note" => "This is a very consumption heavy appliance, we recommend running this on the grid and consider gas. We also recommend not adding backup for this appliance."],
    ["title" => "Toaster", "qty"=>1, "watt" => 850, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Toaster Oven", "qty"=>1, "watt" => 1200, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Stand Mixer", "qty"=>1, "watt" => 300, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Box Fan", "qty"=>1, "watt" => 200, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Ceiling Fan", "qty"=>1, "watt" => 120, "hours" => 5, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Air Conditioner 24,000 BTU", "qty"=>1, "watt" => 7033, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Air Conditioner 10,000 BTU", "qty"=>1, "watt" => 2930, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Air Conditioner 12,000 BTU", "qty"=>1, "watt" => 1200, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Space Heater NA", "qty"=>1, "watt" => 1500, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Water Geyser", "qty"=>1, "watt" => 1500, "hours" => 5, "backup" => false, "solar" => true, "note" => "This is a consumption heavy appliance, we recommend running this on the grid or purchase a solar geyser"],
    ["title" => "Furnace Fan Blower", "qty"=>1, "watt" => 800, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Well Pump 1/3 1HP", "qty"=>1, "watt" => 750, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Clothes Dryer", "qty"=>1, "watt" => 3000, "hours" => 1, "backup" => false, "solar" => true, "note" => "This is a very consumption heavy appliance, we recommend running this during the afternoon. We also recommend not adding backup for this appliance."],
    ["title" => "Clothes Washer", "qty"=>1, "watt" => 800, "hours" => 3, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Iron", "qty"=>1, "watt" => 1200, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "DVD Player", "qty"=>1, "watt" => 15, "hours" => 3, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "TV LCD", "qty" => 2,"watt" => 150, "hours" => 4, "backup" => true, "solar" => true],
    ["title" => "Satellite Dish", "qty"=>1, "watt" => 25, "hours" => 24, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Stereo Receiver", "qty"=>1, "watt" => 450, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Video Game Console", "qty"=>1, "watt" => 150, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "CFL Bulb 40 Watt", "qty" => 4, "watt" => 11, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "CFL Bulb 60 Watt", "qty" => 4, "watt" => 18, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "CFL Bulb 75 Watt", "qty" => 4, "watt" => 20, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "CFL Bulb 100 Watt", "qty" => 4, "watt" => 30, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "Fluorescent 20 Watt", "qty"=>1, "watt" => 22, "hours" => 5, "backup" => true, "solar" => false, "note"=>null ],
    ["title" => "Fluorescent 25 Watt", "qty"=>1, "watt" => 28, "hours" => 5, "backup" => true, "solar" => false, "note"=>null ],
    ["title" => "Halogen 40 Watt", "qty" => 2, "watt" => 40, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "Incandescent 50 Watt", "qty"=>1, "watt" => 50, "hours" => 5, "backup" => true, "solar" => false, "note"=>null ],
    ["title" => "Incandescent 100 Watt", "qty"=>1, "watt" => 100, "hours" => 5, "backup" => true, "solar" => false, "note"=>null ],
    ["title" => "LED Bulb 40 Watt", "qty" => 7,  "watt" => 10, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "LED Bulb 60 Watt", "qty" => 7,  "watt" => 13, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "LED Bulb 75 watt", "qty" => 7,  "watt" => 18, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "LED Bulb 100 Watt", "qty" => 7,  "watt" => 23, "hours" => 5, "backup" => true, "solar" => false, "note"=>null],
    ["title" => "Desktop PC", "qty"=>1, "watt" => 200, "hours" => 5, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Desktop Gaming PC", "qty"=>1, "watt" => 500, "hours" => 5, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Laptop", "qty"=>1, "watt" => 100, "hours" => 5, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "LCD Monitor", "qty"=>1, "watt" => 100, "hours" => 5, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Modem", "qty"=>1, "watt" => 7, "hours" => 24, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Printer", "qty"=>1, "watt" => 100, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Router", "qty"=>1, "watt" => 7, "hours" => 24, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Phone Charger", "qty" => 2,  "watt" => 6, "hours" => 4, "backup" => true, "solar" => true],
    ["title" => "Tablet Charger", "qty"=>1, "watt" => 8, "hours" => 4, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Band Saw 14", "qty"=>1, "watt" => 1100, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Belt Sander 3", "qty"=>1, "watt" => 1000, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Chain Saw 12", "qty"=>1, "watt" => 1100, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Circular Saw medium", "qty"=>1, "watt" => 900, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Disc Sander 9", "qty"=>1, "watt" => 1200, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Drill", "qty"=>1, "watt" => 500, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Hedge Trimmer", "qty"=>1, "watt" => 450, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Weed Eater", "qty"=>1, "watt" => 500, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Clock Radio", "qty"=>1, "watt" => 7, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Curling Iron", "qty"=>1, "watt" => 150, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Dehumidifier", "qty"=>1, "watt" => 280, "hours" => 4, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Electric Shaver", "qty"=>1, "watt" => 15, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Electric Blanket", "qty"=>1, "watt" => 200, "hours" => 2, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Hair Dryer", "qty"=>1, "watt" => 1500, "hours" => 1, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Humidifier", "qty"=>1, "watt" => 200, "hours" => 2, "backup" => true, "solar" => true, "note"=>null ],
    ["title" => "Sewing Machine", "qty"=>1, "watt" => 100, "hours" => 1, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Pool Pump", "qty"=>1, "watt" => 1000, "hours" => 5, "backup" => false, "solar" => true, "note"=>null ],
    ["title" => "Irrigation Pump", "qty"=>1, "watt" => 1000, "hours" => 2, "backup" => false, "solar" => true ]
];