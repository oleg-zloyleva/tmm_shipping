<?php

/**
 * @SWG\Definition(
 *      definition="ContactUs",
 *      @SWG\Property(
 *          property="FirstName",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="SecondName",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="Phone",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="Email",
 *          type="sting"
 *      ),
 *      @SWG\Property(
 *          property="Message",
 *          type="sting"
 *      )
 * )
 *
 * @SWG\Post(
 *      path="/api/email/contact_us",
 *      summary="Send contact us info to email",
 *      consumes={"application/x-www-form-urlencoded"},
 *      @SWG\Parameter(
 *          name="FirstName",
 *          in="formData",
 *          description="Enter first name",
 *          type="string",
 *          required=true,
 *          default="John",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="SecondName",
 *          in="formData",
 *          description="Enter second name",
 *          type="string",
 *          required=true,
 *          default="Dou",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Phone",
 *          in="formData",
 *          description="Enter Phone",
 *          type="string",
 *          required=true,
 *          default="380991234567",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Email",
 *          in="formData",
 *          description="Enter Email",
 *          type="string",
 *          format="email",
 *          required=true,
 *          default="John@test.com",
 *          @SWG\Schema(ref="#/definitions/ContactUs"),
 *      ),
 *      @SWG\Parameter(
 *          name="Message",
 *          in="formData",
 *          description="Enter Message",
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
