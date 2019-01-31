<?php

/**
 * @SWG\Definition(
 *      definition="AirShippingOrder",
 *      @SWG\Property(
 *          property="comment[comment]",
 *          type="sting"
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Property(
 *          property="consignee[address]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[city]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[country]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[email]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[fax]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[firstName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[province]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[secondName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[state]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[tid]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="consignee[zip]",
 *          type="sting"
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Property(
 *          property="descriptionOfGoods[from]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="descriptionOfGoods[to]",
 *          type="sting"
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Property(
 *          property="notifyParty[address]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[city]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[country]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[firstName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[notifyParty]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[province]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[secondName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[state]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="notifyParty[zip]",
 *          type="sting"
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Property(
 *          property="sendDocumentTo[address]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[airWaybill]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[city]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[country]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[firstName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[province]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[secondName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[state]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="sendDocumentTo[zip]",
 *          type="sting"
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Property(
 *          property="shipper[address]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[city]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[country]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[email]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[fax]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[firstName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[phone]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[province]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[secondName]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[state]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[tid]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="shipper[zip]",
 *          type="sting"
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Property(
 *          property="vehicle[body]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="vehicle[colour]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="vehicle[make]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="vehicle[model]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="vehicle[valueOfVehicle]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="vehicle[vin]",
 *          type="sting"
 *      ),
 *     @SWG\Property(
 *          property="vehicle[year]",
 *          type="sting"
 *      )
 * )
 *
 * @SWG\Post(
 *      path="/api/email/air_shipping_order",
 *      summary="Send QuickQuote to email",
 *      consumes={"application/x-www-form-urlencoded"},
 *
 *      @SWG\Parameter(
 *          name="comment[comment]",
 *          in="formData",
 *          description="Enter your comment",
 *          type="string",
 *          required=true,
 *          default="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Parameter(
 *          name="consignee[address]",
 *          in="formData",
 *          description="Enter consignee->address",
 *          type="string",
 *          default="Pobedy str. 54",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[city]",
 *          in="formData",
 *          description="Enter consignee->city",
 *          type="string",
 *          required=true,
 *          default="Odessa",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[country]",
 *          in="formData",
 *          description="Enter consignee->country",
 *          type="string",
 *          required=true,
 *          default="Ukraine",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[email]",
 *          in="formData",
 *          description="Enter consignee->email",
 *          type="string",
 *          required=true,
 *          format="email",
 *          default="John@test.com",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[fax]",
 *          in="formData",
 *          description="Enter consignee->fax",
 *          type="string",
 *          default="+380991234567",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[firstName]",
 *          in="formData",
 *          description="Enter consignee->firstName",
 *          type="string",
 *          required=true,
 *          default="John",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[province]",
 *          in="formData",
 *          description="Enter consignee->province",
 *          type="string",
 *          default="Odesskaya",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[secondName]",
 *          in="formData",
 *          description="Enter consignee->secondName",
 *          type="string",
 *          required=true,
 *          default="Dou",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[state]",
 *          in="formData",
 *          description="Enter consignee->state",
 *          type="string",
 *          default="Odessa state",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[tid]",
 *          in="formData",
 *          description="Enter consignee->tid",
 *          type="number",
 *          required=true,
 *          default="Odessa state",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[zip]",
 *          in="formData",
 *          description="Enter consignee->zip",
 *          type="number",
 *          default="69000",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Parameter(
 *          name="descriptionOfGoods[from]",
 *          in="formData",
 *          description="Enter descriptionOfGoods->from",
 *          type="string",
 *          required=true,
 *          default="Some description from",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="descriptionOfGoods[to]",
 *          in="formData",
 *          description="Enter descriptionOfGoods->to",
 *          type="string",
 *          required=true,
 *          default="Some description to",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Parameter(
 *          name="notifyParty[address]",
 *          in="formData",
 *          description="Enter notifyParty->address",
 *          type="string",
 *          default="notify: Novaya str.",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[city]",
 *          in="formData",
 *          description="Enter notifyParty->city",
 *          type="string",
 *          required=true,
 *          default="notify: Kiev",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[country]",
 *          in="formData",
 *          description="Enter notifyParty->country",
 *          type="string",
 *          required=true,
 *          default="notify: country",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[firstName]",
 *          in="formData",
 *          description="Enter notifyParty->firstName",
 *          type="string",
 *          required=true,
 *          default="notify: Ben",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[notifyParty]",
 *          in="formData",
 *          description="Enter notifyParty->notifyParty",
 *          type="string",
 *          default="notify: notifyParty",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[province]",
 *          in="formData",
 *          description="Enter notifyParty->province",
 *          type="string",
 *          default="notify: Kievskaya",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[secondName]",
 *          in="formData",
 *          description="Enter notifyParty->secondName",
 *          type="string",
 *          required=true,
 *          default="notify: Gun",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[state]",
 *          in="formData",
 *          description="Enter notifyParty->state",
 *          type="string",
 *          default="notify: Kiev state",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[zip]",
 *          in="formData",
 *          description="Enter notifyParty->zip",
 *          type="string",
 *          default="65023",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[address]",
 *          in="formData",
 *          description="Enter sendDocumentTo",
 *          type="string",
 *          default="Levaya str.",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[airWaybill]",
 *          in="formData",
 *          description="Enter sendDocumentTo->airWaybill",
 *          type="string",
 *          default="air Way bill",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[city]",
 *          in="formData",
 *          description="Enter sendDocumentTo->city",
 *          type="string",
 *          required=true,
 *          default="Kherson",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[country]",
 *          in="formData",
 *          description="Enter sendDocumentTo->country",
 *          type="string",
 *          required=true,
 *          default="Kherson",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[firstName]",
 *          in="formData",
 *          description="Enter sendDocumentTo->firstName",
 *          type="string",
 *          required=true,
 *          default="Ivan",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[province]",
 *          in="formData",
 *          description="Enter sendDocumentTo->province",
 *          type="string",
 *          default="Kherson province",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[secondName]",
 *          in="formData",
 *          description="Enter sendDocumentTo->secondName",
 *          type="string",
 *          required=true,
 *          default="Ivanov",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[state]",
 *          in="formData",
 *          description="Enter sendDocumentTo->state",
 *          type="string",
 *          default="Kherson state",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[zip]",
 *          in="formData",
 *          description="Enter sendDocumentTo->zip",
 *          type="string",
 *          default="25078",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[address]",
 *          in="formData",
 *          description="Enter shipper->address",
 *          type="string",
 *          default="Uglovaya str.",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[city]",
 *          in="formData",
 *          description="Enter shipper->city",
 *          type="string",
 *          required=true,
 *          default="Lviv",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[country]",
 *          in="formData",
 *          description="Enter shipper->country",
 *          type="string",
 *          required=true,
 *          default="Ukraine",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[email]",
 *          in="formData",
 *          description="Enter shipper->email",
 *          type="string",
 *          required=true,
 *          default="Ivan@gamail.com",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[fax]",
 *          in="formData",
 *          description="Enter shipper->fax",
 *          type="string",
 *          default="+38951234567",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[firstName]",
 *          in="formData",
 *          description="Enter shipper->firstName",
 *          type="string",
 *          required=true,
 *          default="Fedor",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[phone]",
 *          in="formData",
 *          description="Enter shipper->phone",
 *          type="string",
 *          required=true,
 *          default="+38951234533",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[province]",
 *          in="formData",
 *          description="Enter shipper->province",
 *          type="string",
 *          default="Lviv province",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[secondName]",
 *          in="formData",
 *          description="Enter shipper->secondName",
 *          type="string",
 *          required=true,
 *          default="Bond",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[state]",
 *          in="formData",
 *          description="Enter shipper->state",
 *          type="string",
 *          default="Lviv state",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[tid]",
 *          in="formData",
 *          description="Enter shipper->tid",
 *          type="string",
 *          required=true,
 *          default="1111222233334444",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[zip]",
 *          in="formData",
 *          description="Enter shipper->zip",
 *          type="string",
 *          default="440444",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[body]",
 *          in="formData",
 *          description="Enter vehicle->body",
 *          type="string",
 *          default="sedan",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[colour]",
 *          in="formData",
 *          description="Enter vehicle->colour",
 *          type="string",
 *          default="red",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[make]",
 *          in="formData",
 *          description="Enter vehicle->make",
 *          type="string",
 *          default="Toyota",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[model]",
 *          in="formData",
 *          description="Enter vehicle->model",
 *          type="string",
 *          default="Hilux",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[valueOfVehicle]",
 *          in="formData",
 *          description="Enter vehicle->valueOfVehicle",
 *          type="string",
 *          default="3",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[vin]",
 *          in="formData",
 *          description="Enter vehicle->vin",
 *          type="string",
 *          default="JTE4D12D45623453233",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[year]",
 *          in="formData",
 *          description="Enter vehicle->year",
 *          type="string",
 *          default="2018",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *      ),
 *      tags={"Emails"},
 * )
 */
