<?php

/**
 * @SWG\Definition(
 *      definition="QuickQuote",
 *      @SWG\Property(
 *          property="FreightType",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="Weight",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="ShippingFrom",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="ShippingTo",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="Email",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="Details",
 *          type="sting"
 *      )
 * )
 *
 * @SWG\Post(
 *      path="/api/email/quick_quote",
 *      summary="Send QuickQuote to email",
 *      consumes={"application/x-www-form-urlencoded"},
 *      @SWG\Parameter(
 *          name="FreightType",
 *          in="formData",
 *          description="Enter first name",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Weight",
 *          in="formData",
 *          description="Enter Weight",
 *          type="number",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="ShippingFrom",
 *          in="formData",
 *          description="Enter ShippingFrom",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="ShippingTo",
 *          in="formData",
 *          description="Enter ShippingTo",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Email",
 *          in="formData",
 *          description="Enter Email",
 *          type="string",
 *          required=true,
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Details",
 *          in="formData",
 *          description="Enter Details",
 *          type="string",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *      ),
 *      tags={"Emails"},
 * )
 */
