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
 *          description="Enter comment",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Parameter(
 *          name="consignee[address]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[city]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[country]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[email]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[fax]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[firstName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[province]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[secondName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[state]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[tid]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="consignee[zip]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Parameter(
 *          name="descriptionOfGoods[from]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="descriptionOfGoods[to]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *
 *     **************************************************
 *
 *     @SWG\Parameter(
 *          name="notifyParty[address]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[city]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[country]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[firstName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[notifyParty]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[province]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[secondName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[state]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="notifyParty[zip]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[address]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[airWaybill]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[city]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[country]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[firstName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[province]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[secondName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[state]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="sendDocumentTo[zip]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[address]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[city]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[country]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[email]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[fax]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[firstName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[phone]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[province]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[secondName]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[state]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[tid]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="shipper[zip]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[body]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[colour]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[make]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[model]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[valueOfVehicle]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[vin]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *     @SWG\Parameter(
 *          name="vehicle[year]",
 *          in="formData",
 *          description="Enter ...",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/AirShippingOrder"),
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *      ),
 *      tags={"Emails"},
 * )
 */
