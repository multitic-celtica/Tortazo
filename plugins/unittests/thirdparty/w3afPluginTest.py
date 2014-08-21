# coding=utf-8
'''
Created on 22/01/2014

#Author: Adastra.
#twitter: @jdaanial

w3afPluginTest.py

w3afPluginTest is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation version 2 of the License.

w3afPluginTest is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Tortazo; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
'''

import sys
import os.path
sys.path.append(os.path.abspath(os.path.join(os.path.dirname(__file__), "../../../")))

import os
import  sys
import unittest
from plugins.thirdparty.w3afPlugin import w3afPlugin
from config import unittests
from config import config

class w3afPluginTest(unittest.TestCase):

    def setUp(self):
        self.plugin = w3afPlugin()
        self.pluginArgs = []
        
        self.plugin.serviceConnector.setSocksProxySettings(config.socksHost, config.socksPort)
        self.plugin.setPluginArguments(self.pluginArgs)
        self.plugin.processPluginArguments()

    '''
    PLUGIN MANAGEMENT FUNCTIONS.
    '''
    def showPluginsByType(self, type):
        pass

    def showPluginTypes(self):
        pass

    def getEnabledPluginsByType(self, type):
        pass

    def getPluginTypeDescription(self, type):
        pass

    def getAllEnabledPlugins(self):
        pass

    def enablePlugin(self, pluginName, type):
        pass

    def disablePlugin(self,pluginName,type):
        pass

    def enableAllPlugins(self, pluginType):
        pass

    def disableAllPlugins(self, pluginType):
        pass

    def getPluginOptions(self, pluginType, pluginName):
        pass

    def setPluginOptions(self, pluginType, pluginName, pluginSettingType, pluginSetting, pluginSettingValue):
        pass

    def getPluginStatus(self, pluginType, pluginName):
        pass

    '''
    ATTACK MANAGEMENT FUNCTIONS.
    '''
    def setTarget(self, url):
        pass

    def setTargetDeepWeb(self, url):
        pass

    def startAttack(self):
        pass

    '''
    MISC CONFIGURATION FUNCTIONS
    '''
    def listMiscConfigs(self):
        pass

    def setMiscConfig(self,setting,value):
        pass

    '''
    PROFILE MANAGEMENT FUNCTIONS
    '''
    def listProfiles(self):
        pass

    def useProfile(self,profileName):
        pass

    def createProfileWithCurrentConfig(self, profileName, profileDescription):
        pass

    def modifyProfileWithCurrentConfig(self, profileName, profileDescription):
        pass
    
    def removeProfile(self,profileName):
        pass

    '''
    SHELLS MANAGEMENT FUNCTIONS
    '''
    def listShells(self):
        pass

    def executeCommand(self,shellId, command,params):
        pass

    '''
    VULNS AND INFO MANAGEMENT FUNCTIONS
    '''
    def listAttackPlugins(self):
        pass

    def listInfos(self):
        pass

    def listVulnerabilities(self):
        pass

    def exploitAllVulns(self,pluginExploit):
        pass

    def exploitVuln(self,pluginExploit,vulnId):
        pass

if __name__ == '__main__':
    unittest.main()