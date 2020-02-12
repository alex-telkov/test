<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function someClientFeed(Request $request)
    {
        return response('({
            "inplay-evs": [{
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 79268,
                "competitionName": "The Majors Qualifier (DOTA2)(Best Of 3)",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3855575,
                    "parentEventId": 3855575,
                    "eventDate": 1581516000000.0,
                    "odds": {
                        "ml": ["o4464356870", "0.00", "o4464356871", "0.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464356861": "10",
                            "p4464356860": "90"
                        },
                        "ou": {
                            "p4464356863": "100"
                        },
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3)",
                        "HomeID": "403432",
                        "AwayID": "247076",
                        "HomeShort": "beastcoast",
                        "AwayShort": "paiN Gaming",
                        "Home": "beastcoast",
                        "Away": "paiN Gaming",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }, {
                    "eventId": 3855590,
                    "parentEventId": 3855590,
                    "eventDate": 1581523200000.0,
                    "odds": {
                        "ml": ["o4464358327", "0.00", "o4464358328", "0.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464778756": "80",
                            "p4464778755": "20",
                            "p4464358298": "38",
                            "p4464358297": "62"
                        },
                        "ou": {
                            "p4464358306": "40",
                            "p4464358299": "60"
                        },
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3)",
                        "HomeID": "461145",
                        "AwayID": "479332",
                        "HomeShort": "Fighting PandaS",
                        "AwayShort": "business associates",
                        "Home": "Fighting PandaS",
                        "Away": "business associates",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 85171,
                "competitionName": "The Majors Qualifier (DOTA2)(Best Of 3) - Kills",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3857429,
                    "parentEventId": 3855575,
                    "eventDate": 1581516000000.0,
                    "odds": {
                        "ah": ["h4466122994", "-3.5", "h4466122995", "+3.5", "o4466122994", "1.88", "o4466122995", "1.88"],
                        "ou": ["h4466122996", "48.5", "h4466122997", "48.5", "o4466122996", "1.83", "o4466122997", "1.93"],
                        "oe": ["o4466123010", "1.90", "o4466123011", "1.90"],
                        "ml": ["o4466123004", "1.64", "o4466123005", "2.20"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 3 Kills",
                        "SpecialEventTypeId": "1114",
                        "HomeID": "408487",
                        "AwayID": "416400",
                        "HomeShort": "beastcoast - Game 3 Kills",
                        "AwayShort": "paiN Gaming - Game 3 Kills",
                        "Home": "beastcoast - Game 3 Kills",
                        "Away": "paiN Gaming - Game 3 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }, {
                    "eventId": 3855594,
                    "parentEventId": 3855590,
                    "eventDate": 1581523200000.0,
                    "odds": {
                        "ah": ["h4464358513", "-2.5", "h4464358514", "+2.5", "o4464358513", "1.88", "o4464358514", "1.88"],
                        "ou": ["h4464358517", "48.5", "h4464358518", "48.5", "o4464358517", "1.83", "o4464358518", "1.93"],
                        "oe": ["o4464358525", "1.90", "o4464358526", "1.90"],
                        "ml": ["o4464358521", "1.82", "o4464358522", "1.94"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464358509": "100"
                        },
                        "ou": {
                            "p4464358511": "100"
                        },
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 2 Kills",
                        "SpecialEventTypeId": "1111",
                        "HomeID": "461150",
                        "AwayID": "479336",
                        "HomeShort": "Fighting PandaS - Game 2 Kills",
                        "AwayShort": "business associates - Game 2 Kills",
                        "Home": "Fighting PandaS - Game 2 Kills",
                        "Away": "business associates - Game 2 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 79269,
                "competitionName": "The Majors Qualifier (DOTA2)(Best Of 3) - Specials",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3857428,
                    "parentEventId": 3855575,
                    "eventDate": 1581516000000.0,
                    "odds": {
                        "ml": ["o4466122944", "1.64", "o4466122945", "2.25"]
                    },
                    "newOdds": [{
                        "n": "Game 3 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["beastcoast", "o4466122946", "1.95"],
                            ["paiN Gaming", "o4466122947", "1.85"]
                        ],
                        "mo": 102
                    }, {
                        "n": "Game 3 - First to Reach 10 Kills",
                        "mn": "FirsttoReach10Kills",
                        "o": [
                            ["beastcoast", "o4466122955", "2.05"],
                            ["paiN Gaming", "o4466122956", "1.74"]
                        ],
                        "mo": 111
                    }, {
                        "n": "Game 3 - Duration (35 Mins)",
                        "mn": "Duration35Minutes",
                        "o": [
                            ["35:00 or Less", "o4466122961", "1.80"],
                            ["35:01 or More", "o4466122962", "1.90"]
                        ],
                        "mo": 117
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 3",
                        "SpecialEventTypeId": "1001",
                        "HomeID": "403435",
                        "AwayID": "329395",
                        "HomeShort": "beastcoast - Game 3",
                        "AwayShort": "paiN Gaming - Game 3",
                        "Home": "beastcoast - Game 3",
                        "Away": "paiN Gaming - Game 3",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }, {
                    "eventId": 3855593,
                    "parentEventId": 3855590,
                    "eventDate": 1581523200000.0,
                    "odds": {
                        "ml": ["o4464358472", "1.84", "o4464358473", "1.96"]
                    },
                    "newOdds": [{
                        "n": "Game 2 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["Fighting PandaS", "o4464358476", "1.90"],
                            ["business associates", "o4464358477", "1.90"]
                        ],
                        "mo": 62
                    }, {
                        "n": "Game 2 - First to Reach 10 Kills",
                        "mn": "FirsttoReach10Kills",
                        "o": [
                            ["Fighting PandaS", "o4464358484", "1.94"],
                            ["business associates", "o4464358485", "1.82"]
                        ],
                        "mo": 71
                    }, {
                        "n": "Game 2 - Duration (35 Mins)",
                        "mn": "Duration35Minutes",
                        "o": [
                            ["35:00 or Less", "o4464358488", "2.15"],
                            ["35:01 or More", "o4464358489", "1.62"]
                        ],
                        "mo": 77
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "461147",
                        "AwayID": "479334",
                        "HomeShort": "Fighting PandaS - Game 2",
                        "AwayShort": "business associates - Game 2",
                        "Home": "Fighting PandaS - Game 2",
                        "Away": "business associates - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 64268,
                "competitionName": "World Electronic Sports Games (CS:GO)(Best Of 3)",
                "competitionNo": 4,
                "events": [{
                    "eventId": 3856308,
                    "parentEventId": 3856308,
                    "eventDate": 1581516000000.0,
                    "odds": {
                        "ml": ["o4464822934", "0.00", "o4464822935", "0.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464822928": "100"
                        },
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "World Electronic Sports Games (CS:GO)(Best Of 3)",
                        "HomeID": "305910",
                        "AwayID": "329398",
                        "HomeShort": "Spirit CS",
                        "AwayShort": "pro100",
                        "Home": "Spirit",
                        "Away": "pro100",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 70912,
                "competitionName": "World Electronic Sports Games (CS:GO)(Best Of 3)",
                "competitionNo": 4,
                "events": [{
                    "eventId": 3857427,
                    "parentEventId": 3856308,
                    "eventDate": 1581516000000.0,
                    "odds": {
                        "oe": ["o4466115329", "2.00", "o4466115330", "1.80"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "World Electronic Sports Games (CS:GO)(Best Of 3)",
                        "SpecialEventName": "Game 3",
                        "SpecialEventTypeId": "1001",
                        "HomeID": "311155",
                        "AwayID": "338528",
                        "HomeShort": "Spirit CS - Game 3",
                        "AwayShort": "pro100 - Game 3",
                        "Home": "Spirit - Game 3",
                        "Away": "pro100 - Game 3",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 82048,
                "competitionName": "Six Invitational (Rainbow Six)(Best Of 3)",
                "competitionNo": 3,
                "events": [{
                    "eventId": 3855648,
                    "parentEventId": 3855648,
                    "eventDate": 1581519600000.0,
                    "odds": {
                        "ml": ["o4464518762", "0.00", "o4464518763", "0.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464518753": "100"
                        },
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3)",
                        "HomeID": "214566",
                        "AwayID": "214553",
                        "HomeShort": "Team SoloMid",
                        "AwayShort": "Fnatic",
                        "Home": "Team SoloMid",
                        "Away": "Fnatic",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1",
                        "HomeScore": "0",
                        "AwayScore": "0",
                        "HomeRedcard": "0",
                        "AwayRedcard": "0",
                        "InplayTimer": ""
                    }
                }]
            }],
            "further-evs": [{
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 50948,
                "competitionName": "ESEA EU (CS:GO)(1 Map)",
                "competitionNo": 4,
                "events": [{
                    "eventId": 3855352,
                    "parentEventId": 3855352,
                    "eventDate": 1581526800000.0,
                    "odds": {
                        "ah": ["h4463228410", "-2.5", "h4463228411", "+2.5", "o4463228410", "1.95", "o4463228411", "1.85"],
                        "ou": ["h4463228423", "26.5", "h4463228424", "26.5", "o4463228423", "1.88", "o4463228424", "1.92"],
                        "oe": ["o4463228439", "2.00", "o4463228440", "1.80"],
                        "ml": ["o4463228406", "1.68", "o4463228407", "2.12"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4463228410": "100"
                        },
                        "ou": {
                            "p4463228423": "100"
                        },
                        "oe": {}
                    },
                    "data": {
                        "Competition": "ESEA EU (CS:GO)(1 Map)",
                        "HomeID": "349225",
                        "AwayID": "243649",
                        "HomeShort": "Nordavind",
                        "AwayShort": "HellRaisers",
                        "Home": "Nordavind",
                        "Away": "HellRaisers",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 82048,
                "competitionName": "Six Invitational (Rainbow Six)(Best Of 3)",
                "competitionNo": 3,
                "events": [{
                    "eventId": 3855665,
                    "parentEventId": 3855665,
                    "eventDate": 1581530400000.0,
                    "odds": {
                        "ah": ["h4464519436", "-1.5", "h4464519437", "+1.5", "o4464519436", "3.12", "o4464519437", "1.27", "h4464848847", "+1.5", "h4464848848", "-1.5", "o4464848847", "1.24", "o4464848848", "3.27"],
                        "ml": ["o4464519444", "1.99", "o4464519445", "1.81"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3)",
                        "HomeID": "384345",
                        "AwayID": "374937",
                        "HomeShort": "DarkZero",
                        "AwayShort": "Spacestation",
                        "Home": "DarkZero",
                        "Away": "Spacestation",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }, {
                    "eventId": 3855641,
                    "parentEventId": 3855641,
                    "eventDate": 1581541200000.0,
                    "odds": {
                        "ah": ["h4464517787", "-1.5", "h4464517788", "+1.5", "o4464517787", "2.44", "o4464517788", "1.49"],
                        "ml": ["o4464517795", "1.48", "o4464517796", "2.65"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3)",
                        "HomeID": "259676",
                        "AwayID": "218625",
                        "HomeShort": "G2 eSports",
                        "AwayShort": "Ninjas in Pyjamas",
                        "Home": "G2",
                        "Away": "Ninjas in Pyjamas",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "2"
                    }
                }, {
                    "eventId": 3855645,
                    "parentEventId": 3855645,
                    "eventDate": 1581552000000.0,
                    "odds": {
                        "ah": ["h4464518557", "-1.5", "h4464518558", "+1.5", "o4464518557", "2.44", "o4464518558", "1.49"],
                        "ml": ["o4464518565", "1.47", "o4464518566", "2.70"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3)",
                        "HomeID": "449565",
                        "AwayID": "356530",
                        "HomeShort": "BDS Esport",
                        "AwayShort": "mibr",
                        "Home": "BDS Esport",
                        "Away": "mibr",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "2"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 95371,
                "competitionName": "Six Invitational (Rainbow Six)(Best Of 3) - Specials",
                "competitionNo": 3,
                "events": [{
                    "eventId": 3855666,
                    "parentEventId": 3855665,
                    "eventDate": 1581530400000.0,
                    "odds": {
                        "ml": ["o4464519458", "1.95", "o4464519459", "1.85"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "464553",
                        "AwayID": "374938",
                        "HomeShort": "DarkZero - Game 1",
                        "AwayShort": "Spacestation - Game 1",
                        "Home": "DarkZero - Game 1",
                        "Away": "Spacestation - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }, {
                    "eventId": 3855667,
                    "parentEventId": 3855665,
                    "eventDate": 1581530400000.0,
                    "odds": {
                        "ml": ["o4464519464", "1.95", "o4464519465", "1.85"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "464554",
                        "AwayID": "374939",
                        "HomeShort": "DarkZero - Game 2",
                        "AwayShort": "Spacestation - Game 2",
                        "Home": "DarkZero - Game 2",
                        "Away": "Spacestation - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }, {
                    "eventId": 3855642,
                    "parentEventId": 3855641,
                    "eventDate": 1581541200000.0,
                    "odds": {
                        "ml": ["o4464517801", "1.59", "o4464517802", "2.35"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "281791",
                        "AwayID": "279840",
                        "HomeShort": "G2 eSports - Game 1",
                        "AwayShort": "Ninjas in Pyjamas - Game 1",
                        "Home": "G2 eSports - Game 1",
                        "Away": "Ninjas in Pyjamas - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }, {
                    "eventId": 3855643,
                    "parentEventId": 3855641,
                    "eventDate": 1581541200000.0,
                    "odds": {
                        "ml": ["o4464517865", "1.59", "o4464517866", "2.35"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "281792",
                        "AwayID": "279841",
                        "HomeShort": "G2 eSports - Game 2",
                        "AwayShort": "Ninjas in Pyjamas - Game 2",
                        "Home": "G2 eSports - Game 2",
                        "Away": "Ninjas in Pyjamas - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }, {
                    "eventId": 3855646,
                    "parentEventId": 3855645,
                    "eventDate": 1581552000000.0,
                    "odds": {
                        "ml": ["o4464518573", "1.59", "o4464518574", "2.35"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "471605",
                        "AwayID": "357083",
                        "HomeShort": "BDS Esport - Game 1",
                        "AwayShort": "mibr - Game 1",
                        "Home": "BDS Esport - Game 1",
                        "Away": "mibr - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }, {
                    "eventId": 3855647,
                    "parentEventId": 3855645,
                    "eventDate": 1581552000000.0,
                    "odds": {
                        "ml": ["o4464518585", "1.59", "o4464518586", "2.35"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Six Invitational (Rainbow Six)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "471606",
                        "AwayID": "357084",
                        "HomeShort": "BDS Esport - Game 2",
                        "AwayShort": "mibr - Game 2",
                        "Home": "BDS Esport - Game 2",
                        "Away": "mibr - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 79268,
                "competitionName": "The Majors Qualifier (DOTA2)(Best Of 3)",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3855584,
                    "parentEventId": 3855584,
                    "eventDate": 1581534000000.0,
                    "odds": {
                        "ah": ["h4464357498", "-1.5", "h4464357499", "+1.5", "o4464357498", "1.46", "o4464357499", "2.51"],
                        "ml": ["o4464357515", "1.09", "o4464357516", "7.50"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464357499": "42",
                            "p4464357498": "58"
                        },
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3)",
                        "HomeID": "197213",
                        "AwayID": "390392",
                        "HomeShort": "Evil Geniuses",
                        "AwayShort": "Chaos Esports Club",
                        "Home": "Evil Geniuses",
                        "Away": "Chaos Esports Club",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "2"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 85171,
                "competitionName": "The Majors Qualifier (DOTA2)(Best Of 3) - Kills",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3855587,
                    "parentEventId": 3855584,
                    "eventDate": 1581534000000.0,
                    "odds": {
                        "ah": ["h4464357602", "-11.5", "h4464357603", "+11.5", "o4464357602", "1.77", "o4464357603", "1.99"],
                        "ou": ["h4464357604", "42.5", "h4464357605", "42.5", "o4464357604", "1.83", "o4464357605", "1.93"],
                        "oe": ["o4464357616", "1.90", "o4464357617", "1.90"],
                        "ml": ["o4464357610", "1.23", "o4464357611", "4.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464357602": "100"
                        },
                        "ou": {
                            "p4464357605": "33",
                            "p4464357604": "67"
                        },
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 1 Kills",
                        "SpecialEventTypeId": "1108",
                        "HomeID": "406713",
                        "AwayID": "430732",
                        "HomeShort": "Evil Geniuses - Game 1 Kills",
                        "AwayShort": "Chaos Esports Club - Game 1 Kills",
                        "Home": "Evil Geniuses - Game 1 Kills",
                        "Away": "Chaos Esports Club - Game 1 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }, {
                    "eventId": 3855589,
                    "parentEventId": 3855584,
                    "eventDate": 1581534000000.0,
                    "odds": {
                        "ah": ["h4464357744", "-11.5", "h4464357745", "+11.5", "o4464357744", "1.83", "o4464357745", "1.93"],
                        "ou": ["h4464357746", "42.5", "h4464357747", "42.5", "o4464357746", "1.83", "o4464357747", "1.93"],
                        "oe": ["o4464357763", "1.90", "o4464357764", "1.90"],
                        "ml": ["o4464357752", "1.23", "o4464357753", "4.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4464357744": "100"
                        },
                        "ou": {
                            "p4464357747": "50",
                            "p4464357746": "50"
                        },
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 2 Kills",
                        "SpecialEventTypeId": "1111",
                        "HomeID": "406714",
                        "AwayID": "430733",
                        "HomeShort": "Evil Geniuses - Game 2 Kills",
                        "AwayShort": "Chaos Esports Club - Game 2 Kills",
                        "Home": "Evil Geniuses - Game 2 Kills",
                        "Away": "Chaos Esports Club - Game 2 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 79269,
                "competitionName": "The Majors Qualifier (DOTA2)(Best Of 3) - Specials",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3855585,
                    "parentEventId": 3855584,
                    "eventDate": 1581534000000.0,
                    "odds": {
                        "ml": ["o4464357527", "1.23", "o4464357528", "4.20"]
                    },
                    "newOdds": [{
                        "n": "Game 1 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["Evil Geniuses", "o4464357533", "1.73"],
                            ["Chaos Esports Club", "o4464357534", "2.10"]
                        ],
                        "mo": 22
                    }, {
                        "n": "Game 1 - First to Reach 10 Kills",
                        "mn": "FirsttoReach10Kills",
                        "o": [
                            ["Evil Geniuses", "o4464357537", "1.41"],
                            ["Chaos Esports Club", "o4464357538", "2.85"]
                        ],
                        "mo": 31
                    }, {
                        "n": "Game 1 - Duration (35 Mins)",
                        "mn": "Duration35Minutes",
                        "o": [
                            ["35:00 or Less", "o4464357557", "1.62"],
                            ["35:01 or More", "o4464357558", "2.15"]
                        ],
                        "mo": 37
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "339904",
                        "AwayID": "390395",
                        "HomeShort": "Evil Geniuses - Game 1",
                        "AwayShort": "Chaos Esports Club - Game 1",
                        "Home": "Evil Geniuses - Game 1",
                        "Away": "Chaos Esports Club - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }, {
                    "eventId": 3855588,
                    "parentEventId": 3855584,
                    "eventDate": 1581534000000.0,
                    "odds": {
                        "ml": ["o4464357624", "1.23", "o4464357625", "4.20"]
                    },
                    "newOdds": [{
                        "n": "Game 2 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["Evil Geniuses", "o4464357630", "1.73"],
                            ["Chaos Esports Club", "o4464357631", "2.10"]
                        ],
                        "mo": 62
                    }, {
                        "n": "Game 2 - First to Reach 10 Kills",
                        "mn": "FirsttoReach10Kills",
                        "o": [
                            ["Evil Geniuses", "o4464357634", "1.41"],
                            ["Chaos Esports Club", "o4464357635", "2.85"]
                        ],
                        "mo": 71
                    }, {
                        "n": "Game 2 - Duration (35 Mins)",
                        "mn": "Duration35Minutes",
                        "o": [
                            ["35:00 or Less", "o4464357638", "1.62"],
                            ["35:01 or More", "o4464357639", "2.15"]
                        ],
                        "mo": 77
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "The Majors Qualifier (DOTA2)(Best Of 3) - Specials",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "339905",
                        "AwayID": "390396",
                        "HomeShort": "Evil Geniuses - Game 2",
                        "AwayShort": "Chaos Esports Club - Game 2",
                        "Home": "Evil Geniuses - Game 2",
                        "Away": "Chaos Esports Club - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 97448,
                "competitionName": "CLUTCH (CS:GO)(Best Of 2)",
                "competitionNo": 4,
                "events": [{
                    "eventId": 3855353,
                    "parentEventId": 3855353,
                    "eventDate": 1581542100000.0,
                    "odds": {
                        "ah": ["h4463242714", "-1.5", "h4463242715", "+1.5", "o4463242714", "1.77", "o4463242715", "2.03"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4463242714": "100"
                        },
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "CLUTCH (CS:GO)(Best Of 2)",
                        "HomeID": "300923",
                        "AwayID": "428425",
                        "HomeShort": "Red Canids",
                        "AwayShort": "Keyd",
                        "Home": "Red Canids",
                        "Away": "Keyd",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }, {
                    "eventId": 3855356,
                    "parentEventId": 3855356,
                    "eventDate": 1581550200000.0,
                    "odds": {
                        "ah": ["h4463244377", "-1.5", "h4463244378", "+1.5", "o4463244377", "1.61", "o4463244378", "2.23"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "CLUTCH (CS:GO)(Best Of 2)",
                        "HomeID": "225834",
                        "AwayID": "479342",
                        "HomeShort": "Isurus Gaming",
                        "AwayShort": "Alma eS",
                        "Home": "Isurus Gaming",
                        "Away": "Alma",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "1"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 97449,
                "competitionName": "CLUTCH (CS:GO)(Best Of 2) - Specials",
                "competitionNo": 4,
                "events": [{
                    "eventId": 3855354,
                    "parentEventId": 3855353,
                    "eventDate": 1581542100000.0,
                    "odds": {
                        "ah": ["h4463242855", "-4.5", "h4463242856", "+4.5", "o4463242855", "1.97", "o4463242856", "1.83"],
                        "ou": ["h4463242857", "26.5", "h4463242858", "26.5", "o4463242857", "2.06", "o4463242858", "1.74"],
                        "oe": ["o4463242889", "2.00", "o4463242890", "1.80"],
                        "ml": ["o4463242863", "1.39", "o4463242872", "3.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "CLUTCH (CS:GO)(Best Of 2) - Specials",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "448564",
                        "AwayID": "428426",
                        "HomeShort": "Red Canids - Game 1",
                        "AwayShort": "Keyd - Game 1",
                        "Home": "Red Canids - Game 1",
                        "Away": "Keyd - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }, {
                    "eventId": 3855355,
                    "parentEventId": 3855353,
                    "eventDate": 1581542100000.0,
                    "odds": {
                        "ah": ["h4463242943", "-4.5", "h4463242944", "+4.5", "o4463242943", "2.02", "o4463242944", "1.78"],
                        "ou": ["h4463242945", "26.5", "h4463242946", "26.5", "o4463242945", "2.06", "o4463242946", "1.74"],
                        "oe": ["o4463242982", "2.00", "o4463242983", "1.80"],
                        "ml": ["o4463242967", "1.39", "o4463242968", "3.00"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "CLUTCH (CS:GO)(Best Of 2) - Specials",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "448565",
                        "AwayID": "428427",
                        "HomeShort": "Red Canids - Game 2",
                        "AwayShort": "Keyd - Game 2",
                        "Home": "Red Canids - Game 2",
                        "Away": "Keyd - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }, {
                    "eventId": 3855357,
                    "parentEventId": 3855356,
                    "eventDate": 1581550200000.0,
                    "odds": {
                        "ah": ["h4463244635", "-5.5", "h4463244636", "+5.5", "o4463244635", "1.99", "o4463244636", "1.81"],
                        "ou": ["h4463244637", "25.5", "h4463244638", "25.5", "o4463244637", "1.90", "o4463244638", "1.90"],
                        "oe": ["o4463244670", "2.00", "o4463244671", "1.80"],
                        "ml": ["o4463244643", "1.30", "o4463244644", "3.50"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "CLUTCH (CS:GO)(Best Of 2) - Specials",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "343764",
                        "AwayID": "479343",
                        "HomeShort": "Isurus Gaming - Game 1",
                        "AwayShort": "Alma eS - Game 1",
                        "Home": "Isurus Gaming - Game 1",
                        "Away": "Alma eS - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }, {
                    "eventId": 3855358,
                    "parentEventId": 3855356,
                    "eventDate": 1581550200000.0,
                    "odds": {
                        "ah": ["h4463244822", "-5.5", "h4463244823", "+5.5", "o4463244822", "1.99", "o4463244823", "1.81"],
                        "ou": ["h4463244830", "25.5", "h4463244831", "25.5", "o4463244830", "1.90", "o4463244831", "1.90"],
                        "oe": ["o4463244848", "2.00", "o4463244849", "1.80"],
                        "ml": ["o4463244842", "1.30", "o4463244843", "3.50"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4463244822": "100"
                        },
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "CLUTCH (CS:GO)(Best Of 2) - Specials",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "343765",
                        "AwayID": "479344",
                        "HomeShort": "Isurus Gaming - Game 2",
                        "AwayShort": "Alma eS - Game 2",
                        "Home": "Isurus Gaming - Game 2",
                        "Away": "Alma eS - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 74980,
                "competitionName": "ESEA NA (CS:GO)(1 Map)",
                "competitionNo": 4,
                "events": [{
                    "eventId": 3855359,
                    "parentEventId": 3855359,
                    "eventDate": 1581555600000.0,
                    "odds": {
                        "ah": ["h4463253072", "-5.5", "h4463253095", "+5.5", "o4463253072", "1.96", "o4463253095", "1.84"],
                        "ou": ["h4463253152", "26.5", "h4463253153", "26.5", "o4463253152", "2.09", "o4463253153", "1.71"],
                        "oe": ["o4463253164", "2.00", "o4463253165", "1.80"],
                        "ml": ["o4463253158", "1.28", "o4463253159", "3.70"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "ESEA NA (CS:GO)(1 Map)",
                        "HomeID": "308800",
                        "AwayID": "374627",
                        "HomeShort": "eUnited",
                        "AwayShort": "Divine eS",
                        "Home": "eUnited",
                        "Away": "Divine eS",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }, {
                    "eventId": 3855360,
                    "parentEventId": 3855360,
                    "eventDate": 1581559200000.0,
                    "odds": {
                        "ah": ["h4463337644", "-6.5", "h4463337645", "+6.5", "o4463337644", "1.93", "o4463337645", "1.87"],
                        "ou": ["h4463337646", "25.5", "h4463337647", "25.5", "o4463337646", "2.00", "o4463337647", "1.80"],
                        "oe": ["o4463337664", "2.00", "o4463337665", "1.80"],
                        "ml": ["o4463337652", "1.18", "o4463337653", "4.90"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {
                            "p4463337664": "100"
                        }
                    },
                    "data": {
                        "Competition": "ESEA NA (CS:GO)(1 Map)",
                        "HomeID": "311274",
                        "AwayID": "475005",
                        "HomeShort": "CHAOS",
                        "AwayShort": "Station7",
                        "Home": "CHAOS",
                        "Away": "Station7",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "4"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 53569,
                "competitionName": "Champions Korea (LoL)(Best Of 3)",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3848035,
                    "parentEventId": 3848035,
                    "eventDate": 1581580800000.0,
                    "odds": {
                        "ah": ["h4450473302", "+1.5", "h4450473303", "-1.5", "o4450473302", "1.96", "o4450473303", "1.84"],
                        "ml": ["o4450473306", "4.10", "o4450473307", "1.24"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4450473302": "100"
                        },
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3)",
                        "HomeID": "228096",
                        "AwayID": "218413",
                        "HomeShort": "KT Rolster",
                        "AwayShort": "T1",
                        "Home": "KT Rolster",
                        "Away": "T1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "2"
                    }
                }, {
                    "eventId": 3848037,
                    "parentEventId": 3848037,
                    "eventDate": 1581591600000.0,
                    "odds": {
                        "ah": ["h4450473324", "-1.5", "h4450473325", "+1.5", "o4450473324", "2.28", "o4450473325", "1.58"],
                        "ou": ["h4450473326", "2.5", "h4450473327", "2.5", "o4450473326", "1.99", "o4450473327", "1.81"],
                        "ml": ["o4450473330", "1.43", "o4450473331", "2.85"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {
                            "p4450473325": "100"
                        },
                        "ou": {
                            "p4450473326": "100"
                        },
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3)",
                        "HomeID": "471634",
                        "AwayID": "254617",
                        "HomeShort": "DragonX",
                        "AwayShort": "Hanwha Life Esports",
                        "Home": "DragonX",
                        "Away": "Hanwha Life Esports",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 85919,
                "competitionName": "Champions Korea (LoL)(Best Of 3) - Kills",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3848038,
                    "parentEventId": 3848035,
                    "eventDate": 1581580800000.0,
                    "odds": {
                        "ah": ["h4450473392", "+6.5", "h4450473393", "-6.5", "o4450473392", "1.93", "o4450473393", "1.83"],
                        "ou": ["h4450473394", "22.5", "h4450473395", "22.5", "o4450473394", "1.88", "o4450473395", "1.88"],
                        "oe": ["o4450473402", "1.90", "o4450473403", "1.90"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 1 Kills",
                        "SpecialEventTypeId": "1108",
                        "HomeID": "417131",
                        "AwayID": "417137",
                        "HomeShort": "KT Rolster - Game 1 Kills",
                        "AwayShort": "T1 - Game 1 Kills",
                        "Home": "KT Rolster - Game 1 Kills",
                        "Away": "T1 - Game 1 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }, {
                    "eventId": 3848040,
                    "parentEventId": 3848035,
                    "eventDate": 1581580800000.0,
                    "odds": {
                        "ah": ["h4450473482", "+6.5", "h4450473483", "-6.5", "o4450473482", "1.93", "o4450473483", "1.83"],
                        "ou": ["h4450473484", "22.5", "h4450473485", "22.5", "o4450473484", "1.88", "o4450473485", "1.88"],
                        "oe": ["o4450473492", "1.90", "o4450473493", "1.90"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 2 Kills",
                        "SpecialEventTypeId": "1111",
                        "HomeID": "417132",
                        "AwayID": "417138",
                        "HomeShort": "KT Rolster - Game 2 Kills",
                        "AwayShort": "T1 - Game 2 Kills",
                        "Home": "KT Rolster - Game 2 Kills",
                        "Away": "T1 - Game 2 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }, {
                    "eventId": 3848042,
                    "parentEventId": 3848037,
                    "eventDate": 1581591600000.0,
                    "odds": {
                        "ah": ["h4450473544", "-5.5", "h4450473545", "+5.5", "o4450473544", "1.87", "o4450473545", "1.89"],
                        "ou": ["h4450473546", "23.5", "h4450473547", "23.5", "o4450473546", "1.88", "o4450473547", "1.88"],
                        "oe": ["o4450473556", "1.90", "o4450473557", "1.90"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 1 Kills",
                        "SpecialEventTypeId": "1108",
                        "HomeID": "471640",
                        "AwayID": "417122",
                        "HomeShort": "DragonX - Game 1 Kills",
                        "AwayShort": "Hanwha Life Esports - Game 1 Kills",
                        "Home": "DragonX - Game 1 Kills",
                        "Away": "Hanwha Life Esports - Game 1 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }, {
                    "eventId": 3848045,
                    "parentEventId": 3848037,
                    "eventDate": 1581591600000.0,
                    "odds": {
                        "ah": ["h4450473614", "-5.5", "h4450473615", "+5.5", "o4450473614", "1.93", "o4450473615", "1.83"],
                        "ou": ["h4450473620", "23.5", "h4450473621", "23.5", "o4450473620", "1.88", "o4450473621", "1.88"],
                        "oe": ["o4450473636", "1.90", "o4450473637", "1.90"]
                    },
                    "newOdds": [],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3) - Kills",
                        "SpecialEventName": "Game 2 Kills",
                        "SpecialEventTypeId": "1111",
                        "HomeID": "471641",
                        "AwayID": "417123",
                        "HomeShort": "DragonX - Game 2 Kills",
                        "AwayShort": "Hanwha Life Esports - Game 2 Kills",
                        "Home": "DragonX - Game 2 Kills",
                        "Away": "Hanwha Life Esports - Game 2 Kills",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 72009,
                "competitionName": "Champions Korea (LoL)(Best Of 3)",
                "competitionNo": 2,
                "events": [{
                    "eventId": 3848036,
                    "parentEventId": 3848035,
                    "eventDate": 1581580800000.0,
                    "odds": {
                        "ml": ["o4450473340", "3.00", "o4450473341", "1.39"]
                    },
                    "newOdds": [{
                        "n": "Game 1 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["KT Rolster", "o4450473346", "2.10"],
                            ["T1", "o4450473347", "1.73"]
                        ],
                        "mo": 22
                    }, {
                        "n": "Game 1 - First to Reach 5 Kills",
                        "mn": "FirsttoReach5Kills",
                        "o": [
                            ["KT Rolster", "o4450473350", "2.50"],
                            ["T1", "o4450473351", "1.51"]
                        ],
                        "mo": 30
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3)",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "340031",
                        "AwayID": "340060",
                        "HomeShort": "KT Rolster - Game 1",
                        "AwayShort": "T1 - Game 1",
                        "Home": "KT Rolster - Game 1",
                        "Away": "SK Telecom T1 - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }, {
                    "eventId": 3848039,
                    "parentEventId": 3848035,
                    "eventDate": 1581580800000.0,
                    "odds": {
                        "ml": ["o4450473442", "3.00", "o4450473443", "1.39"]
                    },
                    "newOdds": [{
                        "n": "Game 2 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["KT Rolster", "o4450473450", "2.10"],
                            ["T1", "o4450473451", "1.73"]
                        ],
                        "mo": 62
                    }, {
                        "n": "Game 2 - First to Reach 5 Kills",
                        "mn": "FirsttoReach5Kills",
                        "o": [
                            ["KT Rolster", "o4450473454", "2.50"],
                            ["T1", "o4450473455", "1.51"]
                        ],
                        "mo": 70
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3)",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "340032",
                        "AwayID": "340061",
                        "HomeShort": "KT Rolster - Game 2",
                        "AwayShort": "T1 - Game 2",
                        "Home": "KT Rolster - Game 2",
                        "Away": "SK Telecom T1 - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }, {
                    "eventId": 3848041,
                    "parentEventId": 3848037,
                    "eventDate": 1581591600000.0,
                    "odds": {
                        "ml": ["o4450473502", "1.55", "o4450473503", "2.45"]
                    },
                    "newOdds": [{
                        "n": "Game 1 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["DragonX", "o4450473510", "1.90"],
                            ["Hanwha Life Esports", "o4450473511", "1.90"]
                        ],
                        "mo": 22
                    }, {
                        "n": "Game 1 - First to Reach 5 Kills",
                        "mn": "FirsttoReach5Kills",
                        "o": [
                            ["DragonX", "o4450473516", "1.70"],
                            ["Hanwha Life Esports", "o4450473517", "2.10"]
                        ],
                        "mo": 30
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3)",
                        "SpecialEventName": "Game 1",
                        "SpecialEventTypeId": "59",
                        "HomeID": "471635",
                        "AwayID": "340487",
                        "HomeShort": "DragonX - Game 1",
                        "AwayShort": "Hanwha Life Esports - Game 1",
                        "Home": "DragonX - Game 1",
                        "Away": "Hanwha Life Esports - Game 1",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }, {
                    "eventId": 3848043,
                    "parentEventId": 3848037,
                    "eventDate": 1581591600000.0,
                    "odds": {
                        "ml": ["o4450473566", "1.55", "o4450473567", "2.45"]
                    },
                    "newOdds": [{
                        "n": "Game 2 - 1st Blood",
                        "mn": "_1stBlood",
                        "o": [
                            ["DragonX", "o4450473572", "1.90"],
                            ["Hanwha Life Esports", "o4450473573", "1.90"]
                        ],
                        "mo": 62
                    }, {
                        "n": "Game 2 - First to Reach 5 Kills",
                        "mn": "FirsttoReach5Kills",
                        "o": [
                            ["DragonX", "o4450473576", "1.70"],
                            ["Hanwha Life Esports", "o4450473577", "2.10"]
                        ],
                        "mo": 70
                    }],
                    "percentage": {
                        "1x2": {},
                        "ah": {},
                        "ou": {},
                        "oe": {}
                    },
                    "data": {
                        "Competition": "Champions Korea (LoL)(Best Of 3)",
                        "SpecialEventName": "Game 2",
                        "SpecialEventTypeId": "60",
                        "HomeID": "471636",
                        "AwayID": "340488",
                        "HomeShort": "DragonX - Game 2",
                        "AwayShort": "Hanwha Life Esports - Game 2",
                        "Home": "DragonX - Game 2",
                        "Away": "Hanwha Life Esports - Game 2",
                        "GroundType": "",
                        "Period": "",
                        "MoreBetCounter": "3"
                    }
                }]
            }],
            "outright-evs": [{
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 96150,
                "competitionName": "BLAST Premier Series (Outright)",
                "outrights": [{
                    "eventId": 3813622,
                    "eventDate": 1581879600000.0,
                    "displayDate": "16 Feb 2020",
                    "displayTime": "19:00",
                    "eventName": "BLAST Premier Series LAN Finals (CS:GO)",
                    "newOdds": [{
                        "n": "BLAST Premier Series (Outright)",
                        "mn": "Group C Winner",
                        "mid": 54007764,
                        "o": [
                            ["Evil Geniuses", "o4383850287", "2.50"],
                            ["100 Thieves", "o4383850285", "3.20"],
                            ["G2", "o4383850286", "3.50"],
                            ["OG", "o4383850288", "8.00"]
                        ],
                        "mo": 400
                    }]
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 38246,
                "competitionName": "DreamHack (CS:GO)",
                "competitionNo": 1,
                "outrights": [{
                    "eventId": 3855605,
                    "eventDate": 1582509600000.0,
                    "displayDate": "24 Feb 2020",
                    "displayTime": "02:00",
                    "eventName": "Dreamhack LAN Finals (CS:GO)",
                    "newOdds": [{
                        "n": "DreamHack (CS:GO)",
                        "mn": "Winner",
                        "mid": 54764631,
                        "o": [
                            ["Complexity Gaming", "o4464400895", "4.50"],
                            ["FURIA eS", "o4464400893", "5.00"],
                            ["mibr", "o4464400898", "5.00"],
                            ["forZe", "o4464400892", "6.00"],
                            ["North", "o4464400894", "6.00"],
                            ["ENCE", "o4464400896", "7.00"],
                            ["Gen.G Esports", "o4464400897", "13.0"],
                            ["Endpoint", "o4464400891", "34.0"]
                        ],
                        "mo": 400
                    }]
                }]
            }, {
                "sportsId": 23,
                "sportsAlias": "E_Sports",
                "competitionId": 43700,
                "competitionName": "Intel Extreme Masters (CS:GO)",
                "outrights": [{
                    "eventId": 3855110,
                    "eventDate": 1583096400000.0,
                    "displayDate": "01 Mar 2020",
                    "displayTime": "21:00",
                    "eventName": "Intel Extreme Masters LAN Finals (CS:GO)",
                    "newOdds": [{
                        "n": "Intel Extreme Masters (CS:GO)",
                        "mn": "Winner",
                        "mid": 54755840,
                        "o": [
                            ["Astralis", "o4461699612", "3.25"],
                            ["Mousesports", "o4461699624", "6.00"],
                            ["FaZe Clan", "o4461699614", "7.00"],
                            ["Team Liquid", "o4461699622", "7.00"],
                            ["Vitality", "o4461699619", "8.00"],
                            ["Natus Vincere", "o4461699616", "10.0"],
                            ["Evil Geniuses", "o4461699621", "11.0"],
                            ["100 Thieves", "o4461699620", "17.0"],
                            ["Fnatic", "o4461699615", "17.0"],
                            ["Mad Lions", "o4461699623", "21.0"],
                            ["G2", "o4461709315", "21.0"],
                            ["Cloud9", "o4461699613", "34.0"],
                            ["Ninjas in Pyjamas", "o4461699617", "34.0"],
                            ["Renegades", "o4461699618", "34.0"],
                            ["Virtus Pro", "o4461699626", "67.0"],
                            ["Vici Gaming", "o4461699625", "251"]
                        ],
                        "mo": 400
                    }]
                }]
            }],
            "sc": "ADGAJI"
        });');
    }
}
