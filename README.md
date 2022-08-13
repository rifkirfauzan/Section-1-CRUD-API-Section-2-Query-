{
	"id": "c70b4c53-9f1f-4a51-8557-233627f3cfd2",
	"name": "Section 1 - CRUD API",
	"timestamp": "2022-08-13T12:53:40.393Z",
	"collection_id": "16975703-041e2198-ae7e-471a-8828-4dfba5fb45cb",
	"folder_id": 0,
	"environment_id": "0",
	"totalPass": 0,
	"totalFail": 0,
	"results": [
		{
			"id": "30316dff-d103-41a2-9fef-955229445057",
			"name": "CREATE DATA - INVOICE",
			"url": "http://127.0.0.1:8000/api/invoice",
			"time": 724,
			"responseCode": {
				"code": 201,
				"name": "Created"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				724
			],
			"allTests": [
				{}
			]
		},
		{
			"id": "bd3bc7a3-c302-4383-b30d-b38478a286d5",
			"name": "GET DATA - INVOICE",
			"url": "http://127.0.0.1:8000/api/invoice",
			"time": 964,
			"responseCode": {
				"code": 200,
				"name": "OK"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				964
			],
			"allTests": [
				{}
			]
		},
		{
			"id": "edce51e0-90e6-480d-a974-7ea09f02c76b",
			"name": "UPDATE DATA- INVOICE",
			"url": "http://127.0.0.1:8000/api/invoice/1",
			"time": 535,
			"responseCode": {
				"code": 404,
				"name": "Not Found"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				535
			],
			"allTests": [
				{}
			]
		},
		{
			"id": "aff88cdf-5ca3-4a0b-85d5-cffa560de846",
			"name": "DELETE DATA - INVOICE",
			"url": "http://127.0.0.1:8000/api/invoice/1",
			"time": 416,
			"responseCode": {
				"code": 404,
				"name": "Not Found"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				416
			],
			"allTests": [
				{}
			]
		},
		{
			"id": "30c1e155-ed19-40b8-a8c7-8f3858337890",
			"name": "GET DATA - PRODUCT",
			"url": "http://127.0.0.1:8000/api/product",
			"time": 391,
			"responseCode": {
				"code": 200,
				"name": "OK"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				391
			],
			"allTests": [
				{}
			]
		},
		{
			"id": "11fdefcb-3f8b-4222-b095-3057a976f581",
			"name": "POST DATA - PRODUCT",
			"url": "http://127.0.0.1:8000/api/product",
			"time": 428,
			"responseCode": {
				"code": 201,
				"name": "Created"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				428
			],
			"allTests": [
				{}
			]
		},
		{
			"id": "feed0512-8f9c-4e6d-8c23-1711b6192108",
			"name": "UPDATE DATA - PRODUCT",
			"url": "http://127.0.0.1:8000/api/product/1?item_name=meja&quantity=8&total_cost_of_goods_sold=1500000&total_price_sold=900000",
			"time": 405,
			"responseCode": {
				"code": 404,
				"name": "Not Found"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				405
			],
			"allTests": [
				{}
			]
		},
		{
			"id": "a81e2742-942e-4a4d-93b0-2b5526a34528",
			"name": "DELETE DATA - PRODUCT",
			"url": "http://127.0.0.1:8000/api/product/1",
			"time": 426,
			"responseCode": {
				"code": 404,
				"name": "Not Found"
			},
			"tests": {},
			"testPassFailCounts": {},
			"times": [
				426
			],
			"allTests": [
				{}
			]
		}
	],
	"count": 1,
	"totalTime": 4289,
	"collection": {
		"requests": [
			{
				"id": "30316dff-d103-41a2-9fef-955229445057",
				"method": "POST"
			},
			{
				"id": "bd3bc7a3-c302-4383-b30d-b38478a286d5",
				"method": "GET"
			},
			{
				"id": "edce51e0-90e6-480d-a974-7ea09f02c76b",
				"method": "PUT"
			},
			{
				"id": "aff88cdf-5ca3-4a0b-85d5-cffa560de846",
				"method": "DELETE"
			},
			{
				"id": "30c1e155-ed19-40b8-a8c7-8f3858337890",
				"method": "GET"
			},
			{
				"id": "11fdefcb-3f8b-4222-b095-3057a976f581",
				"method": "POST"
			},
			{
				"id": "feed0512-8f9c-4e6d-8c23-1711b6192108",
				"method": "PUT"
			},
			{
				"id": "a81e2742-942e-4a4d-93b0-2b5526a34528",
				"method": "DELETE"
			}
		]
	}
}
