# coding: utf-8

"""
    OpenAPI Petstore

    This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\  # noqa: E501

    The version of the OpenAPI document: 1.0.0
    Generated by: https://openapi-generator.tech
"""


import sys
import unittest

import petstore_api
from petstore_api.model.number_with_validations import NumberWithValidations
globals()['NumberWithValidations'] = NumberWithValidations
from petstore_api.model.object_model_with_ref_props import ObjectModelWithRefProps


class TestObjectModelWithRefProps(unittest.TestCase):
    """ObjectModelWithRefProps unit test stubs"""

    def setUp(self):
        pass

    def tearDown(self):
        pass

    def testObjectModelWithRefProps(self):
        """Test ObjectModelWithRefProps"""
        # FIXME: construct object with mandatory attributes with example values
        # model = ObjectModelWithRefProps()  # noqa: E501
        pass


if __name__ == '__main__':
    unittest.main()
