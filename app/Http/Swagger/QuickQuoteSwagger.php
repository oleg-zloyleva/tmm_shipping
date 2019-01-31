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
 *          default="Freight Type",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Weight",
 *          in="formData",
 *          description="Enter Weight",
 *          type="number",
 *          default="120",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="ShippingFrom",
 *          in="formData",
 *          description="Enter ShippingFrom",
 *          type="string",
 *          default="New York",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="ShippingTo",
 *          in="formData",
 *          description="Enter ShippingTo",
 *          type="string",
 *          required=true,
 *          default="Odessa",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Email",
 *          in="formData",
 *          description="Enter Email",
 *          type="string",
 *          required=true,
 *          format="email",
 *          default="John@test.com",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Details",
 *          in="formData",
 *          description="Enter Details",
 *          type="string",
 *          default="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *      ),
 *      tags={"Emails"},
 * )
 */
